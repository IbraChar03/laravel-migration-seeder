<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trains extends Model
{
    public $timestamps = false;
    private $id;
    private $agency;
    private $carriages_number;
    private $code;
    private $in_time;
    private $cancelled;
    private $departure_time;
    private $arrival_time;
}