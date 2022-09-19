<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FichierController extends Controller
{
    public function index()
    {
        // get all files from database of connected user
        $data_fichier = \App\Models\Fichier::where('id_user',Auth::user()->id)->get();

        return view('user-dash.addfichier',compact('data_fichier'));
    }
    //addfileView
    public function addfileView()
    {
        return view('user-dash.formaddfichier');
    }
    // storeFile
    public function storeFile(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:pdf,png,jpg,jpeg,svg,doc,docx,xls,xlsx,ppt,pptx|max:2048',
        ]);
        $file = $request->file('file');
        $name = time().'.'.$file->getClientOriginalExtension();
        $destinationPath = public_path('/uploads');
        $file->move($destinationPath, $name);
        $fichier = new \App\Models\Fichier;
        $fichier->id_user = Auth::user()->id;
        $fichier->nom_fichier = $request->nom_fichier ?? $file->getClientOriginalName();
        $fichier->date_fichier = $request->date_fichier;
        $fichier->fichier = $name;
        if($fichier->save()){
            return back()->with('success','Fichier ajouté avec succès');
        } else {
            return back()->with('error','Erreur lors de l\'ajout du fichier');
        }

        
    }
    //deletefichier
    public function deletefichier($id)
    {
        $fichier = \App\Models\Fichier::find($id);
        $fichier->delete();
        return back()->with('success','Fichier supprimé avec succès');
    }
}
