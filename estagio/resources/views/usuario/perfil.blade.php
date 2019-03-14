@extends('adminlte::page')
@section('title','Lista de Estagiarios')
@section('content_header')
@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Perfil</h3>
        </div>
        <form role="form" action="{{route('usuarios.update',$user->id)}}" method="POST">
            @method('PUT')
            @csrf
            <div class="box-body">
                <div class="form-group col-md-6">
                    <label for="name">Nome</label>
                    <input type="text" name="name" value="{{$user->name}}" class="form-control" id="name" placeholder="Digite o nome">
                </div>
                <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input type="email" name="email" value="{{$user->email}}" class="form-control" id="email" placeholder="Digite o Email">
                </div>
                <div class="form-group col-md-6">
                    <label for="telefone">Telefone</label>
                    <input type="telefone" name="telefone" value="{{$user->telefone}}" class="form-control" id="telefone" placeholder="Digite o Telefone">
                </div>
                <div class="form-group has-feedback {{ $errors->has('password') ? 'has-error' : '' }} col-md-6">
                    <label for="email">Senha</label>
                    <input type="password" name="password"  class="form-control"
                           placeholder="{{ trans('adminlte::adminlte.password') }}">

                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group has-feedback {{ $errors->has('password_confirmation') ? 'has-error' : '' }} col-md-6">
                    <label for="email">Repetir Senha</label>
                    <input type="password" name="password_confirmation" class="form-control"
                           placeholder="{{ trans('adminlte::adminlte.retype_password') }}">

                    @if ($errors->has('password_confirmation'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </span>
                    @endif
                </div>
                @can('Professor')
                <div class="form-group col-md-6">
                    <label for="email">Função</label>
                    <select id="cargo" name="cargo" value="{{$user->cargo}}" class="form-control">
                        <option selected>Coordenador</option>
                        <option>Professor</option>
                        <option>Estagiário</option>
                    </select>
                </div>
                @endcan
                <div class="form-group col-md-6">
                    <label for="setor">Setor de Atuação</label>
                    <select id="setor" name="setor" class="form-control">
                        @foreach($a_setor as $setor)
                            <option value="{{$setor->id}}" selected>{{$setor->nome}}</option>
                        @endforeach
                    </select>
                </div>
                <div align="left" class="col-md-1"><a class=" btn btn-primary" href="#">Inserir Sub-Setores</a></div>
            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </form>
        <div>

@endsection
@stop
