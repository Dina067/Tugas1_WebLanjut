<?php

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
    return view('konversi_nilai');
});
use App\Http\Controllers\KonversiNilaiController;

Route::get('/konversi-nilai', [KonversiNilaiController::class, 'index'])->name('konversi-nilai');
Route::post('/konversi-nilai/hasil', [KonversiNilaiController::class, 'hasil'])->name('konversi-nilai.hasil');
