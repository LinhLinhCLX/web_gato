<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Details_order extends Model
{
    protected $table="details_order";
    public function orders()
    {
    	return $this->belongsTo('App\Orders', 'id_order', 'id');
    }
    public function product()
    {
    	// return $this->hasMany('App\Product', 'id_product', 'id');
    	return $this->hasOne('App\Product', 'id_product', 'id');
    }
}
