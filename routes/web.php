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
});
//logout
Route::get('/logout',[\App\Http\Controllers\LoginController::class,"logout"])->name("logout");




