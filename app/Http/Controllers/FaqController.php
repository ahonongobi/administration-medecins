<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FaqController extends Controller
{
    public function index()
    {
        $data_faq = \App\Models\Faq::all();
        return view('user-dash.faq',compact('data_faq'));
    }

    public function addfaqView()
    {
        return view('user-dash.formaddfaq');
    }

    public function storefaq(Request $request)
    {
        $request->validate([
            'question' => 'required',
            'reponse' => 'required',
        ]);

        $faq = new \App\Models\Faq;
        $faq->id_user = Auth::user()->id;
        $faq->question = $request->question;
        $faq->reponse = $request->reponse;
        $faq->save();
        return back()->with('success','Question ajoutée avec succès');
    }
    //deletefaq
    public function deletefaq($id)
    {
        $faq = \App\Models\Faq::find($id);
        $faq->delete();
        return back()->with('success','Question supprimée avec succès');
    }
}
