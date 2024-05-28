<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TanyaController;
use App\Http\Controllers\RegisterController;

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
Route::get('/login', [LoginController::class, 'index']);

//register
Route::get('/register', [RegisterController::class, 'index']);


//Tanya

Route::get('/tanya', function () {
    return view('tanya');
});

Route::post('/sendtanya', [TanyaController::class, 'store'])->name('tanya.store');

//menampilkan data dari tabel tanya ke dalam post.blade.php
Route::get('/posts', [PostController::class, 'index']);








// Dropdown Menu
Route::get('/pengertian', function () {
    return view('dropdown/pengertian');
});

Route::get('/sejarah', function () {
    return view('dropdown/sejarah');
});

Route::get('/ruanglingkup', function () {
    return view('dropdown/ruanglingkup');
});




// Tata Surya
Route::get('/tatasurya', function () {
    return view('tatasurya');
});




// Kak Astro

Route::get('/kakastro', function () {
    return view('kakastro/kakastro');
});




// Glosarium

Route::get('/glosarium', function () {
    return view('glosarium/glosarium');
});

Route::get('/glosarium/bintang', function () {
    return view('glosarium/bintang');
});

Route::get('/glosarium/asteroid', function () {
    return view('glosarium/asteroid');
});
