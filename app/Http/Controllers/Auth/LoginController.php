<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller {
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider() {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback($provider) {
        $userSocial = Socialite::driver($provider)->stateless()->user();

        if (!$userSocial->getEmail()) {
            return redirect()->route('register')->withErrors('Cannot get your email address from social login.');
        }

        $users = User::where(['email' => $userSocial->getEmail()])->first();
        if ($users) {
            Auth::login($users);
            return redirect('/');
        }

        // If it's already exist
        if ($user = User::whereEmail($userSocial->getEmail())->first()) {
            Auth::login($user);
            return redirect()->route('home');
        }

        $user = User::create([
            'name' => $userSocial->getName(),
            'email' => $userSocial->getEmail(),
            'image' => $userSocial->getAvatar(),
            "{$provider}_id" => $userSocial->getId(),
            "password" => bcrypt(123456),
        ]);

        Auth::login($user);
        return redirect()->route('home');
    }
}
