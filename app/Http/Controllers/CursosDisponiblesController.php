<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;

class CursosDisponiblesController extends Controller
{
    //index para listar los cursos disponibles
    public function index()
    {
        $cursos = Curso::orderBy('id','desc')->paginate(15);
        return view('cursos.showcursos', compact('cursos'));
    }
}
