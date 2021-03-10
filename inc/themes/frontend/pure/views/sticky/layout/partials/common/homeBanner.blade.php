<style>
    @media (max-width: 567px){
        .fs-15-r{
            font-size: 1.4rem;
        }
        .m-b-3{
            margin-bottom: -3rem;
        }
        .mr-0{
            margin-left: 0;
        }

    }
</style>
<section class="banner-style-one home-page-two" id="banner" style="position:relative">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-8 col-12 text-center hide-mobile">
                <div class="content-block">
                    <h4 class="m-0 text-white">{{__('bn_design')}} </h4>
                    <h3 class="h3-fs17">{{__('bn_manage')}} </h3>
                    <h3 class="h3-fs15 mb-2">{{__('bn_oneplace')}}
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
                        {{__('monthly')}} </h3>
                    <div class="subform mb-2">
                        <form id="signup" class="formee signuptrial d-flex justify-content-center dir-rtl mt-4" method="post">
                            <input class="right inputnew b-rad-5 " type="submit" title="Send" value="{{__('StartTrial')}}"/>
                            <input type="hidden" value="homePage" name="type">
                            <input name="email" id="email" class="b-rad-55 " type="email" placeholder="{{__('EnterEmail')}}" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required/>
                        </form>
                    </div>
                    <div class="form-note">
                        <p class="text-white mb-0">{{__('freeTrialtext')}}</p>
                        <p class="text-white">{{__('Cancellation_anytime')}}</p>
                    </div>
                </div><!-- /.content-block -->
            </div><!-- /.col-lg-6 -->

            <div class="col-lg-7 col-md-8 col-12 text-start view-mobile m-b-3">
                <div class="content-block">

                    <h3 class=" mb-3 m-0 fs-24 fs-french-24 fw-900"> {{__('bn_manage')}} </h3>
                    <h4 class=" mb-3 h3-fs15 m-0 text-white"> {{__('bn_design')}}</h4>
                    <h3 class=" mb-3 h3-fs15 m-0">{{__('startingFrom')}}  <span class="font-weight-bold">
                         @switch($ipData['geoplugin_countryName'])
                                @case ('Egypt')
                                99 L.E
                                @break;
                                @case ('United Arab Emirates')
                                23 AED
                                @break;
                                @case ('Kuwait')
                                2 Dinar
                                @break;
                                @case ('Bahrain')
                                3 Dinar
                                @break;
                                @case ('Saudi Arabia')
                                24 Riyal
                                @break;
                                @case ('Yemen')
                                1502 Rial
                                @break;
                                @default
                                6$
                            @endswitch

                        </span> {{__('monthly')}}</h3>
                    <div class="subform my-2 mb-3 text-start">
                        <a class="submit fs-15-r p5_15" href="{{get_url('register')}}"  style="{{  getCurrentLangIdiom() == 'ar' ? 'padding: 0px 15px;'  : 'padding: 15px;font-size: 18px;' }}">  {{__('StartTrial')}} </a>
                    </div>
                    <div class="mt-6r fs-9r fw-700">
                        <a href="{{get_url('pricing')}}" id="compar"  style="color:#fff; text-decoration: underline;">  {{__('PackageComparison')}} </a>
                    </div>
                    <div class="form-note">
                        <p class="text-white fs-16 mb-2 mx-0 "> {{__('NoCredit')}}</p>
                        <p class="text-white lh-1 fs-16 mb-2 mx-0 ">{{__('Cancellation_anytime')}}</p>
                    </div>
                </div><!-- /.content-block -->
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->

</section><!-- /.banner-style-one -->
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
