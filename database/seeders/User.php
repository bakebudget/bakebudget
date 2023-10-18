<?php

namespace Database\Seeders;

use App\Models\User as U;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class User extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        U::factory(1)->create();
    }
}
