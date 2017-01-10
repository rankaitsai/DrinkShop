<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(MemberTableSeeder::class);
        $this->call(DrinkTableSeeder::class);
        $this->call(CommentTableSeeder::class);
        $this->call(DiscountTableSeeder::class);
        $this->call(DrinkInfoTableSeeder::class);
        $this->call(HistoryExploreTableSeeder::class);
        $this->call(OnSaleTableSeeder::class);
        $this->call(OrderListTableSeeder::class);
        $this->call(OrderItemTableSeeder::class);
        $this->call(RebateTableSeeder::class);
        $this->call(ShoppingCartTableSeeder::class);
        $this->call(TraceTableSeeder::class);
    }
}
