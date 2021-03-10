@extends('sticky.layout.master')
@push('head')
    <link rel="stylesheet" href="{{get_theme_frontend_url('assets/sticky/css/replay_en.css')}}">
    <link rel="stylesheet" href="{{get_theme_frontend_url('assets/sticky/css/postGenerator.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <style>
        .single-pricing-one ul.feature-lists{
            height:auto!important;
        }
        .gen-comp-a{
            text-decoration:underline;
            color:#fff;
        }
        .col-mar {
            color: #fff;
            margin: 0;
        }
        .pos-rel {
            position: relative;
        }
        .gen-soc {
            font-size: 1.7rem !important;
        }
        .gen-one {
            font-size: 1.55rem !important;
            margin-bottom: 10px;
        }
        .dis-just {
            display: flex;
            justify-content: center;
        }
        .bor-rad {
            border-radius: 5px 0px 0px 5px;
        }
        .mail-rad {
            border-radius: 0px 5px 5px 0px;
        }
        .gen-3{
            color:#fff;
            margin:0 0 3px;
        }
        .gen-cancel{
            color:#fff;
            line-height: 1;
        }
        .gen-man {
            font-size: 2.4rem !important;
            font-weight: 900;
            margin: 0;
        }
        .gen-design {
            color:#fff;
            margin:0;
            font-size: 1.55rem;
        }
        .IMAGES2 {
            position: absolute;
            left: 2%;
            bottom: 48%; 
            width: 10%;
        }
        .gen-form {
            font-size: 1.55rem !important;
            margin:0;
        }
        .gen-comp-div{
            margin-top: .6rem;
            font-size: .9rem; 
            font-weight: 700;
        }
        .gen-com-a {
            color:#fff; 
            text-decoration: underline;
        }
        .gen-cred {
            color:#fff;
            margin:0 3px!important;
            font-size: 1rem;
        }
        .gen-cancel-p {
            color:#fff;
            line-height: 1;
            margin:0 3px!important;
            font-size: 1rem;
        }
        .gen-Gen {
            color:#320b82;
        }
        .font-1-3 {
            font-size: 1.3rem;
        }
        .gen-ben {
            color: #320b82;
            font-size: 2rem;
        }
        .just-dis-hei {
            justify-content: center;
            display: flex;
            flex-direction: column;
            height: 100%;
        }
        .featuresFlex {
            display: flex;
            justify-content: center;
            flex-direction: column;
            height: 100%;
        }
        .pricingTransform{
            transform: rotate(180deg);
            background:linear-gradient(270deg, #320b82 0%, #9c33c3 100%);
            padding:25px 0 20px
        }
        .pricingTransform180{
            transform: rotate(180deg);
        }
        .modelBackground{
            background: rgba(0, 0, 0, 0.7);
            padding-top: 60px;
        }
        .modelLinearGradient {
            background: linear-gradient(275deg, #5e2298, #320b82);
            color:#fff;
        }
        .modelWidth{
            width: 49px;
            z-index: 10;
        }
        .modelButton {
            position: absolute;
            top: 12px;
            right: 18px;
        }
        .paddingX{
            padding:0 16px;
        }
        .marginY{
            margin: 10px 0;
        }
        .modelReso{
            color:#f9c412;
            font-weight:bold;
        }
        .colorWhite{
            color:#fff;
        }
        .alignItems {
            align-items: center;
        }
        .formContent{
            margin: 0;
            font-size: 12px;
        }
        .height24{
            height: 24px;
        }
        .inputSubmit{
            height: 35px;border-radius: 5px;
            font-size: 1.5rem;
            font-weight: 600;
            background: #f9c412 !important;
            color: #320b82;
        }
        .displayFlex{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        .displayFlexCenter{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .inputPass{
            margin: 0;
            font-size: 10px;
        }
        .displayFlexBetween {
            display:flex;
            justify-content: space-between;
        }
        .smallMarginLeft{
            font-size:10px ;
            margin-left:15px
        }
        .smallMarginRight{
            font-size:10px ;
            margin-right:15px
        }
        .featuresListHeight{
            height: 175px;
            padding-top: 10%;
        }
        .width192{
            width: 192px;
        }
        .directionLTR {
            direction: ltr;
        }
        .cursorPointer{
            cursor: pointer;
        }
        .slick-track{
        transform: translate3d(0px, 0px, 0px)!important;
         }
        @media (max-width: 567px) {
            .single-pricing-one {
                width: 240px !important;
                height: 335px !important;
                margin: 10px auto;
            }
            .banner-style-one.home-page-two {
                padding: 70px 0px 30px!important;
            }
        }
            @media (min-width: 1200px) {
                .highlights-phone.wht .phone-holder #fon {
                    background-position-x: -29px;
                    background-position-y: 23px;
                }
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

@endsection
@section('body')
    <div class="page-wrapper posts_generator {{  getCurrentLangIdiom() == 'ar' ? 'text-right'  : '' }}">
        <section class="banner-style-one home-page-two pos-rel" id="banner">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7 col-md-8 col-12 text-center hide-mobile">
                        <!--<img src="images/logo-1-2.png" alt="Awesome Image" width=""/>-->
                        <div class="content-block">

                            <h4 class="col-mar">{{__('gen-des')}} </h4>
                            <h3 class="gen-soc">{{__('gen-soc')}}</h3>
                            <h3 class="gen-one">{{__('gen-one')}}
                               <span class="font-weight-bold">
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
                                {{__('monthly')}}
                                </span>
                            </h3>    
                            <div class="subform mb-2">
                                <form id="signup" class="formee signuptrial dis-just" style="{{  getCurrentLangIdiom() == 'ar' ? 'direction:ltr'  : '' }}" method="post">
                                    <input class="right inputnew bor-rad" type="submit" title="Send" value="{{__('btn_start_free_trial')}}"/>
                                    <input type="hidden" value="postGeneratorPage" name="type">
                                    <input name="email" id="email" class="mail-rad" type="email" placeholder="{{__('gen-mail')}}" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required/>
                                </form>
                            </div>
                            <div class="form-note">
                                <p class="gen-3">{{__('gen-3')}}</p>
                                <p class="gen-cancel">{{__('gen-cancel')}}</p>
                            </div>
                        </div><!-- /.content-block -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-7 col-md-8 col-12 {{  getCurrentLangIdiom() == 'ar' ? 'text-right'  : '' }} view-mobile">
                        <div class="content-block">
                            <h3 class="gen-man">{{__('gen-man')}} </h3>
                            <h4 class="gen-design">{{__('gen-Design')}} </h4>
                            <h3 class="gen-form"> {{__('gen-from')}} 
                            <span class="font-weight-bold">
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
                                </span>{{__('monthly')}}
                            </h3>
                            <div class="subform my-2">
                                <a class="submit  {{  getCurrentLangIdiom() == 'ar' ? 'py-2'  : 'py-3' }} px-3" href="{{get_url('register')}}"> {{__('gen-start')}}</a>
                            </div>
                            <div class="gen-comp-div">
                                <a href="{{get_url('pricing')}}" id="compar" class="gen-comp-a"> {{__('gen-comp')}}  </a>
                            </div>
                            <div class="form-note">
                                <p class="gen-cred"> {{__('gen-cred')}}</p>
                                <p class="gen-cancel-p">{{__('gen-cancel')}}</p>
                            </div>
                        </div><!-- /.content-block -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.banner-style-one -->
        <div class="client-section">
            <div class="container text-center">
                <div class="clients">
                    <div class="single">
                        <img src="https://stickyposts.net/sticky/images/client1.png" class='none' alt="Client"/>
                        <img src="https://stickyposts.net/sticky/images/client1-c.png" class="color" alt="Client"/>
                    </div>
                    <div class="single">
                        <img src="https://stickyposts.net/sticky/images/client3.png" class='none' alt="Client"/>
                        <img src="https://stickyposts.net/sticky/images/client3-c.png" class="color" alt="Client"/>
                    </div>
                    <div class="single">
                        <img src="https://stickyposts.net/sticky/images/client5.png" class='none' alt="Client"/>
                        <img src="https://stickyposts.net/sticky/images/client5-c.png" class="color" alt="Client"/>
                    </div>
                    <div class="single">
                        <img src="https://stickyposts.net/sticky/images/client6.png" class='none' alt="Client"/>
                        <img src="https://stickyposts.net/sticky/images/client6-c.png" class="color" alt="Client"/>
                    </div>
                    <div class="single">
                        <img src="https://stickyposts.net/sticky/images/client4.png" class='none' alt="Client"/>
                        <img src="https://stickyposts.net/sticky/images/client4-c.png" class="color" alt="Client"/>
                    </div>
                    <div class="single">
                        <img src="https://stickyposts.net/sticky/images/client2.png" class='none' alt="Client"/>
                        <img src="https://stickyposts.net/sticky/images/client2-c.png" class="color" alt="Client"/>
                    </div>
                    <div class="single">
                        <img src="https://stickyposts.net/sticky/images/client7.png" class='none' alt="Client"/>
                        <img src="https://stickyposts.net/sticky/images/client7-c.png" class="color" alt="Client"/>
                    </div>
                </div>
            </div>
        </div>
        <div class="container T-container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-7 col-md-7 col-sm-6 order-lg-1 order-md-1 order-2 d-lg-block d-md-block d-none">
                    <div class="text-center">
                        <h2 class="gen-Gen">{{__('gen-Gen')}} </h2>
                        <h5 class="section-head" class="font-1-3">{{__('gen-Create')}} <span class="font-weight-bold">{{__('gen-free')}}</span>
                        </h5>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-6 order-lg-1 order-md-1 order-2 d-lg-none d-md-none d-block">
                    <div class="text-center">
                        <h2 class="gen-Gen">{{__('gen-Gen')}} </h2>
                        <h4 class="section-head font-1-3">{{__('gen-create2')}}</h4>

                    </div>
                </div>
                <div class="col-lg-4 col-md-5 col-sm-6 order-lg-2 order-md-2 order-1">
                    <img class="img-fluid" src="{{get_theme_frontend_url('assets/sticky/images/dashboard/MultiDevicesWebsiteMockups.png')}}">
                </div>
            </div>
            <div class="row" id="benefits">
                <div class="col-sm-6 col-md-5 col-lg-3 my-auto">
                   <?php echo file_get_contents('https://crmmrkt.com/ContentController/template/15/'.getCurrentLangIdiom());?>
                </div>
                <div class="col-sm-6 col-md-7 col-lg-9  hide-mobile">
                    <div id="features" class="section wb">
                        <div class="container">

                            <div id="default" class="row clearfix zenith_slider p-0">

                                <!--The First row-->
                                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 pr-0 left-row">
                                    <ul class="features-left text-start just-dis-hei">
                                        <li class="highlight lhgh" data-index="0">
                                            <img src="{{get_theme_frontend_url('assets/sticky/images/mobileslider/Create.png')}}">
                                            <div class="fl-inner">
                                                <h4>{{__('gen-c')}} </h4>
                                                <p>{{__('gen-plat')}}</p>
                                            </div>
                                        </li><!-- .highlight .left-row -->

                                        <li class="highlight lhgh" data-index="1">
                                            <img src="{{get_theme_frontend_url('assets/sticky/images/mobileslider/Choose.png')}}">
                                            <div class="fl-inner">
                                                <h4>{{__('gen-choose')}}</h4>
                                                <p>{{__('gen-unlim')}}</p>
                                            </div>
                                        </li><!-- .highlight .left-row -->
                                        <li class="highlight lhgh" data-index="2">
                                            <img src="{{get_theme_frontend_url('assets/sticky/images/mobileslider/Upload.png')}}">
                                            <div class="fl-inner">
                                                <h4>{{__('gen-up')}}</h4>
                                                <p>{{__('gen-mater')}}</p>
                                            </div>
                                        </li><!-- .highlight .left-row -->

                                    </ul>
                                </div><!-- .row .left-row -->

                                <div class="highlights-phone col-lg-4 col-md-4 col-sm-12 col-xs-12 wht">

                                    <div class="phone-holder">
                                        <div id="fon"></div>
                                        <div class="hgh-linner hgi" data-index="0">
                                            <img width="190" height="320" src="{{get_theme_frontend_url('assets/sticky/images/mobileslider/phone/Create.jpg')}}"
                                                 class="attachment-highlight wp-post-image" alt="screen"/>
                                        </div>
                                        <div class="hgh-linner hgi" data-index="1">
                                            <img width="234" height="398" src="{{get_theme_frontend_url('assets/sticky/images/mobileslider/phone/CHOOSE.jpg')}}"
                                                 class="attachment-highlight wp-post-image" alt="screensdst"/>
                                        </div>
                                        <div class="hgh-rinner hgi" data-index="2">
                                            <img width="234" height="398" src="{{get_theme_frontend_url('assets/sticky/images/mobileslider/phone/upload.jpg')}}"
                                                 class="attachment-highlight wp-post-image" alt="screen_08"/>
                                        </div>
                                        <div class="hgh-rinner hgi" data-index="3">
                                            <img width="234" height="398"
                                                 src="{{get_theme_frontend_url('assets/sticky/images/mobileslider/phone/Best results.jpg')}}"
                                                 class="attachment-highlight wp-post-image" alt="screen_06"/>
                                        </div>
                                        <div class="hgh-rinner hgi" data-index="4">
                                            <img width="234" height="398"
                                                 src="{{get_theme_frontend_url('assets/sticky/images/mobileslider/phone/Unlimited users.jpg')}}"
                                                 class="attachment-highlight wp-post-image" alt="screen_06"/>
                                        </div>
                                        <div class="hgh-rinner hgi" data-index="5">
                                            <img width="234" height="398" src="{{get_theme_frontend_url('assets/sticky/images/mobileslider/phone/share.jpg')}}"
                                                 class="attachment-highlight wp-post-image" alt="screen_06"/>
                                        </div>
                                    </div>
                                </div>

                                <!--The Second row -->
                                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 pl-0 right-row">
                                    <ul class="features-right text-start featuresFlex">
                                        <li class="highlight rhgh" data-index="3">
                                            <img src="{{get_theme_frontend_url('assets/sticky/images/mobileslider/best-Results.png')}}">
                                            <div class="fr-inner">
                                                <h4>{{__('gen-Best')}}</h4>
                                                <p>{{__('gen-edit')}}</p>
                                            </div>
                                        </li><!-- .highlight .left-row -->
                                        <li class="highlight rhgh" data-index="4">
                                            <img src="{{get_theme_frontend_url('assets/sticky/images/mobileslider/unlimited-users.png')}}">
                                            <div class="fr-inner">
                                                <h4>{{__('gen-use')}}</h4>
                                                <p>{{__('gen-add')}}</p>
                                            </div>
                                        </li><!-- .highlight .left-row -->
                                        <li class="highlight rhgh" data-index="5">
                                            <img src="{{get_theme_frontend_url('assets/sticky/images/mobileslider/Share.png')}}">
                                            <div class="fr-inner">
                                                <h4>{{__('gen-sh')}}</h4>
                                                <p>{{__('gen-pub')}}</p>
                                            </div>
                                        </li><!-- .highlight .left-row -->
                                    </ul>
                                </div><!-- .row .left-row -->

                            </div><!--Highlights close-->
                        </div><!-- end container -->
                    </div><!-- end section -->

                </div>
            </div>
        </div>
        <section class="pricing-style-one home-page-two hide-mobile mt-3 pricingTransform" id="pricing">
            <div class="container-fluid pricingTransform180">
                <div class="block-title text-center text-light">
                    <h4 class="text-white">{{__('gen-need')}}</h4>
                </div><!-- /.block-title -->
                <div class='row p-0 justify-content-center'>
                    <div class="col-sm-4 col-md-4 col-lg-2 p-1">
                        <div class="single-pricing-one pro-pack" class="card-height">
                            <div class="top-block directionLTR">
                                <h2>{{__('gen-Gen')}} </h2>
                            </div><!-- /.top-block -->
                            <ul class="feature-lists text-start py-3 featuresListHeight">
                                <li><span class="text-danger">*</span> {{__('gen-eas')}}</li>
                                <li><span class="text-danger">*</span> {{__('gen-opt')}}</li>
                                <li><span class="text-danger">*</span> {{__('gen-brand')}} </li>
                                <li><span class="text-danger">*</span> {{__('gen-want')}} </li>
                                <li><span class="text-danger">*</span> {{__('gen-users')}}</li>
                                <li><span class="text-danger">*</span> {{__('gen-use-des')}} </li>
                                <li><span class="text-danger">*</span> {{__('gen-final')}} </li>
                            </ul><!-- /.feature-lists text-right -->
                            <div class="bottom-block">

                                <a href="{{get_url('register')}}"
                                   class="price-btn cursorPointer">{{__('gen-gin')}}</a>
                                <h5 class="tag-line text-center"> {{__('gen-nf')}}<br> {{__('gen-cancel')}}    </h5>
                                <p> {{__('gen-3f')}} </p>
                            </div><!-- /.bottom-block -->
                        </div><!-- /.single-pricing-one -->
                    </div>
                </div>
                
            </div>
        </section><!-- /.pricing-style-one -->
        <div class="modal fade loaders bd-example-modal-lg modelBackground" tabindex="-1" role="dialog"
             aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog miniDialog" role="document">
                <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
                <!--    <span aria-hidden="true">&times;</span>-->
                <!--  </button>-->
                <div class="modal-content" modelLinearGradient>
                    <div class="modal-header pl-2 p-1">
                        <img src="logo-s.png" class="modelWidth">

                        <button type="button" class="close modelButton" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div id="modal-body" class="text-center">
                        <div class="lds-ring">
                            <img src="logo-s.png')}}">
                        </div>

                        <div class="modal-body paddingX"></div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.page-wrapper -->
    <div class="modal fade bd-example-modal-lg modelBackground" id="myModal" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog miniDialog" role="document">
            <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
            <!--    <span aria-hidden="true">&times;</span>-->
            <!--  </button>-->
            <div class="modal-content" modelLinearGradient>
                <div class="modal-header pl-2 p-1">
                    <img src="logo-s.png" class="modelWidth">

                    <button type="button" class="close modelButton" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>

                <div id="modal-bodyres" class="text-center marginY">
                    <h3 class='text-center colorWhite'> Get Resources <span class="modelReso">free </span></h3>
                    <div class="row my-row m-0 px-2">
                        <div class="col-sm-7">
                            <div class="page-links nav nav-pills mb-4" id="pills-tab" role="tablist">
                                <a id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                                   aria-controls="pills-home" aria-selected="true"
                                   class="ml-auto mr-3 model-tabs active">{{__('gen-log')}}</a>

                                <a id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
                                   aria-controls="pills-profile" aria-selected="false"
                                   class='mr-3 model-tabs '>{{__('gen-reg')}}</a>
                            </div>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                     aria-labelledby="pills-home-tab">
                                    <form class="login directionLTR" method="post">

                                        <input type="hidden" name="lang" value="en">
                                        <input type="hidden" name="page" value="">

                                        <div class="form-group row mb-1 ml-auto alignItems">
                                            <label class="col-4 p-0 formContent"> <span class="text-danger">*</span>{{__('gen-mail')}}</label>
                                            <div class="col-8">
                                                <input type="email" class="form-control height24" name="mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-1 ml-auto alignItems">
                                            <label class="col-4 p-0 formContent"> <span class="text-danger">*</span>{{__('gen-pass')}}</label>
                                            <div class="col-8">
                                                <input type="password" class="form-control height24" name="pass" required>
                                            </div>
                                        </div>
                                        <div class="form-group mb-0  row  mt-3 text-center displayFlex">
                                            <button class="submit mb-0 ml-0 inputSubmit" type="submit" name="login"
                                                    name="login" id="sub"> {{__('gen-gin')}} </button>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                     aria-labelledby="pills-profile-tab">
                                    <form class="formres directionLTR" method="post">
                                        <input type="hidden" name="lang" value="en">
                                        <input type="hidden" name="page" value="<?php echo $page4599;?>">
                                        <div class="form-group row mb-1  ml-auto">
                                            <label class="col-4 p-0 formContent"> <span class="text-danger">*</span>{{__('gen-fn')}}</label>
                                            <div class="col-8">
                                                <input type="text" class="form-control height24" name="fn7" required>
                                            </div>

                                        </div>
                                        <div class="form-group row mb-1  ml-auto alignItems">
                                            <label class="col-4 p-0 formContent"> <span class="text-danger">*</span>{{__('gen-ln')}}</label>
                                            <div class="col-8">
                                                <input type="text" class="form-control height24" name="ln7" required>
                                            </div>

                                        </div>
                                        <div class="form-group row mb-1 ml-auto alignItems">
                                            <label class="col-4 p-0 formContent"> <span class="text-danger">*</span> {{__('gen-mail')}} </label>
                                            <div class="col-8">
                                                <input type="email" class="form-control height24" name="em7" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-1 ml-auto alignItems">
                                            <label class="col-4 p-0 formContent"> <span class="text-danger">*</span>{{__('gen-pass')}}</label>
                                            <div class="col-8">
                                                <input type="password" class="form-control height24" name="pass" required>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-1 ml-auto alignItems">
                                            <label class="col-4 p-0 inputPass"> <span class="text-danger">*</span> {{__('gen-cpass')}} </label>
                                            <div class="col-8">
                                                <input type="password" class="form-control height24" name="Cpass" required>
                                            </div>
                                        </div>
                                        <div class="form-group mb-0  row  mt-3 text-center displayFlex">
                                            <button class="submit mb-0 ml-0 inputSubmit" type="submit" name="signin"
                                                    name="submit" id="sub"> {{__('gen-gin')}} </button>
                                        </div>
                                    </form>
                                    location
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-5 pl-0 text-center displayFlexCenter">
                            <img src="{{get_theme_frontend_url('assets/sticky/images/rescopopup.png')}}" class="width192">

                        </div>
                    </div>
                    <div displayFlexBetween>
                        <small class='text-start smallMarginLeft'>* {{__('gen-safe')}} </small>
                        <small class='text-right smallMarginRight'><span class="text-danger">*</span> {{__('gen-req')}} </small>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    @include('sticky.layout.partials.popups')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
@endpush
