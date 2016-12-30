<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

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

    // 取得全部飲料
    public function getAllDrinks()
    {
        return DB::table('drink')->get();
    }
}
