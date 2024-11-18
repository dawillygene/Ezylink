<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RecreateProductsTable extends Migration
{
    public function up()
    {
        Schema::dropIfExists('products');

        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('product_name');
            $table->string('slug')->unique();
            $table->decimal('selling_price', 10, 2);
            $table->decimal('cost_price', 10, 2);
            $table->integer('quantity_in_stock');
            $table->unsignedBigInteger('category_id');
            $table->string('sku')->unique();  //Stock Keeping Unit or inventory tracking, add a SKU field that uniquely identifies each product.
            $table->text('short_description');
            $table->text('long_description')->nullable();
            $table->string('product_image')->nullable();
            $table->json('additional_images')->nullable();
            $table->date('expiry_date')->nullable();
            $table->boolean('discount')->default(false);
            $table->decimal('discount_rate', 5, 2)->nullable();
            $table->date('discount_start_date')->nullable();
            $table->date('discount_end_date')->nullable();
            $table->boolean('return_policy')->default(false);
            $table->unsignedBigInteger('views')->default(0);
            $table->unsignedBigInteger('sales_count')->default(0);
            $table->string('currency', 3)->default('Tsh');
            $table->enum('status', ['active', 'inactive', 'archived'])->default('active');
            $table->foreignId('created_by')->constrained('users');
            $table->foreignId('updated_by')->nullable()->constrained('users');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories')->onDelete('restrict');
            $table->index(['product_name', 'category_id']);

        });
        
    }

    public function down()
    {
        
        Schema::dropIfExists('products');
    }
}
