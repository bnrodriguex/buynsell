@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card"> 
                <div class="card-header"> {{ __('DASHBOARD')}}</div>

                    <p><strong> Nome: </strong> {{ $anuncio->titulo }}</p>
                    <p><strong> Criação: </strong> {{ $anuncio->created_at }}</p>

            </div>   
        </div>
    </div>
</div>  
@endsection
