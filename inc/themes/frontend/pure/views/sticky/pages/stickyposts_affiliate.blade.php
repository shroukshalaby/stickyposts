@extends('sticky.layout.master')
@push('head')
  <link rel="stylesheet" href="{{get_theme_frontend_url('assets/sticky/css/carousel.css')}}">
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
        .row:before, .row:after {
            display: none !important;
        }
        .model-tabs{
            padding:10px 30px!important;
        }
        .row {

        &:before,&:after {
            display: block;
        }

        }
        .carousel-control-prev {
            left: -40px;
        }
        .carousel-control-next {
            right: -40px;
        }
        .list-unstyled {
          padding: 0!important;
        }     
        .section-heading{
            margin-bottom: 10px;
            text-align: center;
            color: #320b82;
        }
        .site-header {
            background: linear-gradient(-145deg, #320b82 0%, #9c33c3 100%);
        }

        .bg-1 {
            background-image: url("{{get_theme_frontend_url('assets/sticky/images/affia-banner-1 with out words.png')}}");
            width: 100%;
            height: 400px;
            background-size: cover;
            background-repeat: no-repeat;
        }

        .bg-2 {
            background-image: url("{{get_theme_frontend_url('assets/sticky/images/affia-banner-2 with out words.png')}}");
            width: 100%;
            height: 400px;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .forme-place {
            justify-content: flex-end;
            display: flex;
            align-items: center;
            width: 100%;
            height: 100%;

        }

        #email {
            min-width: 300px;
        }

        .formee {
            margin-top: 40px;
        }

        .box-shadow {
            margin: auto;
            background: #fff;
            padding: 10px;
            -webkit-box-shadow: 0px 0px 19px -4px rgba(47, 22, 126, 1);
            -moz-box-shadow: 0px 0px 19px -4px rgba(47, 22, 126, 1);
            box-shadow: 0px 0px 19px -4px rgba(47, 22, 126, 1);
            border-radius: 10px;
        }

        .wight-color {
            color: #fff;
        }

        .btn-bg {
            background: linear-gradient(-145deg, #320b82 0%, #9c33c3 100%);
            padding: 2px 0px;
            color: #fff !important;
            margin: auto;
        }

        .try {
            display: block;
            position: absolute;
            left: 50%;
            top: 0;
            margin: -41px 0 0 -35px;
            border-radius: 50%;
            z-index: 2;
        }

        .item-link {
            height: 250px;
        }

        ::-webkit-input-placeholder { /* Edge */
            text-align: start;
        }

        :-ms-input-placeholder { /* Internet Explorer 10-11 */
            text-align: start;
        }

        ::placeholder {
            text-align: start;
        }

        button {
            margin: 0;

        }

        .center-banner {

            width: 100%;
            height: 420px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;

        }

        .calc {
            background: linear-gradient(-145deg, #320b82 0%, #9c33c3 100%) !important;
            width: 45%;
        }

        @media (max-width: 567px) {
            .pt-110{
                padding-top:110px;
            }
            .header-navigation ul.navigation-box {
                text-align: start;
            }
            .carouselControl {
            margin-top: 0!important;
              }
            #email {
                min-width: 200px;
            }

            .calc {
                width: 93%;
            }

            .try {
                display: block;
                position: relative;
                left: 0;
                top: 0;
                width: auto;
                height: auto;
                margin: 0;
                border-radius: 50%;
                z-index: 0;
            }

            .timeline > div > .item-link {
                margin-top: 1.5rem;
                height: auto;
            }

            .timeline > div > a {
                display: inline-block;
            }

            .timeline > div > a h4 {
                color: #9c33c3;
                font-size: 22px!important;
            }

            .timeline > div > a .desc-holder .desc {
                color: #320b82;
                opacity: 1;
                margin: 1.2rem auto;
                font-size: 1.4rem;
            }

        }

        .h-30 {
            height: 36px!important;
        }

        .h-36 {
            height: 36px;
            padding: 4px 20px;
        }

        .input-shado {
            box-shadow: 0 0 5px #888;
        }
        .contentBackgroundNone {
            color:#320B82;
            background:none;
        }
        .colorDarkBlue {
            color:#320B82;
        }
        .contentFontSize {
            font-weight:900;
            font-size :32px;
        }
        .subFormStyle {
            border-radius: 5px 0px 0px 5px;
            font-size:15px;
            background :linear-gradient(-145deg, #320b82 0%, #9c33c3 100%);
        }
        .inputEmail {
            border-radius: 0px 5px 5px 0px;
            width:auto;
        }
        .FontWeight900{
            font-weight:900;
            font-size :32px;
        }
        .linkCarsoul{
            font-size: xx-large;
            color: #320b82;
        }
        .carouselControl {
            margin-top: 7rem;
            margin-bottom: 4rem;
        }
        .controlMobile {
            color:#320B82;
            background:none;
            font-size:1.55rem
        }
        .fontSize155rem{
            font-weight:900;
            font-size :1.9rem;
        }
        .fontSize19rem{
            font-weight:900;
            font-size :1.9rem;
        }
        .colorAndFont {
            color:#320B82;
            font-size:1.55rem;
        }
        .subForms {
            background: linear-gradient(90deg,#42b0ff,#4262ff);
            padding: 5px 15px;
            font-size: 1.5rem;
            border-radius:5px;
            color:#fff!important;
        }
        .controlPhone {
            font-weight:900;
            font-size: 1.9rem;
        }
        .marginAuto{
            margin:2rem auto;
        }
        .divLink {
            margin-top: .6rem;
            font-size: .9rem;
            font-weight: 700;
        }
        .textDecoration {
            color:#320B82;
            text-decoration: underline;
            font-size:18px;
        }
        .width90{
            margin:auto;
            width:90%;
        }
        .backgroundGray {
            background:#f7f5f5;
        }
        .breakdownStyle {
            font-size:1.5rem;color: #320b82;
            font-weight: bold;
            text-transform: capitalize;
            
        }
        .breakdownHeight {
            border-radius:5px;
            height:25px;
        }
        .planStyle {
            border-radius:5px;
            font-size:12px;
        }
        .inputTextStyle{
            border-radius:5px;
            height:25px; 
        }
        .priceEgp {
            background:linear-gradient(90deg,#42b0ff,#4262ff);
            border-radius:5px;
            padding: 2px 20px;
            margin:0 10px;
        }
        .width80 {
            width:80%;
            margin:auto;
        }
        .backgroundBlack {
            background: rgba(0,0,0,0.7);
        }
        .backgroundAndColor{
            background: linear-gradient(275deg, #5e2298, #320b82);
            color:#fff;
        }
        .newColors {
            padding: 0;
            position: absolute;
            right:475px!important;
            top: 12px!important;
        }
        .modelStyleBody{
            color: #fff;
            font-size: 24px;
            padding-top: 10px;
        }
        .yellowColor {
            color:#f9c412;
        }
        .zIndex {
            z-index: 10;
        }
        .modelParagraph {
            text-transform: uppercase;
            line-height:1.7;
            padding: 10px 50px 0;
            font-size: 18px;
        }
        .modelParagraphTwo {
            text-transform: uppercase;
            font-size: 13px;
        }
        .labels{
            margin: 0;
            font-size: 12px;
        }
        .height24{
            height: 24px;
        }
        .myBackgroundStyleAndHeight {
            border-radius: 5px;
            font-size: 1.5rem;
            font-weight: 600;
            background: #f9c412 !important;
            color: #320b82;
        }
        .decorationStyle {
            color: #fff;
            text-decoration: underline;
        }
        .AffiliateProgram {
            border-radius: 5px;
            font-weight: 600;
            background: #f9c412 !important;
            color: #320b82;
        }
        .marginRight {
            font-size:10px ;
            margin-right:15px;
        }
        .marginLeft {
            font-size:10px;
            margin-left:15px;
        }
        .formGroupp{
            margin: 0;
            font-size:12px;
        }
        .marginZero{
            margin: 0;
            font-size: 10px;
        }
    </style>
@endpush
@section('page-wrapper')

<section class="{{  getCurrentLangIdiom() == 'ar' ? ' text-right'  : '' }}">
        <div class="bd-example hide-mobile" id="homeBanner">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="d-block w-100 bg-1">
                            <div class="container mt-5 ">
                                <div class="row" dir="rtl">
                                    <div class="col-xl-6 col-lg-7 mx-auto">
                                        <div class="content-block text-center center-banner">

                                            <h3 class='text-center mt-5 contentBackgroundNone'> {{__('affil-idh32')}}<span class="contentFontSize">  {{__('affil-idspan3')}} </span>
                                            </h3>
                                            <h3 class='text-center colorDarkBlue'> {{__('affil-idh33')}}
                                                <span class="font-weight-bold">  {{__('affil-idspan4')}}  </span>
                                            </h3>
                                            <div class="subform mt-3">
                                                <form id="signup" class="formee signuptrial d-flex justify-content-center" style="{{  getCurrentLangIdiom() == 'ar' ? 'direction:ltr'  : 'direction:ltr' }}" method="post">
                                                    <a class="btn btn-bg h-36 m-0 subFormStyle" data-toggle="modal"  data-target="#resources_popups" type="submit" title="Send">{{__('affil-ida4')}} </a>
                                                    <input type="hidden" value="Affiliate" name="type">
                                                    <input name="email" id="email" class="form-control input-shado h-30 inputEmail" type="email" placeholder="{{__('gen-mail')}}" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"   required="">
                                                </form>
                                                <div id="response"></div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-5 mx-auto"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-block w-100 bg-2">
                            <div class="container mt-5 ">
                                <div class="row" dir="rtl">
                                    <div class="col-xl-6 col-lg-7 mx-auto">
                                        <div class="content-block text-center center-banner">

                                            <h3 class='text-center mt-5 contentBackgroundNone'>   {{__('affil-idh34')}}
                                                <span class="FontWeight900"> {{__('affil-idspan4')}}  </span> {{__('affil-idh35')}}
                                            </h3>
                                            <h3 class='text-center colorDarkBlue'> {{__('affil-idh36')}}
                                                <span class="font-weight-bold"> {{__('affil-idspan5')}}  </span>
                                            </h3>
                                            <div class="subform mt-3">
                                                <form id="signup" class="formee signuptrial d-flex justify-content-center"  style="{{  getCurrentLangIdiom() == 'ar' ? 'direction:ltr'  : 'direction:ltr' }}" method="post">
                                                    <a class="btn btn-bg h-36 m-0 subFormStyle" data-toggle="modal"
                                                       data-target="#resources_popups"
                                                       type="submit" title="Send">  {{__('affil-ida4')}}</a>

                                                    <input type="hidden" value="Affiliate" name="type">
                                                    <input name="email" id="email"
                                                           class="form-control input-shado h-30 inputEmail"
                                                           type="email" placeholder="{{__('gen-mail')}}"
                                                           pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
                                                           required="">
                                                </form>
                                                <div id="response"></div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-5 mx-auto"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                        <span class="" aria-hidden="true"><i class="fas fa-arrow-left linkCarsoul"></i></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                        <span class="" aria-hidden="true"><i class="fas fa-arrow-right linkCarsoul"></i></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    <div class="view-mobile carouselControl" id="homeBanner2">
            <div class="container">
                <h3 class='text-start pt-110 controlMobile'>      {{__('affil-idh34')}} <span class="fontSize19rem">  {{__('affil-idspan4')}}   </span> {{__('affil-idh35')}}
                </h3>
                <h3 class='text-start colorAndFont'>        {{__('affil-idh36')}} <span class="font-weight-bold">  {{__('affil-idspan5')}}  </span>
                </h3>
                <div class="subform text-start marginAuto">
                    <a class="submit subForms" data-toggle="modal" data-target="#resources_popups">{{__('affil-ida5')}} </a>

                </div>
                <div class='text-start divLink'>
                    <a href="{{get_url('pricing')}}" id="compar" class="textDecoration">  {{__('affil-ida6')}}</a>
                </div>
            </div>
        </div>
    
    <section class='my-1 width90'>
        <div class="row">
            <div class='col-sm-12 col-md-6 col-lg-9 my-auto'>

                <div class="timeline row">
                    <div class="col-md-4">
                        <a href=" " class="item-link">
                            <h4 class="fontFamily">{{__('affil-idh41')}}    </h4>
                            <div class="desc-holder">
                                <div class=" try"><img width="72" src="{{get_theme_frontend_url('assets/sticky/images/m3.png')}}"></div>

                                <span class="desc fontFamily"> {{__('affil-idspan6')}} </span>

                            </div>
                        </a>
                        <a class="btn btn-bg" data-toggle="modal" data-target="#resources_popups">{{__('affil-ida7')}}</a>
                    </div>
                    <div class="col-md-4">
                        <a href=" " class="item-link">
                            <h4 class="fontFamily">{{__('affil-idh42')}} </h4>
                            <div class="desc-holder">
                                <div class=" try"><img width="72" src="{{get_theme_frontend_url('assets/sticky/images/m2.png')}}"></div>
                                <span class="desc fontFamily">
                             {{__('affil-idspan7')}}
</span>
                            </div>
                        </a>
                        <a class="btn btn-bg" data-toggle="modal"
                           data-target="#resources_popups"> {{__('affil-ida8')}}</a>
                    </div>

                    <div class="col-md-4">
                        <a href=" " class="item-link">
                            <h4 class="fontFamily"> {{__('affil-idh43')}}   </h4>
                            <div class="desc-holder">
                                <div class=" try"><img width="72" src="{{get_theme_frontend_url('assets/sticky/images/m1.png')}}"></div>

                                <span class="desc fontFamily">    {{__('affil-idspan8')}}  </span>
                            </div>
                        </a>
                        <a class="btn btn-bg" data-toggle="modal"
                           data-target="#resources_popups">{{__('affil-ida8')}}</a>

                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3 my-auto">
                <?php echo file_get_contents('https://crmmrkt.com/ContentController/template/32/'.getCurrentLangIdiom()); ?>
            </div>
        </div>
    </section>
    <section class='py-5 my-1 backgroundGray'>
        <h2 class="wight-color text-center breakdownStyle">{{__('affil-idh21')}}   </h2>
        <div class='box-shadow my-4 calc'>
            <div class="math-breakdown form-group text-center">
                <p class='wight-color'>

                    {{__('affil-idp4')}}
                    <input name="userss" id="users" type="text" size="2" value="0" class="breakdownHeight">
                    {!!__('affil-idp5')!!}
                    <select name="plan_code" class="planStyle" id="packagees">

                        <option value="economy" selected>{{__('pay-Economical')}}</option>
                        <option value="special">{{__('pay-Special')}}</option>
                        <option value="family">{{__('pay-family')}}</option>
                        <option value="professional">{{__('pay-Professional')}}</option>
                        <option value="super_professional">{{__('pay-SuperProfessional')}}</option>

                    </select>
                    {{__('affil-idp6')}}
                    , <br>

                    <select name="period" class="planStyle" id="packagees_period">
                        <option value="month" selected>  {{__('affil-idp7')}}  </option>
                        <option value="year">{{__('affil-idp8')}}</option>
                    </select>
                    {{__('affil-idp9')}}
                    <input name="months" id="days" class="inputTextStyle" type="text" size="2"
                           value="0"> ,
                    {{__('affil-idp10')}}
                </p>

                <p class='wight-color font-weight-bold'>EGP<span class="total-earnings priceEgp">0</span>
                </p>
            </div>
        </div>
    </section>
    <section id="referral-faq" class="row-wrapper my-1" dir='ltr'>
        <div class="container mb-1">
            <div class="row box-shadow">
                <div class="col-lg-8 mx-auto">
                    <h2 class="section-heading text-center">{{__('affil-idh22')}}</h2>
                </div>
                <div class="col-lg-10 mx-auto text-start">
                    <section>
                        <h5 class="section-heading text-start">  {{__('affil-idh51')}}</h5>
                        <p>

                            {{__('affil-idp11')}}
                        </p>
                    </section>
                    <section>
                        <h5 class="section-heading text-start"> {{__('affil-idh52')}}</h5>
                        <p>
                            {{__('affil-idp12')}}

                        </p>
                    </section>
                    <section>
                        <h5 class="section-heading text-start">   {{__('affil-idh53')}} </h5>
                        <ol class="list-unstyled">
                            <li>
                                {{__('affil-idli1')}}
                            </li>
                            <li>

                                {{__('affil-idli2')}}
                            </li>
                            <li>

                                {{__('affil-idli3')}}

                            </li>





                        </ol>
                    </section>
                    <section>
                        <h5 class="section-heading text-start"> {{__('affil-idh54')}} </h5>
                        <p>

                            {{__('affil-idp13')}}
                        </p>
                    </section>
                    <section>
                        <h5 class="section-heading text-start"> {{__('affil-idh55')}}  </h5>
                        <p>
                            {{__('affil-idp14')}}
                        </p>
                    </section>
                    <section>
                        <h5 class="section-heading text-start">  {{__('affil-idh56')}} </h5>
                        <p>
                            {{__('affil-idp15')}}
                        </p>
                    </section>
                    <section>
                        <h5 class="section-heading text-start">  {{__('affil-idh57')}} </h5>
                        <p>
                            {{__('affil-idp16')}}
                        </p>
                    </section>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">{{__('affil-idp2')}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="width80">
                        <form>
                            <div>
                                <span class="label"> {{__('affil-idspan9')}}</span>
                                <input type="text" class="userid form-control" pattern="[A-Za-z]{3}" name="userid"/>
                            </div>
                            <div>
                                <span class="label"> {{__('affil-idspan10')}}</span>
                                <input type="email" class="userid form-control" pattern="[A-Za-z]{3}" name="Email"/>
                            </div>
                            <div>
                                <span class="label">{{__('affil-idspan11')}}</span>
                                <input type="password" class="password form-control" name="password"/>
                                <div class="alert alert-danger mt-2" role="alert">
                                    {{__('affil-idspan12')}}
                                </div>
                            </div>
                            <div>
                                <span class="label">{{__('affil-idspan13')}}</span>
                                <input type="password" class="confpass form-control" name="confpass"/>
                                <div class="alert alert-danger mt-2" role="alert">
                                    {__('affil-idspan12')}}
                                </div>
                            </div>
                            <input id="submit" class="btn btn-secondary btn-bg" type="submit" value="Submit">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="resources_popups" class="modal fade bd-example-modal-lg backgroundBlack" role="dialog">
        <div class="modal-dialog miniDialog  modal-dialog-centered">
            <div class="modal-content backgroundAndColor">
                <div class="modal-header p-0" dir="rtl">
                    <img src="{{get_theme_frontend_url('assets/sticky/logo-s.png')}}" width="54" class="zIndex">
                    <button type="button" class="close newColors" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div id="modal-body">
                    <h3 class='text-center modelStyleBody font-weight-bold'>    {{__('affil-idh31')}} <span class="yellowColor"> {{__('affil-idspan1')}}   </span></h3>
                    <p class='text-center mb-0 modelParagraph'> {{__('affil-idp1')}}</p>
                    <p class='text-center mt-3 font-weight-bold modelParagraphTwo'> {{__('affil-idp2')}}
                     <span class="font-weight-bold yellowColor">  {{__('affil-idspan2')}}  </span> {{__('affil-idp3')}}
                    </p>
                    <div class="row my-row mx-0">
                        <div class="col-sm-7">
                            <div class="page-links nav nav-pills mb-4" id="pills-tab" role="tablist">
                                <a id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                                   aria-controls="pills-home" aria-selected="true"
                                   class="mx-2 model-tabs active"> {{__('affil-ida1')}} </a>

                                <a id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
                                   aria-controls="pills-profile" aria-selected="false"
                                   class='mx-2 model-tabs '>{{__('affil-ida2')}} </a>
                            </div>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <form dir="ltr" method="post" class="reports affiliate_form_login">
                                        <input type="hidden" name="login_popup" value="1">
                                        <input type="hidden" name="page" value="">
                                        <input type="hidden" name="lang" value="en">
                                        <div class="form-group row mb-1 ml-auto align-items-center">
                                            <label class="col-4 p-0 labels"> <span class="text-danger">*</span> {{__('affil-idlab1')}} </label>
                                            <div class="col-8">
                                                <input type="email" class="form-control height24" name="email" required>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-1 ml-auto">
                                            <label class="col-4 p-0 align-items-center"> <span class="text-danger">*</span> {{__('affil-idlab2')}} </label>
                                            <div class="col-8">
                                                <input type="password" class="form-control height24" name="pass" required>
                                            </div>
                                        </div>
                                        <div class="form-group mx-auto row mb-1">
                                            <button class="submit mb-0 myBackgroundStyleAndHeight w-100" type="submit"
                                                    name="submit" id="sub"> {{__('install-idbtn25')}}
                                            </button>
                                        </div>
                                        <div class="form-group row mb-1 mx-0 align-items-center justify-content-center">
                                            <div class="col-12 px-md-0 px-2">
                                                <a href="{{get_url('forget_password')}}" class="decorationStyle">{{__('affil-ida3')}} </a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                    <form dir="ltr" method="post" class="formres affiliate_form_register">
                                        <input type="hidden" name="came_from" value=">">
                                        <input type="hidden" name="page" value="">
                                        <input type="hidden" name="lang" value="en">
                                        <input type="hidden" name="register_popup" value="1">
                                        <div class="form-group row mb-1  ml-auto">
                                            <label class="col-4 p-0 formGroupp"> <span class="text-danger">*</span> {{__('affil-idlab3')}} </label>
                                            <div class="col-8">
                                                <input type="text" class="form-control height24" name="fn7" required>
                                            </div>

                                        </div>
                                        <div class="form-group row mb-1  ml-auto align-items-center">
                                            <label class="col-4 p-0 labels"> <span class="text-danger">*</span>{{__('affil-idlab4')}}</label>
                                            <div class="col-8">
                                                <input type="text" class="form-control height24" name="ln7" required>
                                            </div>

                                        </div>
                                        <div class="form-group row mb-1 ml-auto align-items-center">
                                            <label class="col-4 p-0 labels"> <span class="text-danger">*</span>{{__('affil-idlab1')}}</label>
                                            <div class="col-8">
                                                <input type="email" class="form-control height24" name="em7" required>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-1 ml-auto align-items-center" >
                                            <label class="col-4 p-0 labels"> <span class="text-danger">*</span>{{__('affil-idlab2')}} </label>
                                            <div class="col-8">
                                                <input type="password" id="txtPassword" class="form-control height24" name="pass" required>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-1 ml-auto align-items-center">
                                            <label class="col-4 p-0 marginZero"> <span class="text-danger">*</span> {{__('affil-idlab5')}} </label>
                                            <div class="col-8">
                                                <input type="password" class="form-control height24" name="Cpass" required>
                                            </div>
                                        </div>
                                        <div class="form-group mx-auto row mb-1">
                                            <button class="submit mb-0 ml-0 AffiliateProgram w-100" type="submit"
                                                    name="submit" id="sub"> {{__('affil_btn_join')}}  
                                            </button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-5 pl-0  text-center d-flex justify-content-center align-items-center">
                            <img width="192" src="{{get_theme_frontend_url('assets/sticky/images/resco.png')}}">

                        </div>

                    </div>
                    <div class="d-flex justify-content-between">
                        <small class='text-start marginLeft'>* {{__('affil-idsmal1')}}</small>
                        <small class='text-right marginRight'><span class="text-danger">*</span> {{__('affil-idsmal2')}}</small>
                    </div>

                </div>


            </div>

        </div>
    </div>
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

