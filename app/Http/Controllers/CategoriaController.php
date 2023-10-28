<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    //abri o formulario de cadastro
    public function mostrarFormCat(){
        return view('cad_categoria');
    }

    public function mostrarManipulaCategoria()
    {
        $registrosCategoria = Categoria::All();

        return view('manipula_categoria',['registrosCategoria' => $registrosCategoria]);
    }

    public function index(){
        return view('index');
    }

    public function cadastroCat(Request $request){
        $registrosCat = $request->validate([
            'nomecategoria' => 'string|required'
        ]);

        Categoria::create($registrosCat);

        return Redirect::route('index');
    }

    public function deletarCategoria(Categoria $registrosCategoria)
    {
        $registrosCategoria->delete();
        return Redirect::route('index');
    }

    public function buscarCategoria(Request $request)
    {
        $registrosCategoria = Categoria::query();
        $registrosCategoria->when($request->categoria,function($query, $valor){
            $query->where('nomecategoria', 'like', '%', $valor, '%');
        });
        $registrosCategoria = $registrosCategoria->get();
        return view('manipula_categoria',['registrosCategoria' => $registrosCategoria]);
    }
}
