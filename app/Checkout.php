<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    protected $fillable = ['name', 'address', 'card-name', 'card-number', 
    'card-expiry-month', 'card-expiry-year', 'card-cvc', 'total'];
}
