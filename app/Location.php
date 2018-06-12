<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    //
    protected $table = 'tp_locations';

    function scopeActiveLocation($query){
    	return $query->orderBy('locationName',"ASC")
    		->where('status',1)
    		->get();
    }
    function scopeActiveLocationName($query){
    	return $query->select(['locationName'])->orderBy('locationName',"ASC")
    		->where('status',1)
    		->get();
    }
}
