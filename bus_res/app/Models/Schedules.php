<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schedules extends Model
{
    protected $table = 'schedules';

    protected $fillable = [
        "bus_id",
        "route_id",
        "departure_date",
        "departure_time",
        "available_seats"

    ];
}
