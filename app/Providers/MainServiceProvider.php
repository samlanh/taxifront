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
            //  $main = DB::table('tp_locations')
            // ->select(['locationName'])
            // ->where(['status'=>1])
            // ->orderBy('locationName','ASC')
            // ->get();        
            $main = Location::ActiveLocationName();    
            // $main=  response()->json($main);       
            $view->with(compact('main'));

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
