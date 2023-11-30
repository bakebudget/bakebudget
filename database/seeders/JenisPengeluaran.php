<?php

namespace Database\Seeders;

use App\Models\JenisPengeluaran as J;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JenisPengeluaran extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        J::factory(1)->create();
    }
}
