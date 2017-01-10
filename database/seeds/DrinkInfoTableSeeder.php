<?php

use Illuminate\Database\Seeder;

class DrinkInfoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('drink_info')->insert([
            'drinkId' => '2',
            'sugar' => '5',
            'temperature' => '2017-01-03 00:00:00',
            'addition' => '2017-01-04 10:05:01',
        ]);
    }
}
