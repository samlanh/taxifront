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
                        <form class="default-form" action="{{ action('IndexController@result') }}">
							<div class="container">
								<div class="blogform">
									<div class="inlineform">
										<div id="pickuplocation-menu">
										  <input class="typeahead" type="text" placeholder="Pick up location">
										</div>
									</div>
									<div class="switcharrowbutton">
										<img src="{{ asset('assets/img/icon/switch-arrow-button.png') }}" />	
									</div>
									<div class="inlineform">
										<div id="droplocation-menu">
										  <input class="typeahead" type="text" placeholder="Drop location">
										</div>
									</div>
									<div class="inlineform">
										<input id="calendar" style="width: 100%">
										<input id="delyveryDate" name="delyveryDate" type="hidden" style="width: 100%">
									</div>
									<div class="inlineform">
										<button class="btn light">Book Now</button>
										<input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
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