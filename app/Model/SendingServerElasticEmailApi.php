<?php

/**
 * SendingServerElasticEmailApi class.
 *
 * Abstract class for Mailjet API sending server
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

class SendingServerElasticEmailApi extends SendingServerElasticEmail
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

            $result = $this->sendElasticEmailV2($message);

            MailLog::info('Sent!');

            return array(
                'runtime_message_id' => $result,
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
