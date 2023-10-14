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
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->char('id_pembayaran',4)->nullable(false)->primary();
            $table->char('kode_metode',4)->nullable(false);
            $table->char('id_pengeluaran',4)->nullable(false);
            $table->string('bukti_pembayaran',255);
            $table->date('tanggal_pembayaran');
            $table->string('nama_penerima',50);
            $table->string('nomor_rekening_penerima',20);
            $table->unsignedBigInteger('nominal');

            $table->foreign('kode_metode')->on('metode_pembayaran')->references('kode_metode')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('id_pengeluaran')->on('rencana_pengeluaran')->references('id_pengeluaran')->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayaran');
    }
};
