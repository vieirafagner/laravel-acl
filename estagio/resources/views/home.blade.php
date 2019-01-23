@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    @can('Coordenador')
    <button  class="btn btn-default" data-toggle="modal" data-target="#janela">Cadastrar Usuário</button>
    @endcan
@stop
<form role="form" action="{{route('usuarioscad')}}" class="modal fade" id="janela" method="POST">
    @csrf
    <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <div class="box-body">
            <button type="button"class="close" data-dismiss="modal">
                <span>&times;</span>
            </button>
            <h4 class="modal-title"><label style="font-family:Cambria">Cadastrar Usuário</label> </h4>
        </div>
    </div>
    <div class="modal-body">
            <div class="form-group">
                <label for="name">Nome</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Digite o nome">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Digite o Email">
            </div>
            <div class="form-group has-feedback {{ $errors->has('password') ? 'has-error' : '' }}">
                <input type="password" name="password" class="form-control"
                       placeholder="{{ trans('adminlte::adminlte.password') }}">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                @if ($errors->has('password'))
                    <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                @endif
            </div>
            <div class="form-group has-feedback {{ $errors->has('password_confirmation') ? 'has-error' : '' }}">
                <input type="password" name="password_confirmation" class="form-control"
                       placeholder="{{ trans('adminlte::adminlte.retype_password') }}">
                <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                @if ($errors->has('password_confirmation'))
                    <span class="help-block">
                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </span>
                @endif
            </div>
            <div class="form-group">
                <h3 class="text-center" for="level">Função</h3>
                <select id="level" name="level" class="form-control">
                    <option selected>Coordenador</option>
                    <option>Professor</option>
                    <option>Estagiário</option>

                </select>
            </div>
        </div>
        <!-- /.box-body -->


    <div class="modal-footer">
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
    </div>
    </div>
    </div>
</form>





