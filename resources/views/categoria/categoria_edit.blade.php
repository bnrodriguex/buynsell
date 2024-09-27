@extends('adminlte::page')

@section('content')

<!-- -------- ABERTURA DO EDITOR RICO ----------- -->

<link rel="stylesheet" href="{{url('/richtexteditor/rte_theme_default.css')}}" />
<script type="text/javascript" src="{{url('/richtexteditor/rte.js')}"></script>
<script type="text/javascript" src="{{url('/richtexteditor/plugins/all_plugins.js') }}"></script>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card"> 
                <div class="card-header"> {{ __('DASHBOARD')}}</div>


                    <!-- AVISO DE ERRO CASO NAO PASSE NA VALIDAÇÃO

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <il>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif -->

                    <!-- INICIO DO FORM -->



                    <form method="POST" action="{{ URL('/categoria/' . $categoria->id ) }}">
                        
                        @csrf
                        @method('PUT')

                        <label for="exampleInputEmail">Nome</label><br>
                        <input type="text" class="form-control" value="{{ $categoria->nome }}" id="nome" name="nome" placholder="Digite o nome da categoria"><br>
                        
                        <input type="submit" value="ENVIAR">
                    </form>

                    <!--  FIM DO FORM  -->



                    <!-- -------- FECHAMENTO DO EDITOR RICO------- -->
                     
                    <script>
                        var editor1 = new RichTextEditor("#inp_editor1");
                    </script>

            </div>   
        </div>
    </div>
</div>  
@endsection
