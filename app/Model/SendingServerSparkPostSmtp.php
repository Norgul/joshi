<?php

/**
 * SendingServerSparkPostSmtp class.
 *
 * Model class for SparkPost SMTP sending server
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

class SendingServerSparkPostSmtp extends SendingServerSparkPost
{
    protected $table = 'sending_servers';

    /**
     * Send the provided message.
     *
     * @return bool
     *
     * @param message
     */
    public function send($message, $params = [])
    {
        try {
            $this->setupWebhook();

            $transport = \Swift_SmtpTransport::newInstance($this->host, (int) $this->smtp_port, $this->smtp_protocol)
              ->setUsername($this->smtp_username)
              ->setPassword($this->smtp_password)
            ;

            // tracking bounce/feedback
            $msgId = $message->getHeaders()->get('X-MailChamp-Message-Id')->getFieldBody();
            $message->getHeaders()->addTextHeader('X-MSYS-API', json_encode(['metadata' => ['runtime_message_id' => $msgId]]));

            // Create the Mailer using your created Transport
            $mailer = \Swift_Mailer::newInstance($transport);

            // Actually send
            $sent = $mailer->send($message);

            if ($sent) {
                MailLog::info('Sent!');

                return array(
                    'status' => self::DELIVERY_STATUS_SENT,
                );
            } else {
                MailLog::warning('Sending failed');

                return array(
                    'status' => self::DELIVERY_STATUS_FAILED,
                    'error' => 'Unknown SMTP error',
                );
            }
        } catch (\Exception $e) {
            MailLog::warning('Sending failed: '.$e->getMessage());

            return array(
                'status' => self::DELIVERY_STATUS_FAILED,
                'error' => $e->getMessage(),
            );
        }
    }
}
