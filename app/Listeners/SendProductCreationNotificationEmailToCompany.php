<?php

namespace App\Listeners;

use App\Events\ProductWasCreated;
use App\Mail\ProductCreationNotificationMail;
use Illuminate\Support\Facades\Mail;

class SendProductCreationNotificationEmailToCompany
{
    public function handle(ProductWasCreated $productWasCreated)
    {
        $product = $productWasCreated->getProduct();

        Mail::to($product->getCompany()->getEmail())->send(new ProductCreationNotificationMail($product));
    }
}
