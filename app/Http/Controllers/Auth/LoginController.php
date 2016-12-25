<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
// remember adding this
use App\Http\Requests\MemberRequest;
use App\Http\Requests\LoginRequest;
use App\Models\Member;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/homepage';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    // return login page
    public function show()
    {
        return view('layouts.login');
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
    }

    public function logIn(LoginRequest $request)
    {
        $correct = Member::where('account','=',Input::get('account'))->where('password','=',Input::get('password'))->first();

        if ($correct) {
            return '正確登入';
        }
        return '輸入錯誤';

    }
}
