<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use App\Models\Distance;
use App\Models\village;

class DistanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():view
    {
        $distance = Distance::all();
        return view('distance.index')->with('distance', $distance);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ville = village::pluck('village_name','village_name');
        $id = 1;
        return view('distance.create_distance',compact('id','ville'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $distance = new Distance();
        $distance->ville_depart = $request->input('ville_dep');
        $distance->ville_arrive = $request->input('ville_arr');
        $distance->distance = $request->input('distance');
        $distance->save();
        return redirect()->route('distance.index')->with('success', 'La distance a été ajouté avec succès');
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
        $ville = village::all();
        $distance = Distance::findOrFail($id);
        return view('distance\edit_distance',[
            'distance'=>$distance,
            'ville'=>$ville,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $distance = Distance::find($request->input('id'));
        $distance->ville_depart = $request->input('ville_dep');
        $distance->ville_arrive = $request->input('ville_arr');
        $distance->distance = $request->input('distance');
        $distance->update();
        return redirect()->route('distance.index')->with('success', 'La distance a été mis à jour avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $distance = Distance::find($id);
        $distance->delete();
        return redirect()->route('distance.index')->with('success', 'La distance a été supprimé avec succès');
    }
}
