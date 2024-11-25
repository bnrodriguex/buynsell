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
                <!-- AVISO DE ERRO CASO NAO PASSE NA VALIDAÇÃO -->


                <!-- INICIO DO FORM -->


                <form method='POST' action="{{ URL('/anuncio') }}" enctype="multipart/form-data">
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

                        <label for="exampleInputEmail1">Título</label>
                        <input type="text" name="titulo" class="form-control" placeholder="Digite o nome do Anúncio">

                        <label for="exampleInputEmail1">Conteúdo</label>
                        <textarea id="inp_editor1" class="form-control" name="conteudo"></textarea>
                    </div>
                    <input type="submit" value="ENVIAR">
                </form>

                <!-- FIM DO FORM -->

<!-- PAREI NO VIDEO UPLOAD IMAGEM 28:20 COM O ERRO DANDO NO CATEOGORIA NA HORA DE VISU O ANUNCIO. -->


                <!-- -------- FECHAMENTO DO EDITOR RICO------- -->
                <script>
                    var editor1 = new RichTextEditor("#inp_editor1");
                </script>


            </div>
        </div>
    </div>
</div>
@endsection