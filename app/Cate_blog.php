<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cate_blog extends Model
{
    protected $table ="cate_blog";
    public function cate_menu()
    {
    	return $this->belongsTo('App\Cate_menu', 'id_cate_menu', 'id');
    }
    public function blog()
    {
    	// return $this->hasMany('App\Blog');
    	return $this->hasMany('App\Blog', 'id_cate_blog', 'id');
    }
}
