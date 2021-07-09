<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(User $user)
    {
       /* $user = User::query()->where('id',$user)->first();*/
        return view('profile',[
            'user'=>$user
        ]);
    }

    public function update(Request $request,User $user)
    {

        $birthdate = $request->birthyear . '-' . $request->birthmonth . '-' . $request->birthday;

        $user->update([
            'name'=>$request->name,
            'last_Name'=>$request->lastName,
            'email'=>$request->email,
            'gender'=>$request->gender,
            'sheba'=>$request->sheba,
            'BirthYear'=>$request->birthyear,
            'BirthMonth'=>$request->birthmonth,
            'BirthDay'=>$request->birthday,
            'birthDate'=>$birthdate,
            'khabar'=>$request->khabar,
            'pish'=>$request->pish,
            'mobile'=>$request->phone
        ]);
        return redirect(route('profile',$user));
    }
}
