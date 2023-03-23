<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use App\Models\Location;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $location = Location::all();
        return view('location.index')->with('location', $location);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('location.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $location = new Location();
        $location->location = $request->input('location');
        $location->prix_ht= $request->input('prix_ht');
        $location->prix_euro = $request->input('prix_euro');
        $location->intruction = $request->input('intruction');
        $location->save();
        return redirect()->route('locations.index')->with('success', 'La location a été ajouté avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $location = Location::findOrFail($id);
        return view('location.edit',[
            'location'=>$location,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $location = Location::find($request->input('id'));
        $location->location = $request->input('location');
        $location->prix_ht= $request->input('prix_ht');
        $location->prix_euro = $request->input('prix_euro');
        $location->intruction = $request->input('intruction');
        $location->update();
        return redirect()->route('locations.index')->with('success', 'La location a été mis à jour avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $location = Location::find($id);
        $location->delete();
        return redirect()->route('locations.index')->with('success', 'La location a été supprimé avec succès');
    }
}
