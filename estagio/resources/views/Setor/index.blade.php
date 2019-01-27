@extends('adminlte::page')
@section('title','Lista de  Instituições')
@section('content_header')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Lista de Instituições</h3>
                </div>
                <div class="box-body">
                    <div class="row-fluid"></div>
                    <table class="table table-bordered table-hover table-striped table-condensed">
                        <tbody>
                        <tr>
                            <th style="width: 10px">id</th>
                            <th class="text-center">Nome</th>
                            <th class="text-center">Número de Vagas</th>
                            <th class="text-center">Carga Horária Exigida</th>
                            <th colspan="2" class="text-center">Ações</th>
                        </tr>
                      @foreach($a_setores as $setor)
                            <tr>
                                <td class="text-center">{{$setor->id}}</td>
                                <td class="text-center">{{$setor->nome}}</td>
                                <td class="text-center">{{$setor->n_vagas}}</td>
                                <td class="text-center"><span class="badge bg-blue-gradient">{{$setor->carga_h}}</td>
                                <td><a class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span></a> </td>
                                <td>
                                    <form>
                                        @csrf
                                        <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>
                                    </form>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="box-footer clearfix">
                    <ul class="pagination pagination-sm no-margin pull-right">
                        <li><a href="#">«</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">»</a></li>
                    </ul>
                </div>
            </div>
            <!-- /.box --><!-- /.box -->
        </div>
        <!-- /.col -->

        <!-- /.box -->

        <!-- /.box -->
    </div>
    <!-- /.col -->
    </div>
@endsection
@stop