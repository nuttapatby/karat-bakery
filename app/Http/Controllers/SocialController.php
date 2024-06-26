<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Laravel\Socialite\Facades\Socialite;
use Exception;
use Illuminate\Support\Facades\Validator;

class SocialController extends Controller
{
//    Facebook Login
    public function facebookRedirect()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function loginWithFacebook()
    {
        try {

            $facebook_user = Socialite::driver('facebook')->user();
            $user = User::where('fb_id', $facebook_user->getId())->first();

            $splitName = explode(" ",$facebook_user->name);
            $firstname = $splitName[0];
            $lastname = $splitName[1];

            if(!$user){
                $createUser = User::create([
                    'firstname' => $firstname,
                    'lastname' => $lastname,
                    'email' => $facebook_user->email,
                    'fb_id' => $facebook_user->id,
                    'password' => bcrypt('')
                ]);
                Auth::login($createUser);
                return redirect()->intended('/');
            }else{

                Auth::login($user);
                return redirect()->intended('/');
            }

        } catch (Exception $exception) {
            dd($exception->getMessage());
        }
    }

//  Google Login
    public function googleRedirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function loginWithGoogle()
    {
        try {

            $google_user = Socialite::driver('google')->user();
            $user = User::where('google_id', $google_user->getId())->first();

            $splitName = explode(" ",$google_user->name);
            $firstname = $splitName[0];
            $lastname = $splitName[1];

            if(!$user){
                $createUser = User::create([
                    'firstname' => $firstname,
                    'lastname' => $lastname,
                    'email' => $google_user->getEmail(),
                    'google_id' => $google_user->getId(),
                    'password' => bcrypt('')
                ]);
                Auth::login($createUser);
                return redirect()->intended('/');
            }else{

                Auth::login($user);
                return redirect()->intended('/');
            }

        } catch (Exception $exception) {
            dd($exception->getMessage());
        }
    }

}
