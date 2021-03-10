
<?php $__env->startPush('head'); ?>
    <link rel="stylesheet" href="css/style_english.css">
    <link rel="stylesheet" href="css/mobile-style.css">
    <style>
.bottom-block p {
    font-size: 18px!important;
}
.site-header.header-one {
    padding: 0!important;
}
.single-pricing-one {
    width: 100%;
    height: auto;
}
.site-header.header-one .header-navigation{
   background:linear-gradient(-145deg,#9c33c3,#320b82);
}
.card-text{
    font-weight: 600;
    font-size: 23px;
}
.custom-control-label {
    color: #333!important;
    font-size: 18px!important;
}
.w-40{
    width: 55px;
    margin: 0;
    padding-left: 5px; 
        margin-right: 1px;
}
.single-pricing-one ul.feature-lists {
    direction: ltr;
    height: 220px;
}
.price{
    color:#4262ff;
}
.white-text{
    color:#fff;
}
.fs-15{
    font-size:15px;
}
.fs-14{
    font-size:14px;
}
.fs-13{
    font-size:13px;
    color:#000;
}
.bg-orange{
    background:none;
}
.package {
    background:#e9ecef;
}

.package-second-card{
    margin: 10px;
    border-radius: 3px;
    height: 200px;
    padding:20px 0px!important;
}
.bg-blue{
    background:linear-gradient(90deg,#42b0ff,#4262ff);
    border-radius:5px;
}
.p-4xa{
    padding:0 4px;
}
    .form-controlEdit{
    height: 24px;
    padding: 0;
    font-size: 12px;
    }
    .modal h5{
        font-size:0.8rem;
    }
    @media (min-width: 992px)
    {
    .tab-content  .col-lg-2 {
    -ms-flex: 0 0 18.666667%;
    flex: 0 0 18.66666%;
    max-width: 20.666667%;
}
}
@media(max-width:567px){
    .fs-20{
        font-size:20px;
    }
.nav .nav-item .nav-link {
    width: 105px;
    font-size: 20px;
    text-align: center;
    margin: 0 5px;
}
.single-pricing-one ul.feature-lists li {
    font-size: 19px;
}
.single-pricing-one {
    width: 100% !important;
    height: 635px !important;
}
.site-header.header-one{
    padding:0!important;
}

.single-pricing-one ul.feature-lists {
    height: 405px !important;
}

.site-header.header-one{
    padding:0!important;
}

}

</style>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('page-wrapper'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
    <div class="page-wrapper">
     <?php echo $__env->make('sticky.layout.partials.common.homeBanner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <section class="pricing-style-one home-page-two remove-bg" id="pricing" style="background:linear-gradient(90deg, #320b82 0%, #9c33c3 100%)!important;padding:20px 0 20px;    margin-top: 85px;">
        <div class="container-fluid">
                <div class="block-title text-center text-light ">
                    <h4 style="color:#fff" class='fs-20'><?php echo e(__('pay-ChoosePlan')); ?></h4>
                </div><!-- /.block-title -->
                <ul class="nav nav-tabs tab-title m-0 " role="tablist">
                    <li class="nav-item">
                        <a class="nav-link" href="#annual" role="tab" data-toggle="tab"><?php echo e(__('pay-Yearly')); ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#monthly" role="tab" data-toggle="tab"><?php echo e(__('fam-Monthly')); ?> </a>
                    </li>
                </ul>
                <div class="tab-content ">
                    <div role="tabpanel" class="tab-pane fade in show active" id="monthly">
                        <div class="col-lg-11 mx-auto">
                                <div class="row m-auto p-0 justify-content-center">
                                    <div class="col-lg-2 p-1 col-md-4 mt-sm-2 col-sm-6 col-12">
                                        
                                <div class="single-pricing-one">
                                    <div class="top-block" style="direction: ltr;">
                                        <h2><?php echo e(__('pay-Economical')); ?> </h2>
                                         <p class="price m-0" style="direction: rtl;"><?php if ($location == 'Egypt' ){echo '99 EGP';}
                                         elseif ($location == 'United Arab Emirates'){echo '24 Dirham';} 
                                         elseif ($location == 'Saudi Arabia'){echo '24 Riyal';} 
                                         else {echo '6$';} ?></P>

                                        <div class="line"></div><!-- /.line -->
                                    </div><!-- /.top-block -->
                                    <ul class="feature-lists text-left">
                                        <li><span style="color:#f00">*</span><?php echo e(__('pay-weManage')); ?> <span style="font-weight:bold;font-size:16px"><?php echo e(__('pay-seven')); ?></span></li>
                                        <li><span style="color:#f00">*</span><?php echo e(__('pay-UnlimitedMembers')); ?></li>
                                        <li><span style="color:#f00">*</span><?php echo e(__('fam-Posts Generator')); ?></li>
                                        <li><span style="color:#f00">*</span><?php echo e(__('pay-megabyteStorage')); ?></li>
                                        <li><span style="color:#f00">*</span><?php echo e(__('fam-Copyright protection')); ?></li>
                                        <li><span style="color:#f00">*</span><?php echo e(__('fam-Reports')); ?></li>
                                        <li><span style="color:#f00">*</span><?php echo e(__('fam-Auto Activities')); ?> <span style="padding:5px;color:#f00"><?php echo e(__('fam-extra')); ?> </span></li>
                                    </ul><!-- /.feature-lists text-left -->
                                    <div class="bottom-block">
                                        <a href="learn-moreen.php"><?php echo e(__('fam-learnMore')); ?></a>
                                        <a href="https://stickyposts.net/stickypost_register/register-en.php?language=2" class="price-btn" style="cursor: pointer;"><?php echo e(__('fam-Buy Now')); ?></a>
                                        <h5 class="tag-line text-center"><?php echo e(__('fam-No Extra')); ?></h5>
                             <p><?php echo e(__('pay-threeDaysFree')); ?></p>
                                    </div><!-- /.bottom-block -->
                                </div><!-- /.single-pricing-one -->
                                    </div> 
                                    <div class="col-lg-2 p-1 col-md-4 mt-sm-2 col-sm-6 col-12">
                                    <div class="single-pricing-one pro-pack">
                                    <div class="top-block" style="direction: ltr;">
                                        <h2><?php echo e(__('pay-Special')); ?> </h2>
                     <p class="price m-0" style="direction: rtl;"><?php if ($location == 'Egypt' ){echo '195 EGP';}
                     elseif ($location == 'United Arab Emirates'){echo '46 Dirham';}
                      elseif ($location == 'Saudi Arabia'){echo '47 Riyal';}
                     else {echo '13$';} ?></P>

                                        <div class="line"></div><!-- /.line -->
                                    </div><!-- /.top-block -->
                                    <ul class="feature-lists text-left">
                                        <li><span style="color:#f00">*</span><?php echo e(__('pay-weManage')); ?> <span style="font-weight:bold;font-size:16px"><?php echo e(__('pay-fourteen')); ?></span></li>
                                        <li><span style="color:#f00">*</span><?php echo e(__('fam-Unlimited team members')); ?></li>
                                        <li><span style="color:#f00">*</span><?php echo e(__('fam-Posts Generator')); ?></li>
                                        <li><span style="color:#f00">*</span><?php echo e(__('pay-megabyteStorage')); ?> </li>
                                        <li><span style="color:#f00">*</span><?php echo e(__('fam-Copyright protection')); ?> </li>
                                        <li><span style="color:#f00">*</span><?php echo e(__('fam-Reports')); ?></li>
                                        <li><span style="color:#f00">*</span><?php echo e(__('fam-Auto Activities')); ?> <span style="padding:5px;color:#f00"><?php echo e(__('fam-extra')); ?> </span></li>
                                        <li><span style="color:#f00">*</span><?php echo e(__('pay-multipleAccounts')); ?>  <span style="padding:5px;color:#f00"><?php echo e(__('fam-extra')); ?> </span></li>
                                    </ul><!-- /.feature-lists text-left -->
                                    <div class="bottom-block">
                                        <a href="learn-moreen.php"><?php echo e(__('fam-learnMore')); ?></a>
                                        <a href="https://stickyposts.net/stickypost_register/register-en.php?language=2" class="price-btn" style="cursor: pointer;"><?php echo e(__('fam-Buy Now')); ?></a>
                                        <h5 class="tag-line text-center"><?php echo e(__('fam-No Extra')); ?></h5>
                                        <p><?php echo e(__('pay-threeDaysFree')); ?></p>
                                    </div><!-- /.bottom-block -->
                                </div><!-- /.single-pricing-one -->
                                    </div> 
                                    <div class="col-lg-2 p-1 col-md-4 mt-sm-2 col-sm-6 col-12">
                                        
                                <div class="single-pricing-one">
                                    <div class="top-block" style="direction: ltr;">
                                        <h2><?php echo e(__('pay-Professional')); ?> </h2>
                        <p class="price m-0" style="direction: rtl;"><?php if ($location == 'Egypt' ){echo '495 EGP';}
                        elseif ($location == 'United Arab Emirates'){echo '115 Dirham';}
                        elseif ($location == 'Saudi Arabia'){echo '31 Riyal';}
                        else {echo '19$';} ?></P>

                                        <div class="line"></div><!-- /.line -->
                                    </div><!-- /.top-block -->
                                    <ul class="feature-lists text-left">
                                        <li><span style="color:#f00">*</span><?php echo e(__('fam-You can manage')); ?><span style="font-weight:bold;font-size:16px"> <?php echo e(__('pay-ThirtyFive')); ?> </span><?php echo e(__('fam-pages only')); ?></li>
                                            <li><span style="color:#f00">*</span><?php echo e(__('fam-Unlimited team members')); ?></li>
                                            <li><span style="color:#f00">*</span><?php echo e(__('pay-DesignPosts')); ?> </li>
                                            <li><span style="color:#f00">*</span><?php echo e(__('fam-Up to 50 Megabyte available storage')); ?></li>
                                            <li><span style="color:#f00">*</span><?php echo e(__('fam-Copyright protection')); ?></li>
                                            <li><span style="color:#f00">*</span><?php echo e(__('fam-Reports')); ?></li>
                                            <li><span style="color:#f00">*</span><?php echo e(__('fam-Auto Activities')); ?> </li>
                                            <li><span style="color:#f00">*</span><?php echo e(__('pay-additionalPrivileges')); ?> </li>
                                            <li><span style="color:#f00">*</span><?php echo e(__('pay-completelyFree')); ?> </li>
                                            <li><span style="color:#f00">*</span><?php echo e(__('pay-DoneTasks')); ?> </li>
                                            <li><span style="color:#f00">*</span><?php echo e(__('pay-LandingPages')); ?></li>
                                  
                                    </ul><!-- /.feature-lists text-left -->
                                    <div class="bottom-block">
                                        <a href="https://stickyposts.net/sticky/landing_page_new_en.php"><?php echo e(__('fam-learnMore')); ?></a>
                                        <a href="https://stickyposts.net/stickypost_register/register-en.php?language=2" class="price-btn" style="cursor: pointer;"><?php echo e(__('fam-Buy Now')); ?></a>
                                        <h5 class="tag-line text-center"><?php echo e(__('fam-No Extra')); ?></h5>
                                        <p><?php echo e(__('pay-threeDaysFree')); ?></p>
                                    </div><!-- /.bottom-block -->
                                </div><!-- /.single-pricing-one -->
                                    </div> 
                                    <div class="col-lg-2 p-1 col-md-4 mt-sm-2 col-sm-6 col-12">
                               
                                <div class="single-pricing-one">
                                    <div class="top-block" style="direction: ltr;">
                                        <h2 style=""><?php echo e(__('pay-SuperProfessional')); ?></h2>
            <p class="price m-0" style="direction: rtl;"><?php if ($location == 'Egypt' ){echo '750 EGP';}
            elseif ($location == 'United Arab Emirates'){echo '174 Dirham';}
            elseif ($location == 'Saudi Arabia'){echo '119 Riyal';}
            else {echo '47$';} ?></P>
 
                                        <div class="line"></div><!-- /.line -->
                                    </div><!-- /.top-block -->
                                    <ul class="feature-lists text-left">
                                      
                                            <li><span style="color:#f00">*</span><?php echo e(__('fam-You can manage')); ?> <span style="font-weight:bold;font-size:16px"> <?php echo e(__('pay-seventy')); ?> </span> <?php echo e(__('fam-pages only')); ?></li>
                                            <li><span style="color:#f00">*</span><?php echo e(__('fam-Unlimited team members')); ?></li>
                                            <li><span style="color:#f00">*</span><?php echo e(__('pay-DesignPosts')); ?></li>
                                            <li><span style="color:#f00">*</span><?php echo e(__('fam-Up to 50 Megabyte available storage')); ?></li>
                                            <li><span style="color:#f00">*</span><?php echo e(__('fam-Copyright protection')); ?></li>
                                            <li><span style="color:#f00">*</span><?php echo e(__('fam-Reports')); ?></li>
                                            <li><span style="color:#f00">*</span><?php echo e(__('fam-Auto Activities')); ?> </li>
                                            <li><span style="color:#f00">*</span><?php echo e(__('fam-Competitors')); ?> </li>
                                            <li><span style="color:#f00">*</span><?php echo e(__('pay-additionalPrivileges')); ?></li>
                                            <li><span style="color:#f00">*</span><?php echo e(__('pay-getFreeLaptop')); ?></li>
                                            <li><span style="color:#f00">*</span><?php echo e(__('pay-internetPackages')); ?></li>
                                            <li><span style="color:#f00">*</span><?php echo e(__('pay-DoneTasks')); ?></li>
                                            <li><span style="color:#f00">*</span><?php echo e(__('pay-LandingPages')); ?></li>
                                  
                                    </ul><!-- /.feature-lists text-left -->
                                    <div class="bottom-block">
                                        <a href="https://stickyposts.net/sticky/landing_page_new_en.php"><?php echo e(__('fam-learnMore')); ?></a>
                                        <a href="https://stickyposts.net/stickypost_register/register-en.php?language=2" class="price-btn" style="cursor: pointer;"><?php echo e(__('fam-Buy Now')); ?></a>
                                        <h5 class="tag-line text-center" style="color:#310150;background: #eee;padding: 6px;margin: 0;"><?php echo e(__('fam-No Extra')); ?></h5>
                                        <p><?php echo e(__('pay-threeDaysFree')); ?></p>     

                                    </div><!-- /.bottom-block -->
                                </div><!-- /.single-pricing-one -->
                                    </div>
                                    <div class="col-lg-2 p-1 col-md-4 mt-sm-2 col-sm-6 col-12">
                                      <div class="single-pricing-one m-auto" style="width:100%; height: 100%;background: linear-gradient(180deg , #3AB4E7 , #223976 );color: #fff;">
                                         <div class="top-block">
                                        <h2><?php echo e(__('pay-Enterprise')); ?></h2>
                                        <p style="margin:0;font-size: 22px;"> <?php echo e(__('pay-specialServices')); ?> </p>
                                        <div class="line"></div><!-- /.line -->
                                    </div><!-- /.top-block -->
                                    
                                    <div class="">
                                        <h6 style=""> <?php echo e(__('pay-specialSolution')); ?> </h6> 
    
                                    </div>
                                    <div class="bottom-blocks" style="position: absolute;">
                                        <a href="https://stickyposts.net/sticky/contact-sel.php" class="price-btn" style="cursor: pointer;margin-bottom: 2.8rem;"><?php echo e(__('fam-Buy Now')); ?></a> 
                                            
                                        <p style="color: #f00;font-weight: bold;margin:0 auto;padding:0 5px;border-top: 2px solid #999;width: 100%;margin-top: 0;margin-bottom: 0;background:#fff;font-size:18px"><?php echo e(__('pay-threeDaysFree')); ?></p>                                    </div>
                                </div><!-- /.single-pricing-one -->
                            </div>
                                </div>
                          </div>  

                    </div><!-- /.tab-pane -->
                    <div role="tabpanel" class="tab-pane fade" id="annual">
                        <div class="col-lg-11 mx-auto" style="">
                            <div class='row m-auto p-0 justify-content-center'>
                                    
                                    <div class="col-lg-2 p-1 col-md-4 col-sm-6 col-12 mt-sm-2">
                                     <div class="single-pricing-one">
                                      <div class="top-block" style="direction: ltr;">
                                         <h2><?php echo e(__('pay-Economical')); ?></h2>
                                         <p class="price m-0" style="direction: rtl;"><?php if ($location == 'Egypt' ){echo '1045 EGP';}
                                         elseif ($location == 'United Arab Emirates'){echo '244 Dirham';} 
                                         elseif ($location == 'Saudi Arabia'){echo '251 Riyal';}
                                         else {echo '67$';} ?></P>

                                        <div class="line"></div><!-- /.line -->
                                    </div><!-- /.top-block -->
                                      <ul class="feature-lists text-left">
                                        <li><span style="color:#f00">*</span><?php echo e(__('fam-You can manage')); ?> <span style="font-weight:bold;font-size:16px"><?php echo e(__('fam-seven')); ?></span></li>
                                        <li><span style="color:#f00">*</span><?php echo e(__('fam-Unlimited team members')); ?></li>
                                        <li><span style="color:#f00">*</span><?php echo e(__('fam-Posts Generator')); ?></li>
                                        <li><span style="color:#f00">*</span><?php echo e(__('fam-Up to 50 Megabyte available storage')); ?></li>
                                        <li><span style="color:#f00">*</span><?php echo e(__('fam-Copyright protection')); ?></li>
                                        <li><span style="color:#f00">*</span><?php echo e(__('fam-Reports')); ?></li>
                                        <li><span style="color:#f00">*</span><?php echo e(__('fam-Auto Activities')); ?> <span style="padding:5px;color:#f00"><?php echo e(__('fam-extra')); ?> </span></li>
                                    </ul><!-- /.feature-lists text-left -->
                                      <div class="bottom-block">
                                          <a href="learn-moreen.php"><?php echo e(__('fam-learnMore')); ?></a>
                                          <a href="https://stickyposts.net/stickypost_register/register-en.php?language=2" class="price-btn" style="cursor: pointer;"><?php echo e(__('fam-Buy Now')); ?></a>
                                          <h5 class="tag-line text-center"><?php echo e(__('fam-No Extra')); ?></h5>
                                          <p><?php echo e(__('pay-threeDaysFree')); ?></p>
                                    </div><!-- /.bottom-block -->
                                     </div><!-- /.single-pricing-one -->
                                       <div class="card package w-100 mt-3">
                                        <div class="card-body bg-white text-dark package-second-card">
                                                <h3 class="card-text px-2 mb-3 text-center">
                                                    <?php echo e(__('pay-installmentPlan')); ?>

                                                </h3>
                                            </div>
                                        </div>  
                                    </div> 
                                    <div class="col-lg-2 p-1 col-md-4 col-sm-6 col-12 mt-sm-2">
                                    <div class="single-pricing-one pro-pack">
                                    <div class="top-block" style="direction: ltr;">
                                        <h2><?php echo e(__('pay-Special')); ?> </h2>
                <p class="price m-0" style="direction: rtl;"><?php if ($location == 'Egypt' ){echo '2090 EGP';}
                elseif ($location == 'United Arab Emirates'){echo '488 Dirham';}
                elseif ($location == 'Saudi Arabia'){echo '502 Riyal';}
                else {echo '133$';} ?></P>

                                        <div class="line"></div><!-- /.line -->
                                    </div><!-- /.top-block -->
                                    <ul class="feature-lists text-left">
                                        <li><span style="color:#f00">*</span><?php echo e(__('fam-You can manage')); ?> <span style="font-weight:bold;font-size:16px"><?php echo e(__('fam-fourteen')); ?></span></li>
                                        <li><span style="color:#f00">*</span><?php echo e(__('fam-Unlimited team members')); ?></li>
                                        <li><span style="color:#f00">*</span><?php echo e(__('fam-Posts Generator')); ?></li>
                                        <li><span style="color:#f00">*</span><?php echo e(__('fam-Up to 50 Megabyte available storage')); ?> </li>
                                        <li><span style="color:#f00">*</span><?php echo e(__('fam-Copyright protection')); ?>  </li>
                                        <li><span style="color:#f00">*</span><?php echo e(__('fam-Reports')); ?></li>
                                        <li><span style="color:#f00">*</span><?php echo e(__('fam-Auto Activities')); ?><span style="padding:5px;color:#f00"><?php echo e(__('fam-extra')); ?> </span></li>
                                        <li><span style="color:#f00">*</span><?php echo e(__('fam-multipleAccounts')); ?>  <span style="padding:5px;color:#f00"><?php echo e(__('fam-extra')); ?> </span></li>
                                    </ul><!-- /.feature-lists text-left -->
                                    <div class="bottom-block">
                                        <a href="learn-moreen.php"><?php echo e(__('fam-learnMore')); ?></a>
                                        <a href="https://stickyposts.net/stickypost_register/register-en.php?language=2" class="price-btn" style="cursor: pointer;"><?php echo e(__('fam-Buy Now')); ?></a>
                                        <h5 class="tag-line text-center"><?php echo e(__('fam-No Extra')); ?></h5>
                                        <p><?php echo e(__('pay-threeDaysFree')); ?></p>
                                    </div><!-- /.bottom-block -->
                                </div><!-- /.single-pricing-one -->
                                    <div class="card package w-100 mt-3">
                                        <div class="card-body bg-white text-dark package-second-card">
                                                <h3 class="card-text px-2 mb-3 text-center">
                                                <?php echo e(__('pay-installmentPlan')); ?>

                                                </h3>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="col-lg-2 p-1 col-md-4 col-sm-6 col-12 mt-sm-2">
                                        
                                <div class="single-pricing-one">
                                    <div class="top-block" style="direction: ltr;">
                                        <h2><?php echo e(__('pay-Professional')); ?> </h2>
                <p class="price m-0" style="direction: rtl;"><?php if ($location == 'Egypt' ){echo '4999 EGP';}
                elseif ($location == 'United Arab Emirates'){echo '1157 Dirham';}
                elseif ($location == 'Saudi Arabia'){echo '753 Riyal';}
                else {echo '315$';} ?></P>
 
                                        <div class="line"></div><!-- /.line -->
                                    </div><!-- /.top-block -->
                                    <ul class="feature-lists text-left">
                                        <li><span style="color:#f00">*</span><?php echo e(__('fam-You can manage')); ?> <span style="font-weight:bold;font-size:16px"><?php echo e(__('pay-ThirtyFive')); ?> </span><?php echo e(__('fam-pages only')); ?></li>
                                            <li><span style="color:#f00">*</span><?php echo e(__('fam-Unlimited team members')); ?></li>
                                            <li><span style="color:#f00">*</span><?php echo e(__('pay-DesignPosts')); ?> </li>
                                            <li><span style="color:#f00">*</span><?php echo e(__('fam-Up to 50 Megabyte available storage')); ?></li>
                                            <li><span style="color:#f00">*</span><?php echo e(__('fam-Copyright protection')); ?></li>
                                            <li><span style="color:#f00">*</span><?php echo e(__('fam-Reports')); ?></li>
                                            <li><span style="color:#f00">*</span><?php echo e(__('fam-Auto Activities')); ?> </li>
                                            <li><span style="color:#f00">*</span><?php echo e(__('pay-additionalPrivileges')); ?></li>
                                            <li><span style="color:#f00">*</span><?php echo e(__('pay-completelyFree')); ?> </li>
                                            <li><span style="color:#f00">*</span><?php echo e(__('pay-DoneTasks')); ?> </li>
                                            <li><span style="color:#f00">*</span><?php echo e(__('pay-LandingPages')); ?></li>
                                  
                                    </ul><!-- /.feature-lists text-left -->
                                    <div class="bottom-block">
                                        <a href="https://stickyposts.net/sticky/landing_page_new_en.php"><?php echo e(__('fam-learnMore')); ?></a>
                                        <a href="https://stickyposts.net/stickypost_register/register-en.php?language=2" class="price-btn" style="cursor: pointer;"><?php echo e(__('fam-Buy Now')); ?></a>
                                        <h5 class="tag-line text-center"><?php echo e(__('fam-No Extra')); ?></h5>
                                        <p><?php echo e(__('pay-threeDaysFree')); ?></p>
                                    </div><!-- /.bottom-block -->
                                </div><!-- /.single-pricing-one -->
                                    <div class="card package w-100 mt-3">
                                    <div class="card-body bg-white text-dark package-second-card">
                                        <h5 class="card-text mb-3 text-center">
                                         <span>   <?php echo e(__('pay-InstallBy')); ?> </span>
                                         <input type="number" id="downpayment" placeholder="4999" class="provider-input" name="downpayment" value="1000" autocomplete="false" style="border: 0.5px solid rgb(225, 225, 225);width:33%;font-size:14px;">
                                         <span>L.E</span>
                                        </h5>
                                        
                                        <div class="custom-control custom-radio text-center w-100">
                                            <input type="radio" id="profRadio1" name="customRadio" class="custom-control-input">
                                            <label class="custom-control-label fs-14" for="profRadio1">
                                                <span class="price">
                                                    2250
                                                </span>
                                                <?php echo e(__('pay-pounds')); ?>

                                                /
                                                <span class="price">
                                                    3
                                                </span>
                                                <?php echo e(__('pay-months')); ?>

                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio text-center w-100">
                            <input type="radio" id="profRadio2" name="customRadio" class="custom-control-input">
                            <label class="custom-control-label fs-14" for="profRadio2">
                                <span class="price">
                                    2450
                                </span>
                                <?php echo e(__('pay-pounds')); ?>

                                /
                                <span class="price">
                                    6
                                </span>
                                <?php echo e(__('pay-months')); ?>

                            </label>
                        </div>
                        
                                        <div class="custom-control custom-radio text-center w-100">
                                            <input type="radio" id="profRadio1" name="customRadio" class="custom-control-input">
                                            <label class="custom-control-label fs-14" for="profRadio1">
                                                <span class="price">
                                                    1250
                                                </span>
                                                <?php echo e(__('pay-pounds')); ?>

                                                /
                                                <span class="price">
                                                    12
                                                </span>
                                                <?php echo e(__('pay-months')); ?>

                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio text-center w-100">
                                                <input type="radio" id="profRadio2" name="customRadio" class="custom-control-input">
                                                <label class="custom-control-label fs-14" for="profRadio2">
                                                    <span class="price">
                                                        1000
                                                    </span>
                                                <?php echo e(__('pay-pounds')); ?>

                                                    /
                                                    <span class="price">
                                                        18
                                                    </span>
                                                <?php echo e(__('pay-months')); ?>

                                                </label>
                                            </div>
                                            
                                    </div>
                                    <div class="card-footer px-0 bg-blue border-0 p-0">
                                        <a class="text-white font-weight-bold d-block mx-3 p-2 text-center"
                                        href="https://stickyposts.net/stickypost_register/register-en.php?language=2">
                                        <?php echo e(__('pay-installNow')); ?>

                                        </a>
                                    </div>
                                </div>   
                                    </div> 
                                    <div class="col-lg-2 p-1 col-md-4 col-sm-6 col-12 mt-sm-2">
                                    <div class="single-pricing-one">
                                    <div class="top-block" style="direction: ltr;">
                                        <h2 style=""><?php echo e(__('pay-SuperProfessional')); ?></h2>
                 <p class="price m-0" style="direction: rtl;"><?php if ($location == 'Egypt' ){echo '6999 EGP';}
                 elseif ($location == 'United Arab Emirates'){echo '1829 Dirham';} 
                 elseif ($location == 'Saudi Arabia'){echo '1200 Riyal';}
                 else {echo '498$';} ?></P>
                                        <div class="line"></div><!-- /.line -->
                                    </div><!-- /.top-block -->
                                    <ul class="feature-lists text-left">
                                        
                                            <li><span style="color:#f00">*</span><?php echo e(__('fam-You can manage')); ?> <span style="font-weight:bold;font-size:16px"><?php echo e(__('pay-seventy')); ?> 70 </span> <?php echo e(__('fam-pages only')); ?></li>
                                            <li><span style="color:#f00">*</span><?php echo e(__('fam-Unlimited team members')); ?></li>
                                            <li><span style="color:#f00">*</span><?php echo e(__('pay-DesignPosts')); ?></li>
                                            <li><span style="color:#f00">*</span><?php echo e(__('fam-Up to 50 Megabyte available storage')); ?></li>
                                            <li><span style="color:#f00">*</span><?php echo e(__('fam-Copyright protection')); ?></li>
                                            <li><span style="color:#f00">*</span><?php echo e(__('fam-Reports')); ?></li>
                                            <li><span style="color:#f00">*</span><?php echo e(__('fam-Auto Activities')); ?> </li>
                                            <li><span style="color:#f00">*</span><?php echo e(__('fam-Competitors')); ?> </li>
                                            <li><span style="color:#f00">*</span><?php echo e(__('pay-additionalPrivileges')); ?></li>
                                            <li><span style="color:#f00">*</span><?php echo e(__('pay-completelyFree')); ?></li>
                                            <li><span style="color:#f00">*</span><?php echo e(__('pay-internetPackages')); ?> </li>
                                            <li><span style="color:#f00">*</span><?php echo e(__('pay-DoneTasks')); ?>  </li>
                                            <li><span style="color:#f00">*</span><?php echo e(__('pay-LandingPages')); ?></li>
                                    </ul><!-- /.feature-lists text-left -->
                                    <div class="bottom-block">
                                        <a href="https://stickyposts.net/sticky/landing_page_new_en.php">Learn more</a>
                                        <a href="https://stickyposts.net/stickypost_register/register-en.php?language=2" class="price-btn" style="cursor: pointer;"><?php echo e(__('fam-Buy Now')); ?></a>
                                        <h5 class="tag-line text-center" style="color:#310150;background: #eee;padding: 6px;margin: 0;"><?php echo e(__('fam-No Extra')); ?></h5>
                                        <p><?php echo e(__('pay-threeDaysFree')); ?></p>           
                                    </div>
                                    </div><!-- /.bottom-block -->
                                    <!-- /.single-pricing-one -->
                                        <div class="card package w-100 mt-3">
                                    <div class="card-body bg-white text-dark package-second-card">
                                        <h5 class="card-text mb-3 text-center">
                                         <span>  <?php echo e(__('pay-InstallBy')); ?> </span>
                                         <input type="number" id="downpayment" placeholder="4999" class="provider-input" name="downpayment" value="1000" autocomplete="false" style="border: 0.5px solid rgb(225, 225, 225);width:33%;font-size:14px;">
                                         <span>L.E</span>
                                        </h5>
                                        
                                        <div class="custom-control custom-radio text-center w-100">
                                            <input type="radio" id="profRadio1" name="customRadio" class="custom-control-input">
                                            <label class="custom-control-label fs-14" for="profRadio1">
                                                <span class="price">
                                                    2250
                                                </span>
                                                <?php echo e(__('pay-pounds')); ?> 
                                                /
                                                <span class="price">
                                                    3
                                                </span>
                                                months<?php echo e(__('pay-months')); ?> 
                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio text-center w-100">
                            <input type="radio" id="profRadio2" name="customRadio" class="custom-control-input">
                            <label class="custom-control-label fs-14" for="profRadio2">
                                <span class="price">
                                    2450
                                </span>
                                <?php echo e(__('pay-pounds')); ?> 
                                /
                                <span class="price">
                                    6
                                </span>
                                <?php echo e(__('pay-months')); ?> 
                            </label>
                        </div>
                        
                                        <div class="custom-control custom-radio text-center w-100">
                                            <input type="radio" id="profRadio1" name="customRadio" class="custom-control-input">
                                            <label class="custom-control-label fs-14" for="profRadio1">
                                                <span class="price">
                                                    1250
                                                </span>
                                                <?php echo e(__('pay-pounds')); ?> 
                                                /
                                                <span class="price">
                                                    12
                                                </span>
                                                <?php echo e(__('pay-months')); ?> 
                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio text-center w-100">
                                                <input type="radio" id="profRadio2" name="customRadio" class="custom-control-input">
                                                <label class="custom-control-label fs-14" for="profRadio2">
                                                    <span class="price">
                                                        1000
                                                    </span>
                                                <?php echo e(__('pay-pounds')); ?> 
                                                    /
                                                    <span class="price">
                                                        18
                                                    </span>
                                                <?php echo e(__('pay-months')); ?> 
                                                </label>
                                            </div>
                                            
                                    </div>
                                    <div class="card-footer px-0 bg-blue border-0 p-0">
                                        <a class="text-white font-weight-bold d-block mx-3 p-2 text-center"
                                        href="https://stickyposts.net/stickypost_register/register-en.php?language=2">
                                        <?php echo e(__('pay-installNow')); ?>

                                        </a>
                                    </div>
                                </div>   
                                    </div>
                                    <div class="col-lg-2 p-1 col-md-4 col-sm-6 col-12 mt-sm-2">
                                      <div class="single-pricing-one m-auto" style="width:100%;height: 61.2%;background: linear-gradient(180deg , #3AB4E7 , #223976 );color: #fff;">
                                    <div class="top-block">
                                        <h2>Enterprise</h2>
                                        <p style="margin:0;font-size: 22px;"><?php echo e(__('pay-specialServices')); ?> </p>
                                        <div class="line"></div><!-- /.line -->
                                    </div><!-- /.top-block -->
                                    
                                    <div class="">
                                        <h6 style=""><?php echo e(__('pay-specialSolution')); ?></h6> 
    
                                    </div>
                                    <div class="bottom-blocks" style="position: absolute;">
                                        <a href="https://stickyposts.net/sticky/contact-sel.php" class="price-btn" style="cursor: pointer;margin-bottom: 2.8rem;"><?php echo e(__('fam-Buy Now')); ?></a> 
                                            
                                        <p style="color: #f00;font-weight: bold;margin:0 auto;padding:0 5px;border-top: 2px solid #999;width: 100%;margin-top: 0;margin-bottom: 0;background:#fff;font-size:18px"><?php echo e(__('pay-threeDaysFree')); ?></p>                                    </div>
                                </div><!-- /.single-pricing-one -->
                                       <div class="card package w-100 mt-3">
                                         <div class="card-body bg-white text-dark package-second-card">
                                                <h3 class="card-text px-2 mb-3 text-center">
                                                <?php echo e(__('pay-installmentPlan')); ?>

                                                </h3>
                                            </div>
                                        </div>
                            </div>
                                </div>
                          
                      </div><!-- /.row -->
                    </div><!-- /.tab-pane -->
                </div><!-- /.tab-content -->
                </div>
        <div class="modal fade bd-example-modal-lg" id="myModals"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="background: rgba(0, 0, 0, 0.7); padding-top: 60px;">
  <div class="modal-dialog miniDialog" role="document">
    <div class="modal-content" style="background: linear-gradient(275deg, #5e2298, #320b82);color:#fff">
      <div class="modal-header pl-0 p-1">
      <img src="logo-s.png" style="width: 49px;z-index: 10;">
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position: absolute;top: 12px;right: 20px;">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div id="modal-bodyres" class="text-center" style="margin: 10px 0;">
            <h3 style=' color:#fff' class='text-center'> <?php echo e(__('temp-h3')); ?>  <span style="color:#f9c412; font-weight:bold" ><?php echo e(__('temp-h3Free')); ?> </span></h3>
            <div class="row my-row m-0 px-2">
              <div class="col-sm-7">
                  <div class="page-links nav nav-pills mb-4" id="pills-tab" role="tablist">
                            <a id="pills-home2-tab" data-toggle="pill" href="#pills-home2" role="tab" aria-controls="pills-home2" aria-selected="true" class="ml-auto mr-3 model-tabs active"><?php echo e(__('temp-login')); ?></a>
                            
                            <a id="pills-profile2-tab" data-toggle="pill" href="#pills-profile2" role="tab" aria-controls="pills-profile2" aria-selected="false" class='mr-3 model-tabs ' ><?php echo e(__('temp-register')); ?></a>
                        </div>
                <div class="tab-content" id="pills-tabContent">
             <div class="tab-pane fade show active" id="pills-home2" role="tabpanel" aria-labelledby="pills-home2-tab">
             <form style="direction:ltr" class="form-company" method= "post" >
                 
                 <input type="hidden" name="lang" value="en">
                <input type="hidden" name="page" value="<?php echo $page4599;?>">
                
                <div class="form-group row mb-1 ml-auto" style="align-items: center;" >
                    <label class="col-4 p-0" style="margin: 0;font-size: 12px;">  <span style="color:red">*</span><?php echo e(__('temp-email')); ?></label>
                    <div class="col-8">
                        <input type="email" class="form-control" name="mail"  style="height: 24px;" required>
                    </div>
                </div>
                <div class="form-group row mb-1 ml-auto" style="align-items: center;" >
                    <label class="col-4 p-0" style="margin: 0;font-size: 12px;">  <span style="color:red">*</span><?php echo e(__('temp-password')); ?></label>
                    <div class="col-8">
                        <input type="password" class="form-control" name="pass"  style="height: 24px;" required>
                    </div>
                </div>
                <div class="form-group row mb-1 mx-0" style="align-items:center;justify-content:center">
                    <div class="col-12 px-4">
                        <a href="https://stickyposts.net/sticky/forget.php?lang=en" style="color: #fff;text-decoration: underline;"><?php echo e(__('temp-forgetPassword')); ?></a>
                    </div>
                </div>
               <div class="form-group mb-0  row  mt-3 text-center" style='display: flex;justify-content: center;align-items: center; flex-direction: column;'>
                    <button class="submit mb-0 ml-0" type="submit" name="login" style='height: 35px;border-radius: 5px; font-size: 1.5rem;font-weight: 600;background: #f9c412 !important;color: #320b82;' name="login" id="sub"><?php echo e(__('temp-getItNow')); ?> </button>
                </div>
                </form>
             </div>
             <div class="tab-pane fade" id="pills-profile2" role="tabpanel" aria-labelledby="pills-profile2-tab">
              <form style="direction:ltr" class="form-company" method= "post" >
                  <input type="hidden" name="lang" value="en">
                <div class="form-group row mb-1  ml-auto" >
                    <label class="col-4 p-0" style="margin: 0;font-size:12px">  <span style="color:red">*</span><?php echo e(__('temp-firstName')); ?></label>
                    <div class="col-8">
                        <input type="text" class="form-control" name="fn7" required style="height: 24px;">
                    </div>
                        
                </div>
                <div class="form-group row mb-1  ml-auto" style="align-items: center;" >
                    <label class="col-4 p-0" style="margin: 0;font-size:12px">  <span style="color:red">*</span><?php echo e(__('temp-lastName')); ?></label>
                    <div class="col-8">
                        <input type="text" class="form-control" name="ln7" required style="height: 24px;">
                    </div>
                        
                </div>
                <div class="form-group row mb-1 ml-auto" style="align-items: center;" >
                    <label class="col-4 p-0" style="margin: 0;font-size: 12px;">  <span style="color:red">*</span><?php echo e(__('temp-email')); ?></label>
                    <div class="col-8">
                        <input type="email" class="form-control" name="em7"  style="height: 24px;" required>
                    </div>
                </div>
                  <div class="form-group row mb-1 ml-auto" style="align-items: center;" >
                    <label class="col-4 p-0" style="margin: 0;font-size: 12px;">  <span style="color:red">*</span><?php echo e(__('temp-password')); ?> </label>
                    <div class="col-8">
                        <input type="password" class="form-control" name="pass"  style="height: 24px;" required>
                    </div>
                </div>
                   <div class="form-group row mb-1 ml-auto" style="align-items: center;" >
                    <label class="col-4 p-0" style="margin: 0;font-size: 10px;">  <span style="color:red">*</span>  <?php echo e(__('temp-ConfirmPass')); ?> </label>
                    <div class="col-8">
                        <input type="password" class="form-control" name="Cpass"  style="height: 24px;" required>
                    </div>
                </div>
                <div class="form-group row mb-1 mx-0">
                <div class="col-4 p-0" >  
                <label style="margin: 0;font-size: 12px;" for=""><span style="color:red">*</span> <?php echo e(__('repo-Country')); ?></label>
                </div>
                <div class="col-8 p-0" >
                <select class="form-control" name="country" required>
                    <?php echo $__env->make('sticky.layout.partials.helpers.countries', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </select>
                </div>
            </div>
               <div class="form-group mb-0  row  mt-3 text-center" style='display: flex;justify-content: center;align-items: center; flex-direction: column;'>
                    <button class="submit mb-0 ml-0" type="submit" name="signin" style='height: 35px;border-radius: 5px; font-size: 1.5rem;font-weight: 600;background: #f9c412 !important;color: #320b82;' name="submit" id="sub"> <?php echo e(__('temp-getItNow')); ?> </button>
                </div>
                </form>
                
                </div> 
                </div>
               </div>
               <div class="col-sm-5 pl-0 text-center" style="display: flex;justify-content: center;align-items: center;">
                       <img src="images/rescopopup.png" style="width: 192px">
                       
               </div>
            </div>
        <div style="display:flex;justify-content: space-between;" >
            <small class='text-left' style="font-size:10px ;margin-left:15px"><?php echo e(__('repo-informationSafe')); ?></small>
            <small class='text-right' style="font-size:10px ;margin-right:15px"><span style="color:#f00">*</span><?php echo e(__('repo-All fields')); ?> </small>
        </div>
      </div>
    </div>
  </div>
</div>
    </section><!-- /.pricing-style-one -->
    </div><!-- /.page-wrapper -->
    
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
  <?php echo $__env->make('sticky.layout.partials.popups', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopPush(); ?>
        
<?php echo $__env->make('sticky.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Laravel-Projects\StickyPost2\inc\themes\frontend\pure\views/sticky/mobile/payment.blade.php ENDPATH**/ ?>