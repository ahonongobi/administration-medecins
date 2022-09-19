<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Membres;
use App\Models\Visite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Redirect,Response;

class MembresController extends Controller
{
    public function addmembres()
    {
        return view("user-dash.addmembres");
    }
   public function send(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'sexe' => 'required',
            'age' => 'required',
            'addresse' => 'required',
            'departement' => 'required',
            'tel' => 'required',
            'tel2' => 'required',
            'etablissement' => 'required',
            'carte' => 'required',
            'service'=> 'required',
            'nom_responsable' => 'required',
            "valable" => "required",
            "arret" => "required",
            "disponible" => "required",
            "equipement" => "required",
            "effet" => "required",
            "date_update"=> "required",
            "visite"    => "required",
            "birthdate" => "required",
            ]);



        //send to database with model
        $membre = new \App\Models\Membres();
        //generate 4 digit random number
        $membre->user_id = Auth::user()->id;
        $membre->user_email = Auth::user()->email;
        $membre->membre_id = rand(1000,9999);
        $membre->nom  = $request->input("name");
        $membre->programmes = $request->input("programmes");
        $membre->email = $request->input("email");
        $membre->sexe = $request->input("sexe");
        $membre->age = $request->input("age");
        $membre->addresse = $request->input("addresse");
        $membre->departement = $request->input("departement");
        $membre->tel = $request->input("tel");
        $membre->tel2 = $request->input("tel2");
        $membre->etablissement = $request->input("etablissement");
        $membre->carte = $request->input("carte");
        $membre->service = $request->input("service");
        $membre->nom_responsable = $request->input("nom_responsable");
        $membre->valable = $request->input("valable");
        $membre->arret = $request->input("arret");
        $membre->disponible = $request->input("disponible");
        $membre->equipement = $request->input("equipement");
        $membre->effet = $request->input("effet");
        $membre->date_update = $request->input("date_update");
        $membre->visite = $request->input("visite");
        $membre->birthdate = $request->input("birthdate");
        $membre->save();
        if ($membre->save()){
            return back()->with("success","Membre ajouté avec succès");
        } else{
            return back()->with("error","Erreur lors de l'ajout du membre");
        }


    }

    //edit view
    public function editmembres($id)
    {
        $membre = \App\Models\Membres::find($id);
        return view("user-dash.editmembres", compact("membre"));
    }
    //update membre in database
    public function updatemembres(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'sexe' => 'required',
            'age' => 'required',
            'addresse' => 'required',
            'departement' => 'required',
            'tel' => 'required',
            'tel2' => 'required',
            'etablissement' => 'required',
            'carte' => 'required',
            'service' => 'required',
            'nom_responsable' => 'required',
            "valable" => "required",
            "arret" => "required",
            "disponible" => "required",
            "equipement" => "required",
            "effet" => "required",
            "date_update" => "required",
            "visite" => "required",
            "birthdate" => "required",
        ]);
        $membre = \App\Models\Membres::find($id);
        $membre->user_id = Auth::user()->id;
        $membre->user_email = Auth::user()->email;
        $membre->membre_id = rand(1000, 9999);
        $membre->programmes = $request->input("programmes");
        $membre->nom = $request->input("name");
        $membre->email = $request->input("email");
        $membre->sexe = $request->input("sexe");
        $membre->age = $request->input("age");
        $membre->addresse = $request->input("addresse");
        $membre->departement = $request->input("departement");
        $membre->tel = $request->input("tel");
        $membre->tel2 = $request->input("tel2");
        $membre->etablissement = $request->input("etablissement");
        $membre->carte = $request->input("carte");
        $membre->service = $request->input("service");
        $membre->nom_responsable = $request->input("nom_responsable");
        $membre->valable = $request->input("valable");
        $membre->arret = $request->input("arret");
        $membre->disponible = $request->input("disponible");
        $membre->equipement = $request->input("equipement");
        $membre->effet = $request->input("effet");
        $membre->date_update = $request->input("date_update");
        $membre->visite = $request->input("visite");
        $membre->birthdate = $request->input("birthdate");
        $membre->update();
        if ($membre->update()) {
            return back()->with("success", "Membre modifié avec succès");
        } else {
            return back()->with("error", "Erreur lors de la modification du membre");
        }
    }

    public function  deletemembres($id)
    {
        $membre = \App\Models\Membres::find($id);
        $membre->delete();
        if ($membre->delete()) {
            return back()->with("success", "Membre supprimé avec succès");
        } else {
            return back()->with("error", "Erreur lors de la suppression du membre");
        }
    }
    // delete 2
    public function  deletemembres2($id)
    {
        $membre = \App\Models\Membres::find($id);
        $membre->delete();
        if ($membre->delete()) {
            return back()->with("success", "Membre supprimé avec succès");
        } else {
            return back()->with("error", "Erreur lors de la suppression du membre");
        }
    }

    //pdf controller stat here
    public function pdfview($id){
        //get memebre where id = $id
        $membre = \App\Models\Membres::find($id);
        //go to visite model and get user where membre_id $membre->membre_id
        $visitehistorique = \App\Models\Visite::where("membre_id", $membre->membre_id)->get();
        return view('user-dash.pdf',compact('membre', 'visitehistorique'));
    }

    //pdf view 2 pour coté concernat les visites
     //pdf controller stat here
     public function pdfview2($id){
        // select memebre_id from visite where membre_id = $id
        $visite = Visite::where('id',$id)->first();
        $membre = \App\Models\Membres::where('membre_id',$visite->membre_id)->first();
        $visitehistorique = \App\Models\Visite::where('membre_id',$visite->membre_id)->get();
        return view('user-dash.pdf',compact('membre', 'visitehistorique'));
    }

    //pdf controller stat here
    public function pdfviewsame($id){
        //get memebre where id = $id
        $membre = \App\Models\Membres::find($id);
        return view('user-dash.pdf-2',compact('membre'));
    }

    //calendrier controller stat here
    public function calendrier(){
        if(request()->ajax())
        {

            $start = (!empty($_GET["start"])) ? ($_GET["start"]) : ('');
            $end = (!empty($_GET["end"])) ? ($_GET["end"]) : ('');

            $data = Event::whereDate('start', '>=', $start)->whereDate('end',   '<=', $end)->where('user_id',Auth::user()->id)->get(['id','title','start', 'end']);
            return Response::json($data);
        }

         $all_calendar = Event::where('user_id',Auth::user()->id)->get();
        return view('user-dash.calendrier',compact('all_calendar'));
    }

    //voiruser
    public function voiruser($id){
        

        // select memebre_id from visite where membre_id = $id
        $visite = Visite::where('id',$id)->first();
        $membre = \App\Models\Membres::where('membre_id',$visite->membre_id)->first();
        $historyvisite = \App\Models\Visite::where('membre_id',$visite->membre_id)->get();
        return view('user-dash.voir',compact('membre','historyvisite'));
    }

    //voiruser2 
    public function voiruser2($id){
        
        $membre = \App\Models\Membres::where('id',$id)->first();
        //the get membre id from membre table
        $historyvisite = Visite::where('membre_id',$membre->membre_id)->get();
        // select memebre_id from visite where membre_id = $id
        
        //$historyvisite = \App\Models\Visite::where('membre_id',$visite->membre_id)->get();
        return view('user-dash.voir',compact('membre','historyvisite'));
    }


    //display

    public  function  display($keys){
        $membres = Membres::where('user_id',Auth::user()->id)->where('programmes',$keys)->get();

        return view('user-dash.display',compact('membres','keys'));


    }
}
