<?php

namespace App\Http\Controllers;

use App\Models\Membres;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public  function profile(){
        $yourventaplus = Membres::where('user_id',Auth::user()->id)->where('programmes','VentaPlus')->count() ?? 0;
        $youroncoplus = Membres::where('user_id',Auth::user()->id)->where('programmes','OncoPlus')->count() ?? 0;

        $yourBetanurse = Membres::where('user_id',Auth::user()->id)->where('programmes','BetaNurse')->count() ?? 0;


        return view('user-dash.profile',compact('yourventaplus','youroncoplus','yourBetanurse'));
    }

    public function upload(Request $request){
        $request->validate([
            'file' => 'required|mimes:png,jpg,jpeg|max:2048',
        ]);
        $file = $request->file('file');
        $name = time().'.'.$file->getClientOriginalExtension();
        $destinationPath = public_path('/uploads');
        $file->move($destinationPath, $name);
        $fichier = \App\Models\User::where('id',Auth::user()->id)->first();
        //$fichier->id_user = Auth::user()->id;
        //$fichier->nom_fichier = $request->nom_fichier ?? $file->getClientOriginalName();
        //$fichier->date_fichier = $request->date_fichier;
        $fichier->photo = $name;
        if($fichier->update()){
            return back()->with('success','Photo ajouté avec succès');
        } else {
            return back()->with('error','Erreur lors de l\'ajout du fichier');
        }

    }
}
