@extends('sticky.layout.master')

@push('head')
    <link rel="stylesheet" href="{{get_theme_frontend_url('assets/sticky/css/learn-more.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <style>
        .panel-default:hover{
                transform: scale(1.03);
                transition: all .3s ease-in-out;
        }
        .panel-group__features .panel .panel-heading .panel-title .panel-title__heading .hgroup-panel h3{
            font-weight:bold;
        }
        .section-header{
    text-align: center;
    color: #320b82;
        }
        .pad-size {
          padding: 3px 25px;
          font-size: 20px;
        }
        .bac-pad {
          background: #211f1f; 
          padding: 40px;
        }
        .bac-col {
          background-color: #200846;
          color: #fff;
        }
        .h6-colo {
          color:#333;
        }
        .bac-bord {
          background:#3AB2E5;
          border:none;
        }
        .lin-grad-col {
          background:linear-gradient(-145deg, #320b82 0%, #9c33c3 100%);
          color:#fff;
        }
        .colo-red{
          color:red;
        }
        .pos-to-righ{
          position: fixed;
          top: 10%;
          right: 20px;
          width:300px;
        }
    </style>
    <style>
        .carousel-wrapper {
            width: 70vw;
            margin: auto;
            position: relative;
            text-align: center;
            font-family: sans-serif;
            margin-bottom :15px;
        }

        .carousel-wrapper h1 {
            text-align: center;
            margin: 10px;
            padding: 4px;
            color :white !important;
            font-family: Cairo;
            text-transform: uppercase;
        }


        .owl-theme .owl-dots .owl-dot.active span,
        .owl-theme .owl-dots .owl-dot:hover span {
            background: #5110e9;
        }


        .owl-carousel {
            text-align: center;
            border-radius: 20px;
            border: 9px solid #f8f8f8;
            padding: 4px;
        }

        .owl-carousel .item {
            text-align: center;
            border-radius: 4px;
            border: 1px solid #ccc;
            padding: 12px;
        }

        .owl-carousel .nav-button {
            text-align: center;
            line-height: 1;
            height: 25px;
            width: 25px;
            cursor: pointer;
            position: absolute;
            bottom: 50% !important;
            background: #3b1c80 !important;
        }

        .owl-carousel .owl-prev.disabled,
        .owl-carousel .owl-next.disabled {
            pointer-events: none;
            opacity: 0.25;
        }
         .owl-carousel .owl-prev {
            left: 0px;
        }

        .owl-carousel .owl-next {
            right: 0px;
        }
        .owl-carousel .prev-carousel:hover {
            background-position: 0px -53px;
        }

        .owl-carousel .next-carousel:hover {
            background-position: -24px -53px;
        }

        .owl-carousel .item .owl-item-description {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            padding: 0;
            margin: 0;
            color:#000;
        }
        .nav-pills .nav-link.active, .nav-pills .show>.nav{
            background: #f9c412!important;
            color: #320b82;
            border-radius: 5px;
        }
        .social_share{
            text-align:center;
            color:#fff;
            font-size:1.1rem;
            color:#fff;
        }
        .social_share i{
            padding:5px;
            border-radius:50%;
        }
         .social_share a .fa-facebook{
            background:#02549F;
            color:#fff;
        }
        .social_share a .fa-linkedin{
            background:#006699;
            color:#fff;
        }
        .social_share a .fa-google{
            background:#c32aa3;
            color:#fff;
        }
        .social_share a .fa-twitter{
            background:#00ACED;
            color:#fff;
        }
        .social_share a .fa-whatsapp{
            background:#5cbe4a;
            color:#fff;
        }
        .social_share a .fa-facebook-messenger{
            background:#0084ff;
            color:#fff;
        }
        #btndownload{
            height: 35px;
            border-radius: 5px;
            font-size: 1.5rem;
            font-weight: 600;
            background: #f9c412 !important;
            color: #320b82;
        }
        #container > div.container > div{
            border-radius: 58px;
            border-bottom: 9px solid #f8f8f8;
        }
        .item >a ,#thanksContainer{
            color: white;
            font-family: Cairo;
        }
    </style>

@endpush

@section('page-wrapper')
@include('sticky.layout.partials.common.homeBanner')
@endsection

