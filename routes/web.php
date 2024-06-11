<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TanyaController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\GlosariumController;
use App\Http\Controllers\KakastroController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
});


//login
Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

//logout
Route::post('/logout', [LoginController::class, 'logout']);

//register
Route::get('/register', [RegisterController::class, 'index']);

Route::post('/register', [RegisterController::class, 'store']);


//Tanya

Route::get('/tanya', function () {
    return view('tanya');
});

Route::post('/sendtanya', [TanyaController::class, 'store'])->name('tanya.store');

//menampilkan data dari tabel tanya ke dalam post.blade.php
Route::get('/listpertanyaan', [TanyaController::class, 'index']);

Route::delete('/tanyas/{tanya}', [TanyaController::class, 'destroy'])->name('tanyas.destroy');


// // Dropdown Menu
// Route::get('/pengertian', function () {
//     return view('dropdown/pengertian');
// });

// Route::get('/sejarah', function () {
//     return view('dropdown/sejarah');
// });

// Route::get('/ruanglingkup', function () {
//     return view('dropdown/ruanglingkup');
// });




// Tata Surya
Route::get('/tatasurya', function () {
    return view('tatasurya');
});

Route::get('/tatasuryadua', function () {
    return view('tatasuryadua');
});

Route::get('/tatasuryaori', function () {
    return view('tatasuryaori');
});




// Kak Astro

Route::get('/kakastro', function () {
    return view('kakastro/kakastro');
});

Route::get('/kakastro', [KakastroController::class, 'index'])->name('kakastros.index');

Route::get('/addkakastro', function () {
    return view('addkakastro');
});


Route::get('/kakastro/{kakastro}/edit', [kakastroController::class, 'edit'])->name('kakastros.edit');
Route::patch('/kakastro/{kakastro}', [kakastroController::class, 'update'])->name('kakastros.update');

Route::post('/sendkakastro', [KakastroController::class, 'store'])->name('kakastro.store');

Route::delete('/kakastros/{kakastro}', [KakastroController::class, 'destroy'])->name('kakastros.destroy');


// Glosarium

Route::get('/glosarium', function () {
    return view('glosarium/glosarium');
});

Route::get('/', [GlosariumController::class, 'glosarium'])->name('home');

Route::get('/glosarium', [GlosariumController::class, 'index'])->name('glosariums.index');

Route::post('/sendglosarium', [GlosariumController::class, 'store'])->name('glosarium.store');

Route::get('/addglosarium', function () {
    return view('addglosarium');
});



Route::get('/glosarium/{glosarium}/edit', [GlosariumController::class, 'edit'])->name('glosariums.edit');
Route::patch('/glosarium/{glosarium}', [GlosariumController::class, 'update'])->name('glosariums.update');

// Route::delete('/glosarium/{id}', [GlosariumController::class, 'destroy'])->name('glosarium.destroy');
// Route::delete('/glosarium/{id}', [GlosariumController::class, 'destroy'])->name('glosarium.destroy');
// Route::delete('/glosarium/{id}', [GlosariumController::class, 'destroy']);

Route::delete('/glosariums/{glosarium}', [GlosariumController::class, 'destroy'])->name('glosariums.destroy');


// Route::get('/glosarium/asteroid', function () {
//     return view('glosarium/asteroid');
// });
