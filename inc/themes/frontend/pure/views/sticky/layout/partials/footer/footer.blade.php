<section class="py-4 foot-bg-lg-blue">
    <div class="container">
        <div class="row">
            <div class="col-md-7 my-auto rtl-right text-white">
                <h3 class="font-weight-bold text-mauv eng-text">{{__('foot_h4')}}</h3>
                <p class="hide-mobile text-mauv fs-13 mb-0 mt-20">{{__('foot_p1')}}</p>
            </div>
            <div class="col-md-5 col-12 my-auto">
                <form class="formevent br-r-b" method="post">
                    <div class="input-group dir-rtl">
                        <input style="height:39px" name="email" class="form-control w-md-50" id="email" type="email"  placeholder="{{__('EnterEmail')}}" title="Your e-mail address is required so I can reply" required="" maxlength="50" pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}">
                        <span class="input-group-btn w-md-50">
                            <button class="btn btn-default w-100 footer-reg-btn" type="submit" name="submit3">{{__('foot_reg_btn')}}</button>
                        </span>
                    </div>
                </form>
                <p class="foot_form_p">{{__('foot_p2')}}</p>
            </div>
        </div>
    </div>
</section>
<div class="d-none d-lg-block d-md-block d-sm-block">
    <footer class="site-footer _footer" id="footer">
        <div class="site-footer__container">
            <nav class="site-footer__nav nav-footer">
                <div class="nav-footer__ul row">
                    <div class="nav-footer__li col-lg-2 col-md-4 col-sm-6">
                        <h3 class="nav-footer__header">{{__('DownloadNow')}}</h3>
                        <div class="site-footer__bottom__download mt-2">
                            <a href="https://apps.apple.com/eg/app/stickyposts/id1481454304"><img src="https://stickyposts.net/sticky/images/APPSTORE.png" width="46%"></a>
                            <a href="https://play.google.com/store/apps/details?id=com.stickyapp.myappcompany"><img src="https://stickyposts.net/sticky/images/Google play.png" class=""  width="51%"></a>
                        </div>
                        <div class="row">
                            <div class="col-12 widget-inner text-center">
                                <a href="https://www.facebook.com/stickypoststool" class="facebook tipped" data-title="facebook"  data-tipper-options='{"direction":"top","follow":"true"}'>
                                    <i class="fab fa-facebook"></i>
                                </a>
                                <a href="https://www.instagram.com/stickypostsmea" class="instagram tipped" data-title="instagram"  data-tipper-options='{"direction":"top","follow":"true"}'>
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="https://twitter.com/StickypostsMEA" class="twitter tipped" data-title="twitter"  data-tipper-options='{"direction":"top","follow":"true"}'>
                                    <i class="fab fa-twitter"></i></a>
                                <a href="https://www.pinterest.com/stickypostsmea" class="pinterest tipped" data-title="pinterest"  data-tipper-options='{"direction":"top","follow":"true"}'>
                                    <i class="fab fa-pinterest"></i>
                                </a>
                            </div>
                            <div class="col-12  widget-inner text-center">

                                <a href="https://www.youtube.com/channel/UCU2cHOoahBCDzPHoYGcDdQA?view_as=subscriber" class="youtube tipped" data-title="youtube"  data-tipper-options='{"direction":"top","follow":"true"}'>
                                    <i class="fab fa-youtube"></i></a>
                                <a href="https://www.linkedin.com/company/stickypostsmea" class="linkedin tipped" data-title="linkedin"  data-tipper-options='{"direction":"top","follow":"true"}'>
                                    <i class="fab fa-linkedin"></i></a>
                                <a href="https://www.slideshare.net/stickypostsmena" class="slideshare tipped" data-title="pinterest"  data-tipper-options='{"direction":"top","follow":"true"}'>
                                    <i class="fab fa-slideshare"></i></a>
                                <a href="https://soundcloud.com/stickypostsmea" class="soundcloud tipped" data-title="linkedin"  data-tipper-options='{"direction":"top","follow":"true"}'>
                                    <i class="fab fa-soundcloud"></i>
                                </a>
                            </div>
                            <div class="col-12">
                                <form class='newsletter_subscription'>
                                    <div class="form-row dir-rtl mx-0 align-items-center">
                                        <div class="info col-6 px-0 d-flex align-items-center">
                                            <input type="email" name="email" placeholder="{{__('enterEmailnew')}}" class="form-control-sm w-100 min-width-auto">
                                        </div>
                                        <input type="submit" value="{{__('foot_btn_sub')}}" class="newsletter col-6 form-control-sm px-0 h-25">
                                    </div>

                                </form>
                            </div>
                            <div class="col-12">
                                <div id="google_translate_element"></div>
                            </div>
                        </div>
                    </div>
                    <div class="nav-footer__li col-lg-2 col-md-4 col-sm-6">
                        <h3 class="nav-footer__header">
                         {{__('foot_Users')}}     
                        </h3>
                        <a class="nav-footer__item" href="{{get_url('more_benefits#card1')}}" data-ga-track-id="nav_main_footer_features" data-di-id="di-id-5bee3efa-abbe3ea5">
                        {{__('foot_Eco')}}
                        </a>
                        <a class="nav-footer__item" href="{{get_url('more_benefits#card2')}}" data-ga-track-id="nav_main_footer_networksintegrations" data-di-id="di-id-e969144e-7e38aab2">
                            {{__('foot_comp')}}
                        </a>
                        <a class="nav-footer__item" href="{{get_url('more_benefits#card3')}}" data-ga-track-id="nav_main_footer_networksintegrations" data-di-id="di-id-e969144e-7e38aab2">
                        {{__('foot_ngo')}}    
                        </a>
                        <a class="nav-footer__item" href="{{get_url('more_benefits#card4')}}" data-ga-track-id="nav_main_footer_networksintegrations" data-di-id="di-id-e969144e-7e38aab2">
                         {{__('foot_inf')}}   
                        </a>
                        <a class="nav-footer__item" href="{{get_url('more_benefits#card5')}}" data-ga-track-id="nav_main_footer_networksintegrations" data-di-id="di-id-e969144e-7e38aab2">
                         {{__('foot_jS')}}   
                        </a>
                        <a class="nav-footer__item" href="{{get_url('more_benefits#card6')}}" data-ga-track-id="nav_main_footer_networksintegrations" data-di-id="di-id-e969144e-7e38aab2">
                         {{__('foot_ads')}}   
                        </a>
                    </div>
                    <div class="nav-footer__li col-lg-2 col-md-4 col-sm-6">
                        <h3 class="nav-footer__header">{{__('foot_pks')}}  </h3>
                        <a class="nav-footer__item" href="{{get_url('learn_more')}}" data-ga-track-id="nav_main_footer_free" data-di-id="di-id-b2e98f66-9f0e5216">
                          {{__('foot_fTrial')}}  
                        </a>
                        <a class="nav-footer__item" href="{{get_url('learn_more')}}" data-ga-track-id="nav_main_footer_professional" data-di-id="di-id-a996c02d-e9fca242">
                           {{__('foot_eco_pks')}} 
                        </a>
                        <a class="nav-footer__item" href="{{get_url('learn_more')}}" data-ga-track-id="nav_main_footer_professional" data-di-id="di-id-a996c02d-e9fca242">
                           {{__('foot_spc_pks')}} 
                        </a>
                        <a class="nav-footer__item" href="{{get_url('learn_more')}}" data-ga-track-id="nav_main_footer_professional" data-di-id="di-id-a996c02d-e9fca242">
                           {{__('foot_prof_pks')}} 
                        </a>
                        <a class="nav-footer__item" href="{{get_url('learn_more')}}" data-ga-track-id="nav_main_footer_professional" data-di-id="di-id-a996c02d-e9fca242">
                            {{__('foot_sProf_pks')}}
                        </a>
                        <a class="nav-footer__item" href="{{get_url('enterprise_package')}}" data-ga-track-id="nav_main_footer_enterprise" data-di-id="di-id-25040ea2-5f92b6a8">
                          {{__('foot_entr_pks')}}  
                        </a>
                    </div>
                    <div class="nav-footer__li col-lg-2 col-md-4 col-sm-6">
                        <h3 class="nav-footer__header">
                          {{__('foot_edu')}}  
                        </h3>
                        <a href="{{get_url('reports')}}" class="nav-footer__item" data-ga-track-id="nav_main_footer_academy" data-di-id="di-id-b2e98f66-f08c3e78">
                           {{__('b_Reports')}} 
                        </a>
                        <a href="{{get_url('templates')}}" class="nav-footer__item" data-ga-track-id="nav_main_footer__resources" data-di-id="di-id-5bee3efa-d2c2de69">
                          {{__('b_Templates')}}  
                        </a>
                        @switch( getCurrentLangIdiom())
                            @case('ar')
                             <a href="https://stickyposts.net/blog/stickypost/" class="nav-footer__item" data-ga-track-id="nav_main_footer_blog" data-di-id="di-id-40fb46e8-6d6bc656">
                              {{__('b_Blog')}}
                             </a>
                            @break
                            @case('en')
                             <a href="https://stickyposts.net/blog/stickypost-en/" class="nav-footer__item" data-ga-track-id="nav_main_footer_blog" data-di-id="di-id-40fb46e8-6d6bc656">
                              {{__('b_Blog')}}
                             </a>
                            @break
                            @case('fr')
                             <a href="https://stickyposts.net/blog/stickypost-fr/" class="nav-footer__item" data-ga-track-id="nav_main_footer_blog" data-di-id="di-id-40fb46e8-6d6bc656">
                              {{__('b_Blog')}}
                             </a>
                            @break
                            @default
                        @endswitch
                        @switch( getCurrentLangIdiom())
                            @case('ar')
                             <a href="https://stickyposts.net/LMS-AR/"  class="nav-footer__item" data-ga-track-id="nav_main_footer_webinars" data-di-id="di-id-5bee3efa-289cdb1c">
                                {{__('foot_on_edu')}}   
                            </a>
                            @break
                            @case('en')
                              <a href="https://stickyposts.net/LMS/"  class="nav-footer__item" data-ga-track-id="nav_main_footer_webinars" data-di-id="di-id-5bee3efa-289cdb1c">
                                 {{__('foot_on_edu')}}   
                             </a>
                            @break
                            @case('fr')
                              <a href="https://stickyposts.net/LMS-FR/"  class="nav-footer__item" data-ga-track-id="nav_main_footer_webinars" data-di-id="di-id-5bee3efa-289cdb1c">
                                 {{__('foot_on_edu')}}   
                                </a>
                            @break
                            @default
                        @endswitch
                       
                        <a href="{{get_url('training')}}" class="nav-footer__item" data-ga-track-id="nav_main_footer_webinars" data-di-id="di-id-5bee3efa-289cdb1c">
                         {{__('foot_trainings')}}   
                        </a>
                    </div>
                    <div class="nav-footer__li col-lg-2 col-md-4 col-sm-6">
                        <h3 class="nav-footer__header">
                           {{__('b_Services')}} 
                        </h3>
                        <a href="{{get_url('')}}" class="nav-footer__item" data-ga-track-id="nav_main_footer_academy" data-di-id="di-id-b2e98f66-f08c3e78">
                         {{__('h_benefit_h5')}}   
                        </a>
                        <a href="{{get_url('family')}}" class="nav-footer__item" data-ga-track-id="nav_main_footer_academy" data-di-id="di-id-b2e98f66-f08c3e78">
                         {{__('foot_fam_pks')}}   
                        </a>
                        @switch( getCurrentLangIdiom())
                            @case('ar')
                             <a href="https://stickyposts.net/phpanalyzer/product2/index.php" class="nav-footer__item" data-ga-track-id="nav_main_footer__resources" data-di-id="di-id-5bee3efa-d2c2de69">
                              {{__('foot_inf')}}  
                            </a>
                            @break
                            @case('en')
                               <a href="https://stickyposts.net/phpanalyzer/product3/index.php" class="nav-footer__item" data-ga-track-id="nav_main_footer__resources" data-di-id="di-id-5bee3efa-d2c2de69">
                                  {{__('foot_inf')}}  
                                </a>
                            @break
                            @case('fr')
                              <a href="https://stickyposts.net/phpanalyzer/product4/index.php" class="nav-footer__item" data-ga-track-id="nav_main_footer__resources" data-di-id="di-id-5bee3efa-d2c2de69">
                                 {{__('foot_inf')}}  
                             </a>  
                            @break
                            @default
                        @endswitch
                       
                        <a href="{{get_url('auto_activity')}}" class="nav-footer__item" data-ga-track-id="nav_main_footer_blog" data-di-id="di-id-40fb46e8-6d6bc656">
                          {{__('b_AutoActivity')}}  
                        </a>
                        <a href="{{get_url('stickyposts_affiliate')}}"  class="nav-footer__item" data-ga-track-id="nav_main_footer_blog" data-di-id="di-id-40fb46e8-6d6bc656">
                         {{__('foot_aff')}}  
                        </a>
                        <a href="{{get_url('brand_guideline')}}" class="nav-footer__item" data-ga-track-id="nav_main_footer_blog" data-di-id="di-id-40fb46e8-6d6bc656">
                         {{__('foot_br_gu')}}   
                        </a>
                    </div>
                    <div class="nav-footer__li col-lg-2 col-md-4 col-sm-6">
                        <h3 class="nav-footer__header">
                           {{__('b_Support')}}  
                        </h3>
                        <a href="{{get_url('contact_us')}}" class="nav-footer__item" data-ga-track-id="nav_main_footer_contactus" data-di-id="di-id-25040ea2-47f2d13f">
                          {{__('b_Contact')}}  
                        </a>
                         @switch( getCurrentLangIdiom())
                            @case('ar')
                             <a href="https://stickyposts.net/support-ticket/" class="nav-footer__item" data-ga-track-id="nav_main_footer_help" data-di-id="di-id-40fb46e8-1f34ef">
                                  {{__('foot_faq')}}  
                             </a>
                            @break
                            @case('en')
                               <a href="https://stickyposts.net/support-ticket1/" class="nav-footer__item" data-ga-track-id="nav_main_footer_help" data-di-id="di-id-40fb46e8-1f34ef">
                                  {{__('foot_faq')}}  
                                </a>
                            @break
                            @case('fr')
                              <a href="https://stickyposts.net/support-ticket2/" class="nav-footer__item" data-ga-track-id="nav_main_footer_help" data-di-id="di-id-40fb46e8-1f34ef">
                                  {{__('foot_faq')}}  
                             </a>  
                            @break
                            @default
                        @endswitch
                        
                        <a href="{{get_url('careers')}}" class="nav-footer__item" data-ga-track-id="nav_main_footer_careers" data-di-id="di-id-25040ea2-276a335a">
                          {{__('foot_car')}}  
                        </a>
                        <a href="{{get_url('developers')}}" class="nav-footer__item" data-ga-track-id="nav_main_footer_leadership" data-di-id="di-id-25040ea2-5a7e2749">
                          {{__('foot_dev')}}  
                        </a>
                    </div>
                </div>
            </nav>
            <div class="site-footer__bottom">
                <div class="row w-100 mx-0">
                    <div class="col-12 px-0">
                        <ul class="d-flex ls-none p-0 m-0 dir-rtl">
                            <div class="nav-item br-style">
                                <a class="nav-link py-0 pl-0">
                                    <small class="text-white"> {{__('foot_copy_rights')}} </small>
                                </a>
                            </div>
                            <div class="nav-item br-style">
                                <a class="nav-link py-0" href="{{get_url('terms')}}">
                                    <small class="text-white">{{__('foot_cond')}} </small>
                                </a>
                            </div>
                            <div class="nav-item">
                                <a class="nav-link py-0" href="{{get_url('privacy')}}">
                                    <small class="text-white">{{__('foot_priv')}} </small>
                                </a>
                            </div>

                        </ul>
                    </div>

                </div>

            </div>
        </div>
    </footer>
