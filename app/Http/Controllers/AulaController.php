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

    public function index(){
        return view('index');
    }

    public function cadastroAul(Request $request){
        $registrosAul = $request->validate([
            'idcurso' => 'integer|required',
            'tituloaula' => 'string|required',
            'urlaula' => 'string|required'
        ]);

        Aula::create($registrosAul);

        return Redirect::route('index');
    }
}
