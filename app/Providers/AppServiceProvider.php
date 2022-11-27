<?php

namespace App\Providers;

use App\Models\Membres;
use App\Models\Todo;
use App\Models\Utilisateur;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

       /**$this->app->bind('path.public', function () {
            return "/home/cloudrespidom/public_html";
        }); **/
        //make views path available to all views
        view()->composer('*', function ($view) {
            $view->with('users', Utilisateur::all());
            if(Auth::check()){
                $view->with('path', config('app.url'));
                $view->with('users', Utilisateur::all());
                //count all members
                $view->with('count_members_for_admin', Membres::count());
                //count all user members
                $chount_if_user_exist = Membres::where('user_id', Auth::user()->id)->count();
                if ($chount_if_user_exist > 0) {
                    $view->with('count_if_user_exist', $chount_if_user_exist);
                    $view->with('members', Membres::where("user_id",Auth::user()->id)->count() ?? 0);
                }else{
                    $view->with('count_if_user_exist', 0);
                    $view->with('members', 0);
                }
                //count all users
                $view->with('Countusers', Utilisateur::all()->count());
                //count all $tasks
                $view->with('tasks', Todo::where("user_id",Auth::user()->id)->get()->count() ?? 0);


                // get all programmes
                $view->with('allprogrammes', \App\Models\Programmes::all());
                //
                // take first prgramme in

                //taches
                $view->with('undotodo', \App\Models\Todo::where('user_id',Auth::user()->id)->where('completed',0)->get());
                //event
                $view->with('event', \App\Models\Event::where('user_id',Auth::user()->id)->where('end','<',NOW())->get());

               // data_journalier
                $view->with('data_journalier', \App\Models\Rapportjournalier::where('user_id',Auth::user()->id)->get());
                //data_hedomadaire
                $view->with('data_hedomadaire', \App\Models\Hebdo::where('user_id',Auth::user()->id)->get());
                // $data_tournee
                $view->with('data_tournee', \App\Models\Tournee::where('user_id',Auth::user()->id)->get());
                // get all tournee of user
                $view->with('alltournee', \App\Models\Tournee::where('user_id',Auth::user()->id)->get());
                // data_tournee_only
                $view->with('data_tournee_only', \App\Models\AddTournee::where('user_id',Auth::user()->id)->get());


            }



        });

        view()->composer(['user-dash.index'], function ($view) {

            //get all membre for connected user
            if(Auth::check()){
                $view->with('membres', Membres::where('user_id', Auth::user()->id)->get());            }
        });

    }
}
