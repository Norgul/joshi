<?php

namespace MailChamp\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use MailChamp\Model\User;
use MailChamp\Model\Contact;

class ContactPolicy
{
    use HandlesAuthorization;

    public function update(User $user, Contact $item)
    {
        return !isset($item->id) || $user->contact_id == $item->id;
    }
}
