<div class="container-fluid p-0 d-lg-block d-none">
    <div class="row">
        <div class="col-md-12"
             style="background:linear-gradient(90deg, #320b82 0%, #9c33c3 100%)!important;padding:0px 0 20px">
            <div class="row">
                <div class="col-lg-11 mx-auto hide-mobile">

                    <div class="row justify-content-center tab-content m-0" style="align-items:flex-end;">
                        <div class="col-lg-2 d-lg-block d-none mt-5 p-0">
                            <div class="" style="border: none;background: transparent;text-align: start;">

                                <?php switch( getCurrentLangIdiom()):
                                    case ('ar'): ?>
                                    <img src="<?php echo e(get_theme_frontend_url('assets/sticky/images/Economy-Plus-Package-with-wordsAR.png')); ?>"
                                         class="img-fluid" style="width: 213px;height:353px;">
                                    <?php break; ?>
                                    <?php case ('en'): ?>
                                    <img src="<?php echo e(get_theme_frontend_url('assets/sticky/images/Economy-Plus-Package-with-words.png')); ?>"
                                         class="img-fluid" style="width: 213px;height:353px;">
                                    <?php break; ?>
                                    <?php case ('fr'): ?>
                                    <img src="<?php echo e(get_theme_frontend_url('assets/sticky/images/Economy-Plus-Package-with-wordsFR.jpg')); ?>"
                                         class="img-fluid" style="width: 213px;height:353px;">
                                    <?php break; ?>
                                    <?php default: ?>
                                    6$
                                <?php endswitch; ?>

                            </div>
                        </div>
                        <div class="col-lg-9 col-md-12">
                            <div class="row justify-content-center">
                                <div class="col-lg-6 col-md-6 col-sm-8 text-center mt-5  hide-mobile pl-eng-0 pr-rtl-0">
                                    <div class="card" style="height: 100%;">
                                        <div class="card-body p-2">
                                            <div class="row">
                                                <img src="<?php echo e(get_theme_frontend_url('assets/sticky/images/mobil-download.png')); ?>"
                                                     class="img-fluid IMAGES2 IMAGESFre">
                                                <div class="col-12">
                                                    <h5 class="text-dark my-2 fs-16-fr-dw"><?php echo e(__('h_download_app')); ?></h5>
                                                    <div class="stage">
                                                        <a href="https://play.google.com/store/apps/details?id=com.stickyapp.myappcompany">
                                                            <img src="<?php echo e(get_theme_frontend_url('assets/sticky/images/Google play.png')); ?>"
                                                                 style="width: 35%;">
                                                        </a>
                                                        <a class=""
                                                           href="https://apps.apple.com/eg/app/stickyposts/id1481454304">
                                                            <img src="<?php echo e(get_theme_frontend_url('assets/sticky/images/APPSTORE.png')); ?>"
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
                                                        <p style="margin: 0;font-size: 14px;line-height: 1.8;color:#fff;"> <?php echo e(__('for_limited')); ?></p>
                                                    </div>
                                                    <img src="<?php echo e(get_theme_frontend_url('assets/sticky/images/logo-s.png')); ?>"
                                                         class="img-fluid IMAGES">
                                                    <div class="col-12 text-center">
                                                        <p style="margin: 17px 0 0 0;color:#310150;font-weight: 500;font-size:13px;line-height: 1.3;">
                                                            <?php echo e(__('h_sub_and_use')); ?>

                                                            <span style="font-weight: bold;font-size:18px"><?php echo e(__('30_disc')); ?>  </span>
                                                            <br>
                                                            <?php echo e(__('h_promo_text')); ?>


                                                        </p>
                                                    </div>
                                                </div>
                                                <a class="submit" href="<?php echo e(get_url('register')); ?>"
                                                   style="border-radius:5px;font-size: 14px;padding: 5px 9px;"><?php echo e(__('btn_GetNow')); ?></a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-12 p-0 col-12 mx-auto mt-4 hide-mobile"
                                     style="background:#f8f900;border: 1px solid #f8f9fa;color:#000">
                                    <div class="row  mx-0" dir=" " style="">
                                        <div class="col-md-5 rtl-right  my-auto">
                                            <?php switch( getCurrentLangIdiom()):
                                                case ('ar'): ?>
                                                <img src="<?php echo e(get_theme_frontend_url('assets/sticky/images/logo-whq.png')); ?>"
                                                     class="img-fluid" style="width: 50%;">
                                                <?php break; ?>
                                                <?php case ('en'): ?>
                                                <img src="<?php echo e(get_theme_frontend_url('assets/sticky/images/logo-WHe.png')); ?>"
                                                     class="img-fluid" style="width: 50%;">
                                                <?php break; ?>
                                                <?php case ('fr'): ?>
                                                <img src="<?php echo e(get_theme_frontend_url('assets/sticky/images/logo-WHe.png')); ?>"
                                                     class="img-fluid" style="width: 50%;">
                                                <?php break; ?>
                                                <?php default: ?>
                                            <?php endswitch; ?>
                                            <h4 style="margin: 0px;"><?php echo e(__('h_fam_imp')); ?></h4>
                                            <p style="margin-bottom: 4px;font-size:1rem;color:#000;"><?php echo e(__('h_fam_imp2')); ?>

                                                <a href="<?php echo e(get_url('family')); ?>" class="price-btn"
                                                   style="line-height: 1.5;padding: 3px 7px;font-size: 12px;"> <?php echo e(__('learnMore')); ?> </a>
                                            </p>
                                            <a href="<?php echo e(get_url('register')); ?>"
                                               class="submit my-2 <?php echo e(getCurrentLangIdiom() == 'ar' ? 'py-0'  : 'py-2'); ?> "
                                               id="sub"><?php echo e(__('btn_start_free_trial')); ?> </a>
                                            <p style="margin:10px 0 0;font-size:12px;color:#000;"><?php echo e(__('h_fam_imp3')); ?> </p>
                                        </div>
                                        <div class="col-md-2 text-center my-auto">
                                            <?php switch( getCurrentLangIdiom()):
                                                case ('ar'): ?>
                                                <img src="<?php echo e(get_theme_frontend_url('assets/sticky/images/Family-icon-1.png')); ?>"
                                                     class="img-fluid w-100">
                                                <?php break; ?>
                                                <?php case ('en'): ?>
                                                <img src="<?php echo e(get_theme_frontend_url('assets/sticky/images/Icon-Price.png')); ?>"
                                                     class="img-fluid w-100">
                                                <?php break; ?>
                                                <?php case ('fr'): ?>
                                                <img src="<?php echo e(get_theme_frontend_url('assets/sticky/images/Icon-Price-fr.png')); ?>"
                                                     class="img-fluid w-100">
                                                <?php break; ?>
                                                <?php default: ?>
                                                6$
                                            <?php endswitch; ?>
                                        </div>
                                        <div class="col-md-5 my-auto <?php echo e(getCurrentLangIdiom() == 'ar' ? 'text-left pl-3'  : 'text-right pr-3'); ?> ">
                                            <img src="<?php echo e(get_theme_frontend_url('assets/sticky/images/familybanner.png')); ?>"
                                                 class="img-fluid my-3">
                                            <a href="<?php echo e(get_url('contact_us')); ?>" class="submit mt-2 download call_btn"
                                               id="sub">
                                                <?php echo e(__('h_fam_imp4')); ?> <i class="fas fa-phone" aria-hidden="true"></i>
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

                                <!--<img src="<?php echo e(get_theme_frontend_url('assets/sticky/images/1.png')); ?>" style="width:100%;">-->
                                    <h4 style="color:#fff;margin:0;font-weight: 600;"><?php echo e(__('benefits')); ?> </h4>
                                    <ul class="m-0 pl-4 text-white">
                                        <li>
                                            <p class="text-white"
                                               style="margin: 0;font-size: 12px;"><?php echo e(__('h_ReceivePDFreports')); ?>    </p>
                                        </li>
                                        <li>
                                            <p class="text-white"
                                               style="margin: 0;font-size: 12px;"><?php echo e(__('h_Trackgrowth')); ?>    </p>
                                        </li>
                                        <li>
                                            <p class="text-white"
                                               style="margin: 0;font-size: 12px;"><?php echo e(__('h_Forecastreports')); ?>    </p>
                                        </li>
                                        <li>
                                            <p class="text-white"
                                               style="margin: 0;font-size: 12px;"><?php echo e(__('h_useComparison')); ?> </p>
                                        </li>
                                        <li>
                                            <p class="text-white" style="margin: 0;font-size: 12px;"><?php echo e(__('h_monitor')); ?>

                                                <br> <a href="https://stickyposts.net/phpanalyzer/product2/index.php"
                                                        style="cursor: pointer;text-decoration:underline"><?php echo e(__('learnMore')); ?></a>
                                            </p>
                                        </li>
                                    </ul>
                                    <h6 style="color:#fff;font-size: 13px;margin-top: 10px;"><?php echo e(__('h_trackservice')); ?>  </h6>
                                </div>
                                <div class="col-sm-5 p-0 my-auto">
                                    <?php echo file_get_contents('https://crmmrkt.com/ContentController/template/19/' . getCurrentLangIdiom()); ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-4  pt-2 mobile-style" style="border:2px solid #ddd">
                            <div class=" compar-form">
                                <h4 class="text-center"
                                    style="color:#fff;font-weight: 600;"><?php echo e(__('h_Comparisons')); ?></h4>
                                <h6 class="text-center pt-2" style="color:#fff"><?php echo e(__('h_comp1')); ?>

                                    <br>
                                    <?php echo e(__('h_comp2')); ?>

                                </h6>
                                <form class=" my-2 formcomp">
                                    <div class="row m-auto " style="align-items:center;justify-content: space-around;">
                                        <input type="hidden" name="lang" value="EN">
                                        <div class="col-6 p-0 text-start" style="flex:0.45">
                                            <label for="mail" style="color:#fff;"><?php echo e(__('h_Provider')); ?></label>
                                            <select name="providerName"
                                                    class="form-control form-controlEdit text-sm-center" id="pN"
                                                    required>
                                                <option value="" selected
                                                        disabled><?php echo e(__('h_Choose_competitor')); ?></option>

                                                <?php $__currentLoopData = $sticky_service_providers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $provider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($provider->id); ?>">   <?php echo e($provider->service_provider); ?> </option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                            </select>
                                        </div>
                                        <div class="col-6 p-0 text-start" style="flex:0.45">
                                            <label for="mail" style="color:#fff;"><?php echo e(__('h_Package')); ?></label>
                                            <select name="packageName"
                                                    class="form-control form-controlEdit text-sm-center" id="package"
                                                    required>
                                                <option value="" selected disabled><?php echo e(__('h_Choose_Package')); ?> </option>
                                                <?php $__currentLoopData = $sticky_compare; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $compare): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option class="<?php echo e($compare-> service_provider); ?> controlOption"
                                                            style="display:none;"
                                                            value="<?php echo e($compare->package_value); ?>">  <?php echo e($compare->package_name); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                            </select>
                                        </div>


                                    </div>
                                    <div class="row my-2 view-mobile text-center" style="margin-top: 1.5rem!important">
                                        <button type="submit" class="submit m-auto comp-btn" id=""
                                                style="width: 85px;background: linear-gradient(90deg, #320b82 0%, #9c33c3 100%) !important; "><?php echo e(__('btn_Compare')); ?> </button>
                                    </div>
                                    <div class="row mt-3 hide-mobile">
                                        <button class="submit m-auto comp-btn"><?php echo e(__('btn_Compare')); ?></button>
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
                                    <img src="<?php echo e(get_theme_frontend_url('assets/sticky/images/logo-s.png')); ?>"
                                         style="width: 49px;z-index: 10;">

                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                                            style="position: absolute;top: 12px;right: 18px;">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div id="modal-body py-4" class="text-center">
                                    <div class="lds-ring">
                                        <img src="<?php echo e(get_theme_frontend_url('assets/sticky/images/logo-s.png')); ?>">
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
                                        <img src="<?php echo e(get_theme_frontend_url('assets/sticky/images/logo-s.png')); ?>">
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

<?php $__env->startPush('scripts'); ?>
    <script>


        $('.formcomp').submit(function (e) {
            $('#modal_compare').modal('show');
            $('.lds-ring').show();
            $('.modal-compare').html('....');
            e.preventDefault();
            var csrfName = '<?php echo e(getci()->security->get_csrf_token_name()); ?>',
                csrfHash = '<?php echo e(getci()->security->get_csrf_hash()); ?>';
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
<?php $__env->stopPush(); ?><?php /**PATH F:\Laravel-Projects\StickyPost2\inc\themes\frontend\pure\views/sticky/layout/partials/common/compare.blade.php ENDPATH**/ ?>