<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // controls the homepage button or else element
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('layouts.master');
    }

    public function signUp()
    {
        return view('layouts.register');
    }
}
