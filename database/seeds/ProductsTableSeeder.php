<?php

use Illuminate\Database\Seeder;
use App\Product;
use App\User;
use App\Company;


class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $company = Company::where('name', 'Filip DOOEL')->first();
        for($i = 1; $i < 5; $i++) {
            $product = new Product();

            $product->setName('Product ' . $i);
            $product->setDescription('product ' . $i . ' desc');
            $product->setPrice(100 * $i);
            $product->setCompany($company);

            $product->save();
        }
    }
}
