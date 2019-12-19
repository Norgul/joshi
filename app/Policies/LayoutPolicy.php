<?php

namespace MailChamp\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use MailChamp\Model\User;
use MailChamp\Model\Layout;

class LayoutPolicy
{
    use HandlesAuthorization;

    public function update(User $user, Layout $item)
    {
        $ability = $user->admin->getPermission('layout_update');
        $can = $ability == 'yes';

        return $can;
    }
}
