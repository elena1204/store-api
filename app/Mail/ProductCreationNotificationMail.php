<?php

namespace App\Mail;

use App\Product;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ProductCreationNotificationMail extends Mailable
{
    use Queueable, SerializesModels;

    private $product;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('testtest@test.com')
                    ->view('mails.product-created', ['product' => $this->product])
                    ->subject('New product has been created!');
    }
}
