<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kakastro;
use App\Models\Tanya;

class KakastroController extends Controller
{
    //
    //
    public function create()
    {
        // $tanyas = Tanya::all();

        // // Ambil semua judul yang sudah digunakan di Kakastro
        // $usedTitles = Kakastro::pluck('title')->toArray();

        // // Ambil tanyas yang judulnya belum digunakan di Kakastro
        // $tanyas = Tanya::whereNotIn('judul', $usedTitles)->get();

        // Ambil semua Tanya yang belum memiliki Kakastro
        $tanyas = Tanya::doesntHave('kakastro')->get();

        return view('addkakastro', compact('tanyas'));
    }

    public function store(Request $request, Kakastro $kakastro)
    {
        $validatedData = $request->validate([
            // 'title' => 'required',
            'gambar' => 'required',
            'body' => 'required',
            
        ], [
            // 'title.required' => 'Judul wajib diisi.',
            // 'title.max' => 'Judul tidak boleh lebih dari 255 karakter.',
            'gambar.required' => 'Gambar wajib diunggah.',
            'gambar.file' => 'Gambar harus berupa file.',
            'gambar.image' => 'Gambar harus berupa gambar.',
            'body.required' => 'Konten wajib diisi.',
        ]);

        // Tangkap input
        $tanyaId = $request->input('tanya_id');
        $gambar = $request->input('gambar');
        $body = $request->input('body');

        // Ambil data terkait dari tabel Tanya
        $tanya = Tanya::find($tanyaId);

        if (!$tanya) {
            return redirect()->back()->with('error', 'Tanya not found');
        }

        // Simpan data ke tabel Kakastro
        $kakastro = new Kakastro();
        $kakastro->tanya_id = $tanya->id;
        $kakastro->title = $tanya->judul;
        $kakastro->gambar = $gambar;
        $kakastro->body = $body;
        $kakastro->save();

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