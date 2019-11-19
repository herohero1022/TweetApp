<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function User()
    {
        return $this->belongsTo('App\User');
    }

    public function Tweet()
    {
        return $this->belongsTo('App\Tweet');
    }

    protected $fillable = ['user_id'];
}
