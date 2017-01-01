<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MemberController extends Controller
{
    public function addDrinksToShoppingCart()
    {
        $member = new Member();
        $member->Find(Session::get('loginId'))->shoppingCart()->attach(1);
        //$member->setDrinksToShoppingCart();
        return view('layouts.pages.personal')->with('id', $member);
    }

    public function addDrinksToTrace()
    {

    }
}
