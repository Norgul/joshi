<?php

namespace MailChamp\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use MailChamp\Model\User;
use MailChamp\Model\SystemJob;

class SystemJobPolicy
{
    use HandlesAuthorization;
    
    public $jobs = [
        'MailChamp\Jobs\ImportSubscribersJob',
        'MailChamp\Jobs\ExportSubscribersJob',
        'MailChamp\Jobs\ExportSegmentsJob',
    ];

    public function delete(User $user, SystemJob $item)
    {
        if (in_array($item->name, $this->jobs)) {
            $data = json_decode($item->data);
            $list = \MailChamp\Model\MailList::findByUid($data->mail_list_uid);

            return $list->customer_id == $user->customer->id && !$item->isRunning();
        }

        return false;
    }

    public function downloadImportLog(User $user, SystemJob $item)
    {
        $data = json_decode($item->data);
        $list = \MailChamp\Model\MailList::findByUid($data->mail_list_uid);

        return $list->customer_id == $user->customer->id &&
            $item->name == 'MailChamp\Jobs\ImportSubscribersJob' &&
            $data->status == 'done';
    }

    public function downloadExportCsv(User $user, SystemJob $item)
    {
        $data = json_decode($item->data);
        $list = \MailChamp\Model\MailList::findByUid($data->mail_list_uid);

        return $list->customer_id == $user->customer->id &&
            ($item->name == 'MailChamp\Jobs\ExportSubscribersJob' || $item->name == 'MailChamp\Jobs\ExportSegmentsJob') &&
            $data->status == 'done';
    }

    public function cancel(User $user, SystemJob $item)
    {
        if (in_array($item->name, $this->jobs)) {
            $data = json_decode($item->data);
            $list = \MailChamp\Model\MailList::findByUid($data->mail_list_uid);

            return $list->customer_id == $user->customer->id &&
                $item->isRunning();
        }

        return false;
    }
}
