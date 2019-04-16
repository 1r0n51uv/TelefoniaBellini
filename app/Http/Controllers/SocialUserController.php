<?php 
 
namespace App\Http\Controllers; 
 
use Illuminate\Http\Request; 
use App\User; 
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Hash;
use Socialite;
use App\Http\Controllers\StripeController;
 
class SocialUserController extends Controller 
{ 
     
 
    public static function checkAndInsert($user, $provider) { 
        if(User::whereEmail($user->getEmail())->first() != null) { 
            $EXTuser = User::whereEmail($user->getEmail())->first(); 
            self::updateSocialUser($EXTuser, $provider, $user); 
            return $EXTuser; 
        } else { 
            $NEWuser = self::storeUser($user, $provider); 
            StripeController::createStripeAccount($NEWuser);
            return $NEWuser; 
        } 
    } 
 
    private static function storeUser($user, $provider) {

        $dbUser = new User; 

        $pass = str_random(8);


        switch($provider) { 
            case 'google':
                $NameArray = explode(' ',$user['name']);
                $First_name = $NameArray[0];
                $Last_name = $NameArray[1];

                $dbUser['name'] = $First_name;
                $dbUser['surname'] = $Last_name;
                $dbUser['email'] = $user->getEmail(); 
                $dbUser['password'] = Hash::make($pass);
                $dbUser['g_id'] = $user->getId(); 
                $dbUser['g_pic'] = $user->getAvatar();
                break; 
            case 'facebook': 
                $dbUser['name'] = $user['first_name']; 
                $dbUser['surname'] = $user['last_name']; 
                $dbUser['email'] = $user->getEmail(); 
                $dbUser['password'] = Hash::make($pass);
                $dbUser['fb_id'] = $user->getId(); 
                $dbUser['fb_pic'] = $user->getAvatar();
                break; 
            } 
             
            $dbUser->save();
            MailController::passCreation($user->getEmail(), $pass);
            return $dbUser; 
                 
        } 
 
        private static function updateSocialUser($EXTuser, $provider, $toadd) { 
            if($provider == 'google') { 
                $EXTuser['g_id'] = $toadd->getId(); 
                $EXTuser['g_pic'] = $toadd->getAvatar();
                $EXTuser->save(); 
            } else if($provider == 'facebook') { 
                $EXTuser['fb_id'] = $toadd->getId(); 
                $EXTuser['fb_pic'] = $toadd->getAvatar();
                $EXTuser->save(); 
            } else { 
                echo "non va"; 
            } 
 
        } 
 
       
   
 
 
    
    
    
    } 
