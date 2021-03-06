<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
//use Illuminate\Database\Eloquent\Model;

class Item extends Eloquent
{
    use HasFactory;
    protected $fillable = [
        'name',
        'price',
        'amount',
    ];
}
