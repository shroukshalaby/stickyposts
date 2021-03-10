
<?php $__env->startPush('head'); ?>
<link rel="stylesheet" href="<?php echo e(get_theme_frontend_url('assets/sticky/css/replay_en.css')); ?>">
    <style>
        .paddingleftAndFontSize {
            font-size: 14px;
            padding: 0 6px;
        }
        .single-pricing-one ul.feature-lists{
            height:auto!important;
        }
        .itemParagraph{
            margin: 0;
            padding: 0 3px;
            font-size: 1.5rem;
            font-weight:700;
        }
        .itemCaption{
            font-size: 1.2rem;
            line-height: 1.5;
        }
        .colorsAndFonts{
            color:#320b82;
            font-size:2.5rem;
        }
        .darkColor{
            color:#320b82;
        }
        .newTransform {
            transform: rotate(180deg);
            background:linear-gradient(270deg, #320b82 0%, #9c33c3 100%)!important;
            padding:25px 0 20px;
        }
        .justTransform {
            transform: rotate(180deg);
        }
        .fontSize16{
            font-size:16px
        }
        .padding5{
            padding: 5px;
        }
        .cursorPointerr{
            cursor: pointer;
        }
        @media(max-width:567px){
            .section-2 .item{
                height:auto!important;
            }
        }
    </style>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('page-wrapper'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
    <?php echo $__env->make('sticky.layout.partials.common.autoActivityBanner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="page-wrapper <?php echo e(getCurrentLangIdiom() == 'ar' ? 'text-right'  : ''); ?>">
        <div class="section-2 p-0 mt-2 text-start" id="benefits">
            <div class="block-title text-center">
                <h2> <?php echo e(__('rep-adv')); ?> </h2>
            </div><!-- /.block-title -->
            <div class="container">
                <div class="row index-row box_shadow mt-2 hide-mobile <?php echo e(getCurrentLangIdiom() == 'ar' ? ' text-right'  : ''); ?> ">
                    <div class="col-md-3 col-sm-4 mb-2">
                        <div class="row">
                            <div class="col-3 p-0">
                                <img src="<?php echo e(get_theme_frontend_url('assets/sticky/images/autoactivity/multiple accounts.png')); ?>" class="img-fluid">
                            </div>
                            <div class="col-9 p-0 m-auto">
                                <div class="more paddingleftAndFontSize"> <?php echo e(__('rep-manage')); ?> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 mb-2">
                        <div class="row">
                            <div class="col-3 p-0"><img src="https://stickyposts.net/sticky/images/autoactivity/track automatically.png" class="img-fluid"></div>
                            <div class="col-9 p-0 m-auto"><div class="more paddingleftAndFontSize"> <?php echo e(__('rep-auto')); ?> </div></div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 mb-2">
                        <div class="row">
                            <div class="col-3 p-0"><img src="<?php echo e(get_theme_frontend_url('assets/sticky/images/autoactivity/react Account.png')); ?>" class="img-fluid"></div>
                            <div class="col-9 p-0 m-auto"><div class="more paddingleftAndFontSize"> <?php echo e(__('rep-ability')); ?> </div></div>
                        </div>

                    </div>
                    <div class="col-md-3 col-sm-4 mb-2">
                        <div class="row">
                            <div class="col-3 p-0"><img src="<?php echo e(get_theme_frontend_url('assets/sticky/images/autoactivity/Desired accounts interact.png')); ?>" class="img-fluid"></div>
                            <div class="col-9 p-0 m-auto"><div class="more paddingleftAndFontSize"> <?php echo e(__('rep-select')); ?> </div></div>
                        </div>

                    </div>
                    <div class="col-md-3 col-sm-4 mb-2">
                        <div class="row">
                            <div class="col-3 p-0"><img src="<?php echo e(get_theme_frontend_url('assets/sticky/images/autoactivity/follow you.png')); ?>" class="img-fluid"></div>
                            <div class="col-9 p-0 m-auto"><div class="more paddingleftAndFontSize"> <?php echo e(__('rep-select-acc')); ?> </div></div>
                        </div>

                    </div>
                    <div class="col-md-3 col-sm-4 mb-2">
                        <div class="row">
                            <div class="col-3 p-0"><img src="<?php echo e(get_theme_frontend_url('assets/sticky/images/autoactivity/react Account.png')); ?>" class="img-fluid"></div>
                            <div class="col-9 p-0 m-auto"><div class="more paddingleftAndFontSize"> <?php echo e(__('rep-identify')); ?> </div></div>
                        </div>

                    </div>
                    <div class="col-md-3 col-sm-4 mb-2">
                        <div class="row">
                            <div class="col-3 p-0"><img src="<?php echo e(get_theme_frontend_url('assets/sticky/images/autoactivity/comment on your photos.png')); ?>" class="img-fluid"></div>
                            <div class="col-9 p-0 m-auto"><div class="more paddingleftAndFontSize"> <?php echo e(__('rep-identify-act')); ?> </div></div>
                        </div>

                    </div>
                    <div class="col-md-3 col-sm-4 mb-2">
                        <div class="row">
                            <div class="col-3 p-0"> <img src="<?php echo e(get_theme_frontend_url('assets/sticky/images/autoactivity/100 reactions.png')); ?>" class="img-fluid"></div>
                            <div class="col-9 p-0 m-auto"><div class="more paddingleftAndFontSize"> <?php echo e(__('rep-swift')); ?> </div></div>
                        </div>

                    </div>
                    <div class="col-md-3 col-sm-4 mb-2">
                        <div class="row">
                            <div class="col-3 p-0"><img src="<?php echo e(get_theme_frontend_url('assets/sticky/images/autoactivity/Filter.png')); ?>" class="img-fluid"></div>
                            <div class="col-9 p-0 m-auto"><div class="more paddingleftAndFontSize"> <?php echo e(__('rep-filter')); ?> </div></div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 mb-2">
                        <div class="row">
                            <div class="col-3 p-0"><img src="<?php echo e(get_theme_frontend_url('assets/sticky/images/autoactivity/Blocking.png')); ?>" class="img-fluid"></div>
                            <div class="col-9 p-0 m-auto"><div class="more paddingleftAndFontSize"> <?php echo e(__('rep-possibility')); ?> </div></div>
                        </div>

                    </div>
                    <div class="col-md-3 col-sm-4 mb-2">
                        <div class="row">
                            <div class="col-3 p-0"><img src="<?php echo e(get_theme_frontend_url('assets/sticky/images/autoactivity/On-Off.png')); ?>" class="img-fluid"></div>
                            <div class="col-9 p-0 m-auto"><div class="more paddingleftAndFontSize"> <?php echo e(__('rep-auto-act')); ?> </div></div>
                        </div>

                    </div>
                    <div class="col-md-3 col-sm-4 mb-2">
                        <div class="row">
                            <div class="col-3 p-0"><img src="<?php echo e(get_theme_frontend_url('assets/sticky/images/autoactivity/features.png')); ?>" class="img-fluid"></div>
                            <div class="col-9 p-0 m-auto"><div class="more paddingleftAndFontSize"> <?php echo e(__('rep-more-30')); ?> </div></div>
                        </div>

                    </div>
                </div>
                <div class="view-mobile">
                    <div class="row w-75 mx-auto">
                        <div class=" col-12">
                            <div class="item" dir="ltr">
                                <img src="https://stickyposts.net/sticky/images/replay/increase-Clients.jpg" class="img-fluid">
                                <div class="about" >
                                    <p class="itemParagraph"> <?php echo e(__('rep-cust-base')); ?> </p>
                                    <div class="caption itemCaption"> <?php echo e(__('rep-designed')); ?> </div>
                                </div>
                            </div>
                        </div>
                        <div class=" col-12">
                            <div class="item" dir="ltr">

                                <img src="https://stickyposts.net/sticky/images/replay/reports.jpg" class="img-fluid">
                                <div class="about"  >
                                    <p class="itemParagraph"> <?php echo e(__('rep-detailed')); ?> </p>
                                    <div class="caption itemCaption">  <?php echo e(__('rep-enable')); ?> </div>
                                </div>


                            </div>
                        </div>
                        <div class=" col-12">
                            <div class="item" dir="ltr">
                                <img src="https://stickyposts.net/sticky/images/replay/Schadule.jpg" class="img-fluid">
                                <div class="about"  >
                                    <p class="itemParagraph"> <?php echo e(__('rep-auto-sch')); ?>  </p>
                                    <div class="caption itemCaption"> <?php echo e(__('rep-it-makes')); ?> </div>
                                </div>
                            </div>
                        </div>
                        <div class=" col-12">
                            <div class="item position-relative" dir="ltr" >

                                <img src="https://stickyposts.net/sticky/images/replay/Competitors.jpg" class="img-fluid">
                                <div class="about"  >
                                    <p class="itemParagraph"> <?php echo e(__('rep-team-mem')); ?> </p>
                                    <div class="caption itemCaption"> <?php echo e(__('rep-fast')); ?> </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container T-container mb-4">
            <div class="text-center">
                <h4 class="section-head hide-mobile mt-3 colorsAndFonts" > <?php echo e(__('rep-auto-ben')); ?> </h4>
                <h4 class="view-mobile mb-4 font-weight-bold darkColor" > <?php echo e(__('rep-report')); ?> </h4>
            </div>
            <div class="row " id="benefits">
                <div class="col-sm-6 col-md-5 col-lg-3 my-auto">
                    <?php echo $__env->make('sticky.layout.partials.common.pdfDownload', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
                <div class="col-sm-6 col-md-7 col-lg-9  hide-mobile">
                    <div id="features" class="section wb text-center">
                        <div class="container">
                            <div id="default" class="row clearfix zenith_slider p-0">

                                <!--The First row-->
                                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 pr-0 left-row">
                                    <ul class="features-left d-flex justify-content-center flex-column h-100">
                                        <li class="highlight lhgh" data-index="0">
                                            <img src="<?php echo e(get_theme_frontend_url('assets/sticky/mobileslider/Increase-Clients.png')); ?>">
                                            <div class="fl-inner">
                                                <h4> <?php echo e(__('rep-cust-base')); ?> </h4>
                                                <p> <?php echo e(__('rep-designed')); ?> </p>
                                            </div>
                                        </li><!-- .highlight .left-row -->

                                        <li class="highlight lhgh" data-index="1">
                                            <img src="<?php echo e(get_theme_frontend_url('assets/sticky/mobileslider/Reports.png')); ?>">
                                            <div class="fl-inner">
                                                <h4> <?php echo e(__('rep-detailed')); ?> </h4>
                                                <p> <?php echo e(__('rep-enable')); ?> </p>
                                            </div>
                                        </li><!-- .highlight .left-row -->

                                    </ul>
                                </div><!-- .row .left-row -->

                                <div class="highlights-phone col-lg-4 col-md-4 col-sm-12 col-xs-12 wht">

                                    <div class="phone-holder">
                                        <div id="fon"></div>
                                        <div class="hgh-linner hgi" data-index="0">
                                            <img width="190" height="320" src="<?php echo e(get_theme_frontend_url('assets/sticky/mobileslider/phone/increase-Clients.png')); ?>" class="attachment-highlight wp-post-image" alt="screen" />
                                        </div>
                                        <div class="hgh-linner hgi" data-index="1">
                                            <img width="234" height="398" src="<?php echo e(get_theme_frontend_url('assets/sticky/mobileslider/phone/reports.png')); ?>" class="attachment-highlight wp-post-image" alt="screensdst" />
                                        </div>
                                        <div class="hgh-rinner hgi" data-index="2">
                                            <img width="234" height="398" src="<?php echo e(get_theme_frontend_url('assets/sticky/mobileslider/phone/Scadule.png')); ?>" class="attachment-highlight wp-post-image" alt="screen_08" />
                                        </div>
                                        <div class="hgh-rinner hgi" data-index="3">
                                            <img width="234" height="398" src="<?php echo e(get_theme_frontend_url('assets/sticky/mobileslider/phone/Team.png')); ?>" class="attachment-highlight wp-post-image" alt="screen_06" />
                                        </div>
                                    </div>
                                </div>

                                <!--The Second row-->
                                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 pl-0 right-row T-p-0">
                                    <ul class="features-right d-flex justify-content-center flex-column h-100">
                                        <li class="highlight rhgh" data-index="2">
                                            <img src="<?php echo e(get_theme_frontend_url('assets/sticky/mobileslider/Schadule.png')); ?>">
                                            <div class="fr-inner">
                                                <h4> <?php echo e(__('rep-auto-sch')); ?> </h4>
                                                <p> <?php echo e(__('rep-it-makes')); ?> </p>
                                            </div>
                                        </li><!-- .highlight .left-row -->
                                        <li class="highlight rhgh" data-index="3">
                                            <img src="<?php echo e(get_theme_frontend_url('assets/sticky/mobileslider/Team.png')); ?>">
                                            <div class="fr-inner">
                                                <h4> <?php echo e(__('rep-team-mem')); ?> </h4>
                                                <p> <?php echo e(__('rep-fast')); ?> </p>
                                            </div>
                                        </li><!-- .highlight .left-row -->
                                    </ul>
                                </div><!-- .row .left-row -->

                            </div><!--Highlights close-->
                        </div><!-- end container -->
                    </div><!-- end section -->

                </div>
            </div>
        </div>
        <section class="pricing-style-one home-page-two remove-bg newTransform" id="pricing">
            <div class="container-fluid hide-mobile justTransform">
                <div class="block-title text-center text-light">
                    <h4 class="text-white"> <?php echo e(__('rep-choose')); ?> </h4>
                </div><!-- /.block-title -->
                <ul class="nav nav-tabs tab-title my-2" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link" href="#yearly" role="tab" data-toggle="tab"> <?php echo e(__('rep-year')); ?> </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#monthly" role="tab" data-toggle="tab"> <?php echo e(__('rep-month')); ?> </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane show active" id="monthly">
                        <div class="w-100">
                            <div class='row m-auto p-0 justify-content-center'>

                                <div class="col-sm-4 col-md-4 col-lg-2 p-1"  >

                                    <div class="single-pricing-one">
                                        <div class="top-block" dir="ltr">
                                            <h2> <?php echo e(__('rep-econ')); ?> </h2>
                                            <p class="price m-0" dir="rtl">
                                                <?php switch($ipData['geoplugin_countryName']):
                                                    case ('Egypt'): ?>
                                                    75 EGP
                                                    <?php break; ?>
                                                    <?php case ('United Arab Emirates'): ?>
                                                    19 Dirham
                                                    <?php break; ?>
                                                    <?php case ('Saudi Arabia'): ?>
                                                    18 Riyal
                                                    <?php break; ?>
                                                    <?php default: ?>
                                                    5$
                                                <?php endswitch; ?></P>

                                            <div class="line"></div><!-- /.line -->
                                        </div><!-- /.top-block -->
                                        <ul class="feature-lists text-start">
                                            <li><span class="text-danger">*</span> <?php echo e(__('rep-man-up')); ?> <span class="font-weight-bold fontSize16">7</span></li>
                                            <li><span class="text-danger">*</span> <?php echo e(__('rep-unlim')); ?> </li>
                                            <li><span class="text-danger">*</span> <?php echo e(__('rep-up-to-50')); ?> </li>
                                            <li><span class="text-danger">*</span> <?php echo e(__('rep-property')); ?> </li>
                                            <li><span class="text-danger">*</span> <?php echo e(__('rep-reports')); ?> </li>
                                            <li><span class="text-danger">*</span> <?php echo e(__('rep-auto-a')); ?> <span class="text-danger padding5"> <?php echo e(__('rep-extra')); ?> </span></li>
                                        </ul><!-- /.feature-lists text-start -->
                                        <div class="bottom-block bottom-blocks">
                                            <a href="<?php echo e(get_url('learn_more')); ?>"> <?php echo e(__('rep-learn')); ?> </a>
                                            <a href="<?php echo e(get_url('register')); ?>" class="price-btn cursorPointerr"> <?php echo e(__('rep-buy')); ?> </a>
                                            <h5 class="tag-line text-center"> <?php echo e(__('rep-no-fees')); ?> <br> <?php echo e(__('rep-cancel')); ?> </h5>
                                            <p> <?php echo e(__('rep-free-trial')); ?> </p>
                                        </div><!-- /.bottom-block -->
                                    </div><!-- /.single-pricing-one -->
                                </div>
                                <div class="col-sm-4 col-md-4 col-lg-2 p-1"  >
                                    <div class="single-pricing-one pro-pack">
                                        <div class="top-block" dir="ltr">
                                            <h2> <?php echo e(__('rep-special')); ?> </h2>
                                            <p class="price m-0" dir="rtl">
                                                <?php switch($ipData['geoplugin_countryName']):
                                                    case ('Egypt'): ?>
                                                    150 EGP
                                                    <?php break; ?>
                                                    <?php case ('United Arab Emirates'): ?>
                                                    35 Dirham
                                                    <?php break; ?>
                                                    <?php case ('Saudi Arabia'): ?>
                                                    36 Riyal
                                                    <?php break; ?>
                                                    <?php default: ?>
                                                    10$
                                                <?php endswitch; ?></P>

                                            <div class="line"></div><!-- /.line -->
                                        </div><!-- /.top-block -->
                                        <ul class="feature-lists text-start">
                                            <li><span class="text-danger">*</span> <?php echo e(__('rep-man-up')); ?> <span class="font-weight-bold fontSize16">14</span></li>
                                            <li><span class="text-danger">*</span> <?php echo e(__('rep-unlim')); ?> </li>
                                            <li><span class="text-danger">*</span> <?php echo e(__('rep-up-to-50')); ?> </li>
                                            <li><span class="text-danger">*</span> <?php echo e(__('rep-property')); ?> </li>
                                            <li><span class="text-danger">*</span> <?php echo e(__('rep-reports')); ?> </li>
                                            <li><span class="text-danger">*</span> <?php echo e(__('rep-auto-a')); ?> <span class="text-danger padding5"> <?php echo e(__('rep-extra')); ?> </span></li>
                                            <li><span class="text-danger">*</span> <?php echo e(__('rep-adding-mult')); ?> <span class="text-danger padding5"> <?php echo e(__('rep-extra')); ?> </span></li>
                                        </ul><!-- /.feature-lists text-start -->
                                        <div class="bottom-block">
                                            <a href="<?php echo e(get_url('learn_more')); ?>"> <?php echo e(__('rep-learn')); ?> </a>
                                            <a href="<?php echo e(get_url('register')); ?>" class="price-btn cursorPointerr"> <?php echo e(__('rep-buy')); ?> </a>
                                            <h5 class="tag-line text-center"> <?php echo e(__('rep-no-fees')); ?> <br> <?php echo e(__('rep-cancel')); ?> </h5>
                                            <p> <?php echo e(__('rep-free-trial')); ?> </p>
                                        </div><!-- /.bottom-block -->
                                    </div><!-- /.single-pricing-one -->
                                </div>
                            </div>


                        </div>

                    </div><!-- /.tab-pane -->
                    <div role="tabpanel" class="tab-pane" id="yearly">
                        <div class="">

                            <div class='row m-auto p-0 justify-content-center'>

                                <div class="col-sm-4 col-md-4 col-lg-2 p-1"  >

                                    <div class="single-pricing-one">
                                        <div class="top-block" dir="ltr">
                                            <h2> <?php echo e(__('rep-econ')); ?> </h2>
                                            <p class="price m-0" dir="rtl">
                                                <?php switch($ipData['geoplugin_countryName']):
                                                    case ('Egypt'): ?>
                                                    792 EGP
                                                    <?php break; ?>
                                                    <?php case ('United Arab Emirates'): ?>
                                                    185 Dirham
                                                    <?php break; ?>
                                                    <?php case ('Saudi Arabia'): ?>
                                                    191 Riyal
                                                    <?php break; ?>
                                                    <?php default: ?>
                                                    51$
                                                <?php endswitch; ?></P>

                                            <div class="line"></div><!-- /.line -->
                                        </div><!-- /.top-block -->
                                        <ul class="feature-lists text-start">
                                            <li><span class="text-danger">*</span> <?php echo e(__('rep-man-up')); ?> <span class="font-weight-bold fontSize16">7</span></li>
                                            <li><span class="text-danger">*</span> <?php echo e(__('rep-unlim')); ?> </li>
                                            <li><span class="text-danger">*</span> <?php echo e(__('rep-up-to-50')); ?> </li>
                                            <li><span class="text-danger">*</span> <?php echo e(__('rep-property')); ?> </li>
                                            <li><span class="text-danger">*</span> <?php echo e(__('rep-reports')); ?> </li>
                                            <li><span class="text-danger">*</span> <?php echo e(__('rep-auto-a')); ?>  <span class="text-danger padding5"> <?php echo e(__('rep-extra')); ?> </span></li>
                                        </ul><!-- /.feature-lists text-start -->
                                        <div class="bottom-block bottom-blocks">
                                            <a href="<?php echo e(get_url('learn_more')); ?>"> <?php echo e(__('rep-learn')); ?> </a>
                                            <a href="<?php echo e(get_url('register')); ?>" class="price-btn "> <?php echo e(__('rep-buy')); ?> </a>
                                            <h5 class="tag-line text-center"> <?php echo e(__('rep-no-fees')); ?> <br> <?php echo e(__('rep-cancel')); ?> </h5>
                                            <p> <?php echo e(__('rep-free-trial')); ?> </p>
                                        </div><!-- /.bottom-block -->
                                    </div><!-- /.single-pricing-one -->
                                </div>
                                <div class="col-sm-4 col-md-4 col-lg-2 p-1"  >
                                    <div class="single-pricing-one pro-pack">
                                        <div class="top-block" dir="ltr">
                                            <h2> <?php echo e(__('rep-special')); ?> </h2>
                                            <p class="price m-0" dir="rtl">
                                                <?php switch($ipData['geoplugin_countryName']):
                                                    case ('Egypt'): ?>
                                                    1584 EGP
                                                    <?php break; ?>
                                                    <?php case ('United Arab Emirates'): ?>
                                                    370 Dirham
                                                    <?php break; ?>
                                                    <?php case ('Saudi Arabia'): ?>
                                                    377 Riyal
                                                    <?php break; ?>
                                                    <?php default: ?>
                                                    101$
                                                <?php endswitch; ?>
                                            </P>

                                            <div class="line"></div><!-- /.line -->
                                        </div><!-- /.top-block -->
                                        <ul class="feature-lists text-start">
                                            <li><span class="text-danger">*</span><?php echo e(__('rep-man-up')); ?><span class="font-weight-bold fontSize16">14</span></li>
                                            <li><span class="text-danger">*</span><?php echo e(__('rep-unlim')); ?></li>
                                            <li><span class="text-danger">*</span><?php echo e(__('rep-up-to-50')); ?> </li>
                                            <li><span class="text-danger">*</span><?php echo e(__('rep-property')); ?>   </li>
                                            <li><span class="text-danger">*</span><?php echo e(__('rep-reports')); ?></li>
                                            <li><span class="text-danger">*</span><?php echo e(__('rep-auto-a')); ?> <span class="text-danger padding5"><?php echo e(__('rep-extra')); ?> </span></li>
                                            <li><span class="text-danger">*</span><?php echo e(__('rep-adding-mult')); ?>  <span  class="text-danger padding5"><?php echo e(__('rep-extra')); ?> </span></li>
                                        </ul><!-- /.feature-lists text-start -->
                                        <div class="bottom-block">
                                            <a href="<?php echo e(get_url('learn_more')); ?>"><?php echo e(__('rep-learn')); ?></a>
                                            <a href="<?php echo e(get_url('register')); ?>" class="price-btn cursorPointerr"><?php echo e(__('rep-buy')); ?></a>
                                            <h5 class="tag-line text-center"><?php echo e(__('rep-no-fees')); ?> <br> <?php echo e(__('rep-cancel')); ?></h5>
                                            <p><?php echo e(__('rep-free-trial')); ?></p>
                                        </div><!-- /.bottom-block -->
                                    </div><!-- /.single-pricing-one -->
                                </div>
                            </div>
                        </div><!-- /.row -->
                    </div><!-- /.tab-pane -->
                </div><!-- /.tab-content -->

            </div>
        </section><!-- /.pricing-style-one -->
        <?php echo $__env->make('sticky.layout.partials.common.compare', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="hide-mobile">
            <?php echo $__env->make('sticky.layout.partials.common.reviews', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div><!-- /.page-wrapper -->


<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>


<?php $__env->stopPush(); ?>

<?php echo $__env->make('sticky.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Laravel-Projects\StickyPost2\inc\themes\frontend\pure\views/sticky/pages/auto_activity.blade.php ENDPATH**/ ?>