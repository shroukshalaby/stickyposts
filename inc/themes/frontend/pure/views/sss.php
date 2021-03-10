<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<h1 class="title-index"><?php echo html_escape($home_title); ?></h1>
<!--Include featured section-->
<?php

try {
    $conn = new PDO('mysql:host=localhost;dbname=idigtyow_magazine_blog2', 'idigtyow_admin', 'Mediagate2018',
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
} catch (PDOException $e) {
    print "Error!: ".$e->getMessage()."<br/>";
    die();
}
?>
<?php if ($this->general_settings->show_featured_section == 1): ?>
    <?php $this->load->view('post/_featured_posts', $featured_posts); ?>
<?php endif; ?>
<style>
    .carousel {
        margin-bottom: 0;
        padding: 30px 40px;
    }

    .carousel-control.left {
        background: #440202 !important;
    }

    .carousel-control.right {
        background: #440202 !important;
    }

    /* The controlsy */
    .carousel-control {
        left: -12px;
        height: 40px;
        width: 40px;
        background: none repeat scroll 0 0 #222222;
        border: 4px solid #FFFFFF;
        border-radius: 23px 23px 23px 23px;
        margin-top: 132px;
    }

    .carousel-control.right {
        right: -12px;
    }

    /* The indicators */
    .carousel-indicators {
        right: 50%;
        top: auto;
        bottom: -10px;
        margin-right: -19px;
    }

    /* The colour of the indicators */
    .carousel-indicators li {
        background: #cecece;
    }

    .carousel-indicators .active {
        background: #428bca;
    }

    .thumbnail {
        margin-bottom: 0 !important;
    }
</style>
<div id="wrapper" class="index-wrapper m-t-0">
    <div class="container">
        <div class="row">
            <!--Include news ticker-->
            <?php $this->load->view('post/_news_ticker', $breaking_news); ?>

            <div class="col-sm-12 col-xs-12 bn-header-mobile">
                <div class="row">
                    <?php $this->load->view("partials/_ad_spaces", ["ad_space" => "header", "class" => ""]); ?>
                </div>
            </div>
            <div id="content" class="col-sm-8 col-xs-12">
                <?php $x = 1;
                foreach ($this->categories as $category):
                    if ($category->show_at_homepage == 1 && $category->lang_id == $this->selected_lang->id):
                        if ($category->block_type == "block-1") {
                            $this->load->view('partials/_category_block_type_1', ['category' => $category]);
                        }
                        if ($category->block_type == "block-2") {
                            $this->load->view('partials/_category_block_type_2', ['category' => $category]);
                        }
                        if ($category->block_type == "block-3") {
                            $this->load->view('partials/_category_block_type_3', ['category' => $category]);
                        }
                        if ($category->block_type == "block-4") {
                            $this->load->view('partials/_category_block_type_4', ['category' => $category]);
                        }
                        if ($category->block_type == "block-5") {
                            $this->load->view('partials/_category_block_type_5', ['category' => $category]);
                        }
                        if ($x % 3 == 0) {
                            if ($x == 3) {
                                echo '
                       <div class="container-fluid p-b-30">
                       <div class="row"></div>
                       <div class="row">
                        
                       <h2 class="text-right" style=" margin: 0;direction: ltr;width: 20%;background: #440202;color: #fff;font-size: 16px;padding: 7px 10px;"> برامج قناة المحور</h2>
                       </div>
    <div class="row" style="background: #440202;">
		<div class="col-md-12">
                <div id="Carousel" class="carousel slide">
                 
              
                 
                <!-- Carousel items -->
                <div class="carousel-inner">
                    
                
                 
                <div class="item active">
                	<div class="row">
                		<div class="col-md-6"><a href="#" class="thumbnail"><img src="https://idigitalmagazine.com/website/assets/front/img/portfolios/featured/1601557566.jpg" alt="Image" style="max-width:100%;"></a></div>
                		<div class="col-md-6"><a href="#" class="thumbnail"><img src="https://idigitalmagazine.com/website/assets/front/img/portfolios/featured/1601557535.jpg" alt="Image" style="max-width:100%;"></a></div>
                		</div><!--.row-->
                </div><!--.item-->
                 
                <div class="item">
                	<div class="row">
                		<div class="col-md-6"><a href="#" class="thumbnail"><img src="https://idigitalmagazine.com/website/assets/front/img/portfolios/featured/1601567587.jpg" alt="Image" style="max-width:100%;"></a></div>
                		<div class="col-md-6"><a href="#" class="thumbnail"><img src="https://idigitalmagazine.com/website/assets/front/img/portfolios/featured/1601557433.jpg" alt="Image" style="max-width:100%;"></a></div>
                		</div><!--.row-->
                </div><!--.item-->
                  <div class="item">
                	<div class="row">
                		<div class="col-md-6"><a href="#" class="thumbnail"><img src="https://idigitalmagazine.com/website/assets/front/img/portfolios/featured/1601557318.jpg" alt="Image" style="max-width:100%;"></a></div>
                		<div class="col-md-6"><a href="#" class="thumbnail"><img src="https://idigitalmagazine.com/website/assets/front/img/portfolios/featured/1601557186.jpg" alt="Image" style="max-width:100%;"></a></div>
                		</div><!--.row-->
                </div><!--.item-->
                 
                </div><!--.carousel-inner-->
                  <a data-slide="prev" href="#Carousel" class="left carousel-control">‹</a>
                  <a data-slide="next" href="#Carousel" class="right carousel-control">›</a>
                </div><!--.Carousel-->
                 
		</div>
	</div>
</div><!--.container-->
                       ';

                            }
                            if ($x == 6) {
                                echo '';

                            }
                            if ($x == 9) {

                                echo '<div class="row"></div><div class=""> <h4 class="ads-header text-left"> محتوى إعلاني</h4> </div>'.'<img src="https://idigitalmagazine.com/website/assets/front/img/ads/Osama Kamal505x180.jpg" class="img-fluid p-b-30" width="100%">';

                            }
                            if ($x == 12) {

                                echo '<div class="row"></div><div class=""> <h4 class="ads-header text-left"> محتوى إعلاني</h4> </div>'.'<img src="https://idigitalmagazine.com/website/assets/front/img/ads/hassanrateb505x180.jpg" class="img-fluid p-b-30" width="100%">';

                            }
                            if ($x == 15) {

                                echo '<div class="row"></div><div class=""> <h4 class="ads-header text-left"> محتوى إعلاني</h4> </div>'.'<img src="https://idigitalmagazine.com/website/assets/front/img/ads/Elmehwar505x180.jpg" class="img-fluid p-b-30" width="100%">';

                            }
                        }
                        $x++;
                    endif;
                endforeach; ?>

                <!--Include banner-->
                <?php $this->load->view("partials/_ad_spaces", ["ad_space" => "index_bottom", "class" => "bn-p-b"]); ?>

                <!--Index Latest Posts-->
                <?php if ($this->general_settings->show_latest_posts == 1): ?>
                    <?php if (count($latest_posts) > 0): ?>
                        <div class="col-sm-12 col-xs-12">
                            <div class="row">
                                <section class="section">
                                    <div class="section-head">
                                        <h4 class="title">
                                            <a href="<?php echo generate_url('posts'); ?>">
                                                <?php echo trans("latest_posts"); ?>
                                            </a>
                                        </h4>

                                        <a href="<?php echo generate_url('posts'); ?>" class="a-view-all">
                                            <?php echo trans("view_all_posts"); ?>&nbsp;&nbsp;&nbsp;<i
                                                    class="icon-arrow-right" aria-hidden="true"></i>
                                        </a>
                                    </div><!--End section head-->

                                    <div class="section-content">
                                        <div class="row latest-articles">
                                            <input type="hidden" id="load_more_posts_lang_id"
                                                   value="<?php echo $this->selected_lang->id; ?>">
                                            <div id="last_posts_content">
                                                <?php $this->last_visible_post_id = 1;
                                                $this->load->view('post/_index_latest_posts', ["skip" => 0, "visible_posts_count" =>  $this->post_load_more_count]); ?>
                                            </div>
                                        </div>
                                    </div><!--End section content-->

                                    <div id="load_posts_spinner" class="col-sm-12 col-xs-12 load-more-spinner">
                                        <div class="row">
                                            <div class="spinner">
                                                <div class="bounce1"></div>
                                                <div class="bounce2"></div>
                                                <div class="bounce3"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php if (count($latest_posts) > $this->post_load_more_count): ?>
                                        <div class="col-sm-12 col-xs-12 p-b-30">
                                            <div class="row">
                                                <button class="btn-load-more" onclick="load_more_posts();">
                                                    <?php echo trans("load_more"); ?>
                                                </button>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <div class="container-fluid p-b-30">
                                        <div class="row"></div>
                                        <div class="row">

                                            <h2 class="text-right"
                                                style=" margin: 0;direction: ltr;width: 20%;background: #440202;color: #fff;font-size: 16px;padding: 7px 10px;">
                                                برامج قناة المحور</h2>
                                        </div>
                                        <div class="row" style="background: #440202;">
                                            <div class="col-md-12">
                                                <div id="Carousel" class="carousel slide">


                                                    <div class="carousel-inner">

                                                        <?php
                                                        $stmt = $conn->prepare("SELECT * from posts ORDER BY id desc LIMIT 8");
                                                        $stmt->execute();
                                                        $rows = $stmt->fetchAll();

                                                        $i = 0;
                                                        foreach ($rows as $row) {
                                                             if ($i !=7){
                                                            $img1 = $rows[$i]['image_default'];
                                                            $img2 =  $rows[$i+1]['image_default'];
                                                        }

                                                            $date = $row['created_at'];
                                                            $newdate = date('M j, Y', strtotime($date));

                                                           echo' <div class="item active">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                    <a href="#" class="thumbnail">
                                                                    <img src="https://elmehwarnews.com/blog/' . $img1 . '" alt="Image" style="max-width:100%;">
                                                                    </a>
                                                                    
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        <a href="#" class="thumbnail">
                                                                            <img src="https://elmehwarnews.com/blog/' . $img2 .'" alt="Image" style="max-width:100%;">
                                                                        </a>

                                                                    </div>
                                                                    
                                                                </div>
                                                            </div>';
                                                           $i++;

                                                                 }


                                                        ?>


                                                    </div>
                                                    <a data-slide="prev" href="#Carousel" class="left carousel-control">‹</a>
                                                    <a data-slide="next" href="#Carousel"
                                                       class="right carousel-control">›</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="">
                                        <h4 class="ads-header">محتوي اعلاني</h4>
                                        <a href=""><img
                                                    src="https://idigitalmagazine.com/blog2/uploads/blocks/block_5f763151c46d0.jpg"
                                                    alt=""></a></div>

                                </section><!--End section-->
                            </div>
                        </div>
                    <?php endif; ?>


                <?php endif; ?>
            </div>

            <div id="sidebar" class="col-sm-4 col-xs-12">
                <!--include sidebar -->
                <?php $this->load->view('partials/_sidebar'); ?>

            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $('#Carousel').carousel({
            interval: 5000
        })
    });
</script>
