<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('bank_details', function (Blueprint $table) {
            $table->id();
            $table->string('bank_name');
            $table->string('branch');
            $table->string('account_holder_name');
            $table->string('account_number')->unique();
            $table->string('ifsc_code')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('bank_details');
    }
};
