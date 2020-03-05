<?php

use Illuminate\Database\Seeder;
use App\Order;
use App\Product;

class OrdersProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = Product::where('name', 'Product 2')->first();
        /** @var Order $order */
        $order = Order::find(3);

        $order->products()->attach($product, ['quantity' => 10]);
    }
}
