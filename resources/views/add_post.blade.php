@extends('layouts.layout')

@section('metadatos')
    <link rel="stylesheet" href="{{asset('vendor/laraberg/css/laraberg.css')}}">
    <script src="https://unpkg.com/react@16/umd/react.production.min.js"></script>
    <script src="https://unpkg.com/react-dom@16/umd/react-dom.production.min.js"></script>
    <script src="{{ asset('vendor/laraberg/js/laraberg.js') }}" defer></script>
@endsection

@section('title','Gutenberg')

@section('content')
    <form action="{{ route('post.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea id="content" name="body" hidden></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            if (typeof Laraberg !== 'undefined') {
                Laraberg.init('content', { 
                    height: '800px',
                    supportsLayout: true
                });
            } else {
                console.error('Laraberg is not defined');
            }
        });
    </script>
@endsection

