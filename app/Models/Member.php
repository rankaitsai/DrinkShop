<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;

class Member extends Model
{
    //$table 對應到資料庫中的member資料表
    protected  $table = 'member';
    public $timestamps = false;
    /*
     * ORM object relational mapping
     */

    public function register()
    {
        $this->name = Input::get('name');
        $this->account = Input::get('account');
        $this->password = Input::get('password');
        $this->photo = Input::file('photo');
//        $member->photo->move(public_path(). '/', $member->photo->getClientOriginalName());
        $this->sex = Input::get('sex');
        $this->phone = Input::get('phone');
        $this->email = Input::get('email');
        $this->address = Input::get('address');
        $this->save();
    }

    public function addDrinkToShoppingCart($drinkId)
    {
        $member = Member::find(Session::get('loginId'));
        $member->shoppingCart()->attach($drinkId);
    }

    public function deleteDrinkFromShoppingCart($drinkId)
    {
        $member = Member::find(Session::get('loginId'));
        $member->shoppingCart()->detach($drinkId);
    }

    public function addDrinkToTrace($drinkId)
    {
        $member = Member::find(Session::get('loginId'));
        $member->trace()->attach($drinkId, ['date' => Carbon::now('Asia/Taipei')]);
    }

    public function deleteDrinkFromTrace($drinkId)
    {
        $member = Member::find(Session::get('loginId'));
        $member->trace()->detach($drinkId);
    }

    public function addComment($drinkId)
    {
        $drinkComment = new Comment();
        $member = Member::find(Session::get('loginId'));
        $member->comment()->attach($drinkId, $drinkComment->getCommentInfo());
    }

    public function orderList()
    {
        return $this->hasMany('App\Models\OrderList');
    }

    public function comment()
    {
        return $this->belongsToMany('App\Models\Drink','comment','memberId','drinkId')->withPivot('date','stars','description');
    }

    public function trace()
    {
        return $this->belongsToMany('App\Models\Drink','trace','memberId','drinkId')->withPivot('date');
    }

    public function shoppingCart()
    {
        // ('App\Models\Class','table_name','關係的key對應這個class'(member),'關係的key對應另一class'(drink))
        return $this->belongsToMany('App\Models\Drink','shopping_cart','memberId','drinkId')->withPivot('quantity');
    }

    public function historyExplore()
    {
        return $this->belongsToMany('App\Models\Drink','history_explore','memberId','drinkId');
    }
}
