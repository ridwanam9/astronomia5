<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Glosarium;

class GlosariumController extends Controller
{
    //
    public function index()
    {
        // Ambil semua data dari tabel tanyas
        $glosariums = Glosarium::all();
        
        // Kirim data ke view post.blade.php
        return view('Glosarium/glosarium', compact('glosariums'));
    }
}
