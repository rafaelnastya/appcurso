<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Aula;

class AulaController extends Controller
{
    public function mostrarFormAula(){
        return view('cad_aula');
    }

    public function mostrarManipulaAula()
    {
        $registrosAula = Aula::All();

        return view('manipula_aula',['registrosAula' => $registrosAula]);
    }

    public function index(){
        return view('index');
    }

    public function cadastroAul(Request $request){
        $registrosAul = $request->validate([
            'idcurso' => 'numeric|required',
            'tituloaula' => 'string|required',
            'urlaula' => 'string|required'
        ]);

        Aula::create($registrosAul);

        return Redirect::route('index');
    }

    public function deletarAula(Aula $registrosAula)
    {
        $registrosAula->delete();
        return Redirect::route('index');
    }
}
