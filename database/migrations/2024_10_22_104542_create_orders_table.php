<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('delivery_address_id')->nullable(); 
            $table->string('location');
            $table->string('category'); 
            $table->string('restaurant'); 
            $table->decimal('total_price', 10, 2)->nullable(); 
            $table->string('paymentMethod')->default('null'); 
            $table->string('delivery_address')->default('null');  
            $table->string('payment_method')->default('null'); 
            $table->timestamps();

          
            $table->foreign('delivery_address_id')->references('id')->on('addresses')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
