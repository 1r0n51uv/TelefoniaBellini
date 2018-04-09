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
            self::updateSocialUser($EXTuser, $provider, $user); 
            return $EXTuser; 
        } else { 
            $NEWuser = self::storeUser($user, $provider); 
            return $NEWuser; 
        } 
    } 
 
    private static function storeUser($user, $provider) { 
        $dbUser = new User; 
         
        switch($provider) { 
            case 'google': 
                 
                $dbUser['name'] = $user['name']['givenName']; 
                $dbUser['surname'] = $user['name']['familyName']; 
                $dbUser['email'] = $user->getEmail(); 
                $dbUser['password'] = "pelo"; 
                $dbUser['g_id'] = $user->getId(); 
                $dbUser['g_pic'] = "https://pikmail.herokuapp.com/" . $user->getId() . "?size=1024"; 
                break; 
            case 'facebook': 
                $dbUser['name'] = $user['first_name']; 
                $dbUser['surname'] = $user['last_name']; 
                $dbUser['email'] = $user->getEmail(); 
                $dbUser['password'] = "pelo"; 
                $dbUser['fb_id'] = $user->getId(); 
                $dbUser['fb_pic'] = "https://graph.facebook.com/" . $user->getId() ."/picture?width=9999"; 
                break; 
            } 
             
            $dbUser->save(); 
            return $dbUser; 
                 
        } 
 
        private static function updateSocialUser($EXTuser, $provider, $toadd) { 
            if($provider == 'google') { 
                $EXTuser['g_id'] = $toadd->getId(); 
                $EXTuser['g_pic'] = "https://pikmail.herokuapp.com/" . $toadd->getId() . "?size=1024"; 
                $EXTuser->save(); 
            } else if($provider == 'facebook') { 
                $EXTuser['fb_id'] = $toadd->getId(); 
                $EXTuser['fb_pic'] = "https://graph.facebook.com/" . $toadd->getId() ."/picture?width=9999"; 
                $EXTuser->save(); 
            } else { 
                echo "non va"; 
            } 
 
        } 
 
       
   
 
 
    
    
    
    } 
