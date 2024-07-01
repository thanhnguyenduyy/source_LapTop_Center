<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';

    public function typeProduct() {
    	return $this->belongsTo('App\TypeProduct', 'id_type', 'id');
    }

    public function imageProduct() {
    	return $this->hasMany('App\ImageProduct', 'id_product', 'id');
    }

    public function reviewProduct() {
    	return $this->hasMany('App\ReviewProduct', 'id_product', 'id');
    }

    public function billDetail() {
        return $this->hasMany('App\BillDetail', 'id_product', 'id');
    }
}
