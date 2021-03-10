
<?php $__env->startPush('head'); ?>
    <link rel="stylesheet" href="<?php echo e(get_theme_frontend_url('assets/sticky/css/more-benefits.css')); ?>">
    <style>

        }
        .header {
            background: -webkit-linear-gradient(#320b82, #9c33c3);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-weight: 800;
        }

        #email {
            border: 1px solid #dfdfdf;
        }

        li p {
            max-width: 100%;
        }

        .dowenload-btn {
            margin-top: 1.5px;
        }

        .formee .right {
            text-transform: initial;
        }

        .get-vedio-form {
            left: 0;
            right: initial;
        }

        #email {
            border: none;
            background-color: #f3f3f3;
            box-shadow: 0 5px 10px rgba(0, 0, 0, .1);
            color: #222;
            height: 35px;
        }

        @media (max-width: 567px) {
            #signup {
                margin-left: 0;
                display: flex;
            }

            .get-vedio-form {
                position: relative;
            }

            #email {
                min-width: 100px !important;
            }

            .cards #email {
                min-width: 200px !important;
            }

            .know-more {
                width: 100%;
                margin-left: 0;
            }

            .formee .right {
                height: 35px;
                width: 40%;
            }

        }

        @media (min-width: 568px) {
            .know-more {
                width: 29%;
                margin-left: 0;
            }

            .formee .right {
                height: 35px;
                width: 30%;
            }

        }

        .btn-cont-ar {
            width: 91%;
            text-align: left !important;
            margin: 5px auto 0;
        }

        .btn-cont-ar .dowenload-btn {
            background: #212F63;
            margin-top: 5px;
            width: 100%;
            margin-left: 0;
        }
        .h2-color-h1 {
            color:#320b82;
        }
        .h21-clr {
            color:#391B7F;
        }
        .fon-col {
            font-size: 14px;
            font-weight: bold;
            color: #9c33c3;
        }
        .bac-rad-hei {
            background: #382B7D !important;
            border-radius: 5px 0 0 5px;
            height: 35px;
            padding: 0px 11px;
        }
        .bord-rad-mar {
            border-radius: 0 5px 5px 0;
            margin-left: -4px;
        }
        .bac-butt {
            background: #382B7D !important;
        }
        .a-back-gr {
            background: #6B2C76 !important;
        }
        .back-bord-pad {
            background: #212F63 !important;
            border-radius: 5px 0 0 5px;
            height: 35px;
            padding: 0px 11px;
        }
        .back-rad-hei-pad{
            background: #6B2C76 !important;
            border-radius: 5px 0 0 5px;
            height: 35px;
            padding: 0px 11px;
        }
        .bckgrou1 {
            background: #212F63 !important;
        }
        .bckgrou2 {
            background: #9362A6 !important;
        }
        .bckgrou3 {
            background: #34A9DA !important;
        }
        .bckgrou4 {
            background: #0B70AE !important;
        }
        .back-bord-pad2 {
            background: #9362A6 !important;
            border-radius: 5px 0 0 5px;
            height: 35px;
            padding: 0px 11px;
        }
        .gro-hgt-bor {
            background: #34A9DA !important;
            border-radius: 5px 0 0 5px;
            height: 35px;
            padding: 0px 11px;
        }
        .ground-padd {
            background: #0B70AE  !important;
            border-radius: 5px 0 0 5px;
            height: 35px;
            padding: 0px 11px;
        }
    </style>
<?php $__env->stopPush(); ?>
<?php
    $data_arr = array(
    'host' => 'stickyposts.net', // $_SERVER['HTTP_HOST'],
    'uri' =>  '/sticky/more-benefits', // $_SERVER['REQUEST_URI'],
    'project' => 'stickyposts',
    'language' => getCurrentLangIdiom(),
    'resource_type' => 'resource',
    'category' => 'zone',
    'params' => []
    );

        $response = callAPI('https://crmmrkt.com/api/resources/get/', 'POST', $data_arr);
        $response = json_decode($response, true);

        $images =collect($response['data'])->pluck('cover_portrait_url');



