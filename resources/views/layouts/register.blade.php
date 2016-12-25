<?php
/**
 * Created by PhpStorm.
 * User: rankaitsai
 * Date: 2016/12/20
 * Time: 上午 12:18
 */
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>註冊新帳號</title>
        <link rel="stylesheet" href="{{asset('DrinkShop/public/css/register.css')}}">
    </head>
    <body>
        @include('layouts.partials.header')
        <div class="package">
            <div class="top">
                <h3>註冊新帳號</h3>
            </div>
            <form action="registerMessage" method="post" class = "form-horizontal" enctype="multipart/form-data">
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

                <div class="form-group">
                    <label for="name" class="col-sm-4 control-label"><span style="color:red">*</span>名字：</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" placeholder="Enter your name" name="name" />
                    </div>
                </div>

                <div class="form-group">
                    <label for="sex" class="col-sm-4 control-label">性別：</label>
                    <label class="radio-inline">
                        <input type="radio" name="sex" id="radio" value="男" />男
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="sex" id="radio2" value="女" />女
                    </label>
                </div>

                <div class="form-group">
                    <label for="phone" class="col-sm-4 control-label"><span style="color:red">*</span>電話：</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" placeholder="Enter your phone" name="phone" />
                    </div>
                </div>

                <div class="form-group">
                    <label for="email" class="col-sm-4 control-label"><span style="color:red">*</span>Email：</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" placeholder="Enter your Email" name="email" />
                    </div>
                </div>

                <div class="form-group">
                    <label for="address" class="col-sm-4 control-label"><span style="color:red">*</span>地址：</label>
                    <div class="col-sm-6">
                        <input type="text" name="address" placeholder="Enter your address" class="form-control" />
                    </div>
                </div>

                <div class="form-group">
                    <label for="photo" class="col-sm-4 control-label">Photo：</label>
                    <div class="col-sm-6">
                        {{--只能輸入圖片--}}
                        <input type="file" name="photo" accept=".png .jpg .jpeg" />
                    </div>
                </div>

                @if(count($errors) > 0)
                    <div class="error">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li class="list-group-item list-group-item-danger"><strong>{{ $error }}</strong></li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="button">
                    <input type="submit" name="button" id="button" value="送出" class="btn"/>
                </div>

                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form>
        </div>
    </body>
</html>