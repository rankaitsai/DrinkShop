<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Drink;

class DrinkController extends Controller
{
    public function getAllDrinks()
    {
        $drink = new Drink();
        $menu = $drink->getAllDrinks();
        return view('layouts.pages.menu', ['drinks' => $menu]);
    }
}
