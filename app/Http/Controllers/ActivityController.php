<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activity;
use App\Models\Subject; // Importar el modelo de Materia

class ActivityController extends Controller
{
    // Método para mostrar todas las actividades y todas las materias
    public function index()
    {
        // Obtener todas las actividades y todas las materias
        $activities = Activity::all();
        $subjects = Subject::all();

        // Devolver la vista 'activities.index' pasando las actividades y las materias como datos
        return view('activities.index', compact('activities', 'subjects'));
    }

    // Método para mostrar actividades por materia
    public function showBySubject($subjectId)
    {
        // Buscar la materia por su ID
        $subject = Subject::findOrFail($subjectId);

        // Obtener todas las actividades relacionadas con la materia
        $activities = Activity::where('subject_id', $subjectId)->get();

        // Devolver la vista 'activities.showBySubject' pasando la materia y las actividades como datos
        return view('activities.showBySubject', compact('subject', 'activities'));
    }

    // Otros métodos para crear, almacenar, mostrar, editar y eliminar actividades...
}
