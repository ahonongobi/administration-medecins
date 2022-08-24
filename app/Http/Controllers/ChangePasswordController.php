<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class ChangePasswordController extends Controller
{
    public function index(){
        return view('user-dash.password');
    }

    //changepassword
    public function changepassword(Request $request){
        $v = Validator::make($request->all(),[
            "oldpassword" => "required",
            "newpassword" =>  "required",
            "confirmpassword" =>  "required",
        ]);
        if ($v->fails())
            {
                return back()->withErrors($v);
            }
        else if($request->input("newpassword") != $request->input("confirmpassword")){
            return back()->withErrors(["fail"=>"Les mots de passe ne correspondent pas"]);
        }
        else{
            $user = Auth::user();
            if(Hash::check($request->input("oldpassword"), $user->password)){
                $user->password = Hash::make($request->input("newpassword"));
                $user->save();
                return redirect()->back()->with('success','Votre mot de passe a été changé avec succès.');
            }
            else{
                return back()->withErrors(["fail"=>"Ancien mot de passe incorrect"]);
            }
        }
    }
}
