@extends('layouts.master')

@section('titulo', 'Mi titulo')

@section('menu')
  @parent
  <ul>
    <li><a href="#">Proovedores</a></li>
    <li><a href="#">Sección2</a></li>
  </ul>
@endsection

@section('contenido')
  <p>Hola</p>
  <p>¿que tal?</p>
@endsection