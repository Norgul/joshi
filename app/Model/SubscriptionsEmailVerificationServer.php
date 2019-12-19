<?php

namespace MailChamp\Model;

use Illuminate\Database\Eloquent\Model;

class SubscriptionsEmailVerificationServer extends Model
{
    public function emailVerificationServer()
    {
        return $this->belongsTo('MailChamp\Model\EmailVerificationServer', 'server_id');
    }
}