@section('body')
    <section class="page-section" id="section-features">
		<div class="container">
						<div class="row">
						<!-- Accordion (Features) -->
						<div class="panel-group panel-group__features panel-icon__effect2 col-md-9 mt-2">
							<!-- Panel #1 -->
							    <div class="row">
									   <div class="panel panel-default col-md-6">
								<!-- Panel Heading -->
								<div class="panel-heading box_shadow my-2" role="tab" id="heading4-1">
									<div class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion4" href="#collapse4-1" aria-expanded="false" aria-controls="collapse4-1">
											<div class="row">
												<div class="col-md-3 col-sm-1 col-xs-1 panel-title__number center-content">01</div>
												<div class="col-md-6 col-sm-8 col-xs-9 panel-title__heading center-content">
													<div class="v-center">
														<div class="v-center-inner text-center">
															<div class="hgroup-panel">
																<h3 class='section-header'> {{__('learn_more_account_management')}} </h3>
															</div>
														</div>
													</div>
												</div>
												<div class="col-md-3 col-sm-2 hidden-xs center-content">
													<div class="circled-icon ">
													    <img src="{{get_theme_frontend_url('assets/sticky/images/Accounts-Management.png')}}" class='img-fluid'>
													</div>
												</div>
												<div class="col-md-12 col-xs-12 panel-title__desc center-content">
													<div class="v-center">
														<div class="v-center-inner text-center">
                                  {{__('learn_more_social')}}
														</div>
													</div>
												</div>
											</div>
										</a>
									</div>
								</div>
							
									   </div>
							<!-- Panel #1 / End -->
	
							<!-- Panel #2 -->
										<div class="panel panel-default col-md-6">
								<!-- Panel Heading -->
								<div class="panel-heading box_shadow my-2" role="tab" id="heading4-2">
									<div class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion4" href="#collapse4-2" aria-expanded="false" aria-controls="collapse4-2">
											<div class="row">
												<div class="col-md-3 col-sm-1 col-xs-1 panel-title__number center-content">02</div>
												<div class="col-md-6 col-sm-8 col-xs-9 panel-title__heading center-content">
													<div class="v-center">
														<div class="v-center-inner text-center">
															<div class="hgroup-panel">
																<h3> {{__('learn_more_team')}} </h3>
															</div>
														</div>
													</div>
												</div>
												<div class="col-md-3 col-sm-2 hidden-xs center-content">
													<div class="circled-icon ">
													    <img src="{{get_theme_frontend_url('assets/sticky/images/Teammem.png')}}" class='img-fluid'>
													</div>
												</div>
												<div class="col-md-12 col-xs-12 panel-title__desc center-content">
													<div class="v-center">
														<div class="v-center-inner text-center">
                                                      {{__('learn_more_team_member')}}
														</div>
													</div>
												</div>
											</div>
										</a>
									</div>
								</div>
							
										</div>
							<!-- Panel #2 / End -->
	
							<!-- Panel #3 -->
										<div class="panel panel-default col-md-6">
								<!-- Panel Heading -->
								<div class="panel-heading box_shadow my-2" role="tab" id="heading4-3">
									<div class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion4" href="#collapse4-3" aria-expanded="false" aria-controls="collapse4-3">
											<div class="row">
												<div class="col-md-3 col-sm-1 col-xs-1 panel-title__number center-content">03</div>
												<div class="col-md-6 col-sm-8 col-xs-9 panel-title__heading center-content">
													<div class="v-center">
														<div class="v-center-inner text-center">
															<div class="hgroup-panel">
																<h3>{{__('learn_more_storage')}}</h3>
															</div>
														</div>
													</div>
												</div>
												<div class="col-md-3 col-sm-2 hidden-xs center-content">
													<div class="circled-icon ">
												                 	    <img src="{{get_theme_frontend_url('assets/sticky/images/Reports.png')}}" class='img-fluid'>
												                	</div>
												</div>
												</div>
												<div class="col-md-12 col-xs-12 panel-title__desc center-content">
													<div class="v-center">
											 			<div class="v-center-inner text-center">
                                     {{__('learn_more_own_space')}}
													</div>
												</div>
											</div>
										</a>
									
								</div>
								</div>
							
										</div>
							<!-- Panel #3 / End -->
										<!-- Panel #4 -->
										<div class="panel panel-default col-md-6">
											<!-- Panel Heading -->
											<div class="panel-heading box_shadow my-2" role="tab" id="heading4-4">
												<div class="panel-title">
													<a data-toggle="collapse" data-parent="#accordion4" href="#collapse4-4" aria-expanded="false" aria-controls="collapse4-4">
														<div class="row">
															<div class="col-md-3 col-sm-1 col-xs-1 panel-title__number center-content">04</div>
															<div class="col-md-6 col-sm-8 col-xs-9 panel-title__heading center-content">
																<div class="v-center">
																	<div class="v-center-inner text-center">
																		<div class="hgroup-panel">
																			<h3>   {{__('learn_more_watermark')}} </h3>
																		</div>
																	</div>
																</div>
															</div>
															<div class="col-md-3 col-sm-2 hidden-xs center-content">
																 <div class="circled-icon ">
												                 	    <img src="{{get_theme_frontend_url('assets/sticky/images/copyrights.png')}}" class='img-fluid'>
												                	</div>
															</div>
															</div>
															<div class="col-md-12 col-xs-12 panel-title__desc center-content">
																<div class="v-center">
																	<div class="v-center-inner text-center">
                                                            {{__('learn_more_watermark_2')}}
															</div>
														</div>
														</div>
													</a>
												
											
											</div>
										
										</div>
										</div>
										
										<!-- Panel #4 / End -->
				
										<!-- Panel #5 -->
										<div class="panel panel-default col-md-6">
                                                <!-- Panel Heading -->
                                                <div class="panel-heading box_shadow my-2" role="tab" id="heading4-5">
                                                    <div class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion4" href="#collapse4-5" aria-expanded="false" aria-controls="collapse4-5">
                                                            <div class="row">
                                                                <div class="col-md-3 col-sm-1 col-xs-1 panel-title__number center-content">05</div>
                                                                <div class="col-md-6 col-sm-8 col-xs-9 panel-title__heading center-content">
                                                                    <div class="v-center">
                                                                        <div class="v-center-inner text-center">
                                                                            <div class="hgroup-panel">
                                                                                <h3> {{__('learn_more_reports')}}  </h3>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3 col-sm-2 hidden-xs center-content">
                                                                    <div class="circled-icon ">
												                 	    <img src="{{get_theme_frontend_url('assets/sticky/images/Capacity.png')}}" class='img-fluid'>
												                	</div>
                                                                </div>
                                                                <div class="col-md-12 col-xs-12 panel-title__desc center-content">
                                                                    <div class="v-center">
                                                                        <div class="v-center-inner text-center">
                                                                           {{__('learn_more_month_report')}}
                                                                      </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                              
                                            </div>
										<!-- Panel #5 / End -->
				
										<!-- Panel #6 -->
										<div class="panel panel-default col-md-6">
											<!-- Panel Heading -->
											<div class="panel-heading box_shadow my-2" role="tab" id="heading4-6">
												<div class="panel-title">
													<a data-toggle="collapse" data-parent="#accordion4" href="#collapse4-6" aria-expanded="false" aria-controls="collapse4-6">
														<div class="row">
															<div class="col-md-3 col-sm-1 col-xs-1 panel-title__number center-content">06</div>
															<div class="col-md-6 col-sm-8 col-xs-9 panel-title__heading center-content">
																<div class="v-center">
																	<div class="v-center-inner text-center">
																		<div class="hgroup-panel">
																			<h3>{{__('learn_more_auto')}} </h3>															
																		</div>
																	</div>
																</div>
															</div>
															<div class="col-md-3 col-sm-2 hidden-xs center-content">
																<div class="circled-icon ">
												             	    <img src="{{get_theme_frontend_url('assets/sticky/images/auto-activities.png')}}" class='img-fluid'>
												            	</div>
															</div>
															<div class="col-md-12 col-xs-12 panel-title__desc center-content">
																<div class="v-center">
																	<div class="v-center-inner text-center">
                                                          {{__('learn_more_premium')}}
																</div>
															</div>
														</div>
														</div>
													</a>
												</div>
											</div>
										
										</div>
										<!-- Panel #6 / End -->
											<!-- Panel #7 -->
											<!-- Panel #7 / End -->
										<div class="col-12 text-center">
										    <a href="{{get_url('register')}}" class="price-btn pad-size">{{__('rep-buy')}}</a>
										</div>
									</div>
						</div>
						<!-- Accordion (Features) / End -->
	                    <div class="col-sm-12 col-md-6 col-lg-3 mt-3">
                         <?php echo file_get_contents('https://crmmrkt.com/ContentController/template/17/'.getCurrentLangIdiom()); ?>
 
                        </div>
                        
				        </div>
				</section>
				 <div class="my-3">
                @include('sticky.layout.partials.common.pricing')

        </div>
       @include('sticky.layout.partials.common.reviews')
    
    
    </div><!-- /.page-wrapper -->
    </section>
@endsection


@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
function initCarousel({
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        responsiveClass: true,
        center: true,
        nav: true,
        lazyLoad : true,
        autoplay: true,
        dots: false,
        navText: ["<div class='nav-button owl-prev'>‹</div>", "<div class='nav-button owl-next'>›</div>"],
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 3,
            },
            1000: {
                items: 5,
            }
        }
    
    })
    })
</script>
@endpush