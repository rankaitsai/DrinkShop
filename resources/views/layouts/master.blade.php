<?php
/**
 * Created by PhpStorm.
 * User: rankaitsai
 * Date: 2016/12/20
 * Time: 上午 02:43
 */
?>

<!--/homepage-->
{{--共同的區塊(master)--}}


{{--@extends('layouts.partials.header')--}}
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <link rel="stylesheet" type="text/css" href="{{asset('DrinkShop/public/css/master.css')}}">
        <title>@yield('title')</title>
    </head>
    <body>
    @include('layouts.partials.header')
    {{--{{var_dump(\Illuminate\Support\Facades\Session::get('validate'))}}--}}

        {{--@section('loginState')--}}
            {{--@if (\Illuminate\Support\Facades\Session::get('validate') == 'success')--}}
                {{--<li class="dropdown">--}}
                    {{--<a href="" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">--}}
                        {{--<strong>Home成功</strong><span class="caret"></span>--}}
                    {{--</a>--}}
                    {{--<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">--}}
                        {{--<li><a href="#">Profiles</a></li>--}}
                        {{--<li><a href="#">Settings</a></li>--}}
                        {{--<li><a href="{{ \Illuminate\Support\Facades\Session::flush() }}">Log out</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
                {{--{{\Illuminate\Support\Facades\Session::put('validate','success')}}--}}
            {{--@else--}}
                {{--<li><a href="{{ action('LoginController@showLogIn') }}"><span class="glyphicon glyphicon-log-in"></span><strong>Sign in</strong></a></li>--}}
            {{--@endif--}}
        {{--@stop--}}

        @include('layouts.partials.navigation')
        {{--sidebar and contents remove to pages/xxx.blade.php--}}
        <div>
            <br>
            @include('layouts.partials.carouselSlide')
            <br>
        </div>

        <div class="row">
            <div class="col-md-3">
                <div class="list-group">
                    @yield('sidebar')
                </div>
            </div>

            <div class="col-md-9 content">
                <div class="tab-content">
                    @yield('contents')
                </div>
            </div>

        </div>

    </body>
    {{--{{var_dump(\Illuminate\Support\Facades\Session::get('validate'))}}--}}
</html>
