@extends('adminlte::page')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> {{ __('DASHBOARD')}}</div>

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



                     <form method='POST' action="{{ URL('/categoria' . $categoria->id) }}">
                    @method('PUT')
                    @csrf
                    <label for="cars">Escolha uma categoria:</label><br>
                    <select name="categoria_id"  class="form-control"id="categoria">
                         @foreach ($categoria as $value)
                            @if($value->id == $categorias->categoria_id)
                                <option selected="selected" value="{{ $value->id }}">{{ $value->nome }}</option>
                            @else
                                <option value="{{ $value->id }}">{{ $value->nome }}</option>
                            @endif
                        @endforeach
                    </select>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nome</label>
                        <input type="text" name="titulo" value="{{ $categoria->titulo }}"class="form-control" placeholder="Digite o nome da categoria">
                    </div>
                    <input type="submit" value="ENVIAR">
                </form>

                    <!--  FIM DO FORM  -->




            </div>
        </div>
    </div>
</div>
@endsection