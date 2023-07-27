<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Auth;
use App\Models\User;

class SocialAuthController extends Controller
{
    public function auth_redirect(){
        return Socialite::driver('google')->redirect();
    }

    public function auth_callback(){
        try {
            $socialUser = Socialite::driver('google')->user();
            $user = User::where('google_id', $socialUser->id)->first();
            if (!$user) {
                $createUser = User::create([
                    'name' => $socialUser->name,
                    'email' => $socialUser->email,
                    'google_id' => $socialUser->id,
                    'password' => encrypt('123456')
                ]);

                $response = [
                    'status' => TRUE,
                    'message' => 'تم تسجيل الدخول بنجاح',
                    'name' => $socialUser->name,
                    'email' => $socialUser->email,
                    'google_id' => $socialUser->id,
                    
                ];
        
                return response($response, 201);
            }

        } catch (Exception $exception) {
            dd($exception->getMessage());
        }
    }
    
}
