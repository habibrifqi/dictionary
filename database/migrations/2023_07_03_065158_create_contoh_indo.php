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
        Schema::create('contoh_indo', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('dtl_indo_prc_id');
            $table->string('contoh_indo');
            $table->string('arti_prc');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contoh_indo');
    }
};
