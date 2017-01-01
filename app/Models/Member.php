<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Input;

class Member extends Model
{
    //$table 對應到資料庫中的member資料表
    protected  $table = 'member';
    //protected  $fillable = array['account','password','name','phone','email'];
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

    public function setDrinksToShoppingCart()
    {
        Member::find($this->primaryKey)->shoppingCart()->attach(1);
    }

    public function orderList()
    {
        return $this->hasMany('OrderList');
    }

    public function comment()
    {
        return $this->belongsToMany('App\Models\Drink','Comment');
    }

    public function trace()
    {
        return $this->belongsToMany('App\Models\Drink','Trace');
    }

    public function shoppingCart()
    {
        return $this->belongsToMany('App\Models\Drink','shopping_cart','memberId','drinkId')->withPivot('quantity');
    }

    public function historyExplore()
    {
        return $this->belongsToMany('App\Models\Drink','HistoryExplore');
    }
}
