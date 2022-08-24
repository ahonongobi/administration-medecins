<?php

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

    //delete user
    Route::get('/delete/{id}',[\App\Http\Controllers\AdminController::class,"deleteuser"])->name("deleteuser");
    //edit user
    Route::get('/edit/{id}',[\App\Http\Controllers\AdminController::class,"edituser"])->name("edituser");
    //post edit user
    Route::post('/edit/{id}',[\App\Http\Controllers\AdminController::class,"updateuser"])->name("postedituser");

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


});
//logout
Route::get('/logout',[\App\Http\Controllers\LoginController::class,"logout"])->name("logout");




