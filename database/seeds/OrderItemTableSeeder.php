<?php

use Illuminate\Database\Seeder;

class OrderItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order_item')->insert([
            'orderId' => '1',
            'drinkId' => '2',
            'quantity' => '1',
        ]);

        DB::table('order_item')->insert([
            'orderId' => '1',
            'drinkId' => '3',
            'quantity' => '2',
        ]);

        DB::table('order_item')->insert([
            'orderId' => '1',
            'drinkId' => '1',
            'quantity' => '1',
        ]);
    }
}
