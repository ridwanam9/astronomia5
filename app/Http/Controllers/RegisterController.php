<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
       
        return view('register.index',[

            'title'=>'Register'
        ]);
    }

    public function store(Request $request){

        // return $request -> all();
        
        $validatedData = $request -> validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'handphone' => ['required', 'regex:/^(\+62|62|0)8[0-9][0-9]{6,10}$/'],
            'password' => 'required|min:8|max:255'
        ], [
            'name.required' => 'Nama lengkap wajib diisi.',
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Email tidak valid.',
            'handphone.required' => 'Nomor handphone wajib diisi.',
            'handphone.regex' => 'Format nomor handphone tidak valid.',
            'password.required' => 'Password wajib diisi.',
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        // dd('Register Berhasil');
        User::create($validatedData);

        return redirect('/login')->with('success', 'Data berhasil disimpan!');
    }
}
