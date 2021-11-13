<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware' => 'web'], function(){
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
    
    Auth::routes();
    
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    
});
Route::group(['middleware' => 'auth'], function(){
    
    Route::get('/funcionarios',  [App\Http\Controllers\FuncionarioController::class, 'index']);
    Route::get('/funcionarios/batidas',  [App\Http\Controllers\FuncionarioController::class, 'batidas']);

    Route::get('/funcionarios/new',  [App\Http\Controllers\FuncionarioController::class, 'new']);
    Route::post('/funcionarios/add',  [App\Http\Controllers\FuncionarioController::class, 'add']);
    Route::post('/funcionarios/update/{id}',  [App\Http\Controllers\FuncionarioController::class, 'update']);
    Route::get('/funcionarios/{id}/edit',  [App\Http\Controllers\FuncionarioController::class, 'edit']);
    Route::delete('/funcionarios/delete/{id}',  [App\Http\Controllers\FuncionarioController::class, 'delete']);


    Route::get('/batidas',  [App\Http\Controllers\BatidaController::class, 'index']);
    
    Route::post('/batidas/update/{id}',  [App\Http\Controllers\BatidaController::class, 'update']);
    Route::get('/batidas/{id}/edit',  [App\Http\Controllers\BatidaController::class, 'edit']);
    Route::delete('/batidas/delete/{id}',  [App\Http\Controllers\BatidaController::class, 'delete']);

   

});

Route::get('/ponto',  [App\Http\Controllers\BatidaController::class, 'ponto']);
Route::post('/batidas/add',  [App\Http\Controllers\BatidaController::class, 'add']);
