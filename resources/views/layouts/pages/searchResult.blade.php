<?php
/**
 * Created by PhpStorm.
 * User: rankaitsai
 * Date: 2017/1/4
 * Time: 上午 12:25
 */
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{asset('DrinkShop/public/css/searchResult.css')}}">
    <title>搜尋結果</title>
    @include('layouts.partials.linkCDN')
</head>
<body>
    @include('layouts.partials.header')
    @include('layouts.partials.navigation')
        <div class="row">
            <br>
            @foreach($drinks as $drink)
                {{--row的第一筆資料--}}
                {{--row的第二筆資料--}}
                {{--row的第三筆資料--}}
                {{--...--}}
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        {{--圖片要放入public裡面因為要從檔案載入到網頁--}}
                        <img src="{{ '../' . $drink->image }}" alt="" style="height: 152px; width: 130px;">
                        <div class="caption">
                            <h4><strong>{{ $drink->name }}({{$drink->price}})</strong></h4>
                            <p>{{ $drink->description }}</p>
                            <p>
                                @if(\Illuminate\Support\Facades\Session::get('validate') == 'success')
                                    <a href="{{ action('MemberController@addDrinksToTrace',$drink->id) }}" id="trace" class="btn btn-default" role="button" style="color: red; font-size: 14px;">&#9829</a>
                                    <a href="{{ action('MemberController@showComment',['drinkId' => $drink->id, 'drinkName' => $drink->name]) }}" class="btn btn-default" role="button">評論</a>
                                    <a href="{{ action('MemberController@addDrinksToShoppingCart',$drink->id) }}" class="btn btn-primary" role="button">加入購物車</a>
                                @else
                                    <a href="{{ action('LoginController@showLogIn') }}" style="color: red;">購買前請先登入</a>
                                @endif
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
</body>
</html>
