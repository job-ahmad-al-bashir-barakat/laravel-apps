<?php

namespace Modules\Chat\Entities;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Message extends \Eloquent
{
    protected $fillable = [];

    function user() {

        return $this->belongsTo(User::class)->select(['id','name','email','avatar']);
    }
}
