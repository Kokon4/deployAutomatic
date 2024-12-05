<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jugadora;
use App\Models\Equip;

class JugadoraController extends Controller
{
    //  protected $jugadores = [
    //     ['nom' => 'Alexia Putellas', 'equip' => 'Barça Femení', 'posicio' => 'Migcampista'],
    //     ['nom' => 'Esther González', 'equip' => 'Atlètic de Madrid', 'posicio' => 'Davantera'],
    //     ['nom' => 'Misa Rodríguez', 'equip' => 'Real Madrid Femení', 'posicio' => 'Portera'],
    // ];


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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Jugadora $jugadora)
    {
        return view('jugadores.show', compact('jugadora'));
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
