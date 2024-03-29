<?php

/**
 * SendingServerSparkPost class.
 *
 * Abstract class for SparkPost sending server
 *
 * LICENSE: This product includes software developed at
 * the MailChamp Co., Ltd. (http://qubolt.com/).
 *
 * @category   MVC Model
 *
 * @author     N. Pham <n.pham@qubolt.com>
 * @author     L. Pham <l.pham@qubolt.com>
 * @copyright  MailChamp Co., Ltd
 * @license    MailChamp Co., Ltd
 *
 * @version    1.0
 *
 * @link       http://qubolt.com
 *
 * @description: This is the Skeleton for developing a sending server which is used to send email through a 3rd service
 * the expected usage is:
 *
 *     $server = new SendingServerSparkPostApi()
 *     $server->sendMessage( $message );
 */

namespace MailChamp\Model;

use MailChamp\Library\Log as MailLog;
use MailChamp\Library\StringHelper;
use SparkPost\SparkPost;
use GuzzleHttp\Client;
use Http\Adapter\Guzzle6\Client as GuzzleAdapter;

class SendingServerSparkPost extends SendingServer
{
    const WEBHOOK = 'sparkpost';
    const HOSTS = [
        ['text' => 'SparkPost Global', 'value' => 'api.sparkpost.com'],
        ['text' => 'SparkPost EU', 'value' => 'api.eu.sparkpost.com'],
    ];

    protected $table = 'sending_servers';
    public static $client = null;
    public static $isWebhookSetup = false;

    // Inherit class to implementation of this method
    public function send($message, $params = array())
    {
        // for overwriting
    }

    /**
     * Get authenticated to Mailgun and return the session object.
     *
     * @return mixed
     */
    public function client()
    {
        if (!self::$client) {
            $httpClient = new GuzzleAdapter(new Client());
            $sparky = new SparkPost($httpClient, ['key' => $this->api_key, 'host' => $this->host]);
            $sparky->setOptions(['async' => false]);
            self::$client = $sparky;
        }

        return self::$client;
    }

    /**
     * Setup webhooks for processing bounce and feedback loop.
     *
     * @return mixed
     */
    public function setupWebhook()
    {
        if (self::$isWebhookSetup) {
            return true;
        }

        MailLog::info('Cleaning up SparkPost webhook');
        $webhookUrl = StringHelper::joinUrl(Setting::get('url_delivery_handler'), self::WEBHOOK);

        MailLog::info('Setting up SparkPost webhook');
        try {
            $this->cleanupWebhook($webhookUrl);
            $response = $this->client()->request('POST', 'webhooks', [
                'name' => 'Mail Champ Webhook',
                'target' => $webhookUrl,
                'auth_type' => 'none',
                'events' => [
                    'bounce',
                    'spam_complaint',
                    'out_of_band',
                    'policy_rejection',
                ],
            ]);

            if ($response->getStatusCode() == 200) {
                self::$isWebhookSetup = true;
                MailLog::info('SparkPost webhook set!');
            } else {
                // throw the exception with body string
                throw new \Exception($response->getBody(true));
            }
        } catch (\Exception $e) {
            // just ignore the error
            self::$isWebhookSetup = true;
            MailLog::warning('Cannot setup Spark Post webhook. Error: '.$e->getMessage());
        }
    }

    /**
     * Clean up any existing webhook for this webapp.
     */
    public function cleanupWebhook($webhookUrl)
    {
        $response = $this->client()->request('GET', 'webhooks', []);

        if ($response->getStatusCode() == 200) {
            $webhooks = $response->getBody();
            foreach ($webhooks['results'] as $webhook) {
                if ($webhook['target'] == $webhookUrl) {
                    $this->deleteWebhook($webhook['id']);
                }
            }
        } else {
            // throw the exception with body string
            throw new \Exception($response->getBody(true));
        }
    }

    /**
     * Delete a particular webhook.
     */
    public function deleteWebhook($id)
    {
        MailLog::info("Deleting SparkPost webhook {$id}");
        $response = $this->client()->request('DELETE', "webhooks/{$id}", []);

        // 204 --> DELETE OK
        if ($response->getStatusCode() == 204) {
            MailLog::info("SparkPost webhook {$id} deleted");
        } else {
            var_dump($response->getStatusCode());
            // throw the exception with body string
            throw new \Exception($response->getBody(true));
        }
    }

