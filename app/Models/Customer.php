<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'name', 'lastname', 'adress', 'phone number', 'Isic'
    ];
}
