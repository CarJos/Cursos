<?php

use App\Http\Controllers\docenteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\exercisesController;
use App\Http\Controllers\info;
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

Route::resource('cursos', exercisesController::class);
Route::resource('docentes', docenteController::class);
Route::get('nosotros', [info::class,'info']);