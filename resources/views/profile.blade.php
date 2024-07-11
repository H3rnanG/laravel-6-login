@extends('layouts.layout')

@section('title','Profile')
@section('content')

@section('content')
<div class="container">
    <h1>Perfil de {{ $user->name }}</h1>

    <h2>Tus Publicaciones</h2>
    @if($posts->isEmpty())
        <p>No has publicado nada todavía.</p>
    @else
        <ul>
            @foreach($posts as $post)
                <li>
                    <h3>{{ $post->title }}</h3>
                    <p>{{ $post->body }}</p>
                    <small>Publicado el: {{ $post->created_at->format('d M Y') }}</small>
                </li>
            @endforeach
        </ul>
    @endif
</div>
@endsection

@endsection