@extends('layouts.app')

@section('title','Homepage')
@section('css')
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
@endsection

@section('content')
    <h1>
        <a class="my-button" href="{{route('posts.create')}}">Scrivi un post</a>
    </h1>
    <h2>Ultimi post:</h2>
    @foreach ($posts as $post)
        <div class="post-container">
            <h2>
                <a href="{{route('posts.show',['post' => $post->id])}}">
                    {{$post->title}}
                </a>
            </h2>
            <h3>by {{$post->author}}</h2>
            <p>{{$post->text}}</p>
        </div>
    @endforeach
@endsection
