<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Order;
use App\User;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('email', 'john@doe.com')->first();

        $order = new Order();
        $order->setUser($user);
        $order->setPrice(59.4);

        $order->save();

        $order = new Order();
        $order->setUser($user);
        $order->setPrice(6.4);

        $order->save();
    }
}
