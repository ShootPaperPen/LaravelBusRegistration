<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buses extends Model
{
    protected $table = 'buses';

    protected $fillable = [
        "bus_number",
        "seating_capacity",
        "driver_name",
        "driver_image",
        "departure_location",
        "destination",
        "departure_time",
        "arrival_time",
        "contact_number",
        "updated_at",
        "created_at"
    ];
}
