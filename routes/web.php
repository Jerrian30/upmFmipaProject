<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporanPenggunaLulusanController;
use App\Http\Controllers\EvalPenggunaLulusanController;

use App\Http\Controllers\LaporanDosenController;
use App\Http\Controllers\EvalDosenController;

use App\Http\Controllers\LaporanLabController;
use App\Http\Controllers\EvalLabController;

use App\Http\Controllers\LaporanKemahasiswaanController;
use App\Http\Controllers\EvalKemahasiswaanController;

use App\Http\Controllers\LaporanLayproController;
use App\Http\Controllers\EvalLayproController;


use App\Http\Controllers\LaporanKeuanganController;
use App\Http\Controllers\EvalKeuanganController;

use App\Http\Controllers\LaporanTurtpController;
use App\Http\Controllers\EvalTurtpController;

use App\Http\Controllers\LaporanAkademikController;
use App\Http\Controllers\EvalAkademikController;

use App\Http\Controllers\LaporanPimpinanController;
use App\Http\Controllers\EvalPimpinanController;

use App\Http\Controllers\FormulirController;

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

Route::get('kemahasiswaan', [LaporanKemahasiswaanController::class, 'index'])->name('kemahasiswaan.index');
Route::post('/kemahasiswaan/import', [LaporanKemahasiswaanController::class, 'import'])->name('kemahasiswaan.import');
Route::get('/kemahasiswaan/eval', [EvalKemahasiswaanController::class, 'index'])->name('kemahasiswaan.eval');
Route::get('/kemahasiswaan/table', [EvalKemahasiswaanController::class, 'table'])->name('kemahasiswaan.table');


Route::get('laypro', [LaporanLayproController::class, 'index'])->name('laypro.index');
Route::post('/laypro/import', [LaporanLayproController::class, 'import'])->name('laypro.import');
Route::get('/laypro/eval', [EvalLayproController::class, 'index'])->name('laypro.eval');
Route::get('/laypro/table', [EvalLayproController::class, 'table'])->name('laypro.table');

Route::get('keuangan', [LaporanKeuanganController::class, 'index'])->name('keuangan.index');
Route::post('/keuangan/import', [LaporanKeuanganController::class, 'import'])->name('keuangan.import');
Route::get('/keuangan/eval', [EvalKeuanganController::class, 'index'])->name('keuangan.eval');
Route::get('/keuangan/table', [EvalKeuanganController::class, 'table'])->name('keuangan.table');

Route::get('turtp', [LaporanTurtpController::class, 'index'])->name('turtp.index');
Route::post('/turtp/import', [LaporanTurtpController::class, 'import'])->name('turtp.import');
Route::get('/turtp/eval', [EvalTurtpController::class, 'index'])->name('turtp.eval');
Route::get('/turtp/table', [EvalTurtpController::class, 'table'])->name('turtp.table');

Route::get('akademik', [LaporanAkademikController::class, 'index'])->name('akademik.index');
Route::post('/akademik/import', [LaporanAkademikController::class, 'import'])->name('akademik.import');
Route::get('/akademik/eval', [EvalAkademikController::class, 'index'])->name('akademik.eval');
Route::get('/akademik/table', [EvalAkademikController::class, 'table'])->name('akademik.table');

Route::get('pimpinan', [LaporanPimpinanController::class, 'index'])->name('pimpinan.index');
Route::post('/pimpinan/import', [LaporanPimpinanController::class, 'import'])->name('pimpinan.import');
Route::get('/pimpinan/eval', [EvalPimpinanController::class, 'index'])->name('pimpinan.eval');
Route::get('/pimpinan/table', [EvalPimpinanController::class, 'table'])->name('pimpinan.table');

Route::get('formullir', [FormulirController::class, 'index'])->name('formullir.index');
