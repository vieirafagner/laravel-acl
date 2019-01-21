@extends('layouts.app')

@section('content')
<div class="container">
        @foreach($a_posts as $post)
        @can('view_post',$post)
            <h1>{{$post->titulo}}</h1>
            <p>{{$post->descricao}}</p>
            <b>Autor : {{$post->user->name}}</b> <a href="{{url("/post/$post->id/update")}}">Editar</a>
            <hr>
            @endcan
        @endforeach
</div>
@endsection
