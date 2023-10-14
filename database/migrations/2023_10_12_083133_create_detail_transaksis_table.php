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
        Schema::create('detail_transaksi', function (Blueprint $table) {
            $table->char('id_detail_transaksi',4)->nullable(false)->primary();
            $table->char('id_transaksi',4)->nullable(false);
            $table->char('kode_metode',4)->nullable(false);
            $table->unsignedInteger('quantity');
            $table->unsignedBigInteger('subtotal');

            $table->foreign('id_transaksi')->on('transaksi')->references('id_transaksi')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('kode_metode')->on('metode_pembayaran')->references('kode_metode')->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_transaksi');
    }
};
