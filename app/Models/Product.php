<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Freshbitsweb\LaravelCartManager\Traits\Cartable;

class Product extends Model
{
    use HasFactory, Cartable;

    protected $fillable = [
        'name',
        'price',
        'image',
        'description',
    ];
}
