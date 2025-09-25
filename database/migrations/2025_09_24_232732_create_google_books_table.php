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
        Schema::create('google_books', function (Blueprint $table) {
            $table->id();
            $table->string('thumbnail')->nullable();
            $table->string('google_id')->unique();
            $table->string('title');
            $table->string('authors')->nullable();
            $table->string('publisher')->nullable();
            $table->date('published_date')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('google_books');
    }
};
