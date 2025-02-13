<?php

use App\Http\Controllers\DivisiController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('template.master');
});

Route::get('/divisi', [DivisiController::class, 'index'])->name('divisi');
Route::get('/divisi-add', [DivisiController::class, 'tambahDivisi'])->name('tambahdivisi');
Route::post('/divisi-save', [DivisiController::class, 'simpanDivisi'])->name('simpandivisi');
Route::get('/divisi/{kode}', [DivisiController::class, 'dataDivisiByKode'])->name('divisibykode');
Route::post('/divisi-update', [DivisiController::class, 'updateDivisi'])->name('editdivisi');
Route::delete('/divisi-delete/{id}', [DivisiController::class, 'hapusDivisi'])->name('hapusdivisi');
