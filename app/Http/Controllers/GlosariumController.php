<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Glosarium;
use App\Models\Kakastro;

class GlosariumController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'gambar' => 'required',
            'body' => 'required',
            
        ], [
            'title.required' => 'Judul wajib diisi.',
            'gambar.required' => 'Gambar wajib diunggah.',
            'body.required' => 'Konten wajib diisi.',
        ]);

        glosarium::create($validatedData);

        return redirect('/')->with('success', 'Glosarium berhasil disimpan!');
    }

    public function index(Request $request)
    {
        
        // dd(request('search'));

        // Ambil semua data dari tabel 
        // $glosariums = Glosarium::all();
        
        // Kirim data ke view 
        // return view('glosarium/glosarium', compact('glosariums'));

        $search = $request->input('search');

        // Simpan nilai pencarian terakhir di sesi
        session(['last_search' => $search]);

        // Ambil data glosarium berdasarkan pencarian
        $glosariums = Glosarium::where('title', 'like', '%'.$search.'%')
                                ->orWhere('body', 'like', '%'.$search.'%')
                                ->get();

        return view('glosarium/glosarium', compact('glosariums'));
    }


    public function glosarium()
    {
        $glosariums = Glosarium::latest()->get(); // Jika Anda menggunakan controller yang sama
        $kakastros = Kakastro::latest()->get();
    return view('home', compact('glosariums', 'kakastros'));
    }

    public function edit(Glosarium $glosarium)
    {
        
        return view('glosarium.updateglosarium', compact('glosarium'));
       
    }

    public function update(Request $request, Glosarium $glosarium)
    {
        $request->validate([
            'title' => 'required|max:255',
            'gambar' => 'required',
            'body' => 'required',
        ], [
            'title.required' => 'Judul wajib diisi.',
            'title.max' => 'Judul tidak boleh lebih dari 255 karakter.',
            'gambar.required' => 'Gambar wajib diunggah.',
            'body.required' => 'Konten wajib diisi.',
        ]);

        // Practical
        // $todo->title = $request->title;
        // $todo->save();

        // Eloquent Way - Readable
        $glosarium->update([
            'title' => ucfirst($request->title),
            'gambar' => $request->gambar,
            'body' => $request->body,
            
        ]);
        return redirect()->route('glosariums.index')->with('success', 'Glosarium updated successfully!');
    }

    public function destroy(Glosarium $glosarium)
    {
        $glosarium->delete();
        return redirect()->route('glosariums.index')->with('success', 'Glosarium berhasil dihapus.');
    }

}