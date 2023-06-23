<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SeatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('seats')->insert([
            'number' => 1,
            'price' => 23.99,
            'cinema_room_id' => 1
        ]);

        DB::table('seats')->insert([
            'number' => 2,
            'price' => 23.99,
            'cinema_room_id' => 1
        ]);

        DB::table('seats')->insert([
            'number' => 3,
            'price' => 23.99,
            'cinema_room_id' => 1
        ]);

        DB::table('seats')->insert([
            'number' => 1,
            'price' => 23.99,
            'cinema_room_id' => 2
        ]);

        DB::table('seats')->insert([
            'number' => 2,
            'price' => 23.99,
            'cinema_room_id' => 2
        ]);

        DB::table('seats')->insert([
            'number' => 3,
            'price' => 23.99,
            'cinema_room_id' => 2
        ]);

        DB::table('seats')->insert([
            'number' => 1,
            'price' => 23.99,
            'cinema_room_id' => 3
        ]);

        DB::table('seats')->insert([
            'number' => 2,
            'price' => 23.99,
            'cinema_room_id' => 3
        ]);

        DB::table('seats')->insert([
            'number' => 3,
            'price' => 23.99,
            'cinema_room_id' => 3
        ]);
    }
}
