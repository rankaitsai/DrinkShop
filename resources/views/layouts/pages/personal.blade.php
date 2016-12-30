<?php
/**
 * Created by PhpStorm.
 * User: rankaitsai
 * Date: 2016/12/25
 * Time: 下午 11:57
 */
?>

@extends('layouts.master')
        <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @section('title','個人專區')
</head>
<body>
    @section('sidebar')
        <span class="list-group-item active">儲存資訊</span>
        <a href="#newDrink" class="list-group-item" data-toggle="tab">購物車</a>
        <a href="#popularity" class="list-group-item" data-toggle="tab">追蹤紀錄</a>
        <a href="#drinkList" class="list-group-item" data-toggle="tab">歷史查詢</a>
    @endsection

    @section('contents')
        <div id="newDrink" class="tab-pane fade in active">
            <h3>購物車</h3>
        </div>

        <div id="popularity" class="tab-pane fade">
            <h3>追蹤紀錄</h3>
        </div>

        <div id="drinkList" class="tab-pane fade">
            <h3>歷史查詢</h3>
        </div>
    @endsection
</body>
</html>