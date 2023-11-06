<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// // TESTE DE ROTA
// Route::get('testando', function(){
//     return "Esse é um teste de Rota";
// });

// ROTA PARA ADICIONAR PEDIDOS
Route::post('add_pedido',[PedidosController::class,'adicionar']);