<?php
/**
 * Created by PhpStorm.
 * User: rankaitsai
 * Date: 2016/12/20
 * Time: 下午 08:59
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    {{--according to views/.../--}}
    @include('layouts.partials.linkcdn');
    <title>DrinkShop</title>
    <link rel="stylesheet" type="text/css" href="{{asset('DrinkShop/public/css/header.css')}}">
</head>
<body data-target = "#navbar-spy" data-spy = "scroll">
    <nav class="nav navbar-default navbar-fixed-top" id = "navbar-spy">    <!-- navbar-fixed-bottom為固定在網頁上不會因為滾動而消失 -->
        <div class="container-fluid">
            <div class="navbar-header">
                {{--<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">--}}
                    {{--<span class="icon-bar"></span>--}}
                    {{--<span class="icon-bar"></span>--}}
                    {{--<span class="icon-bar"></span>--}}
                {{--</button>--}}
                <a class="navbar-brand" href="">DrinkShop</a>
            </div>
            <div class = "collapse navbar-collapse" id = "myNavbar">    <!-- 底下放要縮放的內容 -->
                <ul class="nav navbar-nav navbar-right">
                    <li><a data-toggle="tab" href="#"><span class="glyphicon glyphicon-log-in"></span> Sign in</a></li>
                    <li><a data-toggle="tab" href="#"><span class="glyphicon glyphicon-user"></span> Sign up</a></li>
                </ul>
            </div>
        </div>
    </nav>

{{--<div class="tab-content">--}}
    {{--<div id="home" class="tab-pane fade in active"> <!-- in active 表示一開始顯示Home畫面-->--}}
        {{--<p>Some content.</p>--}}
    {{--</div>--}}
    {{--<div id="menu1" class="tab-pane fade">--}}
        {{--<p>Some content in menu 1.</p>--}}
    {{--</div>--}}
    {{--<div id="menu2" class="tab-pane fade">--}}
        {{--<h3>Menu 2</h3>--}}
        {{--<p>Some content in menu 2.</p>--}}
    {{--</div>--}}
{{--</div>--}}
</body>
</html>
