@extends('layouts.app')

@section('title','dettagli')
@section('css')
    <link rel="stylesheet" href="{{asset('css/app-home.css')}}">
@endsection

@section('content')
    <h1>Dettagli</h1>

    <h2>
        {{$post->title}}
        <a href="{{route('posts.edit',['post' => $post->id])}}">Modifica</a>
    </h2>
    <h3>by {{$post->author}}</h2>
    <p>{{$post->text}}</p>
@endsection
