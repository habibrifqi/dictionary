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
        Schema::create('contoh_katalain_indo', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('katalain_indo_id');
            $table->string('kl_contoh_indo');
            $table->string('kl_arti_prc');
            $table->string('des_kl_contoh_indo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contoh_katalain_indo');
    }
};
