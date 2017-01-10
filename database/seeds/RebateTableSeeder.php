<?php

use Illuminate\Database\Seeder;

class RebateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rebate')->insert([
            'discountId' => '3',
            'orderListId' => '1',
        ]);
    }
}
