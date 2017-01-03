<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use App\Models\Comment;
use App\Models\Member;
use App\Models\ShoppingCart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MemberController extends Controller
{
    public function showComment($drinkId,$drinkName)
    {
        return view('layouts.pages.comment')->with('drinkId',$drinkId)->with('drinkName', $drinkName);
    }

    // 加入評論到database
    public function getComment(CommentRequest $request, $drinkId)
    {
        $member = new Member();
        $member->addComment($drinkId);
        return redirect()->back()->with('commentSuccess','感謝您的評論');
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

    public function getShoppingCart()
    {
        $shoppingCart = new ShoppingCart();
        $shoppingCart->getShoppingCart();
        return view('layouts.pages.personal', ['']);
    }
}
