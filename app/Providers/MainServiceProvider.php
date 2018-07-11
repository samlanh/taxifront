<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use DB;
use App\Location;
use App\Aboutus;
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
                 
            //$Location = Aboutus::ActiveLocationName();    
            
            $view->with('data',Aboutus::Aboutus()->first());



            // $query="
            //     SELECT
            //         *
            //      FROM 
            //         tp_about_us
            // ";
            // $result = DB::select($query);
            // return view('layout.main', ['data' => $result]);
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
