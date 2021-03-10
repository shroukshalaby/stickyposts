<style>
    .w-40{
        width: 55px;
        margin: 0;
        padding-left: 5px;
        margin-right: 1px;
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
    .fs-13{
        font-size:14px;
    }
    .fs-13{
        font-size:13px;
        color:#000;
    }
    .fs-16{
        font-size:16px
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
    .red{
     padding:5px;
     color:#f00;
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
    }

</style>
<section class="pricing-style-one home-page-two remove-bg hide-mobile" id="pricing" style="background:linear-gradient(90deg, #320b82 0%, #9c33c3 100%)!important;padding:20px 0;">
    <div class="container-fluid p-0">
        <div class="block-title text-center text-light ">
            <h4 style="color:#fff" class='fs-20'><?php echo e(__('h_pr_h1')); ?></h4>
        </div><!-- /.block-title -->
        <ul class="nav nav-tabs tab-title m-0 " role="tablist">
            <li class="nav-item">
                <a class="nav-link" href="#yearly" role="tab" data-toggle="tab"><?php echo e(__('yearly')); ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="#monthly" role="tab" data-toggle="tab"><?php echo e(__('monthly')); ?> </a>
            </li>
        </ul>
        <div class="tab-content ">
            <div role="tabpanel" class="tab-pane show active" id="monthly">
                <div class="col-lg-11 p-0 mx-auto">
                    <div class="row justify-content-center">
                        <div class="col-lg-2 p-1 col-md-4 mt-sm-2 col-sm-6 col-12">

                            <div class="single-pricing-one">
                                <div class="top-block" style="direction: ltr;">
                                    <h2><?php echo e(__('economical')); ?> </h2>
                                    <p class="price m-0" style="direction: rtl;">
                                        <?php switch($ipData['geoplugin_countryName']):
                                            case ('Egypt'): ?>
                                            99 EGP
                                            <?php break; ?>;
                                            <?php case ('United Arab Emirates'): ?>
                                            23 Dirham
                                            <?php break; ?>;
                                            <?php case ('Saudi Arabia'): ?>
                                            24 Riyal
                                            <?php break; ?>;
                                            <?php default: ?>
                                            6$
                                        <?php endswitch; ?>

                                        </P>
                                    <div class="line"></div><!-- /.line -->
                                </div><!-- /.top-block -->
                                <ul class="feature-lists ">
                                    <li><span style="color:#f00">*</span><?php echo e(__('h_pr_eco_li1')); ?> <span class="font-weight-bold fs-16">7</span></li>
                                    <li><span style="color:#f00">*</span><?php echo e(__('h_pr_eco_li2')); ?></li>
                                    <li><span style="color:#f00">*</span><?php echo e(__('b_PostsGenerator')); ?></li>
                                    <li><span style="color:#f00">*</span><?php echo e(__('h_pr_eco_li3')); ?></li>
                                    <li><span style="color:#f00">*</span><?php echo e(__('h_pr_eco_li4')); ?></li>
                                    <li><span style="color:#f00">*</span><?php echo e(__('h_pr_eco_li4')); ?></li>
                                    <li><span style="color:#f00">*</span><?php echo e(__('b_AutoActivity')); ?> <span class="red"><?php echo e(__('extra')); ?> </span></li>
                                </ul><!-- /.feature-lists  -->
                                <div class="bottom-block">
                                    <a href="<?php echo e(get_url('learn_more')); ?>"><?php echo e(__('learnMore')); ?></a>
                                    <a href="<?php echo e(get_url('register')); ?>" class="price-btn" style="cursor: pointer;"><?php echo e(__('btn_BuyNow')); ?></a>
                                    <h5 class="tag-line text-center"><?php echo e(__('noEtraFees')); ?> <br> <?php echo e(__('Cancellation_anytime')); ?></h5>
                                    <p><?php echo e(__('3daysTrial')); ?></p>
                                </div><!-- /.bottom-block -->
                            </div><!-- /.single-pricing-one -->
                        </div>
                        <div class="col-lg-2 p-1 col-md-4 mt-sm-2 col-sm-6 col-12">
                            <div class="single-pricing-one pro-pack">
                                <div class="top-block" style="direction: ltr;">
                                    <h2><?php echo e(__('special')); ?> </h2>
                                    <p class="price m-0" style="direction: rtl;">

                                        <?php switch($ipData['geoplugin_countryName']):
                                            case ('Egypt'): ?>
                                            195 EGP
                                            <?php break; ?>;
                                            <?php case ('United Arab Emirates'): ?>
                                            46 Dirham
                                            <?php break; ?>;
                                            <?php case ('Saudi Arabia'): ?>
                                            47 Riyal
                                            <?php break; ?>;
                                            <?php default: ?>
                                            13$
                                        <?php endswitch; ?>



                                    </P>
                                    <div class="line"></div><!-- /.line -->
                                </div><!-- /.top-block -->
                                <ul class="feature-lists ">
                                    <li><span style="color:#f00">*</span><?php echo e(__('h_pr_eco_li1')); ?> <span class="font-weight-bold fs-16">14</span></li>
                                    <li><span style="color:#f00">*</span><?php echo e(__('h_pr_eco_li2')); ?></li>
                                    <li><span style="color:#f00">*</span><?php echo e(__('b_PostsGenerator')); ?></li>
                                    <li><span style="color:#f00">*</span><?php echo e(__('h_pr_eco_li3')); ?> </li>
                                    <li><span style="color:#f00">*</span><?php echo e(__('h_pr_eco_li4')); ?>  </li>
                                    <li><span style="color:#f00">*</span><?php echo e(__('h_pr_eco_li4')); ?></li>
                                    <li><span style="color:#f00">*</span><?php echo e(__('b_AutoActivity')); ?> <span class="red"><?php echo e(__('extra')); ?> </span></li>
                                    <li><span style="color:#f00">*</span><?php echo e(__('h_pr_eco_li6')); ?>  <span class="red"><?php echo e(__('extra')); ?> </span></li>
                                </ul><!-- /.feature-lists  -->
                                <div class="bottom-block">
                                    <a href="<?php echo e(get_url('learn_more')); ?>"><?php echo e(__('learnMore')); ?></a>
                                    <a href="<?php echo e(get_url('register')); ?>" class="price-btn" style="cursor: pointer;"><?php echo e(__('btn_BuyNow')); ?></a>
                                    <h5 class="tag-line text-center"><?php echo e(__('noEtraFees')); ?> <br> <?php echo e(__('Cancellation_anytime')); ?></h5>
                                    <p><?php echo e(__('3daysTrial')); ?></p>
                                </div><!-- /.bottom-block -->
                            </div><!-- /.single-pricing-one -->
                        </div>
                        <div class="col-lg-2 p-1 col-md-4 mt-sm-2 col-sm-6 col-12">

                            <div class="single-pricing-one">
                                <div class="top-block" style="direction: ltr;">
                                    <h2><?php echo e(__('professional')); ?> </h2>
                                    <p class="price m-0" style="direction: rtl;">

                                            <?php switch($ipData['geoplugin_countryName']):
                                                case ('Egypt'): ?>
                                                495 EGP
                                                <?php break; ?>;
                                                <?php case ('United Arab Emirates'): ?>
                                                115 Dirham
                                                <?php break; ?>;
                                                <?php case ('Saudi Arabia'): ?>
                                                71 Riyal
                                                <?php break; ?>;
                                                <?php default: ?>
                                                 31$
                                            <?php endswitch; ?>






                                    </P>

                                    <div class="line"></div><!-- /.line -->
                                </div><!-- /.top-block -->
                                <ul class="feature-lists ">
                                    <li><span style="color:#f00">*</span><?php echo e(__('h_pr_eco_li1')); ?> <span class="font-weight-bold fs-16"> 35 </span></li>
                                    <li><span style="color:#f00">*</span><?php echo e(__('h_pr_eco_li2')); ?>.</li>
                                    <li><span style="color:#f00">*</span><?php echo e(__('h_pr_eco_li7')); ?> </li>
                                    <li><span style="color:#f00">*</span><?php echo e(__('h_pr_eco_li3')); ?></li>
                                    <li><span style="color:#f00">*</span><?php echo e(__('h_pr_eco_li4')); ?></li>
                                    <li><span style="color:#f00">*</span><?php echo e(__('h_pr_eco_li4')); ?></li>
                                    <li><span style="color:#f00">*</span><?php echo e(__('b_AutoActivity')); ?> </li>
                                    <li><span style="color:#f00">*</span><?php echo e(__('h_pr_eco_li8')); ?> </li>
                                    <li><span style="color:#f00">*</span><?php echo e(__('h_pr_eco_li9')); ?> </li>
                                    <li><span style="color:#f00">*</span><?php echo e(__('h_pr_eco_li10')); ?> </li>
                                    <li><span style="color:#f00">*</span><?php echo e(__('h_pr_eco_li11')); ?></li>
                                </ul><!-- /.feature-lists  -->
                                <div class="bottom-block">
                                    <a href="<?php echo e(get_url('back_to_business')); ?>"><?php echo e(__('learnMore')); ?></a>
                                    <a href="<?php echo e(get_url('register')); ?>" class="price-btn" style="cursor: pointer;"><?php echo e(__('btn_BuyNow')); ?></a>
                                    <h5 class="tag-line text-center"><?php echo e(__('noEtraFees')); ?> <br> <?php echo e(__('Cancellation_anytime')); ?></h5>
                                    <p><?php echo e(__('3daysTrial')); ?></p>
                                </div><!-- /.bottom-block -->
                            </div><!-- /.single-pricing-one -->
                        </div>
                        <div class="d-lg-none  mt-sm-2 col-md-4 col-sm-6 col-12 tetx hide-mobile">
                            <div style="border: none;background: transparent;text-align: center;">
                                <img src="<?php echo e(get_theme_frontend_url('assets/sticky/images/Economy-Plus-Package-with-words.png')); ?>" class="img-fluid" style="width: 240px;">

                            </div>
                        </div>
                        <div class="col-lg-2 p-1 col-md-4 mt-sm-2 col-sm-6 col-12">

                            <div class="single-pricing-one">
                                <div class="top-block" style="direction: ltr;">
                                    <h2 style=""><?php echo e(__('s_professional')); ?></h2>
                                    <p class="price m-0" style="direction: rtl;">

                                        <?php switch($ipData['geoplugin_countryName']):
                                            case ('Egypt'): ?>
                                            750 EGP
                                            <?php break; ?>;
                                            <?php case ('United Arab Emirates'): ?>
                                            174 Dirham
                                            <?php break; ?>;
                                            <?php case ('Saudi Arabia'): ?>
                                            119 Riyal
                                            <?php break; ?>;
                                            <?php default: ?>
                                            47$
                                        <?php endswitch; ?>

                                    </P>
                                    <div class="line"></div><!-- /.line -->
                                </div><!-- /.top-block -->
                                <ul class="feature-lists ">

                                    <li><span style="color:#f00">*</span><?php echo e(__('h_pr_eco_li1')); ?> <span class="font-weight-bold fs-16"> 70 </span></li>
                                    <li><span style="color:#f00">*</span><?php echo e(__('h_pr_eco_li2')); ?></li>
                                    <li><span style="color:#f00">*</span><?php echo e(__('h_pr_eco_li7')); ?></li>
                                    <li><span style="color:#f00">*</span><?php echo e(__('h_pr_eco_li3')); ?></li>
                                    <li><span style="color:#f00">*</span><?php echo e(__('h_pr_eco_li4')); ?></li>
                                    <li><span style="color:#f00">*</span><?php echo e(__('h_pr_eco_li4')); ?></li>
                                    <li><span style="color:#f00">*</span><?php echo e(__('b_AutoActivity')); ?> </li>
                                    <li><span style="color:#f00">*</span><?php echo e(__('h_pr_eco_li12')); ?> </li>
                                    <li><span style="color:#f00">*</span><?php echo e(__('h_pr_eco_li8')); ?></li>
                                    <li><span style="color:#f00">*</span><?php echo e(__('h_pr_eco_li9')); ?></li>
                                    <li><span style="color:#f00">*</span><?php echo e(__('h_pr_eco_li13')); ?> </li>
                                    <li><span style="color:#f00">*</span><?php echo e(__('h_pr_eco_li10')); ?>  </li>
                                    <li><span style="color:#f00">*</span><?php echo e(__('h_pr_eco_li11')); ?></li>

                                </ul><!-- /.feature-lists  -->
                                <div class="bottom-block">
                                    <a href="<?php echo e(get_url('back_to_business')); ?>"><?php echo e(__('learnMore')); ?></a>
                                    <a href="<?php echo e(get_url('register')); ?>" class="price-btn" style="cursor: pointer;"><?php echo e(__('btn_BuyNow')); ?></a>
                                    <h5 class="tag-line text-center" style="color:#310150;background: #eee;padding: 6px;margin: 0;"><?php echo e(__('noEtraFees')); ?> <br> <?php echo e(__('Cancellation_anytime')); ?></h5>
                                    <p><?php echo e(__('3daysTrial')); ?></p>
                                </div><!-- /.bottom-block -->
                            </div><!-- /.single-pricing-one -->
                        </div>
                        <div class="col-lg-2 p-1 col-md-4 mt-sm-2 col-sm-6 col-12">
                            <div class="single-pricing-one m-auto" style="width:100%; height: 100%;background: linear-gradient(180deg , #3AB4E7 , #223976 );color: #fff;">
                                <div class="top-block">
                                    <h2><?php echo e(__('enterprise')); ?></h2>
                                    <p style="margin:0;font-size: 21px;color: #fff;">  <?php echo e(__('h_enterprise_p')); ?> </p>
                                    <div class="line"></div><!-- /.line -->
                                </div><!-- /.top-block -->

                                <div class="">
                                    <h6 style=""><?php echo e(__('h_enterprise_p2')); ?></h6>

                                </div>
                                <div class="bottom-blocks" style="position: absolute;">
                                    <a href="<?php echo e(get_url('enterprise_package')); ?>" class="price-btn" style="cursor: pointer;margin-bottom: 2.7rem;"><?php echo e(__('btn_BuyNow')); ?></a>
                                <div style="background: #fff;">
                                     <p style="border-top: 1px solid #ccc;width: 80%;margin: auto;font-size: 12px;color: red;font-weight: bold;padding: 5px 0;"><?php echo e(__('3daysTrial')); ?></p>                                    </div>
                                </div>
                            </div><!-- /.single-pricing-one -->
                        </div>
                    </div>
                </div>

            </div><!-- /.tab-pane -->
            <div role="tabpanel" class="tab-pane" id="yearly">
                <div class="col-lg-11 p-0 mx-auto" style="">
                    <div class='row justify-content-center'>

                        <div class="col-lg-2 p-1 col-md-4 col-sm-6 col-12 mt-sm-2">
                            <div class="single-pricing-one">
                                <div class="top-block" style="direction: ltr;">
                                    <h2><?php echo e(__('economical')); ?></h2>
                                    <p class="price m-0" style="direction: rtl;">

                                        <?php switch($ipData['geoplugin_countryName']):
                                            case ('Egypt'): ?>
                                            1045 EGP
                                            <?php break; ?>;
                                            <?php case ('United Arab Emirates'): ?>
                                            244 Dirham
                                            <?php break; ?>;
                                            <?php case ('Saudi Arabia'): ?>
                                            251 Riyal
                                            <?php break; ?>;
                                            <?php default: ?>
                                            67$
                                        <?php endswitch; ?>


                                    <div class="line"></div><!-- /.line -->
                                </div><!-- /.top-block -->
                                <ul class="feature-lists ">
                                    <li><span style="color:#f00">*</span><?php echo e(__('h_pr_eco_li1')); ?> <span class="font-weight-bold fs-16">7</span></li>
                                    <li><span style="color:#f00">*</span><?php echo e(__('h_pr_eco_li2')); ?></li>
                                    <li><span style="color:#f00">*</span><?php echo e(__('b_PostsGenerator')); ?></li>
                                    <li><span style="color:#f00">*</span><?php echo e(__('h_pr_eco_li3')); ?></li>
                                    <li><span style="color:#f00">*</span><?php echo e(__('h_pr_eco_li4')); ?></li>
                                    <li><span style="color:#f00">*</span><?php echo e(__('h_pr_eco_li4')); ?></li>
                                    <li><span style="color:#f00">*</span><?php echo e(__('b_AutoActivity')); ?> <span class="red"><?php echo e(__('extra')); ?> </span></li>
                                </ul><!-- /.feature-lists  -->
                                <div class="bottom-block">
                                    <a href="<?php echo e(get_url('learn_more')); ?>"><?php echo e(__('learnMore')); ?></a>
                                    <a href="<?php echo e(get_url('register')); ?>" class="price-btn" style="cursor: pointer;"><?php echo e(__('btn_BuyNow')); ?></a>
                                    <h5 class="tag-line text-center"><?php echo e(__('noEtraFees')); ?> <br> <?php echo e(__('Cancellation_anytime')); ?></h5>
                                    <p><?php echo e(__('3daysTrial')); ?></p>
                                </div><!-- /.bottom-block -->
                            </div><!-- /.single-pricing-one -->
                        </div>
                        <div class="col-lg-2 p-1 col-md-4 col-sm-6 col-12 mt-sm-2">
                            <div class="single-pricing-one pro-pack">
                                <div class="top-block" style="direction: ltr;">
                                    <h2><?php echo e(__('special')); ?> </h2>
                                    <p class="price m-0" style="direction: rtl;">
                                    <?php switch($ipData['geoplugin_countryName']):
                                        case ('Egypt'): ?>
                                        2090 EGP
                                        <?php break; ?>;
                                        <?php case ('United Arab Emirates'): ?>
                                        488 Dirham
                                        <?php break; ?>;
                                        <?php case ('Saudi Arabia'): ?>
                                        502 Riyal
                                        <?php break; ?>;
                                        <?php default: ?>
                                        133$
                                    <?php endswitch; ?>
                                    </P>

                                    <div class="line"></div><!-- /.line -->
                                </div><!-- /.top-block -->
                                <ul class="feature-lists ">
                                    <li><span style="color:#f00">*</span><?php echo e(__('h_pr_eco_li1')); ?> <span class="font-weight-bold fs-16">14</span></li>
                                    <li><span style="color:#f00">*</span><?php echo e(__('h_pr_eco_li2')); ?></li>
                                    <li><span style="color:#f00">*</span><?php echo e(__('b_PostsGenerator')); ?></li>
                                    <li><span style="color:#f00">*</span><?php echo e(__('h_pr_eco_li3')); ?> </li>
                                    <li><span style="color:#f00">*</span><?php echo e(__('h_pr_eco_li4')); ?>  </li>
                                    <li><span style="color:#f00">*</span><?php echo e(__('h_pr_eco_li4')); ?></li>
                                    <li><span style="color:#f00">*</span><?php echo e(__('b_AutoActivity')); ?> <span class="red"><?php echo e(__('extra')); ?> </span></li>
                                    <li><span style="color:#f00">*</span><?php echo e(__('h_pr_eco_li6')); ?>  <span class="red"><?php echo e(__('extra')); ?> </span></li>
                                </ul><!-- /.feature-lists  -->
                                <div class="bottom-block">
                                    <a href="<?php echo e(get_url('learn_more')); ?>"><?php echo e(__('learnMore')); ?></a>
                                    <a href="<?php echo e(get_url('register')); ?>" class="price-btn" style="cursor: pointer;"><?php echo e(__('btn_BuyNow')); ?></a>
                                    <h5 class="tag-line text-center"><?php echo e(__('noEtraFees')); ?> <br> <?php echo e(__('Cancellation_anytime')); ?></h5>
                                    <p><?php echo e(__('3daysTrial')); ?></p>
                                </div><!-- /.bottom-block -->
                            </div><!-- /.single-pricing-one -->
                        </div>
                        <div class="col-lg-2 p-1 col-md-4 col-sm-6 col-12 mt-sm-2">

                            <div class="single-pricing-one">
                                <div class="top-block" style="direction: ltr;">
                                    <h2><?php echo e(__('professional')); ?> </h2>
                                    <p class="price m-0" style="direction: rtl;">


                                            <?php switch($ipData['geoplugin_countryName']):
                                                case ('Egypt'): ?>
                                                4999 EGP
                                                <?php break; ?>;
                                                <?php case ('United Arab Emirates'): ?>
                                                1157 Dirham
                                                <?php break; ?>;
                                                <?php case ('Saudi Arabia'): ?>
                                                753 Riyal
                                                <?php break; ?>;
                                                <?php default: ?>
                                                315$
                                            <?php endswitch; ?>

                                    </P>

                                    <div class="line"></div><!-- /.line -->
                                </div><!-- /.top-block -->
                                <ul class="feature-lists ">
                                    <li><span style="color:#f00">*</span><?php echo e(__('h_pr_eco_li1')); ?> <span class="font-weight-bold fs-16"> 35 </span></li>
                                    <li><span style="color:#f00">*</span><?php echo e(__('h_pr_eco_li2')); ?></li>
                                    <li><span style="color:#f00">*</span><?php echo e(__('h_pr_eco_li7')); ?> </li>
                                    <li><span style="color:#f00">*</span><?php echo e(__('h_pr_eco_li3')); ?></li>
                                    <li><span style="color:#f00">*</span><?php echo e(__('h_pr_eco_li4')); ?></li>
                                    <li><span style="color:#f00">*</span><?php echo e(__('h_pr_eco_li4')); ?></li>
                                    <li><span style="color:#f00">*</span><?php echo e(__('b_AutoActivity')); ?> </li>
                                    <li><span style="color:#f00">*</span><?php echo e(__('h_pr_eco_li8')); ?> </li>
                                    <li><span style="color:#f00">*</span><?php echo e(__('h_pr_eco_li9')); ?> </li>
                                    <li><span style="color:#f00">*</span><?php echo e(__('h_pr_eco_li10')); ?> </li>
                                    <li><span style="color:#f00">*</span><?php echo e(__('h_pr_eco_li11')); ?></li>

                                </ul><!-- /.feature-lists  -->
                                <div class="bottom-block">
                                    <a href="<?php echo e(get_url('back_to_business')); ?>"><?php echo e(__('learnMore')); ?></a>
                                    <a href="<?php echo e(get_url('register')); ?>" class="price-btn" style="cursor: pointer;"><?php echo e(__('btn_BuyNow')); ?></a>
                                    <h5 class="tag-line text-center"><?php echo e(__('noEtraFees')); ?> <br> <?php echo e(__('Cancellation_anytime')); ?></h5>
                                    <p><?php echo e(__('3daysTrial')); ?></p>
                                </div><!-- /.bottom-block -->
                            </div><!-- /.single-pricing-one -->
                        </div>
                        <div class="d-lg-none col-md-4 col-sm-6 col-12 mt-sm-2 hide-mobile">
                            <div style="border: none;background: transparent;text-align: center;">
                                <img src="<?php echo e(get_theme_frontend_url('assets/sticky/images/Economy-Plus-Package-with-words.png')); ?>" class="img-fluid" style="width: 240px;">
                               
                            </div>
                        </div>
                        <div class="col-lg-2 p-1 col-md-4 col-sm-6 col-12 mt-sm-2">
                            <div class="single-pricing-one">
                                <div class="top-block" style="direction: ltr;">
                                    <h2 style=""><?php echo e(__('s_professional')); ?></h2>
                                    <p class="price m-0" style="direction: rtl;">


                                            <?php switch($ipData['geoplugin_countryName']):
                                                case ('Egypt'): ?>
                                                6999 EGP
                                                <?php break; ?>;
                                                <?php case ('United Arab Emirates'): ?>
                                                1829 Dirham
                                                <?php break; ?>;
                                                <?php case ('Saudi Arabia'): ?>
                                                1200 Riyal
                                                <?php break; ?>;
                                                <?php default: ?>
                                                498$
                                            <?php endswitch; ?>


                                    </P>
                                    <div class="line"></div><!-- /.line -->
                                </div><!-- /.top-block -->
                                <ul class="feature-lists ">

                                    <li><span style="color:#f00">*</span><?php echo e(__('h_pr_eco_li1')); ?> <span class="font-weight-bold fs-16"> 70 </span></li>
                                    <li><span style="color:#f00">*</span><?php echo e(__('h_pr_eco_li2')); ?></li>
                                    <li><span style="color:#f00">*</span><?php echo e(__('h_pr_eco_li7')); ?></li>
                                    <li><span style="color:#f00">*</span><?php echo e(__('h_pr_eco_li3')); ?></li>
                                    <li><span style="color:#f00">*</span><?php echo e(__('h_pr_eco_li4')); ?></li>
                                    <li><span style="color:#f00">*</span><?php echo e(__('h_pr_eco_li4')); ?></li>
                                    <li><span style="color:#f00">*</span><?php echo e(__('b_AutoActivity')); ?> </li>
                                    <li><span style="color:#f00">*</span><?php echo e(__('h_pr_eco_li12')); ?> </li>
                                    <li><span style="color:#f00">*</span><?php echo e(__('h_pr_eco_li8')); ?></li>
                                    <li><span style="color:#f00">*</span><?php echo e(__('h_pr_eco_li9')); ?></li>
                                    <li><span style="color:#f00">*</span><?php echo e(__('h_pr_eco_li13')); ?> </li>
                                    <li><span style="color:#f00">*</span><?php echo e(__('h_pr_eco_li10')); ?>  </li>
                                    <li><span style="color:#f00">*</span><?php echo e(__('h_pr_eco_li11')); ?></li>

                                </ul><!-- /.feature-lists  -->
                                <div class="bottom-block">
                                    <a href="<?php echo e(get_url('back_to_business')); ?>"><?php echo e(__('learnMore')); ?></a>
                                    <a href="<?php echo e(get_url('register')); ?>" class="price-btn" style="cursor: pointer;"><?php echo e(__('btn_BuyNow')); ?></a>
                                    <h5 class="tag-line text-center" style="color:#310150;background: #eee;padding: 6px;margin: 0;"><?php echo e(__('noEtraFees')); ?> <br> <?php echo e(__('Cancellation_anytime')); ?></h5>
                                    <p><?php echo e(__('3daysTrial')); ?></p> 
                                </div><!-- /.bottom-block -->
                            </div><!-- /.single-pricing-one -->
                        </div>
                        <div class="col-lg-2 p-1 col-md-4 col-sm-6 col-12 mt-sm-2">
                            <div class="single-pricing-one m-auto" style="width:100%; height: 100%;background: linear-gradient(180deg , #3AB4E7 , #223976 );color: #fff;">
                                <div class="top-block">
                                    <h2><?php echo e(__('enterprise')); ?></h2>
                                    <p style="margin:0;font-size: 21px;color: #fff;">  <?php echo e(__('h_enterprise_p')); ?> </p>
                                    <div class="line"></div><!-- /.line -->
                                </div><!-- /.top-block -->

                                <div class="">
                                    <h6 style=""><?php echo e(__('h_enterprise_p2')); ?></h6>

                                </div>
                                <div class="bottom-blocks" style="position: absolute;">
                                    <a href="<?php echo e(get_url('enterprise_package')); ?>" class="price-btn" style="cursor: pointer;margin-bottom: 2.7rem;"><?php echo e(__('btn_BuyNow')); ?></a>
                                <div style="background: #fff;">
                                     <p style="border-top: 1px solid #ccc;width: 80%;margin: auto;font-size: 12px;color: red;font-weight: bold;padding: 5px 0;"><?php echo e(__('3daysTrial')); ?></p>                                    </div>
                                </div>                                 
                                </div>
                            </div><!-- /.single-pricing-one -->
                        </div>
                    <div class='row justify-content-center'>
                        <div class='col-lg-2 col-md-4 col-sm-6 col-12 mt-sm-2 p-4xa'>
                            <div class="card package w-100 h-100">
                                <div class="card-body bg-white text-dark package-second-card">
                                    <h3 class="card-text px-2 mb-3 ">
                                        <?php echo e(__('h_no_install')); ?>

                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class='col-lg-2 col-md-4 col-sm-6 col-12 mt-sm-2 p-4xa'>
                            <div class="card package w-100 h-100">
                                <div class="card-body bg-white text-dark package-second-card">
                                    <h3 class="card-text px-2 mb-3 ">
                                        <?php echo e(__('h_no_install')); ?>

                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class='col-lg-2 col-md-4 col-sm-6 col-12 mt-sm-2 p-4xa'>
                            <div class="card package w-100">
                                <div class="card-body bg-white text-dark package-second-card">
                                    <h6 class="card-text mb-3 text-center">
                                        <span>   <?php echo e(__('installBy')); ?> </span>
                                        <input type="number" id="downpayment" placeholder="4999" class="provider-input" name="downpayment" value="1000" autocomplete="false" style="border: 0.5px solid rgb(225, 225, 225);width:33%;font-size:14px;">
                                        <span><?php echo e(__('pounds')); ?></span>
                                    </h6>

                                    <div class="custom-control custom-radio text-center w-100">
                                        <input type="radio" id="profRadio1" name="customRadio" class="custom-control-input">
                                        <label class="custom-control-label fs-13" for="profRadio1">
                                                <span class="price">
                                                    2250
                                                </span>
                                            <?php echo e(__('pounds')); ?>

                                            /
                                            <span class="price">
                                                    3
                                                </span>
                                            <?php echo e(__('months')); ?>

                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio text-center w-100">
                                        <input type="radio" id="profRadio2" name="customRadio" class="custom-control-input">
                                        <label class="custom-control-label fs-13" for="profRadio2">
                                <span class="price">
                                    2450
                                </span>
                                            <?php echo e(__('pounds')); ?>

                                            /
                                            <span class="price">
                                    6
                                </span>
                                            <?php echo e(__('months')); ?>

                                        </label>
                                    </div>

                                    <div class="custom-control custom-radio text-center w-100">
                                        <input type="radio" id="profRadio1" name="customRadio" class="custom-control-input">
                                        <label class="custom-control-label fs-13" for="profRadio1">
                                                <span class="price">
                                                    1250
                                                </span>
                                            <?php echo e(__('pounds')); ?>

                                            /
                                            <span class="price">
                                                    12
                                                </span>
                                            <?php echo e(__('months')); ?>

                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio text-center w-100">
                                        <input type="radio" id="profRadio2" name="customRadio" class="custom-control-input">
                                        <label class="custom-control-label fs-13" for="profRadio2">
                                                    <span class="price">
                                                        1000
                                                    </span>
                                            <?php echo e(__('pounds')); ?>

                                            /
                                            <span class="price">
                                                        18
                                                    </span>
                                            <?php echo e(__('months')); ?>

                                        </label>
                                    </div>

                                </div>
                                <div class="card-footer px-0 bg-blue border-0 p-0">
                                    <a class="text-white font-weight-bold d-block mx-3 p-2 text-center"
                                       href="<?php echo e(get_url('register')); ?>">
                                        <?php echo e(__('btn_Install')); ?>

                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class='col-lg-2 col-md-4 col-sm-6 col-12 mt-sm-2 p-4xa'>
                            <div class="card package w-100">
                                <div class="card-body bg-white text-dark package-second-card">
                                    <h6 class="card-text mb-3 text-center">
                                        <span>   <?php echo e(__('installBy')); ?> </span>
                                        <input type="number" id="downpayment" placeholder="4999" class="provider-input" name="downpayment" value="1000" autocomplete="false" style="border: 0.5px solid rgb(225, 225, 225);width:33%;font-size:14px;">
                                        <span><?php echo e(__('pounds')); ?></span>
                                    </h6>

                                    <div class="custom-control custom-radio text-center w-100">
                                        <input type="radio" id="profRadio1" name="customRadio" class="custom-control-input">
                                        <label class="custom-control-label fs-13" for="profRadio1">
                                                <span class="price">
                                                    2250
                                                </span>
                                            <?php echo e(__('pounds')); ?>

                                            /
                                            <span class="price">
                                                    3
                                                </span>
                                            <?php echo e(__('months')); ?>

                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio text-center w-100">
                                        <input type="radio" id="profRadio2" name="customRadio" class="custom-control-input">
                                        <label class="custom-control-label fs-13" for="profRadio2">
                                                <span class="price">
                                                    2450
                                                </span>
                                            <?php echo e(__('pounds')); ?>

                                            /
                                            <span class="price">
                                                    6
                                                </span>
                                            <?php echo e(__('months')); ?>

                                        </label>
                                    </div>

                                    <div class="custom-control custom-radio text-center w-100">
                                        <input type="radio" id="profRadio1" name="customRadio" class="custom-control-input">
                                        <label class="custom-control-label fs-13" for="profRadio1">
                                                <span class="price">
                                                    1250
                                                </span>
                                            <?php echo e(__('pounds')); ?>

                                            /
                                            <span class="price">
                                                    12
                                                </span>
                                            <?php echo e(__('months')); ?>

                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio text-center w-100">
                                        <input type="radio" id="profRadio2" name="customRadio" class="custom-control-input">
                                        <label class="custom-control-label fs-13" for="profRadio2">
                                                    <span class="price">
                                                        1000
                                                    </span>
                                            <?php echo e(__('pounds')); ?>

                                            /
                                            <span class="price">
                                                        18
                                                    </span>
                                            <?php echo e(__('months')); ?>

                                        </label>
                                    </div>

                                </div>
                                <div class="card-footer px-0 bg-blue border-0 p-0">
                                    <a class="text-white font-weight-bold d-block mx-3 p-2 text-center"
                                       href="<?php echo e(get_url('register')); ?>">
                                        <?php echo e(__('btn_Install')); ?>

                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class='col-lg-2 col-md-4 col-sm-6 col-12 mt-sm-2 p-4xa'>
                            <div class="card package w-100 h-100">
                                <div class="card-body bg-white text-dark package-second-card">
                                    <h3 class="card-text px-2 mb-3 ">
                                        <?php echo e(__('h_no_install')); ?>

                                    </h3>
                                </div>

                            </div>
                        </div>
                    </div>    
                </div>
                  
            </div><!-- /.row -->
        </div><!-- /.tab-pane -->
    </div><!-- /.tab-content -->
</section><!-- /.pricing-style-one -->
<?php /**PATH F:\Laravel-Projects\StickyPost2\inc\themes\frontend\pure\views/sticky/layout/partials/common/pricing.blade.php ENDPATH**/ ?>