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
        Schema::create('house_addresses', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('house_number_street');
            $table->string('province');
            $table->string('city');
            $table->string('barangay');
            $table->integer('zipcode');
            $table->integer('house_id')->unsigned();
            $table->foreign('house_id')->references('id')->on('houses')->ondelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('house_addresses');
    }
};
