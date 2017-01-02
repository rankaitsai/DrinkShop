<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\ShoppingCart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MemberController extends Controller
{
    public function showComment($drinkId)
    {
        return view('layouts.pages.comment')->with('drinkId',$drinkId);
    }

    public function getComment($drinkId)
    {
        $memberComment = new Member();
        $memberComment->addComment($drinkId);
        return redirect()->back();
    }

    // 判斷購物車是否存在同筆資料
    public function getDrinksToShoppingCart($drinkId)
    {
        $member = new Member();
        $isExistRecord = ShoppingCart::where('memberId','=',Session::get('loginId'))->where('drinkId','=',$drinkId)->first();

        if($isExistRecord) {
            $member->deleteDrinkFromShoppingCart($drinkId);
        }
        else {
            $member->addDrinkToShoppingCart($drinkId);
        }
        return redirect()->back();
    }

    public function addDrinksToTrace()
    {

    }
}
