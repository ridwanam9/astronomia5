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
            
        ]);

        Kakastro::create($validatedData);

        return redirect('/')->with('success', 'Data Tanya berhasil disimpan!');
    }

    public function index()
    {
        // Ambil semua data dari tabel 
        $kakastros = Kakastro::all();
        
        // Kirim data ke view 
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
