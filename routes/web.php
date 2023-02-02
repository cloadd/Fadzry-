<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\guruController;
use App\Http\Controllers\jurusanController;
use App\Http\Controllers\mapelController;
use App\Http\Controllers\kelasController;
use App\Http\Controllers\siswaController;
use App\Http\Controllers\mengajarController;
use App\Http\Controllers\nilaiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// Route::prefix('/login')->group(function(){
    
    //Login 

    Route::post('/login/admin', [IndexController::class, 'loginAdmin']);
    Route::post('/login/siswa', [IndexController::class, 'loginSiswa']);
    Route::post('/login/guru', [IndexController::class, 'loginGuru']);
    Route::get('/', [IndexController::class,'index']);
    Route::get('home', [IndexController::class,'welcome']);
    Route::get('/logout', [IndexController::class,'logout']);

// });

    //Guru

Route::prefix('/guru')->group(function(){

    Route::get('/index', [guruController::class, 'index']);
    Route::get('/create', [guruController::class, 'create']);
    Route::post('/store', [guruController::class, 'store']);
    Route::get('/edit/{guru}', [guruController::class, 'edit']);
    Route::post('/update/{guru}', [guruController::class, 'update']);
    Route::get('/destroy/{guru}', [guruController::class, 'destroy']);

});

Route::prefix('/jurusan')->group(function(){

    Route::get('/index', [jurusanController::class, 'index']);
    Route::get('/create', [jurusanController::class, 'create']);
    Route::post('/store', [jurusanController::class, 'store']);
    Route::get('/edit/{jurusan}', [jurusanController::class, 'edit']);
    Route::post('/update/{jurusan}', [jurusanController::class, 'update']);
    Route::get('/destroy/{jurusan}', [jurusanController::class, 'destroy']);
});

Route::prefix('/mapel')->group(function(){

    Route::get('/index', [mapelController::class, 'index']);
    Route::get('/create', [mapelController::class, 'create']);
    Route::post('/store', [mapelController::class, 'store']);
    Route::get('/edit/{mapel}', [mapelController::class, 'edit']);
    Route::post('/update/{mapel}', [mapelController::class, 'update']);
    Route::get('/destroy/{mapel}', [mapelController::class, 'destroy']);
});

Route::prefix('/kelas')->group(function(){

    Route::get('/index', [kelasController::class, 'index']);
    Route::get('/create', [kelasController::class, 'create']);
    Route::post('/store', [kelasController::class, 'store']);
    Route::get('/edit/{kelas}', [kelasController::class, 'edit']);
    Route::post('/update/{kelas}', [kelasController::class, 'update']);
    Route::get('/destroy/{kelas}', [kelasController::class, 'destroy']);
});

Route::prefix('/siswa')->group(function(){

    Route::get('/index', [siswaController::class, 'index']);
    Route::get('/create', [siswaController::class, 'create']);
    Route::post('/store', [siswaController::class, 'store']);
    Route::get('/edit/{siswa}', [siswaController::class, 'edit']);
    Route::post('/update/{siswa}', [siswaController::class, 'update']);
    Route::get('/destroy/{siswa}', [siswaController::class, 'destroy']);
});

Route::prefix('/mengajar')->group(function(){

    Route::get('/index', [mengajarController::class, 'index']);
    Route::get('/create', [mengajarController::class, 'create']);
    Route::post('/store', [mengajarController::class, 'store']);
    Route::get('/edit/{mengajar}', [mengajarController::class, 'edit']);
    Route::post('/update/{mengajar}', [mengajarController::class, 'update']);
    Route::get('/destroy/{mengajar}', [mengajarController::class, 'destroy']);
});

Route::prefix('/nilai')->group(function(){

    Route::get('/index', [nilaiController::class, 'index']);
    Route::get('/create', [nilaiController::class, 'create']);
    Route::post('/store', [nilaiController::class, 'store']);
    Route::get('/edit/{nilai}', [nilaiController::class, 'edit']);
    Route::post('/update/{nilai}', [nilaiController::class, 'update']);
    Route::get('/destroy/{nilai}', [nilaiController::class, 'destroy']);
});

require __DIR__.'/auth.php';
