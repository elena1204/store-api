<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product1 = new Product;
        $product2 = new Product;
        $product3 = new Product;
        $product4 = new Product;
        $product5 = new Product;

        $product1->name = 'product 1';
        $product1->description = 'product 1 desc';
        $product1->price = 100;
        $product1->user_id = 1;

        $product2->name = 'product 2';
        $product2->description = 'product 2 desc';
        $product2->price = 200;
        $product2->user_id = 1;

        $product3->name = 'product 3';
        $product3->description = 'product 3 desc';
        $product3->price = 300;
        $product3->user_id = 1;

        $product4->name = 'product 4';
        $product4->description = 'product 4 desc';
        $product4->price = 400;
        $product4->user_id = 1;

        $product5->name = 'product 5';
        $product5->description = 'product 5 desc';
        $product5->price = 500;
        $product5->user_id = 1;

        $product1->save();
        $product2->save();
        $product3->save();
        $product4->save();
        $product5->save();
    }
}
