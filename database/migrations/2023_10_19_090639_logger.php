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
        Schema::create('log_aplikasi', function (Blueprint $table) {
            $table->id('id_log');
            $table->string('username',255);
            $table->binary('ip_address');
            $table->enum('action',['INSERT','UPDATE','DELETE']);
            $table->text('log');
            $table->dateTime('created_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('log_aplikasi');
    }
};
