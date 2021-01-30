<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\InicioController;

use App\Http\Controllers\NoticiasController;

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

Route::get('/', [InicioController::class, "index"]);

Route::get('/noticias',[NoticiasController::class,"lista"]) ->name("noticias");

Route::get('/noticias/{noticia}',[NoticiasController::class,"detalles"]) ->name("noticias.detalles");