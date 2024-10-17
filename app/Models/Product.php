<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name',
        'selling_price',
        'cost_price',
        'quantity_in_stock',
        'category',
        'order_type',
        'short_description',
        'long_description',
        'product_image',
        'additional_images',
        'expiry_date',
        'discount',
    ];
}
