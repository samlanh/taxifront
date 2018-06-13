<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\location;
use App\Supplier;
use App\VehiclePrice;
use App\VehiclePriceDetail;
use App\VehicleType;

class IndexController extends Controller
{
	
	public function index(){
		
		return view("main/index");
	}
	public function result(Request $request){
			
		$result = DB::select("SELECT
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
			 AND vt.`id` = p.`vehicleType`");
		return view('main.result', ['data' => $result]);
	
		// return view("main/result");
	}
}
