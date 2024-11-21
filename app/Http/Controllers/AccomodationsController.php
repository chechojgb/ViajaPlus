<?php

namespace App\Http\Controllers;

use App\Models\accomodations;
use Illuminate\Http\Request;

class AccomodationsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $accomodations = accomodations::all();
        return view('view', compact('accomodations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('acommodations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'night_price' => 'required|decimal:1,999999',
            'capacity' => 'required|int|max:100',
            'address' => 'required|string|max:255',
        ]);
        accomodations::create($request->all());
        return redirect()->route('accomodations.view')->with('success', 'accommodations create with successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(accomodations $accomodations)
    {
        return view('accomodations.show', compact('accomodations'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(accomodations $accomodations)
    {
        return view('accomodations.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, accomodations $accomodations)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'night_price' => 'required|decimal:1,999999',
            'capacity' => 'required|int|max:100',
            'address' => 'required|string|max:255',
        ]);
        $accomodations->update($request->all());
        return redirect()->route('accomodations.index')->with('succes', 'accomodations update with succesfuly');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(accomodations $accomodations)
    {
        $accomodations->delete();
        return redirect()->route('accomodations.index')->with('succes', 'accomodations delete with succesfuly');
    }
}
