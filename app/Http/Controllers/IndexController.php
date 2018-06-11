<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\vd_category_product;

class IndexController extends Controller
{
	
	public function index(){
		
		return view("main/index");
	}
	public function result(){
		
		return view("main/result");
	}
}
