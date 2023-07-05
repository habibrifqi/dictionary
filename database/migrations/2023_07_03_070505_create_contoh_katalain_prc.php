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
        Schema::create('contoh_katalain_prc', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('katalain_prc_id');
            $table->string('kl_contoh_prc');
            $table->string('kl_arti_indo');
            $table->string('des_kl_contoh_indo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contoh_katalain_prc');
    }
};
