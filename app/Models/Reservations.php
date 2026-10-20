<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservations extends Model
{
    protected $table = 'reservations';

    protected $fillable = [
        "schedule_id",
        "passenger_name",
        "contact_information",
        "seat_number",
        "reservation_date",
        "status"
    ];
}
