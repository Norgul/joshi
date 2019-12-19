<?php

/**
 * CronJobNotification class.
 *
 * Notification for cronjob issue
 *
 * LICENSE: This product includes software developed at
 * the MailChamp Co., Ltd. (http://qubolt.com/).
 *
 * @category   MailChamp Library
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

namespace MailChamp\Library\Notification;

use MailChamp\Model\Setting;
use MailChamp\Model\Notification;

class SystemUrl extends Notification
{
    /**
     * Check if CronJob is recently executed and log a notification if not
     *
     * @return void
     */
    public static function check()
    {
        self::cleanupSimilarNotifications();
        
        $current = url('/');
        $cached = Setting::get('url_root');
        if ($current != $cached) {
            $warning = [
                'title' => trans('messages.admin.notification.system_url_title'),
                'message' => trans('messages.admin.notification.system_url_not_match', ['cached' => $cached, 'current' => $current]),
            ];

            self::warning($warning);
        }
    }
}