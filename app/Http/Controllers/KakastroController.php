<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kakastro;

class KakastroController extends Controller
{
    //
    //
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'gambar' => 'required',
            'body' => 'required',
            
        ], [
            'title.required' => 'Judul wajib diisi.',
            'title.max' => 'Judul tidak boleh lebih dari 255 karakter.',
            'gambar.required' => 'Gambar wajib diunggah.',
            'gambar.file' => 'Gambar harus berupa file.',
            'gambar.image' => 'Gambar harus berupa gambar.',
            'body.required' => 'Konten wajib diisi.',
        ]);

        Kakastro::create($validatedData);

        return redirect('/')->with('success', 'Kakastro berhasil disimpan!');
    }

    public function index(Request $request)
    {
        
        // dd(request('search'));

        // Ambil semua data dari tabel 
        // $kakastros = kakastro::all();
        
        // Kirim data ke view 
        // return view('kakastro/kakastro', compact('kakastros'));

        $search = $request->input('search');

        // Simpan nilai pencarian terakhir di sesi
        session(['last_search' => $search]);

        // Ambil data kakastro berdasarkan pencarian
        $kakastros = Kakastro::where('title', 'like', '%'.$search.'%')
                                ->orWhere('body', 'like', '%'.$search.'%')
                                ->get();

        return view('kakastro/kakastro', compact('kakastros'));
    }

    public function edit(kakastro $kakastro)
    {
        
        return view('kakastro.updatekakastro', compact('kakastro'));
       
    }

    public function update(Request $request, kakastro $kakastro)
    {
        $request->validate([
            'title' => 'required|max:255',
            'gambar' => 'required',
            'body' => 'required',
        ], [
            'title.required' => 'Judul wajib diisi.',
            'title.max' => 'Judul tidak boleh lebih dari 255 karakter.',
            'gambar.required' => 'Gambar wajib diunggah.',
            'gambar.file' => 'Gambar harus berupa file.',
            'gambar.image' => 'Gambar harus berupa gambar.',
            'body.required' => 'Konten wajib diisi.',
        ]);

        // Practical
        // $todo->title = $request->title;
        // $todo->save();

        // Eloquent Way - Readable
        $kakastro->update([
            'title' => ucfirst($request->title),
            'gambar' => $request->gambar,
            'body' => $request->body,
            
        ]);
        return redirect()->route('kakastros.index')->with('success', 'kakastro updated successfully!');
    }

    public function destroy(Kakastro $kakastro)
{
    $kakastro->delete();
    return redirect()->route('kakastros.index')->with('success', 'Kakastro berhasil dihapus.');
}
}
