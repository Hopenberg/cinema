<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cinema_rooms', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });

        Schema::create('seats', function (Blueprint $table) {
            $table->id();
            $table->integer('number');
            $table->float('price');
            $table->unsignedBigInteger('cinema_room_id');
            $table->foreign('cinema_room_id')->references('id')->on('cinema_rooms');
        });
        
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->timestamp('starting_at');
            $table->float('duration');
            $table->unsignedBigInteger('cinema_room_id');
            $table->foreign('cinema_room_id')->references('id')->on('cinema_rooms');
        });

        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('movie_id');
            $table->foreign('movie_id')->references('id')->on('movies');
        });

        Schema::create('reservation_to_seat', function (Blueprint $table) {
            $table->unsignedBigInteger('reservation_id');
            $table->unsignedBigInteger('seat_id');
            $table->float('price');
            $table->foreign('reservation_id')->references('id')->on('reservations')
                ->onDelete('cascade');
            $table->foreign('seat_id')->references('id')->on('seats')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservation_to_seat');
        Schema::dropIfExists('seats');
        Schema::dropIfExists('reservations');
        Schema::dropIfExists('movies');
        Schema::dropIfExists('cinema_rooms');
    }
};
