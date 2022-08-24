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
        //make views path available to all views
        view()->composer('*', function ($view) {
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
            }



        });

        view()->composer(['user-dash.index'], function ($view) {

            //get all membre for connected user
            if(Auth::check()){
                $view->with('membres', Membres::where('user_id', Auth::user()->id)->get());            }
        });

    }
}
