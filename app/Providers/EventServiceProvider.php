<?php

namespace MailChamp\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'MailChamp\Events\CampaignUpdated' => [
            'MailChamp\Listeners\CampaignUpdatedListener',
        ],
        'MailChamp\Events\MailListUpdated' => [
            'MailChamp\Listeners\MailListUpdatedListener',
        ],
        'MailChamp\Events\UserUpdated' => [
            'MailChamp\Listeners\UserUpdatedListener',
        ],
        'MailChamp\Events\AutomationUpdated' => [
            'MailChamp\Listeners\AutomationUpdatedListener',
        ],
        'MailChamp\Events\CronJobExecuted' => [
            'MailChamp\Listeners\CronJobExecutedListener',
        ],
        'MailChamp\Events\AdminLoggedIn' => [
            'MailChamp\Listeners\AdminLoggedInListener',
        ],
        'MailChamp\Events\MailListSubscription' => [
            'MailChamp\Listeners\MailListSubscriptionListener',
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
