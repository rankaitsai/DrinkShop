<?php

use Illuminate\Database\Seeder;

class TraceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('trace')->insert([
            'memberId' => '1',
            'drinkId' => '3',
            'date' => '2017-01-04 10:05:01',
        ]);
    }
}
