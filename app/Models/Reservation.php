<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    public function seats() {
        return $this->belongsToMany(Seat::class, 'reservation_to_seat')->withPivot('price');
    }

    public function movie() {
        return $this->hasOne(Movie::class);
    }

    public function reserve(array $seats, Movie $movie) {
        $this->movie_id = $movie->id;
        $this->save();
        foreach ($seats as $seat) {
            $this->seats()->attach($seat, ['price' => $seat->price]);
        }
    }

    public function cancel() {

    }

    public function buy() {

    }
}
