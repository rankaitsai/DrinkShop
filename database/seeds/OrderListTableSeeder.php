<?php

use Illuminate\Database\Seeder;

class OrderListTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order_list')->insert([
            'memberId' => '1',
            'drinkName' => '珍珠奶茶',
            'drinkPrice' => '40',
            'date' => '2017-12-31 10:10:10',
            'state' => '運送中',
            'cost' => '40',
        ]);
    }
}
