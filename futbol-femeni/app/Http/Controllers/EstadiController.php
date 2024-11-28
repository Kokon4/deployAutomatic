<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstadiController extends Controller
{
    protected $estadis = [
        ['nom' => 'Camp nou', 'mitjanaPreuEntrades' => '70€', 'aforoMaxim' => 30],
        ['nom' => 'Civitas Metropolitano', 'mitjanaPreuEntrades' => '30€', 'aforoMaxim' => 10],
        ['nom' => 'Alfredo Di Stéfano', 'mitjanaPreuEntrades' => '50€', 'aforoMaxim' => 5],
    ];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $estadis = $this->estadis;
        return view('estadis.index', compact('estadis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('estadis.crear');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'mitjanaPreuEntrades' => 'required|string|max:10',
            'aforoMaxim' => 'required|integer|min:0',
        ]);
        $this->estadis[] = $validatedData;
        return redirect()->route('estadis.crear')->with('success', 'Estadi afegit correctament!');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
