@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                        @can('admin')
                            <p>Parabéns Você é o ADM</p>
                        
                        @else
                            <p>Parabéns Você é UM USER Padrão</p>
                        @endcan

                    

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
