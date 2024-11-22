<?php

namespace App\Http\Controllers;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Database\Seeders\UserSeeder
use App\Models\Anuncio;


class PerfilController extends Controller
{
    public function index()
    {
        $user_id = Auth::id();
        $Perfil = Perfil::where('user_id', $user_id);

        if (!$perfil) {
            // Se não houver um perfil, redireciona ou exibe uma mensagem
            return redirect()->route('login')->with('error', 'Você não está logado.');
        }
        
        return view('anuncio.anuncio_index', compact('perfil'));
    }

}
