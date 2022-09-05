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
Route::get('/addBean', [BeanController::class, 'add']);
Route::post('/saveBean', [BeanController::class, 'save']);
Route::post('/editBean/{id}', [BeanController::class, 'edit']);
Route::put('/updateBean/{id}', [BeanController::class, 'update']);
Route::delete('deleteBean/{id}', [BeanController::class, 'delete']);

Route::get('/parameter', [ParameterController::class, 'getParameterList']);
Route::get('/parameter/{id}', [ParameterController::class, 'getBean']);
Route::get('/addPatameter', [ParameterController::class, 'add']);
Route::post('/saveParameter', [ParameterController::class, 'save']);
Route::post('/editParameter/{id}', [ParameterController::class, 'edit']);
Route::put('/updateParameter/{id}', [ParameterController::class, 'update']);
Route::delete('/deleteParameter/{id}', [ParameterController::class, 'delete']);