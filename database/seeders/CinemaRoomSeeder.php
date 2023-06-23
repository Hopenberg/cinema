<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CinemaRoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cinema_rooms')->insert([
            'name' => 'A'
        ]);

        DB::table('cinema_rooms')->insert([
            'name' => 'B'
        ]);

        DB::table('cinema_rooms')->insert([
            'name' => 'C'
        ]);
    }
}
