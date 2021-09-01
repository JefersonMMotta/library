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
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\VeiculosController;
use App\Http\Controllers\ProdutosController;

Route::get('/', function () {
    return view('welcome');
});
Route::prefix('clientes')->group(function () {
    Route::get('/', [ClienteController::class, 'index']);
    Route::get('cadastrar', [ClienteController::class, 'create']);
    Route::get('detalhes/{id}', [ClienteController::class, 'show']);
    Route::get('editar/{id}', [ClienteController::class, 'edit']);
    Route::get('excluir/{id}', [ClienteController::class, 'destroy']);
    Route::post('store', [ClienteController::class, 'store']);
    Route::post('update/{id}', [ClienteController::class, 'update']);
    Route::post('delete/{id}', [ClienteController::class, 'delete']);
});

Route::prefix('veiculos')->group(function () {
    Route::get('/', [VeiculosController::class, 'index']);
    Route::get('cadastrar/{id}', [VeiculosController::class, 'create']);
    Route::get('detalhes/{id}', [VeiculosController::class, 'show']);
    Route::get('editar/{id}', [VeiculosController::class, 'edit']);
    Route::get('excluir/{id}', [VeiculosController::class, 'destroy']);
    Route::post('store/{id}', [VeiculosController::class, 'store']);
    Route::post('update/{id}', [VeiculosController::class, 'update']);
    Route::post('delete/{id}', [VeiculosController::class, 'delete']);
});

Route::prefix('produtos')->group(function () {
    Route::get('/', [ProdutosController::class, 'index']);
    Route::get('cadastrar', [ProdutosController::class, 'create']);
    Route::get('detalhes/{id}', [ProdutosController::class, 'show']);
    Route::get('editar/{id}', [ProdutosController::class, 'edit']);
    Route::get('excluir/{id}', [ProdutosController::class, 'destroy']);
    Route::post('store', [ProdutosController::class, 'store']);
    Route::post('update/{id}', [ProdutosController::class, 'update']);
    Route::post('delete/{id}', [ProdutosController::class, 'delete']);
});

