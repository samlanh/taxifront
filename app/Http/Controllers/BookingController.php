<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Http\Requests;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        if (!$request->has('ondate') OR !$request->has('vehicle_id')) {
            return view("main/index");
        }

        $bookingdate = date("Y/m/d",strtotime($request->ondate));
        $todays =date("Y/m/d");
        if ($todays>=$bookingdate)
        {
            $bookingdate = $todays;
        }
     
      $query="
            SELECT
            pd.`id`,
            pd.`from_location`,
            p.`supplyerId`,
            (SELECT supplier.supplyerName FROM `tp_supplier` AS supplier WHERE supplier.id = p.`supplyerId` LIMIT 1) AS supplierCompany,
            (SELECT supplier.logo FROM `tp_supplier` AS supplier WHERE supplier.id = p.`supplyerId` LIMIT 1) AS supplierLogo,
            (SELECT location.locationName FROM tp_locations AS location WHERE location.id = pd.`from_location` LIMIT 1 ) AS fromLocation,
            (SELECT location.locationName FROM tp_locations AS location WHERE location.id = pd.`to_location` LIMIT 1 ) AS toLocation,
            pd.`cost`,
            pd.`price`,
            pd.`discount`,
            vt.title AS `vehicleType`,
            vt.`amountCase`,
            vt.`amountSeat`,
            vt.`amountSmallCase`,
            vt.`description`,
            vt.`images` as vhicleImages
             FROM `tp_price_detail` AS pd,
             `tp_price` AS p,
             `tp_vehicletype` AS vt
             WHERE p.`id`= pd.`price_id`
             AND vt.`id` = p.`vehicleType`
        ";
        if ($request->has('vehicle_id')) {
            $query.=" AND pd.id = $request->vehicle_id ";  
        }   
        $query.=" LIMIT 1";
        $result = collect(\DB::select($query))->first();

       
        return view("main/bookingdetail",['data' => $result,'bookingdate'=>$bookingdate]);
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
