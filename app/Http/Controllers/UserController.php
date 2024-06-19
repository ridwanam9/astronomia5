<?php

namespace App\Http\Controllers;

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
