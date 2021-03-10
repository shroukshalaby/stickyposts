
<?php $__env->startPush('head'); ?>

    <link rel="stylesheet" href="<?php echo e(get_theme_frontend_url('assets/sticky/css/customen.css')); ?>">
    <style>
        .form-group{
            margin-bottom:0!important;
        }
        .model-tabs {
            color: #2196F3;
            background:transparent;
        }
        #pills-tab .active {
            color: #fff;
            background:transparent;
        }
        .site-header.header-one .header-navigation ul.navigation-box > li{
            margin:0 9px;
        }
        .site-header.header-one .header-navigation ul.navigation-box > li > a{
            font-weight:400;
        }
        .text-box{
            height: 60px;
            background: #fff;
        }
        .social_share{
            text-align:center;
            color:#fff;
            font-size:1.1rem;
            color:#fff;
        }
        .social_share i{
            padding:8px;
            border-radius:50%;
        }
        .social_share a .fa-facebook{
            background:#02549F;
            color:#fff;
        }
        .social_share a .fa-linkedin{
            background:#006699;
            color:#fff;
        }
        .social_share a .fa-google{
            background:#c32aa3;
            color:#fff;
        }
        .social_share a .fa-twitter{
            background:#00ACED;
            color:#fff;
        }
        .social_share a .fa-whatsapp{
            background:#5cbe4a;
            color:#fff;
        }
        .social_share a .fa-facebook-messenger{
            background:#0084ff;
            color:#fff;
        }
        .pad-65-15-65{
            padding:65px 15px 65px;
        }
         .colo-w{
            color: white;
        }
        .colo-y{
            color: yellow;
        }
        .li-hei-4{
            line-height: 1.4;
        }
        .m-b-4{
            margin-bottom: 4px;
        }
        .pad-5-15{
            padding: 5px 15px;
        }
           .mar-t-6{
            margin-top: .6rem;
        }
        .f-s-9{
            font-size: .9rem;
            
        }
        .f-w-700{
            font-weight: 700;
        }
        .t-d-u{
            text-decoration: underline;
        }
        .m-b-5{
            margin-bottom: 1.5rem;
        }
        .wid-48{
            width: 48%;
        }
        .pos-abs{
            position: absolute;
        }
        
        .lef-25{
           left: .25% ;
        }
        .top-25{
            top: .25%;
        }
        .backg-r{
            background: red;
        }
        .pad-1-6{
            padding: 1px 6px;
        }
        .m-0{
            margin: 0;
        }
        .f-s-14{
            font-size: 14;
        }
        .f-w-b{
            font-weight: bold;
        }
        .f-s-18{
            font-size: 18px;
        }
        .f-s-15 {
            font-size:15px;
            
        }
        .f-s-10{
            font-size: 10px;
        }
        .mar-19{
            margin: 19px 0 0;
        }
        .bor-r-5{
            border-radius: 5px;
        }
        .pad-4-9-5{
            padding: 4px 9px 5px;
        }
        .back-l{
            background: linear-gradient(90deg,#42b0ff,#4262ff);
        }
        .backg-b{
            background: rgba(0,0,0,0.7);
        }
        .pad-t-60{
            padding-top: 60px;
        }
        .wid-54{
            width: 54px;
        }
        .z-in-10{
            z-index: 10;
        }
        .pad-0{
            padding: 0;
        }
        .right-20{
            right: 20px;
        }
        .top-26{
            top:26px;
        }
        .dir-l{
            direction: ltr;
        }
        .alig-it{
            align-items: center;
        }
        .f-s-12{
            font-size: 12px;
        }
        .colo-r{
            color: red;
        }
        .hei-24{
            height: 24px;
        }
        .hei-24-i{
            height: 24px!important;
        }
        
        .just-cont-c{
            justify-content: center;
        }
        .just-cont-s{
            justify-content: space-between;
        }
        .dis-f{
            display: flex;
        }
        .flex-dir{
            flex-direction: column;
        }
        .backg-y{
           background:  #f9c412 !important;
        }
        .colo-b{
            color: #320b82;
        }
        .hei-35{
            height: 35px;
        }
        .f-w-600{
            font-weight: 600;
        }
      .pad-0-5  {
            padding:0 5px!important;
        }
        .f-s-2{
            font-size: 1.2rem;
        }
        .f-s-5{
            font-size: 1.5rem;
        }
        .bor-n{
            border: none;
        }
        .wid-192{
            width: 192px;
        }
        .mar-l-15{
            margin-left: 15px;
        }
        .mar-r-15{
            margin-right: 15px;
        }
        .wid-250{
            width: :250px;
        }
        .backg-s{
            background: rgba(0,0,0,0.1);
        }
        .m-a{
            margin: auto;
        }
        .box-s{
            box-shadow: none;
        }
        .hei-30{
            height: 30px;
        }
        .backg-7{
            background: rgba(0, 0, 0, 0.7);
        }
        .wid-480{
            width: 480px;
        }
        .mar-60-0{
            margin: 60px 0;
        }
        .colo-w-i{
            color:#fff !important;
        }
        .mar-b-5{
            margin-bottom:1.5rem;
        }
        .lef-25{
            left: 0.25%;
        }
        .backg-r{
            background: #f00;
        }
        .top-25{
            top: 0.25%;
        }
    </style>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('page-wrapper'); ?>


    <?php

        $page45 = 'Template_english';
            $page ="Template-en";
            $data_arr = array(
                  'host' => $_SERVER['HTTP_HOST'],
                  'uri' => $_SERVER['REQUEST_URI'],
                  'project' => 'stickyposts',
                  'language' => getCurrentLangIdiom(),
                  'resource_type' => 'template',
                  'category' => 'department',
                  'params' => []
              );
                     $response = callAPI('https://crmmrkt.com/api/resources/get/', 'POST', $data_arr);
                     $response = json_decode($response, true);
    ?>


    <div class='section'>
        <div class="container">
            <div class="row justify-content-center  res-padding">

                <div class="col-md-7 my-auto view-mobile pad-65-15-65" >
                    <h3  class="text-left colo-w f-s-5 li-hei-4">Learn more from professional reports & studies to know</h3>
                    <h3  class="text-left colo-w f-s-5 li-hei-4 m-b-4">how to be an expert on digital marketing and social media</h3>
                    <div class="subform my-2">
                        <a class="submit pad-5-15 f-s-5"href="https://stickyposts.net/stickypost_register/register-en.php?language=2"   > Start FREE trial</a>

                    </div>
                    <div class="mar-t-6 f-s-9 f-w-700">
                        <a href="https://stickyposts.net/sticky/payment-ar.php" id="compar" class="colo-w t-d-u"> Package Comparison  </a>
                    </div>
                </div>
                <div class="col-lg-7 col-md-8 col-sm-7 hide-mobile  text-center">
                    <h3  class="text  mt-4 colo-w  f-s-5 li-hei-4">Learn more from professional reports & studies to know</h3>
                    <h3  class="text colo-w  f-s-5 li-hei-4 m-b-4">how to be an expert on digital marketing and social media</h3>
                    <div class="row justify-content-center">
                        <div class="col-md-6 mt-5">
                            <div class="card">
                                <div class="card-body">

                                    <div class="row">
                                        <img src="<?php echo e(get_theme_frontend_url('assets/sticky/images/mobil-download.png')); ?>" class="img-fluid IMAGES2">
                                        <div class="col-12">
                                            <h6 class="text-dark mar-b-5" >Download app NOW</h6>
                                            <div class="stage">
                                                <p>
                                                    <a href="https://play.google.com/store/apps/details?id=com.stickyapp.myappcompany">
                                                        <img src="<?php echo e(get_theme_frontend_url('assets/sticky/images/Google play.png')); ?>" class="wid-48">
                                                    </a>
                                                    <a class="" href="https://apps.apple.com/eg/app/stickyposts/id1481454304">
                                                        <img src="<?php echo e(get_theme_frontend_url('assets/sticky/images/APPSTORE.png')); ?>" class="wid-48">
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mt-5" dir=" ">
                            <div class="card">
                                <form>
                                    <div class="card-body p-2">
                                        <div class="row">
                                            <div class="pos-abs lef-25 backg-r top-25 colo-w pad-1-6">
                                                <p class="m-0 f-s-14"> For limited</p>
                                            </div>
                                            <img src="<?php echo e(get_theme_frontend_url('assets/sticky/logo-s.png')); ?>" class="img-fluid IMAGES">
                                            <div class="col-12 text-center">

                                                <p class="promo" class="f-s-15 mar-19 li-hei-4">Subscribe and use your<span class="f-w-b f-s-18">30% discount</span>
                                                    promo code on all Sticky Posts’ pricing plan</p>
                                            </div>
                                            <div class="col-12 text-left">
                                                <a class="submit" href="../stickypost_register/register.php?language=1&amp;code=JKJAKATM" class="bor-r-5 f-s-15 pad4-9-5 colo-w back-l">Get Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-5  my-auto text-right hide-mobile">
                    <img src="<?php echo e(get_theme_frontend_url('assets/sticky/img/templateEn.png')); ?>" class="img-fluid img-width">
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>



<?php $__env->startSection('body'); ?>
    <div id="resources_popups" class="modal fade bd-example-modal-lg backg-b pad-t-60" role="dialog" >
        <div class="modal-dialog miniDialog" >
            <div class="modal-content back-l colo-w"  >
                <div class="modal-header p-1">
                    <img src="<?php echo e(get_theme_frontend_url('assets/sticky/logo-s.png')); ?>" class='wid-54 z-in-10'>
                    <button type="button" class="close pad-0 pos-abs right-20 top-26" data-dismiss="modal" aria-label="Close" >
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div id="modal-body">
                    <h3  class='text-center mt-3 colo-w'> Get Resources  <span class="colo-y f-w-b" >free </span></h3>
                    <div class="row my-row">
                        <div class="col-sm-7">
                            <div class="page-links nav nav-pills mb-4" id="pills-tab" role="tablist">
                                <a id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true" class="ml-auto mr-3 model-tabs active">Login</a>

                                <a id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false" class='mr-3 model-tabs ' >Register</a>
                            </div>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <form id="form_pop1"  method= "post" class="login dir-l">

                                        <input type="hidden" name="page" value="<?php echo $page45 ?>">
                                        <input type="hidden" name="lang" value="en">
                                        <input type="hidden" name="assigned_employee" value="<?= $_GET['assigned_employee']??'' ?>">
                                        <input type="hidden" name="activity" value="<?= $_GET['activity']??'' ?>">
                                        <input type="hidden" name="task" value="<?= $_GET['task']??'' ?>">
                                        <div class="form-group row mb-1 ml-auto alig-it " >
                                            <label class="col-4 p-1 m-0 f-s-14" >  <span class="colo-r">*</span>E-mail</label>
                                            <div class="col-8">
                                                <input type="email" class="form-control hei-24" name="mail"   required>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-1 ml-auto alig-it"  >
                                            <label class="col-4 p-1 m-0 f-s-14" >  <span class="colo-r">*</span>Password</label>
                                            <div class="col-8">
                                                <input type="password" class="form-control hei-24" name="pass"  required>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-1 mx-0 alig-it just-cont-c" >
                                            <div class="col-12 px-4">
                                                <a href="https://stickyposts.net/sticky/forget.php?lang=en" class="colo-w t-d-u">forget password ?</a>
                                            </div>
                                        </div>
                                        <div class="form-group mb-0  row  mt-3 text-center dis-f just-cont-c alig-it flex-dir" >
                                            <button class="submit mb-0 ml-0 hei-35 bor-r-5 f-s-5 f-w-600 backg-y colo-b" type="submit"  name="submit" id="sub"> GET IT Now </button>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                    <form id="form_pop2"  method= "post" class="formres dir-l">
                                        <input type="hidden" name="came_from" value="<?php echo $page?>">
                                    <!--<input type="hidden" name="page" value="<?php //echo $page45 ?>">-->
                                        <input type="hidden" name="lang" value="en">
                                        <input type="hidden" name="assigned_employee" value="<?= $_GET['assigned_employee']??'' ?>">
                                        <input type="hidden" name="activity" value="<?= $_GET['activity']??'' ?>">
                                        <input type="hidden" name="task" value="<?= $_GET['task']??'' ?>">
                                        <div class="form-group row ml-auto" >
                                            <label class="col-4 px-1 m-0 f-s-14">  <span class="colo-r">*</span>First Name</label>
                                            <div class="col-8">
                                                <input type="text" class="form-control hei-24" name="fn7" required>
                                            </div>

                                        </div>
                                        <div class="form-group row ml-auto alig-it " >
                                            <label class="col-4 px-1 m-0 f-s-14" >  <span class="colo-r">*</span>Last Name</label>
                                            <div class="col-8">
                                                <input type="text" class="form-control hei-24" name="ln7" required >
                                            </div>

                                        </div>
                                        <div class="form-group row ml-auto alig-it" >
                                            <label class="col-4 px-1  m-0 f-s-14 " >  <span class="colo-r">*</span>E-mail</label>
                                            <div class="col-8">
                                                <input type="email" class="form-control hei-24" name="em7"  required>
                                            </div>
                                        </div>
                                        <div class="form-group row ml-auto  alig-it" >
                                            <label class="col-4 px-1 m-0 f-s-14" >  <span class="colo-r">*</span>Password </label>
                                            <div class="col-8">
                                                <input type="password" id="txtPassword" class="form-control hei-24" name="pass"    required>
                                            </div>
                                        </div>
                                        <div class="form-group row ml-auto alig-it"  >
                                            <label class="col-4 px-1 m-0 f-s-14" >  <span class="colo-r">*</span>   Confirm Pass </label>
                                            <div class="col-8">
                                                <input type="password" id="txtConfirmPassword" class="form-control hei-24" name="Cpass"   required>
                                            </div>
                                        </div>
                                        <div class="form-group mb-0  row  mt-3 text-center dis-f just-cont-c alig-it flex-dir" >
                                            <button class="submit mb-0 ml-0 hei-35 bor-r-5 f-s-5 f-w-600 backg-y colo-b " type="submit" name="submit" id="sub"> GET IT Now </button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="dis-f just-cont-s" >
                        <small class='text-left f-s-10 mar-l-15'>* Your Information is Safe With us!</small>
                        <small class='text-left f-s-10 mar-r-15' ><span class="colo-r">*</span> All fields are required to fill in</small>
                    </div>

                </div>


            </div>

        </div>
    </div>




    <main>
        <div class="conatiner" style="<?php if(isset($_GET['file'])){echo 'display:block';}else{echo 'display:none';}  ?>">
            <div class="row justify-content-center m-0 mt-3">
                <?php

                // $page4= $_GET['file'];
                //  $stmt = $conn2->prepare("SELECT * FROM resources WHERE lang='ar' AND project='stickypost' AND page='$page' AND file_type='source' ORDER BY add_date DESC LIMIT 1");

                //      $stmt = $conn2->prepare("SELECT * FROM resources WHERE id = '$page4'  ");

                // 			$stmt->execute();

                $data_arr = array(
                    'host' => $_SERVER['HTTP_HOST'],
                    'uri' => $_SERVER['REQUEST_URI'],
                    'id' => $_GET['file'],
                    'params' => []
                );

                $response_1 = callAPI('https://crmmrkt.com/api/resources/getById/', 'POST', $data_arr);
                $response_1 = json_decode($response_1, true);
                $row = $response_1['data'];



                // 		 		      $total_count = 0;
                // 		    $rows = $stmt->fetchAll();
                // 	       foreach ($rows as $row)
                //{ ?>
                <div class="col-lg-2 col-md-6 col-xs-12 box_shadow">
                    <div class="imagess">
                        <img src="<?php echo $row['cover_portrait_url'];?>" class="img-fluid">
                    </div>
                    <?php

                    if(isset($_SESSION['resources_login']))
                    {
                        $class = "res";
                        $button = "";
                        $download = "DownloadPDF";
                        $link = $row['file_url'];
                    }
                    else{
                        $class = "res_unique_select";
                        $link = "#resources_popups";
                        $download = "";
                        $button = 'type="button" data-toggle="modal"';
                    }

                    $total_count = intval($row['total_downloads']);


                    $tag = '<p title="Photo title" class=" backg-s">
                            	<div class="text-box" dir="RTL"> <p>'.$row["description"].'</p></div></p><small>['.$total_count.' Downloads]</small>';

                    ?>
                    <div class="caption-content text-right">
                        <?php echo $tag;?>
                    </div>
                    <div class="subscribe_form text-center mt-2 box-s" >

                        <a class="<?= $class ?> <?=$download ?> btn btn-default bg-color colo-w" res-id="<?php echo $row['id']?>" data-src="<?=$link?>" data-page="<?=$row['page']?>" data-id="<?= $row['id'] ?>" <?= $button ?>  href="<?php echo $link?>" download>Download Now</a>

                    </div>
                </div>
                <?php //} ?>
            </div>
        </div>
        <div class="container mt-5  box_shadow">
            <div class="main_title_2">
                <h2 class='head-color f-w-b' >Marketing Plans & Strategies Templates</h2>
                <div class='my-4 dis-f just-cont-c alig-it '>
                    <input type="text" name="Search" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." class="form-control col-md-6 hei-30" >
                    <div class="input-group-btn">
                        <button type="submit"  class="btn btn-info btn-md bg-color hei-30 bor-n">
                            search</button>
                    </div></div>
            </div>

            <div class="grid-gallery report">
                <div class="magnific-gallery" id="myUL">
                    <div class="container">
                        <div class="owl-carousel contents" id="advertisingdiv">
                            <?php

                            $rows = $response['data']['stickypost'];

                            //$total_count = 0;
                            //           $rows = array();
                            //             $row5 = getAllResources(['language' => 'en', 'project' => 'stickyposts', 'resource_type' => 'template', 'department' => 'stickypost']);
                            //             if ($row5['result'] != 'success')
                            //                 echo $row5['error_message'];
                            //             else{

                            //                 $rows = $row5['data'];

                            //             }

                            // 	      	$stmt = $conn2->prepare("SELECT * FROM resources WHERE lang='en' AND department = 'stickypost' AND project='stickypost' AND file_type='temp' ORDER BY add_date DESC ");

                            // 			$stmt->execute();

                            // 		    $rows = $stmt->fetchAll();
                            foreach ($rows as $row)
                            { ?>
                            <li>
                                <div class="col-12 boxss">
                                    <div class="images">
                                        <img src="<?php echo $row['cover_portrait_url'];?>" alt="">
                                    </div>
                                    <?php
                                    if(isset($_SESSION['resources_login']))
                                    {

                                        $total_count = intval($row['total_downloads']);

                                        $link = $row['file_url'];
                                        $tag = '<a class="res" data-id="'.$row['id'].'" data-src="'.$link.'" href="#DownloadPDF" data-toggle="modal"  type="button" title="Photo title" style=" background: rgba(0,0,0,0.1);">
                                	<div class="text-box" data-maxlength="50" dir="ltr"> <p>'.$row["description"].'</p></div></a><small>['.$total_count.' Downloads]</small>';
                                    }
                                    else{

                                        $total_count = intval($row['total_downloads']);

                                        $link = "#resources_popups";
                                        $tag = '<a  class="res_unique_select" data-page="' . $row['page'] . '" data-id="'.$row['id'].'"  href="'.$link.'" type="button" data-toggle="modal" title="Photo title" style=" background: rgba(0,0,0,0.1);">
                                	<div class="text-box" data-maxlength="50" dir="ltr"> <p>'.$row["description"].'</p></div></a><small>['.$total_count.' Downloads]</small>';
                                    }

                                    ?>
                                    <div class="caption-content">
                                        <?php echo $tag;?>
                                    </div>
                                    <div class="social_share">
                                        <a href="https://www.facebook.com/sharer.php?u=https://stickyposts.net/sticky/TemplateEn.php?file=<?= $row['id']; ?>" target="_blank"><i class="fab fa-facebook"></i></a>
                                        <a href="https://twitter.com/intent/tweet?text=Sticky%20posts%20-%20Scheduling%20tool&url=https://stickyposts.net/sticky/TemplateEn.php?file=<?= $row['id']; ?>&text=Simple Share Buttons&hashtags=simplesharebuttons" target="_blank"><i class="fab fa-twitter"></i></a>
                                        <a href="https://web.whatsapp.com/send?text=https://stickyposts.net/sticky/TemplateEn.php?file=<?= $row['id']; ?>" target="_blank"><i class="fab fa-whatsapp"></i></a>
                                        <a href="https://www.linkedin.com/shareArticle?title=Sticky%20posts%20-%20Scheduling%20tool&url=https://stickyposts.net/sticky/TemplateEn.php?file=<?= $row['id']; ?>" target="_blank"><i class="fab fa-linkedin"></i></a>
                                        <a href="https://www.facebook.com/dialog/send?link=https://stickyposts.net/sticky/TemplateEn.php?file=<?= $row['id']; ?>&app_id=521270401588372&redirect_uri=https%3A%2F%2Fwww.sharethis.com" target="_blank"><i class="fab fa-facebook-messenger"></i></a>
                                    </div>
                                </div>
                            </li>
                            <?php } ?>
                        </div>


                    </div>
                </div>
            </div>
            <!-- /grid gallery -->
        </div>
        <!-- /container -->


        <div class="container mt-5  box_shadow">
            <div class="main_title_2">
                <h2 class='head-color f-w-b' >Sales Plans & Strategies Templates</h2>
                <h2 dir="ltr" class="my-1"></h2>

                <div class='my-4 dis-f just-cont-c alig-it'>
                    <input type="text" name="Search" id="myInput1" onkeyup="myFunction1()" placeholder="Search for names.." class="form-control col-md-6 hei-30" >
                    <div class="input-group-btn">
                        <button type="submit"  class="btn btn-info btn-md bg-color hei-30 bor-n">
                            search</button>
                    </div></div>
            </div>
            <div class="grid-gallery report">
                <div class="magnific-gallery" id="myUL1">
                    <div class="container">
                        <div class="owl-carousel contents" id="advertisingdiv">
                            <?php

                            $rows = $response['data']['reports'];

                            //$total_count = 0;
                            //           $rows = array();
                            //             $row5 = getAllResources(['language' => 'en', 'project' => 'stickyposts', 'resource_type' => 'template', 'department' => 'reports']);
                            //             if ($row5['result'] != 'success')
                            //                 echo $row5['error_message'];
                            //             else{

                            //                 $rows = $row5['data'];

                            //             }

                            // 	      	$stmt = $conn2->prepare("SELECT * FROM resources WHERE lang='en' AND department = 'reports' AND project='stickypost' AND file_type='temp' ORDER BY add_date DESC ");

                            // 			$stmt->execute();

                            // 		    $rows = $stmt->fetchAll();
                            foreach ($rows as $row)
                            { ?>
                            <li>
                                <div class="col-12 boxss">
                                    <div class="images">
                                        <img src="<?php echo $row['cover_portrait_url'];?>" alt="">
                                    </div>
                                    <?php
                                    if(isset($_SESSION['resources_login']))
                                    {

                                        $total_count = intval($row['total_downloads']);

                                        $link = $row['file_url'];
                                        $tag = '<a class="res" data-id="'.$row['id'].'" data-src="'.$link.'" href="#DownloadPDF" data-toggle="modal" title="Photo title" style=" background: rgba(0,0,0,0.1);">
                                    <div class="text-box" data-maxlength="50" dir="ltr"> <p>'.$row["description"].'</p></div></a><small>['.$total_count.' Downloads]</small>';
                                    }
                                    else{

                                        $total_count = intval($row['total_downloads']);

                                        $link = "#resources_popups";
                                        $tag = '<a  class="res_unique_select" data-page="' . $row['page'] . '" data-id="'.$row['id'].'"  href="'.$link.'" type="button" data-toggle="modal" title="Photo title" style=" background: rgba(0,0,0,0.1);">
                                	<div class="text-box" data-maxlength="50" dir="ltr"> <p>'.$row["description"].'</p></div></a><small>['.$total_count.' Downloads]</small>';

                                    }

                                    ?>
                                    <div class="caption-content">
                                        <?php echo $tag;?>
                                    </div>
                                    <div class="social_share">
                                        <a href="https://www.facebook.com/sharer.php?u=https://stickyposts.net/sticky/TemplateEn.php?file=<?= $row['id']; ?>" target="_blank"><i class="fab fa-facebook"></i></a>
                                        <a href="https://twitter.com/intent/tweet?text=Sticky%20posts%20-%20Scheduling%20tool&url=https://stickyposts.net/sticky/TemplateEn.php?file=<?= $row['id']; ?>&text=Simple Share Buttons&hashtags=simplesharebuttons" target="_blank"><i class="fab fa-twitter"></i></a>
                                        <a href="https://web.whatsapp.com/send?text=https://stickyposts.net/sticky/TemplateEn.php?file=<?= $row['id']; ?>" target="_blank"><i class="fab fa-whatsapp"></i></a>
                                        <a href="https://www.linkedin.com/shareArticle?title=Sticky%20posts%20-%20Scheduling%20tool&url=https://stickyposts.net/sticky/TemplateEn.php?file=<?= $row['id']; ?>" target="_blank"><i class="fab fa-linkedin"></i></a>
                                        <a href="https://www.facebook.com/dialog/send?link=https://stickyposts.net/sticky/TemplateEn.php?file=<?= $row['id']; ?>&app_id=521270401588372&redirect_uri=https%3A%2F%2Fwww.sharethis.com" target="_blank"><i class="fab fa-facebook-messenger"></i></a>
                                    </div>
                                </div>
                            </li>
                            <?php } ?>
                        </div>


                    </div>
                </div>
            </div>
            <!-- /grid -->
        </div>
        <!-- /container -->

        <div class=" container mt-5  box_shadow">

            <div class="main_title_2">
                <h2 dir="ltr" class='head-color f-w-b'> Graphics Templates</h2>

            </div>

            <div class="grid-gallery report">
                <div class="magnific-gallery" id="">
                    <div class="container">
                        <div class="owl-carousel contents" id="advertisingdiv">
                            <?php

                            $rows = $response['data']['infograph'];

                            //$total_count = 0;
                            //           $rows = array();
                            //             $row5 = getAllResources(['language' => 'en', 'project' => 'stickyposts', 'resource_type' => 'template', 'department' => 'infograph']);
                            //             if ($row5['result'] != 'success')
                            //                 echo $row5['error_message'];
                            //             else{

                            //                 $rows = $row5['data'];

                            //             }


                            // 	      	$stmt = $conn2->prepare("SELECT * FROM resources WHERE lang='en' AND department = 'infograph' AND project='stickypost' AND file_type='temp' ORDER BY add_date DESC ");

                            // 			$stmt->execute();

                            // 		    $rows = $stmt->fetchAll();
                            foreach ($rows as $row)
                            { ?>
                            <div class="col-12 boxss">
                                <div class="images">
                                    <img src="<?php echo $row['cover_portrait_url'];?>" alt="">
                                </div>
                                <?php
                                if(isset($_SESSION['resources_login']))
                                {

                                    $total_count = intval($row['total_downloads']);

                                    $link = $row['file_url'];
                                    $tag = '<a class="res" data-id="'.$row['id'].'" data-src="'.$link.'" href="#DownloadPDF" data-toggle="modal" title="Photo title" style=" background: rgba(0,0,0,0.1);">
                                    <div class="text-box" data-maxlength="50" dir="ltr"> <p>'.$row["description"].'</p></div></a><small>['.$total_count.' Downloads]</small>';
                                }
                                else{

                                    $total_count = intval($row['total_downloads']);

                                    $link = "#resources_popups";
                                    $tag = '<a  class="res_unique_select" data-page="' . $row['page'] . '" data-id="'.$row['id'].'"  href="'.$link.'" type="button" data-toggle="modal" title="Photo title" style=" background: rgba(0,0,0,0.1);">
                                	<div class="text-box" data-maxlength="50" dir="ltr"> <p>'.$row["description"].'</p></div></a><small>['.$total_count.' Downloads]</small>';

                                }

                                ?>
                                <div class="caption-content">
                                    <?php echo $tag;?>
                                </div>
                                <div class="social_share">
                                    <a href="https://www.facebook.com/sharer.php?u=https://stickyposts.net/sticky/TemplateEn.php?file=<?= $row['id']; ?>" target="_blank"><i class="fab fa-facebook"></i></a>
                                    <a href="https://twitter.com/intent/tweet?text=Sticky%20posts%20-%20Scheduling%20tool&url=https://stickyposts.net/sticky/TemplateEn.php?file=<?= $row['id']; ?>&text=Simple Share Buttons&hashtags=simplesharebuttons" target="_blank"><i class="fab fa-twitter"></i></a>
                                    <a href="https://web.whatsapp.com/send?text=https://stickyposts.net/sticky/TemplateEn.php?file=<?= $row['id']; ?>" target="_blank"><i class="fab fa-whatsapp"></i></a>
                                    <a href="https://www.linkedin.com/shareArticle?title=Sticky%20posts%20-%20Scheduling%20tool&url=https://stickyposts.net/sticky/TemplateEn.php?file=<?= $row['id']; ?>" target="_blank"><i class="fab fa-linkedin"></i></a>
                                    <a href="https://www.facebook.com/dialog/send?link=https://stickyposts.net/sticky/TemplateEn.php?file=<?= $row['id']; ?>&app_id=521270401588372&redirect_uri=https%3A%2F%2Fwww.sharethis.com" target="_blank"><i class="fab fa-facebook-messenger"></i></a>
                                </div>
                            </div>
                            <?php } ?>
                        </div>


                    </div>
                </div>
            </div>
            <!-- /grid -->
        </div>
        <!-- /container -->


        <div class=" container my-5  box_shadow">
            <div class="main_title_2">
                <h4 dir="ltr" class='head-color f-w-b' >Infographics Templates</h4>


            </div>

            <div class="grid-gallery report">
                <div class="magnific-gallery" id="">
                    <div class="container">
                        <div class="owl-carousel contents" id="advertisingdiv">
                            <?php

                            $rows = $response['data']['videos'];

                            //$total_count = 0;
                            //           $rows = array();
                            //             $row5 = getAllResources(['language' => 'en', 'project' => 'stickyposts', 'resource_type' => 'template', 'department' => 'videos']);
                            //             if ($row5['result'] != 'success')
                            //                 echo $row5['error_message'];
                            //             else{

                            //                 $rows = $row5['data'];

                            //             }

                            // 	      	$stmt = $conn2->prepare("SELECT * FROM resources WHERE lang='en' AND department = 'videos' AND project='stickypost' AND file_type='temp' ORDER BY add_date DESC ");

                            // 			$stmt->execute();

                            //  $rows = $stmt->fetchAll();
                            foreach ($rows as $row)
                            { ?>
                            <div class="col-12 boxss">
                                <div class="images">
                                    <img src="<?php echo $row['cover_portrait_url'];?>" alt="">
                                </div>
                                <?php
                                if(isset($_SESSION['dfsf']))
                                {

                                    $total_count = intval($row['total_downloads']);

                                    $link = $row['file_url'];
                                    $tag = '<a class="res" data-id="'.$row['id'].'" data-src="'.$link.'" href="#DownloadPDF" data-toggle="modal" title="Photo title" style=" background: rgba(0,0,0,0.1);">
                                    <div class="text-box" data-maxlength="50" dir="ltr"> <p>'.$row["description"].'</p></div></a><small>['.$total_count.' Downloads]</small>';
                                }
                                else{

                                    $total_count = intval($row['total_downloads']);

                                    $link = "#resources_popups";
                                    $tag = '<a  class="res_unique_select" data-page="' . $row['page'] . '" data-id="'.$row['id'].'"  href="'.$link.'" type="button" data-toggle="modal" title="Photo title" style=" background: rgba(0,0,0,0.1);">
                                	<div class="text-box" data-maxlength="50" dir="ltr"> <p>'.$row["description"].'</p></div></a><small>['.$total_count.' Downloads]</small>';

                                }

                                ?>
                                <div class="caption-content">
                                    <?php echo $tag;?>
                                </div>
                                <div class="social_share">
                                    <a href="https://www.facebook.com/sharer.php?u=https://stickyposts.net/sticky/TemplateEn.php?file=<?= $row['id']; ?>" target="_blank"><i class="fab fa-facebook"></i></a>
                                    <a href="https://twitter.com/intent/tweet?text=Sticky%20posts%20-%20Scheduling%20tool&url=https://stickyposts.net/sticky/TemplateEn.php?file=<?= $row['id']; ?>&text=Simple Share Buttons&hashtags=simplesharebuttons" target="_blank"><i class="fab fa-twitter"></i></a>
                                    <a href="https://web.whatsapp.com/send?text=https://stickyposts.net/sticky/TemplateEn.php?file=<?= $row['id']; ?>" target="_blank"><i class="fab fa-whatsapp"></i></a>
                                    <a href="https://www.linkedin.com/shareArticle?title=Sticky%20posts%20-%20Scheduling%20tool&url=https://stickyposts.net/sticky/TemplateEn.php?file=<?= $row['id']; ?>" target="_blank"><i class="fab fa-linkedin"></i></a>
                                    <a href="https://www.facebook.com/dialog/send?link=https://stickyposts.net/sticky/TemplateEn.php?file=<?= $row['id']; ?>&app_id=521270401588372&redirect_uri=https%3A%2F%2Fwww.sharethis.com" target="_blank"><i class="fab fa-facebook-messenger"></i></a>
                                </div>
                            </div>
                            <?php } ?>
                        </div>


                    </div>
                </div>
            </div>

            <!-- /grid -->

            <!-- /container -->
        </div>
    </main>
    <!-- Modal -->
    <div class="modal fade backg-7 pad-t-60" id="DownloadPDF" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
        <div class="modal-dialog wid-480" role="document">
            <div class="modal-content back-l colo-w wid-480" >
                <div class="modal-header p-0">
                    <img src="<?php echo e(get_theme_frontend_url('assets/sticky/logo-s.png')); ?>" class='wid-54 z-in-10'>
                    <button type="button" class="close pad-0 pos-abs right-20 top-26" data-dismiss="modal" aria-label="Close" >
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div id="modal-body" class="text-center mar60-0 ">
                    <div class="lds-ring">
                        <img src="<?php echo e(get_theme_frontend_url('assets/sticky/logo-s.png')); ?>">
                    </div>
                    <div class="modal-body">
                        <div class='subscribe_form box-s' >
                <span class='input-group-btn'>

                    <a class='DownloadPDF btn btn-primary colo-r-i' res-id='' href='' download> Download Now </a>

                </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
    <script>

        $(document).ready(function(){

            $(".res").click(function(){
                // $(".modal-body").html("")
                $(".DownloadPDF").attr('href', $(this).data('src'));
                $(".DownloadPDF").attr('res-id', $(this).data('id'));
                $('#form_pop1').append('<input type="hidden" name="page" value="' + $(this).data('id')  + '">');
                $('#form_pop2').append('<input type="hidden" name="page" value="' + $(this).data('id')  + '">');
                // $('#form_pop1').append('<input type="hidden" name="page" value="' + $(this).data('page')  + '">');
                // $('#form_pop2').append('<input type="hidden" name="page" value="' + $(this).data('page')  + '">');
                $('#form_pop1').append('<input type="hidden" name="res_id" value="' + $(this).data('id')  + '">');
                $('#form_pop2').append('<input type="hidden" name="res_id" value="' + $(this).data('id')  + '">');

            });

            $('.res_unique_select').click(function (){

                $('input:hidden[name=page]').remove();
                $('input:hidden[name=res_id]').remove();

                $('#form_pop1').append('<input type="hidden" name="page" value="' + $(this).data('id')  + '">');
                $('#form_pop2').append('<input type="hidden" name="page" value="' + $(this).data('id')  + '">');
                // $('#form_pop1').append('<input type="hidden" name="page" value="' + $(this).data('page')  + '">');
                // $('#form_pop2').append('<input type="hidden" name="page" value="' + $(this).data('page')  + '">');
                $('#form_pop1').append('<input type="hidden" name="res_id" value="' + $(this).data('id')  + '">');
                $('#form_pop2').append('<input type="hidden" name="res_id" value="' + $(this).data('id')  + '">');
            });


        });

        $("#nav-btn").click(function(){
            $("#main-nav-bar").show("slow");
            $("#nav-btn").hide();
            $("#close-nav-btn").show();
        });
        $("#close-nav-btn").click(function(){
            $("#main-nav-bar").hide("slow");
            $("#nav-btn").show();
            $("#close-nav-btn").hide();
        });
        $(".res").click(function(){

            // $(".modal-body").html("")
            $(".DownloadPDF").attr('href', $(this).data('src'));
            $(".DownloadPDF").attr('res-id', $(this).data('id'));
        })

        $(".DownloadPDF").click(function(){
            var resource_id = $(this).attr("res-id");
            $.ajax({
                url:    'resource-count.php',
                method:   'POST',
                dataType:   'text',
                data:   {"resource_id": resource_id} ,
                success : function(response){
                    // window.location.href ="https://stickyposts.net/sticky/thanks-en.php?code=bba272ac88fe0c642691612a16af25cd&page=4"

                    window.location.href ="https://stickyposts.net/sticky/thanks-en.php?file=" + resource_id

                }
            })
        });
        $(".report .owl-carousel").owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            center: true,
            autoplay: false,
            navText: [
                '<i class="fa fa-angle-left"></i>',
                '<i class="fa fa-angle-right"></i>'
            ],
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                750: {
                    items: 2
                },
                1000: {
                    items: 4
                }
            }
        });
        function myFunction() {
            // Declare variables
            var input, filter, ul, li, a, i, txtValue;
            input = document.getElementById('myInput');
            filter = input.value.toUpperCase();
            ul = document.getElementById("myUL");
            li = ul.getElementsByTagName('li');

            // Loop through all list items, and hide those who don't match the search query
            for (i = 0; i < 9; i++) {
                a = li[i].getElementsByTagName("a")[0];
                txtValue = a.textContent || a.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    li[i].style.display = "";
                } else {
                    li[i].style.display = "none";
                }
            }
        }

        function myFunction1() {
            // Declare variables
            var input, filter, ul, li, a, i, txtValue;
            input = document.getElementById('myInput1');
            filter = input.value.toUpperCase();
            ul = document.getElementById("myUL1");
            li = ul.getElementsByTagName('li');

            // Loop through all list items, and hide those who don't match the search query
            for (i = 0; i < 9; i++) {
                a = li[i].getElementsByTagName("a")[0];
                txtValue = a.textContent || a.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    li[i].style.display = "";
                } else {
                    li[i].style.display = "none";
                }
            }
        }


        $(".text-box p").text(function(index, currentText) {
            var maxLength = $(this).parent().attr('data-maxlength');
            if(currentText.length >= maxLength) {
                return currentText.substr(0, maxLength) + "...";
            } else {
                return currentText
            }
        });
    </script>

    <?php echo $__env->make('sticky.layout.partials.popups', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopPush(); ?>


<?php echo $__env->make('sticky.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Laravel-Projects\StickyPost2\inc\themes\frontend\pure\views/sticky/pages/templates.blade.php ENDPATH**/ ?>