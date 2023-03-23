<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activite;
use App\Models\village;

class ActiviteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $activite = Activite::all();
        return view('activite.index')->with('activite', $activite);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ville = village::pluck('village_name','village_name');
        $id = 1;
        return view('activite.create_activite',compact('id','ville'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $activite = new Activite();
        $activite->ville = $request->input('ville');
        $activite->designation= $request->input('designation');
        $activite->code_activite = $request->input('code_activite');
        $activite->tarification = $request->input('tarification');
        $activite->save();
        return redirect()->route('activites.index')->with('success', 'L.'.'.activite a été ajouté avec succès');
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
        $activite = Activite::findOrFail($id);
        return view('activite\edit_activite',[
            'activite'=>$activite,
            'ville'=>$ville,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $activite = activite::find($request->input('id'));
        $activite->ville = $request->input('ville');
        $activite->designation= $request->input('designation');
        $activite->code_activite = $request->input('code_activite');
        $activite->tarification = $request->input('tarification');
        $activite->update();
        return redirect()->route('activites.index')->with('success', 'L"activite a été mis à jour avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $activite = Activite::find($id);
        $activite->delete();
        return redirect()->route('activites.index')->with('success', 'L."."activite a été supprimé avec succès');
    }
}
