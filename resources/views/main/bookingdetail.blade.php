@extends('layout.main')
<?php 
// dd($data);
?>

@section('title')
	<title>The Bee Go</title>
@stop

@section('style')
	 <link href="{{ asset('assets/css/bootstrap-datetimepicker.css') }}" rel="stylesheet">
	 <link href="{{ asset('assets/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">
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
        		{!! Form::open(['url' => '/booking/request','id'=>'bookingrequest','class'=>'default-form mt-20 mb-10','method'=>'POST']) !!}
        		<div class="passenger-detail border-gradient-to-top pb-40 pr-20 pl-20 ">
					<div class="passenger-detail-content">
						<div class="blog-title border-bottom pb-10">
	        				<h3 class="title-blog upercase"><span class="panel-step-num">1</span>{{ trans('language.transfer_detail') }}</h3>
	        			</div>				
						 
						 <div class="form-group mtb-5">
						 	<div class="col-md-7 col-xs-12 col-sm-12"> 
							 	{{ Form::label('pickup_pointer', trans('language.pickup_pointer'), array('class' => 'label_form_detail'))}}
							 	 {{Form::text("pickup_poiter", $value = null, $attributes = ['id'=>'pickup_poiter','class' => 'form-control ','required'=>'required','placeholder'=>trans('language.pickup_pointer')])}}
						 	</div>
						 	<div class="col-md-5 col-xs-12 col-sm-12"> 
						 		{{ Form::label('time_picker', trans('language.time_picker'), array('class' => 'label_form_detail'))}}
						 		<div class='input-group date' id='datetimepicker3'>
				                    <input id="time_picker" name="time_picker" type='text' class="form-control datetimepick" onkeydown="return false" />
				                    <span class="input-group-addon">
				                        <span class="glyphicon glyphicon-time"></span>
				                    </span>
				                </div>
						 	</div>
						 	<div class="clearfix"></div>						 	
						 </div>
						
						 <div class="form-group mtb-5">
						 	<div class="col-md-12 col-xs-12 col-sm-12">
						 		{{ Form::label('note', trans('language.note'), array('class' => 'label_form_detail'))}}
						 	 {{Form::text("note", $value = null, $attributes = ['id'=>'note','class' => 'form-control ','placeholder'=>trans('language.note')])}}
						 	</div>
						 	<div class="clearfix"></div>						 	
						 </div>
						 <div class="form-group mtb-5">
						 		<div class="col-md-12 col-xs-12 col-sm-12">
						 			{{ Form::label('fly_number', trans('language.fly_number'), array('class' => 'label_form_detail'))}}
						 	 {{Form::text("fly_number", $value = null, $attributes = ['id'=>'note','class' => 'form-control ','placeholder'=>trans('language.fly_number')])}}
						 		</div>	
						 		<div class="clearfix"></div>					  	
						 </div>

						<div class="blog-title border-bottom pb-10">
	        				<h3 class="title-blog upercase">{{ trans('language.passenger_detail') }}</h3>
	        			</div>
	        			<div class="form-group mtb-5">
	        				<div class="col-md-12 col-xs-12 col-sm-12">
						 	 {{ Form::label('fullname', trans('language.full_name'), array('class' => 'label_form_detail'))}}
						 	 {{Form::text("fullname", $value = null, $attributes = ['id'=>'fullname','class' => 'form-control ','placeholder'=>trans('language.full_name')])}}
						 	</div>
						 </div>
						 <div class="form-group mtb-5">
						 	<div class="col-md-6 col-xs-12 col-sm-12"> 
						 		{{ Form::label('age', trans('language.age'), array('class' => 'label_form_detail'))}}
						 	 	{{Form::number("age", $value = null, $attributes = ['id'=>'age','class' => 'form-control ','min'=>'1','max'=>'100','placeholder'=>trans('language.age')])}}
						 	</div>
						 	<div class="col-md-6 col-xs-12 col-sm-12"> 
						 	</div>
						 	 <div class="clearfix"></div>
						 </div>
						
	        			<div class="form-group mtb-5">
	        				<div class="col-md-6 col-xs-12 col-sm-12"> 
	        					{{ Form::label('phone_number', trans('language.phone_number'), array('class' => 'label_form_detail'))}}	        				
		        				<div class="form-tel">
							 	 	<input id="phone" type="tel">
							 	 </div>
	        				</div>
	        				<div class="col-md-6 col-xs-12 col-sm-12"> 
	        					{{ Form::label('email', trans('language.email'), array('class' => 'label_form_detail'))}}								 
							    <div class="input-group">
			                        <div class="input-group-prepend">
			                          <span class="input-group-text" id="basic-addon3"><i class="fa fa-envelope"></i></span>
			                        </div>
			                         {{Form::email("email", $value = null, $attributes = ['id'=>'email','class' => 'form-control ','placeholder'=>trans('language.enter_email')])}}
			                     </div>
	        				</div>
	        				<div class="clearfix"></div>
						 </div>
	        			<div class="blog-title border-bottom pb-10">
	        				<h3 class="title-blog upercase">{{ trans('language.billing_detail') }}</h3>
	        			</div>
	        			 <div class="form-group mb-20">
	        			 	<div class="col-md-6 col-xs-12 col-sm-12">
	        			 	 {{ Form::label('billing_address', trans('language.billing_address'), array('class' => 'label_form_detail'))}}
						 	 {{Form::text("billing_address", $value = null, $attributes = ['id'=>'note','class' => 'form-control ','placeholder'=>trans('language.billing_address')])}}
						 	</div>
						 	<div class="col-md-6 col-xs-12 col-sm-12">
						 		 {{ Form::label('billing_name', trans('language.billing_name'), array('class' => 'label_form_detail'))}}
						 	 {{Form::text("billing_name", $value = null, $attributes = ['id'=>'note','class' => 'form-control ','placeholder'=>trans('language.billing_name')])}}
						 	</div>
						 	<div class="clearfix"></div>
						 </div>
						 
					</div>
        		</div>
        		{!! Form::close() !!}
        	</div>
        	<div class="col-md-5 col-xs-12 col-sm-12"> 
        		<div class="summary-booking-blog mtb-10">
        			<div class="blog-title border-bottom pb-20">
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
<link rel="stylesheet" href="{{ asset('assets/js/int-phone/css/intlTelInput.css') }}">
<script src="{{ asset('assets/js/int-phone/intlTelInput.js') }}"></script>


<script src="{{ asset('assets/js/moment.js') }}"></script>
<script src="{{ asset('assets/js/collapse.js') }}"></script>
<script src="{{ asset('assets/js/transition.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap-datetimepicker.min.js') }}"></script>
  <script>
  	
	    $("#phone").intlTelInput({
	      // allowDropdown: false,
	      // autoHideDialCode: false,
	      // autoPlaceholder: "off",
	      // dropdownContainer: "body",
	      // excludeCountries: ["us"],
	      // formatOnDisplay: false,
	       geoIpLookup: function(callback) {
	         $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
	           var countryCode = (resp && resp.country) ? resp.country : "";
	           callback(countryCode);
	         });
	       },
	      // hiddenInput: "full_number",
	      initialCountry: "auto",
	      // nationalMode: false,
	      // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
	      // placeholderNumberType: "MOBILE",
	      // preferredCountries: ['cn', 'jp'],
	      // separateDialCode: true,
	      utilsScript: "{{ asset('assets/js/int-phone/utils.js') }}"
	    });
	      $(function () {
                $('#datetimepicker3').datetimepicker({
                    format: 'LT'
                });
                

            });
   
  </script>
@stop
