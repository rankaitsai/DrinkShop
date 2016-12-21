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
        @include('layouts.partials.linkcdn');
    </head>
    <body>
        <div class = 'package'>
            @include('layouts.partials.header');
            <div class = 'top'>
                <h3>註冊新帳號</h3>
            </div>
            <form action="" method="post" class = "form-horizontal">
                <div class = "form-group">
                    <label for="guestName" class="col-sm-4 control-label"><span style="color:red">*</span>帳號：</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" placeholder="Enter your account" name="guestName" id="guestName" />
                    </div>
                </div>

                <div class="form-group">
                    <label for="guestEmail" class="col-sm-4 control-label"><span style="color:red">*</span>密碼：</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" placeholder="Enter your password" name="guestEmail" id="guestEmail" />
                    </div>
                </div>

                <div class="form-group">
                    <label for="guestEmail" class="col-sm-4 control-label"><span style="color:red">*</span>名字：</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" placeholder="Enter your name" name="guestEmail" id="guestEmail" />
                    </div>
                </div>

                <div class="form-group">
                    <label for="guestGender" class="col-sm-4 control-label">性別：</label>
                    <label class="radio-inline">
                        <input type="radio" name="guestGender" id="radio" value="男" /> 男
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="guestGender" id="radio2" value="女" />女
                    </label>
                </div>

                <div class="form-group">
                    <label for="guestEmail" class="col-sm-4 control-label"><span style="color:red">*</span>電話：</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" placeholder="Enter your phone" name="guestEmail" id="guestEmail" />
                    </div>
                </div>

                <div class="form-group">
                    <label for="guestSubject" class="col-sm-4 control-label"><span style="color:red">*</span>Email：</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" placeholder="Enter your Email" name="guestSubject" id="guestSubject" />
                    </div>
                </div>

                <div class="form-group">
                    <label for="guestContent" class="col-sm-4 control-label"><span style="color:red">*</span>地址：</label>
                    <div class="col-sm-6">
                        <input type="text" name="guestContent" placeholder="Enter your address" class="form-control" id="guestContent" />
                    </div>
                </div>

                <div class="form-group">
                    <label for="guestContent" class="col-sm-4 control-label">Photo：</label>
                    <div class="col-sm-6">
                        <input type="button"/>
                    </div>
                </div>

                <div class="button">
                    <input type="submit" name="button" id="button" value="送出" class="btn"/>
                </div>
            </form>
        </div>
    </body>
</html>