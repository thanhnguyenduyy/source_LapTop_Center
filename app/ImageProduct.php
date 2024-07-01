<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImageProduct extends Model
{
    protected $table = 'image_product';

    public function product() {
    	return $this->belongsTo('App\Product', 'id_product', 'id');
    }
}
