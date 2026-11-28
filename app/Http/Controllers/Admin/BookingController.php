<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BookingController extends Controller
{
    public function index(Request $request): View
    {
        abort_unless($request->user()?->role === 'admin', 403);

        $bookings = Booking::with('service')
            ->latest()
            ->get();

        return view('admin.bookings.index', [
            'bookings' => $bookings,
        ]);
    }
}
