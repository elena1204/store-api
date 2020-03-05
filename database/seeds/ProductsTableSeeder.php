<?php

use Illuminate\Database\Seeder;
use App\Product;
use App\User;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('email', 'john@doe.com')->first();

        for($i = 1; $i < 5; $i++) {
            $product = new Product();

            $product->setName('Product ' . $i);
            $product->setDescription('product ' . $i . ' desc');
            $product->setPrice(100 * $i);
            $product->setUser($user);

            $product->save();
        }
    }
}
