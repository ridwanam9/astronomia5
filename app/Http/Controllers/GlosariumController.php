<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Glosarium;

class GlosariumController extends Controller
{
    //
    // public function index()
    // {
    //     // Ambil semua data dari tabel tanyas
    //     $glosariums = Glosarium::all();
        
    //     // Kirim data ke view post.blade.php
    //     return view('Glosarium/glosarium', compact('glosariums'));
    // }

    // public function store(Request $request)
    // {
    //     $validatedData = $request->validate([
    //         'title' => 'required',
    //         'gambar' => 'required',
    //         'body' => 'required',
    //         'published_at' => 'required',
    //     ]);

    //     $image = $request->file('gambar');
    //     $imgName = time() . rand() . '.' . $image->extension();
    //     $destinationPath = public_path('/images');
    //     $image->move($destinationPath, $imgName);
    //     $uploaded = $imgName;

    //     Glosarium::create([
    //         'title'=> $request->title,
    //         'gambar'=> $uploaded,
    //         'body'=> $request->body,
    //         'published_at'=> $request->published_at,
    //     ]);

    //     return redirect('/glosarium')->with('success', 'Data Glosarium berhasil disimpan!');
    // }


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

    // public function destroy(Glosarium $glosarium)
    // {
    //     Glosarium::destroy($glosarium->id);
    //     // $glosarium->delete();

    //     return redirect('glosarium/glosarium');
    // }

//     public function destroy($id)
// {
//     $glosarium = Glosarium::find($id);

//     if ($glosarium) {
//         $glosarium->delete();
//         return response()->json(['success' => true]);
//     }

//     return response()->json(['success' => false], 404);
// }

public function destroy(Glosarium $glosarium)
{
    $glosarium->delete();
    return redirect()->route('glosariums.index')->with('success', 'Glosarium berhasil dihapus.');
}

}