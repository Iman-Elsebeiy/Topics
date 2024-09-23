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
        Schema::create('topics', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable(false);
            $table->text('content')->nullable(false);
            $table->boolean('trending')->default(0);
            $table->boolean('published')->default(0);
            $table->integer('views')->default(0);
            $table->string('image')->nullable(false);
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');  // Foreign key constraint
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('topics');
        
    }
};
