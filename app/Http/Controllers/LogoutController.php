<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LogoutController extends Controller
{
    public function getLogout()
    {
        Session::flush();
        return view('layouts.login');
    }
}
