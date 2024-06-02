<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Glosarium;

class GlosariumController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'gambar' => 'required',
            'body' => 'required',
            
        ]);

        glosarium::create($validatedData);

        return redirect('/')->with('success', 'Data Tanya berhasil disimpan!');
    }

    public function index()
    {
        

        // Ambil semua data dari tabel 
        $glosariums = Glosarium::all();
        
        // Kirim data ke view 
        return view('glosarium/glosarium', compact('glosariums'));
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