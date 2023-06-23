<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    use HasFactory;

    public function reservations() {
        return $this->belongsToMany(Reservation::class, 'reservation_to_seat')->withPivot('price');
    }
}
