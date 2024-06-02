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

    public function destroy(Kakastro $kakastro)
{
    $kakastro->delete();
    return redirect()->route('kakastros.index')->with('success', 'Kakastro berhasil dihapus.');
}
}
