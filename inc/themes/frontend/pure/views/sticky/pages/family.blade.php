@extends('sticky.layout.master')

@section('title','Family Package StickyPosts')
@push('head')
    <link rel="stylesheet" href="{{get_theme_frontend_url('assets/sticky/css/small-device.css')}}">
    <link rel="stylesheet" href="{{get_theme_frontend_url('assets/sticky/css/style_home.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <style>
    @media(max-width:567px){
     .family-color1 {
            padding: 95px 0 20px!important;
        }  
    .box_shadow_height {
            height: 165px!important;
        }
    .section-2 .item .caption {
        padding: 0 10px;
        font-size: 18px;
        line-height: 1.3;
    }    
    .box_shadow_height {
        height: 165px;
    }
    }
    .single-pricing-one ul.feature-lists{
        height:auto!important;
    }
       .li-style-0{
          list-style:none;  
       }
        .site-header{
            background:linear-gradient(-145deg, #320b82 0%, #9c33c3 100%);
        }
        .slick-slide{
            height:auto !important;
        }
        .about{
            border:none;
        }
        .box_shadow_height{
            height:140px;
        }
        .box_shadow{
            background:#fff;
            padding: 10px;
            -webkit-box-shadow: 0px 0px 19px -4px rgba(47,22,126,1);
            -moz-box-shadow: 0px 0px 19px -4px rgba(47,22,126,1);
            box-shadow: 0px 0px 19px -4px rgba(47,22,126,1);
            border-radius:10px;
        }

        .pricing-style-one .tab-title li a{
            border-radius:5px !important;
        }
        .section-head {
            position: relative;
            padding: 0;
            color: #320b82!important;
            letter-spacing: -1px;
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            text-transform: none;
        }
        #features li{
            border-radius:0px;
        }
        .black-color{
            color:#030300;
        }
        .card-header p{
            color:#320b82 !important;
        }
        .card-body label{
            color:#320b82 !important;
        }
        .card-footer{
            color:#320b82 !important;
        }
        .highlights-phone.wht .phone-holder #fon{
            background:url(images/phone-black.png) center top no-repeat;
        }
        .phone-holder {
            display: block;
            height: 100%;
            position: relative;
            top: 22px;
            left: -2px;
            width: 259px;
            margin: auto;
            overflow: hidden;
        }
        .hgi img{
            width:100%;
            height:421px;
            margin-left:0;
        }
        .highlights-phone.wht .hgi{
            top:19px;
        }
        .card{
            background:linear-gradient(0deg, #FF9800 , #f8f900) !important;
        }
        .content{
            color: #000;
            padding: 10px;
            border-radius: 5px;
            color:#fff;
            background:linear-gradient(-145deg, #320b82 0%, #9c33c3 100%);
        }
        #features li{
            margin:55px 0;
        }
        @media(max-width:767px){
            .col-rev{
                flex-direction: column-reverse !important;
                margin-top:5rem !important;
                padding-right:22px !important;
            }
        }
        .more{
            font-size: 16px;
            color: #320b82;
            text-decoration: underline;
            cursor: pointer;
            font-weight: bold;
           
        }
        .content p{
            margin:0;
            text-align:center;
        }
        .content a{
            color:#fff;
        }
        .number-circle{
            width:50px;
            height:50px;
            border-radius:50%;
            background:linear-gradient(-145deg, #320b82 0%, #9c33c3 100%);
            color:#fff;
            text-align:center;
            line-height:3;
        }
        .features-left li img, .features-right li img {
            top: 5px;
        }
        #features li {
            height: 105px;
        }

        /*start add classs*/


        .install-height1
        {
            height:100%;
        } 
        .instal-width1{
            width: 15%;
        }
        .instal-width2{
            width:40.8%!important;
        }

        .instal-width3{

           min-width:none!important;
        }
        .instal-width4{

        width: 75%;
         }

         .instal-width5{
        width:85%;
         }
        
         .instal-width6{
        width:50%;
         }
        
        .instal-over1{
            overflow-y:auto;
        }
        .install-margin
        {
        margin-right: 5px;
        }
        
        .install-hidden1{
        visibility:hidden
        }
        
        .install-transp{
        
            background-color: transparent; 
            }
            
        .install-fonts
        {
            font-size: 14px;
            font-weight: normal;
           
        }
        .install-margin 
        {
          margin-right: 5px;
        }
        
      
        .install-p1
        {
            margin: 0;
            padding: 0;
            font-size: 12px;
            line-height: 2.4;
            text-align:left;
        
        }
        /*style family*/

        .family-color1
        {
            background:#f8f900;
            padding:75px 0 0;
        }

        .family-font1
        {
            font-weight:900;
        }
        .family-font2
        {
            font-weight:500; 
            color:#000;
        }

        .family-font3
        {
            font-weight:300;
        }
       .family-font8{
        font-size: 15px;
       }
        .family-border1
        {
            border-radius: 0px 5px 5px 0px;
        }

        .family-border2
        {
            border-radius: 0px 5px 5px 0px;
            text-transform: none;
        }
 .family-font4{
    font-weight:900;
     color:#000 ;
     font-size: 2.4rem;
    margin-top: 0.8rem;
 }
 .family-font5{
    font-weight:500 ; 
    max-width: 550;
    color:#000;
    margin:0.8rem auto;
}
.family-font6{
    font-weight:300; 
    color:#000
}
.family-font7{
    font-weight:700

}

.family-color2{
    background: linear-gradient(90deg,#42b0ff,#4262ff);
    padding: 5px 15px;
    font-size: 1.5rem ;
    border-radius:5px;
}
.family-color2{
    color:#000;
     text-decoration: underline;
}
.family-p1{
    font-size: 1rem;
     margin: 0;
     color:#000;
}

.family-marg1 {
    margin-top: .6rem;
    font-size: 1rem; 
    font-weight: 700;
}

.family-color3 {
 color:#320b82;
}
.family-color3-compare{
    font-weight: bold;
    text-decoration: underline;
    font-size: 18px;
}
.family-color4
{
color: #fff;
text-decoration: underline;
font-weight: bold;
}

.family-border3 
{
    border-radius: 5px;
    padding: 2px 10px;
    color:#fff;
}

.family-font9
{
    font-size: 13px;
}
.family-font10
{
  font-size:1.7rem;
}
.fam-marg1
{
    margin:0 !important;
} 
.fam-marg2
{
    margin: 0;
    padding: 0 3px;
    font-size: 1.5rem;
    font-weight:700;
}
.fam-font11{
   font-size: 1.2rem;
    line-height: 1.5;
}
.fam-pos1
{
    position:relative;
} 

.fam-width2
{
    width: 100%;
    overflow: hidden;
    border-top: 3px solid #320b82 !important;
}

.fam-js1{
    justify-content: center;
    align-items: center;
} 
.fam-width3
{
    width: 100%;
    height: auto;
}

.fam-js2
{
    direction: ltr;
}

.fam-color5
{
    background: #f8f900;
}

.fam-color6
{
    color:#f00;
}

.fam-cursor
{
  cursor: pointer;
}

.fam-span1
{
 font-weight:bold;
 font-size:16px;
}

.fam-span2{
    padding:5px;
    color:#f00;
}

.fam-color8 {
  color:#310150;
  background: #eee;
    padding: 10px;
} 

.fam-color9
{
    background-color: #fff;
    color: #f00;
    border-top: 2px solid #999;
    font-weight: bold;
    width: 80%;
    margin: auto;
}

.fam-mag3{
    margin:0;
    font-size: 12px;
    font-weight: bold;
} 

.fam-width4 
{
    width: 100%;
    height:auto;
}


.fam-span3{
    font-weight:bold;
    font-size:16px;
} 

.fam-span4
{
    padding:5px;
    color:#f00;
}
.form-note p{
      font-size: 15px!important;  
}
.fam-color10{
    color:#310150;
    background: #eee;
    padding: 10px;
} 

.fam-color11 {
   background-color: #fff;color: #f00;
   border-top: 2px solid #999;
   font-weight: bold;
   width: 80%;
   margin: auto;"
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
<div class="mainFamilySection {{  getCurrentLangIdiom() == 'ar' ? 'mr-auto text-right'  : '' }}">

    <div class="banner family-color1" >
        <div class="row m-0  col-rev hide-mobile">
            <div class="col-md-6 text-start mt-1 px-4">
                 @switch( getCurrentLangIdiom())
                    @case('ar')
                    <img src="{{get_theme_frontend_url('assets/sticky/images/logo-whq.png')}}"  class="instal-width2">
                    @break
                    @case('en')
                          <img src="{{get_theme_frontend_url('assets/sticky/images/logo-WHe.png')}}"  class="instal-width2">
                    @break
                    @case('fr')
                           <img src="{{get_theme_frontend_url('assets/sticky/images/logo-WHe.png')}}"  class="instal-width2">
                    @break
                    @default
                    6$
                @endswitch
                <h1 class='black-color family-font1 text-start'>{{ __('fam-familyFirst')}}</h1>
                <h4 class='black-color family-font2'>{{ __('fam-provideAllSecured')}}</h4>
                <h4 class='black-color family-font3'>{{ __('fam-betterFuture')}}</h4>
                <form class="subscribe_form m-0 signuptrial family-border1" method="post">
                    <div class="input-group" style="{{  getCurrentLangIdiom() == 'ar' ? 'direction:ltr'  : '' }}">
                        <input name="email" class="form-control instal-width3 " id="email" type="email" placeholder="{{__('EnterEmail')}}"  title="Your e-mail address is required so I can reply" required="" maxlength="50" pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}">
                        <input type="hidden" name="type" value="family english">
                        <span class="input-group-btn ">
                                <button class="btn btn-default family-border2" type="submit">{{ __('fam-startNow')}}</button>
                        </span>
                    </div>
                </form>
                <div class="form-note">
                    <p><strong>{{ __('fam-familyMembers')}}</strong> </p>
                </div>
            </div>
            <div class="col-md-6 d-flex justify-content-end" >
                <img src="https://stickyposts.net/Family/images/pngkey.com-family-png-54.png" class="instal-width4" >
            </div>
    
        </div>
        <div class=" m-0 view-mobile text-start " >
            <div class="container">
                 @switch( getCurrentLangIdiom())
                    @case('ar')
                    <img src="{{get_theme_frontend_url('assets/sticky/images/logo-whq.png')}}"  class="instal-width5">
                    @break
                    @case('en')
                          <img src="{{get_theme_frontend_url('assets/sticky/images/logo-WHe.png')}}"  class="instal-width5">
                    @break
                    @case('fr')
                           <img src="{{get_theme_frontend_url('assets/sticky/images/logo-WHe.png')}}"  class="instal-width5">
                    @break
                    @default
                    6$
                @endswitch
                <h2 class="family-font4"> {{ __('fam-familyFirst')}}</h2>
                <h2 class="family-font5" >{{ __('fam-provideAllSecured')}} </h2>
                <h5  class='my-3 family-font6'>{{ __('fam-betterFuture')}}</h5>
    
                <div class="subform my-3">
                    <a class="submit family-color2 {{  getCurrentLangIdiom() == 'ar' ? 'py-0'  : 'py-3' }} px-3 text-white" style="text-decoration:none" href="{{get_url('register')}}"> {{ __('temp-link-1')}}</a>
                </div>
                <div class="family-marg1" >
                    <a href="{{get_url('pricing')}}" id="compar" class="family-color3 family-color3-compare">{{ __('temp-link-2')}} </a>
                </div>
                <div class="form-note" >
                    <p class="family-p1">{{ __('fam-familyMembers')}} </p>
                </div>
            </div>
        </div>
    </div>
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
    <div class='container mt-md-5 mt-3 mb-3 familySection'>
        <div class="box_shadow hide-mobile ">
            <div class="row m-0">
                <div class="col-md-3">
                    <img src='https://stickyposts.net/Family/fam.png' alt='family' class='img-fluid'>
                </div>
                <div class="col-md-9" >
                    <div class="title text-start">
                        <h2 class="family-color3">{{ __('fam-whyFamilyPackage')}}</h2>
                    </div>
                    <div class="description">
                        <ul>
                            <li class="family-font8 li-style-0" >{{ __('fam-Why don’t you secure')}} <span class="more">{{ __('fam-learnMore')}}</span></li>
                            <div class="content text-center">
                                <p class="mb-2">{!! __('fam-mediaCelebrities')!!}
                                </p>
                                <a class="submit {{  getCurrentLangIdiom() == 'ar' ? 'py-0'  : 'py-2' }} " href="{{get_url('register')}}" class="family-border3"  >{{__('land-start')}}</a>
                            </div>
                            <li class="family-font8 li-style-0">{{ __('fam-technologicalSuccess')}} <span class="more">{{ __('fam-learnMore')}}</span></li>
                            <div class="content text-center">
                                <p class="mb-2">
                                    {!! __('fam-making money')!!}
    
                                </p>
                                <a class="submit  {{  getCurrentLangIdiom() == 'ar' ? 'py-0'  : 'py-2' }} " href="{{get_url('register')}}" class="family-border3" >{{__('land-start')}}</a>
                            </div>
                            <li class="family-font9 li-style-0">{{ __('fam-technologicalDevelopment')}} <span class="more">{{ __('fam-learnMore')}}</span> </li>
                            <div class="content text-center">
                                <p class="mb-2">{{ __('fam-largest monthly')}} </p><br>
                                <a class="my-3 family-color4">{{ __('fam-Click here to download')}}</a><br>
                                <a class="submit  {{  getCurrentLangIdiom() == 'ar' ? 'py-0'  : 'py-2' }} " href="{{get_url('register')}}" class="family-border3">{{__('land-start')}}</a>
                            </div>
                        </ul>
                    </div>
                </div>
    
            </div>
        </div>
        <div class="my-md-4 my-0">
            <h3 class="section-head mt-2">{{ __('fam-buildTechnological')}}</h3>
            <h3 class="section-head p-0 mb-3"> {{ __('fam-futureGrandchildren')}}</h3>
    
            <div class="row mt-3">
                <div class="col-md-4 pt-3">
                    <div class="row justify-content-center w-100">
                        <div class="number-circle">1</div>
                    </div>
                    <div class="box_shadow box_shadow_height mt-2">
                        <h3 class="family-border10">{{ __('fam-social media accounts')}} </h3>
                        <div class="row  my-4">
                            <div class="col-2">
                                <div>
                                    <a href="https://twitter.com/StickypostsMEA">
                                        <img src="https://stickyposts.net/sticky/Twitter.png" class="img-fluid rounded"><br>
                                    </a>
                                </div>
                            </div>
                            <div class="col-2">
                                <div>
                                    <a href="https://www.facebook.com/stickypoststool">
                                        <img src="https://stickyposts.net/sticky/Facebook.png" class="img-fluid rounded"><br>
                                    </a>
                                </div>
                            </div>
                            <div class="col-2">
                                <div>
                                    <a href="https://www.youtube.com/channel/UCU2cHOoahBCDzPHoYGcDdQA?view_as=subscriber">
                                        <img src="https://stickyposts.net/sticky/YouTube.png" class="img-fluid rounded"><br>
                                    </a>
                                </div>
                            </div>
                            <div class="col-2">
                                <div>
                                    <a href="https://www.instagram.com/stickypostsmea/">
                                        <img src="https://stickyposts.net/sticky/Instagram.png" class="img-fluid rounded"><br>
                                    </a>
                                </div>
                            </div>
                            <div class="col-2">
                                <div>
                                    <a href="https://www.linkedin.com/company/stickypostsmea">
                                        <img src="https://stickyposts.net/sticky/LinkedIn.png" class="img-fluid rounded"><br>
                                    </a>
                                </div>
                            </div>
                            <div class="col-2">
                                <div>
                                    <a href="https://www.pinterest.com/stickypostsmea/">
                                        <img src="https://stickyposts.net/sticky/Pinterest.png" class="img-fluid rounded"><br>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 pt-3">
                    <div class="row justify-content-center w-100">
                        <div class="number-circle">2</div>
                    </div>
                    <div class="box_shadow box_shadow_height mt-2">
                        {{ __('fam-Participate_in_Sticky_posts')}}
                    </div>
                </div>
                <div class="col-md-4 pt-3">
                    <div class="row justify-content-center w-100">
                        <div class="number-circle">3</div>
                    </div>
                    <div class="box_shadow box_shadow_height mt-2">
                        {{ __('fam-Start by scheduling')}}
                    </div>
                </div>
                <div class="col-md-4 pt-3">
                    <div class="row justify-content-center w-100">
                        <div class="number-circle">4</div>
                    </div>
                    <div class="box_shadow box_shadow_height mt-2">
                        {{ __('fam-Start using the posts generator')}}
                    </div>
                </div>
                <div class="col-md-4 pt-3">
                    <div class="row justify-content-center w-100">
                        <div class="number-circle">5</div>
                    </div>
                    <div class="box_shadow box_shadow_height mt-2">
                        {{ __('fam-Receive advertisers')}}
                    </div>
                </div>
                <div class="col-md-4 pt-3">
                    <div class="row justify-content-center w-100">
                        <div class="number-circle">6</div>
                    </div>
                    <div class="box_shadow box_shadow_height mt-2">
                        {{ __('fam-Follow activities')}}
                    </div>
                </div>
            </div>
        </div>
        <div class="view-mobile  section-2 fam-marg1" >
            <div class="row w-75 mx-auto">
                <div class="title text-center w-100 view-mobile pt-4">
                    <h2  class="family-color3" >{{ __('b_Features')}}</h2>
                </div>
                <div class=" col-12">
                    <div class="item text-center" >
                        <img src="https://stickyposts.net/sticky/images/mobile-images/family/Schadule%20copy.png" class="img-fluid instal-width6" >
                        <div class="about" >
                            <p class="fam-marg2">{{ __('fam-Automated Scheduling')}}</p>
                            <div class="caption fam-font11">{{ __('fam-Save time by scheduling')}}</div>
                        </div>
                    </div>
                </div>
                <div class=" col-12">
                    <div class="item text-center" >
                        <img src="https://stickyposts.net/sticky/images/mobile-images/family/time copy.png" class="img-fluid instal-width6"  >
                        <div class="about"  >
                            <p class="fam-marg2">{{ __('fam-Time Management')}}</p>
                            <div class="caption fam-font11">{{ __('fam-Save your time')}}</div>
                        </div>
    
                    </div>
                </div>
                <div class=" col-12">
                    <div class="item text-center" >
                        <img src="https://stickyposts.net/sticky/images/mobile-images/family/Reports copy.png" class="img-fluid instal-width6">
                        <div class="about">
                            <p class="fam-marg2">{{ __('fam-reportsStatistics')}}</p>
                            <div class="caption fam-font11">{{ __('fam-Receive detailed')}}</div>
                        </div>
                    </div>
                </div>
                <div class=" col-12">
                    <div class="item text-center fam-pos1"  >
    
                        <img src="https://stickyposts.net/sticky/images/mobile-images/family/Auto-Reply copy.png" class="img-fluid instal-width6">
                        <div class="about"  >
                            <p class="fam-marg2">{{ __('fam-Auto Activities')}}</p>
                            <div class="caption fam-font11">{{ __('fam-Save time by using auto activities')}}</div>
                        </div>
    
                    </div>
                </div>
                <div class=" col-12">
                    <div class="item text-center  fam-pos1" >
                        <!-- Start Tommorow from here -->
                        <img src="https://stickyposts.net/sticky/images/mobile-images/family/Competitors copy.png" class="img-fluid instal-width6">
                        <div class="about"  >
                            <p class="fam-marg2">{{ __('fam-Competitors')}} {{ __('fam-influencers')}}</p>
                            <div class="caption fam-font12">{{ __('fam-Stay updated')}}</div>
                        </div>
    
                    </div>
                </div>
            </div>
        </div>
        <div class="">
            <h1 class='section-head hide-mobile mt-2'>{{ __('fam-Family benefits')}}</h1>
            <h2 class="section-head view-mobile mb-4" >{{ __('fam-FREE E-book')}}</h2>
            <div class="row">
                <div class="col-sm-6 col-md-7 col-lg-9 hide-mobile">
                    <div id="features" class="section wb p-0">
                        <div class="container">
    
                            <div id="default" class="row clearfix zenith_slider p-0">
    
                                <!--The First row-->
                                <div class="col-lg-4 col-md-8 col-sm-12 col-xs-12 left-row">
                                    <ul class="features-left text-start">
                                        <li class="highlight lhgh" data-index="0">
                                            <img src="https://stickyposts.net/Family/images/secure.png">
                                            <div class="fl-inner">
                                                <h4>{{ __('fam-Safe and protected')}}</h4>
                                                <p>{{ __('fam-confidential and protected')}}</p>
                                            </div>
                                        </li><!-- .highlight .left-row -->
    
                                        <li class="highlight lhgh" data-index="1">
                                            <img src="https://stickyposts.net/Family/images/mobileslider/Time.png">
                                            <div class="fl-inner">
                                                <h4>{{ __('fam-Time saving')}}</h4>
                                                <p>{{ __('fam-Spend 10-20 minutes')}}</p>
                                            </div>
                                        </li><!-- .highlight .left-row -->
    
                                        <li class="highlight lhgh" data-index="2">
                                            <img src="https://stickyposts.net/Family/images/mobileslider/Reports.png">
                                            <div class="fl-inner">
                                                <h4>{{ __('fam-Reports and statistics')}}</h4>
                                                <p>{{ __('fam-Get detailed')}}</p>
                                            </div>
                                        </li><!-- .highlight .left-row -->
                                    </ul>
                                </div><!-- .row .left-row -->
    
                                <div class="highlights-phone col-lg-4 col-md-4 col-sm-12 col-xs-12 wht">
    
                                    <div class="phone-holder">
                                        <div id="fon"></div>
                                        <div class="hgh-linner hgi" data-index="0">
                                            <img width="190" height="320" src="https://stickyposts.net/Family/images/mobileslider/phone/Secure.png" class="attachment-highlight wp-post-image" alt="screen" />
                                        </div>
                                        <div class="hgh-linner hgi" data-index="1">
                                            <img width="234" height="398" src="https://stickyposts.net/Family/images/mobileslider/phone/time.png" class="attachment-highlight wp-post-image" alt="screensdst" />
                                        </div>
                                        <div class="hgh-linner hgi" data-index="2">
                                            <img width="234" height="398" src="https://stickyposts.net/Family/images/mobileslider/phone/reports.png" class="attachment-highlight wp-post-image" alt="screen_09" />
                                        </div>
                                        <div class="hgh-rinner hgi" data-index="3">
                                            <img width="234" height="398" src="https://stickyposts.net/Family/images/mobileslider/phone/schadule.png" class="attachment-highlight wp-post-image" alt="screen_07" />
                                        </div>
                                        <div class="hgh-rinner hgi" data-index="4">
                                            <img width="234" height="398" src="https://stickyposts.net/Family/images/mobileslider/phone/Auto-reply.png" class="attachment-highlight wp-post-image" alt="screen_08" />
                                        </div>
                                        <div class="hgh-rinner hgi" data-index="5">
                                            <img width="234" height="398" src="https://stickyposts.net/Family/images/mobileslider/phone/competitors.png" class="attachment-highlight wp-post-image" alt="screen_06" />
                                        </div>
                                    </div>
                                </div>
    
                                <!--The Second row-->
                                <div class="col-lg-4 col-md-8 col-sm-12 col-xs-12 right-row">
                                    <ul class="features-right text-start">
                                        <li class="highlight rhgh" data-index="3">
                                            <img src="https://stickyposts.net/Family/images/mobileslider/Schadule.png">
                                            <div class="fr-inner">
                                                <h4>{{ __('fam-Auto Scheduling')}}</h4>
                                                <p>{{ __('fam-Post on all')}}</p>
                                            </div>
                                        </li><!-- .highlight .left-row -->
                                        <li class="highlight rhgh" data-index="4">
                                            <img src="https://stickyposts.net/Family/images/mobileslider/Auto-Reply.png">
                                            <div class="fr-inner">
                                                <h4>{{ __('fam-Auto Activities')}}</h4>
                                                <p>{{ __('fam-You-can-manage')}}</p>
                                            </div>
                                        </li><!-- .highlight .left-row -->
                                        <li class="highlight rhgh" data-index="5">
                                            <img src="https://stickyposts.net/Family/images/mobileslider/Influencer.png">
                                            <div class="fr-inner">
                                                <h4>{{ __('fam-Bloggers and influencers')}}</h4>
                                                <p> {{ __('fam-Stay up to date with influencers')}}</p>
                                            </div>
                                        </li><!-- .highlight .left-row -->
                                    </ul>
                                </div><!-- .row .left-row -->
    
                            </div><!--Highlights close-->
                        </div><!-- end container -->
                    </div><!-- end section -->
    
                </div>
                <div class="col-sm-6 col-md-5 col-lg-3 my-auto">
                    <?php echo file_get_contents('https://crmmrkt.com/ContentController/template/13/'.getCurrentLangIdiom()); ?>
                </div>
    
            </div>
        </div>
        <div class=' text-center hide-mobile fam-width2'>
            <h2 class="section-head hide-mobile py-3">{{ __('fam-Family Package Prices')}}</h2>
            <div class="row fam-js1" dir='ltr'>
                <div class="col-lg-3 col-md-4 col-sm-5 text-center mb-3">
                    <div class="single-pricing-one fam-width3">
                        <div class="top-block fam-js2" >
                            <h2 class="fam-color5">{{ __('fam-Monthly')}}</h2>
                            <p class="price m-0 fam-js2">


                                @switch($ipData['geoplugin_countryName'])
                                    @case ('Egypt')
                                    310 EGP
                                    @break
                                    @case ('United Arab Emirates')
                                    73 Dirham
                                    @break
                                    @case ('Saudi Arabia')
                                    75 Riyal
                                    @break
                                    @default
                                    24$
                                @endswitch

                            </P>
    
                            <p class="pack-name"> {{ __('fam-4 Users')}} </p>
                            <div class="line"></div><!-- /.line -->
                        </div><!-- /.top-block -->
                        <ul class="feature-lists text-start px-2 fam-js2" >
                            <li><span class="fam-color6">*</span>{{ __('fam-You can manage')}} <span class="fam-span1"> {{ __('fam-number24')}}</span> {{ __('fam-pages only')}}</li>
                            <li><span class="fam-color6">*</span>{{ __('fam-Unlimited team members')}}</li>
                            <li><span class="fam-color6">*</span>{{ __('fam-Posts Generator')}}</li>
                            <li><span class="fam-color6">*</span>{{ __('fam-Up to 50 Megabyte available storage')}}</li>
                            <li><span class="fam-color6">*</span>{{ __('fam-Copyright protection')}}</li>
                            <li><span class="fam-color6">*</span>{{ __('fam-Reports')}}</li>
                            <li><span class="fam-color6">*</span>{{ __('fam-Auto Activities')}} <span class="fam-span2">{{ __('fam-extra')}} </span></li>
                            <li><span class="fam-color6">*</span>{{ __('fam-Availability')}} </li>
                            <li><span class="fam-color6">*</span>{{ __('fam-Competitors')}}</li>
                        </ul><!-- /.feature-lists text-start -->
                        <div class="mt-3">
                            <a href="{{get_url('register')}}" class="price-btn fam-cursor">{{ __('fam-Buy Now')}}</a>
                            <h5 class="tag-line text-center fam-color8 mb-0">{!!__('fam-No Extra')!!}</h5>
                        </div><!-- /.bottom-block -->
                        <div class="fam-color9">
                            <p class="fam-mag3">{{ __('fam-Extra Free Trial')}}</p>
                        </div>
                    </div><!-- /.single-pricing-one -->
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-3 col-md-4 col-sm-5 text-center mb-3">
                    <div class="single-pricing-one fam-width4">
                        <div class="top-block fam-js2" >
                            <h2 class="fam-color5">
                                {{ __('fam-Annually')}}
                            </h2>
                            <p class="price m-0 fam-js2">

                                @switch($ipData['geoplugin_countryName'])
                                    @case ('Egypt')
                                    3340 EGP
                                    @break
                                    @case ('United Arab Emirates')
                                    779 Dirham
                                    @break
                                    @case ('Saudi Arabia')
                                    802 Riyal
                                    @break
                                    @default
                                    213$
                                @endswitch


                            </P>
    
                            <p class="pack-name">{{ __('fam-4 Users')}} </p>
                            <div class="line"></div><!-- /.line -->
                        </div><!-- /.top-block -->
                        <ul class="feature-lists text-start px-2 fam-js2">
                            <li><span class="fam-color6">*</span>{{ __('fam-You can manage')}} <span class="fam-span3">{{ __('fam-number24')}} </span> {{ __('fam-pages only')}}</li>
                            <li><span class="fam-color6">*</span>{{ __('fam-Unlimited team members')}}</li>
                            <li><span class="fam-color6">*</span>{{ __('fam-Posts Generator')}}</li>
                            <li><span class="fam-color6">*</span>{{ __('fam-Up to 50 Megabyte available storage')}}</li>
                            <li><span class="fam-color6">*</span>{{ __('fam-Copyright protection')}}</li>
                            <li><span class="fam-color6">*</span>{{ __('fam-Reports')}}</li>
                            <li><span class="fam-color6">*</span>{{ __('fam-Auto Activities')}} <span class="fam-span4">{{ __('fam-extra')}} </span></li>
                            <li><span class="fam-color6">*</span>{{ __('fam-Availability')}} </li>
                            <li><span class="fam-color6">*</span>{{ __('fam-Competitors')}}</li>
                        </ul><!-- /.feature-lists text-start -->
                        <div class="mt-3">
                            <a href="{{get_url('register')}}" class="price-btn fam-cursor">{{ __('fam-Buy Now')}}</a>
                            <h5 class="tag-line text-center fam-color10 mb-0">{!! __('fam-No Extra')!!}</h5>
                        </div><!-- /.bottom-block -->
                        <div  class="fam-color11">
                            <p class="fam-mag3">{{ __('fam-Extra Free Trial')}}</p>
                        </div>
                    </div><!-- /.single-pricing-one -->
                </div><!-- /.col-lg-4 -->
            </div>
        </div>
       
    </div>
   
</div>
@endsection

@push('scripts')

  @include('sticky.layout.partials.popups')
    
<script>
    $(".content").slideUp();
    $(".more").click(function(){
        $(this).parent().next().slideToggle(500);
    })
    $("#nav-btn").click(function(){
        $("#main-nav-bar").show("slow");
        $("#nav-btn").hide();
        $("#close-nav-btn").show();
    });
    $("#close-nav-btn").click(function(){
        $("#main-nav-bar").hide("slow");
        $("#nav-btn").show();
        $("#close-nav-btn").hide();
    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
@endpush

