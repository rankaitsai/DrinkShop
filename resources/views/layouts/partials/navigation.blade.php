<?php
/**
 * Created by PhpStorm.
 * User: rankaitsai
 * Date: 2016/12/20
 * Time: 下午 09:10
 */
?>

<meta charset="UTF-8">
<meta name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="{{asset('DrinkShop/public/css/navigation.css')}}">

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3><strong>飲料訂購系統</strong></h3><br>

            <div class="tabbable" id="tabs-454923">
                <ul class="nav nav-tabs">
                    <li>
                        <a href="{{ action("HomeController@showHomepage") }}">首頁</a>
                    </li>
                    <li>
                        <a href="{{ action("HomeController@showAbout") }}">關於我們</a>
                    </li>
                    <li>
                        <a href="{{ action("HomeController@showMenu") }}">飲料清單</a>
                    </li>
                    {{--之後再新增當使用者登入會顯示購物車選項--}}
                    {{--<li>--}}
                        {{--<a href="#panel-345213" data-toggle="tab">購物車</a>--}}
                    {{--</li>--}}
                    @if(\Illuminate\Support\Facades\Session::get('validate') == 'success')
                        <li>
                            <a href="{{ action("HomeController@showPersonal") }}">個人專區</a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</div>
