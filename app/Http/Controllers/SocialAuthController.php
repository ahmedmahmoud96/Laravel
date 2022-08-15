<?php

namespace App\Http\Controllers;
use Laravel\Socialite\Facades\Socialite;

use Illuminate\Http\Request;

class SocialAuthController extends Controller
{
    public function facebookLogin(Request $request)
    {
        // توجيه المستخدم إلى فيس بوك إذا لم يكن لديه كود الدخول
        if( ! $request->has('code') )
            return Socialite::with('facebook')->redirect();

        // وإلا علينا التعرف على المستخدم وتسجيل دخوله إلى الموقع
        $oauthUser = Socialite::with('facebook')->user();
        $user =  $this->findOrCreateUser($oauthUser);
        Auth::login($user, true);
        return redirect('home');
    }
}
