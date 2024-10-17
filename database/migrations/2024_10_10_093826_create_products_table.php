<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Product name
            $table->text('short_description')->nullable(); // Short description of the product
            $table->longText('long_description')->nullable(); // Detailed description
            $table->decimal('selling_price', 10, 2); // Selling price of the product
            $table->decimal('cost_price', 10, 2)->nullable(); // Cost price of the product
            $table->integer('quantity_in_stock')->default(0); // Quantity available in stock
            $table->string('category')->nullable(); // Product category
            $table->boolean('has_discount')->default(false); // Whether the product has a discount
            $table->decimal('discount', 5, 2)->nullable(); // Discount percentage
            $table->boolean('has_expiry_date')->default(false); // Whether the product has an expiry date
            $table->date('expiry_date')->nullable(); // Expiry date of the product
            $table->string('order_type')->nullable(); // Order type (Delivery, Pickup, Dine-in)
            $table->boolean('return_policy')->default(false); // Whether the product has a return policy
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
