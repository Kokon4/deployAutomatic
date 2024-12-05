<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equip;
use App\Models\Estadi;
use Illuminate\Support\Facades\Storage;

class EquipController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $equips = Equip::paginate(10);
        return view('equips.index', compact('equips'));
    }

    public function show(Equip $equip) {
        return view('equips.show', compact('equip'));
    }

    public function create() {
        $estadis = Estadi::all();
        return view('equips.create',compact('estadis'));
    }

    public function edit(Equip $equip) {
             $estadis = Estadi::all();
        return view('equips.edit', compact('estadis','equip'));
    }

    public function update(Request $request, $id)
{
    $validated = $request->validate([
        'nom' => 'required|unique:equips,nom,' . $id,
        'titols' => 'integer|min:0',
        'estadi_id' => 'required|exists:estadis,id',
        'escut' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
    ]);

    $equip = Equip::findOrFail($id);

    if ($request->hasFile('escut')) {
        if ($equip->escut) {
            Storage::disk('public')->delete($equip->escut); // Esborra l'escut antic
        }
        $path = $request->file('escut')->store('escuts', 'public');
        $validated['escut'] = $path;
    }

    $equip->update($validated);
    return redirect()->route('equips.index')->with('success', 'Equip actualitzat correctament!');
}

public function destroy(Equip $equip)
{
    if ($equip->escut) {
        Storage::disk('public')->delete($equip->escut);
    }
    $equip->delete();
    return redirect()->route('equips.index')->with('success', 'Equip esborrat correctament!');
}
    
    public function store(Request $request)
{
    $validated = $request->validate([
        'nom' => 'required|unique:equips',
        'titols' => 'integer|min:0',
        'estadi_id' => 'required|exists:estadis,id',
        'escut' => 'nullable|image|mimes:jpeg,png,jpg|max:2048', // Validació del fitxer
    ]);

    if ($request->hasFile('escut')) {
        $path = $request->file('escut')->store('escuts', 'public');
        $validated['escut'] = $path;
    }
    Equip::create($validated);
    return redirect()->route('equips.index')->with('success', 'Equip creat correctament!');
}
}

