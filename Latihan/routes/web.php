<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/profil", function() {
    return view("profil");
});

Route::get("/berita/{id}/{title?}", function($id, $title = NULL) {
    return view("berita", ['id' => $id, 'title' => $title]);
});

