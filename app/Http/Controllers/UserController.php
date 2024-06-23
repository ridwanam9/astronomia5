<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    public function index(Request $request)
    {
        
        

        // Ambil semua data dari tabel 
        // $users = User::all()->where('id', '!=', '1')->sortBy('id');

        $search = $request->input('search');

        // Simpan nilai pencarian terakhir di sesi
        session(['last_search' => $search]);

        $users = User::where('id', '!=', 1)
            ->when($search, function ($query, $search) {
                return $query->where(function ($query) use ($search) {
                    $query->where('name', 'LIKE', "%{$search}%")
                          ->orWhere('email', 'LIKE', "%{$search}%")
                          ->orWhere('handphone', 'LIKE', "%{$search}%");
                });
            })
            ->orderBy('id')
            ->get();

        return view('user.index', compact('users'));
    }
    public function profile()
    {
        
        
        // $user = User::where('id', auth()->user()->id);
        $user = Auth::user();

        return view('user.profile', compact('user'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $user->id,
            'handphone' => 'required|string|max:15',
            'password' => 'nullable|string|min:8|confirmed',
        ], [
            'name.required' => 'Nama wajib diisi.',
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Email tidak valid.',
            'handphone.required' => 'Nomor handphone wajib diisi.',
            'handphone.regex' => 'Format nomor handphone tidak valid.',
            'password.required' => 'Password wajib diisi.',
        ]);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->handphone = $request->handphone;
        
        if ($request->password) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return redirect()->route('user.profile')->with('success', 'Profile updated successfully.');
    }

    public function destroy(User $user)
    {
        if ($user->id != 1) {
            $user->delete();
            return back()->with('success', 'Delete user successfully!');
        } else {
            return redirect()->route('user.index')->with('danger', 'Delete user failed!');
        }
    }
}
