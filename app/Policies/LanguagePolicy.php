<?php

namespace MailChamp\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use MailChamp\Model\User;
use MailChamp\Model\Language;

class LanguagePolicy
{
    use HandlesAuthorization;
    
    public function read(User $user, Language $item)
    {
        $can = $user->admin->getPermission('language_read') != 'no';

        return $can;
    }
    
    public function read_all(User $user, Language $item)
    {
        $can = $user->admin->getPermission('language_read') == 'all';

        return $can;
    }

    public function create(User $user, Language $item)
    {
        $can = $user->admin->getPermission('language_create') == 'yes';

        return $can;
    }

    public function update(User $user, Language $item)
    {
        $ability = $user->admin->getPermission('language_update');
        $can = $ability == 'yes' && !$item->is_default;

        return $can;
    }

    public function delete(User $user, Language $item)
    {
        $ability = $user->admin->getPermission('language_delete');
        $can = $ability == 'yes' && !$item->is_default;

        return $can;
    }
    
    public function translate(User $user, Language $item)
    {
        $ability = $user->admin->getPermission('language_update');
        $can = $ability == 'yes';

        return $can;
    }
    
    public function disable(User $user, Language $item)
    {
        $ability = $user->admin->getPermission('language_update');
        $can = $ability == 'yes' && !$item->is_default;

        return ($can && $item->status != "inactive");
    }
    
    public function enable(User $user, Language $item)
    {
        $ability = $user->admin->getPermission('language_update');
        $can = $ability == 'yes' && !$item->is_default;

        return ($can && $item->status != "active");
    }
    
    public function download(User $user, Language $item)
    {
        $ability = $user->admin->getPermission('language_read');
        $can = $ability == 'yes';

        return $can;
    }
    
    public function upload(User $user, Language $item)
    {
        $ability = $user->admin->getPermission('language_update');
        $can = $ability == 'yes';

        return $can;
    }
}
