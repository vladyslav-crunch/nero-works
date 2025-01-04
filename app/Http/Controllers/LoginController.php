<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(): View{
        return view('auth.login');
    }

    public function authenticate(Request $request): RedirectResponse{
        $credentials = $request->validate([
            'email' => 'required|string|email|max:100',
            'password' => 'required|string',
        ]);
        if(Auth::attempt($credentials)){
            // Regenerate the session to prevent fixation attacks 
            $request->session()->regenerate();
            return redirect()->route('home')->with('success', 'You are now logged in!');     
        }

        return back()->withErrors(['email' => 'The provided credentials do not match our records'])->onlyInput('email');
       
    }
    // @route POS /logout
    public function logout(Request $request): RedirectResponse{
        Auth::logout();
        // Invalidated the session
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