?>
<?php $__env->startSection('body'); ?>
    <?php echo $__env->make('sticky.layout.partials.common.homeBanner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="<?php echo e(getCurrentLangIdiom() == 'ar' ? ' text-right'  : ''); ?>">
        <div class='m-auto'>
            <h2 class='text-center mt-3 h2-color-h1'><?php echo e(__('more-h1-text')); ?></h2>
        </div>
        <div class='cards' id='card1'>

            <div class='video-card my-3'>
                <div class='row my-row'>
                    <div class='col-md-9'>
                        <h2 class='h21-clr'> <?php echo e(__('more-idh21')); ?> </h2>
                        <ul>
                            <li><p>
                                    <span class="fon-col"><?php echo e(__('more-idspan1')); ?> </span> <?php echo e(__('more-idp1')); ?>

                                </p></li>
                            <li><p>
                                    <span class="fon-col"><?php echo e(__('more-idspan2')); ?>  </span><?php echo e(__('more-idp2')); ?>

                                </p></li>

                            <li><p>
                                    <span class="fon-col"><?php echo e(__('more-idspan3')); ?> </span> <?php echo e(__('more-idp3')); ?>

                                </p></li>
                            <li><p>
                                    <span class="fon-col"><?php echo e(__('more-idspan4')); ?> </span> <?php echo e(__('more-idp4')); ?>

                                </p></li>
                            <li><p>
                                    <span class="fon-col"><?php echo e(__('more-idspan5')); ?>  </span><?php echo e(__('more-idp5')); ?>

                                </p></li>
                            <li><p>
                                    <span class="fon-col"><?php echo e(__('more-idspan6')); ?> </span> <?php echo e(__('more-idp6')); ?>

                                </p></li>
                            <li><p>
                                    <span class="fon-col"><?php echo e(__('more-idspan7')); ?></span> <?php echo e(__('more-idp7')); ?>

                                </p></li>

                        </ul>
                        <button class='btn dowenload-btn ml-md-3 know-more' onclick="Readmore3()"
                                id="myBtn3"><?php echo e(__('more-idbtn1')); ?></button>
                        <form id="signup" class="formee get-vedio-form signuptrial" method="post">
                            <input class="right inputnew bac-rad-hei" type="submit" title="Send" value="<?php echo e(__('more-idvalue1')); ?>"/>
                            <input name="email" class='input bord-rad-mar' id="email" type="text" placeholder='<?php echo e(__('more-idbtn2')); ?>'/>
                            <input name="type" value="Electronic commerce owners" type="hidden">
                        </form>

                    </div>
                    <div class='col-md-3 text-center'>
                        <div class='img-cont'>

                            <img class='img-fluid' src='<?php echo e($images[0]); ?>'>
                        </div>
                        <div class="btn-cont-ar">

                            <button class="btn dowenload-btn job-btn bac-butt" value="'.$file_id.'" type="submit" title="Send">
                                Download
                            </button>

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class='cards' id='card2'>

            <div class='video-card my-3'>
                <div class='row my-row'>
                    <div class='col-md-9'>
                        <h2 class='h21-clr'> <?php echo e(__('more-idh22')); ?> </h2>
                        <ul>
                            <li><p>
                                    <span class="fon-col"> <?php echo e(__('more-idspan8')); ?> </span> <?php echo e(__('more-idp8')); ?>

                                </p></li>
                            <li><p>
                                    <span class="fon-col"><?php echo e(__('more-idspan9')); ?> </span> <?php echo e(__('more-idp9')); ?>

                                </p></li>
                            <span id="more4">
                                <li><p><span class="fon-col"> <?php echo e(__('more-idspan3')); ?></span> <?php echo e(__('more-idp10')); ?></p></li>
                                <li><p><span class="fon-col"><?php echo e(__('more-idspan4')); ?></span> <?php echo e(__('more-idp11')); ?></p></li>
                                <li><p><span class="fon-col"><?php echo e(__('more-idspan2')); ?> </span><?php echo e(__('more-idp12')); ?></p></li>
                                <li><p><span class="fon-col"><?php echo e(__('more-idspan6')); ?> </span> <?php echo e(__('more-idp13')); ?> </p></li>
                                <li><p><span class="fon-col"><?php echo e(__('more-idspan7')); ?> </span>  <?php echo e(__('more-idp7')); ?></p></li>
                                </span>
                        </ul>
                        <button class='btn dowenload-btn ml-md-3 know-more' onclick="Readmore4()"
                                id="myBtn4"> <?php echo e(__('more-idbtn1')); ?></button>
                        <form id="signup" class="formee get-vedio-form signuptrial" method="post">
                            <input class="right inputnew back-rad-hei-pad" type="submit" title="Send" value="<?php echo e(__('more-idvalue1')); ?>"/>
                            <input name="email" class='input bord-rad-mar' id="email" type="text" placeholder='<?php echo e(__('more-idbtn2')); ?>'/>
                            <input name="type" value="Influences-Bloggers-Users" type="hidden">
                        </form>

                    </div>
                    <div class='col-md-3 text-center'>
                        <div class='img-cont'>
                            <img class='img-fluid' src="<?php echo e($images[1]); ?>">
                        </div>
                        <div class="btn-cont-ar">





                            <button class="btn dowenload-btn job-btn a-back-gr" value="'.$file_id.'"
                                    type="submit" title="Send">Download
                            </button>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class='cards' id='card3'>

            <div class='video-card my-3'>
                <div class='row my-row'>
                    <div class='col-md-9'>
                        <h2 class='h21-clr'>  <?php echo e(__('more-idh23')); ?></h2>
                        <ul>
                            <li><p>
                                    <span class="fon-col"><?php echo e(__('more-idspan12')); ?> </span> <?php echo e(__('more-idp14')); ?>

                                </p></li>
                            <li><p>
                                    <span class="fon-col"><?php echo e(__('more-idspan4')); ?></span> <?php echo e(__('more-idp4')); ?>

                                </p></li>
                            <span id="more5">
                                <li><p><span class="fon-col"><?php echo e(__('more-idspan4')); ?></span> <?php echo e(__('more-idp15')); ?></p></li>
                                <li><p><span class="fon-col"><?php echo e(__('more-idspan2')); ?> </span> <?php echo e(__('more-idp16')); ?></p></li>
                                <li><p><span class="fon-col"><?php echo e(__('more-idspan1')); ?> </span> <?php echo e(__('more-idp17')); ?></p></li>
                                <li><p><span class="fon-col"><?php echo e(__('more-idspan6')); ?>  </span><?php echo e(__('more-idp13')); ?></p></li>
                                <li><p><span class="fon-col"><?php echo e(__('more-idspan7')); ?></span>  <?php echo e(__('more-idp7')); ?></p></li>
                                </span>
                        </ul>
                        <button class='btn dowenload-btn ml-md-3 know-more' onclick="Readmore5()"
                                id="myBtn5"><?php echo e(__('more-idbtn1')); ?></button>
                        <form id="signup" class="formee get-vedio-form signuptrial" method="post">
                            <input class="right inputnew back-bord-pad"type="submit" title="Send" value="<?php echo e(__('more-idvalue1')); ?>"/>
                            <input name="email" class='input bord-rad-mar' id="email" type="text" placeholder='<?php echo e(__('more-idbtn2')); ?>'/>
                            <input name="type" value="Companies and Trademarks" type="hidden">
                        </form>

                    </div>
                    <div class='col-md-3 text-center'>

                        <div class='img-cont'>
                            <img class='img-fluid' src="<?php echo e($images[2]); ?>">
                        </div>
                        <div class="btn-cont-ar">


                            <button class="btn dowenload-btn job-btn bckgrou1" value="'.$file_id.'"
                                    type="submit" title="Send">Download
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class='cards' id='card4'>

            <div class='video-card my-3'>
                <div class='row my-row'>
                    <div class='col-md-9'>
                        <h2 class='h21-clr'>  <?php echo e(__('more-idh24')); ?></h2>
                        <ul>
                            <li><p><span class="fon-col"><?php echo e(__('more-idspan22')); ?> </span> <?php echo e(__('more-idp20')); ?>

                                </p></li>

                            <li><p>
                                    <span class="fon-col"><?php echo e(__('more-idspan10')); ?></span> <?php echo e(__('more-idp10-new')); ?>

                                </p></li>
                            <span id="more6">
                                  <li><p><span class="fon-col">  <?php echo e(__('more-idspan23')); ?> </span> <?php echo e(__('more-idp23')); ?></p></li>
                                <li><p><span class="fon-col"><?php echo e(__('more-idspan4')); ?></span> <?php echo e(__('more-idp4')); ?>.</p></li>
                                <li><p><span class="fon-col">Team Performance:</span><?php echo e(__('more-idp5')); ?></p></li>
                                <li><p><span class="fon-col"><?php echo e(__('more-idspan6')); ?> </span> <?php echo e(__('more-idp13')); ?></p></li>
                                <li><p><span class="fon-col"><?php echo e(__('more-idspan7')); ?></span> <?php echo e(__('more-idp7')); ?></p></li>
                                </span>
                        </ul>
                        <button class='btn dowenload-btn ml-md-3 know-more' onclick="Readmore6()"
                                id="myBtn6"><?php echo e(__('more-idbtn1')); ?></button>
                        <form id="signup" class="formee get-vedio-form signuptrial" method="post">
                            <input class="right inputnew back-bord-pad2"
                                   type="submit" title="Send" value="<?php echo e(__('more-idvalue1')); ?>"/>
                            <input name="email" class='input bord-rad-mar' id="email" type="text" placeholder='<?php echo e(__('more-idbtn2')); ?>'/>
                            <input name="type" value="NGOs Governments entities" type="hidden">
                        </form>

                    </div>
                    <div class='col-md-3 text-center'>
                        <!--<img class='img-fluid' src='images/b.jpg'>-->
                        <div class='img-cont'>
                            <img class='img-fluid' src='<?php echo e($images[3]); ?>'>
                        </div>
                        <div class="btn-cont-ar">




                            <button class="btn dowenload-btn job-btn bckgrou2" value="'.$file_id.'"
                                      type="submit" title="Send">Download
                            </button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class='cards' id='card5'>

            <div class='video-card my-3'>
                <div class='row my-row'>
                    <div class='col-md-9'>
                        <h2 class='h21-clr'>  <?php echo e(__('more-idh25')); ?></h2>
                        <ul>
                            <li><p>
                                    <span class="fon-col"><?php echo e(__('more-idspan1')); ?> </span> <?php echo e(__('more-idp1')); ?>

                                </p></li>
                            <li><p>
                                    <span class="fon-col"><?php echo e(__('more-idspan2')); ?>  </span><?php echo e(__('more-idp2')); ?>

                                </p></li>

                            <li><p>
                                    <span class="fon-col"><?php echo e(__('more-idspan3')); ?> </span> <?php echo e(__('more-idp3')); ?>

                                </p></li>
                            <li><p>
                                    <span class="fon-col"><?php echo e(__('more-idspan4')); ?> </span> <?php echo e(__('more-idp4')); ?>

                                </p></li>
                            <li><p>
                                    <span class="fon-col"><?php echo e(__('more-idspan5')); ?>  </span><?php echo e(__('more-idp5')); ?>

                                </p></li>
                            <li><p>
                                    <span class="fon-col"><?php echo e(__('more-idspan6')); ?> </span> <?php echo e(__('more-idp6')); ?>

                                </p></li>
                            <li><p>
                                    <span class="fon-col"><?php echo e(__('more-idspan7')); ?></span> <?php echo e(__('more-idp7')); ?>

                                </p></li>

                        </ul>
                        <button class='btn dowenload-btn ml-md-3 know-more' onclick="Readmore1()"
                                id="myBtn1"><?php echo e(__('more-idbtn1')); ?></button>
                        <form id="signup" class="formee get-vedio-form signuptrial" method="post">
                            <input class="right inputnew gro-hgt-bor"
                                   type="submit" title="Send" value="<?php echo e(__('more-idvalue1')); ?>"/>
                            <input name="email" class='input bord-rad-mar' id="email" type="text" placeholder='<?php echo e(__('more-idbtn2')); ?>'/>
                            <input name="type" value="Advertising & Media Agencies" type="hidden">
                        </form>

                    </div>
                    <div class='col-md-3 text-center'>
                        <!--<img class='img-fluid' src='images/b.jpg'>-->
                        <div class='img-cont'>
                            <img class='img-fluid' src="<?php echo e($images[4]); ?>">

                        </div>
                        <div class="btn-cont-ar">




                            <button class="btn dowenload-btn job-btn bckgrou3" value="'.$file_id.'"
                                    type="submit" title="Send">Download
                            </button>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class='cards' id='card6'>

            <div class='video-card my-3'>
                <div class='row my-row'>
                    <div class='col-md-9'>
                        <h2 class='h21-clr'> <?php echo e(__('more-idh26')); ?></h2>
                        <ul>
                            <li><p>
                                    <span class="fon-col"><?php echo e(__('more-idspan2')); ?> </span> <?php echo e(__('more-idp40')); ?>

                                </p></li>
                            <li><p>
                                    <span class="fon-col"><?php echo e(__('more-idspan4')); ?> </span><?php echo e(__('more-idp4')); ?>

                                </p></li>
                            <span id="more2">
                                <li><p><span class="fon-col"> <?php echo e(__('more-idspan1')); ?> </span> <?php echo e(__('more-idp41')); ?></p></li>
                                <li><p><span class="fon-col"> <?php echo e(__('more-idspan3')); ?></span> <?php echo e(__('more-idp3')); ?></p></li>
                                <li><p><span class="fon-col"><?php echo e(__('more-idspan5')); ?></span><?php echo e(__('more-idp5')); ?></p></li>
                                <li><p><span class="fon-col"><?php echo e(__('more-idspan6')); ?> </span> <?php echo e(__('more-idp13')); ?></p></li>
                                <li><p><span class="fon-col"><?php echo e(__('more-idspan7')); ?> </span>  <?php echo e(__('more-idp7')); ?></p></li>
                                </span>
                        </ul>
                        <button class='btn dowenload-btn ml-md-3 know-more' onclick="Readmore2()"
                                id="myBtn2"><?php echo e(__('more-idbtn1')); ?></button>
                        <form id="signup" class="formee get-vedio-form signuptrial" method="post">
                            <input class="right inputnew ground-padd"
                                   type="submit" title="Send" value="<?php echo e(__('more-idvalue1')); ?>"/>
                            <input name="email" class='input bord-rad-mar' id="email" type="text" placeholder='<?php echo e(__('more-idbtn2')); ?>'/>
                            <input name="type" value="Freelancers & Job Seekers" type="hidden">
                        </form>

                    </div>
                    <div class='col-md-3 text-center'>
                        <!--<img class='img-fluid' src='images/b.jpg'>-->
                        <div class='img-cont'>
                            <img class='img-fluid' src="<?php echo e($images[5]); ?>">
                        </div>
                        <div class="btn-cont-ar">




                            <button class="btn dowenload-btn job-btn bckgrou4" value="'.$file_id.'"
                                     type="submit" title="Send">Download
                            </button>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script>
        $(".job-btn").click(function () {
            $("#myModal").modal('show');
        })
        $(".job-btn").click(function () {
            var button = $(this).val();
            $(".job_name").val(button);
            $("#job_id").val($(this).data('id'))
        });


        $("#nav-btn").click(function () {
            $("#main-nav-bar").show("slow");
            $("#nav-btn").hide();
            $("#close-nav-btn").show();
        });
        $("#close-nav-btn").click(function () {
            $("#main-nav-bar").hide("slow");
            $("#nav-btn").show();
            $("#close-nav-btn").hide();
        });

        $('.download_resource_assign').on('click', function () {

            resource_id = $(this).attr('data-id');

            $('.file_resource').val(resource_id);

        });

    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('sticky.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Laravel-Projects\StickyPost2\inc\themes\frontend\pure\views/sticky/pages/more_benefits.blade.php ENDPATH**/ ?>