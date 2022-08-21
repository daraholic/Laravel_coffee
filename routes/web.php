<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeanController;
use App\Http\Controllers\ParameterController;

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

Route::get('/bean', [BeanController::class, 'getBeanList']);
Route::get('/bean/{id}', [BeanController::class, 'getBean']);
Route::get('/add', [BeanController::class, 'add']);
Route::post('/save', [BeanController::class, 'save']);
Route::post('/edit/{id}', [BeanController::class, 'edit']);
Route::put('/{id}', [BeanController::class, 'update']);
Route::delete('/{id}', [BeanController::class, 'delete']);

Route::get('/parameter', [ParameterController::class, 'getParameterList']);