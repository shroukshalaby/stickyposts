@extends('sticky.layout.master')
@push('head')
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css">
<link rel="stylesheet" href="css/carousel.css">
<link rel="stylesheet" href="https://www.aiearning.com/assets/countrycode/css/intlTelInput.css">
<link rel="stylesheet" href="https://www.aiearning.com/assets/countrycode/css/demo.css">

<style>
    .site-header{
    background:linear-gradient(-145deg, #320b82 0%, #9c33c3 100%);
}
    body{
        overflow-x: hidden;
    }
    .subscribe_form button{
        margin:0;
    }
    .btn:hover {
     color: #000!important; 
}
.try{
    display: block;
    position: absolute;
    left: 50%;
    top: 0;
    width: 12px;
    height: 12px;
    margin:-41px 0 0 -35px;
    border-radius: 50%;
    z-index: 2;
}
@media (max-width:567px){
#chartdiv {
  width: 100%;
  height: 300px;
} 
.my-width{
    width:90%;
    margin:auto;
}
.my-width h3{ 
font-size: 1.5rem !important;
    color: #320b82;
    text-align: left !important;
}  
.cont-try{
display: flex;
    justify-content: center;
    flex-direction: column;
    align-items: center;
}
.try{
    display: inline;
    position: relative;
    left: 0;
    top: 0;
    width: 12px;
    height: 12px;
    margin: 0;
    border-radius: 50%;
    z-index: 0;
}
 .my-marg{
     margin-left:1.2rem;
 }
}
@media (min-width:567px){
#chartdiv {
  width: 100%;
  height: 500px;
} 
 .my-marg{
     margin-left:3rem;
 }   
}
option{
    color: #320b82;
}
::-webkit-scrollbar {
  width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey; 
  border-radius: 10px;
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: linear-gradient(-145deg, #320b82 0%, #9c33c3 100%); 
  border-radius: 10px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #b30000; 
}
#myTab .nav-link
{
   padding:2px 20px; 
   background:linear-gradient(-145deg, #320b82 0%, #9c33c3 100%);
   color:#fff;
}
#myTab  .active
{
   padding:2px 20px; 
   color:#320b82;
   background:#fff;
}
.nav-tabs{
    border:none;
}
.block-title{
    font-weight: 600;
    color:#320b82;
    text-transform: uppercase;
}
}
/*******************************/
.multiselect-container>li{
 width: max-content;
}
.multiselect-container>li {
    padding: 0;
    height: 30px!important;
}
#output {
  padding: 20px;
  background: #dadada;
}

form {
  margin-top: 20px;
}