    /**
     * Hanle delivery notification requested through the webhook.
     */
    public static function handleNotification()
    {
        MailLog::info(file_get_contents('php://input'));
        $messages = json_decode(file_get_contents('php://input'), true);

        if ($messages == [['msys' => []]]) {
            MailLog::info('Webhook verified OK');
            // return 200, it just does not work
            return response('Webhook verified OK', 200);
        }

        foreach ($messages as $message) {
            if (!array_key_exists('message_event', $message['msys'])) {
                MailLog::warning('Unknown notification type');
                continue;

                // Sample of 'unknown notification type'
                // [{"msys":{"track_event":{"rcpt_meta":{},"event_id":"84559159220532969","transmission_id":"30515955248391749","template_id":"template_30515955248391749","template_version":"0","rcpt_tags":[],"user_agent":"Mozilla/5.0 (Windows NT 5.1; rv:11.0) Gecko Firefox/11.0 (via ggpht.com GoogleImageProxy)","delv_method":"esmtp","rcpt_to":"louisitvn@gmail.com","type":"open","sending_ip":"35.160.182.156","message_id":"0001a195d458e5216b36","customer_id":"9187","ip_address":"66.249.84.222","timestamp":"1490326971","ip_pool":"shared","msg_size":"8956","routing_domain":"gmail.com","subject":"Welcome to test Mail List","num_retries":"0","msg_from":"msprvs1=172565Byap5t2=bounces-9187@spmailt.com","queue_time":"394","friendly_from":"test@sender.com","geo_ip":{"country":"US","region":"CA","city":"Mountain View","latitude":37.4192,"longitude":-122.0574},"raw_rcpt_to":"test@example.com"}}}]
            }

            $type = $message['msys']['message_event']['type'];
            switch ($type) {
                case 'bounce':
                case 'out_of_band':
                case 'policy_rejection':
                    self::handleBounce($message);
                    break;
                case 'spam_complaint':
                    self::handleSpamComplaint($message);
                    break;
                default:
                    MailLog::warning('Unknown notification type: '.$type);
            }
        }
    }

    /**
     * Process bounce notification.
     */
    private static function handleBounce($message)
    {
        $bounceLog = new BounceLog();

        // use Elastic Email transaction id as runtime-message-id
        try {
            $bounceLog->runtime_message_id = $message['msys']['message_event']['rcpt_meta']['runtime_message_id'];
        } catch (\Exception $e) {
            MailLog::warning('Cannot retrive runtime_message_id');

            return response('', 200);
        }

        $trackingLog = TrackingLog::where('runtime_message_id', $bounceLog->runtime_message_id)->first();
        if ($trackingLog) {
            $bounceLog->message_id = $trackingLog->message_id;
        }

        $bounceLog->bounce_type = BounceLog::HARD;
        $bounceLog->raw = json_encode($message);
        $bounceLog->save();
        MailLog::info('Bounce recorded for message '.$bounceLog->runtime_message_id);

        // add subscriber's email to blacklist
        $subscriber = $bounceLog->findSubscriberByRuntimeMessageId();
        if ($subscriber) {
            $subscriber->sendToBlacklist($bounceLog->raw);
            MailLog::info('Email added to blacklist');
        } else {
            MailLog::warning('Cannot find associated tracking log for message '.$bounceLog->runtime_message_id);
        }
    }

    /**
     * Process feedbac notification.
     */
    private static function handleSpamComplaint($message)
    {
        $feedbackLog = new FeedbackLog();

        try {
            // use Elastic Email transaction id as runtime-message-id
            $feedbackLog->runtime_message_id = $message['msys']['message_event']['rcpt_meta']['runtime_message_id'];
        } catch (\Exception $e) {
            MailLog::warning('Cannot retrive runtime_message_id');

            return response('', 200);
        }

        // retrieve the associated tracking log in MailChamp
        $trackingLog = TrackingLog::where('runtime_message_id', $feedbackLog->runtime_message_id)->first();
        if ($trackingLog) {
            $feedbackLog->message_id = $trackingLog->message_id;
        }

        // ElasticEmail only notifies in case of SPAM reported
        $feedbackLog->feedback_type = 'spam';
        $feedbackLog->raw_feedback_content = json_encode($message);
        $feedbackLog->save();
        MailLog::info('Feedback recorded for message '.$feedbackLog->runtime_message_id);

        // update the mail list, subscriber to be marked as 'spam-reported'
        // @todo: the following lines of code should be wrapped up in one single method: $feedbackLog->markSubscriberAsSpamReported();
        $subscriber = $feedbackLog->findSubscriberByRuntimeMessageId();
        if ($subscriber) {
            $subscriber->markAsSpamReported();
            MailLog::info('Subscriber marked as spam-reported');
        } else {
            MailLog::warning('Cannot find associated tracking log for message '.$feedbackLog->runtime_message_id);
        }
    }
}
