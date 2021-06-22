<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function loginFacebook ()
    {
        return Socialite::with('facebook')->redirect();
    }

    public function responseFacebook ()
    {
        $user = Socialite::driver('facebook')->redirect();
        dump($user);
    }

    public function loginVK ()
    {
        session()->get('soc.token');
        if (Auth::id()) {
            return redirect()->route('welcome');
        }
        return Socialite::with('vkontakte')->redirect();
    }

    public function responseVK (UserRepository $userRepository)
    {
        if (Auth::id()) {
            return redirect()->route('welcome');
        }
        $user = Socialite::driver('vkontakte')->user();
        session(['soc.token' => $user->token]);
        $userInSystem = $userRepository->getUserBySocId($user, 'vk');
        Auth::login($userInSystem);

        return redirect()->route('welcome');
    }
}
