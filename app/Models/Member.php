<?php

namespace App\Models;

use App\ShoppingCart;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Input;

class Member extends Model
{
    //$table 對應到資料庫中的member資料表
    protected  $table = 'member';
    //protected  $fillable = array['account','password','name','phone','email'];
    public $timestamps = false;

    public function checkNecessary()
    {
        if(Input::has('name') && Input::has('account') && Input::has('password') && Input::has('phone') && Input::has('email') && Input::has('address'))
        {
            return '成功註冊';
        }
        return '請輸入必填選項';
    }
    /*
     * ORM object relational mapping
     */
    public function orderList()
    {
        return $this->hasMany('OrderList');
    }

    public function comment()
    {
        return $this->belongsToMany('Drink','Comment');
    }

    public function trace()
    {
        return $this->belongsToMany('Drink','Trace');
    }

    public function shoppingCart()
    {
        return $this->belongsToMany('Drink','ShoppingCart');
    }

    public function historyExplore()
    {
        return $this->belongsToMany('Drink','HistoryExplore');
    }
}
