@extends('sticky.layout.master')
@push('head')
    <link rel="stylesheet" href="{{get_theme_frontend_url('assets/sticky/css/more-benefits.css')}}">
    <link rel="stylesheet" href="{{get_theme_frontend_url('assets/sticky/css/mobile-style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <style>
    .nav-pills a:active{
        background:transparent!important;
    }
        .header {
            background: -webkit-linear-gradient(#320b82, #9c33c3);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-weight: 800;
        }

        #email {
            border: 1px solid #dfdfdf;
        }

        li p {
            max-width: 100%;
        }

        .dowenload-btn {
            margin-top: 1.5px;
        }

        .formee .right {
            text-transform: initial;
        }

        .get-vedio-form {
            left: 0;
            right: initial;
        }

        #email {
            border: none;
            background-color: #f3f3f3;
            box-shadow: 0 5px 10px rgba(0, 0, 0, .1);
            color: #222;
            height: 35px;
        }

        @media (max-width: 567px) {
            #signup {
                margin-left: 0;
                display: flex;
            }

            .get-vedio-form {
                position: relative;
            }

            #email {
                min-width: 100px !important;
            }

            .cards #email {
                min-width: 200px !important;
            }

            .know-more {
                width: 100%;
                margin-left: 0;
            }

            .formee .right {
                height: 35px;
                width: 40%;
            }

        }

        @media (min-width: 568px) {
            .know-more {
                width: 29%;
                margin-left: 0;
            }

            .formee .right {
                height: 35px;
                width: 30%;
            }

        }

        .btn-cont-ar {
            width: 91%;
            text-align: left !important;
            margin: 5px auto 0;
        }

        .btn-cont-ar .dowenload-btn {
            background: #212F63;
            margin-top: 5px;
            width: 100%;
            margin-left: 0;
        }
        .h2-color-h1 {
            color:#320b82;
        }
        .h21-clr {
            color:#391B7F;
        }
        .fon-col {
            font-size: 14px;
            font-weight: bold;
            color: #9c33c3;
        }
        .bac-rad-hei {
            background: #382B7D !important;
            border-radius: 5px 0 0 5px;
            height: 35px;
            padding: 0px 11px;
        }
        .bord-rad-mar {
            border-radius: 0 5px 5px 0;
            margin-left: -4px;
        }
        .bac-butt {
            background: #382B7D !important;
        }
        .a-back-gr {
            background: #6B2C76 !important;
        }
        .back-bord-pad {
            background: #212F63 !important;
            border-radius: 5px 0 0 5px;
            height: 35px;
            padding: 0px 11px;
        }
        .back-rad-hei-pad{
            background: #6B2C76 !important;
            border-radius: 5px 0 0 5px;
            height: 35px;
            padding: 0px 11px;
        }
        .bckgrou1 {
            background: #212F63 !important;
        }
        .bckgrou2 {
            background: #9362A6 !important;
        }
        .bckgrou3 {
            background: #34A9DA !important;
        }
        .bckgrou4 {
            background: #0B70AE !important;
        }
        .back-bord-pad2 {
            background: #9362A6 !important;
            border-radius: 5px 0 0 5px;
            height: 35px;
            padding: 0px 11px;
        }
        .gro-hgt-bor {
            background: #34A9DA !important;
            border-radius: 5px 0 0 5px;
            height: 35px;
            padding: 0px 11px;
        }
        .ground-padd {
            background: #0B70AE  !important;
            border-radius: 5px 0 0 5px;
            height: 35px;
            padding: 0px 11px;
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
x
    </style>
@endpush
@php
    $data_arr = array(
    'host' => 'stickyposts.net', // $_SERVER['HTTP_HOST'],
    'uri' =>  '/sticky/more-benefits', // $_SERVER['REQUEST_URI'],
    'project' => 'stickyposts',
    'language' => getCurrentLangIdiom(),
    'resource_type' => 'resource',
    'category' => 'zone',
    'params' => []
    );

        $response = callAPI('https://crmmrkt.com/api/resources/get/', 'POST', $data_arr);
        $response = json_decode($response, true);

        $images =collect($response['data'])->pluck('cover_portrait_url');



@endphp
@section('body')
    @include('sticky.layout.partials.common.homeBanner')
    <div class="more_benefitsSection {{  getCurrentLangIdiom() == 'ar' ? ' text-right'  : '' }}">
        <div class='m-auto'>
            <h2 class='text-center mt-3 h2-color-h1 px-3'>{{__('more-h1-text')}}</h2>
        </div>
        <div class='cards' id='card1'>
            <div class='video-card my-3'>
                <div class='row my-row'>
                    <div class='col-md-9'>
                        <h2 class='h21-clr'> {{__('more-idh21')}} </h2>
                        <ul>
                            <li><p>
                                    <span class="fon-col">{{__('more-idspan1')}} </span> {{__('more-idp1')}}
                                </p></li>
                            <li><p>
                                    <span class="fon-col">{{__('more-idspan2')}}  </span>{{__('more-idp2')}}
                                </p></li>
                            <span id="more3">
                            <li><p>
                                    <span class="fon-col">{{__('more-idspan3')}} </span> {{__('more-idp3')}}
                                </p></li>
                            <li><p>
                                    <span class="fon-col">{{__('more-idspan4')}} </span> {{__('more-idp4')}}
                                </p></li>
                            <li><p>
                                    <span class="fon-col">{{__('more-idspan5')}}  </span>{{__('more-idp5')}}
                                </p></li>
                            <li><p>
                                    <span class="fon-col">{{__('more-idspan6')}} </span> {{__('more-idp6')}}
                                </p></li>
                            <li><p>
                                    <span class="fon-col">{{__('more-idspan7')}}</span> {{__('more-idp7')}}
                                </p></li>
                            </span>
                        </ul>
                        <button class='btn dowenload-btn ml-md-3 know-more' onclick="Readmore3()" id="myBtn3">{{__('more-idbtn1')}}</button>
                        <form id="signup" class="formee get-vedio-form" method="post">
                            <input class="right send_btn inputnew bac-rad-hei" type="submit" title="Send" value="{{__('more-idvalue1')}}"/>
                            <input name="email" class='input bord-rad-mar' id="email" type="text" placeholder="{{__('more-idbtn2')}}"/>
                            <input name="type" value="Electronic commerce owners" type="hidden">
                        </form>

                    </div>
                    <div class='col-md-3 text-center'>
                     <?php echo file_get_contents('https://crmmrkt.com/ContentController/template/21/'.getCurrentLangIdiom()); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class='cards' id='card2'>

            <div class='video-card my-3'>
                <div class='row my-row'>
                    <div class='col-md-9'>
                        <h2 class='h21-clr'> {{__('more-idh22')}} </h2>
                        <ul>
                            <li><p>
                                    <span class="fon-col"> {{__('more-idspan8')}} </span> {{__('more-idp8')}}
                                </p></li>
                            <li><p>
                                    <span class="fon-col">{{__('more-idspan9')}} </span> {{__('more-idp9')}}
                                </p></li>
                            <span id="more4">
                                <li><p><span class="fon-col"> {{__('more-idspan3')}}</span> {{__('more-idp10')}}</p></li>
                                <li><p><span class="fon-col">{{__('more-idspan4')}}</span> {{__('more-idp11')}}</p></li>
                                <li><p><span class="fon-col">{{__('more-idspan2')}} </span>{{__('more-idp12')}}</p></li>
                                <li><p><span class="fon-col">{{__('more-idspan6')}} </span> {{__('more-idp13')}} </p></li>
                                <li><p><span class="fon-col">{{__('more-idspan7')}} </span>  {{__('more-idp7')}}</p></li>
                            </span>
                        </ul>
                        <button class='btn dowenload-btn ml-md-3 know-more' onclick="Readmore4()"
                                id="myBtn4"> {{__('more-idbtn1')}}</button>
                        <form id="signup" class="formee get-vedio-form signuptrial" method="post">
                            <input class="right send_btn inputnew back-rad-hei-pad" type="submit" title="Send" value="{{__('more-idvalue1')}}"/>
                            <input name="email" class='input bord-rad-mar' id="email" type="text" placeholder="{{__('more-idbtn2')}}"/>
                            <input name="type" value="Influences-Bloggers-Users" type="hidden">
                        </form>

                    </div>
                    <div class='col-md-3 text-center'>
                      <?php echo file_get_contents('https://crmmrkt.com/ContentController/template/22/'.getCurrentLangIdiom()); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class='cards' id='card3'>

            <div class='video-card my-3'>
                <div class='row my-row'>
                    <div class='col-md-9'>
                        <h2 class='h21-clr'>  {{__('more-idh23')}}</h2>
                        <ul>
                            <li><p>
                                    <span class="fon-col">{{__('more-idspan12')}} </span> {{__('more-idp14')}}
                                </p></li>
                            <li><p>
                                    <span class="fon-col">{{__('more-idspan4')}}</span> {{__('more-idp4')}}
                                </p></li>
                            <span id="more5">
                                <li><p><span class="fon-col">{{__('more-idspan4')}}</span> {{__('more-idp15')}}</p></li>
                                <li><p><span class="fon-col">{{__('more-idspan2')}} </span> {{__('more-idp16')}}</p></li>
                                <li><p><span class="fon-col">{{__('more-idspan1')}} </span> {{__('more-idp17')}}</p></li>
                                <li><p><span class="fon-col">{{__('more-idspan6')}}  </span>{{__('more-idp13')}}</p></li>
                                <li><p><span class="fon-col">{{__('more-idspan7')}}</span>  {{__('more-idp7')}}</p></li>
                            </span>
                        </ul>
                        <button class='btn dowenload-btn ml-md-3 know-more' onclick="Readmore5()"
                                id="myBtn5">{{__('more-idbtn1')}}</button>
                        <form id="signup" class="formee get-vedio-form signuptrial" method="post">
                            <input class="right send_btn inputnew back-bord-pad"type="submit" title="Send" value="{{__('more-idvalue1')}}"/>
                            <input name="email" class='input bord-rad-mar' id="email" type="text" placeholder="{{__('more-idbtn2')}}"/>
                            <input name="type" value="Companies and Trademarks" type="hidden">
                        </form>

                    </div>
                    <div class='col-md-3 text-center'>
                      <?php echo file_get_contents('https://crmmrkt.com/ContentController/template/23/'.getCurrentLangIdiom()); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class='cards' id='card4'>

            <div class='video-card my-3'>
                <div class='row my-row'>
                    <div class='col-md-9'>
                        <h2 class='h21-clr'>  {{__('more-idh24')}}</h2>
                        <ul>
                            <li><p><span class="fon-col">{{__('more-idspan22')}} </span> {{__('more-idp20')}}
                                </p></li>
                            <li><p>
                                    <span class="fon-col">{{__('more-idspan10')}}</span> {{__('more-idp10-new')}}
                                </p></li>
                            <span id="more6">
                                  <li><p><span class="fon-col">  {{__('more-idspan23')}} </span> {{__('more-idp23')}}</p></li>
                                <li><p><span class="fon-col">{{__('more-idspan4')}}</span> {{__('more-idp4')}}.</p></li>
                                <li><p><span class="fon-col">Team Performance:</span>{{__('more-idp5')}}</p></li>
                                <li><p><span class="fon-col">{{__('more-idspan6')}} </span> {{__('more-idp13')}}</p></li>
                                <li><p><span class="fon-col">{{__('more-idspan7')}}</span> {{__('more-idp7')}}</p></li>
                            </span>
                        </ul>
                        <button class='btn dowenload-btn ml-md-3 know-more' onclick="Readmore6()"
                                id="myBtn6">{{__('more-idbtn1')}}</button>
                        <form id="signup" class="formee get-vedio-form signuptrial" method="post">
                            <input class="right send_btn inputnew back-bord-pad2"
                                   type="submit" title="Send" value="{{__('more-idvalue1')}}"/>
                            <input name="email" class='input bord-rad-mar' id="email" type="text" placeholder="{{__('more-idbtn2')}}"/>
                            <input name="type" value="NGOs Governments entities" type="hidden">
                        </form>

                    </div>
                    <div class='col-md-3 text-center'>
                        <?php echo file_get_contents('https://crmmrkt.com/ContentController/template/24/'.getCurrentLangIdiom()); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class='cards' id='card5'>

            <div class='video-card my-3'>
                <div class='row my-row'>
                    <div class='col-md-9'>
                        <h2 class='h21-clr'>  {{__('more-idh25')}}</h2>
                        <ul>
                            <li><p>
                                    <span class="fon-col">{{__('more-idspan1')}} </span> {{__('more-idp1')}}
                                </p></li>
                            <li><p>
                                    <span class="fon-col">{{__('more-idspan2')}}  </span>{{__('more-idp2')}}
                                </p></li>
                            <span id="more1">
                            <li><p>
                                    <span class="fon-col">{{__('more-idspan3')}} </span> {{__('more-idp3')}}
                                </p></li>
                            <li><p>
                                    <span class="fon-col">{{__('more-idspan4')}} </span> {{__('more-idp4')}}
                                </p></li>
                            <li><p>
                                    <span class="fon-col">{{__('more-idspan5')}}  </span>{{__('more-idp5')}}
                                </p></li>
                            <li><p>
                                    <span class="fon-col">{{__('more-idspan6')}} </span> {{__('more-idp6')}}
                                </p></li>
                            <li><p>
                                    <span class="fon-col">{{__('more-idspan7')}}</span> {{__('more-idp7')}}
                                </p></li>
                            </span>
                        </ul>
                        <button class='btn dowenload-btn ml-md-3 know-more' onclick="Readmore1()"
                                id="myBtn1">{{__('more-idbtn1')}}</button>
                        <form id="signup" class="formee get-vedio-form signuptrial" method="post">
                            <input class="right send_btn inputnew gro-hgt-bor"
                                   type="submit" title="Send" value="{{__('more-idvalue1')}}"/>
                            <input name="email" class='input bord-rad-mar' id="email" type="text" placeholder="{{__('more-idbtn2')}}"/>
                            <input name="type" value="Advertising & Media Agencies" type="hidden">
                        </form>

                    </div>
                    <div class='col-md-3 text-center'>
                          <?php echo file_get_contents('https://crmmrkt.com/ContentController/template/25/'.getCurrentLangIdiom()); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class='cards' id='card6'>

            <div class='video-card my-3'>
                <div class='row my-row'>
                    <div class='col-md-9'>
                        <h2 class='h21-clr'> {{__('more-idh26')}}</h2>
                        <ul>
                            <li><p>
                                    <span class="fon-col">{{__('more-idspan2')}} </span> {{__('more-idp40')}}
                                </p></li>
                            <li><p>
                                    <span class="fon-col">{{__('more-idspan4')}} </span>{{__('more-idp4')}}
                                </p></li>
                            <span id="more2">
                                <li><p><span class="fon-col"> {{__('more-idspan1')}} </span> {{__('more-idp41')}}</p></li>
                                <li><p><span class="fon-col"> {{__('more-idspan3')}}</span> {{__('more-idp3')}}</p></li>
                                <li><p><span class="fon-col">{{__('more-idspan5')}}</span>{{__('more-idp5')}}</p></li>
                                <li><p><span class="fon-col">{{__('more-idspan6')}} </span> {{__('more-idp13')}}</p></li>
                                <li><p><span class="fon-col">{{__('more-idspan7')}} </span>  {{__('more-idp7')}}</p></li>
                           </span>
                        </ul>
                        <button class='btn dowenload-btn ml-md-3 know-more' onclick="Readmore2()"
                                id="myBtn2">{{__('more-idbtn1')}}</button>
                        <form id="signup" class="formee get-vedio-form signuptrial" method="post">
                            <input class="right send_btn inputnew ground-padd"
                                   type="submit" title="Send" value="{{__('more-idvalue1')}}"/>
                            <input name="email" class='input bord-rad-mar' id="email" type="text" placeholder="{{__('more-idbtn2')}}"/>
                            <input name="type" value="Freelancers & Job Seekers" type="hidden">
                        </form>

                    </div>
                    <div class='col-md-3 text-center'>
                     <?php echo file_get_contents('https://crmmrkt.com/ContentController/template/26/'.getCurrentLangIdiom()); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
@endsection

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
 
    <script src="{{get_theme_frontend_url('assets/sticky/js/more-benefits.js')}}"></script>
    <script>
        // $(".send_btn").click(function () {
        //     $("#redirectModal").modal('show');
        //     setInterval(function(){
        //       window.location = "https://stickyposts.net/register";
        //       },5000)
        // })
        $(".job-btn").click(function () {
            $("#myModal").modal('show');
        })
        $(".job-btn").click(function () {
            var button = $(this).val();
            $(".job_name").val(button);
            $("#job_id").val($(this).data('id'))
        });


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

        $('.download_resource_assign').on('click', function () {

            resource_id = $(this).attr('data-id');

            $('.file_resource').val(resource_id);

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
 
    </script>
@endpush
