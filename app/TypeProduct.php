<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeProduct extends Model
{
    protected $table = 'type_product';

    public function category() {
    	return $this->belongsTo('App\Category', 'id_category', 'id');
    }

    public function product() {
    	return $this->hasMany('App\Product', 'id_type', 'id');
    }
}
