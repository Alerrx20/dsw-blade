@extends('layouts.master')

@section('titulo', 'Pagina Personas')

@section('contenido')
  <ul>
  @forelse ($persons as $person)
    <li>{{$person->name}}</li>
  @empty
      @include('layouts.vacio', ['elementos' => 'personas'])
  @endforelse
  </ul>
@endsection