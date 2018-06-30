<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\CustomerModel;
class CustomerController extends Controller
{
    //

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
    	//
    	return view("main.login");
    }
    
    public function signup(Request $request)
    {
        //
        return view("main.signup");
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

        $this->validate($request, [
         'email' => 'required|min:5',
         'phone_number' => 'required',
         'password'  =>  'required|min:6|confirmed',
         
        ],
        [
            'email.required' => trans('language.please_fill_your_email'),
            'phone_number.required' => trans('language.please_fill_your_phone_mumber'),
            'password.required' => trans('language.please_fill_your_password'),
            // 'password_confirmation.required' => trans('language.please_fill_your_c_password')
        ]);
        $radomcode = rand(1000,9999); // generate security code 4 charecter
        $customer = new CustomerModel;      
        $customer->email = $request->email;
        $customer->tel =$request->phone_number;
        $customer->password = md5($request->password );
        $customer->verifyCode = $radomcode;
        $customer->status = 1;
        $customer->createDate = date("Y-m-d H:i:s");
        $customer->isVerify = 0;
        $customer->save();      
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
