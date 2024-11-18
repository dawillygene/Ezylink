<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('slug')->unique(); // for SEO-friendly URL slug
            $table->text('description')->nullable(); 
            $table->string('icon')->nullable(); 
            $table->foreignId('parent_id')->nullable()->constrained('categories')->onDelete('cascade');
            $table->boolean('is_active')->default(true);
            $table->timestamps(); 
            $table->softDeletes();
        });
    }
    
   
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
