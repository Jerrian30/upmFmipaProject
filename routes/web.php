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

use App\Http\Controllers\LaporanKerjasamaController;
use App\Http\Controllers\EvalKerjasamaController;

use App\Http\Controllers\LaporanMahasiswaController;
use App\Http\Controllers\EvalMahasiswaController;

use App\Http\Controllers\FormulirController;

use App\Http\Controllers\DokumenController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\AksesController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UnduhController;
use App\Http\Controllers\UserController;

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





Auth::routes();

Route::get('/home', [AksesController::class, 'index'])->name('home');

// Route Autentikasi Login


    Route::group(['middleware' => ['cek_login:admin']], function () {
        Route::get('unduhs/create', [UnduhController::class, 'create'])->name('unduhs.create');
        Route::post('unduhs', [UnduhController::class, 'store'])->name('unduhs.store');
        Route::get('unduhs/{unduh}/edit', [UnduhController::class, 'edit'])->name('unduhs.edit');
        Route::put('unduhs/{unduh}', [UnduhController::class, 'update'])->name('unduhs.update');
        Route::delete('unduhs/{unduh}', [UnduhController::class, 'destroy'])->name('unduhs.destroy');

    Route::get('/user_roles', [RoleController::class, 'index'])->name('user_roles.index');
    Route::put('/user_roles/{user}', [RoleController::class, 'update'])->name('user_roles.update');
            
    Route::get('penggunaLulusan', [LaporanPenggunaLulusanController::class, 'index'])->name('penggunaLulusan.index');
    Route::post('/penggunaLulusan/import', [LaporanPenggunaLulusanController::class, 'import'])->name('penggunaLulusan.import');
    Route::post('/penggunaLulusan/delete', [LaporanPenggunaLulusanController::class, 'delete'])->name('penggunaLulusan.delete');
    Route::get('/penggunaLulusan/eval', [EvalPenggunaLulusanController::class, 'index'])->name('penggunaLulusan.eval');
    Route::get('/penggunaLulusan/table', [EvalPenggunaLulusanController::class, 'table'])->name('penggunaLulusan.table');

    Route::get('dosen', [LaporanDosenController::class, 'index'])->name('dosen.index');
    Route::post('/dosen/import', [LaporanDosenController::class, 'import'])->name('dosen.import');
    Route::post('/dosen/delete', [LaporanDosenController::class, 'delete'])->name('dosen.delete');
    Route::get('/dosen/eval', [EvalDosenController::class, 'index'])->name('dosen.eval');
    Route::get('/dosen/table', [EvalDosenController::class, 'table'])->name('dosen.table');

    Route::get('lab', [LaporanLabController::class, 'index'])->name('lab.index');
    Route::post('/lab/import', [LaporanLabController::class, 'import'])->name('lab.import');
    Route::post('/lab/delete', [LaporanLabController::class, 'delete'])->name('lab.delete');
    Route::get('/lab/eval', [EvalLabController::class, 'index'])->name('lab.eval');
    Route::get('/lab/table', [EvalLabController::class, 'table'])->name('lab.table');

    Route::get('kemahasiswaan', [LaporanKemahasiswaanController::class, 'index'])->name('kemahasiswaan.index');
    Route::post('/kemahasiswaan/import', [LaporanKemahasiswaanController::class, 'import'])->name('kemahasiswaan.import');
    Route::post('/kemahasiswaan/delete', [LaporanKemahasiswaanController::class, 'delete'])->name('kemahasiswaan.delete');
    Route::get('/kemahasiswaan/eval', [EvalKemahasiswaanController::class, 'index'])->name('kemahasiswaan.eval');
    Route::get('/kemahasiswaan/table', [EvalKemahasiswaanController::class, 'table'])->name('kemahasiswaan.table');


    Route::get('laypro', [LaporanLayproController::class, 'index'])->name('laypro.index');
    Route::post('/laypro/import', [LaporanLayproController::class, 'import'])->name('laypro.import');
    Route::post('/laypro/delete', [LaporanLayproController::class, 'delete'])->name('laypro.delete');
    Route::get('/laypro/eval', [EvalLayproController::class, 'index'])->name('laypro.eval');
    Route::get('/laypro/table', [EvalLayproController::class, 'table'])->name('laypro.table');

    Route::get('keuangan', [LaporanKeuanganController::class, 'index'])->name('keuangan.index');
    Route::post('/keuangan/import', [LaporanKeuanganController::class, 'import'])->name('keuangan.import');
    Route::post('/keuangan/delete', [LaporanKeuanganController::class, 'delete'])->name('keuangan.delete');
    Route::get('/keuangan/eval', [EvalKeuanganController::class, 'index'])->name('keuangan.eval');
    Route::get('/keuangan/table', [EvalKeuanganController::class, 'table'])->name('keuangan.table');

    Route::get('turtp', [LaporanTurtpController::class, 'index'])->name('turtp.index');
    Route::post('/turtp/import', [LaporanTurtpController::class, 'import'])->name('turtp.import');
    Route::post('/turtp/delete', [LaporanTurtpController::class, 'delete'])->name('turtp.delete');
    Route::get('/turtp/eval', [EvalTurtpController::class, 'index'])->name('turtp.eval');
    Route::get('/turtp/table', [EvalTurtpController::class, 'table'])->name('turtp.table');

    Route::get('akademik', [LaporanAkademikController::class, 'index'])->name('akademik.index');
    Route::post('/akademik/import', [LaporanAkademikController::class, 'import'])->name('akademik.import');
    Route::post('/akademik/delete', [LaporanAkademikController::class, 'delete'])->name('akademik.delete');
    Route::get('/akademik/eval', [EvalAkademikController::class, 'index'])->name('akademik.eval');
    Route::get('/akademik/table', [EvalAkademikController::class, 'table'])->name('akademik.table');

    Route::get('mahasiswa', [LaporanMahasiswaController::class, 'index'])->name('mahasiswa.index');
    Route::post('/mahasiswa/import', [LaporanMahasiswaController::class, 'import'])->name('mahasiswa.import');
    Route::post('/mahasiswa/delete', [LaporanMahasiswaController::class, 'delete'])->name('mahasiswa.delete');
    Route::get('/mahasiswa/eval', [EvalMahasiswaController::class, 'index'])->name('mahasiswa.eval');
    Route::get('/mahasiswa/table', [EvalMahasiswaController::class, 'table'])->name('mahasiswa.table');
    

    Route::get('pimpinan', [LaporanPimpinanController::class, 'index'])->name('pimpinan.index');
    Route::post('/pimpinan/import', [LaporanPimpinanController::class, 'import'])->name('pimpinan.import');
    Route::post('/pimpinan/delete', [LaporanPimpinanController::class, 'delete'])->name('pimpinan.delete');
    Route::get('/pimpinan/eval', [EvalPimpinanController::class, 'index'])->name('pimpinan.eval');
    Route::get('/pimpinan/table', [EvalPimpinanController::class, 'table'])->name('pimpinan.table');

    Route::get('kerjasama', [LaporanKerjasamaController::class, 'index'])->name('kerjasama.index');
    Route::post('/kerjasama/import', [LaporanKerjasamaController::class, 'import'])->name('kerjasama.import');
    Route::post('/kerjasama/delete', [LaporanKerjasamaController::class, 'delete'])->name('kerjasama.delete');
    Route::get('/kerjasama/eval', [EvalKerjasamaController::class, 'index'])->name('kerjasama.eval');
    Route::get('/kerjasama/table', [EvalKerjasamaController::class, 'table'])->name('kerjasama.table');

});
Route::group(['middleware' => ['cek_login:user']], function () {
    
});
Route::group(['middleware' => ['auth']], function () {
    Route::post('/profile/update', [UserController::class, 'updateProfile'])->name('profile.update');
    Route::get('/profile', [UserController::class, 'showProfile'])->name('profile.show');
    Route::get('/formulir', [FormulirController::class, 'index'])->name('formulir.index');
    Route::get('/dokumen', [DokumenController::class, 'index'])->name('dokumen.index');
    Route::get('/', [BerandaController::class, 'index'])->name('beranda');
    Route::get('unduhs', [UnduhController::class, 'index'])->name('unduhs.index');
    Route::get('unduhs/{unduh}', [UnduhController::class, 'show'])->name('unduhs.show');


});
