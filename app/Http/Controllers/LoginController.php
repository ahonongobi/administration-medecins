<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $v = Validator::make($request->all(),[
            "username" => "required",
            "password" =>  "required",
        ]);
        if ($v->fails())
            {
                return back()->withErrors($v);
            }
        else if(Auth::attempt([
            "email"=>$request->input("username"),
            "password"=>$request->input("password"),
            ]) AND Auth::user()->is_admin == 1)
        {
            return redirect(route('admin'));
        }
        else if(Auth::attempt([
                "email"=>$request->input("username"),
                "password"=>$request->input("password"),
            ]) AND Auth::user()->is_admin == 0)
        {
            return redirect(route('indexAfterLogin'));
        }
        else{
            return back()->withErrors(["fail"=>"Identifiants Incorrects"]);
            //
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect("/");
    }
}
