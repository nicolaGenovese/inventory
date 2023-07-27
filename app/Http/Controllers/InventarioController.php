<?php

namespace App\Http\Controllers;
use App\Models\Inventario;
use Illuminate\Http\Request;

class InventarioController extends Controller
{
    public function index()
    {
        $inventario = Inventario::all();
        return view('inventario.index', compact('inventario'));
    }

    public function create()
    {
        return view('inventario.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome_prodotto' => 'required|string|max:255',
            'tipologia_prodotto' => 'required|string|max:255',
            'quantita' => 'required|integer|min:0',
            'package' => 'required|string|max:255',
            'prezzo' => 'required|numeric|min:0',
            'notes' => 'nullable|string',
        ]);

        Inventario::create($request->all());

        return redirect()->route('inventario.index')->with('success', 'Prodotto aggiunto con successo.');
    }

    public function show($id)
    {
        $elemento = Inventario::findOrFail($id);
        return view('inventario.show', compact('elemento'));
    }

    public function edit($id)
    {
        $elemento = Inventario::findOrFail($id);
        return view('inventario.edit', compact('elemento'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nome_prodotto' => 'required|string|max:255',
            'tipologia_prodotto' => 'required|string|max:255',
            'quantita' => 'required|integer|min:0',
            'package' => 'required|string|max:255',
            'prezzo' => 'required|numeric|min:0',
            'notes' => 'nullable|string',
        ]);

        $elemento = Inventario::findOrFail($id);
        $elemento->update($request->all());

        return redirect()->route('inventario.index')->with('success', 'Prodotto modificato con successo.');
    }

    public function destroy($id)
    {
        $elemento = Inventario::findOrFail($id);
        $elemento->delete();

        return redirect()->route('inventario.index')->with('success', 'Prodotto eliminato con successo.');
    }
}
