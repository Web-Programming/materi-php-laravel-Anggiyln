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

Route::get('/prodi', [ProdiController::class, 'create'])->name('prodi.create');

Route::get('/prodi', [ProdiController::class, 'index'])->name('prodi.index');
Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
Route::get('/materi', [MateriController::class, 'index'])->name('materi.index');
Route::get('/prodi', [ProdiController::class, 'index'])->name('prodi.index');
Route::get('/dosen', [DosenController::class, 'index'])->name('dosen.index');
// Route::resource('prodi', App\Http\Controllers\ProdiController::class);





