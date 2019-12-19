<?php

/**
 * AmazonSmtpTransport class.
 *
 * This is the extended edition of the Swift_SmtpTransport
 * Extended feature supports a new method that helps record SMTP raw response
 *
 * LICENSE: This product includes software developed at
 * the MailChamp Co., Ltd. (http://qubolt.com/).
 *
 * @category   Extension
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

namespace MailChamp\Library;

class AmazonSmtpTransport extends \Swift_SmtpTransport
{
    /**
     * Array used to store raw SMTP responses
     *
     */
    private $rawResponses = array();

    /**
     * Overwrite the execute method.
     *
     * @return mixed
     */
    public function executeCommand($command, $codes = array(), &$failures = null)
    {
        $response = parent::executeCommand($command, $codes, $failures);
        $this->rawResponses[] = $response;
        return $response;
    }

    /**
     * Overwrite the initialization method.
     *
     * @return mixed
     */
    public static function newInstance($host = 'localhost', $port = 25, $security = null)
    {
        return new self($host, $port, $security);
    }

    /**
     * Get Amazon message ID from the last SMTP response.
     *
     * @return string messageId
     */
    public function getMessageId()
    {
        $messageId = null;
        foreach ($this->rawResponses as $e) {
            preg_match('/(?<=250 ok\s)[^\s]*/i', $e, $matched);
            if (sizeof($matched) > 0) {
                $messageId = $matched[0];
            }
        }

        return $messageId;
    }

    /**
     * Get an array of SMTP raw responses
     *
     * @return Array SMTP messages
     */
    public function getRawResponses()
    {
        return $this->rawResponses;
    }
}
