<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Trez\RayganSms\Facades\RayganSms;

class LoginMobileController extends Controller
{
    public function index()
    {
        return view('test_login.mobile');
    }

    public function sendSms(Request $request)
    {
        $otp =random_int(1111,9999);
        $request->validate([
            'mobile'=>['required']
      ]);


        $user = User ::all()->where('mobile',$request->mobile)->first();

        if ($user){
            $user->query()->update([
                'password'=>bcrypt($otp)
            ]);
        }else{
            $user= User:: query() ->create([
                'mobile'=>$request->get('mobile'),
                'password'=>bcrypt($otp)
            ]);
        }

        RayganSms::sendMessage($request->mobile,"کد ورود شما: $otp");
        return redirect(route('login.sendOtp',$user));

    }


    public function sendOtp(User $user)
    {
        return view('test_login.sendOtpMobile',[
            'user'=>$user
        ]);

    }

    public function verify(Request $request,User $user)
    {

        if (!Hash::check($request->get('otp'),$user->password)){
            return 'no';
        }
        auth()->login($user);
        return redirect(route('profile',$user));
    }


}
