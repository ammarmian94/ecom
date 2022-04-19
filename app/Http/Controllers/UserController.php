<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    function login(Request $request)
    {
        $user = User::where(['email'=>$request->email])->first();

        if(!$user || !Hash::check($request->password, $user->password))
        {
            return "Username or Password does not match";
        }
        else{
            $request->session()->put('user', $user);
            return redirect("/");
        }
    }
}
