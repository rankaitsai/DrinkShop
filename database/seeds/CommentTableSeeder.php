<?php

use Illuminate\Database\Seeder;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comment')->insert([
            'memberId' => '2',
            'drinkId' => '5',
            'date' => '2017-01-03 22:01:50',
            'stars' => '非常好喝',
            'description' => '好喝',
        ]);

        DB::table('comment')->insert([
            'memberId' => '1',
            'drinkId' => '3',
            'date' => '2016-05-10 21:10:34',
            'stars' => '很好喝',
            'description' => '這是一杯飲料',
        ]);

        DB::table('comment')->insert([
            'memberId' => '1',
            'drinkId' => '7',
            'date' => '2017-01-01 00:00:00',
            'stars' => '普通',
            'description' => '飲料好難喝',
        ]);
    }
}
