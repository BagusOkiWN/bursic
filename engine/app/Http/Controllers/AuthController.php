<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Http\Controllers\HomeController;

class AuthController extends Controller
{   
    public function register(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',

        ]);
        // Validasi dll
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->route('home');
    }
    
    public function login(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Sukses login
            return redirect()->route('home');
        } else {
            // Gagal login
            return back()->with('error', 'Email atau Password salah');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
