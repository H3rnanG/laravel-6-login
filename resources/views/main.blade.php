@extends('layouts.layout')

@section('title', 'Login')
@section('content')

<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container position-relative pb-2">
        <div class="w-100 border-bottom border-primary position-absolute" style="top: 100%;"></div>
        <a class="navbar-brand" href="#">
            <img src="https://upload.wikimedia.org/wikipedia/commons/b/b2/Bootstrap_logo.svg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
            Bootstrap
        </a>
        <div class="ml-auto d-flex align-items-center gap-3">
            <span class="navbar-text mr-3">{{ Auth::user()->name }}</span>
            <a class="btn btn-outline-primary mr-2" href="{{ route('profile') }}">Profile</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="btn btn-outline-danger" type="submit">Logout</button>
            </form>
        </div>
    </div>
</nav>

<div class="container">
  <a class="btn btn-success" href="{{route('create_post')}}">Crear Post</a>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Larry the Bird</td>
        <td>Larry the Bird</td>
        <td>@twitter</td>
      </tr>
    </tbody>
  </table>
</div>

@endsection
