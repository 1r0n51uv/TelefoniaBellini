<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Socialite;

class SocialUserController extends Controller
{
    

    public static function checkAndInsert($user, $provider) {
        if(User::whereEmail($user->getEmail())->first() != null) {
            $EXTuser = User::whereEmail($user->getEmail())->first();
            return $EXTuser;
        } else {
            $NEWuser = self::storeUser($user, $provider);
            return $NEWuser;
        }
    }

    private static function storeUser($user, $provider) {
        echo "inserting";
        $dbUser = new User;
        $dbUser['name'] = $user['first_name'];
        $dbUser['surname'] = $user['last_name'];
        $dbUser['email'] = $user->getEmail();
        $dbUser['password'] = "pelo";
        switch($provider) {
            case 'google':
                $dbUser['g_id'] = $user->getId();
                $dbUser['g_pic'] = $user->getAvatar();
                break;
            case 'facebook':
                $dbUser['fb_id'] = $user->getId();
                $dbUser['fb_pic'] = "https://graph.facebook.com/" . $user->getId() ."/picture?width=9999";
                break;
            }

            $dbUser->save();
            return $dbUser;
                
        }
  

}
