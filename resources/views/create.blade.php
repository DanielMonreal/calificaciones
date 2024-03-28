<!-- resources/views/activities/create.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Nueva Actividad</h1>
    <form action="{{ route('activities.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nombre:</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="form-group">
            <label for="type">Tipo:</label>
            <input type="text" class="form-control" id="type" name="type">
        </div>
        <div class="form-group">
            <label for="score">Calificación:</label>
            <input type="text" class="form-control" id="score" name="score">
        </div>
        <div class="form-group">
            <label for="date">Fecha:</label>
            <input type="date" class="form-control" id="date" name="date">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection
