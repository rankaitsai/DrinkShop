<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use App\Models\Comment;
use App\Models\Member;
use App\Models\ShoppingCart;
use App\Models\Trace;
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

    public function checkSameData($drinkId)
    {
        $isExistRecord = ShoppingCart::where('memberId','=',Session::get('loginId'))->where('drinkId','=',$drinkId)->first();
        return $isExistRecord;
    }

    // 判斷購物車是否存在同筆資料
    public function addDrinksToShoppingCart($drinkId)
    {
        $member = new Member();

        if($this->checkSameData($drinkId)) {
            $member->deleteDrinkFromShoppingCart($drinkId);
        }
        else {
            $member->addDrinkToShoppingCart($drinkId);
        }
        return redirect()->back();
    }

    public function addDrinksToTrace($drinkId)
    {
        $member = new Member();

        if($this->checkSameData($drinkId))
        {
            $member->deleteDrinkFromTrace($drinkId);
        }
        else {
            $member->addDrinkToTrace($drinkId);
        }
        return redirect()->back();
    }

    public function deleteDrinkFromShoppingCart($drinkName)
    {
        $shoppingCart = new ShoppingCart();
        $shoppingCart->deleteDrink($drinkName);
        return redirect()->back();
    }

    public function deleteDrinkFromTrace($drinkName)
    {
        $trace = new Trace();
        $trace->deleteDrink($drinkName);
        return redirect()->back();
    }

    public function getUserData()
    {
        $shoppingCartDrinks = $this->getShoppingCart();
        $traceDrinks = $this->getTrace();
        return view('layouts.pages.personal', compact('shoppingCartDrinks','traceDrinks'));
    }

    public function getShoppingCart()
    {
        $shoppingCart = new ShoppingCart();
        $drinks = $shoppingCart->getShoppingCart();
        return $drinks;
        //return view('layouts.pages.personal', ['shoppingCartDrinks' => $drinks]);
    }

    public function getTrace()
    {
        $trace = new Trace();
        $drinks = $trace->getTrace();
        return $drinks;
        //return view('layouts.pages.personal', ['traceDrinks' => $drinks]);
    }
}
