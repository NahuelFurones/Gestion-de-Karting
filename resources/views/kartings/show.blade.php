@extends('layouts.app')

@section('content')
    <h2>{{ $karting->name }}</h2>
    <p>Ubicación: {{ $karting->location }}</p>
    <p>Capacidad: {{ $karting->capacity }}</p>
    <p>Precio/h: {{ $karting->price_per_hour }}</p>
    <p>Activo: {{ $karting->is_active ? 'Sí' : 'No' }}</p>
    <p>Hora apertura: {{ $karting->open_time }}</p>
    <p>Hora cierre: {{ $karting->close_time }}</p>
    <p>Descripción: {{ $karting->description }}</p>
    <a href='{{ route("kartings.index") }}' class='btn btn-secondary'>Volver</a>
@endsection