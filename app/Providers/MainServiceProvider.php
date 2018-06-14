<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use DB;
use App\Location;
class MainServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        view()->composer('layout.main',function($view){
                 
            $Location = Location::ActiveLocationName();    
            $view->with(compact('Location'));


        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
