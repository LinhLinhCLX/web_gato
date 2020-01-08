<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cate_menu extends Model
{
    protected $table ="cate_menu";
    public function cate_blog()
    {
    	return $this->hasOne('App\Cate_blog', 'id_cate_menu', 'id');
    }
    public function cate_product()
    {
    	return $this->hasOne('App\Cate_product', 'id_cate_menu', 'id');
    }
}
