<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jugadora;
use App\Models\Equip;
use Illuminate\Support\Facades\Storage;

class JugadoraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jugadores = Jugadora::all();
        return view('jugadores.index', compact('jugadores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $equips = Equip::all();
        return view('jugadores.create', compact('equips'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required|unique:jugadores',
            'equip_id' => 'required|exists:equips,id',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            $path = $request->file('foto')->store('fotos','public');
            $validated['foto'] = $path;
        }
        Jugadora::create($validated);
        return redirect()->route('jugadores.index')->with('succes','Jugadora creada correctament');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $jugadora = Jugadora::findOrFail($id);
        return view('jugadores.show', compact('jugadora'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {   
        $jugadora = Jugadora::findOrFail($id);
        $equips = Equip::all();
        return view('jugadores.edit', compact('jugadora','equips'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'equip_id' => 'required|exists:equips,id',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'posicio' => 'required|string|max:255',
        ]);

        $jugadora = Jugadora::findOrFail($id);
        if ($request->hasFile('foto')) {
            if ($jugadora->foto) {
                Storage::disk('public')->delete($jugadora->foto);
            }
            $path = $request->file('foto')->store('fotos', 'public');
            $validated['foto'] = $path;
        }
        $jugadora->update($validated);
        return redirect()->route('jugadoras.index')->with('success', 'Jugadora actualitzada correctament!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $jugadora = Jugadora::findOrFail($id);
        if($jugadora->foto){
            Storage::disk('public')->delete($jugadora->foto);
        }

        $jugadora->delete();
        return redirect()->route('jugadores.index')->with('success', 'Jugadora esborrada correctament!');
    }
}
