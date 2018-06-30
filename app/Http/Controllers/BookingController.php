<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Redirect;
use App\CustomerModel;

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
             pd.`to_location`,
            p.`supplyerId`,
            (SELECT supplier.supplyerName FROM `tp_supplier` AS supplier WHERE supplier.id = p.`supplyerId` LIMIT 1) AS supplierCompany,
            (SELECT supplier.logo FROM `tp_supplier` AS supplier WHERE supplier.id = p.`supplyerId` LIMIT 1) AS supplierLogo,
            (SELECT location.locationName FROM tp_locations AS location WHERE location.id = pd.`from_location` LIMIT 1 ) AS fromLocation,
            (SELECT location.locationName FROM tp_locations AS location WHERE location.id = pd.`to_location` LIMIT 1 ) AS toLocation,
            pd.`cost`,
            pd.`price`,
            pd.`discount`,
            p.`vehicleType` As vehicleTypeId,
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
       // $input = $request->all();
        $this->validate($request, [
         'pickup_poiter' => 'required|min:5',
         'fullname' => 'required',
         'time_picker' => 'required',
         'phone_number' => 'required|min:5',
         'email' => 'required|min:5',
        ]);

      
       $customer = CustomerModel::whereEmail($request->email)->first();
       if (!empty($customer)) {
           $customerId = $customer->id;
            $customer = new CustomerModel;
            $customer->where('id', $customerId)
            ->update(['customerName' => $request->fullname]);
       }else{          
            $customerId = $this->createCustomer($request); 
       }
      
       $id = DB::table('tp_booking')->insertGetId(
            [
            'supplyerId' => $request->supplyerId, 
            'customerId' => $customerId, 
            'email' => $request->email, 
            'dateBooking' => date("Y-m-d"), 
            'fromLocation' => $request->from_location, 
            'toLocation' => $request->tolocation, 
            'carTypeId' => $request->vehicleTypeId, 
            'flyNumber' => $request->fly_number, 
            'price' => $request->taxi_price,
            'discount' => $request->dicount, 
            'totalPrice' => $request->total_booking, 
            'pickupLocation' => $request->pickup_poiter, 
            'pickupDate' => date("Y-m-d",strtotime($request->pickupDate)), 
            'pickupTime' => $request->time_picker, 
            'note'=> $request->note, 
            'billingAddress' => $request->billing_address, 
            'billingName' => $request->billing_name, 
            ]
        );

       return view("main/index",['bookingId' => $id]);
    }

    function createCustomer($request){
        $customer = new CustomerModel;
        $customer->customerName = $request->fullname;
        $customer->age =$request->age;
        $customer->email = $request->email;
        $customer->tel =$request->phone_number;
        $customer->status = 1;
        $customer->createDate = date("Y-m-d H:i:s");
        $customer->isVerify = 0;
        $customer->save();      
        // must add more colum updated_at, created_at 
         return $customer->id;
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
