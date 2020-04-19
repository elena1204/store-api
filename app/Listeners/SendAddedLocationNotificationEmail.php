<?php


namespace App\Listeners;


use App\Events\LocationWasAdded;
use App\Mail\ProductCreationNotificationMail;
use Illuminate\Support\Facades\Mail;

class SendAddedLocationNotificationEmail
{
    public function handle(LocationWasAdded $locationWasAdded)
    {
        $location = $locationWasAdded->getLocation();

        Mail::to($location->getCompany()->getEmail())->send(new ProductCreationNotificationMail($location));

    }

}
