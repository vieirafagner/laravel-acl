@extends('adminlte::page')
@section('title','Editar Usuário')
@section('content_header')
@section('content')

    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Editar Usuário</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="{{route('usuarios.update',$user->id)}}" method="POST">
            @csrf
            @method('PUT')
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
                @can('esconder')
                <div class="form-group has-feedback {{ $errors->has('password') ? 'has-error' : '' }} col-md-6">
                    <label for="email">Senha</label>
                    <input type="password" name="password" class="form-control"
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
                @endcan
                <div class="form-group col-md-6">
                    <label for="cargo">Função</label>
                    <?php $cargo=$user->cargo?>
                    <select id="cargo" name="cargo" class="form-control">
                        <option value="Coordenador"@if($cargo=="Coordenador") selected>{{$user->cargo='Coordenador'}}</option>
                        <option value="Professor"@elseif($cargo=="Professor") selected>{{$user->cargo='Professor'}}</option>
                        <option value="Estagiário"@elseif($cargo=="Estagiário") selected @endif>{{$user->cargo='Estagiário'}}</option>
                    </select>
                </div>

                <div class="form-group col-md-6">
                    <label for="setor">Setor de Atuação</label>
                    @foreach($user->setors as $s)
                    <?php $setor=$s->nome?>
                    <select id="setor" name="setor" class="form-control">

                            <option value="Hospital"@if($setor=="Hospital") selected>{{$s->nome='Hosiptal'}}</option>
                            <option value="Laboratório"@elseif($setor=="Laboratório") selected>{{$s->nome='Laboratório'}}</option>
                            <option value="Asilo joao XXlll"@elseif($setor=="Asilo joao XXlll") selected>{{$s->nome='Asilo joao XXlll'}}</option>
                            <option value="PSF"@elseif($setor=="PSF") selected @endif>{{$s->nome='PSF'}}</option>
                       
                    </select>
                    @endforeach
                </div>

            </div>

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </form>
    </div>
@endsection
@stop