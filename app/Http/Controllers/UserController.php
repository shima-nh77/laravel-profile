<?php

namespace App\Http\Controllers;

use App\Mail\OtpMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    public function index()
    {
        return view('test_login.index');
    }

    public function sendMail(Request  $request)
    {
        $otp =random_int(111111,999999);
        $request->validate([
            'email'=>['required']
        ]);

        $user = User::all()->where('email',$request->email)->first();

        if ($user){
            $user->query()->update([
                'password'=>bcrypt($otp)
            ]);
        }else{
            $user= User::query()->create([
                'email'=>$request->get('email'),
                'password'=>bcrypt($otp)
            ]);
        }
       /* $user = User::query()->where('email',$request->email);
        dd($user);
        if ($user->exists()){
            dd('hi');
        }*/


        Mail::to($user->email)->send(new OtpMail($otp));

        return redirect(route('register.sendOtp',$user));
    }

    public function sendOtp(User $user)
    {
        return view('test_login.sendOtp',[
            'user'=>$user
        ]);

       /* return view('test_login.sendOtp',[

        ]);*/
    }

    public function verify(Request $request,User $user)
    {
        //dd(Hash::info($user->password));
        if (!Hash::check($request->get('otp'),$user->password)){
            return 'no';
    }
        auth()->login($user);
        return redirect(route('profile',$user));
    }
}
