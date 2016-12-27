<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Http\Requests\MemberRequest;
use Illuminate\Support\Facades\Input;

class RegisterController extends Controller
{
    public function showSignUp()
    {
        return view('layouts.register');
    }

    public function signUp(MemberRequest $request)
    {
        // 執行此function會先經過MemberRequest確認輸入資料是否正確
        // 以下能執行代表request已通過
        $member = new Member;
        $member->name = Input::get('name');
        $member->account = Input::get('account');
        $member->password = Input::get('password');
        $member->photo = Input::file('photo');
        $member->sex = Input::get('sex');
        $member->phone = Input::get('phone');
        $member->email = Input::get('email');
        $member->address = Input::get('address');
        $member->save();
        return redirect()->back()->with('state','成功註冊');
    }
}
