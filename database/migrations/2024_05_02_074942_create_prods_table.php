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
        Schema::create('prods', function (Blueprint $table) {
            $table->id();
            $table->string('barcodeCut')->unique();
            $table->string('barcodeProd')->unique();
            $table->string('type');
            $table->integer('numOfPack');
            $table->unsignedBigInteger('weight');
            $table->timestamps();

            $table->foreign('barcodeCut')->references('barcodeCut')->on('cuts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prods');
    }
};
