<?php

use Illuminate\Database\Seeder;

class DiscountTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('discount')->insert([
            'type' => '5',
            'start_date' => '2017-01-03 00:00:00',
            'end_date' => '2017-01-04 10:05:01',
        ]);

        DB::table('discount')->insert([
            'type' => '3',
            'start_date' => '2016-11-29 01:05:00',
            'end_date' => '2017-12-31 10:10:10',
        ]);

        DB::table('discount')->insert([
            'type' => '1',
            'start_date' => '2015-05-19 00:00:00',
            'end_date' => '2015-05-27 00:05:01',
        ]);
    }
}
