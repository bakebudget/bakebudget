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
  private $spName = 'procedure_kode';

  public function up(): void
  {
    DB::unprepared("DROP FUNCTION IF EXISTS $this->spName;");


    DB::unprepared("CREATE FUNCTION $this->spName() RETURNS VARCHAR(4)
    BEGIN
        DECLARE new_id VARCHAR(4);
        DECLARE next_number INT;
    
        -- Find the maximum existing number for the 'T' IDs
        SELECT MAX(CAST(SUBSTRING(id_pembayaran, 2) AS SIGNED)) INTO next_number FROM pembayaran WHERE id_pembayaran LIKE 'T%';

        -- Check if next_number is NULL (no records found with 'T' prefix)
        IF next_number IS NULL THEN
            SET next_number = 1;
        ELSE
        -- Increment the number by 1
        SET next_number = next_number + 1;
        END IF;
    
        -- Format the new ID with leading zeros
        SET new_id = CONCAT('T', LPAD(next_number, 3, '0'));
    
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
