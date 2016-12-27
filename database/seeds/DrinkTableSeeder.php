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
        ]);

        DB::table('drink')->insert([
            'name' => '抹茶鮮奶',
            'price' => '50',
            'description' => '好喝++',
        ]);

        DB::table('drink')->insert([
            'name' => '番茄梅子',
            'price' => '30',
            'description' => '好喝+++',
        ]);
    }
}
