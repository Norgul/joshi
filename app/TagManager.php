<?php

namespace MailChamp;

use Illuminate\Database\Eloquent\Model;

class TagManager extends Model
{
    protected $table='tags';

    protected $fillable=['id','name'];

    public $timestamps=false;
}
