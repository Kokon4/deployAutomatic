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
        $estadis = Estadi::paginate(10);
        return view('estadis.index', compact('estadis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $equips = Equip::all();
        $estadis = Estadi::all();
        return view('estadis.crear',compact('equips','estadis'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar los datos de entrada
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'ciutat' => 'required|string|max:255',
            'capacitat' => 'required|integer|min:0',
            'equip_principal' => 'required|string|max:255',
        ]);
        Estadi::create($validatedData);
        return redirect()->route('estadis.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Estadi $estadi)
    {
        return view('estadis.show', compact('estadi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $estadis = Estadi::all();
        $estadi = Estadi::findOrFail($id);
        return view('estadis.edit', compact('estadi','estadis'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'ciutat' => 'required|string|max:255',
            'capacitat' => 'required|integer|min:0',
            'equip_principal' => 'required|string|max:255',
        ]);
        $estadi = Estadi::findOrFail($id);
        $estadi->update($validatedData);
        return redirect()->route('estadis.show', $id);
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Estadi $estadi)
    {
        $estadi->delete();
        return redirect()->route('estadis.index')->with('success', 'Estadi esborrat correctament!');
    }
}
