<?php

use Illuminate\Database\Seeder;

class OnSaleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('on_sale')->insert([
            'drinkId' => '3',
            'discountId' => '1',
        ]);

        DB::table('on_sale')->insert([
            'drinkId' => '3',
            'discountId' => '2',
        ]);

        DB::table('on_sale')->insert([
            'drinkId' => '4',
            'discountId' => '1',
        ]);

        DB::table('on_sale')->insert([
            'drinkId' => '6',
            'discountId' => '3',
        ]);

        DB::table('on_sale')->insert([
            'drinkId' => '5',
            'discountId' => '2',
        ]);
    }
}
