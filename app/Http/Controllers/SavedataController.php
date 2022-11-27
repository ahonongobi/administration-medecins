<?php

namespace App\Http\Controllers;

use App\Models\Savedata;
use Illuminate\Http\Request;

class SavedataController extends Controller
{
    public function savedatahebdo(Request $request){
        $request->validate([
            'date_visite' => 'required',
            'code_patient' => 'required',
            'type_visite' => 'required',
            'wilaya' => 'required',
            'structure' => 'required',
            'statut' => 'required',
            'equipement' => 'required',
            'effet' => 'required',
            'notification' => 'required',
        ]);

        $savedata = new Savedata();
        $savedata->user_id = auth()->user()->id;
        $savedata->secret = $request->secret;
        $savedata->date_visite = $request->date_visite;
        $savedata->code_patient = $request->code_patient;
        $savedata->type_visite = $request->type_visite;
        $savedata->wilaya = $request->wilaya;
        $savedata->structure = $request->structure;
        $savedata->statut = $request->statut;
        $savedata->equipement = $request->equipement;
        $savedata->effet = $request->effet;
        $savedata->notification = $request->notification;
        $savedata->save();

        return back()->with('success', 'Rapport hebdomadaire ajouté avec succès');
    }

    // editdatahebdo
    public function editdatahebdo(Request $request){
        $request->validate([
            'date_visite' => 'required',
            'code_patient' => 'required',
            'type_visite' => 'required',
            'wilaya' => 'required',
            'structure' => 'required',
            'statut' => 'required',
            'equipement' => 'required',
            'effet' => 'required',
            'notification' => 'required',
        ]);
  
        $savedata = Savedata::find($request->id);
        
       // $savedata->user_id = auth()->user()->id;
        //$savedata->secret = $request->secret;
        $savedata->date_visite = $request->date_visite;
        $savedata->code_patient = $request->code_patient;
        $savedata->type_visite = $request->type_visite;
        $savedata->wilaya = $request->wilaya;
        $savedata->structure = $request->structure;
        $savedata->statut = $request->statut;
        $savedata->equipement = $request->equipement;
        $savedata->effet = $request->effet;
        $savedata->notification = $request->notification;
        $savedata->update();

        return back()->with('success', 'Rapport hebdomadaire ajouté avec succès');
    }

    //deletedonnee
    public function deletedonnee($id){
        $savedata = Savedata::find($id);
        $savedata->delete();
        return back()->with('success', 'Rapport hebdomadaire ajouté avec succès');
    }
}
