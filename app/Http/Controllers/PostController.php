<?php

namespace App\Http\Controllers;

use App\Models\Tanya;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        // Ambil semua data dari tabel tanyas
        $tanyas = Tanya::all();
        
        // Kirim data ke view post.blade.php
        return view('post', compact('tanyas'));
    }
}
