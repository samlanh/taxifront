@extends('layout.main')
<?php 
	$urlFromBack = Config::get('constants.myConstant.weburlpart');
?>

@section('title')
	<title>The Bee Go</title>
@stop

@section('style')
	
@stop

@section('content')

@include('layout.search')
	 <!-- Start About -->
    <section class="about">
      <div class="container">
        <div class="row">

          <!-- Start Preamble -->
          <div class="col-lg-12 preamble">
            <h3>About The Bee Go</h3>
            <img src="{{ asset('assets/img/divisor.png') }}" alt="" class="divisor">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus. Phasellus pharetra nulla ac diam. Quisque semper justo at risus. Donec venenatis, turpis vel hendrerit interdum, dui ligula ultricies purus, sed posuere libero dui id orci. Nam congue, pede vitae dapibus aliquet, elit magna vulputate arcu, vel tempus metus leo non est.</p>
          </div>
          <!-- End Preamble -->

          

        </div>
      </div>
    </section>
    <!-- End About -->
	
	<section class="choose-taxi" ><!--style=" background-image: url('/img/choosetaxi.jpg');"-->
		<div class="row">
			<div class="col-sm-6 pt-5">
				<!------<img src="img/choosetaxi1.png">-------->
			</div>
			<div class="col-sm-6 choose-contant">
			   <div class="choose-iteam">
				   <div>
					   <h4>
						   Why Choose TAXI Cab !
					   </h4>
				   </div>
				   <div class="mb-4">
					   Lorem ipsum dolor sit amet, consectetur adipiscing elit. Obsecro, <br>inquit, Torquate, haec dicit Epicurus?
				   </div>
				   <div class="row">
					   <div class="col-sm-1">
						   <i class="fa fa-taxi" aria-hidden="true"></i>
					   </div>
					   <div class="col-sm-11">
						   <div>
							   <h5>
								   Awesome Taxi Services
							   </h5>
							   <p class="choose-text">
								   Sed tu istuc dixti bene Latine, parum plane. Fortasse id optimum, sed ubi <br> illud: Plus semper voluptatis? Cum autem negant ea quicquam ad beatam<br> vitam pertinere,
							   </p>
						   </div>
					   </div>

				   </div>
				   <div class="row">
					   <div class="col-sm-1">
						   <i class="fa fa-map-marker" aria-hidden="true"></i>
					   </div>
					   <div class="col-sm-11">
						   <div>
							   <h5>
								   Awesome Taxi Services
							   </h5>
							   <p class="choose-text">
								   Sed tu istuc dixti bene Latine, parum plane. Fortasse id optimum, sed ubi <br> illud: Plus semper voluptatis? Cum autem negant ea quicquam ad beatam<br> vitam pertinere,
							   </p>
						   </div>
					   </div>

				   </div>
				   <div class="row">
					   <div class="col-sm-1">
						   <i class="fa fa-user" aria-hidden="true"></i>
					   </div>
					   <div class="col-sm-11">
						   <div>
							   <h5>
								   Awesome Taxi Services
							   </h5>
							   <p class="choose-text">
								   Sed tu istuc dixti bene Latine, parum plane. Fortasse id optimum, sed ubi <br> illud: Plus semper voluptatis? Cum autem negant ea quicquam ad beatam<br> vitam pertinere,
							   </p>
						   </div>
					   </div>

				   </div>
			   </div>
			</div>
		</div>
	</section>

   
    
   
    

    <!-- Start Partners -->
    <section class="partners">
      <div class="container">
        <div class="row">
        
          <!-- Start Preamble -->
          <div class="col-lg-12 preamble">
            <h5>Our Partners</h5>
          </div>
          <!-- End Preamble -->
          <?php 
          		foreach ($data as $key => $value) {
		  ?>
          <!-- Start Partner -->
          
          <div class="col-lg-2 col-md-2 col-sm-2" style="margin-bottom: 50px;">
            <p title="{{$value->supplyerName}}"><a href="<?php if(!empty($value->website))echo 'http://'.$value->website ?>"><img class="partnerimg" src="{{ $urlFromBack.'/all/supplyerlogo/'.$value->logo }}" alt=""></a>
            </p>
          </div>
      	  
          <!-- End Partner -->
          <?php }?>
          <!-- End Partner -->

        </div>
      </div>
    </section>
    <!-- End Partners -->
@stop

@section('script')
@stop
