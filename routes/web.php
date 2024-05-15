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


// Tata Surya
Route::get('/tatasurya', function () {
    return view('tatasurya');
});

Route::get('/tatasurya2', function () {
    return view('tatasurya2');
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
