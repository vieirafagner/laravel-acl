@extends('adminlte::page')
@section('title','Lista de Professores')
@section('content_header')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Lista de Professores</h3>
                    <a class="btn btn-success pull-right" href="#"><span class="glyphicon glyphicon-plus"><label style="font-family: Cambria;font-size: 12px">Adicionar</label></span> </a>
                </div>
                <div class="box-body">
                    <div class="row-fluid"></div>
                    <table class="table table-bordered table-hover table-striped table-condensed">
                        <tbody>
                        <tr>
                            <th style="width: 10px">id</th>
                            <th class="text-center">Nome</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Setor</th>
                            <th class="text-center">Telefone</th>
                            <th colspan="2" class="text-center">Ações</th>
                        </tr>
                        @foreach($a_user as $user)

                            <tr>
                                <td class="text-center">{{$user->id}}</td>
                                <td class="text-center">{{$user->name}}</td>
                                <td class="text-center">{{$user->email}}</td>
                                @foreach($user->setors as $s )
                                        <td class="text-center"><span class="badge bg-blue-gradient">{{$s->nome}}</span></td>

                                @endforeach

                                <td class="text-center">{{$user->telefone}}</td>
                                <td><a href="{{route('usuarios.edit',$user->id)}}" type="button" class="btn btn-primary"  data-toggle="modal" data-target="#janela"><span class="glyphicon glyphicon-edit"></span></a> </td>
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
                    {!! $a_user->links(); !!}
                </div>
            </div>
            <!-- /.box --><!-- /.box -->
        </div>
    </div>
@endsection
@stop