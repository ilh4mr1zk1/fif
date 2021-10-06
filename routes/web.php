<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TesController;

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


Route::get('/dashboard', [TesController::class, 'index'])->name('firstPage');
Route::get('/tes', [TesController::class, 'tes']);
Route::get('/detail/{id}', [TesController::class, 'detail']);
Route::get('/edit/{id}', [TesController::class, 'edit'])->name('tambah');
Route::post('/update/{id}', [TesController::class, 'update'])->name('update');
Route::delete('/hapus/{id}', [TesController::class, 'destroy'])->name('delete');
Route::post('/create/fif', [TesController::class, 'simpan'])->name('simpan.aja');

