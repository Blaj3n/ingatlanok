<?php

use App\Http\Controllers\IngatlanokController;
use App\Http\Controllers\KategoriakController;
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
    return view('index');
});

//ingatlanoks
Route::get('/ingatlanoks', [IngatlanokController::class, 'index']);
Route::get('/ingatlanoks/{id}', [IngatlanokController::class, 'show']);
Route::post('/ingatlanoks', [IngatlanokController::class, 'store']);
Route::put('/ingatlanoks/{id}', [IngatlanokController::class, 'update']);
Route::delete('/ingatlanoks/{id}', [IngatlanokController::class, 'destroy']);
