<?php

/**
 * SendingServerMailgun class.
 *
 * Abstract class for Mailgun sending servers
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
 */

namespace MailChamp\Model;

use MailChamp\Library\Log as MailLog;
use MailChamp\Library\StringHelper;
use Mailgun\Mailgun;

class SendingServerMailgun extends SendingServer
{
    const WEBHOOK = 'mailgun';

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
            self::$client = new Mailgun($this->api_key);
        }

        return self::$client;
    }

    /**
     * Setup webhooks for processing bounce and feedback loop.
     *
     * @return mixed
     */
    public function setupWebhooks()
    {
        if (self::$isWebhookSetup) {
            return true;
        }

        MailLog::info('Setting up webhooks for bounce/complaints');

        $domain = $this->domain;
        $subscribeUrl = StringHelper::joinUrl(Setting::get('url_delivery_handler'), self::WEBHOOK);

        MailLog::info('Webhook set to: '.$subscribeUrl);

        try {
            $result = $this->client()->delete("domains/$domain/webhooks/bounce");
        } catch (\Exception $e) {
            // just ignore
        }

        try {
            $result = $this->client()->delete("domains/$domain/webhooks/spam");
        } catch (\Exception $e) {
            // just ignore
        }

        try {
            $result = $this->client()->post("domains/$domain/webhooks", array(
                'id' => 'bounce',
                'url' => $subscribeUrl,
            ));
            MailLog::info('Bounce webhook created');

            $result = $this->client()->post("domains/$domain/webhooks", array(
                'id' => 'spam',
                'url' => $subscribeUrl,
            ));
            MailLog::info('Complaint webhook created');

            self::$isWebhookSetup = true;
        } catch (\Exception $e) {
            MailLog::warning('Cannot set up Mailgun webhook: '.$e->getMessage());
        }
    }
}
