<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderList extends Model
{
    protected $table = 'order_list';

    public function checkOut()
    {
    }

    public function discount()
    {
        return $this->belongsToMany('App\Models\Discount','rebate','orderListId','discountId');
    }
}
