<?php
/**
 * Created by PhpStorm.
 * User: rankaitsai
 * Date: 2016/12/25
 * Time: 下午 11:37
 */
?>

@extends('layouts.master')
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{asset('DrinkShop/public/css/home.css')}}">
    @include('layouts.partials.linkCDN')
    @section('title','首頁')
</head>
<body>
    @section('sidebar')
        <span class="list-group-item active">公告</span>
        <a href="#news" class="list-group-item" data-toggle="tab">最新消息</a>
        <a href="#test1" class="list-group-item" data-toggle="tab">測試用1</a>
        <a href="#test2" class="list-group-item" data-toggle="tab">測試用2</a>
    @endsection

    @section('contents')
        <div id="news" class="tab-pane fade in active">
            <h3>最新消息</h3>
        </div>
        <div id="test1" class="tab-pane fade">
            <h3>測試用1</h3>
        </div>
        <div id="test2" class="tab-pane fade">
            <h3>測試用2</h3>
        </div>
    @endsection

</body>
</html>
