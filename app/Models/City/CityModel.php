<?php

namespace App\Models\City;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CityModel extends Model
{
    protected $table = "us_cities";

    protected $fillable = [
        'id',
        'state_code',
        'state_name'
    ];
}
