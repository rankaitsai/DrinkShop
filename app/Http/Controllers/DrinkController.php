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

    public function searchDrink()
    {
        $drink = new Drink();
        $queryDrink = $drink->searchDrink();
        // 要顯示的頁面，route根據web.php至設定網址
        return view('layouts.pages.searchResult', ['drinks' => $queryDrink]);
    }
}
