@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card"> 
                <div class="card-header"> {{ __('DASHBOARD')}}</div>


                    <!-- AVISO DE ERRO CASO NAO PASSE NA VALIDAÇÃO -->

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <il>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                    <!-- INICIO DO FORM -->



                    <form method="POST" action=" {{ URL('/anuncio') }}">
                        
                        @csrf

                        <label for="exampleInputEmail">Nome</label><br>
                        <input type="text" class="form-control" id="titulo" name="titulo" placholder="Digite o titulo do anuncio"><br>
                        
                        <input type="submit" value="ENVIAR">
                    </form>

            </div>   
        </div>
    </div>
</div>  
@endsection
