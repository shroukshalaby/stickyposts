
<?php $__env->startPush('head'); ?>

    <style>
        .row:before, .row:after {
            display: none !important;
        }

        .row {

        &
        :before,

        &
        :after {
            display: block;
        }

        }
        .site-header {
            background: linear-gradient(-145deg, #320b82 0%, #9c33c3 100%);
        }

        .bg-1 {
            background-image: url("<?php echo e(get_theme_frontend_url('assets/sticky/images/affia-banner-1 with out words.png')); ?>");
            width: 100%;
            height: 400px;
            background-size: cover;
            background-repeat: no-repeat;
        }

        .bg-2 {
            background-image: url("<?php echo e(get_theme_frontend_url('assets/sticky/images/affia-banner-2 with out words.png')); ?>");
            width: 100%;
            height: 400px;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .forme-place {
            justify-content: flex-end;
            display: flex;
            align-items: center;
            width: 100%;
            height: 100%;

        }

        #email {
            min-width: 300px;
        }

        .formee {
            margin-top: 40px;
        }

        .box-shadow {
            margin: auto;
            background: #fff;
            padding: 10px;
            -webkit-box-shadow: 0px 0px 19px -4px rgba(47, 22, 126, 1);
            -moz-box-shadow: 0px 0px 19px -4px rgba(47, 22, 126, 1);
            box-shadow: 0px 0px 19px -4px rgba(47, 22, 126, 1);
            border-radius: 10px;
        }

        .wight-color {
            color: #fff;
        }

        .btn-bg {
            background: linear-gradient(-145deg, #320b82 0%, #9c33c3 100%);
            padding: 2px 20px;
            color: #fff !important;
            width: 170px;
            margin: auto;
        }

        .try {
            display: block;
            position: absolute;
            left: 50%;
            top: 0;
            width: 12px;
            height: 12px;
            margin: -41px 0 0 -35px;
            border-radius: 50%;
            z-index: 2;
        }

        .item-link {
            height: 250px;
        }

        ::-webkit-input-placeholder { /* Edge */
            text-align: left;
        }

        :-ms-input-placeholder { /* Internet Explorer 10-11 */
            text-align: left;
        }

        ::placeholder {
            text-align: left;
        }

        button {
            margin: 0;

        }

        .center-banner {

            width: 100%;
            height: 420px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;

        }

        .calc {
            background: linear-gradient(-145deg, #320b82 0%, #9c33c3 100%) !important;
            width: 45%;
        }

        @media (max-width: 567px) {
            .header-navigation ul.navigation-box {
                text-align: right;
            }

            #email {
                min-width: 200px;
            }

            .calc {
                width: 93%;
            }

            .try {
                display: block;
                position: relative;
                left: 0;
                top: 0;
                width: auto;
                height: auto;
                margin: 0;
                border-radius: 50%;
                z-index: 0;
            }

            .timeline > div > .item-link {
                margin-top: 1.5rem;
                height: auto;
            }

            .timeline > div > a {
                display: inline-block;
            }

            .timeline > div > a h4 {
                color: #9c33c3;
            }

            .timeline > div > a .desc-holder .desc {
                color: #320b82;
                opacity: 1;
                margin: 1.2rem auto;
                font-size: 1.4rem;
            }

        }

        .h-30 {
            height: 30px;
        }

        .h-33 {
            height: 33px;
            padding: 4px 20px;
        }

        .input-shado {
            box-shadow: 0 0 5px #888;
        }

    </style>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('page-wrapper'); ?>


    <section class="my-1 mt-3" id="">
        <div class="bd-example hide-mobile">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="d-block w-100 bg-1">
                            <div class="container mt-5 ">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-5 mx-auto"></div>
                                    <div class="col-xl-6 col-lg-7 mx-auto">
                                        <div class="content-block text-center center-banner">

                                            <h3 class='text-center mt-5'
                                                style="color:#320B82; background:none"> <?php echo e(__('affil-id32')); ?><span
                                                        style="font-weight:900 ; font-size :32px ">  <?php echo e(__('affil-idspan3')); ?> </span>
                                            </h3>
                                            <h3 class='text-center' style="color:#320B82;"> <?php echo e(__('affil-idh33')); ?>

                                                <span style="font-weight:bold">  <?php echo e(__('affil-idspan4')); ?>  </span>
                                            </h3>
                                            <div class="subform mt-3">
                                                <form id="signup" class="formee signuptrial"
                                                      style="display: flex;justify-content: center;" method="post">
                                                    <a class="btn btn-bg h-33 m-0" data-toggle="modal"
                                                       data-target="#resources_popups"
                                                       style="border-radius: 5px 0px 0px 5px;font-size:15px; background :linear-gradient(-145deg, #320b82 0%, #9c33c3 100%)"
                                                       type="submit" title="Send"><?php echo e(__('affil-ida4')); ?> </a>
                                                    <input type="hidden" value="Affiliate" name="type">
                                                    <input name="email" id="email"
                                                           class="form-control input-shado h-30"
                                                           style="border-radius: 0px 5px 5px 0px;width:auto"
                                                           type="email" placeholder="Enter your E-mail…"
                                                           pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
                                                           required="">
                                                </form>
                                                <div id="response"></div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-block w-100 bg-2">
                            <div class="container mt-5 ">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-5 mx-auto"></div>
                                    <div class="col-xl-6 col-lg-7 mx-auto">
                                        <div class="content-block text-center center-banner">

                                            <h3 class='text-center mt-5'
                                                style="color:#320B82; background:none">   <?php echo e(__('affil-idh34')); ?>

                                                <span style="font-weight:900 ; font-size :32px "> <?php echo e(__('affil-idspan4')); ?>  </span> <?php echo e(__('affil-idh35')); ?>

                                            </h3>
                                            <h3 class='text-center' style="color:#320B82;"> <?php echo e(__('affil-idh36')); ?>

                                                <span style="font-weight:bold"> <?php echo e(__('affil-idspan5')); ?>  </span>
                                            </h3>
                                            <div class="subform mt-3">
                                                <form id="signup" class="formee signuptrial"
                                                      style="display: flex;justify-content: center;" method="post">
                                                    <a class="btn btn-bg h-33 m-0" data-toggle="modal"
                                                       data-target="#resources_popups"
                                                       style="border-radius: 5px 0px 0px 5px;font-size:15px; background :linear-gradient(-145deg, #320b82 0%, #9c33c3 100%)"
                                                       type="submit" title="Send">  <?php echo e(__('affil-ida4')); ?></a>

                                                    <input type="hidden" value="Affiliate" name="type">
                                                    <input name="email" id="email"
                                                           class="form-control input-shado h-30"
                                                           style="border-radius: 0px 5px 5px 0px;width:auto"
                                                           type="email" placeholder="Enter your E-mail…"
                                                           pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
                                                           required="">
                                                </form>
                                                <div id="response"></div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                        <span class="" aria-hidden="true"><i class="fas fa-arrow-left"
                                                             style="font-size: xx-large;color: #320b82;"></i></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                        <span class="" aria-hidden="true"><i class="fas fa-arrow-right"
                                                             style="font-size: xx-large;color: #320b82;"></i></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="view-mobile" style="margin-top: 7rem;margin-bottom: 4rem; ">
            <div class="container">
                <h3 class='text-left mt-5'
                    style="color:#320B82; background:none;font-size:1.55rem">     <?php echo e(__('affil-id32')); ?> <span
                            style="font-weight:900 ; font-size 1.9remx ">   <?php echo e(__('affil-idspan3')); ?> </span></h3>
                <h3 class='text-left' style="color:#320B82;font-size:1.55rem">    <?php echo e(__('affil-id33')); ?> <span
                            style="font-weight:bold">    <?php echo e(__('affil-idspan4')); ?>  </span>
                </h3>
                <h3 class='text-left mt-5'
                    style="color:#320B82; background:none;font-size:1.55rem">      <?php echo e(__('affil-idh34')); ?> <span
                            style="font-weight:900 ; font-size :1.9remx ">  <?php echo e(__('affil-idspan4')); ?>   </span> <?php echo e(__('affil-idh35')); ?>

                </h3>
                <h3 class='text-left' style="color:#320B82; font-size:1.55rem">        <?php echo e(__('affil-idh36')); ?> <span
                            style="font-weight:bold">  <?php echo e(__('affil-idspan5')); ?>  </span>
                </h3>
                <div class="subform text-left" style="margin:2rem auto;">
                    <a class="submit" data-toggle="modal" data-target="#resources_popups"
                       style='background: linear-gradient(90deg,#42b0ff,#4262ff);padding: 5px 15px;font-size: 1.5rem ;border-radius:5px;color:#fff'><?php echo e(__('affil-ida5')); ?> </a>

                </div>
                <div class='text-left' style="margin-top: .6rem;font-size: .9rem; font-weight: 700">
                    <a href="https://stickyposts.net/sticky/payment-ar.php" id="compar"
                       style="color:#320B82; text-decoration: underline;">  <?php echo e(__('affil-ida6')); ?></a>
                </div>
            </div>
        </div>
    </section>
    <section style='margin:auto; width:90%' class='my-1'>
        <div class="row">
            <div class='col-sm-12 col-md-6 col-lg-9 my-auto'>

                <div class="timeline row">
                    <div class="col-md-4">
                        <a href=" " class="item-link">
                            <h4 style="font-family: 'Cairo', sans-serif;"><?php echo e(__('affil-idh41')); ?>    </h4>
                            <div class="desc-holder">
                                <div class=" try"><img style="width:72px" src="<?php echo e(get_theme_frontend_url('assets/sticky/images/m3.png')); ?>"></div>

                                <span class="desc"
                                      style="font-family: 'Cairo', sans-serif;"> <?php echo e(__('affil-idspan6')); ?> </span>

                            </div>
                        </a>
                        <a class="btn btn-bg" data-toggle="modal" data-target="#resources_popups"></a>
                    </div>
                    <div class="col-md-4">
                        <a href=" " class="item-link">
                            <h4 style="font-family: 'Cairo', sans-serif;"><?php echo e(__('affil-idh42')); ?> </h4>
                            <div class="desc-holder">
                                <div class=" try"><img style="width:72px" src="<?php echo e(get_theme_frontend_url('assets/sticky/images/m2.png')); ?>"></div>
                                <span class="desc" style="font-family: 'Cairo', sans-serif;">
                             <?php echo e(__('affil-idspan7')); ?>

</span>
                            </div>
                        </a>
                        <a class="btn btn-bg" data-toggle="modal"
                           data-target="#resources_popups"> <?php echo e(__('affil-ida8')); ?></a>
                    </div>

                    <div class="col-md-4">
                        <a href=" " class="item-link">
                            <h4 style="font-family: 'Cairo', sans-serif;"> <?php echo e(__('affil-idh43')); ?>   </h4>
                            <div class="desc-holder">
                                <div class=" try"><img style="width:72px" src="<?php echo e(get_theme_frontend_url('assets/sticky/images/m1.png')); ?>"></div>

                                <span class="desc"
                                      style="font-family: 'Cairo', sans-serif;">    <?php echo e(__('affil-idspan8')); ?>  </span>
                            </div>
                        </a>
                        <a class="btn btn-bg" data-toggle="modal"
                           data-target="#resources_popups"><?php echo e(__('affil-ida8')); ?></a>

                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3 my-auto">
                <?php echo $__env->make('sticky.layout.partials.common.pdfDownload', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
    </section>
    <section class='py-5 my-1' style='background:#f7f5f5'>
        <h2 class="wight-color text-center"
            style="font-size:1.5rem;color: #320b82;font-weight: bold;text-transform: capitalize;"><?php echo e(__('affil-idh21')); ?>   </h2>
        <div class='box-shadow my-4 calc'>
            <div class="math-breakdown form-group text-center">
                <p class='wight-color'>

                    <?php echo e(__('affil-idp4')); ?>

                    <input style='border-radius:5px; height:25px' name="userss" id="users" type="text" size="2"
                           value="0">
                    <?php echo e(__('affil-idp5')); ?>

                    <select name="plan_code" style='border-radius:5px; font-size:12px' id="packagees">

                        <option value="economy" selected>Economy</option>
                        <option value="special">Special</option>
                        <option value="family">Family</option>
                        <option value="professional">Professional</option>
                        <option value="super_professional">Super Professional</option>

                    </select>
                    <?php echo e(__('affil-idp6')); ?>

                    , <br>

                    <select name="period" style='border-radius:5px; font-size:12px' id="packagees_period">
                        <option value="month" selected>  <?php echo e(__('affil-idp7')); ?>  </option>
                        <option value="year"><?php echo e(__('affil-idp8')); ?></option>
                    </select>
                    <?php echo e(__('affil-idp9')); ?>

                    <input name="months" id="days" style='border-radius:5px;   height:25px' type="text" size="2"
                           value="0"> ,
                    <?php echo e(__('affil-idp10')); ?>

                </p>

                <p class='wight-color font-weight-bold'>EGP<span class="total-earnings"
                                                                 style='background:linear-gradient(90deg,#42b0ff,#4262ff);border-radius:5px;padding: 2px 20px;'>0</span>
                </p>
            </div>
        </div>
    </section>
    <section id="referral-faq " class="row-wrapper my-1" dir='ltr'>
        <div class="container mb-1">
            <div class="row box-shadow">
                <div class="col-lg-8 mx-auto">
                    <h2 class="section-heading text-center"><?php echo e(__('affil-idh22')); ?></h2>
                </div>
                <div class="col-lg-10 mx-auto text-left">
                    <section>
                        <h5 class="section-heading text-left">  <?php echo e(__('affil-idh51')); ?></h5>
                        <p>

                            <?php echo e(__('affil-idp11')); ?>

                        </p>
                    </section>
                    <section>
                        <h5 class="section-heading text-left"> <?php echo e(__('affil-idh52')); ?></h5>
                        <p>
                            <?php echo e(__('affil-idp12')); ?>


                        </p>
                    </section>
                    <section>
                        <h5 class="section-heading text-left">   <?php echo e(__('affil-idh53')); ?> </h5>
                        <ol class="list-unstyled">
                            <li>
                                <?php echo e(__('affil-idli1')); ?>

                            </li>
                            <li>

                                <?php echo e(__('affil-idli2')); ?>

                            </li>
                            <li>

                                <?php echo e(__('affil-idli3')); ?>


                            </li>





                        </ol>
                    </section>
                    <section>
                        <h5 class="section-heading text-left"> <?php echo e(__('affil-idh54')); ?> </h5>
                        <p>

                            <?php echo e(__('affil-idp13')); ?>

                        </p>
                    </section>
                    <section>
                        <h5 class="section-heading text-left"> <?php echo e(__('affil-idh55')); ?>  </h5>
                        <p>
                            <?php echo e(__('affil-idp14')); ?>

                        </p>
                    </section>
                    <section>
                        <h5 class="section-heading text-left">  <?php echo e(__('affil-idh56')); ?> </h5>
                        <p>
                            <?php echo e(__('affil-idp15')); ?>

                        </p>
                    </section>
                    <section>
                        <h5 class="section-heading text-left">  <?php echo e(__('affil-idh57')); ?> </h5>
                        <p>
                            <?php echo e(__('affil-idp16')); ?>

                        </p>
                    </section>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle"><?php echo e(__('affil-idp2')); ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div style='width:80%;margin:auto'>
                        <form>
                            <div>
                                <span class="label"> <?php echo e(__('affil-idspan9')); ?></span>
                                <input type="text" class="userid form-control" pattern="[A-Za-z]{3}" name="userid"/>
                            </div>
                            <div>
                                <span class="label"> <?php echo e(__('affil-idspan10')); ?></span>
                                <input type="email" class="userid form-control" pattern="[A-Za-z]{3}" name="Email"/>
                            </div>
                            <div>
                                <span class="label"><?php echo e(__('affil-idspan11')); ?></span>
                                <input type="password" class="password form-control" name="password"/>
                                <div class="alert alert-danger mt-2" role="alert">
                                    <?php echo e(__('affil-idspan12')); ?>

                                </div>
                            </div>
                            <div>
                                <span class="label"><?php echo e(__('affil-idspan13')); ?></span>
                                <input type="password" class="confpass form-control" name="confpass"/>
                                <div class="alert alert-danger mt-2" role="alert">
                                    {__('affil-idspan12')}}
                                </div>
                            </div>
                            <input id="submit" class="btn btn-secondary btn-bg" type="submit" value="Submit">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="resources_popups" class="modal fade bd-example-modal-lg" role="dialog"
         style='background: rgba(0,0,0,0.7);padding-top: 60px;'>
        <div class="modal-dialog miniDialog">
            <div class="modal-content" style="background: linear-gradient(275deg, #5e2298, #320b82); color:#fff">
                <div class="modal-header p-0">
                    <img src="<?php echo e(get_theme_frontend_url('assets/sticky/logo-s.png')); ?>" style='width: 54px;z-index: 10;'>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                            style="padding: 0;position: absolute;right: 20px;top: 26px;">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div id="modal-body">
                    <h3 style='color: #fff;font-size: 24px;padding-top: 10px;'
                        class='text-center'>    <?php echo e(__('affil-idh31')); ?> <span
                                style="color:#f9c412; font-weight:bold"> <?php echo e(__('affil-idspan1')); ?>   </span></h3>
                    <p class='text-center mb-0'
                       style="text-transform: uppercase;line-height:1.7;padding: 10px 50px 0;font-size: 13px;"> <?php echo e(__('affil-idp1')); ?></p>
                    <p class='text-center mt-3'
                       style="text-transform: uppercase;font-size: 13px;font-weight:bold"> <?php echo e(__('affil-idp2')); ?>

                        <span style="color:#f9c412; font-weight:bold">  <?php echo e(__('affil-idspan2')); ?>  </span> <?php echo e(__('affil-idp3')); ?>

                    </p>
                    <div class="row my-row mx-0">
                        <div class="col-sm-7">
                            <div class="page-links nav nav-pills mb-4" id="pills-tab" role="tablist">
                                <a id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                                   aria-controls="pills-home" aria-selected="true"
                                   class="ml-auto mr-3 model-tabs active"> <?php echo e(__('affil-ida1')); ?> </a>

                                <a id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
                                   aria-controls="pills-profile" aria-selected="false"
                                   class='mr-3 model-tabs '><?php echo e(__('affil-ida2')); ?> </a>
                            </div>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade " id="pills-home" role="tabpanel"
                                     aria-labelledby="pills-home-tab">
                                    <form style="direction:ltr" method="post" class="reports affiliate_form_login">
                                        <input type="hidden" name="login_popup" value="1">
                                        <input type="hidden" name="page" value="">
                                        <input type="hidden" name="lang" value="en">
                                        <div class="form-group row mb-1 ml-auto" style="align-items: center;">
                                            <label class="col-4 p-0" style="margin: 0;font-size: 12px;"> <span
                                                        style="color:red">*</span> <?php echo e(__('affil-idlab1')); ?> </label>
                                            <div class="col-8">
                                                <input type="email" class="form-control" name="email"
                                                       style="height: 24px;" required>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-1 ml-auto" style="align-items: center;">
                                            <label class="col-4 p-0" style="margin: 0;font-size: 12px;"> <span
                                                        style="color:red">*</span> <?php echo e(__('affil-idlab2')); ?> </label>
                                            <div class="col-8">
                                                <input type="password" class="form-control" name="pass"
                                                       style="height: 24px;" required>
                                            </div>
                                        </div>

                                        <div class="form-group mb-0  row  mt-3 text-center"
                                             style="display: flex;justify-content: center;align-items: center; flex-direction: column;">
                                            <button class="submit mb-0 ml-0" type="submit"
                                                    style="height: 35px;border-radius: 5px; font-size: 1.5rem;font-weight: 600;background: #f9c412 !important;color: #320b82;"
                                                    name="submit" id="sub"> Submit
                                            </button>
                                        </div>

                                        <div class="form-group row mb-1 mx-0"
                                             style="align-items:center;justify-content:center">
                                            <div class="col-12 px-4">
                                                <a href="https://stickyposts.net/sticky/forget.php?lang=en"
                                                   style="color: #fff;text-decoration: underline;"><?php echo e(__('affil-ida3')); ?> </a>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                                <div class="tab-pane fade show active" id="pills-profile" role="tabpanel"
                                     aria-labelledby="pills-profile-tab">
                                    <form style="direction:ltr" method="post"
                                          class="formres affiliate_form_register">
                                        <input type="hidden" name="came_from" value=">">
                                        <input type="hidden" name="page" value="">
                                        <input type="hidden" name="lang" value="en">
                                        <input type="hidden" name="register_popup" value="1">

                                        <div class="form-group row mb-1  ml-auto">
                                            <label class="col-4 p-0" style="margin: 0;font-size:12px"> <span
                                                        style="color:red">*</span> <?php echo e(__('affil-idlab3')); ?> </label>
                                            <div class="col-8">
                                                <input type="text" class="form-control" name="fn7" required
                                                       style="height: 24px;">
                                            </div>

                                        </div>
                                        <div class="form-group row mb-1  ml-auto" style="align-items: center;">
                                            <label class="col-4 p-0" style="margin: 0;font-size:12px"> <span
                                                        style="color:red">*</span><?php echo e(__('affil-idlab4')); ?></label>
                                            <div class="col-8">
                                                <input type="text" class="form-control" name="ln7" required
                                                       style="height: 24px;">
                                            </div>

                                        </div>
                                        <div class="form-group row mb-1 ml-auto" style="align-items: center;">
                                            <label class="col-4 p-0" style="margin: 0;font-size: 12px;"> <span
                                                        style="color:red">*</span><?php echo e(__('affil-idlab1')); ?></label>
                                            <div class="col-8">
                                                <input type="email" class="form-control" name="em7"
                                                       style="height: 24px;" required>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-1 ml-auto" style="align-items: center;">
                                            <label class="col-4 p-0" style="margin: 0;font-size: 12px;"> <span
                                                        style="color:red">*</span><?php echo e(__('affil-idlab2')); ?> </label>
                                            <div class="col-8">
                                                <input type="password" id="txtPassword" class="form-control"
                                                       name="pass" style="height: 24px;" required>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-1 ml-auto" style="align-items: center;">
                                            <label class="col-4 p-0" style="margin: 0;font-size: 10px;"> <span
                                                        style="color:red">*</span> <?php echo e(__('affil-idlab5')); ?> </label>
                                            <div class="col-8">
                                                <input type="password" class="form-control" name="Cpass"
                                                       style="height: 24px;" required>
                                            </div>
                                        </div>
                                        <div class="form-group mb-0  row  mt-3 text-center"
                                             style="display: flex;justify-content: center;align-items: center; flex-direction: column;">
                                            <button class="submit mb-0 ml-0" type="submit"
                                                    style="height: 35px;border-radius: 5px;font-weight: 600;background: #f9c412 !important;color: #320b82;"
                                                    name="submit" id="sub"> Join Affiliate Program
                                            </button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-5 pl-0  text-center"
                             style="display: flex;justify-content: center;align-items: center;">
                            <img src="<?php echo e(get_theme_frontend_url('assets/sticky/images/resco.png')); ?>" style="width: 192px">

                        </div>

                    </div>
                    <div style="display:flex;justify-content: space-between;">
                        <small class='text-left'
                               style="font-size:10px ;margin-left:15px">* <?php echo e(__('affil-idsmal1')); ?></small>
                        <small class='text-right' style="font-size:10px ;margin-right:15px"><span
                                    style="color:#f00">*</span> <?php echo e(__('affil-idsmal2')); ?></small>
                    </div>

                </div>


            </div>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>

    <?php echo $__env->make('sticky.layout.partials.popups', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopPush(); ?>


<?php echo $__env->make('sticky.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Laravel-Projects\StickyPost2\inc\themes\frontend\pure\views/sticky/pages/affiliate.blade.php ENDPATH**/ ?>