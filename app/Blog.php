<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table="blog";
    public function tag_blog()
    {
    	return $this->hasMany('App\Tag_blog', 'id_blog', 'id');
    }
    public function admin_table()
    {
    	return $this->belongsTo('App\Admin_table', 'id_admin', 'id');
    }
}
