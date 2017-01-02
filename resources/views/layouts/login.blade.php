<?php
/**
 * Created by PhpStorm.
 * User: rankaitsai
 * Date: 2016/12/23
 * Time: 上午 12:13
 */
?>

{{--@extends('layouts.partials.header')--}}
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>登入頁面</title>
        <link rel="stylesheet" href="{{asset('DrinkShop/public/css/login.css')}}">
        @include('layouts.partials.linkCDN')
    </head>
    <body>
        @include('layouts.partials.header')
        <div class="package">
            <div class="top">
                <h3>登入</h3>
            </div>
            <form action="{{ action('LoginController@getLogin') }}" method="post" class = "form-horizontal" enctype="multipart/form-data">
                <div class = "form-group">
                    <label for="account" class="col-sm-4 control-label"><span style="color:red">*</span>帳號：</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" placeholder="Enter your account" name="account" />
                    </div>
                </div>

                <div class="form-group">
                    <label for="password" class="col-sm-4 control-label"><span style="color:red">*</span>密碼：</label>
                    <div class="col-sm-6">
                        <input type="password" class="form-control" placeholder="Enter your password" name="password" />
                    </div>
                </div>

                @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li><strong>{{ $error }}</strong></li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                {{--@if(\Illuminate\Support\Facades\Session::get('validate') == 'success')--}}
                    {{--<p style="text-align: center" class="bg-danger">成功登入</p>--}}
                {{--@endif--}}

                @if(\Illuminate\Support\Facades\Session::get('validate') == 'failed')
                    <p style="text-align: center" class="bg-danger">登入失敗</p>
                    {{ \Illuminate\Support\Facades\Session::flush() }}
                @endif

                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="button">
                    <input type="submit" name="button" id="button" value="登入" class="btn"/>
                </div>
            </form>
        </div>
    </body>
</html>
