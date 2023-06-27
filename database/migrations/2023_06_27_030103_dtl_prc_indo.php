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
        //
        Schema::create('dtl_prc_indo', function (Blueprint $table) {
            $table->id();
            $table->string('kamus_id');
            $table->string('arti_indo');
            $table->string('DPI_contoh_prancis');
            $table->string('DPI_arti_indo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('dtl_prc_indo');
    }
};
