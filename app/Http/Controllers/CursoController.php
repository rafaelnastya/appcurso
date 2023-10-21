<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Curso;

class CursoController extends Controller
{
    public function mostrarFormCurso(){
        return view('cad_curso');
    }

    public function index(){
        return view('index');
    }

    public function cadastroCur(Request $request){
        $registrosCur = $request->validate([
            'nomecurso' => 'string|required',
            'cargahoraria' => 'string|required',
            'valor' => 'decimal|required'

        ]);

        Curso::create($registrosCur);

        return Redirect::route('index');
    }
}
