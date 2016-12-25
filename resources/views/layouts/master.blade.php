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

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="{{asset('DrinkShop/public/css/master.css')}}">
        <title>@yield('title')</title>
    </head>
    <body>
        @include('layouts.partials.header')
        @include('layouts.partials.navigation')

        {{--sidebar and contents remove to pages/xxx.blade.php--}}
        <div class="tab-content">
            <br>
            @include('layouts.partials.carouselSlide')
            <br>
            <div class="list-group">
                @yield('sidebar')
            </div>
        </div>
    </body>
</html>
