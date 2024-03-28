<!-- resources/views/activities/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Editar Actividad</h1>
    <form action="{{ route('activities.update', $activity->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Nombre:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $activity->name }}">
        </div>
        <div class="form-group">
            <label for="type">Tipo:</label>
            <input type="text" class="form-control" id="type" name="type" value="{{ $activity->type }}">
        </div>
        <div class="form-group">
            <label for="score">Calificación:</label>
            <input type="text" class="form-control" id="score" name="score" value="{{ $activity->score }}">
        </div>
        <div class="form-group">
            <label for="date">Fecha:</label>
            <input type="date" class="form-control" id="date" name="date" value="{{ $activity->date }}">
        </div>
        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
    </form>
@endsection
