@extends('sticky.layout.master')
@push('head')
   <link rel="stylesheet" href="css/style_english.css">
  <style>
    @media (max-width: 567px){
        .single-pricing-one {
            width: 275px !important;
        }
        }
        .single-pricing-one{
            height:auto !important;
            margin: auto;
        }
        .site-header {
            background-image: linear-gradient(-145deg,#320b82 0,#9c33c3 100%);
        }
        .bg-blue {
            background: linear-gradient(90deg,#42b0ff,#4262ff);
            border-radius: 5px;
        }
        .bottom-block p{
            font-size:14px!important;
        }
        .single-pricing-one ul.feature-lists li{
           font-size:14px!important;
        }
        .single-pricing-one ul.feature-lists {
            direction: ltr;
            height: 315px;
        }
    </style>
@endpush
@section('page-wrapper')

@endsection
@section('body')
    <div class="page-wrapper">
     @include('sticky.layout.partials.common.homeBanner')
     <section class="page-section" id="section-features">
			<div class="container">
				<div class="row  justify-content-center">
				 <ul class="nav nav-tabs tab-title m-0 pt-5" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link" href="#annual" role="tab" data-toggle="tab">{{__('rep-year')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#monthly" role="tab" data-toggle="tab">{{__('rep-month')}}</a>
                    </li>
                </ul>
                <div class="tab-content">
                  <div role="tabpanel" class="tab-pane show active" id="monthly">
				    <div class="col-lg-2 col-md-4 col-sm-6 col-12 my-5">
                                <div class="single-pricing-one">
                                    <div class="top-block" style="direction: ltr;">
                                        <h2 style=""> {{__('sup-pro')}} </h2>

                                        <p class="price m-0" style="direction: rtl;">
                                                    @switch($ipData['geoplugin_countryName'])
                                                        @case ('Egypt')
                                                        750 EGP
                                                        @break;
                                                        @case ('United Arab Emirates')
                                                        174 Dirham
                                                        @break;
                                                        @case ('Saudi Arabia')
                                                        119 Riyal
                                                        @break;
                                                        @default
                                                        47$
                                                    @endswitch
                                        </p>


                                        <div class="line"></div><!-- /.line -->
                                    </div><!-- /.top-block -->
                                    <ul class="feature-lists text-left">
                                        <li><span style="color:#f00">*</span>{{__('rep-man-up')}} <span style="font-weight:bold;font-size:16px"> 70 </span> {{__('sup-pages')}} </li>
                                            <li><span style="color:#f00">*</span>{{__('rep-unlim')}}</li>
                                            <li><span style="color:#f00">*</span>{{__('pro-des')}}</li>
                                            <li><span style="color:#f00">*</span>{{__('rep-up-to-50')}}</li>
                                            <li><span style="color:#f00">*</span>{{__('eco-copy')}}</li>
                                            <li><span style="color:#f00">*</span>{{__('rep-reports')}}</li>
                                            <li><span style="color:#f00">*</span>{{__('rep-auto-a')}} </li>
                                            <li><span style="color:#f00">*</span> {{__('sup-comp-inf')}} </li>
                                            <li><span style="color:#f00">*</span> {{__('pro-add-prev')}} </li>
                                            <li><span style="color:#f00">*</span> {{__('sup-free-lap')}} </li>
                                            <li><span style="color:#f00">*</span> {{__('sup-add-int')}} </li>
                                            <li><span style="color:#f00">*</span> {{__('pro-don-tas')}} </li>
                                            <li><span style="color:#f00">*</span>{{__('pro-land-pag')}}</li>
                                  
                                    </ul><!-- /.feature-lists text-left -->
                                    <div class="bottom-block">
                                        <a href="{{get_url('back_to_business')}}">{{__('rep-learn')}}</a>
                                        <a href="{{get_url('register')}}" class="price-btn" style="cursor: pointer;">{{__('rep-buy')}}</a>
                                        <h5 class="tag-line text-center" style="color:#310150;background: #eee;padding: 6px;margin: 0;">{{__('rep-no-fees')}} <br> {{__('rep-cancel')}}</h5>
                                        <p>{{__('rep-free-trial')}}</p>     

                                    </div><!-- /.bottom-block -->
                                </div><!-- /.single-pricing-one -->
                    </div>
		        </div>
		         <div role="tabpanel" class="tab-pane fade" id="annual">
                    <div class="col-lg-2 col-md-4 col-sm-6 col-12 my-5">
                      <div class="single-pricing-one">
                                    <div class="top-block" style="direction: ltr;">
                                        <h2 style="">{{__('sup-pro')}}</h2>
                 <p class="price m-0" style="direction: rtl;">

                     @switch($ipData['geoplugin_countryName'])
                         @case ('Egypt')
                         6999 EGP
                         @break;
                         @case ('United Arab Emirates')
                         1829 Dirham
                         @break;
                         @case ('Saudi Arabia')
                         1200 Riyal
                         @break;
                         @default
                         498$
                     @endswitch
                 </p>
                                        <div class="line"></div><!-- /.line -->
                                    </div><!-- /.top-block -->
                                    <ul class="feature-lists text-left">
                                       <li><span style="color:#f00">*</span>{{__('rep-man-up')}}<span style="font-weight:bold;font-size:16px"> 70 </span> {{__('sup-pages')}}</li>
                                            <li><span style="color:#f00">*</span>{{__('rep-unlim')}}</li>
                                            <li><span style="color:#f00">*</span>{{__('pro-des')}}</li>
                                            <li><span style="color:#f00">*</span>{{__('rep-up-to-50')}}</li>
                                            <li><span style="color:#f00">*</span>{{__('eco-copy')}}</li>
                                            <li><span style="color:#f00">*</span>{{__('rep-reports')}}</li>
                                            <li><span style="color:#f00">*</span>{{__('rep-auto-a')}} </li>
                                            <li><span style="color:#f00">*</span>{{__('sup-comp-inf')}} </li>
                                            <li><span style="color:#f00">*</span>{{__('pro-add-prev')}}</li>
                                            <li><span style="color:#f00">*</span> {{__('sup-free-lap')}}</li>
                                            <li><span style="color:#f00">*</span>{{__('sup-add-int')}} </li>
                                            <li><span style="color:#f00">*</span>{{__('pro-don-tas')}}  </li>
                                            <li><span style="color:#f00">*</span>{{__('pro-land-pag')}}</li>
                                  
                                    </ul><!-- /.feature-lists text-left -->
                                    <div class="bottom-block">
                                        <a href="{{get_url('back_to_business')}}">{{__('rep-learn')}}</a>
                                        <a href="{{get_url('register')}}" class="price-btn" style="cursor: pointer;">{{__('rep-buy')}}</a>
                                        <h5 class="tag-line text-center" style="color:#310150;background: #eee;padding: 6px;margin: 0;">{{__('rep-no-fees')}} <br>{{__('rep-cancel')}}</h5>
                                        <p>{{__('rep-free-trial')}}</p>           
                                    </div>
                                    </div><!-- /.bottom-block -->
                                    <!-- /.single-pricing-one -->
                          <div class="card package w-100 mt-3">
                                    <div class="card-body bg-white text-dark package-second-card">
                                        <h5 class="card-text mb-3 text-center">
                                         <span>  {{__('pro-inst')}}  </span>
                                         <input type="number" id="downpayment" placeholder="4999" class="provider-input" name="downpayment" value="1000" autocomplete="false" style="border: 0.5px solid rgb(225, 225, 225);width:33%;font-size:14px;">
                                         <span>L.E</span>
                                        </h5>
                                        
                                        <div class="custom-control custom-radio text-center w-100">
                                            <input type="radio" id="profRadio1" name="customRadio" class="custom-control-input">
                                            <label class="custom-control-label fs-14" for="profRadio1">
                                                <span class="price">
                                                    2250
                                                </span>
                                                {{__('pro-pounds')}}
                                                /
                                                <span class="price">
                                                    3
                                                </span>
                                                {{__('pro-mon')}}
                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio text-center w-100">
                            <input type="radio" id="profRadio2" name="customRadio" class="custom-control-input">
                            <label class="custom-control-label fs-14" for="profRadio2">
                                <span class="price">
                                    2450
                                </span>
                                {{__('pro-pounds')}}
                                /
                                <span class="price">
                                    6
                                </span>
                                {{__('pro-mon')}}
                            </label>
                        </div>
                        
                                        <div class="custom-control custom-radio text-center w-100">
                                            <input type="radio" id="profRadio1" name="customRadio" class="custom-control-input">
                                            <label class="custom-control-label fs-14" for="profRadio1">
                                                <span class="price">
                                                    1250
                                                </span>
                                                {{__('pro-pounds')}}
                                                /
                                                <span class="price">
                                                    12
                                                </span>
                                                {{__('pro-mon')}}
                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio text-center w-100">
                                                <input type="radio" id="profRadio2" name="customRadio" class="custom-control-input">
                                                <label class="custom-control-label fs-14" for="profRadio2">
                                                    <span class="price">
                                                        1000
                                                    </span>
                                                    {{__('pro-pounds')}}
                                                    /
                                                    <span class="price">
                                                        18
                                                    </span>
                                                    {{__('pro-mon')}}
                                                </label>
                                            </div>
                                            
                                    </div>
                                    <div class="card-footer px-0 bg-blue border-0 p-0">
                                        <a class="text-white font-weight-bold d-block mx-3 p-2 text-center"
                                        href="{{get_url('register')}}">
                                        {{__('pro-install')}}
                                        </a>
                                    </div>
                                </div>       	
		          </div>
		      </div>
		      </div>
		      </div>
		  </div>
		</section>
    </div><!-- /.page-wrapper -->
    
@endsection
@push('scripts')
  @include('sticky.layout.partials.popups')
@endpush
