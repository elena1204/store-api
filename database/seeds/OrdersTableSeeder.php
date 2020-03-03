<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Order;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $order1 = new Order;
        $order2 = new Order;

        $order1->user_id = 1;
        $order1->price = 100;
        $order2->user_id = 1;
        $order2->price = 125;

        $order1->save();
        $order2->save();
    }
}
