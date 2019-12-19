<?php

/**
 * SendingServerElasticEmailSmtp class.
 *
 * Abstract class for SendGrid API sending server
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
use MailChamp\Library\ExtendedSmtpTransport;

class SendingServerElasticEmailSmtp extends SendingServerElasticEmail
{
    protected $table = 'sending_servers';

/**
 * Send the provided message.
 *
 * @return bool
 *
 * @param message
 */
    // Inherit class to implementation of this method
    public function send($message, $params = array())
    {
        try {
            $this->setupWebhooks();
            $this->enableCustomHeaders();

            $transport = ExtendedSmtpTransport::newInstance($this->host, (int) $this->smtp_port, $this->smtp_protocol)
              ->setUsername($this->smtp_username)
              ->setPassword($this->smtp_password)
            ;

            // Create the Mailer using your created Transport
            $mailer = \Swift_Mailer::newInstance($transport);

            // Actually send
            $sent = $mailer->send($message);

            if ($sent && $transport->getMessageId()) {
                MailLog::info('Sent!');

                return array(
                    'runtime_message_id' => $transport->getMessageId(),
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
            MailLog::warning('Sending failed');
            MailLog::warning($e->getMessage());

            return array(
                'status' => self::DELIVERY_STATUS_FAILED,
                'error' => $e->getMessage(),
            );
        }
    }
}
