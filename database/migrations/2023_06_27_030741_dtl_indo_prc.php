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
        Schema::create('dtl_indo_prc', function (Blueprint $table) {
            $table->id();
            $table->string('kamus_id');
            $table->string('arti_prc');
            $table->string('des_dtl_indo_prancis')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('dtl_indo_prc');
    }
};
