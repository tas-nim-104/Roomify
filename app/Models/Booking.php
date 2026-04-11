<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    // Allow all columns to be mass assignable (quick fix)
    protected $guarded = [];

    // If your table is named something else, uncomment and change this:
    // protected $table = 'bookings';
}