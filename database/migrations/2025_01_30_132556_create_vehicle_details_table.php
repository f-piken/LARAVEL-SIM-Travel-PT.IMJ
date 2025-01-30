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
        Schema::create('vehicle_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('vehicle_id'); // Relasi ke booking
            $table->boolean('stnk')->default(false);
            $table->boolean('buku_kir')->default(false);
            $table->boolean('kartu_tap_oli')->default(false);
            $table->boolean('dongkrak')->default(false);
            $table->boolean('ban_serep')->default(false);
            $table->boolean('kunci_roda')->default(false);
            $table->boolean('bbm_full')->default(false);
            $table->boolean('lampu_utama')->default(false);
            $table->boolean('lampu_belakang')->default(false);
            $table->boolean('lampu_sein')->default(false);
            $table->boolean('lampu_dalam')->default(false);
            $table->boolean('lcd')->default(false);
            $table->boolean('ac')->default(false);
            $table->timestamps();

            $table->foreign('vehicle_id')->references('id')->on('vehicles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicle_details');
    }
};
