<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    protected $fillable = [
        'title', 'description', 'image', 'user_id'
    ];

    protected $with = [
        'user'
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function likes() {
        return $this->belongsTo('App\User');
    }
}
