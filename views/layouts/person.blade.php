@extends('layouts.master')

@section('titulo', 'Pagina Personas')

@section('menu')
<ul>
  <li>
    <p><a href="createperson.php">Crear Persona</a></p>
  </li>
</ul>    
@endsection
@section('contenido')
  <ul>
  @forelse ($persons as $person)
    <li>
      <a href="person.php?id={{$person->id}}">
        {{$person->name}}
      </a>
    </li>
  @empty
      @include('layouts.vacio', ['elementos' => 'personas'])
  @endforelse
  </ul>
@endsection