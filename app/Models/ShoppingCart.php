<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class ShoppingCart extends Model
{
    protected $table = 'shopping_cart';
    public $primaryKey = ['memberId', 'drinkId'];

    public function getShoppingCart()
    {
        return DB::table('shopping_cart')
            ->join('member','member.id','=','shopping_cart.memberId')
            ->join('drink','drink.id','=','shopping_cart.drinkId')
            ->where('member.id','=',Session::get('loginId'))
            ->get();
    }
}
