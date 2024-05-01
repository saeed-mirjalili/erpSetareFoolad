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
        Schema::create('cuts', function (Blueprint $table) {
            $table->id();
            $table->string('barcodeRoll');
            $table->string('barcodeCut');
            $table->bigInteger('width');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('barcodeRoll')->references('barcodeRoll')->on('rolls')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cuts');
    }
};
