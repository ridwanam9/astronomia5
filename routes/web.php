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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
});

Route::get('/tanya', function () {
    return view('tanya');
});

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
