<?php

use Illuminate\Database\Seeder;

class HistoryExploreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('history_explore')->insert([
            'memberId' => '1',
            'drinkId' => '5',
        ]);

        DB::table('history_explore')->insert([
            'memberId' => '1',
            'drinkId' => '6',
        ]);

        DB::table('history_explore')->insert([
            'memberId' => '3',
            'drinkId' => '1',
        ]);

        DB::table('history_explore')->insert([
            'memberId' => '4',
            'drinkId' => '5',
        ]);

        DB::table('history_explore')->insert([
            'memberId' => '3',
            'drinkId' => '2',
        ]);
    }
}
