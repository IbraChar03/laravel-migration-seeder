<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Travels extends Model
{
    public $timestamps = false;
    private $id;
    private $price_per_person;
    private $place;
    private $code;
    private $description;
    private $departure_date;
    private $arrival_date;
    private $vote;
}