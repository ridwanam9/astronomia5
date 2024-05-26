<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tanya;


class TanyaController extends Controller
{
    //
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'email' => 'required|email|unique:tanyas',
            'handphone' => 'required',
            'judul' => 'required',
        ]);

        Tanya::create($validatedData);

        return redirect('/')->with('success', 'Data Tanya berhasil disimpan!');
    }
}
