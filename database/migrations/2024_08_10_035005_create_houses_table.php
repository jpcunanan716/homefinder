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
        Schema::create('houses', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('houseName');
            $table->string('houseNumberStreet');
            $table->string('province');
            $table->string('city');
            $table->string('barangay');
            $table->integer('zipCode');
            $table->integer('squareMeters');
            $table->integer('floors');
            $table->integer('rooms');
            $table->integer('bathrooms');
            $table->boolean('backyard');
            $table->boolean('basement');
            $table->boolean('attic');
            $table->float('price');
            $table->boolean('furnished');
            $table->string('description');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->ondelete('cascade');
           });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('houses');
    }
};
