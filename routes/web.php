<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenggunaLulusanController;
use App\Http\Controllers\EvalPenggunaLulusanController;

use App\Http\Controllers\DosenController;
use App\Http\Controllers\EvalDosenController;

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
    return view('layouts/master');
});

Route::get('penggunaLulusan', [PenggunaLulusanController::class, 'index'])->name('penggunaLulusan.index');
Route::post('/penggunaLulusan/import', [PenggunaLulusanController::class, 'import'])->name('penggunaLulusan.import');
Route::get('/penggunaLulusan/eval', [EvalPenggunaLulusanController::class, 'index'])->name('penggunaLulusan.eval');
Route::get('/penggunaLulusan/table', [EvalPenggunaLulusanController::class, 'table'])->name('penggunaLulusan.table');

Route::get('dosen', [DosenController::class, 'index'])->name('dosen.index');
Route::post('/dosen/import', [DosenController::class, 'import'])->name('dosen.import');
Route::get('/dosen/eval', [EvalDosenController::class, 'index'])->name('dosen.eval');
Route::get('/dosen/table', [EvalDosenController::class, 'table'])->name('dosen.table');

