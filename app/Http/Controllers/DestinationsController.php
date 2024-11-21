<?php

namespace App\Http\Controllers;

use App\Models\Destinations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DestinationsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $destinations = destinations::all();
        return view('destination.index', compact('destinations'));
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
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'city' => 'required|int|max:100',
        ]);
        $destination = new destinations();
        $destination->user_id = $user;
        $destination->destination_type = $request->destination_type;
        $destination->start_date = $request->star_date;
        $destination->end_date = $request->end_date;
        $destination->status = $request->status;
        $destination->save();
        return redirect()->route('view')->with('success', 'destination create with successfuly');
    }

    /**
     * Display the specified resource.
     */
    public function show(Destinations $destinations)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Destinations $destinations)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Destinations $destinations)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Destinations $destinations)
    {
        //
    }
}
