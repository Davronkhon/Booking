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
        Schema::create('food', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(false);
            $table->foreignId('food_category_id')->constrained();
            $table->decimal('price')->nullable(false);
            $table->string('image');
            $table->text('description');
            $table->unsignedInteger('time');
            $table->boolean('is_active');
            $table->foreignId('restaurant_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('food');
    }
};
