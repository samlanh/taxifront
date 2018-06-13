@extends('layout.main')
@php
$urlFromBack = Config::get('constants.myConstant.weburlpart');
@endphp

@section('title')
	<title>{{trans('language.transfer_from')}}</title>
@stop

@section('style')
	
@stop

@section('content')
	
    <section class="vehicle-list">
      <div class="container">
        <div class="row">
              
          <!-- Start Fleet-Listing -->
          <div class="col-lg-12">
            <div class="fleet-listing">

              <!-- Start Fleet-List -->
				@foreach ($data as $vehicle)
                <div class="vechicle-list">
                  <div class="col-md-3 col-xs-12 col-sm-12  thumb">
                    <div class="overlay">
                      <img src="{{ $urlFromBack.'/all/'.$vehicle->vhicleImages }}" alt="">
                      
                    </div>
                  </div>
                  <div class="col-md-6 col-xs-12 col-sm-12 content fleet-vechicle-content">
                    <header class="vechicle-header">
						<div class="vechicle-header-left">
							<h5><img src="{{ $urlFromBack.'/all/supplyerlogo/'.$vehicle->supplierLogo }}" /> {{ $vehicle->supplierCompany }} </h5>
						</div>
						<?php if(!empty($vehicle->discount)){?>
						<div class="vechicle-header-right">
							<span class="block-discount">16% off</span>
						</div>
						<?php }?>                      
                    </header>
                    <div class="col-lg-12">
						
							<div class="option-car">
								<ul>
									<li title="{{ trans('language.passengers') }}"><i class="fa fa-user" aria-hidden="true"></i>&nbsp; {{$vehicle->amountSeat}} {{ trans('language.passengers') }}</li>
									<li title="{{ trans('language.bags') }}"><i class="fa fa-briefcase" aria-hidden="true"></i>&nbsp; {{$vehicle->amountCase}}  {{ trans('language.bags') }}</li>
									<li title="{{ trans('language.vihecle_type') }}"><i class="fa fa-car" aria-hidden="true"></i>&nbsp; {{$vehicle->vehicleType}}</li>
								</ul>
							</div>
							<div class="description">
								<p>{{$vehicle->description}}</p>
							</div>
					
						
					</div>
                  </div>
				  <div class="col-md-3 col-xs-12 col-sm-12 text-center  blog-price">
						<div class="vehicle-row-price">
							<?php if(!empty($vehicle->discount)){?>
							<span class="price old-price">USD {{$vehicle->price}}</span>
								<br />
							<span class="price">USD {{$vehicle->price}}</span>
							<?php }else{?>
								<span class="price">USD {{$vehicle->price}}</span>
							<?php }?>
						</div>
						<div class="row-button">	
							<button class="btn light book-btn">{{ trans('language.book_now') }}</button>
						</div>
					</div>
				 
				  <div class="clearfix"></div>                 
                </div>
				 @endforeach

               
				
              <!-- End Fleet-List -->

              <!-- Start Fleets-Listing-Footer -->
              <div class="listing-footer clearfix">
                <ul class="custom-list vechicle-listing-pagination pull-right">
                  <li class="prev"><a href="#">Previous</a></li>
                  <li class="number"><a href="#" class="active">1</a></li>
                  <li class="number"><a href="#">2</a></li>
                  <li class="number"><a href="#">3</a></li>
                  <li class="number"><a href="#">4</a></li>
                  <li class="next"><a href="#">Next</a></li>  
                </ul>
              </div>
              <!-- End Fleets-Listing-Footer -->

            </div>
          </div>
          <!-- End Section Fleet Listing -->

        </div>
      </div>
    </section>
    <!-- End Section Fleets -->
	
@stop

@section('script')
@stop
