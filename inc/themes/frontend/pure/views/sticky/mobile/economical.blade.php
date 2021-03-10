@extends('sticky.layout.master')
@push('head')
 <link rel="stylesheet" href="css/style_english.css">
    <style>
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
    </style>
@endpush
@section('page-wrapper')

@endsection
@section('body')
    <div class="page-wrapper">
        @include('sticky.layout.partials.common.homeBanner')
        <section class="page-section" id="section-features">
			<div class="container">
				<div class="row justify-content-center">
				    <ul class="nav nav-tabs tab-title m-0 pt-5 col-12 d-flex  justify-content-center border-0 align-items-center" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link" href="#annual" role="tab" data-toggle="tab">{{__('rep-year')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#monthly" role="tab" data-toggle="tab">{{__('rep-month')}} </a>
                    </li>
                   </ul>
                    <div class="tab-content ">
                        <div role="tabpanel" class="tab-pane fade in show active" id="monthly">
    				      <div class="col-lg-2 col-md-4 col-sm-6 col-12 my-5">
                            <div class="single-pricing-one">
                                <div class="top-block" style="direction: ltr;">
                                    <h2>{{__('rep-econ')}} </h2>
                                        <p class="price m-0" style="direction: rtl;">
                                         @switch($ipData['geoplugin_countryName'])
                                            @case('Egypt')
                                            99 L.E
                                            @break
                                            @case('United Arab Emirates')
                                            23 AED
                                            @break
                                            @case('Saudi Arabia')
                                            24 Riyal
                                            @break
                                            @default
                                            6$
                                        @endswitch
                                       </p>
                                         <div class="line"></div><!-- /.line -->
                                </div><!-- /.top-block -->
                                <ul class="feature-lists text-left">
                                    <li><span style="color:#f00">*</span>{{__('rep-man-up')}}<span style="font-weight:bold;font-size:16px">7</span></li>
                                    <li><span style="color:#f00">*</span>{{__('rep-unlim')}}</li>
                                            <li><span style="color:#f00">*</span> {{__('gen-Gen')}} </li>
                                    <li><span style="color:#f00">*</span>{{__('rep-up-to-50')}}</li>
                                    <li><span style="color:#f00">*</span>{{__('rep-property')}} </li>
                                    <li><span style="color:#f00">*</span>{{__('rep-reports')}}</li>
                                    <li><span style="color:#f00">*</span>{{__('rep-auto-a')}} <span style="padding:5px;color:#f00">{{__('rep-extra')}} </span></li>
                                </ul><!-- /.feature-lists text-left -->
                                <div class="bottom-block">
                                    <a href="{{get_url('register')}}" class="price-btn" style="cursor: pointer;">{{__('rep-buy')}}</a>
                                    <h5 class="tag-line text-center">{{__('rep-no-fees')}} <br> {{__('rep-cancel')}}</h5>
                                    <p>{{__('rep-free-trial')}}</p>
                                </div><!-- /.bottom-block -->
                            </div><!-- /.single-pricing-one -->
                        </div>
    		            </div>
    		            <div role="tabpanel" class="tab-pane fade" id="annual">
                            <div class="col-lg-2 col-md-4 col-sm-6 col-12 my-5">
                             <div class="single-pricing-one">
                                      <div class="top-block" style="direction: ltr;">
                                         <h2>{{__('rep-econ')}}</h2>
                                         <p class="price m-0" style="direction: rtl;">
                                          @switch($ipData['geoplugin_countryName'])
                                            @case('Egypt')
                                            1045 L.E
                                            @break
                                            @case('United Arab Emirates')
                                            244 AED
                                            @break
                                            @case('Saudi Arabia')
                                            251 Riyal
                                            @break
                                            @default
                                            67$
                                        @endswitch
                                        </p>

                                        <div class="line"></div><!-- /.line -->
                                    </div><!-- /.top-block -->
                                      <ul class="feature-lists text-left">
                                        <li><span style="color:#f00">*</span>{{__('rep-man-up')}} <span style="font-weight:bold;font-size:16px">7</span></li>
                                        <li><span style="color:#f00">*</span>{{__('rep-unlim')}}</li>
                                        <li><span style="color:#f00">*</span> {{__('gen-Gen')}} </li>
                                        <li><span style="color:#f00">*</span>{{__('rep-up-to-50')}}</li>
                                        <li><span style="color:#f00">*</span> {{__('eco-copy')}} </li>
                                        <li><span style="color:#f00">*</span>{{__('rep-reports')}}</li>
                                        <li><span style="color:#f00">*</span>{{__('rep-auto-a')}} <span style="padding:5px;color:#f00">{{__('rep-extra')}} </span></li>
                                    </ul><!-- /.feature-lists text-left -->
                                      <div class="bottom-block">
                                          <a href="{{get_url('learn_more')}}">{{__('rep-learn')}}</a>
                                          <a href="{{get_url('register')}}" class="price-btn" style="cursor: pointer;">{{__('rep-buy')}}</a>
                                          <h5 class="tag-line text-center">{{__('rep-no-fees')}} <br> {{__('rep-cancel')}}</h5>
                                          <p>{{__('rep-free-trial')}}</p>
                                    </div><!-- /.bottom-block -->
                                     </div><!-- /.single-pricing-one -->
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
        