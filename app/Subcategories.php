<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategories extends Model
{
    public function subcategories()
    {
    	return $this->belongsToMany('App\Categories');
    }
}
