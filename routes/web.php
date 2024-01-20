<?php

use App\Http\Controllers\CaixaController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\HistoricoVendasController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\VendasController;
use Illuminate\Support\Facades\Route;
 
Route::get('/login', [LoginController::class, 'loginView'])->name('login.view');
Route::post('/login', [LoginController::class, 'autenticar'])->name('login.auth');
Route::get('/', function(){
    return redirect(route('home.index'));
});

Route::middleware(['auth'])->group(function(){
    Route::get('/dashboard', [HomeController::class, 'index'])->name('home.index');
    
    Route::get('/tarefas', [TaskController::class, 'index'])->name('task.index');
    Route::get('/categorias', [CategoryController::class, 'index'])->name('category.index');


    Route::post('/logout', [LoginController::class, 'deslogar'])->name('logout');
    Route::get('/registrar', [LoginController::class, 'registrar'])->name('registrar');
    Route::post('/registrar', [LoginController::class, 'processoRegistrar'])->name('registrar.action');
});