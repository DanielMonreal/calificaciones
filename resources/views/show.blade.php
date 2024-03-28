<!-- resources/views/activities/show.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Detalles de la Actividad</h1>
    <p><strong>Nombre:</strong> {{ $activity->name }}</p>
    <p><strong>Tipo:</strong> {{ $activity->type }}</p>
    <p><strong>Calificación:</strong> {{ $activity->score }}</p>
    <p><strong>Fecha:</strong> {{ $activity->date }}</p>
    <a href="{{ route('activities.index') }}" class="btn btn-secondary">Volver</a>
@endsection
