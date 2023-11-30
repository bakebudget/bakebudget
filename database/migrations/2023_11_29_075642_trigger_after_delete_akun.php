<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    // private $userIpAddress = request()->ip();
    // private $username = Auth::user()->username;

    private $triggerName = 'trigger_delete_akun';
    public function up(): void
    {
        DB::unprepared(
            "CREATE OR REPLACE TRIGGER $this->triggerName
            AFTER DELETE ON user FOR EACH ROW
            BEGIN
            DECLARE a_username VARCHAR(100);
            DECLARE ip VARCHAR(100);
                SELECT user INTO a_username FROM information_schema.processlist WHERE ID = CONNECTION_ID();
                SELECT host INTO ip FROM information_schema.processlist WHERE ID = CONNECTION_ID();


                -- SET @a_username := IFNULL('', 'NULL');
                -- SET @ip := IFNULL('', 'NULL');
                SET @bukti := IFNULL(OLD.foto, 'NULL');
                /**
                 * 
                 */
                CALL sp_log(a_username, ip,  'DELETE',
                    CONCAT(
                        ', user: ', OLD.username,
                        ', level: ', OLD.level,
                        ', password: ', OLD.password,
                        ', foto: ', @bukti
                    )
                );
            END;"
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        DB::unprepared("DROP TRIGGER IF EXISTS `$this->triggerName`;");
    }
};
