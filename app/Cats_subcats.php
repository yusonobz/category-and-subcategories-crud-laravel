<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cats_subcats extends Model
{
    public function subcats()
    {
    	return $this->belongsToMany('App\Categories', 'categories_subcategories');
    }
}
