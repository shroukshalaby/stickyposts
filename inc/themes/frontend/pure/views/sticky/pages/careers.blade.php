@extends('sticky.layout.master')
@push('head')
    <link rel="stylesheet" href="css/style_english.css">
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

        body {
            background: #fff;
        }

        .morecontent span {
            display: none;
        }

        .main- a {
            color: #333 !important;
            font-size: 11px;
        }

        li {
            list-style-type: none;
        }

        .hidden {
            display: none;
        }

        .btn-warning.focus, .btn-warning:focus {
            box-shadow: none !important;
        }

        .btn-info.focus, .btn-info:focus {
            box-shadow: none !important;
        }

        .card-body-shadow {
            background: #fff;
            padding: 10px;
            -webkit-box-shadow: 0px 0px 19px -4px rgba(47, 22, 126, 1);
            -moz-box-shadow: 0px 0px 19px -4px rgba(47, 22, 126, 1);
            box-shadow: 0px 0px 19px -4px rgba(47, 22, 126, 1);
            border-radius: 0px;
        }

        .section-head {
            color: #320b82;
            font-weight: 800;
            font-family: 'Cairo', sans-serif;

        }

        .sticky-btn {
            background: linear-gradient(90deg, #320b82, #9c33c3);
            color: #fff !important;
            padding: 2px 10px;

        }

        /****************************************************************Career page*******************************************************************/
        .career2 {
            color: #34383d;
        }

        .career-details {
            height: 700px;
        }

        .career2 .career-details .card-header .btn-link:hover {
            text-decoration: none;

        }

        .career2 .team p {
            color: #212529;
        }

        .card-border {
            border: 1px solid #212529;
        }

        .career2 .career-details .fas {
            color: #34383d;
        }

        .career2 .career-details .far {
            color: #34383d;
        }

        .career2 .card-header {
            background-color: white;
        }

        .career2 .career-details .card:hover {
            border: 1px solid #320b82;
            text-decoration: none;
        }

        .career2 .career-details .card:hover .fas {
            color: #320b82;

        }

        .career2 .career-details .card:hover .far {
            color: #320b82;

        }

        .career2 .career-details .card:hover h5 {
            color: #320b82;
            text-decoration: none;

        }

        .career2 .team .appear {
            border: 1px solid #320b82;
        }

        .career2 .team .appear .fas {
            color: #320b82;
        }

        .career2 .team .appear .far {
            color: #320b82;
        }

        .career2 .team .appear:hover {
            background: linear-gradient(#320b82, #9c33c3) !important;
        }

        .career2 .team .appear:hover .fas {
            color: white;
        }

        .career2 .team .appear:hover .far {
            color: white;
        }


        .scrollbar {
            overflow-y: scroll;
            overflow-x: hidden;
        }

        #style-2::-webkit-scrollbar {
            width: 10px;
        }

        /* Track */
        #style-2::-webkit-scrollbar-track {
            box-shadow: inset 0 0 5px grey;
            border-radius: 10px;
        }

        /* Handle */
        #style-2::-webkit-scrollbar-thumb {
            background: linear-gradient(#320b82, #9c33c3);
            border-radius: 7px;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #b30000;
        }

        /****************************************************************Career page*******************************************************************/
        .ui-widget-header {
            background: linear-gradient(#320b82, #9c33c3);
            color: #fff;
        }

        #dialog .form-control {
            padding: 1px;
            height: 25px;
        }

        .form-group label {
            line-height: 20px;
            margin: 0 !important;
        }

    </style>
@endpush
@php
    $rows = [];
        try
        {
            $dbn  = 'mysql:host=160.153.133.153;dbname=hr_gate';
        $user = 'master_admin';
        $pass = 'MediaGate+18media';
        $option = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');

            $conncar = new PDO($dbn, $user , $pass , $option);

            $conncar->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $conncar->prepare("select xin_departments.department_name as dep, xin_sub_departments.department_name as sub, xin_designations.*, xin_jobs.*  FROM xin_jobs inner join xin_designations on xin_jobs.designation_id = xin_designations.designation_id inner JOIN xin_sub_departments on xin_designations.sub_department_id = xin_sub_departments.sub_department_id inner join xin_departments on xin_sub_departments.department_id = xin_departments.department_id where project_id = 5");
        $stmt->execute();
        $rows = $stmt->fetchAll();
        }

        catch(PDOException $e)
        {
            echo 'Failed To Connect' . $e->getMessage();
        }

@endphp
@section('page-wrapper')

