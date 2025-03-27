<?php

namespace App\Http\Controllers;
use App\Models\Relato;
use Illuminate\Http\Request;

class RelatoController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Busca todos os relatos com paginação
    $relatos = Relato::orderBy('created_at', 'desc')->paginate(10);

    // Passando os relatos para a view
    return view('relatos.index', compact('relatos'))
        ->with('message', $relatos->isEmpty() ? 'Nenhum relato encontrado.' : null);
    
    }
    


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('relatos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'conteudo' => 'required|string',
        ]);
    
        Relato::create([
            'conteudo' => $request->conteudo,
            'aprovado' => false, // Define como não aprovado inicialmente
        ]);
    
        return redirect()->back()->with('success', 'Comentário enviado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Relato $relato)
    {
        $relatosAprovados = Relato::where('aprovado', true)->get(); // Ajuste a lógica conforme necessário
        return view('forum', compact('relatosAprovados'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Relato $relato)
    {
        return view('relatos.edit', compact('relato'));
    }


    public function forum()
{
    $relatosAprovados = Relato::where('aprovado', true)->get();
    return view('forum', compact('relatosAprovados'));
}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Relato $relato)
    {
        $request->validate([
            'conteudo' => 'required',
            'aprovado' => 'required|boolean',
            'date' => 'required|date',
        ]);

        $relato->update($request->all());

        return redirect()->route('relatos.index')->with('success', 'Relato atualizado com sucesso!');
   
    }

    public function approve(Relato $relato)
    {
        // Aprovar o relato
        $relato->aprovado = 1;
        $relato->save();

        return redirect()->route('forum')->with('success', 'Relato aprovado com sucesso!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Relato $relato)
    {
        $relato->delete();

        return redirect()->route('relatos.index')->with('success', 'Relato excluído com sucesso!');

    }

    public function getListagemRelatos ()
    {
        $relatosAprovados = Relato::where('aprovado', 1)->get();
        
        return response()->json([
            'relatos' => $relatosAprovados
        ]);

    }


}
