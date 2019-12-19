<?php

/**
 * ImportSubscribersSystemJob class, inherit from the SystemJob model.
 *
 * Model class for tracking subscriber importing system jobs.
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

class ImportSubscribersSystemJob extends SystemJob
{
    protected $table = 'system_jobs';

    public function getLog()
    {
        $data = json_decode($this->data, true);

        return $data['log'];
    }
}
