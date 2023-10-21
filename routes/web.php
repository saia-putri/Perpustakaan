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

// admin
Route::get('/', function () {
    return view('admin.index');
});

Route::get('/buku', function () {
    return view('admin.buku');
});

Route::get('/user', function () {
    return view('admin.user');
});

Route::get('/kategori', function () {
    return view('admin.kategori');
});

Route::get('/rak', function () {
    return view('admin.rak');
});


Route::get('/createbuku', function () {
    return view('admin.createbuku');
});

Route::get('/editbuku', function () {
    return view('admin.editbuku');
});

Route::get('/detailbuku', function () {
    return view('admin.detailbuku');
});


Route::get('/createkategori', function () {
    return view('admin.createkategori');
});

Route::get('/editkategori', function () {
    return view('admin.editkategori');
});

Route::get('/detailkategori', function () {
    return view('admin.detailkategori');
});

// pengunjung
Route::get('/main', function () {
    return view('pengunjung.mainapps');
});