<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use App\Models\guide;

class GuideController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $guide = Guide::all();
        return view('guide.index')->with('guide', $guide);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('guide.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $guide = new Guide();
        $guide->guide = $request->input('guide');
        $guide->prix_ht= $request->input('prix_ht');
        $guide->prix_euro = $request->input('prix_euro');
        $guide->intruction = $request->input('intruction');
        $guide->save();
        return redirect()->route('guides.index')->with('success', 'La guide a été ajouté avec succès');
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
        $guide = Guide::findOrFail($id);
        return view('guide.edit',[
            'guide'=>$guide,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $guide = Guide::find($request->input('id'));
        $guide->guide = $request->input('guide');
        $guide->prix_ht= $request->input('prix_ht');
        $guide->prix_euro = $request->input('prix_euro');
        $guide->intruction = $request->input('intruction');
        $guide->update();
        return redirect()->route('guides.index')->with('success', 'La guide a été mis à jour avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $guide = Guide::find($id);
        $guide->delete();
        return redirect()->route('guides.index')->with('success', 'La guide a été supprimé avec succès');
    }
}
