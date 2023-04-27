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
    return view('welcome');
});

//kategoriaks
Route::get('api/kategoriaks', [KategoriakController::class, 'index']);
Route::get('api/kategoriaks/{id}', [KategoriakController::class, 'show']);
Route::post('api/kategoriaks', [KategoriakController::class, 'store']);
Route::put('api/kategoriaks/{id}', [KategoriakController::class, 'update']);
Route::delete('api/kategoriaks/{id}', [KategoriakController::class, 'destroy']);
//ingatlanoks
Route::get('api/ingatlanoks', [IngatlanokController::class, 'index']);
Route::get('api/ingatlanoks/{id}', [IngatlanokController::class, 'show']);
Route::post('api/ingatlanoks', [IngatlanokController::class, 'store']);
Route::put('api/ingatlanoks/{id}', [IngatlanokController::class, 'update']);
Route::delete('api/ingatlanoks/{id}', [IngatlanokController::class, 'destroy']);
