<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Location;
class LocationController extends Controller
{
	private $location, $limit =10;
	public function __construct(Location $location){
		$this->location = $location;
		
	}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
 /**
     * Store a new user.
     *
     * @param  Request  $request
     * @return Response
     */
    
    public function index(Request $request)
    {
        $location = Location::ActiveLocation();
		// //$location = $this->location->all();
  //      $location = $this->location->select('locationName')->get();
  //        if ($request->isMethod('post')){    
  //           //return $location;
  //            return json_encode($location);
  //           // return response()->json(['response' => 'This is post method']); 
  //        }
  //       //return json_encode($location);
  //      // return response()->json(['response' => $location]);
		return view("main/index")->with('data',$location);
  //        return response()->json($location); 
  //       return null;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}