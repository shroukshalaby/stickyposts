<div id="cookies2" style="font-size:.9em;background-color:#444;padding:.7em;text-align:center;display:none;position:fixed;bottom:0;width:100%;z-index:85285474;">
    <div class="row">
        <div class="col-md-8 col-12 text-center">
            <span class="cookies-notice" style="color:#ddd;font-size: 12px;"> <?php echo e(__('cookies-t1')); ?>  <a href="<?php echo e(get_url('terms')); ?>"> </a> <?php echo e(__('cookies-t2')); ?> </span>
        </div>
        <div class="col-md-4 col-12 text-center mt-md-0 mt-2">
            <span class="cookies-button" style="color: #fff;background-color: #9c33c3;padding: 8px;cursor: pointer;"><?php echo e(__('cookies-t3')); ?> </span>
        </div>
    </div>
</div>
<!-- loaders -->
<!--<div class="modal fade loader bd-example-modal-lg"  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="background: rgba(0, 0, 0, 0.7); padding-top: 60px;z-index:999999;">-->
<!--    <div class="modal-dialog miniDialog" role="document">-->
<!--        <div class="modal-content" style="background: linear-gradient(275deg, #5e2298, #320b82);color:#fff">-->
<!--            <div class="modal-header pl-2 p-1">-->
<!--                <img src="<?php echo e(get_theme_frontend_url('assets/sticky/logo-s.png')); ?>" style="width: 49px;z-index: 10;">-->

<!--                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position: absolute;top: 12px;right: 20px;">-->
<!--                    <span aria-hidden="true">×</span>-->
<!--                </button>-->
<!--            </div>-->
<!--            <div id="modal-body" class="text-center" style="margin: 60px 0;">-->
<!--                <div class="lds-ring">-->
<!--                    <img src="<?php echo e(get_theme_frontend_url('assets/sticky/logo-s.png')); ?>">-->
<!--                </div>-->

<!--                <div class="modal-body"></div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<style>
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

</style>

