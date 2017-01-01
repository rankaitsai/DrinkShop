<?php

use Illuminate\Database\Seeder;

class DrinkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {

        DB::table('drink')->insert([

            'name' => '珍珠奶茶',
            'price' => '40',
            'description' => '好喝+',
            'image' => '../images/drinkOne.jpg',
        ]);

        DB::table('drink')->insert([
            'name' => '抹茶鮮奶',
            'price' => '50',
            'description' => '好喝++',
            'image' => '../images/drinkTwo.jpg',
        ]);

        DB::table('drink')->insert([
            'name' => '番茄梅子',
            'price' => '30',
            'description' => '好喝++++++++',
            'image' => '../images/drinkThree.jpg',
        ]);

        DB::table('drink')->insert([
            'name' => '翡翠奇異果',
            'price' => '90',
            'description' => '好喝+++++++++++++',
            'image' => '../images/drinkFour.jpg',
        ]);

        DB::table('drink')->insert([
            'name' => '熱帶水果茶',
            'price' => '110',
            'description' => '好喝++++++++++',
            'image' => '../images/drinkFive.jpg',
        ]);

//        DB::table('drink')->insert([
//            'name' => '鮮奶茶珍珠',
//            'price' => '40',
//            'description' => '好喝+++++++',
//            'image' => '../images/drinkSix.jpg',
//        ]);

        DB::table('drink')->insert([
            'name' => '冰心檸檬',
            'price' => '50',
            'description' => '好喝+++++',
            'image' => '../images/drinkSeven.jpg',
        ]);

        DB::table('drink')->insert([
            'name' => '葡萄柚果粒',
            'price' => '100',
            'description' => '好喝+++++++',
            'image' => '../images/drinkEight.jpg',
        ]);
    }
}
