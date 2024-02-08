<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenggunaLulusanController;

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
