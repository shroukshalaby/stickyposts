<header class="site-header header-one home-page-two">
    <nav class="navbar navbar-expand-lg navbar-light header-navigation heder stricky p-2 stricky-fixed slideInDown animated">
        <div class="container clearfix">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="logo-box clearfix row">
                <a class="navbar-brand" href="<?php echo e(get_url('')); ?>">
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

                    <li class=" current scrollToLink"><a href="<?php echo e(get_url('#banner')); ?>"><?php echo e(__('b_home')); ?></a></li>
                    <li class="scrollToLink"><a href="<?php echo e(get_url('#feature')); ?>"><?php echo e(__('b_Features')); ?> </a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <?php echo e(__('b_Services')); ?> 
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <?php switch( getCurrentLangIdiom()):
                            case ('ar'): ?>
                             <a href="https://stickyposts.net/phpanalyzer/product2/index.php" class="dropdown-item">
                              <?php echo e(__('foot_inf')); ?>  
                            </a>
                            <?php break; ?>
                            <?php case ('en'): ?>
                               <a href="https://stickyposts.net/phpanalyzer/product3/index.php" class="dropdown-item">
                                  <?php echo e(__('foot_inf')); ?>  
                                </a>
                            <?php break; ?>
                            <?php case ('fr'): ?>
                              <a href="https://stickyposts.net/phpanalyzer/product4/index.php" class="dropdown-item">
                                 <?php echo e(__('foot_inf')); ?>  
                             </a>  
                            <?php break; ?>
                            <?php default: ?>
                        <?php endswitch; ?>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?php echo e(get_url('auto_activity')); ?>">
                             <?php echo e(__('b_AutoActivity')); ?>   </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?php echo e(get_url('family')); ?>">
                            <?php echo e(__('b_FamilyService')); ?>    </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?php echo e(get_url('posts_generator')); ?>"> 
                            <?php echo e(__('b_PostsGenerator')); ?>     </a>
                        </div>
                    </li>
                    <li class="scrollToLink  d-lg-block d-none"><a href="<?php echo e(get_url('/#pricing')); ?>"><?php echo e(__('b_Prices')); ?></a></li>
                    <li class="scrollToLink d-block d-lg-none "><a href="<?php echo e(get_url('pricing')); ?>"><?php echo e(__('b_Prices')); ?></a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <?php echo e(__('b_Resources')); ?> 
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?php echo e(get_url('reports')); ?>"><?php echo e(__('b_Reports')); ?></a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?php echo e(get_url('templates')); ?>"><?php echo e(__('b_Templates')); ?></a>
                            <div class="dropdown-divider"></div>
                             <?php switch( getCurrentLangIdiom()):
                            case ('ar'): ?>
                             <a href="https://stickyposts.net/blog/stickypost/" class="dropdown-item">
                              <?php echo e(__('b_Blog')); ?>

                             </a>
                            <?php break; ?>
                            <?php case ('en'): ?>
                             <a href="https://stickyposts.net/blog/stickypost-en/" class="dropdown-item">
                              <?php echo e(__('b_Blog')); ?>

                             </a>
                            <?php break; ?>
                            <?php case ('fr'): ?>
                             <a href="https://stickyposts.net/blog/stickypost-fr/" class="dropdown-item">
                              <?php echo e(__('b_Blog')); ?>

                             </a>
                            <?php break; ?>
                            <?php default: ?>
                        <?php endswitch; ?>
                        </div>
                    </li>
                       <?php switch( getCurrentLangIdiom()):
                            case ('ar'): ?>
                             <li class="scrollToLink"> <a href="https://stickyposts.net/support-ticket/">
                                  <?php echo e(__('b_Support')); ?>  
                             </a>
                             </li>
                            <?php break; ?>
                            <?php case ('en'): ?>
                             <li class="scrollToLink">   <a href="https://stickyposts.net/support-ticket1/">
                                  <?php echo e(__('b_Support')); ?>  
                                </a>
                            </li>    
                            <?php break; ?>
                            <?php case ('fr'): ?>
                            <li class="scrollToLink">   <a href="https://stickyposts.net/support-ticket2/">
                                  <?php echo e(__('b_Support')); ?>  
                             </a>  
                            </li> 
                            <?php break; ?>
                            <?php default: ?>
                        <?php endswitch; ?>
                        
                    <li class="scrollToLink"><a href="<?php echo e(get_url('contact_us')); ?>"><?php echo e(__('b_Contact')); ?> </a> </li>
                    <li class="nav-item dropdown">
                        <a  class="nav-link dropdown-toggle header-btn mx-2" href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-user-circle"></i>
                            <?php echo e(__('b_LoginRegister')); ?>

                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                            <a class="dropdown-item" href="<?php echo e(get_url('login')); ?>">

                                <i class="fa fa-sign-in-alt"></i>
                                <?php echo e(__('login')); ?></a>
                            <div class="dropdown-divider">

                            </div>

                            <a class="dropdown-item" href="<?php echo e(get_url('register')); ?>">
                                <i class="fa fa-user-plus"></i>
                                <?php echo e(__('register')); ?></a>
                        </div>
                    </li>




                    <?php if(getCurrentLangIdiom('')): ?>
                        
                    <?php endif; ?>
                    <a href='lang/ar'><img src="https://stickyposts.net/sticky/ara.png" width="25px" class='mx-1'></a>
                    <a href='lang/fr'><img src="https://stickyposts.net/sticky/fre.png" width="25px" class='mx-1'></a>
                    <a href='lang/en'><img src="https://stickyposts.net/sticky/eng.png" width="25px" class='mx-1'></a>

                </ul>
            </div><!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
</header><!-- /.site-header -->


<?php /**PATH F:\Laravel-Projects\StickyPost2\inc\themes\frontend\pure\views/sticky/layout/partials/navbar/navbar.blade.php ENDPATH**/ ?>