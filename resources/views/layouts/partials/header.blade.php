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
    <title>DrinkShop</title>
    <link rel="stylesheet" type="text/css" href="{{asset('DrinkShop/public/css/header.css')}}">
    @include('layouts.partials.linkcdn')
</head>
<body data-target = "#navbar-spy" data-spy = "scroll">
    <nav class="nav navbar-default navbar-fixed-top" id = "navbar-spy">    <!-- navbar-fixed-bottom為固定在網頁上不會因為滾動而消失 -->
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand">DrinkShop</a>
            </div>
            <div class = "collapse navbar-collapse" id="myNavbar">    <!-- 底下放要縮放的內容 -->
                <ul class="nav navbar-nav navbar-right">
                    <li><a data-toggle="tab" href="#"><span class="glyphicon glyphicon-log-in"></span><strong>Sign in</strong></a></li>
                    <li><a data-toggle="tab" href="#"><span class="glyphicon glyphicon-user"></span><strong>Sign up</strong></a></li>
                </ul>
            </div>
        </div>
    </nav>
</body>
</html>
