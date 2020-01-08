<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag_blog extends Model
{
    protected $table="tag_blog";
    public function blog()
    {
    	return $this->belongsTo('App\Blog', 'id_blog', 'id');
    }
}
