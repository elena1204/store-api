<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{
    public function products()
    {
        return $this->belongsToMany(
            Product::class,
            'orders_products',
            'order_id',
            'product_id'
        )->withPivot('quantity')
        ->withTimestamps();
    }

    public function user(): BelongsTo
    {
      return $this->belongsTo(User::class);
    }

    public function setUser(User $user)
    {
        $this->user()->associate($user);
    }

    public function getUser(): User
    {
        return $this->user()->get()->first();
    }

    public function getPrice(): float
    {
        return (float) $this->getAttribute('price');
    }

    public function setPrice(float $price)
    {
        $this->setAttribute('price', $price);
    }

    public function jsonSerialize()
    {
        return [
            'id' => $this->id,
            'user' => $this->getUser(),
            'products' => $this->products()->get()->all()
        ];
    }
}
