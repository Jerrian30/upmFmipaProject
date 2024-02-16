<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporanPenggunaLulusanController;
use App\Http\Controllers\EvalPenggunaLulusanController;

use App\Http\Controllers\LaporanDosenController;
use App\Http\Controllers\EvalDosenController;

use App\Http\Controllers\LaporanLabController;
use App\Http\Controllers\EvalLabController;

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

Route::get('penggunaLulusan', [LaporanPenggunaLulusanController::class, 'index'])->name('penggunaLulusan.index');
Route::post('/penggunaLulusan/import', [LaporanPenggunaLulusanController::class, 'import'])->name('penggunaLulusan.import');
Route::get('/penggunaLulusan/eval', [EvalPenggunaLulusanController::class, 'index'])->name('penggunaLulusan.eval');
Route::get('/penggunaLulusan/table', [EvalPenggunaLulusanController::class, 'table'])->name('penggunaLulusan.table');

Route::get('dosen', [LaporanDosenController::class, 'index'])->name('dosen.index');
Route::post('/dosen/import', [LaporanDosenController::class, 'import'])->name('dosen.import');
Route::get('/dosen/eval', [EvalDosenController::class, 'index'])->name('dosen.eval');
Route::get('/dosen/table', [EvalDosenController::class, 'table'])->name('dosen.table');

Route::get('lab', [LaporanLabController::class, 'index'])->name('lab.index');
Route::post('/lab/import', [LaporanLabController::class, 'import'])->name('lab.import');
Route::get('/lab/eval', [EvalLabController::class, 'index'])->name('lab.eval');
Route::get('/lab/table', [EvalLabController::class, 'table'])->name('lab.table');

