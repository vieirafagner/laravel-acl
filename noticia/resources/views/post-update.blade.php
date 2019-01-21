@extends('layouts.app')

@section('content')
    <div class="container">

            <h1>{{$post->titulo}}</h1>
            <p>{{$post->descricao}}</p>
            <b>Autor : {{$post->user->name}}</b>
            <hr>

    </div>
@endsection
