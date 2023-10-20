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
        Schema::create('kue', function (Blueprint $table) {
            $table->char('kode_kue', 4)->nullable(false)->primary();
            $table->string('nama_kue', 50);
            $table->string('gambar_kue', 255);
            $table->unsignedInteger('stok_kue');
            $table->unsignedInteger('harga_kue');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kue');
    }
};
