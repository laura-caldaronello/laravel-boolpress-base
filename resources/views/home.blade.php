@extends('layouts.app')

@section('title','home')
@section('css')
    <link rel="stylesheet" href="{{asset('css/app-home.css')}}">
@endsection

@section('content')
    <h1>Homepage</h1>
    @foreach ($posts as $post)
        <h2>{{$post->title}}</h2>
        <h3>by {{$post->author}}</h2>
        <p>{{$post->text}}</p>
    @endforeach
@endsection
