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
        Schema::create('rencana_pengeluaran', function (Blueprint $table) {
            $table->char('id_pengeluaran',4)->nullable(false)->primary();
            $table->char('kode_jenis_pengeluaran',4)->nullable(false);
            $table->enum('status',['LUNAS', 'BELUM LUNAS']);
            $table->string('deskripsi',255);

            $table->foreign('kode_jenis_pengeluaran')->on('jenis_pengeluaran')
            ->references('kode_jenis_pengeluaran')->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rencana_pengeluaran');
    }
};
