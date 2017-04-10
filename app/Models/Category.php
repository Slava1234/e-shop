<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //protected $table = 'categories'

    // category is going to have many posts
    public function posts() {
    	return $this->hasMany('App\Models\Post');
    }
}
