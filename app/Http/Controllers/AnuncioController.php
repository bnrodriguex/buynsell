<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anuncio;

//TROCAR TUDO P/ ANUNCIO -> 17:52 EM CRUD POSTAGEM INDEX CREATE SHOW.

class AnuncioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $anuncios = Anuncio::orderBy('id', 'ASC')->get();
        
       //dd($anuncios);

        return view('anuncio.anuncio_index', compact('anuncios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // dd('OLÁ');
        return view ('anuncio.anuncio_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());,

        $validated = $request->validate([
            'titulo' => 'required|min:5',

        ]);

        $anuncio = new Anuncio();
        $anuncio->titulo = $request->titulo;
        $anuncio-> save();

        return redirect()->route('anuncio.index')->with('mensagem', 'Anuncio cadastrada com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // dd('show:'. $id);
        $anuncio = Anuncio::find($id);
        return view('anuncio.anuncio_show', compact('anuncio'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $anuncio = Anuncio::find($id);
        return view('anuncio.anuncio_edit', compact('anuncio'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        
        
        $validated = $request->validate([
            'titulo' => 'required|min:5',

        ]);

        $anuncio = Anuncio::find($id);
        $anuncio->titulo =  $request->titulo;
        $anuncio->save();

        return redirect()->route('anuncio.index')->with('mensagem', 'Anuncio alterada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $anuncio = Anuncio::find($id);
        $anuncio->delete();

        return redirect()->route('anuncio.index')->with('mensagem', 'Anuncio excluida com sucesso!');
    }
}
