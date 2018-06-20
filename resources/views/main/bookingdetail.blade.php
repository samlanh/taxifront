@extends('layout.main')
<?php 
// dd($data);
?>

@section('title')
	<title>The Bee Go</title>
@stop

@section('style')
	
@stop

@section('content')

	<div class="blank-header-top">
	</div>
	<div class="blank-header">
	</div>
	 <!-- Start About -->
    <section class="booking-detail ptb-40">
      <div class="container">
        <div class="row">
        	<div class="col-md-7 col-xs-12 col-sm-12"> 
        		<div class="passenger-detail">
        			
					<div class="passenger-detail-content">
						<div class="blog-title">
	        				<h3 class="title-blog upercase">{{ trans('language.passenger_detail') }}</h3>
	        			</div>
						{!! Form::open(['url' => '/booking/request','id'=>'bookingrequest','class'=>'default-form mt-20 mb-10','method'=>'POST']) !!}

							 <div class="form-group mtb-20">
							 	 {{Form::text("fullname", $value = null, $attributes = ['id'=>'fullname','class' => 'form-control ','placeholder'=>trans('language.full_name')])}}
							 </div>
							 <div class="form-group mtb-20">
							 	 {{Form::number("age", $value = null, $attributes = ['id'=>'age','class' => 'form-control ','placeholder'=>trans('language.age')])}}
							 </div>
							 <div class="form-group mtb-20">
							 	 {{Form::text("pickup_poiter", $value = null, $attributes = ['id'=>'pickup_poiter','class' => 'form-control ','required'=>'required','placeholder'=>trans('language.pickup_pointer')])}}
							 </div>
							 <div class="form-group mtb-20">
							 	 {{Form::text("note", $value = null, $attributes = ['id'=>'note','class' => 'form-control ','placeholder'=>trans('language.note')])}}
							 </div>
							  <div class="form-group mtb-20">
							 	 {{Form::text("fly_number", $value = null, $attributes = ['id'=>'note','class' => 'form-control ','placeholder'=>trans('language.fly_number')])}}
							 </div>
						{!! Form::close() !!}
						<div class="blog-title">
	        				<h3 class="title-blog upercase">{{ trans('language.contact_detail') }}</h3>
	        			</div>
	        			 <div class="form-group mtb-20">									 
						    <div class="input-group">
		                        <div class="input-group-prepend">
		                          <span class="input-group-text" id="basic-addon3"><i class="fa fa-envelope"></i></span>
		                        </div>
		                         {{Form::email("email", $value = null, $attributes = ['id'=>'email','class' => 'form-control ','placeholder'=>trans('language.enter_email')])}}
		                      </div>
						  </div>
	        			<div class="blog-title">
	        				<h3 class="title-blog upercase">{{ trans('language.billing_detail') }}</h3>
	        			</div>
	        			 <div class="form-group mtb-20">
						 	 {{Form::text("billing_address", $value = null, $attributes = ['id'=>'note','class' => 'form-control ','placeholder'=>trans('language.billing_address')])}}
						 </div>
						 <div class="form-group mtb-20">
						 	 {{Form::text("billing_name", $value = null, $attributes = ['id'=>'note','class' => 'form-control ','placeholder'=>trans('language.billing_name')])}}
						 </div>
					</div>
        		</div>
        	</div>
        	<div class="col-md-5 col-xs-12 col-sm-12"> 
        		<div class="summary-booking-blog mtb-10">
        			<div class="blog-title">
        				<h3 class="title-blog">{{ trans('language.summary') }}</h3>

        			</div>

        		</div>
        	</div>
         
        </div>
      </div>
    </section>
    <!-- End About -->
	
	
@stop

@section('script')
@stop
