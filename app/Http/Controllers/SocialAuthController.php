<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite , Auth , Hash ; 
use App\User ;


class SocialAuthController extends Controller
{
     public function redirect(){
         return Socialite::driver('facebook')->redirect();
     } 

     public function callback(){
        $social = Socialite::driver('facebook')->stateless()->user();
        $password = $social->id ;
        $email = $social->email;
        $name = $social->name;
        $secret = Hash::make($password);

        if(!User::where('email',$email)->first()){
            $user = User::create([
                'email'=>$email,
                'name'=>$name,
                'password'=>$secret,
            ]);
            $user->save();
        }
        if(Auth::attempt(['name' => $name ,'password' => $password ])){
            return redirect()->to('/home');
        }
        return redirect()->to('/home');
     }
}
