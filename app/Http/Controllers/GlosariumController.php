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

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'gambar' => 'required',
            'body' => 'required',
            'published_at' => 'required',
        ]);

        $image = $request->file('gambar');
        $imgName = time() . rand() . '.' . $image->extension();
        $destinationPath = public_path('/images');
        $image->move($destinationPath, $imgName);
        $uploaded = $imgName;

        Glosarium::create([
            'title'=> $request->title,
            'gambar'=> $uploaded,
            'body'=> $request->body,
            'published_at'=> $request->published_at,
        ]);

        return redirect('/glosarium')->with('success', 'Data Glosarium berhasil disimpan!');
    }
}
