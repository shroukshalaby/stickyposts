<?php $__env->startSection('title','Sticky posts - Register' ); ?>

<?php $__env->startPush('head'); ?>
    <style>
  
    .actionRegister{
        padding:13px 20px;
    }
      .actionRegister .form-control{
          height:30px !important;
          padding:0px .75rem !important;
      }
        @media (max-width: 567px) {
            .oauth-wrap {
                top: 7% !important;
                left: 0% !important;
            }

            .flex-accordion {
                height: auto !important;

            }

            .flex-accordion ul li.is-open {
                height: 560px;
            }
        }

        .flex-accordion {
            width: 100%;
            height: 500px;
            padding: 10px 0;
        }

        #content {
            width: 100% !important;
            padding-bottom: 0 !important;
            height:100%;
        }

        .custom-control {
            display: flex;
            align-items: center;
        }

        .custom-control-label {
            line-height: 1.3;
        }

        .custom-control-label::before {
            right: 0;
            left: -25px;
            top: 0;
        }
        .custom-control-label::after{
         top: 0px;
         left: -25px;   
        }
        .pure-checkbox input[type="checkbox"] + label:before, .pure-radiobutton input[type="checkbox"] + label:before, .pure-checkbox input[type="radio"] + label:before, .pure-radiobutton input[type="radio"] + label:before {
            top: 50%;
        }

        .oauth-wrap .oauth-form .nav-tabs li {
            padding: 0px !important;
        }

        .oauth-wrap .oauth-form .nav-tabs li > a {
            padding: 2px;
            border-radius: 5px 5px 0px 0px;
        }

        
        @media (min-width: 567px) {
            body {
                font-size: 16px;
                color: #777b92;
            }

            a:active,
            a:hover,
            a:focus,
            a:visited {
                text-decoration: none;
            }

            .page-wrapper {
                position: relative;
                margin: 0 auto;
                width: 100%;
                min-width: 300px;
            }


            hr.style-one {
                margin: 0;
                border-top: 1px solid #EAEAEA;
            }

            .block-title {
                margin-bottom: 15px;
            }

            .block-title h2 {
                margin: 0;
                color: #320b82;
                font-size: 46px;
                margin-top: 10px;
                font-weight: 400;
            }

            .preloader {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                z-index: 9999;
                background-color: #fff;
            }

            .scroll-to-top {
                display: inline-block;
                width: 45px;
                height: 45px;
                background: #320b82;
                border-radius: 4px;
                position: fixed;
                bottom: 20px;
                right: 20px;
                z-index: 99;
                text-align: center;
                transition: all .4s ease;
                display: none;
            }

            .scroll-to-top i {
                font-size: 18px;
                line-height: 45px;
                color: #fff;
            }

            .scroll-to-top:hover {
                background: #273167;
            }

            .header-navigation {
                background-color: transparent;
                margin-bottom: 0;
                border: none;
                border-radius: 0;
                padding: 7px 0;
                position: relative;
                background-color: transparent;
            }

            .header-navigation .container {
                background: transparent;
                position: relative;
                display: block;
            }

            .header-navigation .container .navbar-brand {
                height: auto;
                margin: 0;
            }

            .header-navigation .container .menu-toggler {
                display: none;
            }

            .header-navigation .container .right-side-box {
                position: absolute;
                top: 50%;
                -webkit-transform: translateY(-50%);
                transform: translateY(-50%);
                right: 15px;
            }

            .header-navigation .main-navigation {
                float: right;
                text-align: right;
            }

            @media (min-width: 1200px) {
                .header-navigation .main-navigation {
                    display: block !important;
                }
            }

            .header-navigation ul.navigation-box {
                margin: 0;
                padding: 0;
                list-style: none;
                display: flex;
                align-items: center;
            }

            .header-navigation ul.navigation-box li a .sub-nav-toggler {
                display: none;
            }

            .header-navigation ul.navigation-box > li {
                position: relative;
                padding: 0px 0;
                display: inline-block;
                vertical-align: middle;
                /* Second Level Menu */
                /* Thrid Level Menu */
            }

            .header-navigation ul.navigation-box > li:first-child {
                padding-left: 0;
            }

            .header-navigation ul.navigation-box > li:last-child {
                padding-right: 0;
            }

            .header-navigation ul.navigation-box > li > a {
                font-weight: 500;
                font-size: 16px;
                color: #777B92;
                padding: 0;
                transition: all .4s ease;
                position: relative;
            }

            .header-navigation ul.navigation-box > li.current > a:before, .header-navigation ul.navigation-box > li:hover > a:before {
                -webkit-transform: scale(1, 1);
                transform: scale(1, 1);
                -webkit-transform-origin: left center;
                transform-origin: left center;
            }

            .header-navigation ul.navigation-box > li > .sub-menu {
                position: absolute;
                top: 100%;
                left: 0;
                z-index: 1000;
                float: left;
                min-width: 220px;
                padding: 0px 0px;
                text-align: left;
                list-style: none;
                background-color: #273167;
                background-clip: padding-box;
                opacity: 0;
                border-radius: 0px;
                visibility: hidden;
                transition: opacity .4s ease, visibility .4s ease;
                box-shadow: 0px 10px 18px rgba(0, 0, 0, 0.1);
            }

            @media (min-width: 1200px) {
                .header-navigation ul.navigation-box > li > .sub-menu {
                    display: block !important;
                }
            }
            .header-navigation ul.navigation-box > li > .sub-menu.right-align {
                left: auto;
                right: 0;
            }

            .header-navigation ul.navigation-box > li > .sub-menu.center-align {
                left: 50%;
                -webkit-transform: translateX(-50%);
                transform: translateX(-50%);
            }

            .header-navigation ul.navigation-box > li > .sub-menu > li {
                display: block;
                position: relative;
                transition: all .4s ease;
            }

            .header-navigation ul.navigation-box > li > .sub-menu > li + li {
                border-top: 1px solid rgba(255, 255, 255, 0.1);
            }

            .header-navigation ul.navigation-box > li > .sub-menu > li > a {
                font-size: 15px;
                color: #fff;
                font-weight: 500;
                padding: 12px 30px;
                display: block;
                line-height: 26px;
                white-space: nowrap;
                position: relative;
                transition: all .4s ease;
            }

            .header-navigation ul.navigation-box > li > .sub-menu > li:hover > a {
                color: #273167;
                background: #fff;
            }

            .header-navigation ul.navigation-box > li:hover:before {
                -webkit-transform: scale(1, 1);
                transform: scale(1, 1);
                -webkit-transform-origin: left bottom;
                transform-origin: left bottom;
            }

            .header-navigation ul.navigation-box > li:hover > .sub-menu {
                opacity: 1;
                visibility: visible;
            }

            .header-navigation ul.navigation-box > li > ul > li {
                /* no more nested showen */
            }

            .header-navigation ul.navigation-box > li > ul > li > .sub-menu {
                position: absolute;
                top: 0%;
                left: 100%;
                z-index: 1000;
                float: left;
                min-width: 220px;
                padding: 0px 0px;
                text-align: left;
                list-style: none;
                background-color: #273167;
                background-clip: padding-box;
                opacity: 0;
                border-radius: 0px;
                visibility: hidden;
                transition: opacity .4s ease, visibility .4s ease;
                box-shadow: 0px 10px 18px rgba(0, 0, 0, 0.1);
            }

            @media (min-width: 1200px) {
                .header-navigation ul.navigation-box > li > ul > li > .sub-menu {
                    display: block !important;
                }
            }
            .header-navigation ul.navigation-box > li > ul > li > .sub-menu.right-align {
                left: auto;
                right: 100%;
            }

            .header-navigation ul.navigation-box > li > ul > li > .sub-menu.center-align {
                left: 50%;
                -webkit-transform: translateX(-50%);
                transform: translateX(-50%);
            }

            .header-navigation ul.navigation-box > li > ul > li > .sub-menu > li {
                display: block;
                position: relative;
                transition: all .4s ease;
            }

            .header-navigation ul.navigation-box > li > ul > li > .sub-menu > li + li {
                border-top: 1px solid rgba(255, 255, 255, 0.1);
            }

            .header-navigation ul.navigation-box > li > ul > li > .sub-menu > li > a {
                font-size: 15px;
                color: #fff;
                font-weight: 500;
                padding: 12px 30px;
                display: block;
                line-height: 26px;
                white-space: nowrap;
                position: relative;
                transition: all .4s ease;
            }

            .header-navigation ul.navigation-box > li > ul > li > .sub-menu > li:hover > a {
                color: #273167;
                background: #fff;
            }

            .header-navigation ul.navigation-box > li > ul > li:hover > .sub-menu {
                opacity: 1;
                visibility: visible;
            }

            .header-navigation ul.navigation-box > li > ul > li ul {
                display: none;
            }

            .header-navigation.stricky-fixed {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                z-index: 991;
                background: #273167;
                border-bottom: 0;
            }

            

            .site-header.header-one .header-navigation ul.navigation-box > li.current > a,
            .site-header.header-one .header-navigation ul.navigation-box > li:hover > a {
                color: #E94FCA;
            }

            .site-header.header-one .header-navigation .header-btn {
                vertical-align: middle;
                border-radius: 5px;
                background-color: white !important;
                color: #320B82 !important;
                font-size: 16px;
                font-weight: 500;
                padding: 2px 6px 3px !important;
                line-height: 1.3;
            }

            .site-header.header-one .header-navigation.stricky-fixed ul.navigation-box > li {
                padding: 3px 0;
            }

            .site-header.home-page-two .header-navigation.stricky-fixed {
                background-image: linear-gradient(-145deg, #320b82 0%, #9c33c3 100%);
                box-shadow: 0px 10px 60px 0px rgba(0, 0, 0, 0.15);
            }

            .site-header.home-page-two .header-navigation ul.navigation-box > li > a {
                color: #fff;
            }

            .site-header.home-page-two .header-navigation ul.navigation-box > li.current > a,
            .site-header.home-page-two .header-navigation ul.navigation-box > li:hover > a {
                color: #fff;
            }

            .site-header.home-page-two .header-navigation .right-side-box .header-btn:hover {
                color: #fff;
                background-color: #E94FCA;
                border-color: #E94FCA;
            }

        }

        .nav-tabs .nav-link {
            border: none;
        }

        .oauth-wrap .oauth-form .nav-tabs .active {
            color: #fff;
        }

        #myTab1 .active {
            background: linear-gradient(90deg, #33a3fb, #7c07bd)
        }

        #myTab2 .active {
            background: linear-gradient(90deg, #FF9800, #f8f900)
        }

        #myTab3 .active {
            background: linear-gradient(90deg, #369e36, #c2fc03)
        }

        #myTab4 .active {
            background: linear-gradient(90deg, #e09d0d, #d707f3)
        }

        label {
            direction: ltr;
        }

        .pure-checkbox {
            font-size: 15px;
        }

        .lds-ring {
            display: inline-block;
            position: relative;
            width: 80px;
            height: 80px;
        }

        .lds-ring img {
            box-sizing: border-box;
            display: block;
            position: absolute;
            width: 64px;
            height: 64px;
            margin: 8px;
            border-radius: 50%;
            animation: lds-ring 1.2s cubic-bezier(0.5, 0, 0.5, 1) infinite;
            border-color: #fff transparent transparent transparent;
        }

        @keyframes  lds-ring {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }

        .model-tabs {
            background-color: #f3eaf7;
            padding: 2px 11px;
            border-radius: 3px;
        }

        .line-h-2 {
            line-height: 2;
        }

        .line-h-1 {
            line-height: 1.8;
        }

        .alig-it {
            align-items: center;
        }

        .colo-r {
            color: red;
        }

        .f-s-15 {
            font-size: 15px;
        }

        .f-s-10 {
            font-size: 10px;
        }

        .m-0 {
            margin: 0;
        }

        .t-d-u {
            text-decoration: underline;

        }

        .color-b {
            color: #673ab7;
        }

        .f-w-b {
            font-weight: bold;
        }

        .back-l {
            background: linear-gradient(90deg, #320b82, #9c33c3);
        }

        .m-a {
            margin: auto;
        }

        .bor-n {
            border: none;
        }

        .colo-w {
            color: white;
        }

        .pad-12 {
            padding: 12px;
        }

        .hei-36 {
            height: 36px;
        }

        .pad-20-10 {
            padding: 20px 10px;
        }

        .m-15-0 {
            margin: 15px 0;
        }

        .text-ali {
            text-align: center;
        }

        .dis-n {
            display: none;
        }

        .mar-t-4 {
            margin-top: 4px;
        }

        .backg {
            background: rgba(0, 0, 0, 0.7);
        }

        .pad-t-60 {
            padding-top: 40px;
        }

        .close-btn {
            position: absolute;
            top: 18px;
            right: 12px;
        }

        .logo {
            width: 49px;
            z-index: 10;
        }

        .colo-y {
            color: #f9c412;
        }

        .dir-l {
            direction: ltr;
        }

        .f-s-12 {
            font-size: 12px;
        }

        .hei-24 {
            height: 24px;
        }

        .just-cont-c {
            justify-content: center;
        }

        .just-cont-sp {
            justify-content: space-between;
        }

        .wid-100 {
            width: 100%;
        }

        .dis-f {
            display: flex;

        }

        .flex-dir-c {
            flex-direction: column;
        }

        .hei-35 {
            height: 35px;

        }

        .bor-r-5 {
            border-radius: 5px;
        }

        .f-s-r {
            font-size: 1.5rem;
        }

        .f-w-600 {
            font-weight: 600;
        }

        .backg-w {
            background: #f9c412 !important;
        }

        .mar-r-15 {
            margin-right: 15px;
        }

        .mar-l-15 {
            margin-left: 15px;
        }

        .wid-192 {
            width: 192px;
        }

        .text-mauv-footer {
            color: #320b82 !important;
            font-weight: 800;
            margin-top: 5rem;
        }

        label {
            margin-bottom: 0;
        }
        #pills-register{
            border-radius: 30px;
            font-family: Cairo;
            color: #FFFFF0;
            background: linear-gradient(90deg,#320b82, #9c33c3 );

        }


    </style>
    <script type="text/javascript">
        var token = '<?php echo e($CI->security->get_csrf_hash()); ?>',
            PATH = '<?php echo e(_e(PATH)); ?>',
            BASE = '_e(BASE)';

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
     .sticky-active-background{
        background: linear-gradient(90deg,#320b82, #9c33c3 )!important;
        color: #fff!important;
        border:none;
    }
    .autoactivity-active-background{
        background: linear-gradient(90deg, #e09d0d, #d707f3)!important;
        color: #fff!important;
        border:none;
    }
    .analyze-active-background{
        background: linear-gradient(90deg, #7c07bd, #33a3fb)!important;
        color: #fff!important;    
        border:none;
    }
    .family-active-background{
        background: linear-gradient(90deg, #FF9800, #f8f900)!important;
        color: #000!important;
        border:none;
    }
    .btn-group{
        background:#ccc;
        border:none;
        border-bottom: 5px solid #4b1591;
        margin-bottom: 3px;
        flex-wrap:wrap;
    }
    .btn-group .btn{
        border-radius:0!important;
        padding: 9px;
        font-size: 19px;
    }
    .p-15{
        padding:15px;
    }
    .btn.focus, .btn:focus {
        outline: 0;
        box-shadow: none;
    }
    .btn-register{
        background: linear-gradient(90deg,#320b82, #9c33c3 );
        color: #FFFFF0;
        border:none;
        font-size: 20px;
    }
    @media(max-width:567px){
        .btn-group .btn {
            font-size: 16px;
            width: 100%;
        }
        .text-mauv-footer {
            padding: 0px 15px;
            text-align: left!important;
        }
    }
</style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('body'); ?>

    <div class="text-center">
        <h5 class="text-mauv-footer text-center main-title line-h-2">
            <?php echo e(__('reg-h1-text')); ?>

            <br>
            <?php echo e(__('reg-h1-text2')); ?>

        </h5>
    </div>
    
    <div class="container-fluid px-md-1 px-0">
     <div class="row mx-0 my-md-5 my-3 justify-content-center text-center">
        <div class="col-md-6 col-12 mx-auto">
          <div class="box_shadow p-15">
            <div class="btn-group btn-group-toggle w-100" data-toggle="buttons">
              <label id="btnSticky"   class="btn active sticky-active-background" onclick="ChangeBg(this.id)"><input type="radio" name="options" id="option1" autocomplete="off" checked> <?php echo e(__('stickyposts')); ?></label>
              <label id="btnAuto"     class="btn" onclick="ChangeBg(this.id)"> <input type="radio" name="options" id="option2" autocomplete="off"> <?php echo e(__('b_AutoActivity')); ?> </label>
              <label id="btnAnalyzer" class="btn" onclick="ChangeBg(this.id)"> <input type="radio" name="options" id="option3" autocomplete="off"> <?php echo e(__('b_Competitors')); ?> </label>
              <label id="btnFamily"   class="btn" onclick="ChangeBg(this.id)"> <input type="radio" name="options" id="option4" autocomplete="off"> <?php echo e(__('b_FamilyService')); ?> </label>
            </div>
            <form action="/pure/ajax_register" data-hide-overplay="false" data-redirect="https://stickyposts.net/payment" class="actionRegister form sticky-active-background">
                <div class="row">
                    <div class="col-md-6 col-12">
                     <div class="form-group m-0 <?php echo e(getCurrentLangIdiom() == 'ar' ? ' text-right'  : 'text-left'); ?>">
                        <label for="fullname"><span class="colo-r">*</span> <?php echo e(__('reg-label-text6')); ?> </label>
                        <input type="text" class="form-control" id="fullname"  name="fullname" required="">
                     </div>
                    </div>
                    <div class="col-md-6 col-12">
                     <div class="form-group m-0 <?php echo e(getCurrentLangIdiom() == 'ar' ? ' text-right'  : 'text-left'); ?>">
                        <label for="lastname"><span
                                    class="colo-r">*</span> <?php echo e(__('reg-label-text7')); ?>

                        </label>
                        <input type="text" class="form-control" id="lastname" name="lastname" required="">
                     </div>
                    </div>
                    <div class="col-md-6 col-12">
                     <div class="form-group m-0 <?php echo e(getCurrentLangIdiom() == 'ar' ? ' text-right'  : 'text-left'); ?>">
                        <label for="email"> <span class="colo-r f-s-15">*</span> <?php echo e(__('reg-label-text8')); ?></label>
                        <input type="email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" value="" name="email" required="">
                     </div>
                    </div>
                    <div class="col-md-6 col-12">
                     <div class="form-group m-0 <?php echo e(getCurrentLangIdiom() == 'ar' ? ' text-right'  : 'text-left'); ?>">
                        <label for="pwd"><span class="colo-r f-s-15">*</span> <?php echo e(__('reg-label-text9')); ?> </label>
                        <input type="password" class="form-control password" name="password">
                     </div>
                    </div>
                    <div class="col-md-6 col-12">
                     <div class="form-group m-0 <?php echo e(getCurrentLangIdiom() == 'ar' ? ' text-right'  : 'text-left'); ?>">
                        <label for=""><span
                                    class="colo-r">*</span> <?php echo e(__('reg-label-text10')); ?>

                        </label>
                        <select class="form-control" name="country" required="">
                            <?php echo $__env->make('sticky.layout.partials.helpers.countries', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </select>
                    </div>
                    </div>
                    <div class="col-md-6 col-12">
                     <div class="form-group m-0 <?php echo e(getCurrentLangIdiom() == 'ar' ? ' text-right'  : 'text-left'); ?>">
                        <label for="activeCode"> <span class="colo-r f-s-15">*</span> <?php echo e(__('reg-label-text11')); ?></label>
                        <input type="text" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" value="" name="activeCode" required="">
                     </div>
                    </div>
                    <div class="col-md-12 col-12 text-start">
                      <div class="row">
                          <div class="col-12 mt-2">
                             <label class="<?php echo e(getCurrentLangIdiom() == 'ar' ? 'w-100 text-right'  : 'text-left'); ?>" for=""> <?php echo e(__('reg-p-text12')); ?></label>
                          </div>
                           <div class="col-md-6 col-12">
                            <div class="form-group <?php echo e(getCurrentLangIdiom() == 'ar' ? ' text-right'  : 'text-left'); ?> mb-0">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" id="yesCheck" name="yesno" value="resources">
                                <label class="custom-control-label pure-checkbox" for="yesCheck"> <?php echo e(__('reg-p-text13')); ?>   </label>
                            </div>
                        </div>   
                          </div>
                           <div class="col-md-6 col-12">
                            <div class="checkbox text-start">
                            <div class="pure-checkbox grey mb-1 w-100">
                                <input type="checkbox" id="md_checkbox_schedule" name="terms" class="filled-in chk-col-red enable_instagram_schedule" value="on" required="">
                                    <span class="checkbox-text-left mx-1">  <?php echo e(__('reg-span-text14')); ?> 
                                    <a href="<?php echo e(get_url('terms')); ?>" class="t-d-0 colo-b f-w-b"> <?php echo e(__('reg-a-text15')); ?></a>
                                    </span>
                                <label class="p0 m0"  for="md_checkbox_schedule">&nbsp;</label>
                            </div>
                        </div>    
                          </div>
                      </div>    
                    </div>
                    <div class="col-12">
                        <p class="f-s-10 text-white m-0 <?php echo e(getCurrentLangIdiom() == 'ar' ? ' text-right'  : 'text-left'); ?>">
                            <span class="colo-r f-s-15">(*)</span> <?php echo e(__('reg-p-text11')); ?>

                        </p>
                    </div>
                 
                    <div class="text-center col-12">
                        <button type="submit" class="btn btn-block mt-0 btn-loading d-none mx-auto col-sm-6 col-md-5 col-lg-5 col-xl-5 btn-register">
                                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> <?php echo e(__('reg-btn-text48')); ?>

                        </button>
                        <button type="submit" class="btn btn-block mt-0 btn-no-loading mx-auto col-sm-6 col-md-5 col-lg-5 col-xl-5 btn-register">
                               <i class="fas fa-sign-in-alt"></i> <?php echo e(__('reg-btn-text48')); ?>

                        </button>
                    </div>

                </div>
                
            </form>
            <div class="row text-center justify-content-center">
                <span class="show-message"></span>
            </div>
          </div>    
        </div>
        <div class="col-md-6 d-none d-lg-block">
            <div class="card-container box_shadow" style="padding: 15px;" id="content">
                <div class="card-header text-center text-dark py-2" style="background:linear-gradient(90deg,#320b82,#9c33c3);">
                    <h3 style="margin: 0;color:#fff"><?php echo e(__('stickyposts')); ?></h3>
                </div> 
                <div class="row align-items-center">
                 <div class="col-md-6 py-2">
                    <img src="../../portal.png" class="w-100">  
                 </div>
                 <div class="col-md-6 px-2 text-start text-black">
                    <div class="stack__card__content">
                        <h2 class="stack__card__title"><?php echo e(__('reg-h2-text71')); ?></h2>
                        <p><?php echo e(__('reg-p-text72')); ?></p>
                    </div>   
                 </div>
                </div>
            </div>
        </div>
     </div>    
   </div>

    <div id="alert"></div>

<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
    <script src="<?php echo e(_e(get_theme_frontend_url('assets/js/core.js'))); ?>"></script>
    <script src="<?php echo e(_e(get_theme_frontend_url('assets/js/pure.js'))); ?>"></script>
    <script>
               function ChangeBg(clicked_id) {
                  var str = clicked_id;
                  if(str=="btnSticky"){
                    $("#btnSticky").addClass("sticky-active-background");
                    $("#btnAuto").removeClass("autoactivity-active-background");
                    $("#btnAnalyzer").removeClass("analyze-active-background");
                    $("#btnFamily").removeClass("family-active-background");
                    $(".actionRegister").addClass("sticky-active-background");
                    $(".actionRegister").removeClass("autoactivity-active-background");
                    $(".actionRegister").removeClass("family-active-background");
                    $(".actionRegister").removeClass("analyze-active-background");

                   
                  }
                  else if(str=="btnAuto"){
                    $("#btnAuto").addClass("autoactivity-active-background");
                    $("#btnSticky").removeClass("sticky-active-background");
                    $("#btnAnalyzer").removeClass("analyze-active-background");
                    $("#btnFamily").removeClass("family-active-background");
                    $(".actionRegister").addClass("autoactivity-active-background");
                    $(".actionRegister").removeClass("sticky-active-background");
                    $(".actionRegister").removeClass("analyze-active-background");
                    $(".actionRegister").removeClass("family-active-background");

                  }
                   else if(str=="btnAnalyzer"){
                    $("#btnAnalyzer").addClass("analyze-active-background");
                    $("#btnSticky").removeClass("sticky-active-background");
                    $("#btnAuto").removeClass("autoactivity-active-background");
                    $("#btnFamily").removeClass("family-active-background");
                    $(".actionRegister").addClass("analyze-active-background");
                    $(".actionRegister").removeClass("sticky-active-background");
                    $(".actionRegister").removeClass("autoactivity-active-background");
                    $(".actionRegister").removeClass("family-active-background");

                  }
                  else {
                    $("#btnFamily").addClass("family-active-background");
                    $("#btnSticky").removeClass("sticky-active-background");
                    $("#btnAuto").removeClass("autoactivity-active-background");
                    $("#btnAnalyzer").removeClass("analyze-active-background");
                    $(".actionRegister").addClass("family-active-background");
                    $(".actionRegister").removeClass("sticky-active-background");
                    $(".actionRegister").removeClass("analyze-active-background");
                    $(".actionRegister").removeClass("autoactivity-active-background");

                  }
               }
            </script>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('sticky.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Laravel-Projects\StickyPost2\inc\themes\frontend\pure\views/sticky/pages/register.blade.php ENDPATH**/ ?>