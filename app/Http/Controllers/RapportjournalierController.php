<?php

namespace App\Http\Controllers;

use App\Models\Rapportjournalier;
use Illuminate\Http\Request;

class RapportjournalierController extends Controller
{
    public function index()
    {
        return view('user-dash.rapportjournalier');
    }

    public function addrapportjournalierView()
    {
        return view('user-dash.addrapportjournalier');
    }

    public function formaddrapportjournalier(){
        return view('user-dash.formaddrapportjournalier');
    }

    public function voirjournalier($id){
        $data =  Rapportjournalier::where('id',$id)->first();
        return view ('user-dash.voirjournalier',compact('data'));
    }

    public function editjournalier($id){
        $data =  Rapportjournalier::where('id',$id)->first();
        return view ('user-dash.edit-rapport',compact('data'));

    }

    public function addrapportjournalierpost(Request $request)
    {
        $request->validate([
            'tache_1' => 'required',
        ]);
        // send tache_1  till  tache_6 to database
        $tache =  new Rapportjournalier();
        $tache->user_id = auth()->user()->id;
        $tache->tache_1 = $request->tache_1 ?? '##';
        $tache->tache_2 = $request->tache_2 ?? '##';
        $tache->tache_3 = $request->tache_3 ?? '##';
        $tache->tache_4 = $request->tache_4 ?? '##';
        $tache->tache_5 = $request->tache_5 ?? '##';
        $tache->tache_6 = $request->tache_6 ?? '##';
        $tache->remarque = $request->remarque ?? '##';
        $tache->save();
        return back()->with('success', 'Rapport journalier ajouté avec succès');
    }

    // deleterapportj
    public function deleterapportj($id){
        $delete_rapport =  Rapportjournalier::where('id',$id)->first();
        $delete_rapport->delete();

        return back()->with("success",'Rapport supprimé avec succès...');
    }

    // pdfjournalier

    public function pdfjournalier($id){
        $data =  Rapportjournalier::where('id',$id)->first();
        return view('user-dash.pdfjournalier',compact('data'));
    }
    // edit editjournalierpost

    public function editjournalierpost(Request $request){
        $request->validate([
            'tache_1' => 'required',
        ]);
        // send tache_1  till  tache_6 to database
        $tache =  Rapportjournalier::where('id',$request->id)->first();
        $tache->user_id = auth()->user()->id;
        $tache->tache_1 = $request->tache_1 ;
        $tache->tache_2 = $request->tache_2 ;
        $tache->tache_3 = $request->tache_3 ;
        $tache->tache_4 = $request->tache_4 ;
        $tache->tache_5 = $request->tache_5 ;
        $tache->tache_6 = $request->tache_6 ;
        $tache->remarque = $request->remarque;
        $tache->update();
        return back()->with('success', 'Rapport journalier modifié avec succès');
    }
}
