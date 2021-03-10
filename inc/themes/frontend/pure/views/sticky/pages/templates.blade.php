@extends('sticky.layout.master')
@push('head')

    <link rel="stylesheet" href="{{get_theme_frontend_url('assets/sticky/css/customen.css')}}">
    <style>
        .form-group{
            margin-bottom:0!important;
        }
        .model-tabs {
            color: #2196F3;
            background:transparent;
        }
        #pills-tab .active {
            color: #fff;
            background:transparent;
        }
        .site-header.header-one .header-navigation ul.navigation-box > li{
            margin:0 9px;
        }
        .site-header.header-one .header-navigation ul.navigation-box > li > a{
            font-weight:400;
        }
        .text-box{
            height: 60px;
            background: #fff;
        }
        .badge-pill{
            border-radius:2px!important;
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
        .pad-65-15-65{
            padding:65px 15px 65px;
        }
         .colo-w{
            color: white;
        }
        .colo-y{
            color: yellow;
        }
        .li-hei-4{
            line-height: 1.4;
        }
        .m-b-4{
            margin-bottom: 4px;
        }
        .pad-5-15{
            padding: 5px 15px;
        }
           .mar-t-6{
            margin-top: .6rem;
        }
        .f-s-9{
            font-size: .9rem;
            
        }
        .f-w-700{
            font-weight: 700;
        }
        .t-d-u{
            text-decoration: underline;
        }
        .m-b-5{
            margin-bottom: 1.5rem;
        }
        .wid-48{
            width: 48%;
        }
        .pos-abs{
            position: absolute;
        }
        
        .lef-25{
           left: .25% ;
        }
        .top-25{
            top: .25%;
        }
        .backg-r{
            background: red;
        }
        .pad-1-6{
            padding: 1px 6px;
        }
        .m-0{
            margin: 0;
        }
        .f-s-14{
            font-size: 14;
        }
        .f-w-b{
            font-weight: bold;
        }
        .f-s-18{
            font-size: 18px;
        }
        .f-s-15 {
            font-size:15px;
            
        }
        .f-s-10{
            font-size: 10px;
        }
        .mar-19{
            margin: 19px 0 0;
        }
        .bor-r-5{
            border-radius: 5px;
        }
        .pad-4-9-5{
            padding: 4px 9px 5px;
        }
        .back-l{
            background: linear-gradient(90deg,#42b0ff,#4262ff);
        }
        .backg-b{
            background: rgba(0,0,0,0.7);
        }
        .pad-t-60{
            padding-top: 60px;
        }
        .wid-54{
            width: 54px;
        }
        .z-in-10{
            z-index: 10;
        }
        .pad-0{
            padding: 0;
        }
        .right-20{
            right: 20px;
        }
        .top-26{
            top:26px;
        }
        .dir-l{
            direction: ltr;
        }
        .alig-it{
            align-items: center;
        }
        .f-s-12{
            font-size: 12px;
        }
        .colo-r{
            color: red;
        }
        .hei-24{
            height: 24px;
        }
        .hei-24-i{
            height: 24px!important;
        }
        
        .just-cont-c{
            justify-content: center;
        }
        .just-cont-s{
            justify-content: space-between;
        }
        .dis-f{
            display: flex;
        }
        .flex-dir{
            flex-direction: column;
        }
        .backg-y{
           background:  #f9c412 !important;
        }
        .colo-b{
            color: #320b82;
        }
        .hei-35{
            height: 35px;
        }
        .f-w-600{
            font-weight: 600;
        }
      .pad-0-5  {
            padding:0 5px!important;
        }
        .f-s-2{
            font-size: 1.2rem;
        }
        .f-s-5{
            font-size: 1.5rem;
        }
        .bor-n{
            border: none;
        }
        .wid-192{
            width: 192px;
        }
        .mar-l-15{
            margin-left: 15px;
        }
        .mar-r-15{
            margin-right: 15px;
        }
        .wid-250{
            width: :250px;
        }
        .backg-s{
            background: rgba(0,0,0,0.1);
        }
        .m-a{
            margin: auto;
        }
        .box-s{
            box-shadow: none;
        }
        .hei-30{
            height: 30px;
        }
        .backg-7{
            background: rgba(0, 0, 0, 0.7);
        }
        .wid-480{
            width: 480px;
        }
        .mar-60-0{
            margin: 60px 0;
        }
        .colo-w-i{
            color:#fff !important;
        }
        .mar-b-5{
            margin:1rem 0;
        }
        .lef-25{
            left: 0.25%;
        }
        .backg-r{
            background: #f00;
        }
        .top-25{
            top: 0.25%;
        }
    </style>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <style>
        body {
            background: #ece9e6; /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #ece9e6, #ffffff); /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #ece9e6, #ffffff); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        }

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
            margin: 25px 0px;
            padding: 4px;
            color :#320B82 !important;
            text-transform: capitalize;
            font-size: 20px;
        }


        .owl-theme .owl-dots .owl-dot.active span,
        .owl-theme .owl-dots .owl-dot:hover span {
            background: #5110e9;
        }


        .owl-carousel {
                text-align: center;
                border-radius: 20px;
                border: 10px solid #fff;
                padding: 4px;
                box-shadow: 0px 0px 19px -4px rgba(47,22,126,1);
                background:#fff;
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
        .badge-primary {
        color: #fff;
        background-color: #3b1c80!important;
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
            /*border-radius: 58px;*/
            /*border-bottom: 9px solid #f8f8f8;*/
        }
        .item >a ,#thanksContainer{
            color: white;
            font-family: Cairo;
        }
x
    </style>
@endpush
@section('page-wrapper')
    <div class="section {{  getCurrentLangIdiom() == 'ar' ? ' text-right'  : '' }}">
        <div class="container">
            <div class="row justify-content-center  res-padding">

                <div class="col-md-7 my-auto view-mobile">
                    <h3  class="text-left colo-w f-s-5 li-hei-4 mt-4">{{__('reports_h1_text')}}</h3>
                    <h3  class="text-left colo-w f-s-5 li-hei-4 m-b-4">{{__('reports_h2_text')}}</h3>
                    <div class="subform mt-4">
                        <a class="submit pad-5-15 f-s-5"  style="{{  getCurrentLangIdiom() == 'ar' ? 'padding:0 10px'  : 'padding:10px' }}" href="{{get_url('register')}}"> {{__('StartTrial')}}</a>

                    </div>
                    <div class="mar-t-6 f-s-9 f-w-700">
                        <a href="{{get_url('pricing')}}" id="compar" class="colo-w t-d-u"> {{__('PackageComparison')}}  </a>
                    </div>
                </div>
                <div class="col-lg-7 col-md-8 col-sm-7 hide-mobile  text-center">
                    <h3  class="text  mt-4 colo-w  f-s-5 li-hei-4">{{__('reports_h1_text')}}</h3>
                    <h3  class="text colo-w  f-s-5 li-hei-4 m-b-4">{{__('reports_h2_text')}}</h3>
                    <div class="row justify-content-center">
                        <div class="col-md-6 mt-5">
                            <div class="card">
                                <div class="card-body">

                                    <div class="row">
                                        <img src="{{get_theme_frontend_url('assets/sticky/images/mobil-download.png')}}" class="img-fluid IMAGES2">
                                        <div class="col-12 {{  getCurrentLangIdiom() == 'fr' ? 'mt-3'  : '' }}">
                                            <h6 class="text-dark mar-b-5" >{{__('temp-downloads')}}</h6>
                                            <div class="stage">
                                                <p>
                                                    <a href="https://play.google.com/store/apps/details?id=com.stickyapp.myappcompany">
                                                        <img src="{{get_theme_frontend_url('assets/sticky/images/Google play.png')}}" class="wid-48">
                                                    </a>
                                                    <a class="" href="https://apps.apple.com/eg/app/stickyposts/id1481454304">
                                                        <img src="{{get_theme_frontend_url('assets/sticky/images/APPSTORE.png')}}" class="wid-48">
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mt-5" dir=" ">
                            <div class="card">
                                <form>
                                    <div class="card-body p-2">
                                        <div class="row">
                                            <div class="pos-abs lef-25 backg-r top-25 colo-w pad-1-6">
                                                <p class="m-0 f-s-14"> {{__('for_limited')}}</p>
                                            </div>
                                            <img src="{{get_theme_frontend_url('assets/sticky/logo-s.png')}}" class="img-fluid IMAGES">
                                            <div class="col-12 text-center">

                                                <p class="promo" class="f-s-15 mar-19 li-hei-4">{{__('h_sub_and_use')}}
                                                <span class="f-w-b f-s-18">{{__('30_disc')}}</span>
                                                {{__('h_promo_text')}}</p>
                                            </div>
                                            <div class="col-12 text-start">
                                                <a class="submit" href="{{get_url('register')}}" style="{{  getCurrentLangIdiom() == 'ar' ? 'padding:0 4px'  : 'padding:5px' }}">{{__('temp-getNow')}}</a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-5  my-auto hide-mobile {{  getCurrentLangIdiom() == 'ar' ? ' text-left'  : 'text-right' }}">
                     @switch( getCurrentLangIdiom())
                        @case('ar')
                        <img src="{{get_theme_frontend_url('assets/sticky/img/template.png')}}" class="img-fluid img-width">
                        @break
                        @case('en')
                              <img src="{{get_theme_frontend_url('assets/sticky/img/templateEn.png')}}" class="img-fluid img-width">
                        @break
                        @case('fr')
                               <img src="{{get_theme_frontend_url('assets/sticky/img/templateEn.png')}}" class="img-fluid img-width">
                        @break
                        @default
                        6$
                    @endswitch
                </div>
            </div>
        </div>
    </div>
    
@endsection



@section('body')
    <?php echo file_get_contents('https://crmmrkt.com/ContentController/template/12/' .getCurrentLangIdiom()); ?>

    <div id="resources_popups" class="modal fade bd-example-modal-lg backg-b pad-t-60" role="dialog" >
        <div class="modal-dialog miniDialog" >
            <div class="modal-content back-l colo-w"  >
                <div class="modal-header p-1">
                    <img src="{{get_theme_frontend_url('assets/sticky/logo-s.png')}}" class='wid-54 z-in-10'>
                    <button type="button" class="close pad-0 pos-abs right-20 top-26" data-dismiss="modal" aria-label="Close" >
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div id="modal-body">
                    <h3  class='text-center mt-3 colo-w'> {{__('reg-h2-text82')}}  <span class="colo-y f-w-b" >{{__('reg-h2-text83')}} </span></h3>
                    <div class="row my-row">
                        <div class="col-sm-7">
                            <div class="page-links nav nav-pills mb-4" id="pills-tab" role="tablist">
                                <a id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true" class="ml-auto mr-3 model-tabs active">{{__('Login')}}</a>

                                <a id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false" class='mr-3 model-tabs ' >{{__('affil-ida2')}}</a>
                            </div>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <form id="form_pop1"  method= "post" class="login dir-l">

                                        <input type="hidden" name="page" value="<?php echo $page45 ?>">
                                        <input type="hidden" name="lang" value="en">
                                        <input type="hidden" name="assigned_employee" value="<?= $_GET['assigned_employee']??'' ?>">
                                        <input type="hidden" name="activity" value="<?= $_GET['activity']??'' ?>">
                                        <input type="hidden" name="task" value="<?= $_GET['task']??'' ?>">
                                        <div class="form-group row mb-1 ml-auto alig-it " >
                                            <label class="col-4 p-1 m-0 f-s-14" >  <span class="colo-r">*</span>{{__('affil-idlab1')}}</label>
                                            <div class="col-8">
                                                <input type="email" class="form-control hei-24" name="mail"   required>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-1 ml-auto alig-it"  >
                                            <label class="col-4 p-1 m-0 f-s-14" >  <span class="colo-r">*</span>{{__('affil-idlab2')}}</label>
                                            <div class="col-8">
                                                <input type="password" class="form-control hei-24" name="pass"  required>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-1 mx-0 alig-it just-cont-c" >
                                            <div class="col-12 px-4">
                                                <a href="{{get_url('forget_password')}}" class="colo-w t-d-u">{{__('affil-ida3')}}</a>
                                            </div>
                                        </div>
                                        <div class="form-group mb-0  row  mt-3 text-center dis-f just-cont-c alig-it flex-dir" >
                                            <button class="submit mb-0 ml-0 hei-35 bor-r-5 f-s-5 f-w-600 backg-y colo-b" type="submit"  name="submit" id="sub"> {{__('gen-gin')}} </button>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                    <form id="form_pop2"  method= "post" class="formres dir-l">
                                        <input type="hidden" name="came_from" value="<?php echo $page?>">
                                        <input type="hidden" name="lang" value="en">
                                        <input type="hidden" name="assigned_employee" value="<?= $_GET['assigned_employee']??'' ?>">
                                        <input type="hidden" name="activity" value="<?= $_GET['activity']??'' ?>">
                                        <input type="hidden" name="task" value="<?= $_GET['task']??'' ?>">
                                        <div class="form-group row ml-auto" >
                                            <label class="col-4 px-1 m-0 f-s-14">  <span class="colo-r">*</span>{{__('gen-fn')}}</label>
                                            <div class="col-8">
                                                <input type="text" class="form-control hei-24" name="fn7" required>
                                            </div>

                                        </div>
                                        <div class="form-group row ml-auto alig-it " >
                                            <label class="col-4 px-1 m-0 f-s-14" >  <span class="colo-r">*</span>{{__('gen-ln')}}</label>
                                            <div class="col-8">
                                                <input type="text" class="form-control hei-24" name="ln7" required >
                                            </div>

                                        </div>
                                        <div class="form-group row ml-auto alig-it" >
                                            <label class="col-4 px-1  m-0 f-s-14 " >  <span class="colo-r">*</span>{{__('affil-idlab1')}}</label>
                                            <div class="col-8">
                                                <input type="email" class="form-control hei-24" name="em7"  required>
                                            </div>
                                        </div>
                                        <div class="form-group row ml-auto  alig-it" >
                                            <label class="col-4 px-1 m-0 f-s-14" >  <span class="colo-r">*</span>{{__('gen-pass')}} </label>
                                            <div class="col-8">
                                                <input type="password" id="txtPassword" class="form-control hei-24" name="pass"    required>
                                            </div>
                                        </div>
                                        <div class="form-group row ml-auto alig-it"  >
                                            <label class="col-4 px-1 m-0 f-s-14" >  <span class="colo-r">*</span>   {{__('temp-ConfirmPass')}} </label>
                                            <div class="col-8">
                                                <input type="password" id="txtConfirmPassword" class="form-control hei-24" name="Cpass"   required>
                                            </div>
                                        </div>
                                        <div class="form-group mb-0  row  mt-3 text-center dis-f just-cont-c alig-it flex-dir" >
                                            <button class="submit mb-0 ml-0 hei-35 bor-r-5 f-s-5 f-w-600 backg-y colo-b " type="submit" name="submit" id="sub"> {{__('gen-gin')}} </button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="dis-f just-cont-s" >
                        <small class='text-left f-s-10 mar-l-15'>{{__('repo-informationSafe')}}</small>
                        <small class='text-left f-s-10 mar-r-15' ><span class="colo-r">*</span>{{__('repo-All fields')}}</small>
                    </div>

                </div>


            </div>

        </div>
    </div>
 

@endsection
@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <script>

        $(document).ready(function(){

            $(".res").click(function(){
                // $(".modal-body").html("")
                $(".DownloadPDF").attr('href', $(this).data('src'));
                $(".DownloadPDF").attr('res-id', $(this).data('id'));
                $('#form_pop1').append('<input type="hidden" name="page" value="' + $(this).data('id')  + '">');
                $('#form_pop2').append('<input type="hidden" name="page" value="' + $(this).data('id')  + '">');
                // $('#form_pop1').append('<input type="hidden" name="page" value="' + $(this).data('page')  + '">');
                // $('#form_pop2').append('<input type="hidden" name="page" value="' + $(this).data('page')  + '">');
                $('#form_pop1').append('<input type="hidden" name="res_id" value="' + $(this).data('id')  + '">');
                $('#form_pop2').append('<input type="hidden" name="res_id" value="' + $(this).data('id')  + '">');

            });

            $('.res_unique_select').click(function (){

                $('input:hidden[name=page]').remove();
                $('input:hidden[name=res_id]').remove();

                $('#form_pop1').append('<input type="hidden" name="page" value="' + $(this).data('id')  + '">');
                $('#form_pop2').append('<input type="hidden" name="page" value="' + $(this).data('id')  + '">');
                // $('#form_pop1').append('<input type="hidden" name="page" value="' + $(this).data('page')  + '">');
                // $('#form_pop2').append('<input type="hidden" name="page" value="' + $(this).data('page')  + '">');
                $('#form_pop1').append('<input type="hidden" name="res_id" value="' + $(this).data('id')  + '">');
                $('#form_pop2').append('<input type="hidden" name="res_id" value="' + $(this).data('id')  + '">');
            });


        });

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
        $(".res").click(function(){

            // $(".modal-body").html("")
            $(".DownloadPDF").attr('href', $(this).data('src'));
            $(".DownloadPDF").attr('res-id', $(this).data('id'));
        })

        $(".DownloadPDF").click(function(){
            var resource_id = $(this).attr("res-id");
            $.ajax({
                url:    'resource-count.php',
                method:   'POST',
                dataType:   'text',
                data:   {"resource_id": resource_id} ,
                success : function(response){
                    // window.location.href ="https://stickyposts.net/sticky/thanks-en.php?code=bba272ac88fe0c642691612a16af25cd&page=4"

                    window.location.href ="https://stickyposts.net/sticky/thanks-en.php?file=" + resource_id

                }
            })
        });
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
        $(".report .owl-carousel").owlCarousel({
            loop: true,
            margin: 5,
            nav: true,
            center: true,
            autoplay: false,
            navText: [
                '<i class="fa fa-angle-left"></i>',
                '<i class="fa fa-angle-right"></i>'
            ],
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                750: {
                    items: 2
                },
                1000: {
                    items: 4
                }
            }
        });
        function myFunction() {
            // Declare variables
            var input, filter, ul, li, a, i, txtValue;
            input = document.getElementById('myInput');
            filter = input.value.toUpperCase();
            ul = document.getElementById("myUL");
            li = ul.getElementsByTagName('li');

            // Loop through all list items, and hide those who don't match the search query
            for (i = 0; i < 9; i++) {
                a = li[i].getElementsByTagName("a")[0];
                txtValue = a.textContent || a.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    li[i].style.display = "";
                } else {
                    li[i].style.display = "none";
                }
            }
        }

        function myFunction1() {
            // Declare variables
            var input, filter, ul, li, a, i, txtValue;
            input = document.getElementById('myInput1');
            filter = input.value.toUpperCase();
            ul = document.getElementById("myUL1");
            li = ul.getElementsByTagName('li');

            // Loop through all list items, and hide those who don't match the search query
            for (i = 0; i < 9; i++) {
                a = li[i].getElementsByTagName("a")[0];
                txtValue = a.textContent || a.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    li[i].style.display = "";
                } else {
                    li[i].style.display = "none";
                }
            }
        }


        $(".text-box p").text(function(index, currentText) {
            var maxLength = $(this).parent().attr('data-maxlength');
            if(currentText.length >= maxLength) {
                return currentText.substr(0, maxLength) + "...";
            } else {
                return currentText
            }
        });
    </script>

    @include('sticky.layout.partials.popups')
@endpush

