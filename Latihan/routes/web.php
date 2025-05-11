<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MhsApiController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\FakultasController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DosenController;

Route::get('/', function () {
    return view('welcome');
});


//Route::get("/profil", function() {
   // return view("profil");
//});

//Route::get("/berita/{id}/{title?}", function($id, $title = NULL) {
    //return view("berita", ['id' => $id, 'title' => $title]);
//});

Route :: apiResource(name: 'api/mhs',
controller: MhsApiController::class);

Route::resource('materi', MateriController::class);
Route::resource('prodi', ProdiController::class);
Route::resource('fakultas', FakultasController::class);
Route::resource('mhs', MahasiswaController::class);
Route::resource('dosen', DosenController::class);

//Route::get('/prodi/create', [ProdiController::class, 'create'])->name('prodi.create');

Route::get('/fakultas', [FakultasController::class, 'index'])->name('fakultas.index');
Route::get('/prodi', [ProdiController::class, 'index'])->name('prodi.index');
Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
Route::get('/materi', [MateriController::class, 'index'])->name('materi.index');
Route::get('/prodi', [ProdiController::class, 'index'])->name('prodi.index');
Route::get('/dosen', [DosenController::class, 'index'])->name('dosen.index');
// Route::resource('prodi', App\Http\Controllers\ProdiController::class);

// Route::get('.route/create', [Mhs.Controller::class, 'create'])->name('footer.create');


// routes/web.php


// Route untuk prodi
Route::prefix('prodi')->group(function() {
    Route::get('/', [ProdiController::class, 'index'])->name('prodi.index');
    Route::get('/create', [ProdiController::class, 'create'])->name('prodi.create');

    // Detail prodi
    Route::get('/{id}', [ProdiController::class, 'show'])->name('prodi.show');

    // Delete prodi
    Route::get('/{id}/delete', [ProdiController::class, 'delete'])->name('prodi.delete');
    Route::delete('/{id}', [ProdiController::class, 'destroy'])->name('prodi.destroy');
});

//route fakultas
Route::get('/fakultas', [FakultasController::class, 'index'])->name('fakultas.index');
Route::get('/fakultas/{id}/detail', [FakultasController::class, 'detail'])->name('fakultas.detail');
Route::get('/fakultas/create', [FakultasController::class, 'createForm'])->name('fakultas.create');
Route::post('/fakultas/store', [FakultasController::class, 'store'])->name('fakultas.store');
Route::post('/fakultas/{id}/destroy', [FakultasController::class, 'destroy'])->name('fakultas.destroy');  // Menggunakan destroy
