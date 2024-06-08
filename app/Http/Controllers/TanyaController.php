<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tanya;


class TanyaController extends Controller
{
    //
    public function index()
    {
        // Ambil semua data dari tabel tanyas
        $tanyas = Tanya::all();
        
        // Kirim data ke view post.blade.php
        return view('listpertanyaan', compact('tanyas'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'email' => 'required|email|unique:tanyas',
            'handphone' => 'required',
            'judul' => 'required',
        ]);

        Tanya::create($validatedData);

        return redirect('/')->with('success', 'Pertanyaan Anda berhasil disimpan. Untuk daftar pertanyaannya hanya bisa dilihat oleh Admin.');
    }

    public function destroy(Tanya $tanya)
    {
        $tanya->delete();
        return redirect()->back()->with('success', 'Tanya berhasil dihapus.');
    }

    
}
