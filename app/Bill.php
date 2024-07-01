<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $table = 'bill';

    public function users() {
    	return $this->belongsTo('App\User', 'id_users', 'id');
    }

    public function billDetail() {
    	return $this->hasMany('App\BillDetail', 'id_bill', 'id');
    }
}
