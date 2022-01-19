<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    public function showBooking() {
        $bookings = Booking::all();

        return view('booking.all')->with('all', $bookings);
    }

}
