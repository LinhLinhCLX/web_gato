<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin_table extends Model
{
    //
    protected $table ="admin_table";
    protected $fillable = [
        'email','name','image','active','level',
    ];
    public function permission()
    {
    	return $this->hasOne('App\Permission', 'level', 'id');
    }
    public function blog()
    {
    	return $this->hasMany('App\Blog', 'id_admin', 'id');
    }
}
