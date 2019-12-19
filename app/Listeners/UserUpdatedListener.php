<?php

namespace MailChamp\Listeners;

use MailChamp\Events\UserUpdated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use MailChamp\Model\SystemJob as SystemJobModel;

class UserUpdatedListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  UserUpdated  $event
     * @return void
     */
    public function handle(UserUpdated $event)
    {
        if ($event->delayed) {
            $existed = SystemJobModel::getNewJobs()
                           ->where('name', \MailChamp\Jobs\UpdateUserJob::class)
                           ->where('data', $event->customer->id)
                           ->exists();
            if (!$existed) {
                dispatch(new \MailChamp\Jobs\UpdateUserJob($event->customer));
            }
        } else {
            $event->customer->updateCache();
        }
    }
}
