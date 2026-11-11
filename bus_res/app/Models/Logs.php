<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Logs extends Model
{
    protected $table = "logs";
    protected $fillable = ["user_id","log_id","created_at","updated_at"];
}
