@extends('adminlte::page')
@section('title','Cadastro de Instituição')
@section('content_header')
@section('content')

    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Cadastro de Campo de Estágio</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="{{route('setor.store')}}" method="POST">
            @csrf
            <div class="box-body">
                <div class="form-group col-md-6">
                    <label for="nome">Concedente</label>
                    <input type="text" name="nome" class="form-control" id="nome" placeholder="Informe o Concedente">
                </div>
                <div class="form-group col-md-6">
                    <label for="resp">Responsável</label>
                    <input type="text" name="responsavel" class="form-control" id="resp" placeholder="Informe o Responsavel">
                </div>
                <div class="form-group col-md-6">
                    <label for="tel">Telefone</label>
                    <input type="text" name="telefone" class="form-control" id="tel" placeholder="Informe o Telefone">
                </div>
                <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input type="text" name="email" class="form-control" id="email" placeholder="Informe o email">
                </div>
                <div class="form-group col-md-6">
                    <label for="end">Endereço</label>
                    <input type="text" name="endereco" class="form-control" id="end" placeholder="Informe o endereço">
                </div>
                <div class="form-group col-md-6">
                    <label for="cnpj">CNPJ</label>
                    <input type="text" name="cnpj" class="form-control" id="cnpj" placeholder="Informe o CNPJ">
                </div>
                <div class="form-group col-md-6">
                    <label for="cg">Carga Horária</label>
                    <input type="text" name="carga_h" class="form-control" id="nv" placeholder="Informe a carga horária">
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
