<?php

namespace App\Http\Controllers;

use App\Models\providers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProvidersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $providers = providers::all();
        return view('providers.table_providers', compact('providers'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('providers.dashboard');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:150',
            'contact' => 'required|max:15',
            'provider_type' => 'required|string|in:travel_agency,local_guide',
            'address' => 'required|string|max:150',
            'email' => 'required|string|max:255|min:4,confirmed',
        ]);
        try {
            $providers = new Providers();
            $providers->name = $request->name;
            $providers->contact = $request->contact;
            $providers->address = $request->address;
            $providers->provider_type = $request->provider_type;
            $providers->email = $request->email;
            $providers->save();
            return redirect()->back()->with('success', 'providers created successfully');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Something went wrong, please try again.'])->withInput();
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(providers $providers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(providers $provider)
    {
        return view('providers.update_provider', compact('provider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, providers $provider)
    {
        $request->validate([
            'name' => 'required|string|max:150',
            'contact' => 'required|max:15',
            'provider_type' => 'required|string|in:travel_agency,local_guide',
            'address' => 'required|string|max:150',
            'email' => 'required|string|email|max:255|min:4',
        ]);
        try {
            $provider->update($request->only(['name', 'contact', 'provider_type', 'address', 'email']));
        return redirect()->back()->with('success', 'Provider update with succesfuly');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Something went wrong, please try again.'])->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(providers $id)
    {
        $id->delete();
        return redirect()->back()->with('success', 'Provider delete with succesfuly');
    }
}
