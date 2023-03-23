<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Symfony\Component\Console\Input\Input;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use App\Models\Hotel;
use App\Models\village;
use App\Models\Prix;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): view
    {
        $hotel = Hotel::all();
        return view('hotel.index')->with('hotel', $hotel);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ville = village::pluck('village_name','village_name');
        $id_ville = 1;
        $prix = Prix::pluck('prix', 'prix');
        $id_prix = 1;
        return view('hotel.create_hotel',compact('id_ville','ville','id_prix', 'prix'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $hotel = new Hotel();
        $hotel->ville = $request->input('ville');
        $hotel->nom_hotel= $request->input('nom');
        $hotel->single = $request->input('single');
        $hotel->double = $request->input('double');
        $hotel->triple = $request->input('triple');
        $hotel->familiale = $request->input('familiale');
        $hotel->petit_deij = $request->input('petit_deij');
        $hotel->menu = $request->input('menu');
        if ($request->hasFile('piece')){
        $fichier=$request->piece;
        $fileName=$fichier->getClientOriginalName();
        $fichier->move(public_path('fichier_hotel'), $fileName);
        $hotel->piece = $fileName;
        }else{
            $hotel->piece = $request->piece;
        }

        $hotel->save();
        return redirect()->route('hotels.index')->with('success', 'L.'.' hotel a été ajouté avec succès');
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
        $hotel = Hotel::findOrFail($id);
        return view('hotel.edit_hotel',[
            'hotel'=>$hotel,
            'ville'=>$ville,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $hotel = Hotel::find($request->input('id'));
        $hotel->ville = $request->input('ville');
        $hotel->nom_hotel= $request->input('nom');
        $hotel->single = $request->input('single');
        $hotel->double = $request->input('double');
        $hotel->triple = $request->input('triple');
        $hotel->familiale = $request->input('familiale');
        $hotel->petit_deij = $request->input('petit_deij');
        $hotel->menu = $request->input('menu');

        if ($request->hasFile('piece')){
            $fichier=$request->piece;
            $filename=$fichier->getClientOriginalName();
            $request->piece->move('/fichier_hotel',$filename);
            $hotel->piece=$filename;
        }else{
            $hotel->piece = $request->piece;
        }

        $hotel->update();
        return redirect()->route('hotels.index')->with('success', 'L.'.'. hotel a été mis à jour avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $hotel = Hotel::find($id);
        $hotel->delete();
        return redirect()->route('hotels.index')->with('success', 'L.'.'. hotel a été supprimé avec succès');
    }
}
