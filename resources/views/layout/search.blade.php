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
                        
                        {!! Form::open(['url' => '/search','id'=>'private_taxi','class'=>'default-form','method'=>'GET']) !!}
                            <div class="container">
                              <div class="search-blogmessage">
                                
                              </div>
                              <div class="blogform">
                                <div class="inlineform">
                                  <div id="pickuplocation-menu">
                                      <input class="typeahead" id="from_location" type="text" value="{{ app('request')->input('from_location') }}" name="from_location" placeholder="{{ trans('language.pick_up_location') }}">
                                    </div>
                                  </div>                               
                                <div id="switchlocation" class="switcharrowbutton">
                                  <img src="{{ asset('assets/img/icon/switch-arrow-button.png') }}" />  
                                </div>
                                <div class="inlineform">
                                  <div id="droplocation-menu">
                                    <input class="typeahead" id="to_location" type="text" value="{{ app('request')->input('to_location') }}" name="to_location" placeholder="{{ trans('language.drop_location') }}">
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
                                  {{Form::button(trans('language.find_vihecle'), ['id'=>'btnfindtaxi','class' => 'btn light'])}}
                                                        
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