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
    private $spName = 'procedure_kodekue';

    public function up(): void
    {
        DB::unprepared("DROP FUNCTION IF EXISTS $this->spName;");
        //prosedur kode metode
        // DB::unprepared(
        //   "CREATE PROCEDURE $this->spName(IN prefix CHAR(1), IN tabel VARCHAR(50), IN prime VARCHAR(50), OUT sequentialID CHAR(255))
        //         BEGIN
        //           DECLARE tabeL VARCHAR(50);
        //           DECLARE primeK VARCHAR(50);
        //           DECLARE lastID INT;
        //           DECLARE paddedID CHAR(255);

        //           SET tabeL = tabel;
        //           SET primeK = prime;

        //           -- ambil kode terakhir di database
        //           SELECT MAX(CAST(SUBSTRING(primeK, LENGTH(prefix) + 1) AS SIGNED)) INTO lastID FROM tabeL WHERE primeK LIKE CONCAT(prefix, '%');

        //           -- Generate kode 
        //           IF lastID IS NULL THEN
        //             SET paddedID = LPAD('1', 4 - LENGTH(prefix), '0');
        //           ELSE
        //             SET paddedID = LPAD(lastID + 1, 4 - LENGTH(prefix), '0');
        //           END IF;

        //           SET sequentialID = CONCAT(prefix, paddedID);
        //         END;   
        //     "
        // );

        DB::unprepared("CREATE FUNCTION $this->spName() RETURNS VARCHAR(4)
    BEGIN
        DECLARE new_id VARCHAR(4);
        DECLARE next_number INT;
    
        -- Find the maximum existing number for the 'T' IDs
        SELECT MAX(CAST(SUBSTRING(kode_kue, 2) AS SIGNED)) INTO next_number FROM kue WHERE kode_kue LIKE 'K%';
    
        -- Increment the number by 1
        SET next_number = next_number + 1;
    
        -- Format the new ID with leading zeros
        SET new_id = CONCAT('K', LPAD(next_number, 3, '0'));
    
        RETURN new_id;
    END;");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        DB::unprepared("DROP FUNCTION IF EXISTS $this->spName");
    }
};
