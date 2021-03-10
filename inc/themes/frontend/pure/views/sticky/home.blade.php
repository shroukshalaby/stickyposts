@extends('sticky.layout.master')
@section('title','Sticky posts - Scheduling tool')
@push('head')
<style>
    @media (max-width: 567px){
        .section-2 .item .caption{
            font-size: 1.2em;
        }
        .style-captain{
            color: #320b82;
        }
        .bg-border--btn{
            background: linear-gradient(90deg, #7c07bd 0%, #33a3fb 100%);
            width: 100%;
            border: none;
            border-radius: 0;
            
        }
        .bg-border-btn{
            position: relative!important;
        }
    }
    .b-10{
        padding: 10px;
    }
.bg-specific-container-new-style{
    background: linear-gradient(to right, #931459 22% , #320b83 100%);
    
}
.style-box{
    padding: 0 3px;
    font-size: 1.5rem;
    font-weight:700;
}    
.style-captain{
    font-size: 1.2rem;
    line-height: 1.5;
}
.p-relative{
    position:relative;
}
.bg-border-btn{
    background:linear-gradient(90deg, #e09d0d, #d707f3);
    width: 100%;
    border: none;
    border-radius: 0;
    position: absolute;
    bottom: 0;
    left: 0;
}
.para-m{
    padding: 0 3px;
    font-size: 13px;
}
.bg-border-btn-2{
    background: linear-gradient(45deg, #FF9800 , #f8f900);
    width: 100%;
    border: none;
    border-radius: 0;
    position: absolute;
    bottom: 0;
    left: 0;
}
.bg-border-btn-3{
    background:linear-gradient(90deg, #7c07bd 0%, #33a3fb 100%);
    width: 100%;
    border: none;
    border-radius: 0;
    position: absolute;
    bottom: 0;
    left: 0;
}
.para-style{
    margin: 0;
    padding: 0 10px;
    font-size: 13px;
}
.para-style2{
    margin: 0;
    padding: 0 0px;
    font-size: 11px;
}
.p-generate{
    height:100%;
    margin-bottom: 0;
    background: linear-gradient(to right, #931459 22%  , #320b83 100%);
}
.img-style-height{
    width: auto!important;
    height: 56px!important;
}
.column-new-style{
    text-align:start;
    font-size:12px;
    line-height: 2.5;
}
.ul-column-new-style{
    padding:0;
    margin:0px 10px;
}
.btn-new-style-border{
    background:#fff;
    width: 100%;
    border: none;
    border-radius: 0;
    position: absolute;
    bottom: 0;
    left: 0;
    color:#000;
    font-weight:bold;
}
.span-new-style-blow{
    font-size:11px;
    color:#000;
    font-weight:normal;
}
.ngo-new-style{
    background: #212F63;
    color: #fff;
    margin: 0;
    padding:5px 0;
}
.read-more-color{
    background: #212F63;
    padding:3px 10px;
    color: #fff;
    font-size: 14px;
    border-radius: 5px;
}
.img-new-style-bottom{
    background: #6B2C76;
    color: #fff;
    margin: 0;
    padding:5px 0;
}
.img-new-style-read-more{
    background: #6B2C76;
    padding:3px 10px;
    color: #fff;
    font-size: 14px;
    border-radius: 5px;
}
.para-electronic{
    background: #382B7D;
    color: #fff;
    margin: 0;
    padding:5px 0;
}
.more-benefits-new-style{
    background: #382B7D;
    padding:3px 10px;
    color: #fff;
    font-size: 14px;
    border-radius: 5px;
}
.ads-new-style{
    background: #0B70AE;
    color: #fff;
    margin: 0;
    padding:5px 0;
}
.card6-new-style{
    background: #0B70AE;
    padding:3px 10px;
    color: #fff;
    font-size: 14px;
    border-radius: 5px;
}
.card7-new-style{
    background: #34A9DA;
    color: #fff;
    margin: 0;
    padding:5px 0;
}
.card5-new-style{
    background: #34A9DA;
    padding:3px 10px;
    color: #fff;
    font-size: 14px;
    border-radius: 5px;
}
.influencer-new-style{
    background: #9362A6;
    color: #fff;
    margin: 0;
    padding:5px 0;
}
.card4-new-style{
    background: #9362A6;
    padding:3px 10px;
    color: #fff;
    font-size: 14px;
    border-radius: 5px;
}
.card10-new-style{
    background: linear-gradient(90deg,#42b0ff,#4262ff); 
    padding:2px 20px;
    color: #fff;
    font-size: 14px;
    border-radius: 5px;
    margin-top:1rem !important;
}
 .payment-popup:hover {
            text-decoration: underline;
        }

        .blowing-button {
            animation: Color 4s linear infinite;
            -webkit-animation: Color 4s ease-in-out infinite;
            text-shadow: 5px 10px #F0F0F0;
            font-size: 20px;
        }

        @keyframes Color {
            0% {
                color: #34A9DA;
            }

            20% {
                color: #33a3fb;
            }

            40% {
                color: #0B70AE;
            }

            60% {
                color: #320b82;
            }

            80% {
                color: #350C84;
            }

            100% {
                color: #931459;
            }
        }

        @-moz-keyframes Color {
            0% {
                color: #34A9DA;
            }

            20% {
                color: #33a3fb;
            }

            40% {
                color: #0B70AE;
            }

            60% {
                color: #320b82;
            }

            80% {
                color: #350C84;
            }

            100% {
                color: #931459;
            }
        }

        @-webkit-keyframes Color {
            0% {
                color: #34A9DA;
            }

            20% {
                color: #33a3fb;
            }

            40% {
                color: #0B70AE;
            }

            60% {
                color: #320b82;
            }

            80% {
                color: #350C84;
            }

            100% {
                color: #931459;
            }
        }

</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

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
    x
</style>

@endpush
@section('page-wrapper')
    @include('sticky.layout.partials.common.homeBanner')
    <div class="section-2 p-0 mt-2 mb-0" id="features">
        <div class="col-12 block-title text-center my-2">
            <h2>{{__('b_Features')}} </h2>
        </div><!-- /.block-title -->
        <div class="container">
            <div class="view-mobile">
                <div class="row w-75 mx-auto">
                    <div class=" col-12">
                        <div class="item" dir="ltr">
                            <img src="{{get_theme_frontend_url('assets/sticky/images/dashboard/Schadualew.png')}}" class="img-fluid">
                            <div class="about">
                                <p class="m-0 style-box">
                                   {{__('h_AutomatedScheduling')}}  </p>
                 <div class="caption style-captain " style=" {{  getCurrentLangIdiom() == 'fr' ? 'font-size:1.2rem'  : '' }}">                                         {{__('h_auto_p')}}</div>  
                            </div>
                        </div>
                    </div>
                    <div class=" col-12">
                        <div class="item" dir="ltr">

                            <img src="{{get_theme_frontend_url('assets/sticky/images/dashboard/time-managementw.png')}}" class="img-fluid">
                            <div class="about">
                                <p class="m-0 style-box">
                                    {{__('h_TimeManagement')}} 
                                    </p>
                                <div class="caption" style=" {{  getCurrentLangIdiom() == 'fr' ? 'font-size:1.2rem'  : '' }}"
                                     >
                                 {{__('h_TimeManagement_p')}}    
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class=" col-12">
                        <div class="item" dir="ltr">
                            <img src="{{get_theme_frontend_url('assets/sticky/images/dashboard/Reportsw.png')}}" class="img-fluid">
                            <div class="about">
                                <p class="m-0 style-box">
                                    {{__('h_Reports_Statistics')}} 
                                </p>
                                <div class="style-captain">
                                    {{__('h_rep_p')}} 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-12">
                        <div class="item" dir="ltr">
                            <img src="{{get_theme_frontend_url('assets/sticky/images/dashboard/MultiDevicesWebsiteMockups.png')}}" class="img-fluid">
                            <div class="about">
                                <p class="m-0 style-box">
                                    {{__('b_PostsGenerator')}} 
                                </p>
                                <div class="caption style-captain" style=" {{  getCurrentLangIdiom() == 'fr' ? 'font-size:1.2rem'  : '' }}">
                                    {{__('h_posts_p')}} 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-12">
                        <div class="item p-relative" dir="ltr">

                            <img src="{{get_theme_frontend_url('assets/sticky/images/dashboard/Autoreplyw.png')}}" class="img-fluid">
                            <div class="about">
                                <p class="m-0 style-box">
                                    {{__('b_AutoActivity')}} 
                                </p>
                                <div class="caption style-captain"  style=" {{  getCurrentLangIdiom() == 'fr' ? 'font-size:1.2rem'  : '' }}">
                                    {{__('h_auto_p_s')}} 
                                </div>
                            </div>
                            <div class="bottom-block">
                                <a href="{{get_url('auto_activity')}}" class="btn btn-info bg-border-btn">
                                   
                                    {{__('get_it_now')}} 
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=" col-12">
                        <div class="item p-relative" dir="ltr" >

                            <img src="{{get_theme_frontend_url('assets/sticky/images/dashboard/Analyzerw.png')}}" class="img-fluid">
                            <div class="about">
                                <p class="m-0 style-box">
                                  {{__('b_Competitors')}}
                                </p>
                                <div class="caption style-captain" style="{{  getCurrentLangIdiom() == 'fr' ? 'font-size:1.2rem'  : '' }}">
                                     {{__('h_Competitors_p')}} 
                                </div>
                            </div>


                            <div class="bottom-block">
                                <a href="https://stickyposts.net/phpanalyzer/product3/index.php" class="btn btn-info bg-border--btn ">
                                   {{__('get_it_now')}} </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row hide-mobile">
                <div class="col-lg-9 col-md-8 col-sm-12 col-12">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12 mb-3">
                            <div class="item" dir="ltr" style="height: 171px;">
                                <div class="icon mb-1">
                                    <div class="row mx-aut0 w-100">
                                        <div class="col-4">
                                            <img src="{{get_theme_frontend_url('assets/sticky/images/icon/Schadule.png')}}" class="img-fluid">
                                        </div>
                                        <div class="col-8 my-auto">
                                            <p class="text-white para-m m-0">
                                                 {{__('h_AutomatedScheduling')}} 
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="caption"> {{__('h_auto_p')}}</div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12 mb-3">
                            <div class="item" dir="ltr" style="height: 171px;">
                                <div class="icon mb-1">
                                    <div class="row mx-aut0 w-100">
                                        <div class="col-4">
                                            <img src="{{get_theme_frontend_url('assets/sticky/images/icon/time.png')}}" class="img-fluid">
                                        </div>
                                        <div class="col-8 my-auto">
                                            <p class="text-white para-m m-0">{{__('h_TimeManagement')}} </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="caption">
                                    {{__('h_TimeManagement_p')}}
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12 mb-3">
                            <div class="item" dir="ltr" style="height: 171px;">
                                <div class="icon mb-1">
                                    <div class="row mx-aut0 w-100">
                                        <div class="col-4">
                                            <img src="{{get_theme_frontend_url('assets/sticky/images/icon/reports.png')}}" class="img-fluid">
                                        </div>
                                        <div class="col-8 my-auto">
                                            <p  class="text-white para-m m-0"> {{__('h_Reports_Statistics')}}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="caption"> {{__('h_rep_p')}}</div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="item p-relative" dir="ltr" style="height:171px;">
                                <div class="icon mb-1">
                                    <div class="row mx-aut0 w-100">
                                        <div class="col-4">
                                            <img src="{{get_theme_frontend_url('assets/sticky/images/icon/Family.png')}}" class="img-fluid" style="width: 86%;">
                                        </div>
                                        <div class="col-8 my-auto">
                                            <p class="text-white para-m m-0">
                                              {{__('h_Family')}}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="caption">{{__('h_Family_p')}} </div>
                                <div class="bottom-block">
                                    <a href="{{get_url('family')}}" class="btn bg-border-btn-2">
                                       
                                       {{__('get_it_now')}}</a>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="item p-relative" dir="ltr" style="height:171px;">
                                <div class="icon mb-1">
                                    <div class="row mx-aut0 w-100">
                                        <div class="col-4">
                                            <img src="{{get_theme_frontend_url('assets/sticky/images/icon/auto-reply.png')}}" class="img-fluid">
                                        </div>
                                        <div class="col-8 my-auto">
                                            <p class="text-white para-style" >{{__('b_AutoActivity')}}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="caption">{{__('h_auto_p_s')}}</div>
                                <div class="bottom-block">
                                    <a href="{{get_url('auto_activity')}}" class="btn btn-info bg-border-btn">
                                      {{__('get_it_now')}}  </a>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="item p-relative " dir="ltr" style="height:171px;">
                                <div class="icon mb-1">
                                    <div class="row mx-aut0 w-100">
                                        <div class="col-4">
                                            <img src="{{get_theme_frontend_url('assets/sticky/images/icon/competitors.png')}}" class="img-fluid">
                                        </div>
                                        <div class="col-8 my-auto">
                                            <p class="text-white para-style2">
                                                {{__('b_Competitors')}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="caption">{{__('h_Competitors_p')}}</div>
                                <div class="bottom-block">
                                    <a href="https://stickyposts.net/phpanalyzer/product3/index.php"
                                       class="btn btn-info bg-border-btn-3">
                                       {{__('get_it_now')}}</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12 generate-posts">
                    <div class="item post-generator p-relative p-generate" dir="ltr">
                        <div class="icon mb-0">
                            <div class="row m-0" style="background:#fff;">
                                <div class="col-8 text-center">
                                    <img src="{{get_theme_frontend_url('assets/sticky/images/PostsGererator BK.png')}}" class="img-fluid img-style-height">
                                </div>
                                <div class="col-4">
                                    <div class="new_text">
                                        <p class="new_text_p">{{__('New')}}</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="container bg-specific-container-new-style">
                            <div class="column">
                                <div class="column-new-style">
                                    <ul class="ul-column-new-style text-light">
                                        <li class=" {{  getCurrentLangIdiom() == 'fr' ? 'lh-french-12'  : '' }}"><span>{{__('h_pg_li_1')}}</span></li>
                                        <li class=" {{  getCurrentLangIdiom() == 'fr' ? 'lh-french-12'  : '' }}"><span>{{__('h_pg_li_2')}}</span></li>
                                        <li class=" {{  getCurrentLangIdiom() == 'fr' ? 'lh-french-12'  : '' }}"><span>{{__('h_pg_li_3')}}</span></li>
                                        <li class=" {{  getCurrentLangIdiom() == 'fr' ? 'lh-french-12'  : '' }}"><span>{{__('h_pg_li_4')}}</span></li>
                                        <li class=" {{  getCurrentLangIdiom() == 'fr' ? 'lh-french-12'  : '' }}"><span>{{__('h_pg_li_5')}}</span></li>
                                        <li class=" {{  getCurrentLangIdiom() == 'fr' ? 'lh-french-12'  : '' }}"><span>{{__('h_pg_li_6')}}</span></li>
                                        <li class=" {{  getCurrentLangIdiom() == 'fr' ? 'lh-french-12'  : '' }}"><span>{{__('h_pg_li_7')}}</span></li>
                                    </ul>
                                </div>
                                <a href="{{get_url('posts_generator')}}" class="btn blowing-button btn-new-style-border">
                                   {{__('get_it_now')}} {{__('free')}} <br><span class="span-new-style-blow">{{__('h_pg_included')}}</span></a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="services-style-one p-0 mb-3" id="service">
        <div class="" id="WhoBenefit">
            <div class="block-title text-center">
                <h2>{{__('h_benefit')}}</h2>
                <h6 class=" text-black   ">{!! __('h_benefit_p') !!}</h6>
            </div><!-- /.block-title -->


            <div class="row text-center col-lg-9 mx-auto">
                <div class="col-lg-4 col-md-4 col-sm-6 pad-fre">
                    <div class="new-item">
                        <img src="{{get_theme_frontend_url('assets/sticky/images/new/ngo.png')}}" class="img-fluid hide-mobile">
                        <p class="mb-2 ngo-new-style">
                         {{__('h_ngo')}}
                        </p>
                        <a href="{{get_url('more_benefits#card3')}}" class="hide-mobile read-more-color">
                         {{__('readMore')}}</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 pad-fre">
                    <div class="new-item">
                        <img src="{{get_theme_frontend_url('assets/sticky/images/new/brand.png')}}" class="img-fluid hide-mobile">
                        <p class="mb-2 img-new-style-bottom">
                          {!!__('h_brands')!!} 
                        </p>
                        <a href="{{get_url('more_benefits#card2')}}" class="hide-mobile img-new-style-read-more">
                           {{__('readMore')}} </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 pad-fre">
                    <div class="new-item">
                        <img src="{{get_theme_frontend_url('assets/sticky/images/new/ecom.png')}}" class="img-fluid hide-mobile">
                        <p class="mb-2 para-electronic">
                            {{__('h_electronic')}}
                        </p>
                        <a href="{{get_url('more_benefits#card1')}}" class="hide-mobile more-benefits-new-style">
                            {{__('readMore')}}</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 mt-md-3 mt-0 pad-fre">
                    <div class="new-item">
                        <img src="{{get_theme_frontend_url('assets/sticky/images/new/egancy.png')}}" class="img-fluid hide-mobile">
                        <p class="mb-2 ads-new-style">
                            {!!__('h_ads')!!}
                        </p>
                        <a href="{{get_url('more_benefits#card6')}}" class="hide-mobile card6-new-style">
                            {{__('readMore')}}</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 mt-md-3 mt-0 pad-fre">
                    <div class="new-item">
                        <img src="{{get_theme_frontend_url('assets/sticky/images/new/freelancer.png')}}" class="img-fluid hide-mobile">
                        <p  class="mb-2 card7-new-style">
                          {{__('h_freelance')}}  
                        </p>
                        <a href="{{get_url('more_benefits#card5')}}" class="hide-mobile card5-new-style">
                           {{__('readMore')}}</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 mt-md-3 mt-0 pad-fre">
                    <div class="new-item">
                        <img src="{{get_theme_frontend_url('assets/sticky/images/new/influ.png')}}" class="img-fluid hide-mobile">
                        <p class="mb-2 influencer-new-style">
                           {{__('h_influencer')}} 
                        </p>
                        <a href="{{get_url('more_benefits#card4')}}" class="hide-mobile card4-new-style">
                           {{__('readMore')}}
                        </a>
                    </div>
                </div>
                <a href="{{get_url('more_benefits')}}" class="m-auto view-mobile mt-2 card10-new-style">
                  {{__('readMore')}}
                </a>
            </div>
        </div>
        <div class="container">

            <div class="row" id="benefits">
                <div class="col-12 block-title text-center m-0">
                    <h2 class="hide-mobile mb-4">{{__('benefits')}}</h2>
                    <h2 class="view-mobile my-5">{{__('h_free_e_book')}}</h2>
                </div><!-- /.block-title -->
                <div class=" hide-mobile col-sm-6 col-md-7 col-lg-9">
                    <div id="features" class="section wb">
                        <div class="container">
                            <div id="default" class="row clearfix zenith_slider p-0">
                                <div class="col-lg-4 col-md-8 col-sm-12 col-xs-12 left-row">
                                    <ul class="features-left">
                                        <li class="highlight lhgh" data-index="0">
                                            <img src="{{get_theme_frontend_url('assets/sticky/images/mobileslider/Increase-Clients.png')}}">
                                            <div class="fl-inner b-10">
                                                <h4>{{__('h_benefit_h1')}}</h4>
                                                <p>{{__('h_benefit_p1')}}</p>
                                            </div>
                                        </li><!-- .highlight .left-row -->

                                        <li class="highlight lhgh" data-index="1">
                                            <img src="{{get_theme_frontend_url('assets/sticky/images/mobileslider/Reports.png')}}">
                                            <div class="fl-inner b-10">
                                                <h4>{{__('h_benefit_h2')}}</h4>
                                                <p>{{__('h_benefit_p2')}}</p>
                                            </div>
                                        </li><!-- .highlight .left-row -->

                                        <li class="highlight lhgh" data-index="2">
                                            <img src="{{get_theme_frontend_url('assets/sticky/images/mobileslider/increase-sale.png')}}">
                                            <div class="fl-inner b-10">
                                                <h4>{{__('h_benefit_h3')}}</h4>
                                                <p>{{__('h_benefit_p3')}}</p>
                                            </div>
                                        </li><!-- .highlight .left-row -->
                                        <li class="highlight lhgh" data-index="3">
                                            <img src="{{get_theme_frontend_url('assets/sticky/images/mobileslider/Auto-Reply.png')}}">
                                            <div class="fl-inner b-10">
                                                <h4>{{__('h_benefit_h4')}}</h4>
                                                <p>{{__('h_benefit_p4')}}</p>
                                            </div>
                                        </li><!-- .highlight .left-row -->
                                    </ul>
                                </div>
                                <div class="highlights-phone col-lg-4 col-md-4 col-sm-12 col-xs-12 wht">

                                    <div class="phone-holder">
                                        <div id="fon"></div>
                                        <div class="hgh-linner hgi" data-index="0">
                                            <img width="190" height="320"
                                                 src="{{get_theme_frontend_url('assets/sticky/images/mobileslider/phone/increase-Clients.png')}}"
                                                 class="attachment-highlight wp-post-image" alt="screen"/>
                                        </div>
                                        <div class="hgh-linner hgi" data-index="1">
                                            <img width="234" height="398" src="{{get_theme_frontend_url('assets/sticky/images/mobileslider/phone/reports.png')}}"
                                                 class="attachment-highlight wp-post-image" alt="screensdst"/>
                                        </div>
                                        <div class="hgh-linner hgi" data-index="2">
                                            <img width="234" height="398"
                                                 src="{{get_theme_frontend_url('assets/sticky/images/mobileslider/phone/increase-sales.png')}}"
                                                 class="attachment-highlight wp-post-image" alt="screen_09"/>
                                        </div>
                                        <div class="hgh-rinner hgi" data-index="3">
                                            <img width="234" height="398" src="{{get_theme_frontend_url('assets/sticky/images/mobileslider/phone/auto-reply.png')}}"
                                                 class="attachment-highlight wp-post-image" alt="screen_07"/>
                                        </div>
                                        <div class="hgh-rinner hgi" data-index="4">
                                            <img width="234" height="398" src="{{get_theme_frontend_url('assets/sticky/images/mobileslider/phone/Scadule.png')}}"
                                                 class="attachment-highlight wp-post-image" alt="screen_08"/>
                                        </div>
                                        <div class="hgh-rinner hgi" data-index="5">
                                            <img width="234" height="398" src="{{get_theme_frontend_url('assets/sticky/images/mobileslider/phone/Team.png')}}"
                                                 class="attachment-highlight wp-post-image" alt="screen_06"/>
                                        </div>
                                        <div class="hgh-rinner hgi" data-index="6">
                                            <img width="234" height="398"
                                                 src="{{get_theme_frontend_url('assets/sticky/images/mobileslider/phone/Competetitors.png')}}"
                                                 class="attachment-highlight wp-post-image" alt="screen_06"/>
                                        </div>
                                        <div class="hgh-rinner hgi" data-index="7">
                                            <img width="234" height="398" src="{{get_theme_frontend_url('assets/sticky/images/mobileslider/phone/Time.png')}}"
                                                 class="attachment-highlight wp-post-image" alt="screen_06"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-8 col-sm-12 col-xs-12 right-row">
                                    <ul class="features-right">
                                        <li class="highlight rhgh" data-index="4">
                                            <img src="{{get_theme_frontend_url('assets/sticky/images/mobileslider/Schadule.png')}}">
                                            <div class="fr-inner b-10">
                                                <h4>{{__('h_benefit_h5')}}</h4>
                                                <p>{{__('h_benefit_p5')}}</p>
                                            </div>
                                        </li><!-- .highlight .left-row -->
                                        <li class="highlight rhgh" data-index="5">
                                            <img src="{{get_theme_frontend_url('assets/sticky/images/mobileslider/Team.png')}}">
                                            <div class="fr-inner b-10">
                                                <h4>{{__('h_benefit_h6')}}</h4>
                                                <p>{{__('h_benefit_p6')}}</p>
                                            </div>
                                        </li><!-- .highlight .left-row -->
                                        <li class="highlight rhgh" data-index="6">
                                            <img src="{{get_theme_frontend_url('assets/sticky/images/mobileslider/Influencer.png')}}">
                                            <div class="fr-inner b-10">
                                                <h4>{{__('h_benefit_h7')}}</h4>
                                                <p> {{__('h_benefit_p7')}}</p>
                                            </div>
                                        </li><!-- .highlight .left-row -->
                                        <li class="highlight rhgh" data-index="7">
                                            <img src="{{get_theme_frontend_url('assets/sticky/images/mobileslider/Time.png')}}">
                                            <div class="fr-inner b-10">
                                                <h4>{{__('h_benefit_h8')}}</h4>
                                                <p>{{__('h_benefit_p8')}}</p>
                                            </div>
                                        </li><!-- .highlight .left-row -->
                                    </ul>
                                </div>
                            </div><!--Highlights close-->
                        </div><!-- end container -->
                    </div><!-- end section -->
                </div>
                <div class="col-sm-6  col-md-5 col-lg-3 my-auto">
                    <?php echo file_get_contents('https://crmmrkt.com/ContentController/template/4/' .getCurrentLangIdiom()); ?>
                </div>

            </div>
        </div>

        <!-- /.container -->
    </section>
  
    @include('sticky.layout.partials.common.pricing')
    @include('sticky.layout.partials.common.compare')
    <div class="hide-mobile">
        @include('sticky.layout.partials.common.reviews')
    </div>
@endsection
@section('body')
    
    <div id="vise_popups_en" class="modal fade bd-example-modal-lg" role="dialog"
         style='background: rgba(0,0,0,0.7);padding-top: 60px;'>

        <div class="modal-dialog miniDialog">
            <div class="modal-content" style="background: linear-gradient(275deg, #5e2298, #320b82); color:#fff">
                <div class="modal-header p-0">
                    <img src="{{get_theme_frontend_url('assets/sticky/logo-s.png')}}" style='width: 54px;z-index: 10;'>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                            style="padding: 0;position: absolute;right: 20px;top: 26px;">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div id="modal-body" class="text-center text-white py-3">
                    <h5 style='color:#fff; font-size: 1.1rem;' class='text-center'>This payment method is not available in
                        your country now</h5>
                    <a style="color:#007bff;" class="payment-popup" href="#">I want to pay in another way</a>
                    <form>
                        <div class="col-12 my-1">
                            <div class="custom-control custom-checkbox mr-sm-2">
                                <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                                <label class="custom-control-label" for="customControlAutosizing">I want an email
                                    notification if these are available</label>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
    <div id="vise_popups_fr" class="modal fade bd-example-modal-lg" role="dialog"
         style='background: rgba(0,0,0,0.7);padding-top: 60px;'>

        <div class="modal-dialog miniDialog">
            <div class="modal-content" style="background: linear-gradient(275deg, #5e2298, #320b82); color:#fff">
                <div class="modal-header p-0">
                    <img src="{{get_theme_frontend_url('assets/sticky/logo-s.png')}}" style='width: 54px;z-index: 10;'>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                            style="padding: 0;position: absolute;right: 20px;top: 26px;">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div id="modal-body" class="text-center text-white py-3">
                    <h5 style='color:#fff; font-size: 1rem;' class='text-center'>Ce mode de paiement n'est pas disponible
                        dans votre pays maintenant</h5>
                    <a style="color:#007bff;" class="payment-popup" href="#">Je veux payer d'une autre manière</a>
                    <form>
                        <div class="col-12 my-1">
                            <div class="custom-control custom-checkbox mr-sm-2">
                                <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                                <label class="custom-control-label" for="customControlAutosizing">Je veux une notification
                                    par e-mail si ce service est disponible dans mon pays</label>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
    <div id="vise_popups_ar" class="modal fade bd-example-modal-lg" role="dialog"
         style='background: rgba(0,0,0,0.7);padding-top: 60px;'>

        <div class="modal-dialog miniDialog">
            <div class="modal-content" style="background: linear-gradient(275deg, #5e2298, #320b82); color:#fff">
                <div class="modal-header p-0">
                    <img src="{{get_theme_frontend_url('assets/sticky/logo-s.png')}}" style='width: 54px;z-index: 10;'>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                            style="padding: 0;position: absolute;right: 20px;top: 26px;">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div id="modal-body" class="text-center text-white py-3">
                    <h5 style='color:#fff; font-size: 1.1rem;' class='text-center'>طرقة الدفع هذه غير متاحة في بلدك
                        الان</h5>
                    <a style="color:#007bff;" class="payment-popup" href="#">أريد أن ادفع بطريقة أخرى</a>
                    <form>
                        <div class="col-12 my-1">
                            <div class="custom-control custom-checkbox mr-sm-2">
                                <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                                <label class="custom-control-label" for="customControlAutosizing">أريد اشعار على البريد
                                    البريد الإلكتروني في حال توافر هذه</label>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
    <div id="etisalat_popups_en" class="modal fade bd-example-modal-lg" role="dialog"
         style='background: rgba(0,0,0,0.7);padding-top: 60px;'>

        <div class="modal-dialog miniDialog">
            <div class="modal-content" style="background: linear-gradient(275deg, #5e2298, #320b82); color:#fff">
                <div class="modal-header p-0">
                    <img src="{{get_theme_frontend_url('assets/sticky/logo-s.png')}}" style='width: 54px;z-index: 10;'>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                            style="padding: 0;position: absolute;right: 20px;top: 26px;">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div id="modal-body" class="text-center text-white py-3 px-3">
                    <h5 style='color:#fff; font-size: 1.1rem;' class='text-center'>This operator is currently unavailable in
                        your country and will be available soon</h5>
                    <form>
                        <div class="form-group form-row justify-content-center">
                            <label class="col-12">Please enter your phone number to transfer you to another payment
                                method</label>
                            <input class="form-control col-8" placeholder="Phone Number">
                        </div>
                        <h4>OR</h4>
                        <a style="color:#007bff;" class="payment-popup" href="#">choose another operator</a>

                    </form>
                </div>
            </div>

        </div>
    </div>
    <div id="etisalat_popups_fr" class="modal fade bd-example-modal-lg" role="dialog"
         style='background: rgba(0,0,0,0.7);padding-top: 60px;'>

        <div class="modal-dialog miniDialog">
            <div class="modal-content" style="background: linear-gradient(275deg, #5e2298, #320b82); color:#fff">
                <div class="modal-header p-0">
                    <img src="{{get_theme_frontend_url('assets/sticky/logo-s.png')}}" style='width: 54px;z-index: 10;'>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                            style="padding: 0;position: absolute;right: 20px;top: 26px;">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div id="modal-body" class="text-center text-white py-3 px-3">
                    <h5 style='color:#fff; font-size: 1.1rem;' class='text-center'>Cet opérateur est actuellement
                        indisponible dans votre pays, il sera bientôt disponible</h5>
                    <form>
                        <div class="form-group form-row justify-content-center">
                            <label class="col-12">Veuillez saisir votre numéro de téléphone pour vous transférer vers un
                                autre mode de paiement</label>
                            <input class="form-control col-8" placeholder="numéro de téléphone">
                        </div>
                        <h4>OU</h4>
                        <a style="color:#007bff;" class="payment-popup" href="#">choisir un autre opérateur</a>

                    </form>
                </div>
            </div>

        </div>
    </div>
    <div id="etisalat_popups_ar" class="modal fade bd-example-modal-lg" role="dialog"
         style='background: rgba(0,0,0,0.7);padding-top: 60px;'>

        <div class="modal-dialog miniDialog">
            <div class="modal-content" style="background: linear-gradient(275deg, #5e2298, #320b82); color:#fff">
                <div class="modal-header p-0">
                    <img src="{{get_theme_frontend_url('assets/sticky/logo-s.png')}}" style='width: 54px;z-index: 10;'>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                            style="padding: 0;position: absolute;right: 20px;top: 26px;">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div id="modal-body" class="text-center text-white py-3 px-3">
                    <h5 style='color:#fff; font-size: 1.1rem;' class='text-center'>هذا المشغل غير متوفر حاليًا في بلدك
                        وسيكون متاحًا قريبًا</h5>
                    <form>
                        <div class="form-group form-row justify-content-center">
                            <label class="col-12">يرجى إدخال رقم هاتفك لتحويلك إلى طريقة دفع أخرى</label>
                            <input class="form-control col-8" placeholder="numéro de téléphone">
                        </div>
                        <h4>أو</h4>
                        <a style="color:#007bff;" class="payment-popup" href="#">اختار مشغل آخر</a>

                    </form>
                </div>
            </div>

        </div>
    </div>
    <div class="modal fade bd-example-modal-lg" id="response" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel"
         aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content" style="padding: 0px;">
                <div class="modal-header btn-light">
                    <h5 class="modal-title" id="smallmodalLabel">Newsletter Subscribe</h5>
                    <button type="button" class="close text-dark" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body text-light text-center" id="get" style="background: #211f1f; padding: 40px;">


                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="online" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #200846;color: #fff;">
                    <h5 class="modal-title" id="exampleModalLabel"><img src="{{get_theme_frontend_url('assets/sticky/logo-s.png')}}" width='49px'></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center" dir='ltr'>
                    <h6 style='color:#333'>هذه الخدمة غير متاحه في الوطن العربي وشمال افريقيا </h6>
                    <h6 style='color:#333'>ادخل الايميل الخاص بك لاسال التفاصيل </h6>
                    <form class="form" method="post">
                        <input name="email" class="form-control" id="email" type="email" placeholder=" ايميل  "
                               title="Your e-mail address is required so I can reply" required maxlength="50"
                               pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}">
                        <input type="submit" name="submit" class="submit mt-3" value="اشترك !"
                               style="background:#3AB2E5;border:none"/>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- model package -->
    <!-- Modal -->
    <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background:linear-gradient(-145deg, #320b82 0%, #9c33c3 100%);color:#fff">
                    <h5 class="modal-title" id="exampleModalLabel">Order larger packages with special privileges</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="form2">

                        <div class="form-group">
                            <label><span style="color:red">*</span> Full name</label>
                            <input type="text" class="form-control" name="fullname">
                        </div>

                        <div class="form-group">
                            <label><span style="color:red">*</span> business mail</label>
                            <input type="text" class="form-control" name="company_email">
                        </div>

                        <div class="form-group">
                            <label><span style="color:red">*</span> Company </label>
                            <input type="text" class="form-control" name="company_name">
                        </div>

                        <div class="form-group">
                            <label><span style="color:red">*</span> Phone Number </label>
                            <input type="Number" class="form-control" name="mobile">
                        </div>

                        <div class="form-group">
                            <label><span style="color:red">*</span> Title</label>
                            <select class="form-control" name="title" required>
                                <option value="" selected disabled>- Please Select -</option>
                                <option value="Owner">Owner</option>
                                <option value="C-Level">C-Level</option>
                                <option value="Vice President">Vice President</option>
                                <option value="Director">Director</option>
                                <option value="Manager">Manager</option>
                                <option value="Specialist/Coordinator">Specialist/Coordinator</option>
                                <option value="Student">Student</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label><span style="color:red">*</span> Nots</label>
                            <textarea class="form-control" name="notice" cols="30" rows="4"
                                      placeholder="اكتب ملاحظتك هنا .."></textarea>
                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-info">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div id="welcome" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalCenterTitle" aria-hidden="true"
         style='background: rgba(0,0,0,0.5);padding-top: 20px;'>
        <div class="modal-dialog modal-dialog-centered" role="document">

            <div class="modal-content"
                 style="background: linear-gradient(275deg, #5e2298, #320b82); color:#fff;border:none">
                <div class="modal-header p-0" style="position: relative;height: 50px;border-bottom: none;">
                    <img src="{{get_theme_frontend_url('assets/sticky/images/storm-log2.png')}}" class="hide-mobile"
                         style="width: 200px;z-index:10;position: absolute;bottom:-70px;transform: translate(73%, 0px);">
                    <img src="{{get_theme_frontend_url('assets/sticky/images/storm-log2.png')}}" class="view-mobile"
                         style="width: 200px;z-index:10;position: absolute;bottom:-70px;transform: translate(36%, 0px);">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                            style="position: absolute;top:14px;right: 18px;padding:0">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-bodystart text-center" style="padding: 50px 15px 15px 15px;">
                    <h3 class="mt-5">Try the storm </h3>
                    <h4 class="mb-1">machine of engagement</h4>
                    <p style="margin-bottom: 4px;"><img src="https://stickyposts.net/sticky/Sticky-logo-WH-WEB.png" style="z-index: 10;width: 90%;"></p>
                    <a href="{{get_url('register')}}" class="submit popup-btn" style="line-height: 1.5;height: 35px;border-radius: 5px; font-size: 1.5rem;font-weight: 600;background: #f9c412 !important;color: #320b82;">Start Now</a>
                </div>
            </div>

        </div>
    </div>


@endsection

@push('scripts')
    <script>
      $(document).ready(function () {

            $("#nav-btn").click(function () {
                $("#main-nav-bar").show("slow");
                $("#nav-btn").hide();
                $("#close-nav-btn").show();
            });
            $("#close-nav-btn").click(function () {
                $("#main-nav-bar").hide("slow");
                $("#nav-btn").show();
                $("#close-nav-btn").hide();
            });

            $("#main-nav-bar .scrollToLink").click(function () {
                if ($(window).width() <= 1199) {
                    $("#main-nav-bar").hide("slow");
                }
            });
            $('.clients3').slick({
                centerMode: true,
                autoplay: true,
                infinite: true,
                speed: 200,
                slidesToShow: 5,
                responsive: [
                    {
                        breakpoint: 768,
                        settings: {
                            arrows: false,
                            centerMode: true,
                            slidesToShow: 2
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            arrows: false,
                            centerMode: true,
                            slidesToShow: 1
                        }
                    }
                ]
            });
            $('.clients4').slick({
                centerMode: true,
                autoplay: true,
                infinite: true,
                speed: 200,
                slidesToShow: 4,
                responsive: [
                    {
                        breakpoint: 768,
                        settings: {
                            arrows: false,
                            centerMode: true,
                            slidesToShow: 2
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            arrows: false,
                            centerMode: true,
                            slidesToShow: 1
                        }
                    }
                ]
            });

        });
    </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

        @include('sticky.layout.partials.popups')
@endpush
