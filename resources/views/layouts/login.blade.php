<?php
/**
 * Created by PhpStorm.
 * User: rankaitsai
 * Date: 2016/12/23
 * Time: 上午 12:13
 */
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>登入頁面</title>
        <link rel="stylesheet" href="{{asset('DrinkShop/public/css/register.css')}}">
    </head>
    <body>
        @include('layouts.partials.header')
        <div class="package">
            <div class="top">
                <h3>登入</h3>
            </div>
            <form action="" method="post" class = "form-horizontal" enctype="multipart/form-data">
                <div class = "form-group">
                    <label for="account" class="col-sm-4 control-label"><span style="color:red">*</span>帳號：</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" placeholder="Enter your account" name="account" />
                    </div>
                </div>

                <div class="form-group">
                    <label for="password" class="col-sm-4 control-label"><span style="color:red">*</span>密碼：</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" placeholder="Enter your password" name="password" />
                    </div>
                </div>

                <div class="button">
                    <input type="submit" name="button" id="button" value="送出" class="btn"/>
                </div>
            </form>
        </div>
    </body>
</html>
