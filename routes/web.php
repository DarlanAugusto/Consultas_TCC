<?php

use App\Http\Controllers\AgendamentoController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/agendamentos', [AgendamentoController::class, 'index'])->name('agendamentos.index');
Route::get('/agendamentos/novo', [AgendamentoController::class, 'create'])->name('agendamentos.create');
Route::get('/agendamentos/show/{id}', [AgendamentoController::class, 'show'])->name('agendamentos.show');

Route::post('/agendamentos/store', [AgendamentoController::class, 'store'])->name('agendamentos.store');
