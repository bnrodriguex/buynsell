<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\AnuncioController;
use App\Http\Controllers\FeedController;
use App\Http\Controllers\PerfilController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [FeedController::class, 'welcome'])->name('welcome');

Route::get('/feed/categoria', [FeedController::class, 'categoria'])->name('feed.categoria');

Route::get('feed/categoria/{id}',  [FeedController::class, 'categoriaById'])->name('feed.categoriaById');

Auth::routes();

// PAREI DE VER NO VIDEO DO FILTRO CATEGORIA COM 42 NO TEMPO

// ---- O AUTH SENDO USADO MEDIANTE AO DOCS DO LARAVEL -----
Route::middleware(['auth'])->group(function () {

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


    Route::middleware(['can::admin'])->group(function () {


        // --------- CATEGORIAS --------------


    Route::get('/categoria', [CategoriaController::class, 'index'])->name('categoria.index')->middleware('auth');
                                                                            //padronização

        Route::get('/categoria/create', [CategoriaController::class, 'create'])->name('categoria.create');
        
        
        Route::post('/categoria', [CategoriaController::class, 'store'])->name('categoria.store');
        
        Route::get('/categoria/{id}', [CategoriaController::class, 'show'])->name('categoria.show');
        
        Route::get('/categoria/{id}/edit', [CategoriaController::class, 'edit'])->name('categoria.edit');
        
        Route::put('/categoria/{id}', [CategoriaController::class, 'update'])->name('categoria.update');

        Route::delete('/categoria/{id}',[CategoriaController::class, 'destroy'])->name('categoria.destroy');
    
    });


        // --------------------ANUNCIOS---------------------------
        Route::get('/anuncio', [AnuncioController::class, 'index'])->name('anuncio.index');

    Route::put('/categoria/{id}', [CategoriaController::class, 'update'])->name('categoria.update');

    Route::delete('/categoria/{id}',[CategoriaController::class, 'destroy'])->name('categoria.destroy');



// --------- ANÚNCIOS --------------


    Route::get('/anuncio', [AnuncioController::class, 'index'])->name('anuncio.index');

    Route::get('/anuncio/create', [AnuncioController::class, 'create'])->name('anuncio.create');

    Route::post('/anuncio', [AnuncioController::class, 'store'])->name('anuncio.store');

    Route::get('/anuncio/{id}/edit', [AnuncioController::class, 'edit'])->name('anuncio.edit');

    Route::get('/anuncio/{id}', [AnuncioController::class, 'show'])->name('anuncio.show');

    Route::put('/anuncio/{id}', [AnuncioController::class, 'update'])->name('anuncio.update');

    Route::delete('/anuncio/{id}', [AnuncioController::class, 'destroy'])->name('anuncio.destroy');

});



