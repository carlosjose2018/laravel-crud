<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\FornecedoresController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[PrincipalController::class,'principal'])->name('site.index');
Route::get('/sobre-nos',[SobreNosController::class,'sobreNos'])->name('site.sobrenos');
Route::get('/contato',[ContatoController::class,'contato'])->name('site.contato');


Route::prefix('/app')->group(function () {
     route::get('/fornecedores',[FornecedoresController::class,'index'])->name('app.fornecedores');
});