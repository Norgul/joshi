<?php

namespace MailChamp\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use MailChamp\Model\Setting;
use MailChamp\Library\Log as MailLog;
use Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'MailChamp\Model' => 'MailChamp\Policies\ModelPolicy',
        \MailChamp\Model\User::class => \MailChamp\Policies\UserPolicy::class,
        \MailChamp\Model\Contact::class => \MailChamp\Policies\ContactPolicy::class,
        \MailChamp\Model\MailList::class => \MailChamp\Policies\MailListPolicy::class,
        \MailChamp\Model\Subscriber::class => \MailChamp\Policies\SubscriberPolicy::class,
        \MailChamp\Model\Segment::class => \MailChamp\Policies\SegmentPolicy::class,
        \MailChamp\Model\Layout::class => \MailChamp\Policies\LayoutPolicy::class,
        \MailChamp\Model\Template::class => \MailChamp\Policies\TemplatePolicy::class,
        \MailChamp\Model\Campaign::class => \MailChamp\Policies\CampaignPolicy::class,
        \MailChamp\Model\SendingServer::class => \MailChamp\Policies\SendingServerPolicy::class,
        \MailChamp\Model\BounceHandler::class => \MailChamp\Policies\BounceHandlerPolicy::class,
        \MailChamp\Model\FeedbackLoopHandler::class => \MailChamp\Policies\FeedbackLoopHandlerPolicy::class,
        \MailChamp\Model\SendingDomain::class => \MailChamp\Policies\SendingDomainPolicy::class,
        \MailChamp\Model\Language::class => \MailChamp\Policies\LanguagePolicy::class,
        \MailChamp\Model\CustomerGroup::class => \MailChamp\Policies\CustomerGroupPolicy::class,
        \MailChamp\Model\Customer::class => \MailChamp\Policies\CustomerPolicy::class,
        \MailChamp\Model\AdminGroup::class => \MailChamp\Policies\AdminGroupPolicy::class,
        \MailChamp\Model\Admin::class => \MailChamp\Policies\AdminPolicy::class,
        \MailChamp\Model\Setting::class => \MailChamp\Policies\SettingPolicy::class,
        \MailChamp\Model\Plan::class => \MailChamp\Policies\PlanPolicy::class,
        \MailChamp\Model\Currency::class => \MailChamp\Policies\CurrencyPolicy::class,
        \MailChamp\Model\SystemJob::class => \MailChamp\Policies\SystemJobPolicy::class,
        \MailChamp\Model\Automation::class => \MailChamp\Policies\AutomationPolicy::class,
        \MailChamp\Model\AutoEvent::class => \MailChamp\Policies\AutoEventPolicy::class,
        \MailChamp\Model\Subscription::class => \MailChamp\Policies\SubscriptionPolicy::class,
        \MailChamp\Model\PaymentMethod::class => \MailChamp\Policies\PaymentMethodPolicy::class,
        \MailChamp\Model\EmailVerificationServer::class => \MailChamp\Policies\EmailVerificationServerPolicy::class,
        \MailChamp\Model\Blacklist::class => \MailChamp\Policies\BlacklistPolicy::class,
        \MailChamp\Model\SubAccount::class => \MailChamp\Policies\SubAccountPolicy::class,
        \MailChamp\Model\Sender::class => \MailChamp\Policies\SenderPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        
        Gate::define('send-from', function ($user, $fromEmail) {
            if (Setting::get('allow_send_from_unverified_domain') == 'yes') {
                return true;
            }            
            
            $domain = substr(strrchr($fromEmail, '@'), 1);
            return $user->customer->activeSendingDomains()->where('name', $domain)->exists();
        });
    }
}
