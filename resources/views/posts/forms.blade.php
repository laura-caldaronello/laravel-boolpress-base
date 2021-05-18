@extends('layouts.app')

@section('title','forms')
@section('css')
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
@endsection

@section('content')
    <h2>
        <a href="{{route('pagina-home')}}">Torna alla home</a>
    </h2>

    @if (Request::url() == 'http://127.0.0.1:8000/posts/create')
        <h1>Scrivi un post</h1>
        <form action="{{route('posts.store')}}" method="post">
            @csrf
            @method('POST')

            <label for="author">Come vuoi firmarti?</label>
            <input type="text" name="author" id="author">

            <label for="title">Titolo</label>
            <input type="text" name="title" id="title">

            <label for="text">Testo</label>
            <textarea name="text" id="text" cols="30" rows="10"></textarea>

            <button type="submit">Conferma</button>
        </form>
    @elseif(Request::url() == 'http://127.0.0.1:8000/posts/' . $post->id . '/edit')
        <h2>
            <a href="{{route('posts.show',['post' => $post->id])}}">Torna al post</a>
        </h2>

        <form action="{{route('posts.update',$post)}}" method="post">
            @csrf
            @method('PUT')

            <label for="author">Modifica autore</label>
            <input type="text" name="author" id="author" value="{{$post->author}}">

            <label for="title">Modifica titolo</label>
            <input type="text" name="title" id="title" value="{{$post->title}}">

            <label for="text">Modifica testo</label>
            <textarea name="text" id="text" cols="30" rows="10">{{$post->text}}</textarea>

            <button type="submit">Conferma</button>
        </form>
    @endif

@endsection
