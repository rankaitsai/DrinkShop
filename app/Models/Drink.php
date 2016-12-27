<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drink extends Model
{
    protected $table = 'drink';

    public function orderList()
    {
        return $this->belongsToMany('OrderList','OrderItem');
    }

    public function drinkInfo()
    {
        return $this->hasMany('DrinkInfo');
    }
}
