<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tanya;


class TanyaController extends Controller
{
    //
    public function index(Request $request)
    {
        // Ambil semua data dari tabel tanyas
        // $tanyas = Tanya::all();

        // $tanyas = Tanya::with('user')->get();


        $search = $request->input('search');

        // Simpan nilai pencarian terakhir di sesi
        session(['last_search' => $search]);

        // Ambil data glosarium berdasarkan pencarian
        $tanyas = Tanya::with('user')->where('judul', 'like', '%'.$search.'%')
        ->orWhereHas('user', function ($q) use ($search) {
            $q->where('name', 'LIKE', '%' . $search . '%');
        })->get();
        
        // Kirim data ke view post.blade.php
        return view('listpertanyaan', compact('tanyas'));
    }

    //function untuk menampilkan pertanyaan setiap user
    public function indexperuser()
    {
        // Ambil semua data dari tabel tanyas
        // $tanyas = Tanya::all();

        $tanyas = Tanya::where('user_id', auth()->user()->id)->get();
        
        // Kirim data ke view post.blade.php
        return view('user.daftartanya', compact('tanyas'));
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

        return redirect('/')->with('success', 'Pertanyaan Anda berhasil disimpan.');
    }

    public function edit(Tanya $tanya)
    {
        
        return view('tanya.edit', compact('tanya'));
       
    }

    public function update(Request $request, Tanya $tanya)
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

        $tanya->update([
            'judul' => ucfirst($request->judul),
            'user_id' => auth()->user()->id,
            // 'category_id' => $request->category_id
        ]);

        return redirect()->route('tanya.indexperuser')->with('success', 'Pertanyaan Anda berhasil diubah.');
    }

    public function destroy(Tanya $tanya)
    {
        $tanya->delete();
        return redirect()->back()->with('success', 'Tanya berhasil dihapus.');
    }

    
}
