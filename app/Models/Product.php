<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Freshbitsweb\LaravelCartManager\Traits\Cartable;

class Product extends Model
{
    use HasFactory, Cartable;

    protected $table = 'products';
    protected $fillable = [
        'sku',
        'description',
        'ean',
        'rrp',
        'rrp_vat',
        'stock',
        'estimated_delivery',
        'image_name',
        'vatable',
        'obsolete',
        'dead',
        'replacement_product',
        'brand',
        'extended_description',
        'variation',
        'date_added',
        'prod_id',
        'super_product_name',
        'colour',
        'image_url',
        'category',
        'model'
    ];

    public function categories()
    {
        //
    }
}
