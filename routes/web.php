<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/foo', function () {
    Artisan::call('storage:link');
});

Route::get('/', function () {
    return view('login');
});

Route::get('/login', function () {
    return view('login');
})->name('login');
//login post route
Route::post('/login',[\App\Http\Controllers\LoginController::class,"login"])->name("loginUser");
//call admincontroller
Route::get('/admin',[\App\Http\Controllers\AdminController::class,"index"])->name("admin");
//call midelware auth group
Route::group(['middleware'=>'auth'],function() {
    //adduser post route
    Route::post('/adduser',[\App\Http\Controllers\AdminController::class,"adduser"])->name("adduser");
    //user route
    Route::get('/user',[\App\Http\Controllers\AdminController::class,"indexUser"])->name("user");
    //Loginafter route
    Route::get('/indexAfterLogin',[\App\Http\Controllers\AdminController::class,"indexAfterLogin"])->name("indexAfterLogin");
    //display choose programme
    Route::get('chooseprogrames/{keys}',[\App\Http\Controllers\MembresController::class,'display']);
    //delete user
    Route::get('/delete/{id}',[\App\Http\Controllers\AdminController::class,"deleteuser"])->name("deleteuser");
    //edit user
    Route::get('/edit/{id}',[\App\Http\Controllers\AdminController::class,"edituser"])->name("edituser");
    //post edit user
    Route::post('/edit/{id}',[\App\Http\Controllers\AdminController::class,"updateuser"])->name("postedituser");
    //voir
    Route::get('/voir/{id}',[\App\Http\Controllers\MembresController::class,"voiruser"])->name("voiruser");
    //voir 2 parceque l'autre ne marche pas avec tableau. IL y a des conflit de variable
    Route::get('/voir2/{id}',[\App\Http\Controllers\MembresController::class,"voiruser2"])->name("voiruser2");

    //route addmembres
    Route::get('/addmembres',[\App\Http\Controllers\MembresController::class,"addmembres"])->name("addmembres");
    //send rout
    Route::post('/addmembres',[\App\Http\Controllers\MembresController::class,"send"])->name("send");

    //editer membres get
    Route::get('/editmembres/{id}',[\App\Http\Controllers\MembresController::class,"editmembres"])->name("editmembres");
    //editer membres post
    Route::post('/editmembres/{id}',[\App\Http\Controllers\MembresController::class,"updatemembres"])->name("sendEdit");
    //delete membres
    Route::get('/deletemembres/{id}',[\App\Http\Controllers\MembresController::class,"deletemembres"])->name("deletemembres");

    //printpdf
    Route::get('print-pdf/{id}',[\App\Http\Controllers\MembresController::class,"pdfview"]);
    Route::get('print-pdf-2/{id}',[\App\Http\Controllers\MembresController::class,"pdfview2"]);

    Route::get('print-pdf-samepage/{id}',[\App\Http\Controllers\MembresController::class,"pdfviewsame"]);
    //calendrier
    Route::get('/calendrier',[\App\Http\Controllers\MembresController::class,"calendrier"])->name("calendrier");

    Route::post('full-calender/action', [\App\Http\Controllers\FullCalenderController::class, 'action']);

    Route::post('/fullcalendareventmaster/create',[\App\Http\Controllers\FullCalenderController::class,'create']);
    Route::post('/fullcalendareventmaster/update',[\App\Http\Controllers\FullCalenderController::class,'update']);
    Route::post('/fullcalendareventmaster/delete',[\App\Http\Controllers\FullCalenderController::class,'destroy']);
   //contact route
    Route::get('contacts',[\App\Http\Controllers\ContactController::class,'index']);
    // post /user/contacts
    Route::post('/user/contacts',[\App\Http\Controllers\ContactController::class,'store']);
    //mycontacts route
    Route::get('/mycontacts',[\App\Http\Controllers\ContactController::class,'mycontacts']);
    //delete contact
    Route::get('/deletecontact/{id}',[\App\Http\Controllers\ContactController::class,'deletecontact']);

    //change password
    Route::get('/changepassword',[\App\Http\Controllers\ChangePasswordController::class,'index']);
    //change password post
    Route::post('/changepassword',[\App\Http\Controllers\ChangePasswordController::class,'changepassword']);

    //todo view
    Route::get('/todo',[\App\Http\Controllers\TodoController::class,'index']);
    //route todo.store
    Route::post('/todo',[\App\Http\Controllers\TodoController::class,'store'])->name("todo.store");

    //todo.completed
    Route::get('/todo/completed/{id}',[\App\Http\Controllers\TodoController::class,'completed'])->name("todo.completed");
    ///delete/todo/{id}
    Route::get('/delete/todo/{id}',[\App\Http\Controllers\TodoController::class,'destroy'])->name("todo.destroy");
    ///undo/todo/{id}
    Route::get('/undo/todo/{id}',[\App\Http\Controllers\TodoController::class,'undo'])->name("todo.undo");
    //delete all todo
    Route::get('/alltodo/delete/',[\App\Http\Controllers\TodoController::class,'deletealltodo'])->name("todo.deletealltodo");

    //admin programmes
    Route::get('/admin/programmes',[\App\Http\Controllers\AdminController::class,'programmes'])->name("admin.programmes");
    //addprogrammes post route
    Route::post('addprogrammes',[\App\Http\Controllers\AdminController::class,'addprogrammes'])->name("admin.addprogrammes");

    //delete programmes
    Route::get('/deleteprogrammes/{id}',[\App\Http\Controllers\AdminController::class,'deleteprogrammes'])->name("admin.deleteprogrammes");

    // haha visites start here
    Route::get('/visites',[\App\Http\Controllers\VisiteController::class,'index'])->name("visites");
    //addvisite
    Route::get('/addvisite/{programmes}',[\App\Http\Controllers\VisiteController::class,'addvisiteView'])->name("addvisite");
    //addvisite post
    Route::post('/saveVisite',[\App\Http\Controllers\VisiteController::class,'saveVisite'])->name("saveVisite");
    //saveVisiteFromProfile
    Route::post('/saveVisiteFromProfile',[\App\Http\Controllers\VisiteController::class,'saveVisiteFromProfile'])->name("saveVisiteFromProfile");
    // choosevisiter by programme
    Route::get('/choosevisiter/{programme}',[\App\Http\Controllers\VisiteController::class,'choosevisiter'])->name("choosevisiter");
    // editvisites
    Route::get('/editvisites/{id}',[\App\Http\Controllers\VisiteController::class,'editvisites'])->name("editvisites");
    //editVisite 
    Route::post('/editVisite',[\App\Http\Controllers\VisiteController::class,'editVisitePost'])->name("editVisite");
    //deletevisites
    Route::get('/deletevisites/{id}',[\App\Http\Controllers\VisiteController::class,'deletevisites'])->name("deletevisites");
    // haha fichier start here
    Route::get('/downloadfile',[\App\Http\Controllers\FichierController::class,'index'])->name("fichier");
    // addfile view
    Route::get('/addfile',[\App\Http\Controllers\FichierController::class,'addfileView'])->name("addfile");

    //storeFile 
    Route::post('/storeFile',[\App\Http\Controllers\FichierController::class,'storeFile'])->name("storeFile");
    //deletefichier
    Route::get('/deletefichier/{id}',[\App\Http\Controllers\FichierController::class,'deletefichier'])->name("deletefichier");
    //faq
    Route::get('/faq',[\App\Http\Controllers\FaqController::class,'index'])->name("faq");
    //addfaq
    Route::get('/addfaq',[\App\Http\Controllers\FaqController::class,'addfaqView'])->name("addfaq");
    //storefaq
    Route::post('/storeFaq',[\App\Http\Controllers\FaqController::class,'storefaq'])->name("storeFaq");
    //deletefaq
    Route::get('/deletefaq/{id}',[\App\Http\Controllers\FaqController::class,'deletefaq'])->name("deletefaq");

    //profilo
    Route::get('/profilo',[\App\Http\Controllers\ProfileController::class,'profile']);
    //uploadphoto
    Route::post('uploadphoto',[\App\Http\Controllers\ProfileController::class,'upload']);

    // ce 24 novemver 2022 start rapport journalier

    Route::get('/rapportjournalier',[\App\Http\Controllers\RapportjournalierController::class,'index'])->name("rapportjournalier");
    //addrapportjournalier
    Route::get('/addrapportjournalier',[\App\Http\Controllers\RapportjournalierController::class,'addrapportjournalierView'])->name("addrapportjournalier");
    // post addrepportjournalier
    Route::post('/addrepportjournalierpost',[\App\Http\Controllers\RapportjournalierController::class,'addrapportjournalierpost'])->name("addrapportjournalierpost");

    // formaddrapportjournalier
    Route::get('/formaddrapportjournalier',[\App\Http\Controllers\RapportjournalierController::class,'formaddrapportjournalier'])->name("formaddrapportjournalier");
    // deleterapportj
    Route::get('/deleterapportj/{id}',[\App\Http\Controllers\RapportjournalierController::class,'deleterapportj']);

    //voir-data_journalier
    Route::get('/voir-journalier/{id}',[\App\Http\Controllers\RapportjournalierController::class,'voirjournalier']);

    //print-pdf-rapport-journalier
    Route::get('/print-pdf-rapport-journalier/{id}',[\App\Http\Controllers\RapportjournalierController::class,'pdfjournalier']);
    //edit
    Route::get('/edit-rapport-journalier/{id}',[\App\Http\Controllers\RapportjournalierController::class,'editjournalier']);
    // edit rapport journalier post
    Route::post('/edit-rapport-journalier-post',[\App\Http\Controllers\RapportjournalierController::class,'editjournalierpost'])->name("editjournalierpost");

    // addrapporthebdo
    Route::get('/addrapporthebdo',[\App\Http\Controllers\HebdoController::class,'addrapporthebdoView'])->name("addrapporthebdo");
    //formaddrapporthebdomadaire
    Route::get('/formaddrapporthebdomadaire',[\App\Http\Controllers\HebdoController::class,'formaddrapporthebdomadaire'])->name("formaddrapporthebdomadaire");
    //addrepporthebdomadairepost
    Route::post('/addrepporthebdomadairepost',[\App\Http\Controllers\HebdoController::class,'addrepporthebdomadairepost'])->name("addrepporthebdomadairepost");
    //voir-hebdomadaire 
    Route::get('/voir-hebdomadaire/{id}',[\App\Http\Controllers\HebdoController::class,'voir_hebdomadaire']);
    //savedatahebdo
    Route::post('/savedatahebdo',[\App\Http\Controllers\SavedataController::class,'savedatahebdo'])->name("savedatahebdo");
    // edit-rapport-hebdomadaire
    Route::get('/edit-rapport-hebdomadaire/{id}',[\App\Http\Controllers\HebdoController::class,'edit_hebdomadaireview']);
    //editrepporthebdomadairepost
    Route::post('/editrepporthebdomadairepost',[\App\Http\Controllers\HebdoController::class,'editrepporthebdomadairepost'])->name("editrepporthebdomadairepost");
    //print-pdf-rapport-hebdomadaire
    Route::get('/print-pdf-rapport-hebdomadaire/{id}',[\App\Http\Controllers\HebdoController::class,'printhebdoView']);
    // deletehebdomadaire
    Route::get('/deletehebdomadaire/{id}',[\App\Http\Controllers\HebdoController::class,'deletehebdomadaire']);

    //addtournee
    Route::get('/addtournee',[\App\Http\Controllers\TourneeController::class,'addtourneeView'])->name("addtournee");

    //formaddtournee
    Route::get('/addplantournee',[\App\Http\Controllers\TourneeController::class,'formaddtournee'])->name("formaddtournee");
    //addplanpost
    Route::post('/addplanpost',[\App\Http\Controllers\TourneeController::class,'addplanpost'])->name("addplanpost");
    //edittournee 
    Route::get('/edittournee/{id}',[\App\Http\Controllers\TourneeController::class,'edittourneeview']);
    //ediiplanpost
    Route::post('/ediiplanpost',[\App\Http\Controllers\TourneeController::class,'ediiplanpost'])->name("ediiplanpost");
    //deletetournee
    Route::get('/deletetournee/{id}',[\App\Http\Controllers\TourneeController::class,'deletetournee']);
    // print-pdf-tourne
    Route::get('/print-pdf-tourne/{id}',[\App\Http\Controllers\TourneeController::class,'printtournee']);
    //print-pdf-tourne
    Route::get('/print-pdf-tourne',[\App\Http\Controllers\TourneeController::class,'printtourneepdf']);
    // voir-tournee
    Route::get('/voir-tournee/{id}',[\App\Http\Controllers\TourneeController::class,'voir_tournee']);
    // editdonnee
    Route::get('/editdonnee/{id}',[\App\Http\Controllers\HebdoController::class,'editdonnee']);

    //editdatahebdo
    Route::post('/editdatahebdo',[\App\Http\Controllers\SavedataController::class,'editdatahebdo'])->name("editdatahebdo");


    //deletedonnee
    Route::get('/deletedonnee/{id}',[\App\Http\Controllers\SavedataController::class,'deletedonnee']);
    //addTourneonly 
    Route::post('/addTourneonly',[\App\Http\Controllers\AddTourneeController::class,'addTourneonly'])->name("addTourneonly");
    // deletetourneeonly
    Route::get('/deletetourneeonly/{id}',[\App\Http\Controllers\AddTourneeController::class,'deletetourneeonly']);
});
//logout
Route::get('/logout',[\App\Http\Controllers\LoginController::class,"logout"])->name("logout");




