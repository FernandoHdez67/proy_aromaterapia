<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Categoriacontroller;
use App\Http\Controllers\ArticuloController;
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

//Mostrar todas las categorias
Route::get('categoria','App\Http\Controllers\Categoriacontroller@getCategoria');
//Buscar por id
Route::get('categoria/{id}','App\Http\Controllers\Categoriacontroller@getCategoriaxid');
//Insertar categoria
Route::post('addCategoria','App\Http\Controllers\Categoriacontroller@insertCategoria');
//Actualizar categoria
Route::put('updateCategoria/{id}','App\Http\Controllers\Categoriacontroller@updateCategoria');
//Eliminar categorias
Route::delete('deleteCategoria/{id}','App\Http\Controllers\Categoriacontroller@deleteCategoria');


Route::get('/articulos', [App\Http\Controllers\ArticuloController::class,'index']); //muestra todos los registros
Route::get('articulos/{id}',[App\Http\Controllers\ArticuloController::class,'getCategoriaxid']);//Buscar por id
Route::post('/articulos', [App\Http\Controllers\ArticuloController::class,'store']); // crea un registro
Route::put('/articulos/{id}', [App\Http\Controllers\ArticuloController::class,'update']); // actualiza un registro
Route::delete('/articulos/{id}', [App\Http\Controllers\ArticuloController::class,'destroy']); //elimina un registro

