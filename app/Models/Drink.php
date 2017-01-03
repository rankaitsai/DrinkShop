<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class Drink extends Model
{
    protected $table = 'drink';
    public $timestamps = false;

    public function orderList()
    {
        return $this->belongsToMany('App\Models\OrderList','order_item','drinkId','orderId')->withPivot('quantity');
    }

    public function drinkInfo()
    {
        return $this->hasMany('App\Models\DrinkInfo');
    }

    public function discount()
    {
        return $this->belongsToMany('App\Models\Discount','on_sale','drinkId','discountId');
    }
    // 取得全部飲料
    public function getAllDrinks()
    {
        return DB::table('drink')->get();
    }
}

