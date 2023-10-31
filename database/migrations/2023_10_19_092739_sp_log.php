<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

    // private $userIpAddress = request()->ip();

    private $sp = "sp_log";
    public function up(): void
    {
        DB::unprepared("DROP PROCEDURE IF EXISTS $this->sp");
        DB::unprepared(
            "CREATE PROCEDURE $this->sp
            (
                Username VARCHAR(100),
                Ip_address VARCHAR(100),
                Action ENUM('INSERT', 'UPDATE', 'DELETE'),
                Log TEXT
            )
            MODIFIES SQL DATA
            BEGIN
                INSERT INTO log_aplikasi (username, ip_address, action, log)
                VALUES (Username, Ip_address, Action, Log);
            END;"
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        DB::unprepared("DROP PROCEDURE IF EXISTS $this->sp");
    }
};
