<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    // comments belong to one post
    // and post belong to many comments
    public function post() {
    	return $this->belongsTo('App\Models\Post');
    }
}
