<?php

namespace App\Http\Controllers;

use App\Models\Emergencia;
use Illuminate\Http\Request;

class EmergenciaController extends Controller
{
    public function index()
    {

        $emergencias = Emergencia::paginate(10);
        return view('emergencias.index', compact('emergencias'));
    
    }


    public function chame()
    {

        $emergencias = Emergencia::all(); // ou use paginate(10) se preferir
        return view('chame', compact('emergencias'));
    
    }


    public function create()
    {
        return view('emergencias.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:45',
            'telefone' => 'required|integer',
        ]);

        Emergencia::create($request->all());

        return redirect()->route('emergencias.index')->with('success', 'Emergência adicionada com sucesso!');
    }

    public function show(Emergencia $emergencia)
    {
        return view('emergencias.show', compact('emergencia'));
    }

    public function edit(Emergencia $emergencia)
    {
        return view('emergencias.edit', compact('emergencia'));
    }

    public function update(Request $request, Emergencia $emergencia)
    {
        $request->validate([
            'nome' => 'required|string|max:45',
            'telefone' => 'required|integer',

        ]);

        $emergencia->update($request->all());

        return redirect()->route('emergencias.index')->with('success', 'Emergência atualizada com sucesso!');
    }

    public function destroy(Emergencia $emergencia)
    {
        $emergencia->delete();

        return redirect()->route('emergencias.index')->with('success', 'Emergência excluída com sucesso!');
 
    }

    public function getListagemEmergencias()
    {
        // Obter todas as emergências
        $emergencia = Emergencia::all();

        // Retornar os dados em formato JSON
        return response()->json([
            'emergencia' => $emergencia
        ]);
    }

}
