<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table = "product";
    protected $fillable = ['id', 'name', 'slug'];
    public function cate_product()
    {
    	return $this->belongsTo('App\Cate_Product', 'id_cate_product', 'id');
    }
    public function details_orders()
    {
    	return $this->hasMany('App\Details_orders', 'id_product', 'id');
    }
    // public function 
}
