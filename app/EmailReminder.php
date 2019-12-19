<?php

namespace MailChamp;

use Illuminate\Database\Eloquent\Model;

class EmailReminder extends Model
{
    protected $table='email_reminder';

    protected $fillable=['emails'];

    public $timestamps=false;

}
