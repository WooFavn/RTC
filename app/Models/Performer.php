<?php

namespace App\Models;

use Auth;
use Illuminate\Database\Eloquent\Model;

class Performer extends Model
{
    protected $table = 'performers';
    protected $userId;

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function getActivePerformer($type)
    {
        return self::where('gender', $type)
            ->where('status', 'active')
            ->get();
    }

    public function setPerformer($userId, $name)
    {
        $newPerformer = new self;
        $newPerformer->name = $name;
        $newPerformer->user_id = $userId;
        $newPerformer->status = 'Waiting';
        $newPerformer->save();
    }

}