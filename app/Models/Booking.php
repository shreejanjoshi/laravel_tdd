<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'users_id',
        'rooms_id',
        'start_date',
        'end_date'
    ];

    /**
     * Get the user that has this booking.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the room of this booking.
     */
    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}
