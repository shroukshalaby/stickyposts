<style>
    .header-btn{
        border-radius:3px;
    }
    .slick-track{
        transform: translate3d(0px, 0px, 0px)!important;
    }
</style>
    
<section class="banner-style-one home-page-two" id="banner" style=" padding: 100px 0px 45px; background: linear-gradient(90deg, #e09d0d , #d707f3 50% ,#2B1480  , #462180 100% );position:relative">
        <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7 col-md-8 col-12 text-center">
                        <!--<img src="images/logo-1-2.png" alt="Awesome Image" width="" style=""/>-->
                        <div class="content-block hide-mobile">
                            
                            <h4 style="color:#fff;margin:0">{{__('bn_design')}}</h4>
                            <h3 style="font-size: 1.3rem !important;">{{__('bn_auto_h1')}}</h3>
                            <h3 style="font-size: 1.25rem !important;">{{__('bn_auto_h2')}}<span>
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
                                </span>
                                {{__('monthly')}}
                            </h3>
                            <div class="subform mb-4">
                              <form id="signup" class="formee signuptrial d-flex justify-content-center" style="{{  getCurrentLangIdiom() == 'ar' ? 'direction:ltr'  : '' }}" method="post">
                               <input class="right inputnew" style='border-radius: 5px 0px 0px 5px;' type="submit" title="Send" value="{{__('StartTrial')}}" />
                               <input type="hidden" value="reply english" name="type">
                               <input name="email" id="email"  style='border-radius: 0px 5px 5px 0px;' type="email" placeholder="{{__('EnterEmail')}}" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required />
                             </form>
                            </div>
                            <div class="form-note">
                              <p style="color:#fff;margin:0 0 3px">{{__('freeTrialtext')}}</p>
                              <p style="color:#fff;line-height: 1;">{{__('Cancellation_anytime')}}</p>
                            </div>
                        </div><!-- /.content-block -->
                        
                        <div class="content-block view-mobile text-start">
                            <h3 style="font-size: 2.4rem !important; font-weight:900 ;margin:0">{{__('bn_auto_h1')}}</h3>
                            <h4 style="color:#fff;margin:0;font-size: 1.5rem;font-weight:500">{{__('gen-Design')}}</h4>
                            <h3 style="font-size: 1.55rem !important;margin:0;font-weight:500"> {{__('startingFrom')}} <span style="font-weight:bold">
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
                                </span>
                                {{__('monthly')}}
                            </h3>
                            <div class="subform my-2">
                               <a class="submit"href="{{get_url('register')}}" style="{{  getCurrentLangIdiom() == 'ar' ? 'padding: 0px 15px;'  : 'padding: 5px 15px;' }} font-size: 1.5rem ;border-radius:5px"> {{__('StartTrial')}}</a>
                               
                            </div>
                            <div style="margin-top: .6rem;font-size: .9rem; font-weight: 700">
                                <a href="{{get_url('pricing')}}" id="compar" style="color:#fff; text-decoration: underline;"> {{__('PackageComparison')}}</a>
                            </div>
                            <div class="form-note">
                              <p style="color:#fff;margin:0 0 3px;font-size: 1rem ">{{__('NoCredit')}}</p>
                              <p style="color:#fff;line-height: 1;margin:0 0 3px;font-size: 1rem ">{{__('Cancellation_anytime')}}</p>
                            </div>
                        </div>
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
            
</section>
        <!-- Client Section -->
      <div class="client-section">
        <div class="container text-center">
            <div class="clients">
             <div class="single">
                <img src="{{get_theme_frontend_url('assets/sticky/images/client4.png')}}" class='none' alt="Client" />
                <img src="{{get_theme_frontend_url('assets/sticky/images/client4-c.png')}}" class="color" alt="Client" />
              </div>
              <div class="single">
                <img src="{{get_theme_frontend_url('assets/sticky/images/client2.png')}}" class='none' alt="Client" />
                <img src="{{get_theme_frontend_url('assets/sticky/images/client2-c.png')}}" class="color" alt="Client" />
              </div>
            </div>
          </div>
        </div>
