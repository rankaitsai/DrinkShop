<?php
/**
 * Created by PhpStorm.
 * User: rankaitsai
 * Date: 2016/12/25
 * Time: 下午 11:38
 */
?>

@extends('layouts.master')
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{asset('DrinkShop/public/css/menu.css')}}">
    @include('layouts.partials.linkCDN')
    @section('title','飲料清單')
</head>
<script>
    $(function() {
        $('a#trace').on('click',function(){
            $(this).toggleClass('action');
        });

    });
</script>
<style>
    a#trace.btn.btn-default.action:after {
        content: '已加入追蹤';
    }
</style>
<body>
    @section('sidebar')
        <span class="list-group-item active">茶水飲品</span>
        <a href="#newDrink" class="list-group-item" data-toggle="tab">最新商品</a>
        <a href="#popularity" class="list-group-item" data-toggle="tab">人氣飲品</a>
        <a href="#drinkList" class="list-group-item" data-toggle="tab">飲料清單</a>
    @endsection

    @section('contents')
        <div id="newDrink" class="tab-pane fade in active">
            <h3>最新商品</h3>
        </div>

        <div id="popularity" class="tab-pane fade">
            <h3>人氣飲品</h3>
        </div>

        <div id="drinkList" class="tab-pane fade">
            <h3>飲料清單</h3>
            <div class="row">
                @foreach($drinks as $drink)
                    {{--row的第一筆資料--}}
                    {{--row的第二筆資料--}}
                    {{--row的第三筆資料--}}
                    {{--...--}}
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            {{--圖片要放入public裡面因為要從檔案載入到網頁--}}
                                <img src="{{ $drink->image }}" alt="" style="height: 152px; width: 130px;">
                                <div class="caption">
                                    <h4><strong>{{ $drink->name }}({{$drink->price}})</strong></h4>
                                    <p>{{ $drink->description }}</p>
                                    <p>
                                        @if(\Illuminate\Support\Facades\Session::get('validate') == 'success')
                                            <a href="javascript:void(0);" id="trace" class="btn btn-default" role="button" style="color: red; font-size: 14px;">&#9829</a>
                                            <a href="{{ action('MemberController@showComment',['drinkId' => $drink->id, 'drinkName' => $drink->name]) }}" class="btn btn-default" role="button">評論</a>
                                            <a href="{{ action('MemberController@getDrinksToShoppingCart',$drink->id) }}" class="btn btn-default" role="button">加入購物車</a>
                                            <a href="javascript:void(0);" class="btn btn-primary" role="button">購買</a>
                                        @else
                                            <a href="{{ action('LoginController@showLogIn') }}" style="color: red;">購買前請先登入</a>
                                        @endif
                                    </p>
                                </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endsection
</body>
</html>