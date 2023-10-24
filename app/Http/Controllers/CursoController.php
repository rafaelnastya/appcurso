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
    
    public function mostrarManipulaCurso()
    {
        $registrosCurso = Curso::All();

        return view('manipula_curso',['registrosCurso' => $registrosCurso]);
    }

    public function index(){
        return view('index');
    }

    public function cadastroCur(Request $request){
        $registrosCur = $request->validate([
            'idcategoria'=> 'numeric|required',
            'nomecurso' => 'string|required',
            'cargahoraria' => 'string|required',
            'valor' => 'numeric|required'

        ]);

        Curso::create($registrosCur);

        return Redirect::route('index');
    }
}
