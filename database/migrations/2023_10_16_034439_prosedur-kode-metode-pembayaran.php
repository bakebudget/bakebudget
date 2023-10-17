<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    private $spName = 'procedure-kode';

    public function up(): void
    {
        DB::unprepared("DROP PROCEDURE IF EXISTS $this->spName");
        //prosedur kode metode
        DB::unprepared(
            "CREATE PROCEDURE $this->spName(IN prefix CHAR(1), OUT sequentialID CHAR(255))
            BEGIN
              DECLARE lastID INT;
              DECLARE paddedID CHAR(255);
            
              -- ambil kode terakhir di database
              SELECT MAX(CAST(SUBSTRING(kode_metode, LENGTH(prefix) + 1) AS SIGNED)) INTO lastID FROM metode_pembayaran WHERE kode_metode LIKE CONCAT(prefix, '%');
            
              -- Generate kode 
              IF lastID IS NULL THEN
                SET paddedID = LPAD('1', 4 - LENGTH(prefix), '0');
              ELSE
                SET paddedID = LPAD(lastID + 1, 4 - LENGTH(prefix), '0');
              END IF;
            
              SET sequentialID = CONCAT(prefix, paddedID);
            END;   
        ");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        DB::unprepared("DROP PROCEDURE IF EXISTS $this->spName");
    }
};