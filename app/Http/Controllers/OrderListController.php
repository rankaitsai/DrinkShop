<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\OrderList;
use Illuminate\Http\Request;

class OrderListController extends Controller
{
    public function checkOut()
    {
        $order = new OrderList();
        $order->checkOut();

    }
}
