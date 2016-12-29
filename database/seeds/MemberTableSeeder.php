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
            'password' => 'rankaitsai',
            'photo' => null,
            'sex' => 'boy',
            'phone' => '0928394857',
            'email' => 'benny85527@gmail.com',
            'address' => 'Taipei'
        ]);

        DB::table('member')->insert([
            'name' => 'test',
            'account' => 'test',
            'password' => 'test',
            'photo' => null,
            'sex' => 'girl',
            'phone' => '0939408748',
            'email' => 'test@gmail.com',
            'address' => '桃園市'
        ]);

        DB::table('member')->insert([
            'name' => 'admin',
            'account' => 'admin',
            'password' => 'admin',
            'photo' => null,
            'sex' => 'boy',
            'phone' => '0939908748',
            'email' => 'admin@gmail.com',
            'address' => '台中市'
        ]);

        DB::table('member')->insert([
            'name' => 'guest',
            'account' => 'guest',
            'password' => 'guest',
            'photo' => null,
            'sex' => 'girl',
            'phone' => '0939403748',
            'email' => 'guest@gmail.com',
            'address' => '彰化縣'
        ]);

        // choose one execute
        //$this->call(MemberTableSeeder::class);
    }
}
