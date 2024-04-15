<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class restaurantReservation extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'restaurant_id', 'reservation_datetime', 'number_of_guests',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }
    /**
     * Récupère les clients non vérifiés.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public static function unverifiedClientsRestaurant()
    {
        return static::where('isVerified', 0);
    }
    /**
     * Récupère les clients  vérifiés.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public static function verifiedClientsRestaurant()
    {
        return static::where('isVerified', 1);
    }
}
