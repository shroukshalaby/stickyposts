
<?php $__env->startPush('head'); ?>
    <link rel="stylesheet" href="<?php echo e(get_theme_frontend_url('assets/sticky/css/brand.css')); ?>">
    <style>
        .pr-header--main{
            text-align:start;
        }
        .pr-attachment__title{
            overflow-y:visible!important;
        }
        .site-header {
            background-image: linear-gradient(-145deg,#320b82 0,#9c33c3 100%) !important;
        }
        .textLeftExternal {
            text-align: start;
        }
        .boxShadow-none{
          box-shadow:none!important;  
        } 
        @media(max-width:567px){
            .contact-h3{
                font-size:27px!important;
            }
            .start{
                justify-content:start!important;
            }
            .pr-text--xsmall {
            font-size: 1.2rem;
            }
            .textLeftExternal {
                line-height: 1.5;
            }
        }        
        .listStyleType {
            list-style-type: none;
        }
        .newBackgroundRGBA{
            background: darkmagenta;
        }
        .backgroundimageOnee{
            background-image: url('https://stickyposts.net/sticky/images/logo-1-2.png');
            background-size:contain;
        }
        .backgroundimageTwo{
            background-image: url('https://stickyposts.net/sticky/logo-s.png');
        }
        .backgroundimageThree{
            background-image: url('https://stickyposts.net/sticky/images/logo-1-1.png');

        }
        .backgrouindimageFour{
            background-image: url('https://stickyposts.net/sticky/images/logo-1-2.png');
        }
        .backgroundColorPadding{
            background: linear-gradient(-145deg,#320b82 0,#9c33c3 100%);
            padding: 20px 30px;
        }
        .boxShadow{
            box-shadow:0 0 0 0;
        }
        .borderRadious3 {
            border-radius: 3px!important;
            width:100%;
            font-size:21px;
        }
        .margin0 {
            margin: 0;
        }
        .marginBottom{
            margin-bottom: 25px;
            font-size: 32px;
        }
        .newFontSize{
            margin: 0;font-size:11px;
        }
    </style>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('page-wrapper'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
  <div class="container my-5 <?php echo e(getCurrentLangIdiom() == 'ar' ? ' text-right'  : ''); ?> ">
            <div class="row">
                <div class="col-md-8 mx-auto p-3">
                    <div class="pr-content" itemscope="" itemtype="//schema.org/Article">
                        <div class="pr-story__body margin-top--large margin-bottom--large">
                            <h1 class="pr-header--main pr-font-color--graphite padding-top--small" itemprop="headline"><?php echo __('brand-idh11'); ?></h1>
                        </div>
                    </div>
                    <div class="pr-content">
                        <div class="pr-story__body margin-top--large pr-font-color--graphite">
                            <div class="margin-top--large">
                                <div class="margin-top--large">
                                    <h2 class="pr-header--small pr-header--small-mobile pr-font-color--graphite textLeftExternal"><?php echo e(__('brand-idh21')); ?></h2>
                                    <h2 class="pr-header--small pr-header--small-mobile pr-font-color--graphite textLeftExternal"><?php echo e(__('brand-idh22')); ?> </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pr-content">
                        <div class="pr-story__body margin-top--large pr-font-color--graphite">
                            <div class="margin-top--large">
                                <h3 class="pr-header--story"><?php echo e(__('brand-idh31')); ?></h3>
                            </div>
                        </div>
                    </div>
                    <div class="pr-content">
                        <div class="pr-story__body margin-top--large pr-font-color--graphite">
                            <div class="margin-top--large">
                                <ul class="pr-text--normal pr-text--mobile-small listStyleType">
                                    <li class="margin-bottom--base">
                                        <i class="fas fa-play padding-right--medium pr-font-color--blue text--wrap"></i> <?php echo e(__('brand-idi1')); ?> 
                                    </li>
                                    <li class="margin-bottom--base">
                                        <i class="fas fa-play padding-right--medium pr-font-color--blue text--wrap"></i>
                                 <?php echo e(__('brand-idi2')); ?> 
                                    </li>
                                    <li class="margin-bottom--base">
                                        <i class="fas fa-play padding-right--medium pr-font-color--blue text--wrap"></i>
                                      <?php echo e(__('brand-idi3')); ?>  <a href="www.stickyposts.net" rel="noopener noreferrer" target="_blank">www.stickyposts.net</a>.
                                    </li>
                                    <li class="margin-bottom--base">
                                        <i class="fas fa-play padding-right--medium pr-font-color--blue text--wrap"></i>
                                          <?php echo e(__('brand-idi4')); ?>  
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="pr-content pr-story__body margin-top--large padding-top--large" id="attachments">
                        <div class="d-flex d-flex--horizontal justify-content-between margin-bottom--large d-flex--vertical-mobile">
                            <div class="pr-header--small pr-font-weight--bold margin-bottom--base pr-font-color--graphite">  <?php echo e(__('brand-iddiv1')); ?> </div>
                        </div>
                        <div class="pr-text--normal pr-text--mobile-small pr-font-color--graphite"> <?php echo e(__('brand-iddiv2')); ?>

                        </div>
                        <div class="d-flex d-flex--wrapped">
                            <div class="pr-attachment pr-attachment--half">
                                <div class="pr-border border--dotted margin-bottom--base newBackgroundRGBA">
                                    <div class="pr-attachment__image backgroundimageOnee">
                                    </div>
                                </div>
                                <div class="pr-header--xxsmall pr-font-weight--bold pr-font-color--graphite pr-attachment__title margin-bottom--small"><?php echo e(__('brand-iddiv3')); ?>

                                </div>
                                <div class="d-flex d-flex--horizontal justify-content-between start">
                                    <div class="pr-text--xsmall pr-font-color--dark-gray"><?php echo e(__('brand-iddiv4')); ?>

                                    </div>
                                    <a class="pr-text--xsmall" download="images/logo-1-2.png" href="images/logo-1-2.png" target="_blank"><i class="ion-ios-cloud-download-outline padding-right--small"></i><?php echo e(__('brand-ida1')); ?></a>
                                </div>
                            </div>
                            <div class="pr-attachment pr-attachment--half">
                                <div class="pr-border border--dotted margin-bottom--base">
                                    <div class="pr-attachment__image backgroundimageTwo"></div>
                                    </div>
                                    <div class="pr-header--xxsmall pr-font-weight--bold pr-font-color--graphite pr-attachment__title margin-bottom--small"><?php echo e(__('brand-iddiv5')); ?>

                                    </div>
                                    <div class="d-flex d-flex--horizontal justify-content-between start">
                                        <div class="pr-text--xsmall pr-font-color--dark-gray"><?php echo e(__('brand-iddiv6')); ?>

                                        </div>
                                        <a class="pr-text--xsmall" download="www.stickyposts.net/sticky/images/logo-s.png" href="www.stickyposts.net/sticky/images/logo-s.png" target="_blank">
                                            <i class="ion-ios-cloud-download-outline padding-right--small"></i> <?php echo e(__('brand-iddiv1')); ?>

                                        </a>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="pr-content">
                        <div class="pr-story__body margin-top--large pr-font-color--graphite">
                            <div class="margin-top--large">
                                <h2 class="pr-header--small"> <?php echo e(__('brand-idh23')); ?></h2>
                            </div>
                        </div>
                    </div>
                    <div class="pr-content">
                        <div class="pr-story__body margin-top--large pr-font-color--graphite">
                            <div class="margin-top--large">
                                <div class="pr-text--normal pr-text--mobile-small"><?php echo e(__('brand-iddiv7')); ?>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pr-content">
                        <div class="pr-story__body margin-top--large pr-font-color--graphite">
                            <div class="margin-top--large">
                                <div class="pr-header--small"> <?php echo e(__('brand-iddiv8')); ?>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pr-content">
                        <div class="pr-story__body margin-top--large pr-font-color--graphite">
                            <div class="margin-top--large">
                                <ul class="pr-guidelines listStyleType">
                                    <li class="pr-guidelines__box">
                                        <div class="pr-guidelines__image pr-border border--dotted sprite-dark-forest backgroundimageThree">
                                        </div>
                                        <div class="d-flex d-flex--horizontal justify-content-between">
                                            <div class="pr-text--xsmall"><?php echo e(__('brand-iddiv9')); ?>

                                            </div>
                                            <div class="pr-text--xsmall">
                                              <?php echo e(__('brand-iddiv10')); ?>

                                            </div>
                                        </div>
                                        <div class="d-flex d-flex--horizontal justify-content-between">
                                            <div class="pr-text--xsmall">RGB
                                            </div>
                                            <div class="pr-text--xsmall">22 34 33
                                            </div>
                                        </div>
                                        <div class="d-flex d-flex--horizontal justify-content-between">
                                            <div class="pr-text--xsmall">HEX
                                            </div>
                                            <div class="pr-text--xsmall">#162221
                                            </div>
                                        </div>
                                        <div class="d-flex d-flex--horizontal justify-content-between margin-bottom--large">
                                            <div class="pr-text--xsmall">Pantone
                                            </div>
                                            <div class="pr-text--xsmall">5467C
                                            </div>
                                        </div>
                                    </li>
                                    <li class="pr-guidelines__box" >
                                        <div class="newBackgroundRGBA">
                                            <div class="pr-guidelines__image pr-border border--dotted sprite-dark-forest backgrouindimageFour">
                                        </div>    
                                        </div>
                                        <div class="d-flex d-flex--horizontal justify-content-between">
                                            <div class="pr-text--xsmall"><?php echo e(__('brand-iddiv9')); ?>

                                            </div>
                                            <div class="pr-text--xsmall">
                                               <?php echo e(__('brand-iddiv11')); ?>

                                            </div>
                                        </div>
                                        <div class="d-flex d-flex--horizontal justify-content-between">
                                            <div class="pr-text--xsmall">RGB
                                            </div>
                                            <div class="pr-text--xsmall">255 255 255
                                            </div>
                                        </div>
                                        <div class="d-flex d-flex--horizontal justify-content-between">
                                            <div class="pr-text--xsmall">HEX
                                            </div>
                                            <div class="pr-text--xsmall">#fffff
                                            </div>
                                        </div>
                                        <div class="d-flex d-flex--horizontal justify-content-between margin-bottom--large">
                                            <div class="pr-text--xsmall">Pantone
                                            </div>
                                            <div class="pr-text--xsmall">5467C
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="pr-content">
                        <div class="pr-story__body margin-top--large pr-font-color--graphite">
                            <div class="margin-top--large">
                                <div class="pr-header--small">
                                      <?php echo e(__('brand-iddiv12')); ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="pr-content">
                        <div class="pr-story__body margin-top--large pr-font-color--graphite"><div class="margin-top--large"><div class="pr-text--normal pr-text--mobile-small"><?php echo e(__('brand-iddiv13')); ?></div></div></div></div>
                    <div class="pr-content">
                        <div class="pr-story__body margin-top--large pr-font-color--graphite"><div class="margin-top--large"><img class="pr-story-element__image" src="https://stickyposts.net/sticky/images/logo-1-1.png"></div></div>
                    </div>
                    <div class="pr-content">
                        <div class="pr-story__body margin-top--large pr-font-color--graphite"><div class="margin-top--large"><div class="pr-header--small"><?php echo e(__('brand-iddiv14')); ?></div></div></div>
                    </div>
                    <div class="pr-content">
                        <div class="pr-story__body margin-top--large pr-font-color--graphite"><div class="margin-top--large">
                            <div class="pr-text--normal pr-text--mobile-small">
                        <?php echo e(__('brand-iddiv15')); ?>    
                        </div>
                        </div></div>
                    </div>
                    <div class="pr-content">
                        <div class="pr-story__body margin-top--large pr-font-color--graphite"><div class="margin-top--large">
                            <img class="pr-story-element__image" src="https://stickyposts.net/sticky/logo-s.png"></div></div>
                    </div>
                    <div class="pr-content mt-4 text-white backgroundColorPadding">
                        <h3 class="contact-h3 text-center marginBottom">  <?php echo e(__('brand-idh32')); ?> </h3>
                        <p> <?php echo e(__('brand-idp1')); ?></p>
                        <h3>
                        <?php echo e(__('brand-idh33')); ?>

                        </h3>
                        <p class="margin0">Marketing@stickyposts.net</p>
                        <p> <?php echo e(__('brand-idp2')); ?></p>
                        <form class="form-redirect brand-guideline">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <label class="margin0"> <span class="text-danger">*</span><?php echo e(__('fullname')); ?></label>
                                    <input type="text" name="name" class="form-control" required>
                                </div>

                                <div class="col-md-6 col-12">
                                    <label class="margin0"> <span class="text-danger">*</span><?php echo e(__('cont-idlab3')); ?></label>
                                    <input type="email" name="email" class="form-control" required>
                                </div>
                                <div class="col-md-6 col-12 mb-6">

                                    <label class="margin0"> <span class="text-danger">*</span><?php echo e(__('cont-idlab6')); ?></label>
                                    <select class="form-control py-0" name="country">
                                        <?php echo $__env->make('sticky.layout.partials.helpers.countries', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                                    </select>

                                </div>
                                <div class="col-md-6 col-12">
                                    <label class="margin0"> <span class="text-danger">*</span><?php echo e(__('cont-idlab4')); ?></label>
                                    <input type="text" name="phone" class="form-control" required>

                                </div>

                                <div class="col-md-12 col-12">
                                    <label class="margin0"> <span class="text-danger">*</span><?php echo e(__('cont-idlab7')); ?></label>
                                    <textarea class="form-control" id="message_contact1" rows="5" name="message" required></textarea>

                                </div>
                                <div class="col-md-12">
                                    <label class="newFontSize"> ( <span class="text-danger">*</span> )  <?php echo e(__('brand-idlabel1')); ?></label>  
                                </div>
                                <div class="col-md-4 mt-5 subscribe_form boxShadow-none">
                                <span class="input-group-btn">
                                    <button class="btn btn-default borderRadious3" type="submit" name=""> <?php echo e(__('brand-idbtn1')); ?></button>
                                </span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>    
  </div>
<?php $__env->stopSection(); ?>



<?php $__env->startPush('scripts'); ?>
<?php echo $__env->make('sticky.layout.partials.common.sweetalert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('sticky.layout.partials.common.inboundLeadScript',['selector'=>'.brand-guideline','type'=>'brandGuideLine'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('sticky.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Laravel-Projects\StickyPost2\inc\themes\frontend\pure\views/sticky/pages/brand_guideline.blade.php ENDPATH**/ ?>