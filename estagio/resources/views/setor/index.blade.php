@extends('adminlte::page')
@section('title','Lista de Estagiarios')
@section('content_header')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Lista de Estagiários</h3>
                    <a class="btn btn-success pull-right" href="#"><span class="glyphicon glyphicon-plus"><label style="font-family: Cambria;font-size: 12px">Adicionar</label></span> </a>
                </div>
                <div class="box-body">
                    <div class="row-fluid"></div>
                    <table class="table table-bordered table-hover table-striped table-condensed">
                        <tbody>
                        <tr>
                            <th style="width: 10px">id</th>
                            <th class="text-center">Concedente</th>
                            <th class="text-center">Responsável</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Telefone</th>
                            <th colspan="2" class="text-center">Ações</th>
                        </tr>
                        @foreach($a_setor as $setor)

                            <tr>
                                <td class="text-center">{{$setor->id}}</td>
                                <td class="text-center">{{$setor->nome}}</td>
                                <td class="text-center">{{$setor->responsavel}}</td>
                                <td class="text-center">{{$setor->email}}</td>
                                <td class="text-center">{{$setor->telefone}}</td>
                                <td><a href="{{route('setor.edit',$setor->id)}}" type="button" class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span></a> </td>
                                <td>
                                    <form >
                                        @csrf

                                        <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="box-footer clearfix text-right">
                    {!! $a_setor->links(); !!}
                </div>
            </div>
            <!-- /.box --><!-- /.box -->
        </div>
    </div>
@endsection
@stop