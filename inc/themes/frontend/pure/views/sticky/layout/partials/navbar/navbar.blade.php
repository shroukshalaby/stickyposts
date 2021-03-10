<header class="site-header header-one home-page-two">
    <nav class="navbar navbar-expand-lg navbar-light header-navigation heder stricky p-2 stricky-fixed slideInDown animated">
        <div class="container clearfix">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="logo-box clearfix row">
                <a class="navbar-brand" href="{{get_url('')}}">
                    <img src="https://stickyposts.net/sticky/images/logo-1-2.png" alt="Awesome Image"/>
                </a>
                <button class="menu-toggler" id="nav-btn" data-target="#main-nav-bar">
                    <i class="fas fa-bars"></i>
                </button>
                <button class="menu-toggler close-btn" id="close-nav-btn" style="display:none">
                    <i class="fas fa-bars"></i>
                </button>
            </div><!-- /.logo-box -->
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="main-navigation" id="main-nav-bar">
                <ul class="one-page-scroll-menu navigation-box text-start" dir="ltr">

                    <li class=" current scrollToLink"><a href="{{get_url('#banner')}}">{{__('b_home')}}</a></li>
                    <li class="scrollToLink"><a href="{{get_url('#feature')}}">{{__('b_Features')}} </a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           {{__('b_Services')}} 
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @switch( getCurrentLangIdiom())
                            @case('ar')
                             <a href="https://stickyposts.net/phpanalyzer/product2/index.php" class="dropdown-item">
                              {{__('foot_inf')}}  
                            </a>
                            @break
                            @case('en')
                               <a href="https://stickyposts.net/phpanalyzer/product3/index.php" class="dropdown-item">
                                  {{__('foot_inf')}}  
                                </a>
                            @break
                            @case('fr')
                              <a href="https://stickyposts.net/phpanalyzer/product4/index.php" class="dropdown-item">
                                 {{__('foot_inf')}}  
                             </a>  
                            @break
                            @default
                        @endswitch
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{get_url('auto_activity')}}">
                             {{__('b_AutoActivity')}}   </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{get_url('family')}}">
                            {{__('b_FamilyService')}}    </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{get_url('posts_generator')}}"> 
                            {{__('b_PostsGenerator')}}     </a>
                        </div>
                    </li>
                    <li class="scrollToLink  d-lg-block d-none"><a href="{{get_url('/#pricing')}}">{{__('b_Prices')}}</a></li>
                    <li class="scrollToLink d-block d-lg-none "><a href="{{get_url('pricing')}}">{{__('b_Prices')}}</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           {{__('b_Resources')}} 
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{get_url('reports')}}">{{__('b_Reports')}}</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{get_url('templates') }}">{{__('b_Templates')}}</a>
                            <div class="dropdown-divider"></div>
                             @switch( getCurrentLangIdiom())
                            @case('ar')
                             <a href="https://stickyposts.net/blog/stickypost/" class="dropdown-item">
                              {{__('b_Blog')}}
                             </a>
                            @break
                            @case('en')
                             <a href="https://stickyposts.net/blog/stickypost-en/" class="dropdown-item">
                              {{__('b_Blog')}}
                             </a>
                            @break
                            @case('fr')
                             <a href="https://stickyposts.net/blog/stickypost-fr/" class="dropdown-item">
                              {{__('b_Blog')}}
                             </a>
                            @break
                            @default
                        @endswitch
                        </div>
                    </li>
                       @switch( getCurrentLangIdiom())
                            @case('ar')
                             <li class="scrollToLink"> <a href="https://stickyposts.net/support-ticket/">
                                  {{__('b_Support')}}  
                             </a>
                             </li>
                            @break
                            @case('en')
                             <li class="scrollToLink">   <a href="https://stickyposts.net/support-ticket1/">
                                  {{__('b_Support')}}  
                                </a>
                            </li>    
                            @break
                            @case('fr')
                            <li class="scrollToLink">   <a href="https://stickyposts.net/support-ticket2/">
                                  {{__('b_Support')}}  
                             </a>  
                            </li> 
                            @break
                            @default
                        @endswitch
                        
                    <li class="scrollToLink"><a href="{{get_url('contact_us')}}">{{__('b_Contact')}} </a> </li>
                    <li class="nav-item dropdown">
                        <a  class="nav-link dropdown-toggle header-btn mx-2" href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-user-circle"></i>
                            {{__('b_LoginRegister')}}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                            <a class="dropdown-item" href="{{get_url('login')}}">

                                <i class="fa fa-sign-in-alt"></i>
                                {{__('login')}}</a>
                            <div class="dropdown-divider">

                            </div>

                            <a class="dropdown-item" href="{{get_url('register')}}">
                                <i class="fa fa-user-plus"></i>
                                {{__('register')}}</a>
                        </div>
                    </li>




                    @if (getCurrentLangIdiom(''))
                        
                    @endif
                    <a href='lang/ar'><img src="https://stickyposts.net/sticky/ara.png" width="25px" class='mx-1'></a>
                    <a href='lang/fr'><img src="https://stickyposts.net/sticky/fre.png" width="25px" class='mx-1'></a>
                    <a href='lang/en'><img src="https://stickyposts.net/sticky/eng.png" width="25px" class='mx-1'></a>

                </ul>
            </div><!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
</header><!-- /.site-header -->


