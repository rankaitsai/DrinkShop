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
    @include('layouts.partials.linkCDN')
    @section('title','個人專區')
</head>
<body>
    @section('sidebar')
        <span class="list-group-item active">儲存資訊</span>
        <a href="#shoppingCart" class="list-group-item" data-toggle="tab">購物車</a>
        <a href="#trace" class="list-group-item" data-toggle="tab">追蹤紀錄</a>
        <a href="#historyExplore" class="list-group-item" data-toggle="tab">歷史查詢</a>
    @endsection

    @section('contents')
        <div id="shoppingCart" class="tab-pane fade in active">
            <h3>購物車</h3>
            <div class="panel panel-default">
                <!-- Table -->
                <table class="table">
                    <thead>
                        <tr>
                            <th class="hidden-phone">#</th>
                            <th>飲料名稱</th>
                            <th>飲料價格</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    @foreach($shoppingCartDrinks as $drink)
                        <tbody>
                            <tr>
                                <td class="hidden-phone">ppp</td>
                                <td>{{ $drink->name }}</td>
                                <td>{{ $drink->price }}</td>
                                <td><a href="#" class="btn btn-default" role="button">Delete</a></td>
                            </tr>
                        </tbody>
                    @endforeach
                </table>
            </div>
            <div>
                <button class="btn btn-primary pull-right">結帳</button>
            </div>
        </div>

        <div id="trace" class="tab-pane fade">
            <h3>追蹤紀錄</h3>
            <div class="panel panel-default">
                <!-- Table -->
                <table class="table">
                    <thead>
                    <tr>
                        <th class="hidden-phone">#</th>
                        <th>飲料名稱</th>
                        <th>飲料價格</th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    @foreach($traceDrinks as $drink)
                        <tbody>
                        <tr>
                            <td class="hidden-phone">ppp</td>
                            <td>{{ $drink->name }}</td>
                            <td>{{ $drink->price }}</td>
                            <td><a href="#" class="btn btn-default" role="button">Delete</a></td>
                        </tr>
                        </tbody>
                    @endforeach
                </table>
            </div>
        </div>

        <div id="historyExplore" class="tab-pane fade">
            <h3>歷史查詢</h3>
        </div>
    @endsection
</body>
</html>