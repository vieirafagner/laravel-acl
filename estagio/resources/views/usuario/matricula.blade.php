@extends('adminlte::page')
@section('title','Lista de Estagiarios')
@section('content_header')
@section('content')
    @if (session('sucess'))
        <div class="alert alert-success">
            {{ session('sucess') }}
        </div>
    @endif
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Realizar Matriculas</h3>
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
                            <th class="text-center">Campo de Atuação</th>
                            <th class="text-center">Status</th>
                            <th colspan="2" class="text-center">Ações</th>
                        </tr>
                        @foreach($a_user2 as $user)

                            <tr>
                                <td class="text-center">{{$user->id}}</td>
                                <td class="text-center">{{$user->name}}</td>
                                <td class="text-center">{{$user->email}}</td>
                                @foreach($user->setors as $s)
                                    <td class="text-center"><span class="badge bg-blue-gradient">{{$s->nome}}</span></td>
                                @endforeach
                                <td class="text-center">{{$user->status}}</td>
                                <td>
                                    <form class="text-center" action="{{route('setmatricula',$user->id)}}">
                                        @csrf

                                        <button type="submit" class="btn btn-primary">Matricular</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="box-footer clearfix text-right">
                    {!! $a_user2->links(); !!}
                </div>
            </div>
            <!-- /.box --><!-- /.box -->
        </div>
    </div>
@endsection
@stop