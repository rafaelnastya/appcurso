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

    public function cadastroCurso(Request $request){
        $registrosCur = $request->validate([
            'idcategoria'=> 'numeric|required',
            'nomecurso' => 'string|required',
            'cargahoraria' => 'string|required',
            'valor' => 'numeric|required'
        ]);

        Curso::create($registrosCur);

        return Redirect::route('index');
    }

    public function deletarCurso(Curso $registrosCurso)
    {
        $registrosCurso->delete();
        return Redirect::route('index');
    }

    public function mostrarAlterarCur(Curso $registrosCurso)
    {
        return view('altera_curso',['registrosCurso' => $registrosCurso]);
    }

    public function executaAlterarCur(Curso $registrosCurso, Request $request)
    {
        $registrosCur = $request->validate([
            'nomecurso' => 'string|required',
            'cargahoraria' => 'string|required',
            'valor' => 'string|required',
        ]);

        $registrosCurso->fill($registrosCur);
        $registrosCurso->save();

        //alert("Dados alterados.");
        return Redirect::route('index');
    }
}

