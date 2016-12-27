<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderList extends Model
{
    protected $table = 'order_list';

    public function discount()
    {
        return $this->belongsToMany('Discount','Rebate');
    }
}
