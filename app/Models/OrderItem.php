<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',      // Foreign key to the orders table
        'product_id',    // Foreign key to the products table
        'quantity',      // Quantity of the product in the order
        'price',         // Price of the product at the time of the order
    ];

    // Define relationships
    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
