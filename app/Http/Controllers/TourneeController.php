<?php

namespace App\Http\Controllers;

use App\Models\AddTournee;
use App\Models\Tournee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TourneeController extends Controller
{
    public function addtourneeView()
    {
        return view('user-dash.addtourne');
    }

    public function formaddtournee(){
        return view('user-dash.formaddplantournee');
    }

    public function edittourneeview($id){
        $data = Tournee::find($id);
        return view('user-dash.edittournee', compact('data'));
    }

    public function printtournee($id){
        $data = AddTournee::find($id);
        $mois = $data->mois;
        $date  =  $data->date;
        //select  from  where mois like $mois
        //select  from tournees where mois like $mois
        $tournees = Tournee::where('user_id', Auth::user()->id)->where('mois',$mois)->get();
        return view('user-dash.simpleprint-pdf-tournee', compact('data','tournees','mois','date'));
    }
    
    
    // printtourneepdf
    public function printtourneepdf(){
        
        return view('user-dash.print-pdf-tournee');
    }
   // voir_tournee
    public function voir_tournee($id){
        $data = AddTournee::find($id);
        $mois = $data->mois;
        
        //select  from tournees where mois like $mois
        $tournees = Tournee::where('mois',$mois)->get();
        return view('user-dash.voir-tournee', compact('data', 'tournees'));
    }
    // addplanpost
    public function addplanpost(Request $request){
        $request->validate([
            
            'date' => 'required',
            'mois' => 'required',
            'type_activite' => 'required',
            'secteur' => 'required',
            'service' => 'required',
            'medecin' => 'required',
            'programme' => 'required',
            'objectif' => 'required',
            'observation' => 'required',
        ]);

        $tournee = new Tournee();
        $tournee->user_id = auth()->user()->id;
        $tournee->date = $request->date;
        $tournee->mois = $request->mois;
        $tournee->type_activite = $request->type_activite;
        $tournee->secteur = $request->secteur;
        $tournee->service = $request->service;
        $tournee->medecin = $request->medecin;
        $tournee->programme = $request->programme;
        $tournee->objectif = $request->objectif;
        $tournee->observation = $request->observation;
        $tournee->save();

        return back()->with('success', 'Plan de tournée ajouté avec succès');
    }

    // ediiplanpost
    public function ediiplanpost(Request $request){
        $request->validate([
            
            'date' => 'required',
            'mois' => 'required',
            'type_activite' => 'required',
            'secteur' => 'required',
            'service' => 'required',
            'medecin' => 'required',
            'programme' => 'required',
            'objectif' => 'required',
            'observation' => 'required',
        ]);

        $tournee = Tournee::find($request->id);
        $tournee->user_id = auth()->user()->id;
        $tournee->date = $request->date;
        $tournee->mois = $request->mois;
        $tournee->type_activite = $request->type_activite;
        $tournee->secteur = $request->secteur;
        $tournee->service = $request->service;
        $tournee->medecin = $request->medecin;
        $tournee->programme = $request->programme;
        $tournee->objectif = $request->objectif;
        $tournee->observation = $request->observation;
        $tournee->update();

        return back()->with('success', 'Plan de tournée modifié avec succès');
    }

    //deletetournee
    public function deletetournee($id){
        $tournee = Tournee::find($id);
        $tournee->delete();
        return back()->with('success', 'Plan de tournée supprimé avec succès');
    }

}
