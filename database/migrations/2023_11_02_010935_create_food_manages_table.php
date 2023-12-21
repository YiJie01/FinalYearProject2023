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
        Schema::create('food_manages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('categoryID');
            $table->double('price',8,2);
            $table->string('image');
            $table->integer('quantity')->unsigned();
            $table->string('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('food_manages');
    }
};
