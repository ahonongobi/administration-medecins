<?php

namespace App\Http\Controllers;

use App\Models\Hebdo;
use App\Models\Savedata;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class HebdoController extends Controller
{
    public function addrapporthebdoView()
    {
        return view('user-dash.addrapporthebdo');
    }

    public function formaddrapporthebdomadaire()
    {
        return view('user-dash.formaddrapporthebdomadaire');
    }

    public function edit_hebdomadaireview($id)
    {
        $data = Hebdo::find($id);
        return view('user-dash.edit-hebdomadaire', compact('data'));
    }

    public function voir_hebdomadaire($id){
        $data = Hebdo::find($id);
        $all_data = Savedata::where('secret', $id)->get();
        return view('user-dash.voir-hebdomadaire',compact('data','id','all_data'));
    }

    public function printhebdoView($id){
        $data = Hebdo::find($id);
        $all_data = Savedata::where('secret', $id)->get();
        return view('user-dash.pdfhebdo',compact('data','id','all_data'));
    }

    public function addrepporthebdomadairepost(Request $request)
    {
        $request->validate([
            'date_rapport' => 'required',
            'code_rapport' => 'required',
            'psdmp' => 'required',
            'psdmp_region' => 'required',
            'nombre_patient' => 'required',
            'semaine' => 'required',
        ]);

        $hebdo = new Hebdo();
        $hebdo->user_id = auth()->user()->id;
        $hebdo->date_rapport = $request->date_rapport;
        $hebdo->code_rapport = $request->code_rapport;
        $hebdo->psdmp = $request->psdmp;
        $hebdo->psdmp_region = $request->psdmp_region;
        $hebdo->nombre_patient = $request->nombre_patient;
        $hebdo->semaine = $request->semaine;
        $hebdo->save();

        return back()->with('success', 'Rapport hebdomadaire ajouté avec succès');
    }

    // editrepporthebdomadairepost
    public function editrepporthebdomadairepost(Request $request)
    {
        $request->validate([
            'date_rapport' => 'required',
            'code_rapport' => 'required',
            'psdmp' => 'required',
            'psdmp_region' => 'required',
            'nombre_patient' => 'required',
            'semaine' => 'required',
        ]);

        $hebdo = Hebdo::find($request->id);
        $hebdo->user_id = auth()->user()->id;
        $hebdo->date_rapport = $request->date_rapport;
        $hebdo->code_rapport = $request->code_rapport;
        $hebdo->psdmp = $request->psdmp;
        $hebdo->psdmp_region = $request->psdmp_region;
        $hebdo->nombre_patient = $request->nombre_patient;
        $hebdo->semaine = $request->semaine;
        $hebdo->update();

        return back()->with('success', 'Rapport hebdomadaire modifié avec succès');
    }

    public function deletehebdomadaire($id)
    {
        $hebdo = Hebdo::find($id);
        $hebdo->delete();
        return back()->with('success', 'Rapport hebdomadaire supprimé avec succès');
    }
}
