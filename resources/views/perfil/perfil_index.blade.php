@extends('adminlte::page')

@section('title', 'Perfil do Usuário')

@section('content_header')
    <h1>Perfil de {{ $perfil->user->name }}</h1>
@stop

@section('content')
    <div class="row">
        <!-- Informações do Perfil -->
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Informações do Perfil</h3>
                </div>
                <div class="card-body">
                    <p><strong>Nome:</strong> {{ $perfil->user->name }}</p>
                    <p><strong>Email:</strong> {{ $perfil->user->email }}</p>
                    <p><strong>Data de Nascimento:</strong> {{ $perfil->dob }}</p>
                </div>
                <div class="card-footer">
                    <a href="{{ route('perfil.edit', $perfil->id) }}" class="btn btn-warning">Editar Perfil</a>
                </div>
            </div>
        </div>

        <!-- Anúncios do Usuário -->
        @if(session('error'))
    <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
    