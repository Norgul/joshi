<?php

/**
 * Automation Event Trigger class.
 *
 * Model class for logging triggered events
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

class AutoTrigger extends Model
{
    protected $fillable = [
        'start_at',
    ];

    protected $dates = ['created_at', 'updated_at', 'start_at'];

    /**
     * Associations.
     *
     * @var object | collect
     */
    public function autoEvent()
    {
        return $this->belongsTo('MailChamp\Model\AutoEvent');
    }

    /**
     * Associations.
     *
     * @return the associated subscriber, in case of FollowUp trigger
     */
    public function subscriber()
    {
        return $this->belongsTo('MailChamp\Model\Subscriber');
    }
}
