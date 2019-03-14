<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    public function categories()
    {
    	return $this->belongsToMany('App\Subcategories');
    }
}
