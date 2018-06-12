<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use DB;
class MainViewProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        // view()->composer('layout.main',function($view){
            
        
            // $view->with(compact('location'));
        // });

         
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
