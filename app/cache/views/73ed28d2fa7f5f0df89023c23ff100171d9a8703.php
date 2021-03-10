<style>
.owl-nav .owl-prev {
    left: -10px;
}
.owl-nav .owl-next {
    right: -10px;
}
.card p{
    color: #787c93;
    line-height: 1.3;  
}
</style>
<section class="reviews">
    <div class="container">
        <div class="owl-carousel">

            <!-- card -->
            <div class="item">
                <div class="card">
                    <div class="row">
                        <div class="col-xs-8 col-8 info-col px-4">
                            <h4 class="title text-start"><?php echo e(__('h_rev_t1')); ?></h4>
                            <h6 class="sub-title text-start"><?php echo e(__('h_rev_j1')); ?></h6>
                        </div>

                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-4 col-4 img-col">
                            <div class="user" style="background-image: url('https://stickyposts.net/sticky/images/Walter.jpg')"></div>
                        </div>

                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12  px-4 <?php echo e(getCurrentLangIdiom() == 'ar' ? ' text-right'  : ''); ?>">
                            <p class="fs-13 m-0"><?php echo e(__('h_rev_sub_t1')); ?> </p>
                        </div>
                    </div>
                </div>
            </div>


            <!-- card -->
            <div class="item">
                <div class=" card">
                    <div class="row">
                        <div class="col-xs-8 col-8 info-col px-4">
                            <h4 class="title text-start"><?php echo e(__('h_rev_t2')); ?></h4>
                            <h6 class="sub-title text-start"><?php echo e(__('h_rev_j2')); ?></h6>
                        </div>

                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-4 col-4 img-col">
                            <div class="user" style="background-image: url('https://stickyposts.net/sticky/images/Tom.jpg')"></div>
                        </div>

                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 px-4 <?php echo e(getCurrentLangIdiom() == 'ar' ? ' text-right'  : ''); ?>">
                            <p class="fs-13 m-0"><?php echo e(__('h_rev_sub_t2')); ?></p>
                        </div>
                    </div>
                </div>
            </div>



            <!-- card -->
            <div class="item">
                <div class=" card">
                    <div class="row">
                        <div class="col-xs-8 col-8 info-col px-4">
                            <h4 class="title text-start"><?php echo e(__('h_rev_t3')); ?></h4>
                            <h6 class="sub-title text-start"><?php echo e(__('h_rev_j3')); ?></h6>
                        </div>

                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-4 col-4 img-col">
                            <div class="user" style="background-image: url('https://stickyposts.net/sticky/images/Jessica.jpg')"></div>
                        </div>

                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 px-4 <?php echo e(getCurrentLangIdiom() == 'ar' ? ' text-right'  : ''); ?>">
                            <p class="fs-13 m-0">
                                <?php echo e(__('h_rev_sub_t3')); ?>

                            </p>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>
<?php /**PATH F:\Laravel-Projects\StickyPost2\inc\themes\frontend\pure\views/sticky/layout/partials/common/reviews.blade.php ENDPATH**/ ?>