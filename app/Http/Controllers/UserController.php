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
        $users = User::all()->where('id', '!=', '1')->sortBy('id');

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
