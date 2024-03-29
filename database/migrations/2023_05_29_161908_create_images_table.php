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
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('printing_id')->nullable();
            $table->unsignedBigInteger('milling_id')->nullable();
            $table->unsignedBigInteger('laser_id')->nullable();
            $table->string('url');

            $table->foreign('printing_id')->references('id')->on('printings')->onDelete('cascade');
            $table->foreign('milling_id')->references('id')->on('millings')->onDelete('cascade');
            $table->foreign('laser_id')->references('id')->on('lasers')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('images');
    }
};
