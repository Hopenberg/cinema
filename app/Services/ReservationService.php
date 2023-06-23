<?php

namespace App\Services;

use App\Models\Movie;
use App\Models\Reservation;
use App\Models\Seat;
use Illuminate\Http\Client\Request;
use Illuminate\Http\Request as HttpRequest;

class ReservationService
{
    public function reserve(HttpRequest $request)
    {
        foreach ($request->post('seats', []) as $seatId) {
            $seats[] = Seat::find($seatId);
        }
        $movie = Movie::find($request->post('movie_id'));
        $reservation = new Reservation();
        $reservation->reserve($seats, $movie);
    }
}
