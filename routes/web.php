<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\AulaController;


Route::get('/',[CategoriaController::class,'index'])->name('index');

//visualizar e cadastrar a categoria
Route::get('/cadcategoria',[CategoriaController::class,'mostrarFormCat'])->name("form-cadastro-categoria");
Route::post('/cadcategoria',[CategoriaController::class,'cadastroCat'])->name("cadastro-categoria");

//visualizar e manipular categoria
Route::get('/manipulacategoria',[CategoriaController::class,'mostrarManipulaCategoria'])->name("manipula-categoria");

//rota buscar categoria
Route::get('/manipulanomecategoria',[CategoriaController::class,'buscarCategoria'])->name("busca-categoria-nome");

//alterar categoria
Route::get('/alterarcategoria/{registrosCategoria}',[CategoriaController::class,'mostrarAlterar'])->name('alterar-categoria');
Route::put('alterarbancocategoria/{registrosCategoria}',[CategoriaController::class,'executaAlterar'])->name('alterar-banco-categoria');

//apagar categoria
Route::delete('/deletarcategoria/{registrosCategoria}',[CategoriaController::class,'deletarCategoria'])->name('deletar-categoria');



//visualizar e cadastrar curso
Route::get('/cadcurso',[CursoController::class,'mostrarFormCurso'])->name("form-cadastro-curso");
Route::post('/cadcurso',[CursoController::class,'cadastroCurso'])->name("cadastro-curso");

//visualizar e manipular curso
Route::get('/manipulacurso',[CursoController::class,'mostrarManipulaCurso'])->name("manipula-curso");

//apaga curso
Route::delete('/deletarcurso/{registrosCurso}',[CursoController::class,'deletarCurso'])->name('deletar-curso');

//alterar curso
Route::get('/alteracurso/{registrosCurso}',[CursoController::class,'mostrarAlterarCur'])->name('alterar-curso');
Route::put('alterabancocurso/{registrosCurso}',[CursoController::class,'executaAlterarCur'])->name('alterar-banco-curso');


//visualizar e cadastrar aula
Route::get('/cadaula',[AulaController::class,'mostrarFormAula'])->name("form-cadastro-aula");
Route::post('/cadaula',[AulaController::class,'cadastroAul'])->name("cadastro-aula");

//visualizar e manipular aula
Route::get('/manipulaaula',[AulaController::class,'mostrarManipulaAula'])->name("manipula-aula");

//apaga aula
Route::delete('/deletaraula/{registrosAula}',[AulaController::class,'deletarAula'])->name('deletar-aula');

//alterar aula
Route::get('/alteraraula/{registrosAula}',[AulaController::class,'mostrarAlterarAula'])->name('alterar-aula');
Route::put('alterarbancoaula/{registrosAula}',[AulaController::class,'executaAlterarAula'])->name('alterar-banco-aula');