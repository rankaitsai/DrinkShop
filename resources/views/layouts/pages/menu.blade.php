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
    @section('title','飲料清單')
</head>
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
                {{--row的第一筆資料--}}
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        {{--圖片要放入public裡面因為要從檔案載入到網頁--}}
                        <img src="../images/drinkOne.jpg" alt="">
                        <div class="caption">
                            <h4><strong>珍珠奶茶</strong></h4>
                            <p>
                                <a href="#" class="btn btn-primary" role="button">詳細資料</a>
                                <a href="#" class="btn btn-default" role="button">加入購物車</a>
                            </p>
                        </div>
                    </div>
                </div>
                {{--row的第二筆資料--}}
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        {{--圖片要放入public裡面因為要從檔案載入到網頁--}}
                        <img src="../images/drinkTwo.jpg" alt="">
                        <div class="caption">
                            <h4><strong>抹茶鮮奶</strong></h4>
                            <p>
                                <a href="#" class="btn btn-primary" role="button">詳細資料</a>
                                <a href="#" class="btn btn-default" role="button">加入購物車</a>
                            </p>
                        </div>
                    </div>
                </div>
                {{--row的第三筆資料--}}
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        {{--圖片要放入public裡面因為要從檔案載入到網頁--}}
                        <img src="../images/drinkThree.jpg" alt="">
                        <div class="caption">
                            <h4><strong>番茄梅子</strong></h4>
                            <p>
                                <a href="#" class="btn btn-primary" role="button">詳細資料</a>
                                <a href="#" class="btn btn-default" role="button">加入購物車</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
</body>
</html>