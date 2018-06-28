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
	// public function result(Request $request){
 		
		
	// 	$fromLocation = $request->input('from_location', '');
	// 	$toLocation = $request->input('to_location', '');
	// 	$url="http://localhost/apitaxi/public/api/searchtaxi";
	// 	// $response = Curl::to($url)
 //  //       ->withData(array( 'fromLocation' => $fromLocation,'toLocation' => $toLocation ))
 //  //       ->asJson(true)
 //  //       ->withContentType('application/json')
 //  //       ->get();

	// 	$content = [
 //            "en" => 'New Booking Request'
 //        ];


 //        $fields = [
 //            'fromLocation' => $fromLocation,
 //                'toLocation' => $toLocation,
 //        ];

 //        $fields = json_encode($fields);
        
 //        $ch = curl_init();
 //        curl_setopt($ch, CURLOPT_URL, $url);
 //        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8'));
 //        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
 //        curl_setopt($ch, CURLOPT_HEADER, FALSE);
 //        curl_setopt($ch, CURLOPT_HTTPGET, TRUE);
 //        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
 //        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

 //        $response = curl_exec($ch);
 //        dd($response);
 //        curl_close($ch);

 //       dd($response);
		
	// }
	public function result(Request $request){
		
		$result = $this->getSearchVehicleDefaulLocation($request);
		if (empty($result)) {
			$result = $this->getSearchVehicleDefaulLocationReverse($request);
		}
		return view('main.result', ['data' => $result]);
	
		// return view("main/result");
	}

	function getSearchVehicleDefaulLocation($search){
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
		if ($search->has('from_location')) {
			$query.=" AND (SELECT location.locationName FROM tp_locations AS location WHERE location.id = pd.`from_location` LIMIT 1 ) ='$search->from_location' ";  
		}
		if ($search->has('to_location')) {
			$query.=" AND (SELECT location.locationName FROM tp_locations AS location WHERE location.id = pd.`to_location` LIMIT 1 ) ='$search->to_location' ";  
		}		
		return $result = DB::select($query);
	}
	function getSearchVehicleDefaulLocationReverse($search){
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
			vt.`images` as vhicleImages,
			'is_reverse'
			 FROM `tp_price_detail` AS pd,
			 `tp_price` AS p,
			 `tp_vehicletype` AS vt
			 WHERE p.`id`= pd.`price_id`
			 AND vt.`id` = p.`vehicleType`
		";	
		if ($search->has('from_location')) {
			$query.=" AND (SELECT location.locationName FROM tp_locations AS location WHERE location.id = pd.`to_location` LIMIT 1 ) ='$search->from_location' ";  
		}
		if ($search->has('to_location')) {
			$query.=" AND (SELECT location.locationName FROM tp_locations AS location WHERE location.id = pd.`from_location` LIMIT 1 ) ='$search->to_location' ";  
		}
		
		return $result = DB::select($query);
	}
}