</div>
<div class="d-lg-none d-md-none d-sm-none d-block">
    <section class="footer-mobile-banner">
        <div class="container text-center my-contain py-3">
            <h2 class="text-white fs-16em"> {{__('foot_mob_h2')}}  </h2>
            <div class="subform mx-auto my-1">
                <a class="submit freeTrialText_mobile" href="{{get_url('register')}}">
                {{__('StartTrial')}}     
                </a>

            </div>

            <div class="pkComparison_mobile">
                <a href="{{get_url('pricing')}}" id="compar" class="text-white text_decor_underline">
                {{__('PackageComparison')}}     
                </a>
            </div>
        </div>
    </section>
    <footer class="site-footer _footer" id="footer">
        <div class="site-footer__container m-auto w-95">
            <nav class="site-footer__nav nav-footer">
                <div id="accordion">
                    <div class="my-4">
                        <img src="https://stickyposts.net/sticky/logo-s.png" class="d-block m-auto w-20">
                    </div>


                    <div class="row containere justify-content-center border-none" id="myUL">
                        <button class="btn btn-link w-100 text-dark p-0" data-toggle="collapse" data-target="#collapse2" aria-expanded="true" aria-controls="collapse2">
                            <h3 class="nav-footer__header">{{__('foot_Users')}}   </h3>
                        </button>
                    </div>
                    <div id="collapse2" class="collapse" data-parent="#accordion">
                        <div class="card-body text-center">
                            <a class="nav-footer__item" href="{{get_url('more_benefits#card1')}}" data-ga-track-id="nav_main_footer_features" data-di-id="di-id-5bee3efa-abbe3ea5">
                             {{__('foot_Eco')}}
                            </a>
                            <a class="nav-footer__item" href="{{get_url('more_benefits#card2')}}" data-ga-track-id="nav_main_footer_networksintegrations" data-di-id="di-id-e969144e-7e38aab2">
                              {{__('foot_comp')}} 
                            </a>
                            <a class="nav-footer__item" href="{{get_url('more_benefits#card3')}}" data-ga-track-id="nav_main_footer_networksintegrations" data-di-id="di-id-e969144e-7e38aab2">
                                {{__('foot_ngo')}}
                            </a>
                            <a class="nav-footer__item" href="{{get_url('more_benefits#card4')}}" data-ga-track-id="nav_main_footer_networksintegrations" data-di-id="di-id-e969144e-7e38aab2">
                                {{__('foot_inf')}}
                            </a>
                            <a class="nav-footer__item" href="{{get_url('more_benefits#card5')}}" data-ga-track-id="nav_main_footer_networksintegrations" data-di-id="di-id-e969144e-7e38aab2">
                                {{__('foot_jS')}}
                            </a>
                            <a class="nav-footer__item" href="{{get_url('more_benefits#card6')}}" data-ga-track-id="nav_main_footer_networksintegrations" data-di-id="di-id-e969144e-7e38aab2">
                               {{__('foot_ads')}}
                            </a>
                        </div>
                    </div>
                    <div class="row containere justify-content-center border-none" id="myUL">

                        <button class="btn btn-link w-100 text-dark p-0" data-toggle="collapse" data-target="#collapse3" aria-expanded="true" aria-controls="collapse3">
                            <h3 class="nav-footer__header"> {{__('foot_pks')}} </h3>
                        </button>
                    </div>
                    <div id="collapse3" class="collapse" data-parent="#accordion">
                        <div class="card-body text-centerandro">
                            <a class="nav-footer__item" href="{{get_url('register')}}" data-ga-track-id="nav_main_footer_free" data-di-id="di-id-b2e98f66-9f0e5216">
                              {{__('foot_fTrial')}}  
                            </a>
                            <a class="nav-footer__item" href="{{get_url('economical')}}" data-ga-track-id="nav_main_footer_professional" data-di-id="di-id-a996c02d-e9fca242">
                              {{__('foot_eco_pks')}} 
                            </a>
                            <a class="nav-footer__item" href="{{get_url('special')}}" data-ga-track-id="nav_main_footer_professional" data-di-id="di-id-a996c02d-e9fca242">
                              {{__('foot_spc_pks')}} 
                            </a>
                            <a class="nav-footer__item" href="{{get_url('professional')}}" data-ga-track-id="nav_main_footer_professional" data-di-id="di-id-a996c02d-e9fca242">
                             {{__('foot_prof_pks')}}
                            </a>
                            <a class="nav-footer__item" href="{{get_url('super_professional')}}" data-ga-track-id="nav_main_footer_professional" data-di-id="di-id-a996c02d-e9fca242">
                              {{__('foot_sProf_pks')}}
                            </a>
                            <a class="nav-footer__item" href="{{get_url('enterprise_package')}}" data-ga-track-id="nav_main_footer_enterprise" data-di-id="di-id-25040ea2-5f92b6a8">
                             {{__('foot_entr_pks')}}
                            </a>
                        </div>
                    </div>
                    <div class="row containere justify-content-center border-none" id="myUL">

                        <button class="btn btn-link w-100 text-dark p-0" data-toggle="collapse" data-target="#collapse4" aria-expanded="true" aria-controls="collapse4">
                            <h3 class="nav-footer__header">
                               {{__('foot_edu')}} 
                            </h3>
                        </button>
                    </div>
                    <div id="collapse4" class="collapse" data-parent="#accordion">
                        <div class="card-body text-center">
                            <a href="{{get_url('reports')}}" class="nav-footer__item" data-ga-track-id="nav_main_footer_academy" data-di-id="di-id-b2e98f66-f08c3e78">
                              {{__('b_Reports')}}  
                            </a>
                            <a href="{{get_url('templates')}}" class="nav-footer__item" data-ga-track-id="nav_main_footer__resources" data-di-id="di-id-5bee3efa-d2c2de69">
                             {{__('b_Templates')}}   
                            </a>
                             @switch( getCurrentLangIdiom())
                            @case('ar')
                             <a href="https://stickyposts.net/blog/stickypost/" class="nav-footer__item" data-ga-track-id="nav_main_footer_blog" data-di-id="di-id-40fb46e8-6d6bc656">
                              {{__('b_Blog')}}
                             </a>
                            @break
                            @case('en')
                             <a href="https://stickyposts.net/blog/stickypost-en/" class="nav-footer__item" data-ga-track-id="nav_main_footer_blog" data-di-id="di-id-40fb46e8-6d6bc656">
                              {{__('b_Blog')}}
                             </a>
                            @break
                            @case('fr')
                             <a href="https://stickyposts.net/blog/stickypost-fr/" class="nav-footer__item" data-ga-track-id="nav_main_footer_blog" data-di-id="di-id-40fb46e8-6d6bc656">
                              {{__('b_Blog')}}
                             </a>
                            @break
                            @default
                        @endswitch
                        @switch( getCurrentLangIdiom())
                            @case('ar')
                             <a href="https://stickyposts.net/LMS-AR/"  class="nav-footer__item" data-ga-track-id="nav_main_footer_webinars" data-di-id="di-id-5bee3efa-289cdb1c">
                                {{__('foot_on_edu')}}   
                            </a>
                            @break
                            @case('en')
                              <a href="https://stickyposts.net/LMS/"  class="nav-footer__item" data-ga-track-id="nav_main_footer_webinars" data-di-id="di-id-5bee3efa-289cdb1c">
                                 {{__('foot_on_edu')}}   
                             </a>
                            @break
                            @case('fr')
                              <a href="https://stickyposts.net/LMS-FR/"  class="nav-footer__item" data-ga-track-id="nav_main_footer_webinars" data-di-id="di-id-5bee3efa-289cdb1c">
                                 {{__('foot_on_edu')}}   
                                </a>
                            @break
                            @default
                        @endswitch
                            <a href="{{get_url('training')}}" class="nav-footer__item" data-ga-track-id="nav_main_footer_webinars" data-di-id="di-id-5bee3efa-289cdb1c">
                              {{__('foot_mob_traning')}}  
                            </a>
                        </div>
                    </div>
                    <div class="row containere justify-content-center border-none" id="myUL">

                        <button class="btn btn-link w-100 text-dark p-0" data-toggle="collapse" data-target="#collapse5" aria-expanded="true" aria-controls="collapse5">
                            <h3 class="nav-footer__header">
                              {{__('b_Services')}}  
                            </h3>
                        </button>
                    </div>
                    <div id="collapse5" class="collapse" data-parent="#accordion">
                        <div class="card-body text-center">
                            <a href="{{get_url('')}}" class="nav-footer__item" data-ga-track-id="nav_main_footer_academy" data-di-id="di-id-b2e98f66-f08c3e78">
                              {{__('h_benefit_h5')}}  
                            </a>
                            <a href="{{get_url('family')}}" class="nav-footer__item" data-ga-track-id="nav_main_footer_academy" data-di-id="di-id-b2e98f66-f08c3e78">
                              {{__('foot_fam_pks')}}  
                            </a>
                           @switch( getCurrentLangIdiom())
                            @case('ar')
                             <a href="https://stickyposts.net/phpanalyzer/product2/index.php" class="nav-footer__item" data-ga-track-id="nav_main_footer__resources" data-di-id="di-id-5bee3efa-d2c2de69">
                              {{__('foot_inf')}}  
                            </a>
                            @break
                            @case('en')
                               <a href="https://stickyposts.net/phpanalyzer/product3/index.php" class="nav-footer__item" data-ga-track-id="nav_main_footer__resources" data-di-id="di-id-5bee3efa-d2c2de69">
                                  {{__('foot_inf')}}  
                                </a>
                            @break
                            @case('fr')
                              <a href="https://stickyposts.net/phpanalyzer/product4/index.php" class="nav-footer__item" data-ga-track-id="nav_main_footer__resources" data-di-id="di-id-5bee3efa-d2c2de69">
                                 {{__('foot_inf')}}  
                             </a>  
                            @break
                            @default
                        @endswitch
                            <a href="{{get_url('auto_activity')}}" class="nav-footer__item" data-ga-track-id="nav_main_footer_blog" data-di-id="di-id-40fb46e8-6d6bc656">
                             {{__('b_AutoActivity')}}
                            </a>
                            <a href="{{get_url('stickyposts_affiliate')}}" class="nav-footer__item" data-ga-track-id="nav_main_footer_blog" data-di-id="di-id-40fb46e8-6d6bc656">
                              {{__('foot_aff')}} 
                            </a>
                        </div>
                    </div>
                    <div class="row containere justify-content-center border-none" id="myUL">
                        <button class="btn btn-link w-100 text-dark p-0" data-toggle="collapse" data-target="#collapse6" aria-expanded="true" aria-controls="collapse6">

                            <h3 class="nav-footer__header">
                               {{__('b_Support')}} 
                            </h3>
                        </button>
                    </div>
                    <div id="collapse6" class="collapse" data-parent="#accordion">
                        <div class="card-body text-center">
                            <a href="{{get_url('contact_us')}}" class="nav-footer__item" data-ga-track-id="nav_main_footer_contactus" data-di-id="di-id-25040ea2-47f2d13f">
                             {{__('b_Contact')}} 
                            </a>
                        @switch( getCurrentLangIdiom())
                            @case('ar')
                             <a href="https://stickyposts.net/support-ticket/" class="nav-footer__item" data-ga-track-id="nav_main_footer_help" data-di-id="di-id-40fb46e8-1f34ef">
                                  {{__('foot_faq')}}  
                             </a>
                            @break
                            @case('en')
                               <a href="https://stickyposts.net/support-ticket1/" class="nav-footer__item" data-ga-track-id="nav_main_footer_help" data-di-id="di-id-40fb46e8-1f34ef">
                                  {{__('foot_faq')}}  
                                </a>
                            @break
                            @case('fr')
                              <a href="https://stickyposts.net/support-ticket2/" class="nav-footer__item" data-ga-track-id="nav_main_footer_help" data-di-id="di-id-40fb46e8-1f34ef">
                                  {{__('foot_faq')}}  
                             </a>  
                            @break
                            @default
                        @endswitch
                            <a href="{{get_url('careers')}}" class="nav-footer__item" data-ga-track-id="nav_main_footer_careers" data-di-id="di-id-25040ea2-276a335a">
                               {{__('foot_car')}} 
                            </a>
                            <a href="{{get_url('developers')}}" class="nav-footer__item" data-ga-track-id="nav_main_footer_leadership" data-di-id="di-id-25040ea2-5a7e2749">
                              {{__('foot_dev')}}  
                            </a>
                        </div>
                    </div>

                    <button class="btn btn-link w-100 text-dark p-0" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                        <h3 class="nav-footer__header"> {{__('DownloadNow')}} </h3>
                    </button>
                    <div class="card-body m-auto">
                        <div class="site-footer__bottom__download">

                            <div class="site-footer__bottom__download">

                                <a href="https://apps.apple.com/eg/app/stickyposts/id1481454304">
                                    <img src="https://stickyposts.net/sticky/images/APPSTORE.png" width="46%">
                                </a>
                                <a href="https://play.google.com/store/apps/details?id=com.stickyapp.myappcompany">
                                    <img src="https://stickyposts.net/sticky/images/Google play.png" class="" width="25%">
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 widget-inner text-center">

                                <a href="https://www.facebook.com/stickypoststool" class="facebook tipped"
                                   data-title="facebook" data-tipper-options='{"direction":"top","follow":"true"}'>
                                    <i class="fab fa-facebook"></i>
                                </a>
                                <a href="https://www.instagram.com/stickypostsmea" class="instagram tipped"
                                   data-title="instagram" data-tipper-options='{"direction":"top","follow":"true"}'>
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="https://twitter.com/StickypostsMEA" class="twitter tipped" data-title="twitter"
                                   data-tipper-options='{"direction":"top","follow":"true"}'>
                                    <i class="fab fa-twitter"></i></a>

                                <a href="https://www.pinterest.com/stickypostsmea" class="pinterest tipped" data-title="pinterest"
                                   data-tipper-options='{"direction":"top","follow":"true"}'>
                                    <i class="fab fa-pinterest"></i></a>
                                <a href="https://www.youtube.com/channel/UCU2cHOoahBCDzPHoYGcDdQA?view_as=subscriber" class="youtube tipped"
                                   data-title="youtube" data-tipper-options='{"direction":"top","follow":"true"}'>
                                    <i class="fab fa-youtube"></i></a>
                                <a href="https://www.linkedin.com/company/stickypostsmea" class="linkedin tipped"
                                   data-title="linkedin" data-tipper-options='{"direction":"top","follow":"true"}'>
                                    <i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </footer>
</div>

   

<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
    }
</script>
<!--<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>-->
