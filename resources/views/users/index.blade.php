@extends('layouts.app')

@section('title', 'Listagem dos usuarios')

@section('content')
  <h1>Listagem de usuarios</h1>
  <a href="{{ route('users.create') }}">criar usuario</a>

  <form action="{{ route('users.index') }}" method="GET">
    <input
      type='text'
      name='search'
      placeholder="Pesquisar: "
    />
    <button>Pesquisar</button>
  </form>

  <ul>
    @foreach($users as $user)
      <li>
        {{ $user->name }} -
        {{ $user->email }}
        | <a href="{{ route('users.show', $user->id) }}" >Detalhes</a>
        | <a href="{{ route('users.edit', $user->id) }}" >Editar</a>
      </li>
    @endforeach
  </ul>
@endsection
