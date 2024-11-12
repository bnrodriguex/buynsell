<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anuncio;
use App\Models\Categoria;
use Illuminate\Support\Facades\Auth;



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
        
        $anuncios = Anuncio::orderBy('titulo', 'ASC')->get();
        $categorias = Categoria::get();
        return view ('anuncio.anuncio_create', compact('categorias', 'anuncios'));  
    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //  dd($request->all());

        // 1- PEGAR O CONTEUDO DO ARQUIVO
        if($request->file('imagem')){
            $content = file_get_contents($request->file('imagem'));
        }
    
        $validated = $request->validate([
            'categoria_id' => 'required',
            'titulo' => 'required|min:5',
            // 2- VALIDAR O TIPO DO ARQUIVO
            'imagem' => 'mimes:jpg,bmp,png,jpeg',
            'conteudo' => 'required|min:5',
            
        ]);
        
        $anuncio = new Anuncio();
        $anuncio->categoria_id = $request->categoria_id;
        $anuncio->titulo = $request->titulo;
        // 3- CONVERTER PARA BASE64
        if($request->file('imagem')){
            $anuncio->imagem = base64_encode($content);
        }
        $anuncio->user_id = Auth::id();
        $anuncio->conteudo = $request->conteudo;
        $anuncio->save();

        return redirect()->route('anuncio.index')->with('mensagem', 'Anuncio cadastrada com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $anuncio = Anuncio::find($id);
        $categoria = Categoria::find($id);
        return view('anuncio.anuncio_show', compact('anuncio', 'categoria'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categorias = Categoria::orderBy('nome', 'ASC')->get();

        $anuncio = Anuncio::find($id);

        return view('anuncio.anuncio_edit', compact('anuncio', 'categorias'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if($request->file('imagem')){
            $content = file_get_contents($request->file('imagem'));
        }
        
        
         $validated = $request->validate([
            'categoria_id' => 'required',
            'imagem' => 'mimes:jpg,bmp,png,jpeg',
            'titulo' => 'required|min:5',
            'conteudo' => 'required|min:5',

        ]);
        
        $anuncio = Anuncio::find($id);
        $anuncio->titulo = $request->titulo;
        $anuncio->user_id = Auth::id();
        $anuncio->categoria_id = $request->categoria_id;
        if($request->file('imagem')){
            $anuncio->imagem = base64_encode($content);
        }   
        $anuncio->conteudo = $request->conteudo;
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
