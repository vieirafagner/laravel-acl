@extends('adminlte::page')
@section('title','Cadastro de Estagiarios')
@section('content_header')
@section('content')

    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Cadastro de Usuário</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="{{route('usuarioscad')}}" method="POST">
            @csrf
            <div class="box-body">
                <div class="form-group col-md-6">
                    <label for="email">Selecione o Setor</label>
                    <select id="level" name="level" class="form-control">
                        <option selected>Laboratório</option>
                        <option>Asilo Lar de Jesus</option>
                        <option>Viva Vida</option>
                        <option>PSF</option>
                        <option>Hospital</option>
                    </select>
                </div>

                <div class="form-group col-md-6">
                    <label for="vagas">Número de Vagas</label>
                    <input type="text" name="vagas" class="form-control" id="vagas" placeholder="Digite o número de vagas para oferta">
                </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </form>
    </div>
@endsection
@stop