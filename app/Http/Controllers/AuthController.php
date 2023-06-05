<?php

namespace App\Http\Controllers;

use Socialite;

class AuthController extends Controller
{
    //

    public function github()
    {
        return Socialite::driver('github')->redirect();
    }

    public function github_redirect()
    {
        $user = Socialite::driver('github')->user();

        dd($user);
    }

    public function google()
    {
        return Socialite::driver('google')->redirect();
    }

    public function google_redirect()
    {
        $user = Socialite::driver('google')->user();

        dd($user);
    }
}
