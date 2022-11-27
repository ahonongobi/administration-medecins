<?php

namespace App\Http\Controllers;

use App\Models\AddTournee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AddTourneeController extends Controller
{
    // addTourneonly
    public function addTourneonly(Request $request){
        $request->validate([
            
            'date' => 'required',
            'mois' => 'required',
            'code' => 'required',
        ]);
        $addtournee = new AddTournee();
        $addtournee->user_id = Auth::user()->id;
        $addtournee->code_secret = Rand(100000, 999999);
        $addtournee->date = $request->date;
        $addtournee->mois = $request->mois;
        $addtournee->code = $request->code;
        $addtournee->save();
        return redirect()->back()->with('success', 'Tournee ajoutée avec succès');
    }
    // deletetourneeonly
    public function deletetourneeonly($id){
        $addtournee = AddTournee::find($id);
        $addtournee->delete();
        return back()->with('success', 'Tournee supprimée avec succès');
    }
}