<script src="<?php echo e(get_theme_frontend_url('assets/sticky/js/jquery-3.4.1.min.js')); ?>"></script>
<script src="<?php echo e(get_theme_frontend_url('assets/sticky/js/jquery-ui.min.js')); ?>"></script>
<script src="<?php echo e(get_theme_frontend_url('assets/sticky/js/popper.js')); ?>"></script>
<script src="<?php echo e(get_theme_frontend_url('assets/sticky/js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(get_theme_frontend_url('assets/sticky/js/slick.min.js')); ?>"></script>
<script src="<?php echo e(get_theme_frontend_url('assets/sticky/js/theme.js')); ?>"></script>
<script src="<?php echo e(get_theme_frontend_url('assets/sticky/js/zenith.js')); ?>"></script>
<script src="<?php echo e(get_theme_frontend_url('assets/sticky/js/jquery_cookies.js')); ?>"></script>
 <?php echo $__env->make('sticky.layout.partials.common.sweetalert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('sticky.layout.partials.common.inboundLeadScript',['selector'=>'.formevent','type'=>'event'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('sticky.layout.partials.common.inboundLeadScript',['selector'=>'.newsletter_subscription','type'=>'newsletterSubscription'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('sticky.layout.partials.firebase', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<script>

    function resend_activation(email,category){
        // console.log('fdkmskf');
        if(category == 'freetrial'){
            $.ajax({
                url:"freeTrialEn.php",
                dataType:'text',
                type:"get",
                data:{
                    email: email,
                    resend_active: 1
                },
                success:function(response){

                }
            });
        }
        else if(category == 'resources'){
            $.ajax({
                url:"resources.php",
                dataType:'text',
                type:"get",
                data:{
                    email: email,
                    resend_active: 1,
                    lang: 'en'
                },
                success:function(response){

                }
            });
        }
        else if(category == 'event'){
            $.ajax({
                url:"eventajaxen.php",
                dataType:'text',
                type:"get",
                data:{
                    email: email,
                    resend_active: 1
                },
                success:function(response){

                }
            });
        }
        else if(category == 'instructor'){
            $.ajax({
                url:"instructor_ajax.php",
                dataType:'text',
                type:"get",
                data:{
                    email: email,
                    resend_active: 1,
                    lang: 'en'
                },
                success:function(response){

                }
            });
        }
        else if(category == 'contactus'){
            $.ajax({
                url:"contact-ajax.php",
                dataType:'text',
                type:"get",
                data:{
                    email: email,
                    resend_active: 1,
                    lang: 'en'
                },
                success:function(response){

                }
            });
        }
        else if(category == 'contactus_webinar'){
            $.ajax({
                url:"contact-ajax.php",
                dataType:'text',
                type:"get",
                data:{
                    email: email,
                    resend_active_webinar: 1,
                    lang: 'en'
                },
                success:function(response){

                }
            });
        }
    }

    $(document).ready(function() {

        if (undefined == $.cookie('cookies2'))
            $('#cookies2').show();

        $('.cookies-button').click(function() {
            $.cookie(
                'cookies2',
                'ok', {
                    expires: 365,
                    path: '/'
                }
            );
            $('#cookies2').hide();
        });
        $("#package").prop('disabled',true);
        $("#pN").change(function(){
            $("#package").prop('disabled',false);
            var provider =$(this).val();
            var hide =document.getElementsByClassName("controlOption");
            for (var i=0;i<hide.length;i+=1){
                hide[i].style.display = 'none';
            }
            var show =document.getElementsByClassName(provider);
            for (var i=0;i<show.length;i+=1){
                show[i].style.display = 'block';
            }

        });
        // $(".comp-btn").click(function(){
        //     if($("#package").val() && $("#pN").val()){
        //     // $("#compare").modal("show");
        //     }
        // });
        // $("#closePop").click(function(){
        //      $("#compare").modal("hide");
        // });

        $("#downNow").click(function(){
            $("#myModal").modal("show");
        });
        $("#closeModal").click(function(){
            $("#myModal").modal("hide");
        });
        $("#downNows").click(function(){
            $("#myModals").modal("show");
        });



        $(".close").click(function(){
            $('.loaders').modal("hide");
        });
        // Reviews slider
        $(".reviews .owl-carousel").owlCarousel({
            loop: true,
            margin: 35,
            nav: true,
            center: true,
            autoplay: true,
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
                    items: 3
                }
            }
        });


    });

    $('#default').zenith({
        layout: 'default' ,
        slideSpeed: 450,
        autoplaySpeed: 2000
    });


    page_url_ = ''
    page_url_ = '<?php echo $_SERVER['HTTP_HOST'] . strtok(strtok($_SERVER['REQUEST_URI'], '#'), '?'); ?>'

    // start download resources
    $('#alerts').hide();
    $(document).ready(function(){

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
        $('#form2').submit(function(e){

            e.preventDefault();

            $.ajax({
                url:    'ajaxs.php',
                method:   'POST',
                dataType:   'text',
                data:   $(this).serialize() ,
                success : function(response)
                {$('#get').html(response);}
            });

            $('#add').modal('hide');
            $('#response').modal('show');


        });

    });


    $("#download").hide();
    $("#sub").click(function(){
        $("#form").hide();
        $("#download").show("500");
    })

    $(document).ready( function() {

        $('.clients').slick({
            centerMode: true,
            autoplay: true,
            infinite: true,
            speed:200,
            slidesToShow: 7,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 2
                    }
                }
            ]
        });


        if ( $(window).width() > 567) {
            $("#WhoBenefit").addClass("container");
        }




        // active event
        var event = window.location.href;
        var event = event.includes("event");
        if(event == true){
            $('.loader').modal('show');
            $('.lds-ring').show();
            $('.modal-body').html($(".codedone").val());
            setTimeout(function(){$('.loader').modal('toggle');},4000);
        }
        // end active event

        // active learn
        var learn = window.location.href;
        var learn = learn.includes("learn");
        if(learn == true){
            $('.loader').modal('show');
            $('.lds-ring').show();
            $('.modal-body').html($(".codedone").val());
            setTimeout(function(){$('.loader').modal('toggle');},4000);
        }
        // end active learn

        // active learn
        var enterprice = window.location.href;
        var enterprice = enterprice.includes("enterprice");
        if(enterprice == true){
            $('.loader').modal('show');
            $('.lds-ring').show();
            $('.modal-body').html($(".codedone").val());
            setTimeout(function(){$('.loader').modal('toggle');},4000);
        }
        // end active learn

        var developer = window.location.href;
        var developer = developer.includes("developer_activation");
        if(developer == true){
            $('.loader').modal('show');
            $('.lds-ring').show();
            $('.modal-body').html($(".codedone").val());
            setTimeout(function(){$('.loader').modal('toggle');},4000);
        }

        var training = window.location.href;
        var training = training.includes("training_activation");
        if(training == true){
            $('.loader').modal('show');
            $('.lds-ring').show();
            $('.modal-body').html($(".codedone").val());
            setTimeout(function(){$('.loader').modal('toggle');},4000);
        }

        var newsletter = window.location.href;
        var newsletter = newsletter.includes("newsletter");
        if(newsletter == true){
            $('.loader').modal('show');
            $('.lds-ring').show();
            $('.modal-body').html($(".codedone").val());
            setTimeout(function(){$('.loader').modal('toggle');},4000);
        }

        //alert($("#codedone").val());
    });



</script>
<?php /**PATH F:\Laravel-Projects\StickyPost2\inc\themes\frontend\pure\views/sticky/layout/partials/footer/footerJs.blade.php ENDPATH**/ ?>