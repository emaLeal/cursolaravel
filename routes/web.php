<?php

use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Route::get('/', HomeController::class);

Route::prefix('cursos')->group(function () {
    Route::controller(CursoController::class)->group(function () {

        Route::get('/', 'index');

        Route::get('/create', 'create');

        Route::get('/{curso}', 'show');

        Route::post('/create_curso', 'createCurso');
    });
});
