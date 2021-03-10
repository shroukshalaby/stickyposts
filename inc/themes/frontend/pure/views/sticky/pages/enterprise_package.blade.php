@extends('sticky.layout.master')
@push('head')
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
    <style>
        .site-header {
            background: linear-gradient(-145deg, #320b82 0%, #9c33c3 100%);
        }

        .dropdown a {
            color: #000;
        }

        .sub_header_in {
            background: linear-gradient(90deg, #320b82 0%, #9c33c3 100%);
        }


        ul.a {
            list-style-type: circle;
        }

        .header-navigation .main-navigation {
            background: transparent !important;
        }

        .main- a {
            color: #333 !important;
            font-size: 11px;
        }

        .header-btn {
            background: #fff;
        }

        .nav-link {
            padding: 0 8px;
        }

        /*.input-group-text , .form-control{*/
        /*    border-radius:0;*/
        /*}*/
        .box-shadow {
            -webkit-box-shadow: 0px 0px 19px -4px rgba(47, 22, 126, 1);
            -moz-box-shadow: 0px 0px 19px -4px rgba(47, 22, 126, 1);
            box-shadow: 0px 0px 19px -4px rgba(47, 22, 126, 1);
            padding: 10px;
            border-radius: 5px;
        }

        .input-group-text {
            background: linear-gradient(-145deg, #320b82 0%, #9c33c3 100%);
            color: #fff;
            width: 30px;
            align-items: center;
            justify-content: center;
            padding: 0px;
        }

        .input-group-text i {
            color: #fff;
        }

        .sticky-btn {
            background: linear-gradient(-145deg, #320b82 0%, #9c33c3 100%);
            padding: 2px 20px;
            height: auto;
        }

        .header_sec {
            color: #320b82;
            font-weight: 400;
        }

        .card {
            border: none;
        }

        .submit {
            /*height: 25px;*/
            padding: 0 5px;
        }

        .hero {

            align-items: center;
            display: flex;
            position: relative;
            color: #fff;
            color: var(--white-color);
            background-repeat: no-repeat;
            background-size: cover;

            padding: 5rem 0 3rem;
            overflow: hidden;
            background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url( {{get_theme_frontend_url('assets/sticky/images/instructor/Banner.jpg')}} );
        }

        .hero .instructor_form_register {
            background: linear-gradient(-145deg, #320b82 0%, #9c33c3 100%);
            border-radius: 2px;
        }

        .hero .content-title-box {
            text-align: center;
            border-bottom: 1px solid #fff;
            padding: 10px 0;
        }

        .hero .content-title-box .title {
            font-size: 22px;
            font-weight: 600;
        }

        .no-padding {
            padding: 0;
        }

        @media (max-width: 567px) {
            .no-padding {
                padding: 0 15px !important;
            }
            .pri-pa1 {
                padding-top: 0px!important;
            }
        }

        .hero .form-inputs-style {
            padding: 30px;
        }

        .hero .input-group-text {
            border-top-left-radius: 4px !important;
            border-bottom-left-radius: 4px !important;
        }

        .hero .form-control {
            height: calc(1.5em + .75rem + 2px);
            border-top-right-radius: 4px;
            border-bottom-right-radius: 4px;
            padding: 0px  .75rem!important;
        }

        .hero .form-control.submit {
            padding: 5px 15px;
            font-size: 18px;
            border-radius: 4px;
            background: linear-gradient(90deg, #42b0ff, #4262ff);
            color: #fff;
            border: none;
        }

        .text-red {
            color: red;
        }

        .text-transparent {
            color: transparent;
        }

        .custom-control-label::before, .custom-control-label::after {
            top: 7px;
        }

        .related-blogs {
            box-shadow: 0 0 10px -2px;
            padding: 16px;
            border-radius: 8px;
        }

        .related-blogs .boxss {
            box-shadow: 0 0 10px -2px;
            padding-bottom: 10px;

        }

        .text-box {
            height: 60px;
            background: #fff;
        }

        .social_share i {
            padding: 8px;
            border-radius: 50%;
            font-size: 1rem;
        }

        .social_share a .fa-facebook {
            background: #02549F;
            color: #fff;
        }

        .social_share a .fa-twitter {
            background: #00ACED;
            color: #fff;
        }

        .social_share a .fa-whatsapp {
            background: #5cbe4a;
            color: #fff;
        }

        .social_share a .fa-linkedin {
            background: #006699;
            color: #fff;
        }
        .social_share a .fa-facebook-messenger {
            background: #3797ff;
            color: #fff;
        }  
        .prise-font1
        {
            
        font-size: 26px;
            } 

           .pri-width1 {
            width: 70%;
            margin-bottom: 20px;
           } 

          .pri-color1{
            color:#fff;
          }  

          .pri-font2 {
            font-size: 10px;
          }

          .pri-span1 {
 
            color:#000;
            margin:0;
          }

   .pri-color2
   {
    color:#f00;
   }
.pri-pa1{
    padding-top: 38px; 
}
   

.pri-dire1{
    direction: rtl;

}

.pri-poss1
{
   position: absolute;
   left: 0%;
   background: #f00;
   top: 0%;
   color: #fff;
   padding: 1px 6px;
} 

.pri-poss2{
margin: 0;
font-size: 14px;
} 

.pri-poss3
{
    margin: 0;
    color: #310150;
    font-weight: 500;
    font-size: 18px;
}

.pri-poss4
{
    font-weight: bold;
    font-size:18px;
    color: #310150;
}

.pri-poss5
{
    margin: 0;
    color:#310150!important;
    font-weight: 500;
    font-size: 15px;
}

.pri-poss6
{
    background: linear-gradient(275deg, #5e2298, #320b82);
     border: 1px solid rgba(0,0,0,.125);
}
 </style>
@endpush
@section('page-wrapper')

@endsection

@section('body')

    <div id="page" class="{{  getCurrentLangIdiom() == 'ar' ? ' text-right'  : '' }}">
        <section class="hero">
            <div class="container">
                <div class="row justify-content-center align-items-center text-white">
                    <div class="col-md-10 col-12 no-padding">
                        <h1 class="text-white mb-md-5 mb-3 mt-5 ml-0 text-start prise-font1">{{ __('sel-h1')}}</h1>
                    </div>
                    <div class="col-md-5 col-12 no-padding">

                        <img src="https://stickyposts.net/sticky/images/logo-1-2.png" alt="Awesome Image"
                          class="pri-width1" >
                        <ul class='pl-5 a'>
                            <li>
                                {{ __('sel-ulOne')}}

                            </li>
                            <li>
                            <!-- {{ __('sel-ulOne')}} -->
                                {{ __('sel-ulTwo')}}

                            </li>
                            <li>
                                {{ __('sel-ulThree')}}
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-5 col-12 no-padding">
                        <form class="contact-sel instructor_form_register" method="post">
                            <div class="content-title-box">
                                <div class="title pri-color1">{{ __('sel-titleForm')}}</div>
                            </div>
                            <div class="form-row form-inputs-style">
                                <div class="col-md-12 mb-3">
                                    <div class="input-group">
                                        <span class="text-red px-1">*</span>
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupPrepend2"><i class="fas fa-user"></i></span>
                                        </div>
                                        <input type="text" name="name" class="form-control" id="validationDefaultUsername" placeholder="{{ __('sel-name')}}" aria-describedby="inputGroupPrepend2" required>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="input-group">
                                        <span class="text-red px-1">*</span>
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupPrepend2"><i class="far fa-building"></i></span>
                                        </div>
                                        <input type="text" name="company" class="form-control" id="validationDefaultUsername" placeholder="{{ __('sel-company')}}"aria-describedby="inputGroupPrepend2" required>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="input-group">
                                        <span class="text-red px-1">*</span>
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupPrepend2">@</span>
                                        </div>
                                        <input type="email" name="email" class="form-control" id="validationDefaultUsername" placeholder="{{ __('sel-email')}}" aria-describedby="inputGroupPrepend2" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="input-group">
                                        <span class="text-red px-1">*</span>
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupPrepend2"><i class="fas fa-home"></i></span>
                                        </div>
                                        <select class="form-control" name="country" required>
                                            @include('sticky.layout.partials.helpers.countries')
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="input-group">
                                        <span class="text-red px-1">*</span>
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupPrepend2"><i class="fas fa-phone"></i></span>
                                        </div>
                                        <input type="text" name="phone"  class="form-control" id="validationDefaultUsername" placeholder="{{ __('sel-numberPhone')}}" aria-describedby="inputGroupPrepend2" required>
                                    </div>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <div class="input-group">
                                        <span class="text-transparent px-1">*</span>
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupPrepend2"><i class="fas fa-briefcase"></i></span>
                                        </div>
                                        <select name="function" class="form-control">
                                            <option disabled selected>{{ __('sel-jobFunction')}}</option>
                                            <option value='C-Level'>C-Level</option>
                                            <option value='Executive'>Executive</option>
                                            <option value='GM'>GM</option>
                                            <option value='Director'>Director</option>
                                            <option value='Senior'>Senior</option>
                                            <option value='Joiner'>Joiner</option>
                                            <option value='Internship'>Internship</option>
                                            <option value='Training'>Training</option>
                                            <option value='Board member'>Board member</option>
                                            <option value='CEO'>CEO</option>
                                            <option value='chairman'>chairman</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <div class="input-group">
                                        <span class="text-transparent px-1">*</span>
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupPrepend2"><i class="fas fa-user-tie"></i></span>
                                        </div>
                                        <select name="numEmps" class="form-control">
                                            <option disabled selected>{{ __('sel-numberEmployes')}}</option>
                                            <option value='1-10'>1-10</option>
                                            <option value='11-50'>11-50</option>
                                            <option value='51-100'>51-100</option>
                                            <option value='101-150'>101-150</option>
                                            <option value='151-200'>151-200</option>
                                            <option value='201-1000'>201-1000</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="text-start p-0 pri-font2"><span class="pri-span1">( <span class="pri-color2">*</span> )</span> {{ __('sel-requiredStar')}}
                                    </div>
                                    <label for="validationTextarea">{{ __('sel-doYouWant')}}</label>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="customControlValidation2" value="get-in-contact-with-our-technical-team" name="type">
                                        <label class="custom-control-label" for="customControlValidation2">{{ __('sel-getContact')}}</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <input class="form-control submit" type="submit" style="" value="{{__('dev-re')}}">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <div class='container py-5 enterprisePkSection'>
            <div class='row justify-content-center'>
                <div class='col-md-8 mb-md-0 mb-3 pri-pa1'>
                    <div class="row mx-0">
                        <div class="col-12 px-0">
                            <div class="card pri-dire1">
                                <form>
                                    <div class="card-body box_shadow p-md-2 pt-5 pb-4">
                                        <div class="row">
                                            <div class="pri-poss1">
                                                <p class="pri-poss2"> {{ __('sel-forLimited')}}</p>
                                            </div>
                                            <img src="{{get_theme_frontend_url('assets/sticky/logo-s.png')}}" class="img-fluid IMAGES img-french">
                                            <div class="col-12 text-center">
                                                <p class="pri-poss3">{{ __('sel-get')}}
                                                    <span class="pri-poss4">{{ __('sel-getOffer')}}</span>
                                                </p>
                                                <p class="pri-poss5">{{ __('sel-customizePackage')}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row related-blogs mt-3 mx-0" style="">
                        <div class="col-12 px-2 mb-2">
                            <h4>{{ __('sel-h4')}}</h4>
                        </div>
                        @foreach ($posts as $post)
                        <div class="col-md-4 px-md-2 px-0 mb-md-0 mb-3">
                            <div class="boxss">
                                <a href="{{ 'https://stickyposts.net/blog/stickypost-en/' . $post->title_slug}} ">
                                    <div class="imagess">
                                        <img src=" {{ 'https://stickyposts.net/blog/stickypost-en/' . $post->image_mid}}"
                                             alt="" class="img-fluid w-100">
                                    </div>
                                    <div class="caption-content text-right px-3">
                                        <div class="text-box" data-maxlength="200" dir="LTR">
                                            <p class="text-truncate text-start">  {{  $post->title}}  </p>
                                        </div>
                                    </div>
                                </a>
                                <div class="social_share text-center px-3">
                                    <a class="social-links-main-bg" href="#" target="_blank"><i
                                                class="fab fa-facebook"></i></a>
                                    <a class="social-links-main-bg" href="#" target="_blank"><i
                                                class="fab fa-twitter"></i></a>
                                    <a class="social-links-main-bg" href="#" target="_blank"><i
                                                class="fab fa-whatsapp"></i></a>
                                    <a class="social-links-main-bg" href="#" target="_blank"><i
                                                class="fab fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class='col-lg-3 col-md-3 col-12'>
                 <?php echo file_get_contents('https://crmmrkt.com/ContentController/template/27/'.getCurrentLangIdiom()); ?>
                </div>
            </div>
        </div>
    </div>    
    @endsection


@push('scripts')
@include('sticky.layout.partials.common.sweetalert')
    @include('sticky.layout.partials.common.inboundLeadScript',['selector'=>'.instructor_form_register','type'=>'enterprise_package'])


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
