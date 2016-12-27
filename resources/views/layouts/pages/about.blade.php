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
    @section('title','關於我們')
</head>
<body>
    @section('sidebar')
        <span class="list-group-item active" data-toggle="tab">關於我們</span>
        <a href="#contactUs" class="list-group-item" data-toggle="tab">聯絡我們</a>
        <a href="#test" class="list-group-item" data-toggle="tab">測試用</a>
    @endsection

    @section('contents')
        <div id="contactUs" class="tab-pane fade in active">
            <h3>聯絡我們</h3>
        </div>
        <div id="test" class="tab-pane fade">
            <h3>測試用</h3>
        </div>
    @endsection
</body>
</html>