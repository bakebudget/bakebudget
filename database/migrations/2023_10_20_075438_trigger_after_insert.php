<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // private $userIpAddress = request()->ip();
    // private $username = Auth::user()->username;

    private $triggerName = 'trigger_pembayaran';
    public function up(): void
    {
        $userIpAddress = request()->ip();

        $username = Auth::user() ? Auth::user()->username : '';
        
        DB::unprepared(
            "CREATE TRIGGER $this->triggerName
            AFTER INSERT ON pembayaran FOR EACH ROW
            BEGIN
                -- DECLARE l_username VARCHAR(100);
                DECLARE l_nama_metode VARCHAR(100);
                DECLARE l_rencana_pengeluaran VARCHAR(100);
                -- DECLARE ip VARCHAR(100);

                SELECT nama_metode INTO l_nama_metode FROM metode_pembayaran WHERE kode_metode = NEW.kode_metode;
                SELECT deskripsi INTO l_rencana_pengeluaran FROM rencana_pengeluaran WHERE id_pengeluaran = NEW.id_pengeluaran;

                SET @username := IFNULL('$username', 'NULL');
                SET @ip := IFNULL('$userIpAddress', 'NULL');
                SET @bukti := IFNULL(NEW.bukti_pembayaran, 'NULL');

                CALL sp_log(@username, @ip, 'INSERT',
                    CONCAT(
                        'id_pembayaran: ', NEW.id_pembayaran,
                        ', metode_pembayaran: ', l_nama_metode,
                        ', rencana_pengeluaran: ', l_rencana_pengeluaran,
                        ', tanggal: ', NEW.tanggal_pembayaran,
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
        DB::unprepared("DROP TRIGGER IF EXISTS $this->triggerName");
    }
};
