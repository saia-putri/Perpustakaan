<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Bukucontroller;
use App\Http\Controllers\Kategoricontroller;
use App\Http\Controllers\Rakcontroller;
use App\Http\Controllers\Usercontroller;
use App\Http\Controllers\Pengunjungcontroller;
use App\Http\Controllers\Logincontroller;
use App\Http\Controllers\Tingkatcontroller;
use App\Http\Controllers\Controller;


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

Route::group(
    ['middleware' => ['auth']],
    function () {
        // admin
        Route::get('/dashboard', [Bukucontroller::class, 'dashboard']);

        // BUKU
        Route::get('/buku', [Bukucontroller::class, 'index']);
        Route::get('/createbuku', [Bukucontroller::class, 'create']);
        Route::post('/savebuku', [Bukucontroller::class, 'store']);
        Route::get('/detailbuku/{id}', [Bukucontroller::class, 'show']);
        Route::get('/editbuku/{id}', [Bukucontroller::class, 'edit']);
        Route::put('/updatebuku/{id}', [Bukucontroller::class, 'update']);
        Route::get('/deletebuku/{id}', [Bukucontroller::class, 'destroy']);
        Route::get('/profil', [Bukucontroller::class, 'profil']);

        // KATEGORI
        Route::get('/kategori', [Kategoricontroller::class, 'index']);
        Route::get('/createkategori', [Kategoricontroller::class, 'create']);
        Route::post('/savekategori', [Kategoricontroller::class, 'store']);
        Route::get('/editkategori/{id}', [Kategoricontroller::class, 'edit']);
        Route::put('/updatekategori/{id}', [Kategoricontroller::class, 'update']);
        Route::get('/deletekategori/{id}', [Kategoricontroller::class, 'destroy']);

        // RAK
        Route::get('/rak', [Rakcontroller::class, 'index']);
        Route::get('/createrak', [Rakcontroller::class, 'create']);
        Route::post('/saverak', [Rakcontroller::class, 'store']);
        Route::get('/editrak/{id}', [Rakcontroller::class, 'edit']);
        Route::put('/updaterak/{id}', [Rakcontroller::class, 'update']);
        Route::get('/deleterak/{id}', [Rakcontroller::class, 'destroy']);

        // USER
        Route::get('/user', [Usercontroller::class, 'index']);
        Route::get('/createuser', [Usercontroller::class, 'create']);
        Route::post('/saveuser', [Usercontroller::class, 'store']);
        Route::get('/edituser/{id}', [Usercontroller::class, 'edit']);
        Route::put('/updateuser/{id}', [Usercontroller::class, 'update']);
        Route::get('/deleteuser/{id}', [Usercontroller::class, 'destroy']);
    }
);

// pengunjung
Route::get('/', [Pengunjungcontroller::class, 'index']);
Route::get('/main', [Pengunjungcontroller::class, 'index']);
Route::get('/warta', [Pengunjungcontroller::class, 'warta']);
Route::get('/info', [Pengunjungcontroller::class, 'info']);
Route::get('/lokasi', [Pengunjungcontroller::class, 'lokasi']);
Route::get('/anggota', [Pengunjungcontroller::class, 'anggota']);
Route::get('/pustakawan', [Pengunjungcontroller::class, 'pustakawan']);
Route::get('/katalogbuku', [Pengunjungcontroller::class, 'katalog']);
Route::get('/detailpengunjung/{id}', [Pengunjungcontroller::class, 'show']);


Route::get('/search', [Pengunjungcontroller::class, 'search']);

// login
Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'index')->name('login');
    Route::post('/login/proses', 'proses');
    Route::get('/logout', 'logout');
});