.multiselect-selected-text{
    white-space: pre-wrap; 
}
.btn-group{
    width: 100%;
    border: 1px solid #ddd;
    margin: 0 0 15px;
    border-radius: 0.25rem;
    height: 24px;
}
.btn-group .multiselect {
    white-space: nowrap;
    padding: 0px 2px;
    overflow: hidden;
    margin:0;
}
.dropdown-menu.show{
    transform: translate3d(8px, 41px, 0px) !important;
    top: 6px !important;
    left: -8px !important;
    width: 100% !important;
}
.btn-group .dropdown-toggle::after{
        position: absolute;
    top: 12px;
    right: 15px;
}
.form-control{
    height:25px;
    line-height:1.4;
    font-size: 12px;
    padding:0px 10px ;
}
.multiselect-container>li>a>label {
    margin: 0;
    height: 100%;
    cursor: pointer;
    font-weight: 400;
    padding: 3px 0px 3px 10px;
}
.btn-group .multiselect {
    text-align: left;
    padding: 0 10px;
    font-size: 12px;
}
.ui-widget.ui-widget-content{
    z-index:85 !important;
}
.timeline > div > a .desc-holder{
    padding:0;
}
.timeline > div > a h4{
    margin-bottom:12px;
    font-size:14px;
}
.block-title {
    font-weight: bold;
    color: #320b82;
    text-transform: inherit;
}
.multiselect-container{
    height: 247px;
    overflow: auto;
}
@media (min-width: 992px){
    .training-step a:hover h4 {
        color: #9c33c3;
        -webkit-transform: translate(0, -14px);
        -ms-transform: translate(0, -14px);
        -o-transform: translate(0, -14px);
        transform: translate(0, -14px);
    }
    
}
    .training-step a{
        text-align: center;
    }
    .training-step{
        text-align: center;
        padding-bottom: 40px;
    }
    .training-step a h4 span{
        color: #320C7F;
        font-size: 17px;
    }
    .training-step a h4{
        font-size: 14px;
        margin-bottom: 12px;
        text-transform: uppercase;
        font-weight: 700;
        transition: 0.2s;
        color: #b59ecf;
    }
    body{
        font-family: Helvetica !Important;
    }
    .colo-b{
        color:#320C7F;
    }
     .z-in-10{
        z-index: 10;
    }
    .wid-72{
        width: 72px;
    }
        .dis-i{
            display: inline;
        }
    .hei-24{
        height:24px;
    }
    .tex-ali-l-c{
        text-align-last: center;
    }
    .back-l{
        background: linear-gradient(215deg, #5e2298, #320b82);
    }
    .pad-5-20{
        padding:5px 20px;
    }
    .bor-r-5{
        border-radius: 5px;
    }
    

</style>
<?php

$servername = "localhost";
$username = "master_admin";
$password = "MediaGate+18media";

try {
  $conn_webinar = new PDO("mysql:host=$servername;dbname=learning_management_2", $username, $password);
  // set the PDO error mode to exception
  $conn_webinar->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

$query = "SELECT * FROM category WHERE parent = 9 ";
$statement = $conn_webinar->prepare($query);
$statement->execute();
$topics = $statement->fetchAll();

?>
@endpush

@section('page-wrapper')




@endsection



@section('body')
	<div id="page" class="{{  getCurrentLangIdiom() == 'ar' ? 'text-right'  : '' }}">
        <div class="container pt-5 mt-5 text-center">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2 class="block-title text-center">{{__('training_we_care')}} </h2>
                </div>
                <div class="col-lg-6 col-md-8 col-12">
                    <h5 class="block-title text-center mb-2"> {{__('training_therefore')}}</h5>
                </div>
            </div>
            <div class='container mt-5'>
                <div id="chartdiv"></div>
            </div>
        </div>
        <form class="addTraining" method="post">
            <div class='container my-5 px-md-0 px-3'>
	            <div class="row">
	                <div class="col-md-3 training-step">
	                    <a class="mb-4">
							<h4 ><span class="colo-b">{{__('training_step')}} 1 </span><br>{{__('trainig_create')}}</h4>
							<div class="desc-holder">
							<div ><img class="wid-72 z-in-10" src="{{get_theme_frontend_url('assets/sticky/images/m3.png')}}"></div>
							</div>
						</a>
						<div class="custom-control custom-radio dis-i" >
                          <input type="radio" checked id="type1" onclick="show1();" name="type" value="individual" class="custom-control-input" required>
                          <label class="custom-control-label font-weight-bold" for="type1">{{__('training_ind')}} </label>
                        </div>
						<div class="custom-control custom-radio dis-i" >
                          <input type="radio"  id="type2" onclick="show2();" name="type" value="company" class="custom-control-input">
                          <label class="custom-control-label font-weight-bold" for="type2">{{__('training_company')}}</label>
                        </div>
					
                        <div class="col-12 mb-1">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" id="fullName" placeholder= "{{__('sel-name')}} " aria-describedby="inputGroupPrepend2" required>
                            </div>
                        </div>
                        
                        <div class="col-12 mb-1">
                            <div class="form-group">
                                <input type="text" class="form-control" id="mail" name="email" placeholder= "{{__('training_mail')}} " aria-describedby="inputGroupPrepend2" required>
                            </div>
                        </div>
                      
                        <div class="col-12 text-start"  id="showform2">
                       
                            <div class="form-group">
                                <input id="company_name" type="text" class="form-control" name="company" placeholder= "{{__('training_company_name')}} " aria-describedby="inputGroupPrepend2">
                            </div> 
                            <div class="form-group">
                                <select class="form-control" id="emp_num_" name="numOfEmps">
                                      <option value="" selected disabled>{{__('training_empolyee')}} </option>
                                      <option value="1-50">1 - 50</option>
                                      <option value="51-100">51 - 100</option>
                                      <option value="101-500">101 - 500</option>
                                      <option value="501-1000">501- 1000</option>
                                      <option value="1000-1000000">{{__('training_more_than')}}  1000</option>
                                  </select> 
                            </div>
                        </div>
                        <div class="col-12 mb-1">
                            <div class="form-group">
                                <input type="phone" name="phone" class="form-control" id="phone" placeholder= "{{__('training_phone_number')}} " aria-describedby="inputGroupPrepend2" required>
                            </div>
                        </div>
	                </div>
	                <div class="col-md-3 training-step">
						<a class="mb-4">
							<h4 ><span class="colo-b">{{__('training_step')}}  2 </span><br>{{__('training_topic')}}   </h4>
							<div class="desc-holder">
							    <div ><img class="wid-72 z-in-10" src="{{get_theme_frontend_url('assets/sticky/images/m1.png')}}"></div>
							</div>
						</a>
						<div class="col-12 mb-1 mt-4">
                          <select name="topic[]" id="non-select" class="multi w-100 m-0 p-0"  multiple searchable="Search here.." class="hei-24;">
                            
                              
                              <?php
                              
                              foreach($topics as $topic){
                                  $topic_name = $topic['name'];
                                  $topic_id = $topic['id'];
                                  echo "<option value='$topic_id'>$topic_name</option>";
                              }
                              
                              ?>
                            </select>
                        </div>
					</div>
					<div class="col-md-3 training-step mx-md-0 mx-3">
						<a class="">
							<h4 ><span class="colo-b"> {{__('training_step')}}  3 </span><br>{{__('training_country')}}  </h4>
							<div class="desc-holder">								    
							    <div ><img class="wid-72" src="{{get_theme_frontend_url('assets/sticky/images/world.png')}}"></div>
							</div>
						</a>
						<select class="form-control mt-4" name="country" required>
                           @include('sticky.layout.partials.helpers.countries')
                        </select>
					</div>
					<div class="col-md-3 training-step mx-md-0 mx-3">
						<a class="">
							<h4 ><span class="colo-b">{{__('training_step')}}  4</span> <br>{{__('training_book')}}    </h4>
							<div class="desc-holder">
							    <div ><img class="wid-72 z-in-10" src="{{get_theme_frontend_url('assets/sticky/images/m2.png')}}"></div>
							</div>
						</a>
						<input id="datepicker" type="text" class="form-control mt-4" name="date" placeholder="{{__('select_date')}}">
						<div class='text-center mt-3'>
                            <input class="submit sticky-btn back-l pad-5-20 bor-r-5 " type="submit" value="{{__('install-idbtn25')}}">
                        </div>
					</div> 
				</div>
            </div>
        </form>
    </div>
@endsection
@include('sticky.layout.partials.common.sweetalert')

@push('scripts')
@include('sticky.layout.partials.common.sweetalert')
@include('sticky.layout.partials.common.inboundLeadScript',['selector'=>'.addTraining','type'=>'training'])


<script src="{{get_theme_frontend_url('assets/sticky/js/map/core.js')}}"></script>
<script src="{{get_theme_frontend_url('assets/sticky/js/map/maps.js')}}"></script>
<script src="{{get_theme_frontend_url('assets/sticky/js/map/worldLow.js')}}"></script>
<script src="{{get_theme_frontend_url('assets/sticky/js/map/frozen.js')}}"></script>

<!-- Chart code -->
<script>
am4core.ready(function() {

// Themes begin
am4core.useTheme(am4themes_frozen);
// Themes end

// Create map instance
var chart = am4core.create("chartdiv", am4maps.MapChart);

// Set map definition
chart.geodata = am4geodata_worldLow;

// Set projection
chart.projection = new am4maps.projections.NaturalEarth1();

// Create map polygon series
var polygonSeries = chart.series.push(new am4maps.MapPolygonSeries());
polygonSeries.mapPolygons.template.strokeWidth = 0.5;


// Make map load polygon (like country names) data from GeoJSON
polygonSeries.useGeodata = true;

// Configure series
var polygonTemplate = polygonSeries.mapPolygons.template;
polygonTemplate.tooltipText = "{name}";
polygonTemplate.fill = chart.colors.getIndex(0);

// Create hover state and set alternative fill color
var hs = polygonTemplate.states.create("hover");
hs.properties.fill = chart.colors.getIndex(2);

// Create active state
var activeState = polygonTemplate.states.create("active");
activeState.properties.fill = chart.colors.getIndex(4);

var graticuleSeries = chart.series.push(new am4maps.GraticuleSeries());

// Create an event to toggle "active" state
polygonTemplate.events.on("hit", function(ev) {
  ev.target.isActive = !ev.target.isActive;
  console.log("--->", polygonSeries)
})



}); // end am4core.ready()
</script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.min.js'></script>
<script src="https://www.aiearning.com/assets/countrycode/js/intlTelInput.js"></script>
	<!-- page -->
<script>
  $( function() {
    $( "#datepicker" ).datepicker({
      changeMonth: true,
      changeYear: true
    });
  } );
  </script>
<script>
      $("#non-select").multiselect({
  nonSelectedText:'Choose your favorite Topics'
});
  </script>
<script>
 
$('.multi').multiselect();
$('#showform2').css('visibility', 'hidden');
$('#showform2').css('position', 'absolute');
function show1(){
  $('#company_name').removeAttr('required');
  $('#emp_num_').removeAttr('required');
  $('#showform2').css('visibility', 'hidden');
  $('#showform2').css('position', 'absolute');
}
function show2(){
  $('#company_name').attr('required', 'true');
  $('#emp_num_').attr('required', 'true');
  $('#showform2').css('visibility', 'visible');
  $('#showform2').css('position', 'relative');
}
</script>
@endpush
