<style>
    .loader{
        z-index:854585;
    }
    .button {
        background-color: #004A7F;
        -webkit-border-radius: 10px;
        border-radius: 10px;
        border: none;
        color: #FFFFFF;
        cursor: pointer;
        display: inline-block;
        font-size: 20px;
        text-align: center;
        text-decoration: none;
        -webkit-animation: glowings 1500ms infinite;
        -moz-animation: glowings 1500ms infinite;
        -o-animation: glowings 1500ms infinite;
        animation: glowings 1500ms infinite;
    }
    @-webkit-keyframes glowings {
        0% { background-color: #FF0000; -webkit-box-shadow: 0 0 3px #FF0000; }
        50% { background-color: #f5c521; -webkit-box-shadow: 0 0 40px #f5c521; }
        100% { background-color: #FF0000; -webkit-box-shadow: 0 0 3px #FF0000; }
    }

    @-moz-keyframes glowings {
        0% { background-color: #FF0000; -moz-box-shadow: 0 0 3px #FF0000; }
        50% { background-color: #f5c521; -moz-box-shadow: 0 0 40px #f5c521; }
        100% { background-color: #FF0000; -moz-box-shadow: 0 0 3px #FF0000; }
    }

    @-o-keyframes glowings {
        0% { background-color: #FF0000; box-shadow: 0 0 3px #FF0000; }
        50% { background-color: #f5c521; box-shadow: 0 0 40px #f5c521; }
        100% { background-color: #FF0000; box-shadow: 0 0 3px #FF0000; }
    }

    @keyframes glowings {
        0% { background-color: #FF0000; box-shadow: 0 0 3px #FF0000; }
        50% { background-color: #f5c521; box-shadow: 0 0 40px #f5c521; }
        100% { background-color: #FF0000; box-shadow: 0 0 3px #FF0000; }
    }

    /****************************analyzer offer button*************************************/
    .ana-button {
        background-color: #004A7F;
        -webkit-border-radius: 10px;
        border-radius: 10px;
        border: none;
        color: #FFFFFF;
        cursor: pointer;
        display: inline-block;
        font-size: 20px;
        text-align: center;
        text-decoration: none;
        -webkit-animation: ana-glowings 1500ms infinite;
        -moz-animation: ana-glowings 1500ms infinite;
        -o-animation: ana-glowings 1500ms infinite;
        animation: ana-glowings 1500ms infinite;
    }
    @-webkit-keyframes ana-glowings {
        0% { background-color: #f5c521; -webkit-box-shadow: 0 0 3px #f5c521; }
        50% { background-color: #320b82; -webkit-box-shadow: 0 0 40px #320b82; }
        75% { background-color: #f5c521; -webkit-box-shadow: 0 0 3px #f5c521; }
        100% { background-color: #320b82; -webkit-box-shadow: 0 0 40px #320b82; }
    }

    @-moz-keyframes ana-glowings {
        0% { background-color: #f5c521; -moz-box-shadow: 0 0 3px #f5c521; }
        50% { background-color: #320b82; -moz-box-shadow: 0 0 40px #320b82; }
        100% { background-color: #f5c521; -moz-box-shadow: 0 0 3px #f5c521; }
    }

    @-o-keyframes ana-glowings {
        0% { background-color: #f5c521; box-shadow: 0 0 3px #f5c521; }
        50% { background-color: #320b82; box-shadow: 0 0 40px #320b82; }
        100% { background-color: #f5c521; box-shadow: 0 0 3px #f5c521; }
    }

    @keyframes ana-glowings {
        0% { background-color: #f5c521; box-shadow: 0 0 3px #f5c521; }
        50% { background-color: #320b82; box-shadow: 0 0 40px #320b82; }
        100% { background-color: #f5c521; box-shadow: 0 0 3px #f5c521; }
    }

    .modal h3{
        text-transform: uppercase;
    }
    .submit{
        text-transform: uppercase;
    }
    button{
        border:none;
    }
    #contactUsAfter30SecAr .mb-1{
        margin-bottom: 0.25rem !important;
    }
    #pills-tab .active {
        background: #f9c412!important;
        color: #320b82;
        border-radius: 5px;
    }
    .model-tabs {
        background: #fff!important;
        color: #111;
        padding: 2px 20px;
        line-height: 1;
        border-radius: 5px;
    }
    .modal h5 {
        font-size: 1.5rem;
    }
    @media(max-width:537px){
        .request_call_form{
            margin-right:auto;
        }
        .affiliate-text-mobile{
            font-size:16px;
        }
        .affiliate-htext-mobile{
            font-size:14px;
        }
        .modal{
            padding-right:0!important;
        }
    }
</style>


<div id="popup_load" class="modal fade bd-example-modal-lg" role="dialog" style='background: rgba(0,0,0,0.7)'>
    <div class="modal-dialog miniDialog" >

        <div class="modal-content" style="background: linear-gradient(275deg, #5e2298, #320b82);color:#fff">
            <div class="modal-header p-0" style="position: relative;height: 50px;">
                <img src="https://stickyposts.net/sticky/logo-s.png" style="width: 49px;z-index: 10;position: absolute;left: 0;">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position: absolute;top: 12px;right: 20px;">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="popup_body">
            </div>
        </div>

    </div>
</div>


<script>

    $(document).ready( function() {

        $('#popup_load').on('submit', '.formPop', function(e){
            e.preventDefault(e);
            $('.modalpopup').modal('show');
            $('.lds-ring').show();
            $('.body-popup').html('....');
            $('.modalpopup').css("z-index", "45224525");
            $.ajax({
                url:"https://stickyposts.net/sticky/submitPop.php",
                dataType:'json',
                type:"POST",
                data:$(this).serialize() + '&token=' + getToken(),
                success:function(response){
                    if(response == 1){
                        $('.lds-ring').hide();
                        $('.body-popup').html("<h5 style='color:#fff;line-height: 1.8;font-size:1.2rem;'>You will receive an email to confirm your email address</h5>");
                        setTimeout(function(){
                            $('.modalpopup').modal('hide');
                        },4000);
                    }
                    else if (response == 0){
                        $('.lds-ring').hide();
                        $('.body-popup').html("<h5 style='color:#fff;line-height: 1.8;font-size:1.2rem;'>This email already exists, please try using another mail.</h5>");
                        setTimeout(function(){
                            $('.modalpopup').modal('hide');
                        },4000);
                    }
                    else if (response == 2){
                        $('.lds-ring').hide();
                        $('.body-popup').html("<h5 style='color:#fff;line-height: 1.8;font-size:1.2rem;'>This email already exists , but not activation You will receive an email to confirm your email address</h5>");
                    }
                    else if(response == 3){
                        $('.lds-ring').hide();
                        $('.body-popup').html("<h5 style='color:#fff;line-height: 1.8;font-size:1.2rem;'>You will now be directed to the Resources page</h5>");
                        window.location.href = "https://stickyposts.net/sticky/ReportsEn.php?name&page="+ '0';
                    }
                    else if (response == 4){
                        $('.lds-ring').hide();
                        $('.body-popup').html("<h5 style='color:#fff;line-height: 1.8;font-size:1.2rem;'>Email Address or Password is incorrect, Please try again</h5> <a href='https://stickyposts.net/sticky/forget.php?lang=en' style='text-decoration:underline'>Forget Password ?</a>");
                    }
                    else if (response == 5){
                        $('.lds-ring').hide();
                        $('.body-popup').html("<h5 style='color:#fff;line-height: 1.8;font-size:1.2rem;'>Please confirm your email first, To complete your login process in a successful way</h5>");
                    }
                }
            })
        });

        $('#popup_load').on('submit', '.signuptrialpop', function(e){
            $('.loader').modal('show');
            $('.lds-ring').show();
            $('.modal-body').html("....");
            e.preventDefault();

            $.ajax({

                url:    'https://stickyposts.net/sticky/freeTrialEn.php',
                method:   'POST',
                dataType:   'text',
                data:   $(this).serialize() + '&token=' + getToken(),
                success : function(response)
                {
                    if (response == 'exists_activated'){
                        $('.lds-ring').hide();
                        $('.loader .modal-body').html('<h5 style="color:#fff;line-height: 1.8;font-size:1.2rem;" class="m-2 text-light" style="font-size:1.2rem;">This email already exists and activated</h5>');
                        window.location.href = 'https://stickyposts.net/stickypost_register/register-en.php?language=2';
                        setTimeout(function(){
                            $('.loader').modal('hide');
                        },3000)

                    }
                    else if (response == 'general_status_1'){
                        $('.lds-ring').hide();
                        $('.loader .modal-body').html('<h5 style="color:#fff;line-height: 1.8;font-size:1.2rem;" class="m-2 text-light">You already have account on sticky post </h5><h5 style="color:#fff;line-height: 1.8;font-size:1.2rem;"> and now you will redirect to login page</h5>');
                        window.location.href = 'https://stickyposts.net/auth/login?language=0';
                        setTimeout(function(){
                            $('.loader').modal('hide');
                        },3000)
                    }
                    else if (response == 'general_status_2'){
                        $('.lds-ring').hide();
                        $('.loader .modal-body').html('<h5 style="color:#fff;line-height: 1.8;font-size:1.2rem;" class="m-2 text-light">This email already exists, you will redirect</h5><h5 style="color:#fff;line-height: 1.8;font-size:1.2rem;"> to complete registration.</h5>');
                        window.location.href='https://stickyposts.net/stickypost_register/register.php?language=2';
                        setTimeout(function(){
                            $('.loader').modal('hide');
                        },3000)

                    }
                    else if (response.includes('general_status_0.')){
                        $('.lds-ring').hide();
                        $('.loader .modal-body').html('<h5 style="color:#fff;line-height: 1.8;font-size:1.2rem;" class="m-2 text-light">You already have account on sticky post and now </h5><h5 style="color:#fff;line-height: 1.8;font-size:1.2rem;"> you will redirect to payment page</h5>');
                        setTimeout(function(){
                            $('.loader').modal('hide');
                        },3000)
                        window.location.href = 'https://stickyposts.net/stickypost_register/payment-en.php?user_id=' + response.substring(17, response.length) + '&type=sticky&state=new&promo=';
                    }

                    else{
                        $('.lds-ring').hide();
                        $('.loader .modal-body').html(response);
                        setTimeout(function(){$('.loader').modal('hide')},3000)
                    }

                }
            });

        });

        $('#popup_load').on('submit', '.formeventpop', function(e){
            $('.loader').modal('show');
            $('.lds-ring').show();
            $('.modal-body').html('....');
            e.preventDefault();

            $.ajax({
                url:    'https://stickyposts.net/sticky/eventajaxen.php',
                method:   'POST',
                dataType:   'text',
                data:   $(this).serialize() + '&token=' + getToken(),
                success : function(response)
                {
                    if(response == 1)
                    {
                        $('#online').modal('hide');
                        $('.modal-body').html("<h5 style='color:#fff;line-height: 1.8;font-size:1.2rem;' class='text-light m-2'>You will receive an email to </h5><h5 style='color:#fff;line-height: 1.8;font-size:1.2rem;'> confirm your email address  <a href='#'  style='color:#f9c412;' class='resend_active' data-email='$email' onclick='resend_activation(\"$email\", \"freetrial\")'> Resend Activation Mail </a></h5>");
                        setTimeout(function(){$('.loader').modal('hide');},3000);


                    }
                    else
                    {
                        $('.lds-ring').hide();
                        $('.modal-body').html("<h5 style='color:#fff;line-height: 1.8;font-size:1.2rem;' class='text-light m-2'>This email was used before. Please use another one </h5>  <a href='#'  class='resend_active'  style='color:#f9c412;' data-email='$email' onclick='resend_activation(\"$email\", \"freetrial\")'> Resend Activation Mail </a>");
                        setTimeout(function(){$('.loader').modal('hide');},3000)
                    }
                }
            })
        });

        $('#popup_load').on('submit', '.careerformpop', function(e){
            $('.loader').modal('show');
            $('.lds-ring').show();
            $('.modal-body').html('....');
            e.preventDefault();

            $.ajax({
                url:    'https://stickyposts.net/sticky/job-pop.php',
                method:   'POST',
                dataType:   'text',
                data:   $(this).serialize() + '&token=' + getToken(),
                success : function(response)
                {

                    $('#online').modal('hide');
                    $('.modal-body').html("<h5 style='color:#fff;line-height: 1.8;font-size:1.2rem;' class='text-light m-2'>You are successfully applied </h5>");
                    setTimeout(function(){$('.loader').modal('hide');},3000);

                }
            })
        });

        $('#popup_load').on('submit', '.formcontactpop', function(e){
            $('.loader').modal('show');
            $('.lds-ring').show();
            $('.modal-body').html('....');
            e.preventDefault();

            $.ajax({
                url:    'https://stickyposts.net/sticky/contact-ajax.php',
                method:   'POST',
                dataType:   'text',
                data:   $(this).serialize() + '&check_webinar=1&lang=en',

                success : function(response)
                {
                    if(~response.indexOf('activation')){
                        var om_elresponse = response.substring(11, response.length);
                        var resend_link = '<a href="#" style="color:#f9c412;" class="resend_active" data-email="'+ om_elresponse +'" onclick="resend_activation(\''+ om_elresponse +'\', \'contactus_webinar\')"> Resend activation e-mail </a>';
                        $('.lds-ring').hide();

                        $('.modal-body').html("<h5 style='color:#fff;line-height: 1.8;font-size:1.2rem;' class='text-light m-2'>You will receive an email </h5><h5 style='color:#fff;line-height: 1.8;font-size:1.2rem;'> to confirm your email address</h5>" + resend_link);
                    }
                    else if(response == 'notexists000'){
                        $('.lds-ring').hide();
                        $('.modal-body').html("<h5 style='color:#fff;line-height: 1.8;font-size:1.2rem;' class='text-light m-2'>This email  not exist, please signup</h5>");
                        setTimeout(function(){$('.loader').modal('hide');},10000)
                        window.location.href="https://stickyposts.net/LMS/home/sign_up";

                    }

                    else if (response == 'exists000'){

                        $('.lds-ring').hide();
                        $('.modal-body').html("<h5 style='color:#fff;line-height: 1.8;font-size:1.2rem;' class='text-light m-2'>This email already exists </h5><h5 style='color:#fff;line-height: 1.8;font-size:1.2rem;'>we already recieved your request.</h5>");
                        setTimeout(function(){$('.loader').modal('hide');},10000)
                        window.location.href="https://stickyposts.net/LMS/home/login";
                    }

                }

            })
        });

        $('#popup_load').on('submit', '.formenterprisepop', function(e){
            $('.loader').modal('show');
            $('.lds-ring').show();
            $('.modal-body').html('....');
            e.preventDefault();

            $.ajax({
                url:    'https://stickyposts.net/sticky/addEnterprice.php',
                method:   'POST',
                dataType:   'text',
                data:   $(this).serialize() + '&token=' + getToken(),
                success : function(response)
                {

                    $('#online').modal('hide');
                    $('.modal-body').html(response);

                }
            })
        });

        $("#popup_load").on('submit', '.formres', function(e){
            e.preventDefault(e);
            $('.loader').modal('show');
            $('.lds-ring').show();
            $('.modal-body').html('....');
            $.ajax({
                url:"resources.php",
                dataType:'text',
                type:"POST",
                data:$(this).serialize() + '&token=' + getToken(),
                success:function(response){
                    if(~response.indexOf('activation')){
                        var om_elresponse = response.substring(11, response.length);
                        var resend_link = '<a href="#" class="resend_active" data-email="'+ om_elresponse +'" onclick="resend_activation(\''+ om_elresponse +'\', \'resources\')"> Resend activation e-mail </a>';


                        $('.lds-ring').hide();

                        $('.modal-body').html("<h5 style='color:#fff;line-height: 1.8;'>You will receive an email </h5><h5 style='color:#fff;line-height: 1.8;'> to confirm your email address</h5>" + resend_link);
                    }
                    else if(~response.indexOf('acti7ation')){
                        var om_elresponse = response.substring(11, response.length);
                        var resend_link = '<a href="#" class="resend_active" data-email="'+ om_elresponse +'" onclick="resend_activation(\''+ om_elresponse +'\', \'resources\')"> Resend activation e-mail </a>';

                        $('.lds-ring').hide();
                        $('.modal-body').html("<h5 style='color:#fff;line-height: 1.8;'>This email already exists, </h5><h5 style='color:#fff;line-height: 1.8;'> please try using another mail.</h5>" + resend_link);
                        // setTimeout(function(){
                        //       $('.loader').modal('hide');
                        //   },3000)

                    }
                    else if(~response.indexOf('page')){
                        var om_elresponse = response.substring(5, response.length);
                        $('.lds-ring').hide();
                        $('.modal-body').html("<h5 style='color:#fff;line-height: 1.8;'>You will now be directed to the Resources page</h5>");

                        if (page_url_.indexOf('Template') != -1)
                            window.location.href = "https://stickyposts.net/sticky/TemplateEn.php?file="+om_elresponse;

                        //   if (page_url_.indexOf('Reports'))
                        else
                            window.location.href = "https://stickyposts.net/sticky/ReportsEn.php?file="+om_elresponse;

                        $("#myModals").modal("hide");

                    }
                    else if (response == 'exists000'){

                        $('.lds-ring').hide();
                        $('.modal-body').html("<h5 style='color:#fff;line-height: 1.8;'>This email already exists, </h5><h5 style='color:#fff;line-height: 1.8;'> please try using another mail.</h5>");

                    }
                    else if (response == 2){
                        $('.lds-ring').hide();
                        $('.modal-body').html("<h5 style='color:#fff;line-height: 1.8;'>This email already exists , but not activation You will receive </h5><h5 style='color:#fff;line-height: 1.8;'> an email to confirm your email address</h5>");
                        setTimeout(function(){
                            $('.loader').modal('hide');
                        },3000)
                        $("#myModals").modal("hide");
                    }
                        // else if(response == 3){
                        //   $('.lds-ring').hide();
                        //   $('.modal-body').html("<h5 style='color:#fff;line-height: 1.8;'>You will now be directed to the Resources page</h5>");
                        //   window.location.href = "https://stickyposts.net/sticky/ReportsEn.php?page=4";
                        //   $("#myModals").modal("hide");
                    // }
                    else if (response == 4){
                        $('.lds-ring').hide();
                        $('.modal-body').html("<h5 style='color:#fff;line-height: 1.8;'>Email Address or Password is incorrect, </h5><h5 style='color:#fff;line-height: 1.8;'> Please try again</h5> <a href='https://stickyposts.net/sticky/forget.php?lang=en' style='text-decoration:underline'>Forget Password ?</a>");
                        $("#myModals").modal("hide");
                    }
                    else if (response == 5){
                        $('.lds-ring').hide();
                        $('.modal-body').html("<h5 style='color:#fff;line-height: 1.8;'>Please confirm your email first, To </h5><h5 style='color:#fff;line-height: 1.8;'> complete your login process in a successful way</h5>");
                        $("#myModals").modal("hide");
                        setTimeout(function(){
                            $('.loader').modal('hide');
                        },3000)
                    }

                }
            })
        });

        $("#popup_load").on('submit', ".login", function(e){
            e.preventDefault(e);
            $('.loader').modal('show');
            $('.lds-ring').show();
            $('.modal-body').html('....');
            $.ajax({
                url:"resources.php",
                dataType:'text',
                type:"POST",
                data:$(this).serialize(),
                success:function(response){
                    if(response == 1){
                        $('.lds-ring').hide();
                        $('.modal-body').html("<h5 style='color:#fff;line-height: 1.8;'>You will receive an email </h5><h5 style='color:#fff;line-height: 1.8;'> to confirm your email address</h5>");
                        //   setTimeout(function(){
                        //       window.location.href = "https://stickyposts.net/sticky/thanks-en.php?page="+<?php //echo $page45?>;
                        //   },2000)
                    }
                    else if (response == 0){
                        $('.lds-ring').hide();
                        $('.modal-body').html("<h5 style='color:#fff;line-height: 1.8;'>This email already exists, </h5><h5 style='color:#fff;line-height: 1.8;'> please try using another mail.</h5>");
                        $("#myModals").modal("hide");
                    }
                    else if (response == 2){
                        $('.lds-ring').hide();
                        $('.modal-body').html("<h5 style='color:#fff;line-height: 1.8;'>This email already exists , but not activation You will receive </h5><h5 style='color:#fff;line-height: 1.8;'> an email to confirm your email address</h5>");
                        $("#myModals").modal("hide");
                    }
                        // else if(response == 3){
                        //   $('.lds-ring').hide();
                        //   $('.modal-body').html("<h5 style='color:#fff;line-height: 1.8;'>You will now be directed to the Resources page</h5>");
                        //   window.location.href = "https://stickyposts.net/sticky/ReportsEn.php?page=4";
                        //   $("#myModals").modal("hide");
                    // }
                    else if (response == 4){
                        $('.lds-ring').hide();
                        $('.modal-body').html("<h5 style='color:#fff;line-height: 1.8;'>Email Address or Password is incorrect, </h5><h5 style='color:#fff;line-height: 1.8;'> Please try again</h5> <a href='https://stickyposts.net/sticky/forget.php?lang=en' style='text-decoration:underline'>Forget Password ?</a>");
                        $("#myModals").modal("hide");
                    }
                    else if (response == 5){
                        $('.lds-ring').hide();
                        $('.modal-body').html("<h5 style='color:#fff;line-height: 1.8;'>Please confirm your email first, To </h5><h5 style='color:#fff;line-height: 1.8;'> complete your login process in a successful way</h5>");
                        $("#myModals").modal("hide");
                    }
                    else if(~response.indexOf('page')){
                        var om_elresponse = response.substring(5, response.length);
                        $('.lds-ring').hide();
                        $('.modal-body').html("<h5 style='color:#fff;line-height: 1.8;'>You will now be directed to the Resources page</h5>");

                        if (page_url_.indexOf('Template') != -1)
                            window.location.href = "https://stickyposts.net/sticky/TemplateEn.php?file="+om_elresponse;

                        //   if (page_url_.indexOf('Reports'))
                        else
                            window.location.href = "https://stickyposts.net/sticky/ReportsEn.php?file="+om_elresponse;

                        //   window.location.href = "https://stickyposts.net/sticky/ReportsEn.php?file="+om_elresponse;
                        $("#myModals").modal("hide");

                    }
                }
            })
        });

    });

</script>
