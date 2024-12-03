<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equip;
use App\Models\Estadi;

class EstadiController extends Controller
{
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $estadis = Estadi::all();
        return view('estadis.index', compact('estadis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $estadis = Estadi::all();
        return view('estadis.crear');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'ciutat' => 'required|string|max:10',
            'capacitat' => 'required|integer|min:0',
            'equip_principal' => 'required|integer|min:0',
        ]);
        $this->estadis[] = $validatedData;
        $estadis = $this->estadis;
        return view('estadis.index', compact('estadis'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
            $estadis = $this->estadis;
            $estadi = $this->estadis[$id];
            return view('estadis.show', compact('estadi'));
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
