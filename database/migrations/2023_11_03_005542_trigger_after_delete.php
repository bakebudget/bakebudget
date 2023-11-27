<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    // private $userIpAddress = request()->ip();
    // private $username = Auth::user()->username;

    private $triggerName = 'trigger_delete_pembayaran';
    public function up(): void
    {
        DB::unprepared(
            "CREATE OR REPLACE TRIGGER $this->triggerName
            AFTER DELETE ON pembayaran FOR EACH ROW
            BEGIN
                -- DECLARE l_username VARCHAR(100);
                DECLARE l_nama_metode VARCHAR(100);
                DECLARE l_rencana_pengeluaran VARCHAR(100);
                DECLARE username VARCHAR(100);
                DECLARE ip VARCHAR(100);
                -- DECLARE ip VARCHAR(100);

                SELECT nama_metode INTO l_nama_metode FROM metode_pembayaran WHERE kode_metode = OLD.kode_metode;
                SELECT deskripsi INTO l_rencana_pengeluaran FROM rencana_pengeluaran WHERE id_pengeluaran = OLD.id_pengeluaran;
                SELECT user INTO username FROM information_schema.processlist WHERE ID = CONNECTION_ID();
                SELECT host INTO ip FROM information_schema.processlist WHERE ID = CONNECTION_ID();

                -- SET @username := IFNULL('', 'NULL');
                -- SET @ip := IFNULL('', 'NULL');
                SET @bukti := IFNULL(OLD.bukti_pembayaran, 'NULL');
                /**
                 * 
                 */
                CALL sp_log(username, ip, 'DELETE',
                    CONCAT(
                        'id_pembayaran: ', OLD.id_pembayaran,
                        ', metode_pembayaran: ', l_nama_metode,
                        ', penerima: ', OLD.nama_penerima,
                        ', rencana_pengeluaran: ', l_rencana_pengeluaran,
                        ', tanggal: ', OLD.tanggal_pembayaran,
                        ', bukti: ', @bukti
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
