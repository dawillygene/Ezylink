<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RecreateProductsTable extends Migration
{
    public function up()
    {
        // Drop the old table if it exists
        Schema::dropIfExists('products');

        // Recreate the products table with the new structure
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('product_name');
            $table->decimal('selling_price', 10, 2);
            $table->decimal('cost_price', 10, 2);
            $table->integer('quantity_in_stock');
            $table->string('category');
            $table->string('order_type');
            $table->text('short_description');
            $table->text('long_description')->nullable();
            $table->string('product_image')->nullable();
            $table->json('additional_images')->nullable();
            $table->date('expiry_date')->nullable();
            $table->boolean('discount')->default(false);
            $table->timestamps();
        });
    }

    public function down()
    {
        // If needed, this will drop the products table
        Schema::dropIfExists('products');
    }
}
