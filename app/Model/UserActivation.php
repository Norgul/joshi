<?php

/**
 * UserActivation class.
 *
 * Model class for user activation
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

use Illuminate\Database\Eloquent\Model;

class UserActivation extends Model
{
    /**
     * Get user activation token.
     *
     * @return string
     */
    public static function getToken()
    {
        return hash_hmac('sha256', str_random(40), config('app.key'));
    }

    /**
     * User.
     *
     * @return string
     */
    public function user()
    {
        return $this->belongsTo('MailChamp\Model\User');
    }
}
