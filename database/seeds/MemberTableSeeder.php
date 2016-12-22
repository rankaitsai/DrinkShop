<?php

use Illuminate\Database\Seeder;

class MemberTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('member')->insert([
            'name' => 'rankaitsai',
            'account' => 'rankaisai',
            'password' => 'hero871gee292',
            'photo' => null,
            'sex' => 'boy',
            'phone' => '0930052827',
            'email' => 'benny85527@gmail.com',
            'address' => 'kao'
        ]);

        // choose one execute
        //$this->call(MemberTableSeeder::class);
    }
}
