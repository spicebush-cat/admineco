<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class visitor extends Model
{
    //
    protected $fillable = [
        'ip_address',
        'visit_time',
        'visit_date',
    ];
}
