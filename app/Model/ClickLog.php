<?php

/**
 * ClickLog class.
 *
 * Model class for click logs
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

class ClickLog extends Model
{
    /**
     * Associations.
     *
     * @var object | collect
     */
    public function trackingLog()
    {
        return $this->belongsTo('MailChamp\Model\TrackingLog', 'message_id', 'message_id');
    }

    /**
     * Get all items.
     *
     * @return collect
     */
    public static function getAll()
    {
        return self::select('click_logs.*');
    }

    /**
     * Filter items.
     *
     * @return collect
     */
    public static function filter($request)
    {
//        $user = $request->user();
//        $customer = $user->customer;
        $query = self::select('click_logs.*');
        $query = $query->leftJoin('tracking_logs', 'click_logs.message_id', '=', 'tracking_logs.message_id');
        $query = $query->leftJoin('subscribers', 'subscribers.id', '=', 'tracking_logs.subscriber_id');
        $query = $query->leftJoin('campaigns', 'campaigns.id', '=', 'tracking_logs.campaign_id');
        $query = $query->leftJoin('sending_servers', 'sending_servers.id', '=', 'tracking_logs.sending_server_id');
        $query = $query->leftJoin('customers', 'customers.id', '=', 'tracking_logs.customer_id');

        // Keywordz
        if (!empty(trim($request['keyword']))) {
            foreach (explode(' ', trim($request['keyword'])) as $keyword) {
                $query = $query->where(function ($q) use ($keyword) {
                    $q->orwhere('campaigns.name', 'like', '%'.$keyword.'%')
                        ->orwhere('click_logs.ip_address', 'like', '%'.$keyword.'%')
                        ->orwhere('click_logs.url', 'like', '%'.$keyword.'%')
                        ->orwhere('sending_servers.name', 'like', '%'.$keyword.'%')
                        ->orwhere(\DB::raw('CONCAT(first_name, last_name)'), 'like', '%'.$keyword.'%')
                        ->orwhere('subscribers.email', 'like', '%'.$keyword.'%');
                });
            }
        }

        // filters
        $filters = $request['filters'];
        if (!empty($filters)) {
            if (!empty($filters['campaign_uid'])) {
                $query = $query->where('campaigns.uid', '=', $filters['campaign_uid']);
            }
        }

        return $query;
    }

    /**
     * Search items.
     *
     * @return collect
     */
    public static function search($request, $campaign = null)
    {
        $query = self::filter($request);

        if (isset($campaign)) {
            $query = $query->where('tracking_logs.campaign_id', '=', $campaign->id);
        }

        $query = $query->orderBy($request['sort_order'], $request['sort_direction']);

        return $query;
    }

    /**
     * Items per page.
     *
     * @var array
     */
    public static $itemsPerPage = 25;
}
