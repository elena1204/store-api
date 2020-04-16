<?php

namespace App\Events;

use App\Product;

class ProductWasCreated
{
    private $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function getProduct()
    {
        return $this->product;
    }
}
