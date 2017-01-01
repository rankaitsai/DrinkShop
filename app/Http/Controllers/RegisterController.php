<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Http\Requests\MemberRequest;
use Illuminate\Support\Facades\Input;

class RegisterController extends Controller
{
    public function showRegister()
    {
        return view('layouts.register');
    }

    public function getRegister(MemberRequest $request)
    {
        // 執行此function會先經過MemberRequest確認輸入資料是否正確
        // 以下能執行代表request已通過
        $member = new Member;
        $member->register();
        return redirect()->back()->with('state','成功註冊');
    }
}
