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
        Schema::create('millings', function (Blueprint $table) {
            $table->id();
            $table->string('en_name')->nullable();
            $table->string('en_description')->nullable();
            $table->string('am_name')->nullable();
            $table->string('am_description')->nullable();
            $table->string('ru_name')->nullable();
            $table->string('ru_description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('millings');
    }
};
