<!-- resources/views/activities/index.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Lista de Actividades</h1>
    <a href="{{ route('activities.create') }}" class="btn btn-primary">Nueva Actividad</a>
    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Tipo</th>
                <th>Calificación</th>
                <th>Fecha</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($activities as $activity)
            <tr>
                <td>{{ $activity->name }}</td>
                <td>{{ $activity->type }}</td>
                <td>{{ $activity->score }}</td>
                <td>{{ $activity->date }}</td>
                <td>
                    <a href="{{ route('activities.show', $activity->id) }}" class="btn btn-info">Ver</a>
                    <a href="{{ route('activities.edit', $activity->id) }}" class="btn btn-primary">Editar</a>
                    <!-- Agrega un formulario para eliminar si lo deseas -->
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
