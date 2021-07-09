<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();

    }

    public function callback()
    {

        try {

            $userGoogle = Socialite::driver('google')->user();



//select*from tbl_users where()
            //fetch
            $user = User::query()->where('email',$userGoogle->email)->first();
            if (!$user){
                $user = User::query()->create([
                    'name'=>$userGoogle->name,
                    'email'=>$userGoogle->email,
                    'password'=>bcrypt(random_bytes(6))
                ]);
            }
            auth()->loginUsingId($user->id);
            return redirect(route('profile',$user));

        }catch (\Exception $exceptione){

            //show error

            return $exceptione;

    }

    }
}
