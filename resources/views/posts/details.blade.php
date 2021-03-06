@extends('layouts.app')

@section('title','dettagli')
@section('css')
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
@endsection

@section('content')
    <h2>
        <a href="{{route('pagina-home')}}">Torna alla home</a>
    </h2>
    
    <a href="{{route('posts.edit',['post' => $post->id])}}">Modifica</a>
    <form class="special-form" action="{{route('posts.destroy',['post' => $post->id])}}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">Elimina</button>                           
    </form>

    <h2>{{$post->title}}</h2>
    <h3>by {{$post->author}}</h2>
    <p>{{$post->text}}</p>
@endsection
