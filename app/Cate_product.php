<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cate_product extends Model
{
    protected $table="cate_product";
    public function cate_menu()
    {
    	return $this->belongsTo('App\Cate_menu', 'id_cate_menu', 'id');
    }
    public function product()
    {
    	return $this->hasMany('App\Product', 'id_cate_product', 'id');
    }
}
