<?php

use Illuminate\Database\Seeder;

class ShoppingCartTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shopping_cart')->insert([
            'memberId' => '4',
            'drinkId' => '1',
            'quantity' => '1',
        ]);
    }
}
