<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ZipcodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $path = 'database/data/sql/zipcodes.sql';
        DB::transaction(function () use ($path) {
            DB::unprepared(file_get_contents($path));
        });
    }
}
