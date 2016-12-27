<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
// remember adding this
use App\Http\Requests\LoginRequest;
use App\Models\Member;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

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
    public function showLogin()
    {
        return view('layouts.login');
    }

    public function logIn(LoginRequest $request)
    {
        $correct = Member::where('account','=',Input::get('account'))->where('password','=',Input::get('password'))->first();

        if ($correct) {
            Session::put('validate','success');
            return redirect()->back();
        }
        else {
            Session::put('validate','failed');
            return redirect()->back();
        }
    }
}
