<!-- resources/views/activities/showBySubject.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Actividades de {{ $subject->name }}</h1>

    <ul>
        @foreach ($activities as $activity)
            <li>{{ $activity->name }}</li>
        @endforeach
    </ul>
@endsection