@endsection
@section('body')
    <div class="page-wrapper">
        @include('sticky.layout.partials.common.homeBanner')
        <section class='container mb-3'>
            <div class="row mt-3 mx-auto">
                <h2 class="col-12 text-center section-head "> Join Sticky Posts Team Over the World</h2>
                <h2 class="col-12 text-center " style="color:#320b82"> Stickyposts jobs Center</h2>
                <h3 class="col-12 text-center section-head my-3">Search for job</h3>
                <div class='row w-75 m-auto'>
                    <div class="col-md-4">
                        <select class="form-control event-type-select3" id='select1'>
                            <option value="all">All department</option>
                            <?php
                            foreach ($rows as $row) {
                                echo '<option value="'.$row['dep'].'" data-id="'.$row['department_id'].'">'.$row['dep'].'</option>';

                            }
                            ?>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <select class="form-control event-type-select" id='select2'>
                            <option value="all">All designation</option>
                            <?php
                            foreach ($rows as $row) {
                                echo '<option value="'.$row['dep'].'" data-id="'.$row['designation_name'].'">'.$row['designation_name'].'</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Jobs"
                               class="form-control" title="Type in a name">
                    </div>
                </div>


                <!--         <div class="col-md-3">-->
                <!--             <select class="form-control event-type-select2">-->
                <!--                  <option value="all">All Sub-department</option>-->
            <?/*php
							foreach($rows as $row){
								echo'<option value="'.$row['sub'].'">'.$row['sub'].'</option>';
							    
							}
							*/?>
            <!--             </select>-->
                <!--         </div>-->

            </div>
            <!-- end .page-sidebar -->
            <div class="col-sm-12 p-0 career2 bg-white pt-3 mt-3">
                <div class="row">
                    <div class="col-md-6 col-sm-12 bg-white text-body team">
                        <div class="text-center text-body">
                            <h4 class="font-weight-bold text-uppercase section-head" style="margin-bottom: 3rem;">Why
                                Join Our Team</h4>
                        </div>
                        <div class="career-details pr-2" id="style-2">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12 pl-0">
                                        <div class="row">

                                            <div class="col-3 p-0 ">
                                                <div class="appear d-flex justify-content-center align-items-center"
                                                     style="height: 30px;width: 40px;margin: auto;">
                                                    <i class="far fa-money-bill-alt" style="font-size:1.5rem;"></i>
                                                </div>
                                            </div>
                                            <div class="col-9 ">
                                                <h5 class='section-head'>Competitive salary</h5>
                                                <p>Our salary formula adjusts to your qualifications & experience. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12 r-pr-0">
                                        <div class="row">
                                            <div class="col-3 p-0 ">
                                                <div class="appear d-flex justify-content-center align-items-center"
                                                     style="height: 30px;width: 40px;margin: auto;">

                                                    <i class="fas fa-file-invoice-dollar" style="font-size:1.5rem;"></i>
                                                </div>
                                            </div>
                                            <div class="col-9">
                                                <h5 class='section-head'>Profit-sharing</h5>
                                                <p>When the company does well, all team members share the profits!</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12 pl-0">
                                        <div class="row">
                                            <div class="col-3 p-0 ">
                                                <div class="appear d-flex justify-content-center align-items-center"
                                                     style="height: 30px;width: 40px;margin: auto;">
                                                    <i class="fas fa-file" style="font-size:1.5rem;"></i>
                                                </div>
                                            </div>
                                            <div class="col-9 ">
                                                <h5 class='section-head'>Vacation</h5>
                                                <p>Take a 4-week break, fully paid, after every 5 years with Sticky
                                                    Posts.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12 r-pr-0">
                                        <div class="row">
                                            <div class="col-3 p-0 ">
                                                <div class="appear d-flex justify-content-center align-items-center"
                                                     style="height: 30px;width: 40px;margin: auto;">
                                                    <i class="fas fa-comment-dollar" style="font-size:1.5rem;"></i>
                                                </div>
                                            </div>
                                            <div class="col-9">
                                                <h5 class='section-head'>Developing Fund </h5>
                                                <p>Extra money for learning and development.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12 pl-0">
                                        <div class="row">
                                            <div class="col-3 p-0 ">
                                                <div class="appear d-flex justify-content-center align-items-center"
                                                     style="height: 30px;width: 40px;margin: auto;">
                                                    <i class="fas fa-heartbeat" style="font-size:1.5rem;"></i>
                                                </div>
                                            </div>
                                            <div class="col-9 ">
                                                <h5 class='section-head'>Health insurance</h5>
                                                <p>e offer health insurance for all of our team members.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12 r-pr-0">
                                        <div class="row">
                                            <div class="col-3 p-0 ">
                                                <div class="appear d-flex justify-content-center align-items-center"
                                                     style="height: 30px;width: 40px;margin: auto;">
                                                    <i class="fas fa-plane-departure" style="font-size:1.5rem;"></i>
                                                </div>
                                            </div>
                                            <div class="col-9">
                                                <h5 class='section-head'>Travel</h5>
                                                <p> Join us for company gathering twice per year</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12 pl-0">
                                        <div class="row">
                                            <div class="col-3 p-0 ">
                                                <div class="appear d-flex justify-content-center align-items-center"
                                                     style="height: 30px;width: 40px;margin: auto;">
                                                    <i class="fas fa-book" style="font-size:1.5rem;"></i>
                                                </div>
                                            </div>
                                            <div class="col-9 ">
                                                <h5 class='section-head'>Free books and Guides </h5>
                                                <p>Get a free Kindle and all the free books - digital, physical, and
                                                    audio - you like, anytime.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12 r-pr-0">
                                        <div class="row">
                                            <div class="col-3 p-0 ">
                                                <div class="appear d-flex justify-content-center align-items-center"
                                                     style="height: 30px;width: 40px;margin: auto;">
                                                    <i class="fas fa-home" style="font-size:1.5rem;"></i>
                                                </div>
                                            </div>
                                            <div class="col-9">
                                                <h5 class='section-head'>Work From anywhere </h5>
                                                <p>Live and work wherever you like!</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 bg-white r-mb-3" id="accordion">

                        <div class="text-center text-body">
                            <h4 class="font-weight-bold text-uppercase section-head r-mt-3"
                                style="margin-bottom: 3rem;">Interested in Working at Sticky Posts?</h4>

                        </div>
                        <div class="career-details scrollbar pr-2" id="style-2">

                            <div class="row containere" id="myUL" style="border: none;justify-content: center;">

                                <?php
                                $i = '0';
                                foreach ($rows as $row) {
                                    $i++;
                                    $desc = filter_var($row['short_description'], FILTER_SANITIZE_STRING);
                                    echo '<div id="job" class="card col-md-12 card-border force-overflow" data-eventtype="'.$row['designation_name'].'" data-eventtype2="" data-eventtype3="'.$row['dep'].'">
                                <div class="card-header px-3 py-2" id="heading'.$i.'"  >
                                    
                                        
                                    <button class="btn btn-link w-100 text-dark p-0 job-btn" data-toggle="collapse" data-id="'.$row['job_id'].'" value ="'.$row['job_title'].'"  data-target="#collapse'.$i.'" aria-expanded="true" aria-controls="collapse'.$i.'" onclick= "">
                                        <div class="row">
                                            <div class="col-10 text-left pl-0">
                                                <h5 >'.$row['job_title'].'</h5>
                                            </div>
                                            <div class="col-2 text-right pr-0">
                                                <i class="fas fa-plus-circle text-right"></i>
                                            </div>
                                        </div>
                                    </button>
                                </div>
                                <div id="collapse'.$i.'" class="collapse" aria-labelledby="heading'.$i.'" data-parent="#accordion">
                                  <div class="card-body-shadow card-body">
                                        <ul>'.$desc.'</ul>
                                       <button class=" btn btn-sm btn-warning rounded sticky-btn opener" style="border: 0 !important;" onclick="show()">Apply Now</button>
                                  	
                                  </div>
                                </div>
                          </div>';
                                }
                                ?>

                            </div>


                        </div>

                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-3">
                <div class="col-md-8">
                    <div class="box_shadow text-center">
                        <h4 class="text-center" style="color:#320b82"> If you have any inquiries for the HR department
                            <br> please don't hesitate to contact Sticky Posts' Job Center</h4>
                        <a href="mailto:hr@stickposts.net" class="text-center" style="color:#320b82">
                            hr@stickposts.net</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- loaders -->
        <div class="modal fade career bd-example-modal-lg" tabindex="-1" role="dialog"
             aria-labelledby="exampleModalLabel" aria-hidden="true"
             style="background: rgba(0, 0, 0, 0.7); padding-top: 60px;">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header pl-2 p-1"
                         style="background: linear-gradient(275deg, #5e2298, #320b82);color:#fff">
                        <img src="logo-s.png" style="width: 49px;z-index: 10;">

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                                style="position: absolute;top: 13px;right: 25px;">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div id="modal-bodyforn" class="text-center" style="padding: 0 20px;">

                        <form method="POST" id="applaycareer" enctype="multipart/form-data">
                            <input class="form-control" type="hidden" id="job_id" name="job_id" value="">
                            <input type='hidden' class="job_name" name="job_name" value="">
                            <div class="row text-left" dir=''>
                                <div class="col-12">
                                    <h3 class="text-center" style="color:#320b82"> Start your Journey and become <br>
                                        one of our family. </h3>
                                </div>
                                <div class="form-group col-md-6 mb-2">
                                    <label class="label1" for="fname"><span style="color:red">*</span> First
                                        Name</label>
                                    <input class="form-control" id="fname" name="fname" type="text" required>
                                    <input class="form-control" type="hidden" name="title"
                                           title="We ask for your Name only for statistical purposes.">
                                </div>

                                <div class="form-group col-md-6 mb-2">
                                    <label class="label1" for="lname"> <span style="color:red">*</span> Last
                                        Name</label>
                                    <input class="form-control" id="lname" name="lname"
                                           title="We ask for your Family Name only for statistical purposes."
                                           type="text" required>
                                </div>

                                <div class="form-group col-md-6 mb-2">
                                    <label class="label1" for="phone"><span style="color:red">*</span>Phone
                                        Number</label>
                                    <input class="form-control" id="phone" name="contact_number"
                                           title="We ask for your Phone Number only for statistical purposes."
                                           type="text" required>
                                </div>
                                <div class="form-group col-md-6 mb-2">
                                    <label class="label1" for="email"><span style="color:red">*</span>E-mail</label>
                                    <input class="form-control text-left" id="email" name="email" type="email" required>
                                </div>
                                <div class="form-group col-md-6 mb-2">
                                    <label class="label1" for="birth"><span style="color:red">*</span>User Name</label>
                                    <input class="form-control" type="text" name="username" type="text" required>
                                </div>
                                <div class="form-group col-md-6 mb-2">
                                    <label class="label1" for="salary"><span style="color:red">*</span> Gender </label>
                                    <select class='form-control' name="gender">
                                        <option disabled></option>
                                        <option value='Male'>Male</option>
                                        <option value='Female'>Famale</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6 mb-2">
                                    <label class="label1" for="message"><span style="color:red">*</span>Country</label>
                                    <select class='form-control' name="country">
                                        @include('sticky.layout.partials.helpers.countries')
                                    </select>
                                </div>
                                <div class="form-group col-md-6 mb-2">
                                    <label class="label1" for="start"><span style="color:red">*</span> Address</label>
                                    <input class="form-control" type="text" name="address_1" type="text">
                                </div>
                                <div class="col-md-6  ">
                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <label class="label1" for="file"><span style="color:red">*</span>
                                                Message</label>

                                            <textarea id="w3review" name="msg" rows="4" class=" w-100"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row h-100">
                                        <div class="form-group col-md-12 mb-2 mt-3">
                                            <input class="form-control d-none" name='photo' type="file" id="pics"
                                                   onchange="readURLPIC(this);" style="visibility:hidden; width:0px">
                                            <label for="pics" class="btn sticky-btn">Photo</label>
                                            <img id="pic" src="" style='width:50px;display:none' alt="your image"/>
                                            <label id="att-pho">Attach your Photo</label>
                                        </div>


                                        <div class="form-group col-md-12 mb-2">
                                            <input class="form-control d-none" name='resume' type="file" id="files"
                                                   onchange="readURL(this);" style="visibility:hidden; width:0px">
                                            <label for="files" class="btn sticky-btn"> Attatch your C.V</label>
                                            <span id="blah"></span>
                                            <label id="att-pho">Attach your File</label>
                                        </div>

                                        <div class="form-group col-md-12">
                                            <input class="btn btn-info sticky-btn" type="submit" name="submit"
                                                   value="Apply Now"
                                                   style="border: 0 !important;position: absolute;bottom: 0.5rem;width: calc(100% - 30px);left: 15px;">
                                        </div>
                                    </div>
                                </div>

                                <div class="">
                                    <label class="label1" for="file"> </label>

                                </div>


                            </div>

                        </form>
                        <small> (<span style="color:red">*</span>)All Fields Are Required Your Privacy Is Important To
                            Us. </small>
                    </div>
                </div>
            </div>
        </div>

    </div><!-- /.page-wrapper -->

@endsection
@push('scripts')
    <script>

        $("#applaycareer").submit(function (e) {
            e.preventDefault(e);
            var FORMDATA = new FormData(this);
            FORMDATA.append('notification_token', getToken());
            $('.loader').modal('show');
            $('.lds-ring').show();
            $('.modal-body').html('....');
            $.ajax({
                url: "job.php",
                // dataType:'json',
                type: "POST",
                // data:$(this).serialize(),
                data: FORMDATA,
                contentType: false,
                cache: false,
                processData: false,
                success: function (response) {
                    if (response == 1) {
                        $('.lds-ring').hide();
                        $('.career').modal('hide');
                        $('.modal-body').html('<h5>thank you</h5><h5>Congratulations you successfully applied to this job </h5>');
                        setTimeout(function () {
                            $('.loader').modal('hide');
                        }, 3000);
                    } else {
                        $('.lds-ring').hide();
                        $('.career').modal('hide');
                        $('.modal-body').html('<h5>thank you</h5><h5>Congratulations you successfully applied to this job ... Please Verify your Email </h5>');
                        setTimeout(function () {
                            $('.loader').modal('hide');
                        }, 3000);
                    }
                }
            })
        });
        $(".opener").click(function () {
            console.log('done');
            $(".career").modal("toggle");
        })

        function show() {
            console.log('done');
            $(".career").modal("toggle");
        }

        //Reference: https://jsfiddle.net/fwv18zo1/
        var $select1 = $('#select1'),
            $select2 = $('#select2'),
            $options = $select2.find('option');
        $select1.on('change', function () {
            $select2.html($options.filter('[value="' + this.value + '"]'));
        }).trigger('change');

        $(".event-type-select").change(function () {
            var selectedEventType = this.options[this.selectedIndex].value;
            if (selectedEventType == "all") {
                $('.containere #job').removeClass('hidden');
            } else {
                $('.containere #job').addClass('hidden');
                $('.containere #job[data-eventtype="' + selectedEventType + '"]').removeClass('hidden');
            }
        });

        $("#select2").change(function () {
            var selectedEventType = $('#select2 option:selected').attr('data-id');
            if (selectedEventType == "all") {
                $('.containere #job').removeClass('hidden');
            } else {
                $('.containere #job').addClass('hidden');
                $('.containere #job[data-eventtype="' + selectedEventType + '"]').removeClass('hidden');
            }
        });

        $(".event-type-select3").change(function () {
            var selectedEventType3 = this.options[this.selectedIndex].value;
            if (selectedEventType3 == "all") {
                $('.containere #job').removeClass('hidden');
            } else {
                $('.containere #job').addClass('hidden');
                $('.containere #job[data-eventtype3="' + selectedEventType3 + '"]').removeClass('hidden');
            }
        });

        function myFunction() {
            var input, filter, ul, li, a, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            ul = document.getElementById("myUL");
            li = ul.getElementById("#job");
            for (i = 0; i < li.length; i++) {
                a = li[i].getElementsByTagName("p")[0];
                txtValue = a.textContent || a.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    li[i].style.display = "";
                } else {
                    li[i].style.display = "none";
                }
            }
        }

        $(document).ready(function () {
            "use strict";
            var showChar = 200;  // How many characters are shown by default
            var ellipsestext = "...";
            $('.more').each(function () {
                var content = $(this).html();

                if (content.length > showChar) {

                    var c = content.substr(0, showChar);
                    var h = content.substr(showChar, content.length - showChar);

                    var html = c + '<span class="moreellipses">' + ellipsestext + '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;</span>';

                    $(this).html(html);
                }

            });

        });

    </script>
    <script>

        $("#files").change(function () {
            filename = this.files[0].name
            console.log(filename);
            $("#blah").html(filename);
        });

        function getFile(filePath) {
            return filePath.substr(filePath.lastIndexOf('\\') + 1).split('.')[0];
        }
    </script>
    <script>
        $("#pics").change(function () {
            filename = this.files[0].name
            console.log(filename);
        });

        function readURLPIC(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#pic')
                        .attr('src', e.target.result);
                };
                $("#att-pho").addClass("d-none");
                $("#pic").addClass("d-inline");
                reader.readAsDataURL(input.files[0]);
            }
        }

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#pic')
                        .attr('src', e.target.result);
                };
                $("#att-pho").addClass("d-none");
                $("#pic").addClass("d-inline");
                reader.readAsDataURL(input.files[0]);
            }
        }

        $(".job-btn").click(function () {
            var button = $(this).val();
            $(".job_name").val(button);
            $("#job_id").val($(this).data('id'))
        })
    </script>
    @include('sticky.layout.partials.popups')
@endpush
