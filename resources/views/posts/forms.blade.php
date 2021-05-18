@extends('layouts.app')

@section('title','forms')
@section('css')
    <link rel="stylesheet" href="{{asset('css/app-home.css')}}">
@endsection

@section('content')
    <h1>forms</h1>

    @if (Request::url() == 'http://127.0.0.1:8000/posts/create')
        <form action="{{route('posts.store')}}" method="post">
            @csrf
            @method('POST')

            <label for="author">Come vuoi firmarti?</label>
            <br>
            <input type="text" name="author" id="author">
            <br>
            <label for="title">Titolo</label>
            <br>
            <input type="text" name="title" id="title">
            <br>
            <label for="text">Testo</label>
            <br>
            <textarea name="text" id="text" cols="30" rows="10"></textarea>

            <button type="submit">Conferma</button>
        </form>
    @elseif(Request::url() == 'http://127.0.0.1:8000/posts/' . $post->id . '/edit')
        <form action="{{route('posts.update',$post)}}" method="post">
            @csrf
            @method('PUT')

            <label for="author">Modifica autore</label>
            <br>
            <input type="text" name="author" id="author" value="{{$post->author}}">
            <br>
            <label for="title">Modifica titolo</label>
            <br>
            <input type="text" name="title" id="title" value="{{$post->title}}>
            <br>
            <label for="text">Modifica testo</label>
            <br>
            <textarea name="text" id="text" cols="30" rows="10">{{$post->text}}</textarea>

            <button type="submit">Conferma</button>
        </form>
    @endif

@endsection
