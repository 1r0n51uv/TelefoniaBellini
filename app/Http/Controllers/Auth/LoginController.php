<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Socialite;
use Notification;
use App\Http\Controllers\SocialUserController;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
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
    protected $redirectTo = '/profile';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function redirectToProvider($provider)
    {

        switch($provider) {
            case 'google':
                return Socialite::driver('google')->redirect();
                break;
            case 'facebook':
                return Socialite::driver('facebook')->redirect();
                break;
        }

        
    }

    
    public function handleProviderCallback($provider)
    {    
        $user = SocialUserController::checkAndInsert($this->chooseProvider($provider), $provider);

        

        Auth::login($user);

        Notification::add('success', '', 'Ciao, ' . $user->name);

        return view('components.loginTransition');
        
        
    }


    public function chooseProvider($the_provider) {

        if ($the_provider == 'google') {
            $user = Socialite::driver($the_provider)->stateless()->user();
        } else {
            $user = Socialite::driver($the_provider)->fields(['first_name', 'last_name', 'email', 'gender'])->user();
        }

        return $user;

    }

    public function login(Request $request) {

        $input = $request->all();

        if((User::whereEmail($input['email'])->first() != null)) {

            $user = User::whereEmail($input['email'])->first();

            if (Hash::check($input['password'], $user->password)) {

                if ($user->admin == 1) {
                    Auth::login($user);
                    return redirect()->action('AdminController@adminHome');
                } else {
                    Auth::login($user);
                    return view('components.loginTransition');
                }

            } else {
                Notification::add('error', '', 'Password errata');
                return redirect('/login');
            }


        } else {

            Notification::add('error', '', 'Email errata');
            return redirect('/login');
        }

    }


}
