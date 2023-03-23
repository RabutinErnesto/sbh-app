<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use App\Models\village;


class VillageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $village = village::all();
        return view('ville')->with('ville', $village);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('create_ville');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $village = new village();
        $village->village_abr = $request->input('village_abr');
        $village->village_name = $request->input('village_name');
        $village->save();
        return redirect()->route('villages.index')->with('success', 'Le vullage a été ajouté avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
         /*$village = village::findOrFail($id);
         return view('show', compact('village'));*/
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $village = village::findOrFail($id);
        return view('edit_ville')->with('village', $village);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,string $id)
    {
        $village = village::find($request->input('id'));
        $village->village_abr = $request->input('village_abr');
        $village->village_name = $request->input('village_name');
        $village->update();
        return redirect()->route('villages.index')->with('success', 'Le village a été mis à jour avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $village = village::find($id);
        $village->delete();
        return redirect()->route('villages.index')->with('success', 'Le village a été supprimé avec succès');
    }
}
