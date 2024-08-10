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
        Schema::create('house_details', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('house_name');
            $table->integer('square_meters');
            $table->integer('floors');
            $table->integer('rooms');
            $table->integer('bathrooms');
            $table->boolean('backyard');
            $table->boolean('basement');
            $table->boolean('attic');
            $table->float('price');
            $table->boolean('furnished');
            $table->string('description');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('house_details');
    }
};
