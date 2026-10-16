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
        Schema::create('apartments', function (Blueprint $table) {
            $table->id();
            $table->string('house');
            $table->integer('floor');
            $table->string('number');
            $table->string('bedrooms');
            $table->string('finishing');
            $table->string('view');
            $table->decimal('area', 8, 2);
            $table->unsignedBigInteger('price');
            $table->string('image_plan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apartments');
    }
};
