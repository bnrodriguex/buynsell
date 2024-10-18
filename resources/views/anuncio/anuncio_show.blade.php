@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card"> 
                <div class="card-header"> {{ __('DASHBOARD')}}</div>
               
                    <p><strong> Categoria: </strong> {{ $anuncio->categoria->nome}}</p>
                    <p><strong> Nome: </strong> {{ $anuncio->titulo }}</p>
                    <p><strong> Conteúdo: </strong> {{ $anuncio->conteudo }}</p>
                    <p><strong> Autor: </strong> {{ $anuncio->autor->name}}</p>
                    <p><strong> Criação: </strong> {{ $anuncio->created_at }}</p>
                    <p><strong> Imagem: </strong> <img src="data:image/png;base64, {{ $anuncio->Imagem }}" alt="imagem" /> </p>

            </div>   
        </div>
    </div>
</div>  
@endsection
