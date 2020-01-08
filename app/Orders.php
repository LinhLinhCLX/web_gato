<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $table="orders";
    public function users()
    {
    	return $this->hasOne('App\User', 'id_user', 'id');
    }
    public function details_order()
    {
    	return $this->hasMany('App\Details_order', 'id_orders', 'id');
    }
}
