@extends('layouts.app')

@section('title', 'Editar usuário {$user->name}')

@section('content')
  <h1>Editar usuário {{ $user->name }}</h1>

  <form action="{{ route('users.update', $user->id) }}" method="POST">
    <input type="hidden" name="_method" value="PUT"/>
    @include('users._partials.form')
  </form>
@endsection
