<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    //
    protected $table = 'tp_supplier';
    function scopeSupplyier($query){
    	return $query->get();
    }
}
