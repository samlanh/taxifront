<!DOCTYPE html>
<html lang="en-us">
  <head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <title>The Bee Go</title>
	@yield('title')
    <link rel="shortcut icon" href="img/favicon.ico">

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
                    Login
                    </button>
                    
                  </div>
                  <!-- End Header-Login -->

                  <!-- Start Header-Language -->
                  <div class="header-language">
                    <button class="header-btn">
                    <i class="fa fa-globe"></i>
					<img src="{{ asset('assets/img/eng.png') }}" />
                  
                    </button>
                    <nav class="header-form">
                      <ul class="custom-list">
                        <li class="active"><a href="#"><img src="{{ asset('assets/img/eng.png') }}" /></a></li>
                        <li><a href="#"><img src="{{ asset('assets/img/kh.png') }}" /></a></li>
                        
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
					<a href="index.html">
					  <img src="{{ asset('assets/img/logo.png') }}" alt="logo">
					</a>
				  </div>
                <div class="col-lg-9">
                  <!-- Start Nav -->
                  <nav role="navigation">
                    <ul class="nav navbar-nav">
                      <li class="has-submenu">
                        <a href="index.html" class="active">Home</a>
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
	
	@yield('content')
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
						  <li class="tab-title active"><a href="#cartrans">Private Taxi</a></li>
						</ul>
					</div>
                    <ul class="custom-list tab-content-list">
					 <!-- Start Car-trans -->
                      <li class="tab-content active">
                        <form class="default-form">
							<div class="container">
								<div class="blogform">
									<div class="inlineform">
										<select data-placeholder="Pick up Location" class="chosen-select-deselect">
											<option value=""></option>
											<option>American Black Bear</option>
											<option>Asiatic Black Bear</option>
											<option>Brown Bear</option>
											<option>Giant Panda</option>
											<option selected>Sloth Bear</option>
											<option>Sun Bear</option>
											<option>Polar Bear</option>
											<option>Spectacled Bear gdddddd</option>
										  </select>
									</div>
									<div class="switcharrowbutton">
										<img src="{{ asset('assets/img/icon/switch-arrow-button.png') }}" />	
									</div>
									<div class="inlineform">
										<select data-placeholder="Pick up Location" class="chosen-select-deselect">
											<option value=""></option>
											<option value="American Black Bear">American Black Bear</option>
											<option value="American Black Bear">Asiatic Black Bear</option>
											<option value="American Black Bear">Brown Bear</option>
											<option value="American Black Bear">Giant Panda</option>
											<option value="American Black Bear">Sloth Bear</option>
											<option value="American Black Bear">Sun Bear</option>
											<option value="American Black Bear">Polar Bear</option>
											<option value="American Black Bear">Spectacled Bear</option>
										  </select>
									</div>
									<div class="inlineform">
										<input id="calendar" style="width: 100%">
										<input id="delyveryDate" name="delyveryDate" type="hidden" style="width: 100%">
									</div>
									<div class="inlineform">
										<button class="btn light">Book Now</button>
									</div>
								</div>
							</div>
                        </form>
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

          <!-- Start Partner -->
          <div class="col-lg-3 col-md-3 col-sm-3 company">
            <a href="#"><img src="{{ asset('assets/img/company1.png') }}" alt=""></a>
          </div>
          <!-- End Partner -->

          <!-- Start Partner -->
          <div class="col-lg-3 col-md-3 col-sm-3 company">
            <a href="#"><img src="{{ asset('assets/img/company2.png') }}" alt=""></a>
          </div>
          <!-- End Partner -->

          <!-- Start Partner -->
          <div class="col-lg-3 col-md-3 col-sm-3 company">
            <a href="#"><img src="{{ asset('assets/img/company3.png') }}" alt=""></a>
          </div>
          <!-- End Partner -->

          <!-- Start Partner -->
          <div class="col-lg-3 col-md-3 col-sm-3 company">
            <a href="#"><img src="{{ asset('assets/img/company4.png') }}" alt=""></a>
          </div>
          <!-- End Partner -->

        </div>
      </div>
    </section>
    <!-- End Partners -->

    <!-- Start Footer -->
    <footer id="footer">
      <div class="container">

          <!-- Start Preamble -->
          <div class="col-lg-12 preamble">
            <img src="{{ asset('assets/img/footer-logo.png') }}" alt="">
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
                  <button class="btn light">Sign Up</button>
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
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.ba-outside-events.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.placeholder.js') }}"></script>
	<script>
	$(document).ready(function() {
                    var dateValue = new Date('3/27/2018');
                    var events = [];
                        events = [
                          new Date("3/27/2018"),
						  new Date("3/28/2018"),
						  new Date("3/29/2018"),
						  new Date("3/30/2018"),
						  new Date("3/31/2018"),
						  new Date("4/1/2018"),
						  new Date("4/2/2018"),
						  new Date("4/3/2018"),
						  new Date("4/4/2018"),
                        ];

                  var datepicker = $("#calendar").kendoDatePicker({
						change: onChange,
                        value: dateValue,
                        dates: events,
                        footer: false,
                        dateInput: true,
						disableDates:true,
					    disableDates: function (date) {
							var dates = $("#calendar").data("kendoDatePicker").options.dates;
							if (date && compareDates(date, dates)) {
								return false;
							} else {
								return true;
							}
						},
						
					});
                  $("#calendar").attr("disabled","disabled");
					function compareDates(date, dates) {
						for (var i = 0; i < dates.length; i++) {
							if (dates[i].getDate() == date.getDate() &&
								dates[i].getMonth() == date.getMonth() &&
								dates[i].getYear() == date.getYear()) {
							  return true
							}
						}
					}
					
					function onChange() {
						var monthNames = [
						                  "Jan", "Feb", "Mar",
						                  "Apr", "May", "Jun", "Jul",
						                  "Aug", "September", "Oct",
						                  "Nov", "Dec"
						                ];
						var dayNames = [
						                  "Sun", "Mon", "Tue",
						                  "Wed", "Thu", "Fri", "Sat"
						                ];     
		                
						dateValue = kendo.toString(this.value());
						var valueda = new Date(dateValue);
						var month = valueda.getMonth()+1;
						if(month<=9){
							month="0"+month;
						}
						var noDate = valueda.getDate();
						if(noDate<=9){
							noDate="0"+noDate;
						}
						$("#delyveryDate").val(valueda.getDate()+'/'+valueda.getMonth()+'/'+valueda.getFullYear());
						
						
                    }
                });
	</script>
	@yield('script')
  </body>
</html>