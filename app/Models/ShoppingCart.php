<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
    protected $table = 'shopping_cart';
    public $primaryKey = ['memberId', 'drinkId'];

    public function getShoppingCart()
    {
        return DB::table('shopping_cart')->get();
    }
}
