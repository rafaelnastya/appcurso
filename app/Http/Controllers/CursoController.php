<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function mostrarFormCurso(){
        return view('cad_curso');
    }
}
