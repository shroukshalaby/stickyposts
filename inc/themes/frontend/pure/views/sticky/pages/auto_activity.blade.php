@extends('sticky.layout.master')
@push('head')
  <link rel="stylesheet" href="{{get_theme_frontend_url('assets/sticky/css/replay_en.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <style>
        .paddingleftAndFontSize {
            font-size: 14px;
            padding: 0 6px;
        }
        .highlight {
          height: 100px;
        }
        .single-pricing-one ul.feature-lists{
            height:auto!important;
        }
        .itemParagraph{4
            margin: 0;
            padding: 0 3px;
            font-size: 1.5rem;
            font-weight:700;
        }
        .itemCaption{
            font-size: 1.2rem;
            line-height: 1.5;
        }
        .colorsAndFonts{
            color:#320b82;
            font-size:2.5rem;
        }
        .darkColor{
            color:#320b82;
        }
        .newTransform {
            transform: rotate(180deg);
            background:linear-gradient(270deg, #320b82 0%, #9c33c3 100%)!important;
            padding:25px 0 20px;
        }
        .justTransform {
            transform: rotate(180deg);
        }
        .fontSize16{
            font-size:16px
        }
        .padding5{
            padding: 5px;
        }
        .cursorPointerr{
            cursor: pointer;
        }
        @media(max-width:567px){
            .section-2 .item{
                height:auto!important;
            }
        .newTransform {
            transform: rotate(0);
            background:transparent!important;
            padding:0px!important;
        }
        .pricing-style-one {
         padding:0px!important;
         padding-bottom: 0px!important;
        }
        .section-2 .item .caption {
            font-size: 18px!important;
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
        .nav-pills .nav-link.active, .nav-pills .show>.nav{
            background: #f9c412!important;
            color: #320b82;
            border-radius: 5px;
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
    @include('sticky.layout.partials.common.autoActivityBanner')

    <div class="page-wrapper auto_activity {{  getCurrentLangIdiom() == 'ar' ? 'text-right'  : '' }}">
        <div class="section-2 p-0 mt-2 text-start" id="benefits">
            <div class="block-title text-center">
                <h2> {{__('rep-adv')}} </h2>
            </div><!-- /.block-title -->
            <div class="container">
                <div class="row index-row box_shadow mt-2 hide-mobile {{  getCurrentLangIdiom() == 'ar' ? ' text-right'  : '' }} ">
                    <div class="col-md-3 col-sm-4 mb-2">
                        <div class="row">
                            <div class="col-3 p-0">
                                <img src="{{get_theme_frontend_url('assets/sticky/images/autoactivity/multiple accounts.png')}}" class="img-fluid">
                            </div>
                            <div class="col-9 p-0 m-auto">
                                <div class="more paddingleftAndFontSize"> {{__('rep-manage')}} </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 mb-2">
                        <div class="row">
                            <div class="col-3 p-0"><img src="https://stickyposts.net/sticky/images/autoactivity/track automatically.png" class="img-fluid"></div>
                            <div class="col-9 p-0 m-auto"><div class="more paddingleftAndFontSize"> {{__('rep-auto')}} </div></div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 mb-2">
                        <div class="row">
                            <div class="col-3 p-0"><img src="{{get_theme_frontend_url('assets/sticky/images/autoactivity/react Account.png')}}" class="img-fluid"></div>
                            <div class="col-9 p-0 m-auto"><div class="more paddingleftAndFontSize"> {{__('rep-ability')}} </div></div>
                        </div>

                    </div>
                    <div class="col-md-3 col-sm-4 mb-2">
                        <div class="row">
                            <div class="col-3 p-0"><img src="{{get_theme_frontend_url('assets/sticky/images/autoactivity/Desired accounts interact.png')}}" class="img-fluid"></div>
                            <div class="col-9 p-0 m-auto"><div class="more paddingleftAndFontSize"> {{__('rep-select')}} </div></div>
                        </div>

                    </div>
                    <div class="col-md-3 col-sm-4 mb-2">
                        <div class="row">
                            <div class="col-3 p-0"><img src="{{get_theme_frontend_url('assets/sticky/images/autoactivity/follow you.png')}}" class="img-fluid"></div>
                            <div class="col-9 p-0 m-auto"><div class="more paddingleftAndFontSize"> {{__('rep-select-acc')}} </div></div>
                        </div>

                    </div>
                    <div class="col-md-3 col-sm-4 mb-2">
                        <div class="row">
                            <div class="col-3 p-0"><img src="{{get_theme_frontend_url('assets/sticky/images/autoactivity/react Account.png')}}" class="img-fluid"></div>
                            <div class="col-9 p-0 m-auto"><div class="more paddingleftAndFontSize"> {{__('rep-identify')}} </div></div>
                        </div>

                    </div>
                    <div class="col-md-3 col-sm-4 mb-2">
                        <div class="row">
                            <div class="col-3 p-0"><img src="{{get_theme_frontend_url('assets/sticky/images/autoactivity/comment on your photos.png')}}" class="img-fluid"></div>
                            <div class="col-9 p-0 m-auto"><div class="more paddingleftAndFontSize"> {{__('rep-identify-act')}} </div></div>
                        </div>

                    </div>
                    <div class="col-md-3 col-sm-4 mb-2">
                        <div class="row">
                            <div class="col-3 p-0"> <img src="{{get_theme_frontend_url('assets/sticky/images/autoactivity/100 reactions.png')}}" class="img-fluid"></div>
                            <div class="col-9 p-0 m-auto"><div class="more paddingleftAndFontSize"> {{__('rep-swift')}} </div></div>
                        </div>

                    </div>
                    <div class="col-md-3 col-sm-4 mb-2">
                        <div class="row">
                            <div class="col-3 p-0"><img src="{{get_theme_frontend_url('assets/sticky/images/autoactivity/Filter.png')}}" class="img-fluid"></div>
                            <div class="col-9 p-0 m-auto"><div class="more paddingleftAndFontSize"> {{__('rep-filter')}} </div></div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 mb-2">
                        <div class="row">
                            <div class="col-3 p-0"><img src="{{get_theme_frontend_url('assets/sticky/images/autoactivity/Blocking.png')}}" class="img-fluid"></div>
                            <div class="col-9 p-0 m-auto"><div class="more paddingleftAndFontSize"> {{__('rep-possibility')}} </div></div>
                        </div>

                    </div>
                    <div class="col-md-3 col-sm-4 mb-2">
                        <div class="row">
                            <div class="col-3 p-0"><img src="{{get_theme_frontend_url('assets/sticky/images/autoactivity/On-Off.png')}}" class="img-fluid"></div>
                            <div class="col-9 p-0 m-auto"><div class="more paddingleftAndFontSize"> {{__('rep-auto-act')}} </div></div>
                        </div>

                    </div>
                    <div class="col-md-3 col-sm-4 mb-2">
                        <div class="row">
                            <div class="col-3 p-0"><img src="{{get_theme_frontend_url('assets/sticky/images/autoactivity/features.png')}}" class="img-fluid"></div>
                            <div class="col-9 p-0 m-auto"><div class="more paddingleftAndFontSize"> {{__('rep-more-30')}} </div></div>
                        </div>

                    </div>
                </div>
                <div class="view-mobile">
                    <div class="row w-75 mx-auto">
                        <div class=" col-12">
                            <div class="item" dir="ltr">
                                <img src="https://stickyposts.net/sticky/images/replay/increase-Clients.jpg" class="img-fluid">
                                <div class="about" >
                                    <p class="itemParagraph"> {{__('rep-cust-base')}} </p>
                                    <div class="caption itemCaption"> {{__('rep-designed')}} </div>
                                </div>
                            </div>
                        </div>
                        <div class=" col-12">
                            <div class="item" dir="ltr">

                                <img src="https://stickyposts.net/sticky/images/replay/reports.jpg" class="img-fluid">
                                <div class="about"  >
                                    <p class="itemParagraph"> {{__('rep-detailed')}} </p>
                                    <div class="caption itemCaption">  {{__('rep-enable')}} </div>
                                </div>


                            </div>
                        </div>
                        <div class=" col-12">
                            <div class="item" dir="ltr">
                                <img src="https://stickyposts.net/sticky/images/replay/Schadule.jpg" class="img-fluid">
                                <div class="about"  >
                                    <p class="itemParagraph"> {{__('rep-auto-sch')}}  </p>
                                    <div class="caption itemCaption"> {{__('rep-it-makes')}} </div>
                                </div>
                            </div>
                        </div>
                        <div class=" col-12">
                            <div class="item position-relative" dir="ltr" >

                                <img src="https://stickyposts.net/sticky/images/replay/Competitors.jpg" class="img-fluid">
                                <div class="about"  >
                                    <p class="itemParagraph"> {{__('rep-team-mem')}} </p>
                                    <div class="caption itemCaption"> {{__('rep-fast')}} </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container T-container mb-4">
            <div class="text-center">
                <h4 class="section-head hide-mobile mt-3 colorsAndFonts" > {{__('rep-auto-ben')}} </h4>
                <h4 class="view-mobile mb-4 font-weight-bold darkColor" > {{__('rep-report')}} </h4>
            </div>
            <div class="row " id="benefits">
                <div class="col-sm-6 col-md-5 col-lg-3 my-auto">
                    <?php echo file_get_contents('https://crmmrkt.com/ContentController/template/14/'.getCurrentLangIdiom());?>
                </div>
                <div class="col-sm-6 col-md-7 col-lg-9  hide-mobile">
                    <div id="features" class="section wb text-center">
                        <div class="container">
                            <div id="default" class="row clearfix zenith_slider p-0">

                                <!--The First row-->
                                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 pr-0 left-row">
                                    <ul class="features-left text-start d-flex justify-content-center flex-column h-100">
                                        <li class="highlight lhgh" data-index="0">
                                            <img src="{{get_theme_frontend_url('assets/sticky/mobileslider/Increase-Clients.png')}}">
                                            <div class="fl-inner">
                                                <h4> {{__('rep-cust-base')}} </h4>
                                                <p> {{__('rep-designed')}} </p>
                                            </div>
                                        </li><!-- .highlight .left-row -->

                                        <li class="highlight lhgh" data-index="1">
                                            <img src="{{get_theme_frontend_url('assets/sticky/mobileslider/Reports.png')}}">
                                            <div class="fl-inner">
                                                <h4> {{__('rep-detailed')}} </h4>
                                                <p> {{__('rep-enable')}} </p>
                                            </div>
                                        </li><!-- .highlight .left-row -->

                                    </ul>
                                </div><!-- .row .left-row -->

                                <div class="highlights-phone col-lg-4 col-md-4 col-sm-12 col-xs-12 wht">

                                    <div class="phone-holder">
                                        <div id="fon"></div>
                                        <div class="hgh-linner hgi" data-index="0">
                                            <img width="190" height="320" src="{{get_theme_frontend_url('assets/sticky/mobileslider/phone/increase-Clients.png')}}" class="attachment-highlight wp-post-image" alt="screen" />
                                        </div>
                                        <div class="hgh-linner hgi" data-index="1">
                                            <img width="234" height="398" src="{{get_theme_frontend_url('assets/sticky/mobileslider/phone/reports.png')}}" class="attachment-highlight wp-post-image" alt="screensdst" />
                                        </div>
                                        <div class="hgh-rinner hgi" data-index="2">
                                            <img width="234" height="398" src="{{get_theme_frontend_url('assets/sticky/mobileslider/phone/Scadule.png')}}" class="attachment-highlight wp-post-image" alt="screen_08" />
                                        </div>
                                        <div class="hgh-rinner hgi" data-index="3">
                                            <img width="234" height="398" src="{{get_theme_frontend_url('assets/sticky/mobileslider/phone/Team.png')}}" class="attachment-highlight wp-post-image" alt="screen_06" />
                                        </div>
                                    </div>
                                </div>

                                <!--The Second row-->
                                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 pl-0 right-row T-p-0">
                                    <ul class="features-right text-start d-flex justify-content-center flex-column h-100">
                                        <li class="highlight rhgh" data-index="2">
                                            <img src="{{get_theme_frontend_url('assets/sticky/mobileslider/Schadule.png')}}">
                                            <div class="fr-inner">
                                                <h4> {{__('rep-auto-sch')}} </h4>
                                                <p> {{__('rep-it-makes')}} </p>
                                            </div>
                                        </li><!-- .highlight .left-row -->
                                        <li class="highlight rhgh" data-index="3">
                                            <img src="{{get_theme_frontend_url('assets/sticky/mobileslider/Team.png')}}">
                                            <div class="fr-inner">
                                                <h4> {{__('rep-team-mem')}} </h4>
                                                <p> {{__('rep-fast')}} </p>
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
        <section class="pricing-style-one home-page-two remove-bg newTransform" id="pricing">
            <div class="container-fluid hide-mobile justTransform">
                <div class="block-title text-center text-light">
                    <h4 class="text-white"> {{__('rep-choose')}} </h4>
                </div><!-- /.block-title -->
                <ul class="nav nav-tabs tab-title my-2" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link" href="#yearly" role="tab" data-toggle="tab"> {{__('rep-year')}} </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#monthly" role="tab" data-toggle="tab"> {{__('rep-month')}} </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane show active" id="monthly">
                        <div class="w-100">
                            <div class='row m-auto p-0 justify-content-center'>

                                <div class="col-sm-4 col-md-4 col-lg-2 p-1"  >

                                    <div class="single-pricing-one">
                                        <div class="top-block" dir="ltr">
                                            <h2> {{__('rep-econ')}} </h2>
                                            <p class="price m-0" dir="rtl">
                                                @switch($ipData['geoplugin_countryName'])
                                                    @case ('Egypt')
                                                    75 EGP
                                                    @break
                                                    @case ('United Arab Emirates')
                                                    19 Dirham
                                                    @break
                                                    @case ('Saudi Arabia')
                                                    18 Riyal
                                                    @break
                                                    @default
                                                    5$
                                                @endswitch</P>

                                            <div class="line"></div><!-- /.line -->
                                        </div><!-- /.top-block -->
                                        <ul class="feature-lists text-start">
                                            <li><span class="text-danger">*</span> {{__('rep-man-up')}} <span class="font-weight-bold fontSize16">2</span></li>
                                            <li><span class="text-danger">*</span> {{__('rep-unlim')}} </li>
                                            <li><span class="text-danger">*</span> {{__('rep-up-to-50')}} </li>
                                            <li><span class="text-danger">*</span> {{__('rep-property')}} </li>
                                            <li><span class="text-danger">*</span> {{__('rep-reports')}} </li>
                                            <li><span class="text-danger">*</span> {{__('rep-auto-a')}} <span class="text-danger padding5"> {{__('rep-extra')}} </span></li>
                                        </ul><!-- /.feature-lists text-start -->
                                        <div class="bottom-block bottom-blocks">
                                            <a href="{{get_url('learn_more')}}"> {{__('rep-learn')}} </a>
                                            <a href="{{get_url('register')}}" class="price-btn cursorPointerr"> {{__('rep-buy')}} </a>
                                            <h5 class="tag-line text-center"> {{__('rep-no-fees')}} <br> {{__('rep-cancel')}} </h5>
                                            <p> {{__('rep-free-trial')}} </p>
                                        </div><!-- /.bottom-block -->
                                    </div><!-- /.single-pricing-one -->
                                </div>
                                <div class="col-sm-4 col-md-4 col-lg-2 p-1"  >
                                    <div class="single-pricing-one pro-pack">
                                        <div class="top-block" dir="ltr">
                                            <h2> {{__('rep-special')}} </h2>
                                            <p class="price m-0" dir="rtl">
                                                @switch($ipData['geoplugin_countryName'])
                                                    @case ('Egypt')
                                                    150 EGP
                                                    @break
                                                    @case ('United Arab Emirates')
                                                    35 Dirham
                                                    @break
                                                    @case ('Saudi Arabia')
                                                    36 Riyal
                                                    @break
                                                    @default
                                                    10$
                                                @endswitch</P>

                                            <div class="line"></div><!-- /.line -->
                                        </div><!-- /.top-block -->
                                        <ul class="feature-lists text-start">
                                            <li><span class="text-danger">*</span> {{__('rep-man-up')}} <span class="font-weight-bold fontSize16"> 4 </span></li>
                                            <li><span class="text-danger">*</span> {{__('rep-unlim')}} </li>
                                            <li><span class="text-danger">*</span> {{__('rep-up-to-50')}} </li>
                                            <li><span class="text-danger">*</span> {{__('rep-property')}} </li>
                                            <li><span class="text-danger">*</span> {{__('rep-reports')}} </li>
                                            <li><span class="text-danger">*</span> {{__('rep-auto-a')}} <span class="text-danger padding5"> {{__('rep-extra')}} </span></li>
                                            <li><span class="text-danger">*</span> {{__('rep-adding-mult')}} <span class="text-danger padding5"> {{__('rep-extra')}} </span></li>
                                        </ul><!-- /.feature-lists text-start -->
                                        <div class="bottom-block">
                                            <a href="{{get_url('learn_more')}}"> {{__('rep-learn')}} </a>
                                            <a href="{{get_url('register')}}" class="price-btn cursorPointerr"> {{__('rep-buy')}} </a>
                                            <h5 class="tag-line text-center"> {{__('rep-no-fees')}} <br> {{__('rep-cancel')}} </h5>
                                            <p> {{__('rep-free-trial')}} </p>
                                        </div><!-- /.bottom-block -->
                                    </div><!-- /.single-pricing-one -->
                                </div>
                            </div>


                        </div>

                    </div><!-- /.tab-pane -->
                    <div role="tabpanel" class="tab-pane" id="yearly">
                        <div class="">

                            <div class='row m-auto p-0 justify-content-center'>

                                <div class="col-sm-4 col-md-4 col-lg-2 p-1"  >

                                    <div class="single-pricing-one">
                                        <div class="top-block" dir="ltr">
                                            <h2> {{__('rep-econ')}} </h2>
                                            <p class="price m-0" dir="rtl">
                                                @switch($ipData['geoplugin_countryName'])
                                                    @case ('Egypt')
                                                    792 EGP
                                                    @break
                                                    @case ('United Arab Emirates')
                                                    185 Dirham
                                                    @break
                                                    @case ('Saudi Arabia')
                                                    191 Riyal
                                                    @break
                                                    @default
                                                    51$
                                                @endswitch</P>

                                            <div class="line"></div><!-- /.line -->
                                        </div><!-- /.top-block -->
                                        <ul class="feature-lists text-start">
                                            <li><span class="text-danger">*</span> {{__('rep-man-up')}} <span class="font-weight-bold fontSize16">2</span></li>
                                            <li><span class="text-danger">*</span> {{__('rep-unlim')}} </li>
                                            <li><span class="text-danger">*</span> {{__('rep-up-to-50')}} </li>
                                            <li><span class="text-danger">*</span> {{__('rep-property')}} </li>
                                            <li><span class="text-danger">*</span> {{__('rep-reports')}} </li>
                                            <li><span class="text-danger">*</span> {{__('rep-auto-a')}}  <span class="text-danger padding5"> {{__('rep-extra')}} </span></li>
                                        </ul><!-- /.feature-lists text-start -->
                                        <div class="bottom-block bottom-blocks">
                                            <a href="{{get_url('learn_more')}}"> {{__('rep-learn')}} </a>
                                            <a href="{{get_url('register')}}" class="price-btn "> {{__('rep-buy')}} </a>
                                            <h5 class="tag-line text-center"> {{__('rep-no-fees')}} <br> {{__('rep-cancel')}} </h5>
                                            <p> {{__('rep-free-trial')}} </p>
                                        </div><!-- /.bottom-block -->
                                    </div><!-- /.single-pricing-one -->
                                </div>
                                <div class="col-sm-4 col-md-4 col-lg-2 p-1"  >
                                    <div class="single-pricing-one pro-pack">
                                        <div class="top-block" dir="ltr">
                                            <h2> {{__('rep-special')}} </h2>
                                            <p class="price m-0" dir="rtl">
                                                @switch($ipData['geoplugin_countryName'])
                                                    @case ('Egypt')
                                                    1584 EGP
                                                    @break
                                                    @case ('United Arab Emirates')
                                                    370 Dirham
                                                    @break
                                                    @case ('Saudi Arabia')
                                                    377 Riyal
                                                    @break
                                                    @default
                                                    101$
                                                @endswitch
                                            </P>

                                            <div class="line"></div><!-- /.line -->
                                        </div><!-- /.top-block -->
                                        <ul class="feature-lists text-start">
                                            <li><span class="text-danger">*</span>{{__('rep-man-up')}} <span class="font-weight-bold fontSize16"> 4 </span></li>
                                            <li><span class="text-danger">*</span>{{__('rep-unlim')}}</li>
                                            <li><span class="text-danger">*</span>{{__('rep-up-to-50')}} </li>
                                            <li><span class="text-danger">*</span>{{__('rep-property')}}   </li>
                                            <li><span class="text-danger">*</span>{{__('rep-reports')}}</li>
                                            <li><span class="text-danger">*</span>{{__('rep-auto-a')}} <span class="text-danger padding5">{{__('rep-extra')}} </span></li>
                                            <li><span class="text-danger">*</span>{{__('rep-adding-mult')}}  <span  class="text-danger padding5">{{__('rep-extra')}} </span></li>
                                        </ul><!-- /.feature-lists text-start -->
                                        <div class="bottom-block">
                                            <a href="{{get_url('learn_more')}}">{{__('rep-learn')}}</a>
                                            <a href="{{get_url('register')}}" class="price-btn cursorPointerr">{{__('rep-buy')}}</a>
                                            <h5 class="tag-line text-center">{{__('rep-no-fees')}} <br> {{__('rep-cancel')}}</h5>
                                            <p>{{__('rep-free-trial')}}</p>
                                        </div><!-- /.bottom-block -->
                                    </div><!-- /.single-pricing-one -->
                                </div>
                            </div>
                        </div><!-- /.row -->
                    </div><!-- /.tab-pane -->
                </div><!-- /.tab-content -->

            </div>
        </section><!-- /.pricing-style-one -->
    </div><!-- /.page-wrapper -->


@endsection

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

@endpush
