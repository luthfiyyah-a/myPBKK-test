<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TopicController;

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
    return view('landing-page');
});

Route::get('/masuk', function() {
    return 'halaman masuk';
});

Route::get('/daftar', function() {
    return 'halaman daftar';
});

// Route::view('/dashboard', 'dashboard.beranda', ['nama' => 'asep']);

Route::get('/dashboard', function() {
    return view('dashboard.beranda')
                ->with('nama', 'Luthfiyyah')
                ->with('pekerjaan', 'Mahasiswa');
})->name('dashboard');

Route::get('/dashboard/tugas-akhir', function() {
    return view('dashboard.tugas-akhir', [
        'nama' => 'Luthfiyyah'
    ]);
})->name('tugas-akhir');


Route::get('/dashboard/penawaran-topik', [TopicController::class, 'show'])->name('penawaran-topik');
