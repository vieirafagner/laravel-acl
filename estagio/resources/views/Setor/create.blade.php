@extends('adminlte::page')
@section('title','Cadastro de Instituição')
@section('content_header')
@section('content')

    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Cadastro de Instituição</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="{{route('setor.store')}}" method="POST">
            @csrf
            <div class="box-body">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" class="form-control" id="nome" placeholder="Digite o nome">
                </div>
                <div class="form-group">
                    <label for="cg">Carga Horária</label>
                    <input type="text" name="carga_h" class="form-control" id="cg" placeholder="Digite a Carga Horária">
                </div>
                <div class="form-group">
                    <label for="nv">Número de Vagas</label>
                    <input type="text" name="n_vagas" class="form-control" id="nv" placeholder="Digite o numero de vagas">
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