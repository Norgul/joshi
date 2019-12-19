<?php

namespace MailChamp;

use Illuminate\Database\Eloquent\Model;

class UserTags extends Model
{
    protected $table='users_tags';
    protected $fillable=['subscriber_id','tag_id','created_at','updated_at'];
    public $timestamps=false;
}
