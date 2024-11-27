<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JugadoraController extends Controller
{
    protected $jugadores = [
        ['nom' => 'Alexia Putellas', 'equip' => 'Barça Femení', 'posició' => 'Migcampista'],
        ['nom' => 'Esther González', 'equip' => 'Atlètic de Madrid', 'posició' => 'Davantera'],
        ['nom' => 'Misa Rodríguez', 'equip' => 'Real Madrid Femení', 'posició' => 'Portera'],
    ];

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jugadores = $this->jugadores;
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
