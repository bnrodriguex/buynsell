<?php

namespace App\Http\Controllers;

use App\Models\Anuncio;
use Illuminate\Http\Request;
use App\Models\Categoria;

class FeedController extends Controller
{
    public function welcome(){
        $anuncios = Anuncio::OrderBy('id')->get();
        return view('welcome', compact('anuncios'));
    }

    public function categoria(){
        $categorias =  Categoria::orderBy('nome', 'ASC')->get();
        return view('feed.categoria', compact('categorias'));

    }

    public function categoriaById($id){
        $categorias = Categoria::where('categoria_id' , $id)->orderBy('id', 'DESC')->get();
        return view('feed.categoriaById', compact('categorias'));
    }
}


// PAREI NO VIDEO DE FILTRAR CATEGORIA AUTOR NO MINUTO 11:20