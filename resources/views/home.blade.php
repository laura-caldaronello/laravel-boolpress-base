@extends('layouts.app')

@section('title','home')
@section('css')
    <link rel="stylesheet" href="{{asset('css/app-home.css')}}">
@endsection

@section('content')
    <h1>Homepage</h1>
    <h1>
        <a href="{{route('posts.create')}}">Scrivi un post</a>
    </h1>
    @foreach ($posts as $post)
        <h2>
            <a href="{{route('posts.show',['post' => $post->id])}}">
                {{$post->title}}
            </a>
        </h2>
        <h3>by {{$post->author}}</h2>
        <p>{{$post->text}}</p>
    @endforeach
@endsection
