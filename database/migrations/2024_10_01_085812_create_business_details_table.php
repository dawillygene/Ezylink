<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessDetailsTable extends Migration
{
    public function up()
    {
        Schema::create('business_details', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->string('company_type');
            $table->string('pan_card_number');
            $table->string('fax_number')->nullable();
            $table->string('website')->nullable();
            $table->string('email')->unique();
            $table->string('number')->nullable();
            $table->string('company_logo')->nullable(); // For file uploads
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('business_details');
    }
}
