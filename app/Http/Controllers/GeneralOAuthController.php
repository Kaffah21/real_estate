<?php

namespace App\Http\Controllers;

use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class GeneralOAuthController extends Controller
{
    public function redirectToProvider()
    {
        return Socialite::driver('general_oauth_flow')->redirect();
    }

    public function handleProviderCallback()
    {
        $user = Socialite::driver('general_oauth_flow')->stateless()->user();

        $existingUser = User::where('email', $user->getEmail())->first();

        if ($existingUser) {
            Auth::login($existingUser);
        } else {
            $newUser = User::create([
                'name' => $user->getName(),
                'email' => $user->getEmail(),
                'provider_id' => $user->getId(),
                'avatar' => $user->getAvatar(),
            ]);

            Auth::login($newUser);
        }

        return redirect('/dashboard');
    }
}
