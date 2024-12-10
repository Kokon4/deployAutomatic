<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partit;
use App\Models\Equip;

class PartitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $partits = Partit::with('equip_local', 'equip_visitant')->get();
        return view ('partits.index',compact('partits'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
     $equips = Equip::all();
     return view('partits.create',compact('equips'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'equip_local_id' => 'required|exists:equips,id',
            'equip_visitant_id' => 'required|exists:equips,id',
            'data' => 'required|date',
            'resultat' => 'nullable|string',
        ]);
        Partit::create($validated);
        return redirect()->route('partits.index', [
            'success' => 'Partit creat correctament!' 
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Partit $partit)
    {
        return view('partits.show', compact('partit'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Partit $partit)
    {
        $equips = Equip::all();
        return view('partits.edit', compact('partit', 'equips'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Partit $partit)
    {
        $validatedData = $request->validate([
            'equip_local_id' => 'required|exists:equips,id',
            'equip_visitant_id' => 'required|exists:equips,id|different:equip_local_id',
            'data' => 'required|date',
            'resultat' => 'nullable|string',
        ]);

        $partit->update($validatedData);

        return redirect()->route('partits.index')->with('success', 'Partit actualitzat amb èxit.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Partit $partit)
    {
        $partit->delete();
        return redirect()->route('partits.index')->with('success', 'Partit eliminat amb èxit.');
    }
}
