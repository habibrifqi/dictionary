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
        Schema::create('contoh_prancis', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('dtl_prc_indo_id');
            $table->string('contoh_prc');
            $table->string('arti_indo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contoh_prancis');
    }
};
