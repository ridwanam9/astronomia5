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
        // $tanyas = Tanya::all();

        $tanyas = Tanya::with('user')->get();
        
        // Kirim data ke view post.blade.php
        return view('listpertanyaan', compact('tanyas'));
    }

    public function store(Request $request, Tanya $tanya)
    {
        $validatedData = $request->validate([
            // 'nama' => 'required',
            // 'email' => 'required|email',
            // // 'handphone' => 'required',
            // 'handphone' => ['required', 'regex:/^(\+62|62|0)8[0-9][0-9]{6,10}$/'],
            'judul' => 'required',
        ], [
            // 'nama.required' => 'Nama lengkap wajib diisi.',
            // 'email.required' => 'Email wajib diisi.',
            // 'email.email' => 'Email tidak valid.',
            // 'handphone.required' => 'Nomor handphone wajib diisi.',
            // 'handphone.regex' => 'Format nomor handphone tidak valid.',
            'judul.required' => 'Pertanyaan wajib diisi.',
        ]);

        // Tanya::create($validatedData);

        $tanya = Tanya::create([
            'judul' => ucfirst($request->judul),
            'user_id' => auth()->user()->id,
            // 'category_id' => $request->category_id
        ]);

        return redirect('/')->with('success', 'Pertanyaan Anda berhasil disimpan. Untuk daftar pertanyaannya hanya bisa dilihat oleh Admin.');
    }

    public function destroy(Tanya $tanya)
    {
        $tanya->delete();
        return redirect()->back()->with('success', 'Tanya berhasil dihapus.');
    }

    
}
