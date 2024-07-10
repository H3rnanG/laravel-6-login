@extends('layouts.layout')

@section('title','Profile')
@section('content')

<div class="container">
    <h1>{{Auth::user()->name}}</h1>
    <h2>{{Auth::user()->email}}</h2>
</div>

@endsection