<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    public function index(){
        return view('user-dash.contacts');
    }

    //then send the data to the table contacts: email,tel,etablissement,statut,name, user_id
    public function store(Request $request){

        $contact = new \App\Models\Contact();
        $contact->email = $request->input("email");
        $contact->tel = $request->input("tel");
        $contact->etablissement = $request->input("etablissement");
        $contact->statut = $request->input("statut");
        $contact->name = $request->input("name");
        $contact->user_id = Auth::user()->id;
        $contact->save();
        return json_encode(array(
            "statusCode"=>200
        ));
        //return redirect()->back()->with('success','Votre message a été envoyé avec succès');
    }
 public function mycontacts(){
        $contacts = \App\Models\Contact::where('user_id',Auth::user()->id)->get();
        return view('user-dash.mycontacts',compact('contacts'));

 }
 public function deletecontact($id){
        $contact = \App\Models\Contact::find($id);
        $contact->delete();
        return redirect()->back()->with('success','Contact supprimé avec succès');
 }

}
