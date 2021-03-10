

<?php $__env->startPush('head'); ?>
    <script type="text/javascript">
        var token = '<?php echo e($CI->security->get_csrf_hash()); ?>',
            PATH = '<?php echo e(_e(PATH)); ?>',
            BASE = '<?php echo e(_e(BASE)); ?>';

        document.onreadystatechange = function () {
            var state = document.readyState
            if (state == 'complete') {
                setTimeout(function () {
                    document.getElementById('interactive');
                    document.getElementById('loading-overplay').style.opacity = "0";
                }, 500);

                setTimeout(function () {
                    document.getElementById('loading-overplay').style.display = "none";
                    document.getElementById('loading-overplay').style.opacity = "1";
                }, 1000);
            }
        }
    </script>
     <style>
                    .login-page .login-main .login-box {
                        min-height: 0px;

                    }
                    .login-page{
                        height: 100% !important;
                    }

                     .site-header{
                        background:linear-gradient(-145deg, #320b82 0%, #9c33c3 100%);
                        }
                    .h-30{
                        height:30px;
                    }
                    .login-bg{
                        background:url('https://stickyposts.net/inc/themes/frontend/pure/assets/img/bg.jpg') ;
                        height: 100%;
                        background-size: contain;
                        background-position: center;

                    }
                    .pos-text-abs{
                            position: absolute;
                            top: 45%;
                            left: 10%;
                            right: 10%;
                    }
                    .lh-15{
                        line-height:1.5;
                    }
                </style>
<?php $__env->stopPush(); ?>


<?php $__env->startSection('body'); ?>
   <div class="container-fluid p-0">

    <div class="row justify-content-center">
     <div class="col-md-6 my-5">
        <div class="login-page d-flex justify-content-center mt-md-0 mt-5">
            <div class="login-main px-md-0 px-4">

                <div class="login-box">
                    <div class="login-logo pt-md-4">
                        <a href="<?php _e(get_url()) ?>">
                            <img src="https://stickyposts.net/sticky/images/logo-1-1.png" class="w-75 text-center">
                        </a>
                    </div>
                    <div class="login-form">
                        <form class="actionLogin" action="<?php _e(get_module_url('ajax_login', $loader)) ?>"
                              data-hide-overplay='false'
                              data-redirect="https://stickyposts.net/payment">
                            <div class="form-group">
                                <div class="input-group mb-3"  style="<?php echo e(getCurrentLangIdiom() == 'ar' ? 'direction:ltr'  : ''); ?>">
                                    <div class="input-group-prepend">
						    	<span class="input-group-text">
						    		<i class="far fa-envelope"></i>
						    	</span>
                                    </div>
                                    <input type="email" class="form-control h-30" name="email" autocomplete="off"
                                           placeholder="<?php _e('Email') ?>">
                                </div>

                                <div class="input-group" style="<?php echo e(getCurrentLangIdiom() == 'ar' ? 'direction:ltr'  : ''); ?>">
                                    <div class="input-group-prepend">
						    	<span class="input-group-text">
						    		<i class="fas fa-lock"></i>
						    	</span>
                                    </div>
                                    <input type="password" class="form-control h-30" name="password" autocomplete="off"
                                           placeholder="<?php _e('Password') ?>">
                                </div>
                            </div>

                            <div class="form-group wrap-m mx-0 row">

                                <div class="wrap-c p-0 <?php echo e(getCurrentLangIdiom() == 'ar' ? 'text-right'  : ' text-left'); ?>  col-md-6 col-6">
                                    <label class="i-checkbox i-checkbox--tick i-checkbox--brand m-r-10">
                                        <input type="checkbox" name="remember" value="1"> <?php _e('Remember me') ?>
                                        <span></span>
                                    </label>
                                </div>

                                <div class="wrap-c fs-12 p-0 <?php echo e(getCurrentLangIdiom() == 'ar' ? 'text-left'  : ' text-right'); ?>  col-md-6 col-6">
                                    <a href="<?php _e(get_url("forgot_password")) ?>"
                                       alt=""><?php _e('Forget password?') ?></a>
                                </div>
                            </div>

                            <?php if (get_option('google_recaptcha_status', 0)) { ?>
                            <div class="g-recaptcha  m-b-15"
                                 data-sitekey="<?= get_option('google_recaptcha_site_key', '') ?>"></div>
                            <?php } ?>

                            <span class="show-message"></span>

                            <div class="text-center">
                                <button type="submit" class="btn btn-info rounded-pill m-t-20 btn-loading d-none">
                                <span class="spinner-border spinner-border-sm" role="status"
                                      aria-hidden="true"></span> <?php _e('Sign In') ?>
                                </button>
                                <button type="submit" class="btn btn-block" style="background:#9c33c3;color:#fff"><i
                                            class="fas fa-sign-in-alt"></i> <?php _e('Sign In') ?> </button>
                            </div>
                            <?php if (get_option('facebook_login_status', 0) || get_option('google_login_status',
                                0) || get_option('twitter_login_status', 0)) { ?>
                            <div class="login-social m-t-20">
                                <div class="desc text-center m-b-20 fs-12"><?php _e('Or signin using') ?></div>
                                <?php if (get_option('facebook_login_status', 0)) { ?>
                                <a href="<?php _e(get_url("login/facebook")) ?>"
                                   class="btn btn-block btn-facebook text-left"><i
                                            class="fab fa-facebook-f"></i> <?php _e("Sign In with Facebook") ?></a>
                                <?php } ?>
                                <?php if (get_option('google_login_status', 0)) { ?>
                                <a href="<?php _e(get_url("login/google")) ?>"
                                   class="btn btn-block btn-google text-left"><img
                                            src="<?php _e(get_theme_frontend_url('assets/img/google-logo.png')) ?>"> <?php _e("Sign In with Google") ?>
                                </a>
                                <?php } ?>
                                <?php if (get_option('twitter_login_status', 0)) { ?>
                                <a href="<?php _e(get_url("login/twitter")) ?>"
                                   class="btn btn-block btn-twitter text-left"><i
                                            class="fab fa-twitter"></i> <?php _e("Sign In with Twitter") ?></a>
                                <?php } ?>
                            </div>
                            <?php } ?>
                        </form>
                    </div>

                </div>
                <?php if (get_option("signup_status", 1)) { ?>
                <div class="signup-ask text-center mt-4">
                    <?php _e("Don't have an account yet?") ?> <a
                            href="<?php _e(get_url("signup")) ?>"><?php _e('Sign Up') ?></a>
                </div>
                <?php } ?>

            </div>
        </div>

     </div>
     <div class="col-md-6 d-lg-block d-none">
        <div class="login-bg">


        <div class="text-center pos-text-abs">
            <h4 class="font-weight-bold text-center text-white lh-15"><?php echo e(__('reg-h1-text')); ?>

            <?php echo e(__('reg-h1-text2')); ?></h4>
        </div>
     </div>
    </div>
    </div>

   </div>
<?php $__env->stopSection(); ?>


<?php $__env->startPush('scripts'); ?>

    <script src="<?php echo e(_e(get_theme_frontend_url('assets/js/core.js'))); ?>"></script>
    <script src="<?php echo e(_e(get_theme_frontend_url('assets/js/pure.js'))); ?>"></script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('sticky.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Laravel-Projects\StickyPost2\inc\themes\frontend\pure\views/sticky/pages/sginin.blade.php ENDPATH**/ ?>