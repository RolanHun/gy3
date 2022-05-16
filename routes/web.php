<?php

use App\Http\Controllers\IngatlanController;
use App\Http\Controllers\KategoriaController;
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
    return view('ingatlan');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/ingatlanok',[IngatlanController::class,'index']);
Route::delete('/ingatlanok',[IngatlanController::class,'destroy']);
Route::delete('/ingatlanok/{id}',[IngatlanController::class,'destroy']);
Route::post('/ingatlanok',[IngatlanController::class,'store']);


Route::get('/kategoriak',[KategoriaController::class,'index']);

require __DIR__.'/auth.php';