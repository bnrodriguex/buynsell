<?php

namespace App\Http\Controllers;

use App\Models\Anuncio;
use Illuminate\Http\Request;

class FeedController extends Controller
{
    public function welcome(){
        $anuncios = Anuncio::OrderBy('id')->get();
        return view('welcome', compact('anuncios'));
    }
}


// PAREI NO VIDEO DE FILTRAR CATEGORIA AUTOR NO MINUTO 11:20