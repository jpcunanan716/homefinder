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
            $table->id();
            $table->timestamps();
            $table->string('house_name');
            $table->integer('square_meters');
            $table->string('floors');
            $table->string('rooms');
            $table->string('bathrooms');
            $table->string('backyard');
            $table->string('basement');
            $table->string('attic');
            $table->float('price');
            $table->string('description');
            $table->integer('house_id')->unsigned();
            $table->foreign('house_id')->references('id')->on('houses')->ondelete('cascade');
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
