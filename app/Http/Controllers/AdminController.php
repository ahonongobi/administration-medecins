<?php

namespace App\Http\Controllers;

use App\Mail\sendToUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin-dash.index');
    }
    public function indexAfterLogin()
    {
        return view('user-dash.choose');
    }
    public function indexUser()
    {
        return view('user-dash.index');
    }
    //function to store to databse the new user
    public function adduser(Request $request)
    {
        //
        //send data to utilisateur table based on model
        $user = new \App\Models\Utilisateur();
        $user->email = $request->input("email");
        //$user->password = Hash::make($request->input("password"));
        $user->nom = $request->input("name");
        $user->prenom = $request->input("surname");
        $user->date_naissance = $request->input("birthdate");
        $user->tel = $request->input("phone");
        $user->addresse = $request->input("addresse");
        $user->programmes = $request->input("programmes");
        $user->save();
        // verify if user mail already exist in database table user
        $user = \App\Models\Utilisateur::where("email",$request->input("email"))->first();
        if($user != null)
        {
            DB::table('users')->insert([
                'name' => $request->input("name"),
                'email' => $request->input("email"),
                'password' => Hash::make($request->input("password")),
                'is_admin' => 0,
            ]);
        }
        else{
            //
        }

        //message to user with his email and password

        $message = "Votre compte a bien été créé, vous pouvez vous connecter avec vos identifiants : ";
        $message .= "Email : " . $request->input("email") . " Password : " . $request->input("password");
        $name = $request->input("name");
        $email = $request->input("email");
        $mailable = new sendToUser($name,$email,$message);
        Mail::to($email)->send($mailable);

        return back()->with("success","Utilisateur ajouté avec succès");


    }
    //function to delete user from database
    public function deleteuser($id)
    {
        //


        // eloquent select utilisateur email where id = $id
        $email = \App\Models\Utilisateur::find($id)->email;
        //dd($email);
        // delete user from users table where email = $email
        \App\Models\User::where('email',$email)->delete();
        \App\Models\Utilisateur::find($id)->delete();


        return back()->with("success","Utilisateur supprimé avec succès");
    }

    //edit user
    public function edituser($id)
    {
        //
        $user = \App\Models\Utilisateur::find($id);
        return view('admin-dash.edit',compact('user'));
    }
    // function to update utilisateur in database
    public function updateuser(Request $request,$id)
    {

        // send data to utilisateur table based on model
        $user = \App\Models\Utilisateur::find($id);
        $user->email = $request->input("email");
        $user->nom = $request->input("name");
        $user->prenom = $request->input("surname");
        $user->date_naissance = $request->input("birthdate");
        $user->tel = $request->input("phone");
        $user->addresse = $request->input("addresse");
        $user->programmes = $request->input("programmes");
        $user->save();
        return back()->with("success","Utilisateur modifié avec succès");
    }

    //programmes
    public function programmes()
    {
        //
        $programmes = \App\Models\Programmes::all();
        return view('admin-dash.programmes',compact('programmes'));
    }

    //function to add programmes to database
    public function addprogrammes(Request $request)
    {
        //
        $programme = new \App\Models\Programmes();
        $programme->user_id = Auth::user()->id;
        $programme->title = $request->input("programmes");
        $programme->description = "ras";
        $programme->save();
        return back()->with("success","Programme ajouté avec succès");
    }
   //delete programme
    public function  deleteprogrammes($id)
    {
        //
        $programme = \App\Models\Programmes::find($id);
        $programme->delete();
        return back()->with("success","Programme supprimé avec succès");
    }

}
