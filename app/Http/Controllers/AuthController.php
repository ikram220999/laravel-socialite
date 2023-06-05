<?php

namespace App\Http\Controllers;

class AuthController extends Controller
{
    //

    public function github()
    {
        return Socialite::driver('github')->redirect();
    }
}
