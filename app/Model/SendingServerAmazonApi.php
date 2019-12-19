<?php

/**
 * SendingServerAmazonApi class.
 *
 * Model class for Amazon API sending server
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

class SendingServerAmazonApi extends SendingServerAmazon
{
    protected $table = 'sending_servers';

    /**
     * Send the provided message.
     *
     * @return bool
     *
     * @param message
     */
    public function send($message, $params = array())
    {
        $this->setupSnsThreadSafe($message);
        try {
            $sent = $this->sesClient()->sendRawEmail(array(
                'RawMessage' => array(
                    'Data' => $message->toString(),
                ),
            ));

            MailLog::info('Sent!');

            return array(
                'runtime_message_id' => $sent['MessageId'],
                'status' => self::DELIVERY_STATUS_SENT,
            );
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
