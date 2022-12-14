<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VisiteController extends Controller
{
    public function index()
    {
        $data_visite = \App\Models\Visite::where('id_user',Auth::user()->id)->get();
        return view('user-dash.addvisite',compact('data_visite'));
    }

    public function addvisiteView($programmes)
    {  
         if($programmes=="all"){
            $membersinfo = \App\Models\Membres::where('user_id',Auth::user()->id)->get();

         }
         elseif($programmes=="BetaNurse"){
            $membersinfo = \App\Models\Membres::where('user_id',Auth::user()->id)->where('programmes','BetaNurse')->get();

         } elseif($programmes=="VentaPlus"){
            $membersinfo = \App\Models\Membres::where('user_id',Auth::user()->id)->where('programmes','VentaPlus')->get();

         } elseif($programmes=="OncoPlus"){
            $membersinfo = \App\Models\Membres::where('user_id',Auth::user()->id)->where('programmes','OncoPlus')->get();

         }
        return view('user-dash.formaddvisite',compact('membersinfo'));
    }

    public function saveVisite(Request $request)
    {
        $request->validate([
            
            'nom_prenom' => 'required',
            'date_visite' => 'required',
            'lieu_visite' => 'required',
            'dose' => 'required',
            'mail' => 'required',
        ]);

        $visite = new \App\Models\Visite;
        $visite->id_user = Auth::user()->id;
        $visite->programmes = $request->programmes;
        $visite->nom = $request->nom_prenom;
        $visite->prenom = $request->nom_prenom;
        $visite->type_visite = $request->lieu_visite;
        $visite->date_visite = $request->date_visite;
        $visite->lieu_visite = $request->lieu_visite;
        $visite->dose = $request->dose;

        // select from memebers table where email = $request->mail
        $membre = \App\Models\Membres::where('email',$request->mail)->first();
        $visite->membre_id = $membre->membre_id;
        $visite->save();
        return back()->with('success','Visite ajout??e avec succ??s');
    }

    public function saveVisiteFromProfile(Request $request)
    {
        $request->validate([
            
            //'nom_prenom' => 'required',
            'date_visite' => 'required',
            'lieu_visite' => 'required',
            'dose' => 'required',
            'type_visite' => 'required',
        ]);

        $visite = new \App\Models\Visite;
        $visite->id_user = Auth::user()->id;
        $visite->programmes = $request->programmes ?? "##";
        $visite->nom = $request->nom_prenom ??'##';
        $visite->prenom = $request->nom_prenom ??'##';
        $visite->type_visite = $request->lieu_visite;
        $visite->date_visite = $request->date_visite;
        $visite->lieu_visite = $request->lieu_visite;
        $visite->dose = $request->dose;

        // select from memebers table where email = $request->mail
        $membre = \App\Models\Membres::where('email',$request->email)->first();
        $visite->membre_id = $membre->membre_id;
        $visite->save();
        return back()->with('success','Visite ajout??e avec succ??s');
    }

    // public function choosevisiter by program
    public function choosevisiter($programme)
    {
    $data_visite = \App\Models\Visite::where('id_user', Auth::user()->id)->where('programmes', $programme)->get();
    
    // if programme = BetaNurs return view addvisitorbeta elseif programme = VentaPlus return view addvisitorVenta else if programme = OncoPlus return view addvisitoronco
    if ($programme == 'BetaNurse') {
        return view('user-dash.addvisitorbeta', compact('data_visite'));
    } elseif ($programme == 'VentaPlus') {
        return view('user-dash.addvisitorventa', compact('data_visite'));
    } elseif ($programme == 'OncoPlus') {
        return view('user-dash.addvisitoronco', compact('data_visite'));
    }


        //return view('user-dash.addvisite',compact('data_visite'));
    }

    //editvisites view
    public function editvisites($id)
    {
        $membersinfo = \App\Models\Membres::where('user_id',Auth::user()->id)->get();

        $visite = \App\Models\Visite::find($id);
        return view('user-dash.editvisites',compact('visite','membersinfo'));
    }
    // editVisitePost
    public function editVisitePost(Request $request)
    {
        $request->validate([
            
            'nom_prenom' => 'required',
            'date_visite' => 'required',
            'lieu_visite' => 'required',
            'dose' => 'required',
            'mail' => 'required',
        ]);

        $visite = \App\Models\Visite::find($request->id);
        $visite->id_user = Auth::user()->id;
        $visite->programmes = $request->programmes;
        $visite->nom = $request->nom_prenom;
        $visite->prenom = $request->nom_prenom;
        $visite->type_visite = $request->lieu_visite;
        $visite->date_visite = $request->date_visite;
        $visite->lieu_visite = $request->lieu_visite;
        $visite->dose = $request->dose;

        // select from memebers table where email = $request->mail
        $membre = \App\Models\Membres::where('email',$request->mail)->first();
        $visite->membre_id = $membre->membre_id;
        if($visite->save()){
            return back()->with('success','Visite modifi??e avec succ??s');
        }else{
            return back()->with('error','Visite non modifi??e');
        }
        
    }
    //deletevisites
    public function deletevisites($id)
    {
        $visite = \App\Models\Visite::find($id);
        if($visite->delete()){
            return back()->with('success','Visite supprim??e avec succ??s');
        }else{
            return back()->with('error','Visite non supprim??e');
        }
    }
}
