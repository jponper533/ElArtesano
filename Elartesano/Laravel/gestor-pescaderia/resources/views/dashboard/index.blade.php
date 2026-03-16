@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <h1>DASHBOARD</h1>
    <h2>Ultimas Peliculas</h2>
    @include('peliculas._list')
    <p><a href="{{ route('peliculas.index') }}">Lista completa de peliculas</a></p>
    <h2>Ultimos Alquileres</h2>
    @include('alquileres._list')
    <p><a href="{{ route('alquileres.index') }}">Lista completa de alquileres</a></p>
@endsection
