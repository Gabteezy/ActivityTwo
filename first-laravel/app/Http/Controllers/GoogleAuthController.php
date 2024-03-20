<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;


class GoogleAuthController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callbackGoogle()
{ 
    try {
        $google_user = Socialite::driver('google')->user();

        $user = User::where('google_id', $google_user->getId())->first();

        if (!$user) {
            // User doesn't exist, check if email already exists
            $user = User::where('email', $google_user->getEmail())->first();
            if (!$user) {
                // Create a new user
                $user = User::create([
                    'name' => $google_user->getName(),
                    'email' => $google_user->getEmail(),
                    'google_id' => $google_user->getId(),
                ]);
            } else {
            }
        }

        Auth::login($user);


        Cookie::queue('auth_token', 'your_auth_token_value', 60); 

        return redirect()->intended('home');

    } catch (\Throwable $th) {
        // Handle exceptions
        dd('Something went Wrong! ' . $th->getMessage());
    }
}

}
