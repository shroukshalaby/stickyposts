<div class="container-fluid p-0 d-lg-block d-none">
    <div class="row">
        <div class="col-md-12"
             style="background:linear-gradient(90deg, #320b82 0%, #9c33c3 100%)!important;padding:0px 0 20px">
            <div class="row">
                <div class="col-lg-11 mx-auto hide-mobile">

                    <div class="row justify-content-center tab-content m-0" style="align-items:flex-end;">
                        <div class="col-lg-2 d-lg-block d-none mt-5 p-0">
                            <div class="" style="border: none;background: transparent;text-align: start;">

                                @switch( getCurrentLangIdiom())
                                    @case('ar')
                                    <img src="{{get_theme_frontend_url('assets/sticky/images/Economy-Plus-Package-with-wordsAR.png')}}"
                                         class="img-fluid" style="width: 213px;height:353px;">
                                    @break
                                    @case('en')
                                    <img src="{{get_theme_frontend_url('assets/sticky/images/Economy-Plus-Package-with-words.png')}}"
                                         class="img-fluid" style="width: 213px;height:353px;">
                                    @break
                                    @case('fr')
                                    <img src="{{get_theme_frontend_url('assets/sticky/images/Economy-Plus-Package-with-wordsFR.jpg')}}"
                                         class="img-fluid" style="width: 213px;height:353px;">
                                    @break
                                    @default
                                    6$
                                @endswitch

                            </div>
                        </div>
                        <div class="col-lg-9 col-md-12">
                            <div class="row justify-content-center">
                                <div class="col-lg-6 col-md-6 col-sm-8 text-center mt-5  hide-mobile pl-eng-0 pr-rtl-0">
                                    <div class="card" style="height: 100%;">
                                        <div class="card-body p-2">
                                            <div class="row">
                                                <img src="{{get_theme_frontend_url('assets/sticky/images/mobil-download.png')}}"
                                                     class="img-fluid IMAGES2 IMAGESFre">
                                                <div class="col-12">
                                                    <h5 class="text-dark my-2 fs-16-fr-dw">{{__('h_download_app')}}</h5>
                                                    <div class="stage">
                                                        <a href="https://play.google.com/store/apps/details?id=com.stickyapp.myappcompany">
                                                            <img src="{{get_theme_frontend_url('assets/sticky/images/Google play.png')}}"
                                                                 style="width: 35%;">
                                                        </a>
                                                        <a class=""
                                                           href="https://apps.apple.com/eg/app/stickyposts/id1481454304">
                                                            <img src="{{get_theme_frontend_url('assets/sticky/images/APPSTORE.png')}}"
                                                                 style="width: 30%;">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-8 mt-5 pl-1 hide-mobile pr-0" dir=" ">
                                    <div class="card">
                                        <form style="margin: 0;">
                                            <div class="card-body p-2">
                                                <div class="row">
                                                    <div style="position: absolute;left: 0%;background: #f00;top: 0%;color: #fff;padding: 1px 6px;">
                                                        <p style="margin: 0;font-size: 14px;line-height: 1.8;color:#fff;"> {{__('for_limited')}}</p>
                                                    </div>
                                                    <img src="{{get_theme_frontend_url('assets/sticky/images/logo-s.png')}}"
                                                         class="img-fluid IMAGES">
                                                    <div class="col-12 text-center">
                                                        <p style="margin: 17px 0 0 0;color:#310150;font-weight: 500;font-size:13px;line-height: 1.3;">
                                                            {{__('h_sub_and_use')}}
                                                            <span style="font-weight: bold;font-size:18px">{{__('30_disc')}}  </span>
                                                            <br>
                                                            {{__('h_promo_text')}}

                                                        </p>
                                                    </div>
                                                </div>
                                                <a class="submit" href="{{get_url('register')}}"
                                                   style="border-radius:5px;font-size: 14px;padding: 5px 9px;">{{__('btn_GetNow')}}</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-12 p-0 col-12 mx-auto mt-4 hide-mobile"
                                     style="background:#f8f900;border: 1px solid #f8f9fa;color:#000">
                                    <div class="row  mx-0" dir=" " style="">
                                        <div class="col-md-5 rtl-right  my-auto">
                                            @switch( getCurrentLangIdiom())
                                                @case('ar')
                                                <img src="{{get_theme_frontend_url('assets/sticky/images/logo-whq.png')}}"
                                                     class="img-fluid" style="width: 50%;">
                                                @break
                                                @case('en')
                                                <img src="{{get_theme_frontend_url('assets/sticky/images/logo-WHe.png')}}"
                                                     class="img-fluid" style="width: 50%;">
                                                @break
                                                @case('fr')
                                                <img src="{{get_theme_frontend_url('assets/sticky/images/logo-WHe.png')}}"
                                                     class="img-fluid" style="width: 50%;">
                                                @break
                                                @default
                                            @endswitch
                                            <h4 style="margin: 0px;">{{__('h_fam_imp')}}</h4>
                                            <p style="margin-bottom: 4px;font-size:1rem;color:#000;">{{__('h_fam_imp2')}}
                                                <a href="{{get_url('family')}}" class="price-btn"
                                                   style="line-height: 1.5;padding: 3px 7px;font-size: 12px;"> {{__('learnMore')}} </a>
                                            </p>
                                            <a href="{{get_url('register')}}"
                                               class="submit my-2 {{  getCurrentLangIdiom() == 'ar' ? 'py-0'  : 'py-2' }} "
                                               id="sub">{{__('btn_start_free_trial')}} </a>
                                            <p style="margin:10px 0 0;font-size:12px;color:#000;">{{__('h_fam_imp3')}} </p>
                                        </div>
                                        <div class="col-md-2 text-center my-auto">
                                            @switch( getCurrentLangIdiom())
                                                @case('ar')
                                                <img src="{{get_theme_frontend_url('assets/sticky/images/Family-icon-1.png')}}"
                                                     class="img-fluid w-100">
                                                @break
                                                @case('en')
                                                <img src="{{get_theme_frontend_url('assets/sticky/images/Icon-Price.png')}}"
                                                     class="img-fluid w-100">
                                                @break
                                                @case('fr')
                                                <img src="{{get_theme_frontend_url('assets/sticky/images/Icon-Price-fr.png')}}"
                                                     class="img-fluid w-100">
                                                @break
                                                @default
                                                6$
                                            @endswitch
                                        </div>
                                        <div class="col-md-5 my-auto {{  getCurrentLangIdiom() == 'ar' ? 'text-left pl-3'  : 'text-right pr-3' }} ">
                                            <img src="{{get_theme_frontend_url('assets/sticky/images/familybanner.png')}}"
                                                 class="img-fluid my-3">
                                            <a href="{{get_url('contact_us')}}" class="p-2 download call_btn" id="sub">
                                                {{__('h_fam_imp4')}} <i class="fas fa-phone" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center mt-3">
                        <div class="col-lg-6 col-md-8 " style="border:2px solid #ddd">
                            <div class="row">

                                <div class="col-sm-7 rtl-right mx-auto pt-2">

                                <!--<img src="{{get_theme_frontend_url('assets/sticky/images/1.png')}}" style="width:100%;">-->
                                    <h4 style="color:#fff;margin:0;font-weight: 600;">{{__('benefits')}} </h4>
                                    <ul class="m-0 pl-4 text-white">
                                        <li>
                                            <p class="text-white"
                                               style="margin: 0;font-size: 12px;">{{__('h_ReceivePDFreports')}}    </p>
                                        </li>
                                        <li>
                                            <p class="text-white"
                                               style="margin: 0;font-size: 12px;">{{__('h_Trackgrowth')}}    </p>
                                        </li>
                                        <li>
                                            <p class="text-white"
                                               style="margin: 0;font-size: 12px;">{{__('h_Forecastreports')}}    </p>
                                        </li>
                                        <li>
                                            <p class="text-white"
                                               style="margin: 0;font-size: 12px;">{{__('h_useComparison')}} </p>
                                        </li>
                                        <li>
                                            <p class="text-white" style="margin: 0;font-size: 12px;">{{__('h_monitor')}}
                                                <br> <a href="https://stickyposts.net/phpanalyzer/product2/index.php"
                                                        style="cursor: pointer;text-decoration:underline">{{__('learnMore')}}</a>
                                            </p>
                                        </li>
                                    </ul>
                                    <h6 style="color:#fff;font-size: 13px;margin-top: 10px;">{{__('h_trackservice')}}  </h6>
                                </div>
                                <div class="col-sm-5 p-0 my-auto">
                                    <?php echo file_get_contents('https://crmmrkt.com/ContentController/template/19/' . getCurrentLangIdiom()); ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-4  pt-2 mobile-style" style="border:2px solid #ddd">
                            <div class=" compar-form">
                                <h4 class="text-center"
                                    style="color:#fff;font-weight: 600;">{{__('h_Comparisons')}}</h4>
                                <h6 class="text-center pt-2" style="color:#fff">{{__('h_comp1')}}
                                    <br>
                                    {{__('h_comp2')}}
                                </h6>
                                <form class=" my-2 formcomp">
                                    <div class="row m-auto " style="align-items:center;justify-content: space-around;">
                                        <input type="hidden" name="lang" value="EN">
                                        <div class="col-6 p-0 text-start" style="flex:0.45">
                                            <label for="mail" style="color:#fff;">{{__('h_Provider')}}</label>
                                            <select name="providerName"
                                                    class="form-control form-controlEdit text-sm-center" id="pN"
                                                    required>
                                                <option value="" selected
                                                        disabled>{{__('h_Choose_competitor')}}</option>

                                                @foreach ($sticky_service_providers  as $provider)
                                                    <option value="{{$provider->id}}">   {{$provider->service_provider}} </option>
                                                @endforeach

                                            </select>
                                        </div>
                                        <div class="col-6 p-0 text-start" style="flex:0.45">
                                            <label for="mail" style="color:#fff;">{{__('h_Package')}}</label>
                                            <select name="packageName"
                                                    class="form-control form-controlEdit text-sm-center" id="package"
                                                    required>
                                                <option value="" selected disabled>{{__('h_Choose_Package')}} </option>
                                                @foreach ($sticky_compare  as $compare)
                                                    <option class="{{ $compare-> service_provider}} controlOption"
                                                            style="display:none;"
                                                            value="{{ $compare->package_value }}">  {{$compare->package_name}}</option>
                                                @endforeach

                                            </select>
                                        </div>


                                    </div>
                                    <div class="row my-2 view-mobile text-center" style="margin-top: 1.5rem!important">
                                        <button type="submit" class="submit m-auto comp-btn" id=""
                                                style="width: 85px;background: linear-gradient(90deg, #320b82 0%, #9c33c3 100%) !important; ">{{__('btn_Compare')}} </button>
                                    </div>
                                    <div class="row mt-3 hide-mobile">
                                        <button class="submit m-auto comp-btn">{{__('btn_Compare')}}</button>
                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>

                    <!-- loaders -->
                    <div class="modal fade loaders bd-example-modal-lg" tabindex="-1" role="dialog"
                         aria-labelledby="exampleModalLabel" aria-hidden="true"
                         style="background: rgba(0, 0, 0, 0.7); padding-top: 60px;">
                        <div class="modal-dialog miniDialog" role="document">
                            <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
                            <!--    <span aria-hidden="true">&times;</span>-->
                            <!--  </button>-->
                            <div class="modal-content"
                                 style="background: linear-gradient(275deg, #5e2298, #320b82);color:#fff">
                                <div class="modal-header pl-2 p-1">
                                    <img src="{{get_theme_frontend_url('assets/sticky/images/logo-s.png')}}"
                                         style="width: 49px;z-index: 10;">

                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                                            style="position: absolute;top: 12px;right: 18px;">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div id="modal-body py-4" class="text-center">
                                    <div class="lds-ring">
                                        <img src="{{get_theme_frontend_url('assets/sticky/images/logo-s.png')}}">
                                    </div>

                                    <div class="modal-body" style="padding:0 16px"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--modal compare-->
                    <div class="modal fade bd-example-modal-lg" id="modal_compare" tabindex="-1" role="dialog"
                         aria-labelledby="exampleModalLabel" aria-hidden="true"
                         style="background: rgba(0, 0, 0, 0.7); padding-top: 60px;">
                        <div class="modal-dialog miniDialog" role="document">
                            <div class="modal-content"
                                 style="background: linear-gradient(275deg, #5e2298, #320b82);color:#fff">
                                <div class="modal-header py-4">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                                            style="position: absolute;top: 12px;right: 18px;">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div id="modal-body py-4" class="text-center">
                                    <div class="lds-ring">
                                        <img src="{{get_theme_frontend_url('assets/sticky/images/logo-s.png')}}">
                                    </div>
                                    <div class="modal-compare" style="padding:0 16px"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <style>

                        #myModal .model-tabs {
                            color: #2196F3;
                            background: transparent;
                        }

                        #myModal #pills-tab .active {
                            color: #fff;
                            background: transparent;
                        }

                        #myModal .form-group {
                            margin-bottom: 0 !important;
                        }
                    </style>
                </div>
                .
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>


        $('.formcomp').submit(function (e) {
            $('#modal_compare').modal('show');
            $('.lds-ring').show();
            $('.modal-compare').html('....');
            e.preventDefault();
            var csrfName = '{{getci()->security->get_csrf_token_name() }}',
                csrfHash = '{{ getci()->security->get_csrf_hash() }}';
            $.ajax({
                url: "/compare",
                type: 'post',
                data: {
                    [csrfName]: csrfHash,
                    form_data: $(this).serialize(),
                },
                success: function (data) {
                    csrfName = data.csrfName;
                    csrfHash = data.csrfHash;

                    $('.lds-ring').hide();
                    $('.modal-compare').html(data);
                }
            });

        });


    </script>
@endpush