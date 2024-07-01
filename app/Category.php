<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';

    public function typeProduct() {
    	return $this->hasMany('App\TypeProduct', 'id_category', 'id');
    }

    public function product(){
    	return $this->hasManyThrough('App\Product', 'App\TypeProduct', 'id_category', 'id_type', 'id');
    }
}
