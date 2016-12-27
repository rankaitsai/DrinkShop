<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    // controls the homepage button or else element
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function showHomepage()
    {
        return view('layouts.pages.home');
    }

    public function showAbout()
    {
        return view('layouts.pages.about');
    }

    public function showMenu()
    {
        return view('layouts.pages.menu');
    }

    public function signUp()
    {
        return view('layouts.register');
    }

    public function logIn()
    {
        return view('layouts.login');
    }
}
