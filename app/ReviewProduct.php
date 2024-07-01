<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReviewProduct extends Model
{
    protected $table = 'review_product';

    public function product() {
    	return $this->belongsTo('App\Product', 'id_product', 'id');
    }
}
