<?php

/**
 * SubscriberField class.
 *
 * Model class for subscriber custom fields
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

class SubscriberField extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'field_id', 'subscriber_id', 'value',
    ];

    /**
     * Associations.
     *
     * @var object | collect
     */
    public function field()
    {
        return $this->belongsTo('MailChamp\Model\Field');
    }
}
