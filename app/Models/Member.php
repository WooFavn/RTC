<?php

namespace App\Models;

use Auth;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function setMember($userId, $name)
    {
        $newMember = new self;
        $newMember->name = $name;
        $newMember->user_id = $userId;
        $newMember->status = 'Waiting';
        $newMember->save();
    }
}