<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'companies';

    public function products() 
    {
      // this returns a relation
      return $this->hasMany('App\Product');
    }

    public function getProducts()
    {
      // this returns the actual database rows as Product objects
      return $this->products()->get();
    }
}
