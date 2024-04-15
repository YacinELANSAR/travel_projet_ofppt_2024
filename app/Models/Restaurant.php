<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'destination_id', 'description', 'rating',
    ];
    public function destination()
    {
        return $this->belongsTo(Destination::class);
    }

    public function reservations()
    {
        return $this->hasMany(RestaurantReservation::class);
    }
    public function users(){
        return $this->hasMany(User::class);
    }
}
