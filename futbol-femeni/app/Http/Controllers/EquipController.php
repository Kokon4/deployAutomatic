<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EquipController extends Controller
{
    protected $equips = [
        ['nom' => 'Barça Femení', 'estadi' => 'Camp Nou', 'titols' => 30],
        ['nom' => 'Atlètic de Madrid', 'estadi' => 'Cívitas Metropolitano', 'titols' => 10],
        ['nom' => 'Real Madrid Femení', 'estadi' => 'Alfredo Di Stéfano', 'titols' => 5],
    ];
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $equips = $this->equips;
        return view('equips.index', compact('equips'));
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
        $equips = $this->equips;
        $equips = $this->equips[$id];
        return view('equips.show', compact('equip'));
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
