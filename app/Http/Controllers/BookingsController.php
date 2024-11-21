<?php

namespace App\Http\Controllers;

use App\Models\bookings;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class BookingsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bookings = bookings::all();
        return view('booking.index', compact('bookings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('view booking');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        $request->validate([
            'booking_type' => 'required|enum',
        ]);
        $booking = new bookings();
        $booking->user_id = $user;
        $booking->booking_type = $request->booking_type;
        $booking->start_date = $request->star_date;
        $booking->end_date = $request->end_date;
        $booking->status = $request->status;
        $booking->save();
        return redirect()->route('view')->with('success', 'booking create with successfuly');
    }

    /**
     * Display the specified resource.
     */
    public function show(bookings $bookings)
    {
        return view('show.booking', compact('bookings'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(bookings $bookings)
    {
        return view('edit.booking');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, bookings $bookings)
    {
        $user = Auth::user();
        $usuario = bookings::updateOrCreate(
            ['user_id' => $user->id], // Condición para encontrar el usuario
            [
                'nombres' => $request->nombres,
                'apellidos' => $request->apellidos,
                'booking_type' => $request->booking_type,
                'start_date' => $request->star_date,
                'end_date' => $request->end_date,
                'status' => $request->status
            ]
        );
        return redirect()->route('view')->with('success', 'booking update with successfuly');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(bookings $bookings)
    {
        $bookings->delete();
        return redirect()->route('accomodations.index')->with('succes', 'booking delete with succesfuly');
    }
}
