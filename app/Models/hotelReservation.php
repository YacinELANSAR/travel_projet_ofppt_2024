<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hotelReservation extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'hotel_id', 'check_in_date', 'check_out_date', 'number_of_guests',
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }
    /**
     * Récupère les clients non vérifiés.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public static function unverifiedClients()
    {
        return static::where('isVerified', 0);
    }
    /**
     * Récupère les clients  vérifiés.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public static function verifiedClients()
    {
        return static::where('isVerified', 1);
    }
    
}
