<?php
/**
 * Created by PhpStorm.
 * User: rankaitsai
 * Date: 2017/1/2
 * Time: 下午 08:11
 */
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('DrinkShop/public/css/comment.css')}}">
    @include('layouts.partials.linkCDN')
    <title>評論</title>
</head>
    <body>
        @include('layouts.partials.header')
        <div class="package">
            <div class="top">
                <h3>評論</h3>
            </div>
            <form action="{{ route('comment.form',$drinkId) }}" method="post" class = "form-horizontal" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class = "form-group">
                    <label for="drinkName" class="col-sm-4 control-label">飲料名稱:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="drinkName" value="{{ $drinkName }}" disabled/>
                    </div>
                </div>

                <div class="form-group">
                    <label for="stars" class="col-sm-4 control-label"><span style="color:red">*</span>評價等級:</label>
                    <label class="radio-inline">
                        <input type="radio" name="stars" id="radio" value="非常好喝" /> 非常好喝
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="stars" id="radio2" value="很好喝" /> 很好喝
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="stars" id="radio3" value="普通"/> 普通
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="stars" id="radio4" value="不好喝" /> 不好喝
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="stars" id="radio5" value="非常不好喝" /> 非常不好喝
                    </label>
                </div>

                <div class="form-group">
                    <label for="description" class="col-sm-4 control-label">描述:</label>
                    <div class="col-sm-6">
                        <textarea name="description" id="description" class="form-control" cols="30" rows="10"></textarea>
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

                @if(\Illuminate\Support\Facades\Session::has('commentSuccess'))
                    <p class="bg-success" style="text-align: center;">{{\Illuminate\Support\Facades\Session::get('commentSuccess')}}</p>
                    {{ header('Refresh:1') }}
                @endif

                <div class="button">
                    <input type="submit" name="button" id="button" value="送出" class="btn"/>
                </div>
            </form>
        </div>
    </body>
</html>
