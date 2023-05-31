<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;

class LoginController extends Controller
{

    public function login()
    {
        if (Auth::user()) {
            return redirect('dashboard');
        } else {
            return view("user.login");
        }
    }


    public function loginStore(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];


        if (Auth::attempt($credentials)) {
            return redirect()->intended('/');
        } else {
            return back()->withErrors(['email' => "les informations d'identification invalides"]);
        }
    }

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        $user = Socialite::driver('google')->user();

        // Logic to handle the authenticated user

        // Example: Create a new user or authenticate an existing one
        $existingUser = User::where('email', $user->getEmail())->first();
        if ($existingUser) {
            auth()->login($existingUser);
        } else {
            $newUser = User::create([
                'first_name' => $user->user['given_name'],
                'last_name' => $user->user['family_name'],
                'avatar' => $user->getAvatar(),
                'email' => $user->getEmail(),
                'password' => Hash::make(Str::random(16)),
            ]);
            Cart::create(['user_id' => $newUser->id, 'total' => 0 ]);
            auth()->login($newUser);
        }

        // Redirect to a specific page after successful authentication
        return redirect()->route('home');
    }



    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
