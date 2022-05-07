<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trains extends Model
{
    protected $fillable = [
        'Departure_station',
        'Arrival_station',
        'Departure_time',
        'Arrival_time',
        'Train'
    ];
    public $timestamps = false;
}
