<!DOCTYPE html>
@php
$urlFromBack = Config::get('constants.myConstant.weburlpart');
@endphp
 <?php 
 
  $loca="";
              if (!empty($Location)){
                  $loca='';
                   foreach ($Location as $key => $value){
                      if (empty($loca)) {

                        $loca = "'".$value->locationName."'";
                      }else{
                        $loca = $loca.","."'".$value->locationName."'";
                      }

                   }
               }
            
          ?>
<html lang="en-us">
  <head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    
	@yield('title')
    <link rel="shortcut icon" href="{{ $urlFromBack.'/icon.ico'}}">

    <!-- GOOGLE FONTS
    <link href='//fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Crimson+Text' rel='stylesheet' type='text/css'>-->
    
    <!-- STYLESHEETS-->
    <link href="{{ asset('assets/js/chosen/chosen.min.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/owl.carousel.css') }}" rel="stylesheet">
	
	<link rel="stylesheet" href="{{ asset('assets/kendo/styles/kendo.common-material.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/kendo/styles/kendo.material.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/kendo/styles/kendo.material.mobile.min.css') }}" />

    
	<link href="{{ asset('assets/js/typeahead/typeahead.css') }}" rel="stylesheet">    
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">
   
    
    <!--[if lte IE 9]>
      <script src="js/respond.min.js" type="text/javascript"></script>
    <![endif]-->
	@yield('style')
  </head>
  <!----class="enable-fixed-header"--->
  <body >

    <!-- Start Header -->
    <header id="header" class="triangle">

      <!-- Menu toggle Mobile -->
      <label id="toggle" class="toggle"></label>
		<!-- Start Header-Inner -->
        <div class="header-inner cleafix">
          <!-- Start Header-Tool-Bar -->
          <div class="header-tool-bar">
            <div class="container">
              <div class="row">
                <!-- Start Header-Left -->
                <div class="col-lg-4 col-md-5 col-xs-12 header-left">

                  <!-- Start Header-Contact -->
                  <ul class="custom-list header-contact">
                    <li>
                      <i class="fa fa-phone"></i>
                      +1 (123) 456-7890
                    </li>
                    <li>
                      <i class="fa fa-envelope"></i>
                        <a href="mailto:example@example.com">
                        example@example.com
                        </a>
                    </li>
                  </ul>
                  <!-- End Header-Contact -->
                </div>
                <!-- End Header-Left -->

                <!-- Start Header-Right -->
                <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12 col-lg-offset-4 col-md-offset-2 header-right">

                  <!-- Start Social -->
                  <ul class="header-social custom-list">
                    <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                  </ul> 
                  <!-- End Social -->

                  <!-- Start Header-Login -->
                  <div class="header-login">
                    <button class="header-btn">
                    <i class="fa fa-key"></i>
                    {{ trans('language.sign_in') }}
                    </button>
                    
                  </div>
                  <!-- End Header-Login -->

                  <!-- Start Header-Language -->
                  <div class="header-language">
                    <button class="header-btn">
                    <i class="fa fa-globe"></i>
                    
                    @if(App::getLocale()=="en")
                          <img src="{{ asset('assets/img/eng.png') }}" />
                     @else
                      <img src="{{ asset('assets/img/kh.png') }}" />
                   @endif
                  
                    </button>
                    <nav class="header-form">
                      <ul class="custom-list">
                        <li class="<?php  if(App::getLocale()=="en"){ echo "active"; }?>"><a href="javascript:;" onclick="changeLang('en')"><img src="{{ asset('assets/img/eng.png') }}" /></a></li>
                        <li class="<?php  if(App::getLocale()=="km"){ echo "active"; }?>"><a href="javascript:;" onclick="changeLang('km')"><img src="{{ asset('assets/img/kh.png') }}" /></a></li>
                      </ul>
                    </nav>
                  </div>
                  <!-- End Header-Language -->

                </div>
                <!-- End Header-Right -->

              </div>
            </div>
          </div>
          <!-- End Header-tool-bar -->

          <!-- Start Header-Nav -->
          <div class="header-nav">
            <div class="container">
              <div class="row">
				  <div class="col-lg-3">
					<a href="{{ url('/') }}">
					  <img src="{{ asset('assets/img/logo.png') }}" alt="logo">
					</a>
				  </div>
                <div class="col-lg-9">
                  <!-- Start Nav -->
                  <nav role="navigation">
                    <ul class="nav navbar-nav">
                      <li class="has-submenu">
                        <a href="index.html" class="active">{{ trans('language.home') }}</a>
                        <ul class="sub-menu custom-list">
                          <li><a href="index2.html">Homepage 2</a></li>
                          <li><a href="index3.html">Homepage 3</a></li>
                          <li><a href="index4.html">Homepage 4</a></li>
                          <li><a href="index5.html">Homepage 5</a></li>
                        </ul>
                      </li>
                      <li class="has-submenu">
                        <a href="#">Our fleet</a>
                        <ul class="sub-menu custom-list">
                          <li><a href="fleet_list.html">Fleet List</a></li>
                          <li><a href="fleet_grid.html">Fleet Grid</a></li>
                          <li><a href="fleet_unit_details.html">Fleet Unit Details</a></li>
                        </ul>
                      </li>
                      <li><a href="drivers.html">Drivers</a></li>
                      <li class="has-submenu">
                        <a href="locations.html">Locations</a>
                        <ul class="sub-menu custom-list">
                          <li><a href="#">Australia</a></li>
                          <li class="has-submenu">
                            <a href="#">Europe</a>
                            <ul class="sub-menu custom-list">
                              <li><a href="#">Monaco</a></li>
                              <li class="has-submenu">
                                <a href="#">Germany</a>
                                <ul class="sub-menu custom-list">
                                  <li><a href="#">Berlin</a></li>
                                  <li><a href="#">Hamburg</a></li>
                                </ul>
                              </li>
                              <li><a href="#">Norway</a></li>
                              <li><a href="#">Portugal</a></li>
                            </ul>
                          </li>
                          <li><a href="#">United Arab Emirates</a></li>
                          <li><a href="#">United States</a></li>
                        </ul>
                      </li>
					  <li class="has-submenu">
						<a href="about.html">About</a>
						  <ul class="sub-menu custom-list">
							<li><a href="shortcodes.html">Shortcodes</a></li>
						  </ul>
						</li>
						<li><a href="testimonials.html">Testimonials</a></li>
						<li class="has-submenu">
						  <a href="news.html">News</a>
						  <ul class="sub-menu custom-list">
							<li><a href="single_post.html">Single New Post</a></li>
						  </ul>
						</li>
						<li class="has-submenu">
						  <a href="#">Contact</a>
						  <ul class="sub-menu custom-list">
							<li><a href="contact1.html">Contact 1</a></li>
							<li><a href="contact2.html">Contact 2</a></li>
						  </ul>
						</li>
                    </ul>
                    <!--<ul class="nav navbar-nav navbar-right">
                    
					</ul>-->
                  </nav>
                  <!-- End Nav -->

                </div>
              </div>
            </div>
          </div>
          <!-- End Header-Nav -->

        </div>
        <!-- End Header-Inner -->
    </header>
    <!-- End Header -->
	
	
	<section class="section-search">
    <!-- Start Banner -->
      <div id="banner">
        <div class="banner-bg">       
          <div class="banner-bg-item"><img src="{{ asset('assets/img/banner-bg-4.jpg') }}" alt=""></div>
        </div>
    <div class="opactiyblog"></div>
      </div>
      <!-- End Banner -->
    <div class="css-table">
          <div class="css-table-cell">
            <!-- Start Banner-Search -->
            <div class="banner-search">
              <div class="">
                  <div id="hero-tabs" class="banner-search-inner">
          <div class="container">
            <ul class="custom-list tab-title-list clearfix">
              <li class="tab-title active"><a href="#cartrans">{{ trans('language.private_taxi') }}</a></li>
            </ul>
          </div>
                    <ul class="custom-list tab-content-list">
           <!-- Start Car-trans -->
                      <li class="tab-content active">
                        
                        {!! Form::open(['url' => 'search','id'=>'private_taxi','class'=>'default-form','method'=>'GET']) !!}
                            <div class="container">
                              <div class="blogform">
                                <div class="inlineform">
                                  <div id="pickuplocation-menu">
                                    <input class="typeahead" type="text" value="{{ app('request')->input('from_location') }}" name="from_location" placeholder="{{ trans('language.pick_up_location') }}">
                                  </div>
                                </div>
                                <div id="switchlocation" class="switcharrowbutton">
                                  <img src="{{ asset('assets/img/icon/switch-arrow-button.png') }}" />  
                                </div>
                                <div class="inlineform">
                                  <div id="droplocation-menu">
                                    <input class="typeahead" type="text" value="{{ app('request')->input('to_location') }}" name="to_location" placeholder="{{ trans('language.drop_location') }}">
                                  </div>
                                </div>
                                @php 
                                $pickupDate = date("Y/m/d");
                                  if(app('request')->has('pickupdate')){
                                      $pickupDate = app('request')->input('pickupdate');
                                  }
                                @endphp
                                <div class="inlineform">
                                  <input id="calendar" style="width: 100%">
                                  <input id="pickupdate" name="pickupdate" value="{{ $pickupDate }}" type="hidden" style="width: 100%">
                                </div>
                                <div class="inlineform">
                                  <button class="btn light">{{ trans('language.find_vihecle') }}</button>                      
                                </div>
                              </div>
                            </div>
                       {!! Form::close() !!}
                      </li>
                      <!-- End Car-trans -->
                    </ul>
                </div>
              </div>
            </div>
            <!-- End Banner-Search -->

          </div>
        </div>
  </section>

	@yield('content')
	
    <!-- Start Footer -->
    <footer id="footer">
      <div class="container">

          <!-- Start Preamble -->
          <div class="col-lg-12 preamble">
            <img src="{{ asset('assets/img/logo.png') }}" alt="">
          </div>
          <!-- End Preamble -->

          <!-- Start Footer-Content -->
          <div class="footer-content">
            <div class="row">

              <!-- Start Widget-About -->
              <div class="col-lg-4 col-md-4 widget widget-about">
                <h5>About Us</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus. Phasellus pharetra nulla ac diam. Etiam sit amet lectus quis est congue mollis.</p>
              </div>
              <!-- End Widget-About -->

              <!-- Start Widget-Newsletter -->
              <div class="col-lg-4 col-md-4 widget widget-newsletter">
                <h5>Newsletter</h5>
                <form class="default-form">
                  <input type="text" name="newsletter" placeholder="Your Email Here">
                  <button class="btn light">{{ trans('language.sign_up') }}</button>
                </form>
              </div>
              <!-- End Widget-Newsletter -->

              <!-- Start Widget-social -->
              <div class="col-lg-4 col-md-4 widget widget-social">
                <div class="findUs">
					<ul>
						<li><a target="blank" title="Facebook" href="https://www.facebook.com/aplusfreshshop?pnref=story"><img src="{{ asset('assets/img/fb-find-us.png') }}"></a></li>
						<li><a target="blank" title="Twitter" href="https://twitter.com"><img src="{{ asset('assets/img/twitter-find-us.png') }}"></a></li>
						<li><a title="Customer serivce" href="/public/index/information"><img src="{{ asset('assets/img/ge-customer-service.png') }}"></a></li>
					</ul>
				</div>
				<div class="paymentlist">
					<ul>
						<li><a target="blank" title="Facebook" href="https://www.facebook.com/aplusfreshshop?pnref=story"><img src="{{ asset('img/paypal.png') }}"></a></li>
						<li><a target="blank" title="Twitter" href="https://twitter.com"><img src="{{ asset('assets/img/visa.png') }}"></a></li>
						<li><a title="Customer serivce" href="/public/index/information"><img src="{{ asset('assets/img/mastercard.png') }}"></a></li>
						<li><a title="Customer serivce" href="/public/index/information"><img src="{{ asset('assets/img/westernunion.png') }}"></a></li>
					</ul>
				</div>
              </div>
              <!-- End Widget-social -->

             
            </div>
        </div>
      </div>
      <!-- End Footer-Content -->

      <!-- Start Footer-Copyrights -->
      <div class="footer-copyrights">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <p>Copyright 2018 © The Bee Go. All rights reserved.</p>
            </div>
          </div>
        </div>
      </div>
      <!-- End Footer-Copyrights -->

    </footer>
    <!-- End Footer -->

    <a href="#" class="btn" id="back-to-top"><i class="fa fa-arrow-up"></i></a>
    <!-- SCRIPTS-->
    <script src="{{ asset('assets/js/jquery-1.9.1.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('assets/js/chosen/chosen.jquery.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assets/js/chosen/init.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assets/kendo/js/kendo.all.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.vide.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-ui-1.10.4.custom.min.js') }}"></script>
    
    <script src="{{ asset('assets/js/jquery.ba-outside-events.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.placeholder.js') }}"></script>
	<script src="{{ asset('assets/js/typeahead/typeahead.bundle.js') }}"></script>
	<script>
    var states = [];
          var states = [<?php echo $loca;?>];

         
         
	$(document).ready(function() {
					console.log(states);
          
        //   jQuery.ajax({
        //       url: "{{ URL::to('/location') }}",
        //       type: 'POST',
        //       data: {},
        //       dataType: 'JSON',
        //       success: function (data) {
        //            var states = $.map(data, function(value, index) {
        //               return [data[index].locationName];
        //           });
        //           //alert(states);
        //          console.log(states);
        //       },
        //       error: function(e) {
        //         console.log(e.responseText);
        //       }
        //   });

                });
	</script>
  <script src="{{ asset('assets/js/script-custome.js') }}"></script>
  <script src="{{ asset('assets/js/script.js') }}"></script>
  
	@yield('script')
  </body>
</html>