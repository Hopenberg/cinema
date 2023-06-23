<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\DBAL\TimestampType;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('movies')->insert([
            'starting_at' => '2023-06-13T15:00:00',
            'duration' => 2.5,
            'cinema_room_id' => 1
        ]);

        DB::table('movies')->insert([
            'starting_at' => '2023-06-13T18:00:00',
            'duration' => 2.5,
            'cinema_room_id' => 1
        ]);

        DB::table('movies')->insert([
            'starting_at' => '2023-06-14T15:00:00',
            'duration' => 2.5,
            'cinema_room_id' => 2
        ]);
    }
}
