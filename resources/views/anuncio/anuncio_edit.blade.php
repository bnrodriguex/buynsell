@extends('adminlte::page')

<!-- -------- ABERTURA DO EDITOR RICO ----------- -->

<link rel="stylesheet" href="{{url('/richtexteditor/rte_theme_default.css')}}" />
<script type="text/javascript" src="{{url('/richtexteditor/rte.js')}}"></script>
<script type="text/javascript" src="{{url('/richtexteditor/plugins/all_plugins.js') }}"></script>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

                <form method="POST" action="{{ URL('/anuncio/' . $anuncio->id ) }}" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf

                    <div class="form-group">
                        <label for="categorias">Escolha uma categoria:</label><br>
                        <select name="categoria_id" class="form-control" id="categorias">
                            @foreach ($categorias as $value)
                            <option value="{{ $value->id }}">{{ $value->nome }}</option>
                            @endforeach
                        </select>
                        
                        <label>imagem</label>
                        <input type="file" name="imagem" class="form-control">  

                     <div class="form-group">
                        <label for="exampleInputEmail1">Titulo</label>
                        <input type="text" name="titulo" value="{{ $anuncio->titulo }}" class="form-control" placeholder="Digite o novo titulo do Anuncio">

                        <label for="exampleInputEmail1">Conteúdo</label>
                        <textarea id="inp_editor1" name="conteudo" class="form-control" placeholder="Digite o novo conteúdo do Anuncio">{{ $anuncio->conteudo }}</textarea>
                    </div>
                        <input type="submit" value="ENVIAR">
                </form>

                   
                <!-- -------- FECHAMENTO DO EDITOR RICO------- -->
                     
                <script type="text/javascript">
                        var editor1 = new RichTextEditor("#inp_editor1");
                </script>

            </div>
        </div>
    </div>
</div>
@endsection

       


