@extends('sticky.layout.master')

 

@push('head')
<style>
.install-card{
    border: 2px solid;
    border-radius: 4px;
    padding: 15px;
}
.due-price{
    font-weight:500;
    font-size:17px;
}
.nav-pills .nav-link.active, .nav-pills .show>.nav-link {
    background: #007bff!important;
}
.nav-pills .nav-link {
    background: linear-gradient(-145deg,#320b82 0,#9c33c3 100%);
    color: #fff;
    margin: 0 20px;
}
.img-top-text{
    text-align: center;
    padding: 6px 0;
    background: linear-gradient(90deg,#42b0ff,#4262ff);
    color: #fff;
    border-radius:2px;
    font-size:22px;
}
.colors {
  display: none;
}
.colors2 {
  display: none;
}
.packagesDropdown option{
    color:#000;
}
.bg-mauv{
  background: linear-gradient(-145deg, #320b82 0%, #9c33c3 100%);    
  height:300px;
}
.carousel-control-next, .carousel-control-prev{
    bottom:-245px;
}
#featuresModal .modal-header .close {
    position: absolute;
    right: 10px;
}
#featuresModal2 .modal-header .close {
    position: absolute;
    right: 10px;
}
.price-bg{
  background:linear-gradient(-145deg,#320b82 0,#9c33c3 100%);
  font-size:18px;
  color:white;
  padding: 10px 0;  
}
.text-color-red{
 color:red;
 font-size:18px;
}
.text-sticky2 li{
    color:#fff;
    text-align: left;
}
.text-sticky2 li{
    font-size:15px;
}
.router-body{
  background: #f7f5f5;
    padding: 10px;  
    border-radius: 4px;
}
.faplus-style{
   font-size: 40px;
   color: #7926ae; 
}
.hide{
    display:none;
}
.bg-none{
    background:transparent;
    color:#fff;
}
.red-bg{
    background: #bc001b;
    width: 314px!important;
    color: #fff;
    text-align: center;
    font-size: 30px;
    text-decoration: underline;
    font-weight: bold;
    padding: 8px 32px;
    border-radius: 4px;
    margin: auto;
    margin-top: 16px;
}
.purple-btn{
    background:#212f63;
    cursor:pointer;
}
.lh-15{
    line-height: 1.5;
}
.text-black{
    color:#000;
}
    .logo-p-text{
        color: #000;
        font-size: 11px;
    }
    .row:before, .row:after {display: none !important;}
    .row{ &:before, &:after{ display: block; } }
    .btn-bg{
        height: 37px;
        line-height: 2;
    }
    .basics-section .tab-pane .col-7{
        height:370px;
    }
    .basics-section .tab-pane .col-4 img{
        height:100%;
    }
    .poweredBy   .nav-pills .nav-link {
        background: #f1f1f1;
        margin: 10px;
        height: 65px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .bg-white{
        background:#fff;
    }
    .nav-pills .nav-link.active, .nav-pills .show>.nav-link {
    color: #fff;
    background-color: #007bff!important;
}
    .w-60{
        width:60%;
    }
    .w-40{
        width:40%;
    }
    .w-30{
        width:30%;
    }
    .site-header{
        background:linear-gradient(-145deg, #320b82 0%, #9c33c3 100%);
    }
    .bg-1{
        width:100%;
        height:400px;
    }
    .title-sticky{
        color: #320b82;
        font-size: 40px;
    }
    .text-sticky{
        color: #320b82!important;
    }
    .basics-section .nav-pills .nav-link{
        background: #eef2f5;
        margin-bottom: 8px;
        color: #000;
        font-size: 14px;
        /*padding-left: 8px;*/
        /*padding-right: 8px;*/
    }
    .basics-section .nav-pills .nav-link .fas{
        margin-top: 7px;
        font-size: 20px;
    }
    .basics-section .nav-pills .nav-link:hover{
        background: linear-gradient(90deg,#42b0ff,#4262ff);
        color: #fff;
    }
    .basics-section .nav-pills .nav-link.active,.basics-section .nav-pills .show>.nav-link{
        background: linear-gradient(90deg,#42b0ff,#4262ff);
        color: #fff;
    }
    
    .packages-section .nav-pills .nav-link{
        background: linear-gradient(90deg,#42b0ff,#4262ff);
        margin-bottom: 8px;
        color: #fff;
    }
    .packages-section .nav-pills .nav-link:hover{
        background: linear-gradient(-145deg,#320b82 0,#9c33c3 100%);
        color: #fff;
    }
    .packages-section .nav-pills .nav-link.active,.packages-section .nav-pills .show>.nav-link{
        background: linear-gradient(-145deg,#320b82 0,#9c33c3 100%);
        color: #fff;
    }
    
    .basics-section .tab-pane ul{
        color: #fff;
        font-size: 18px;
    }
    .nav-title{
        color: #fff;
        font-size: 18px;
        line-height: 1.5;
    }
    .start-now{
        background: linear-gradient(90deg,#42b0ff,#4262ff);
        display: block;
        width: 25%;
        color: #fff;
        text-align: center;
        font-size: 20px;
        font-weight: bold;
        padding: 8px 0;
        border-radius: 4px;
        margin: auto;
        margin-top: 16px;
    }
    .start-now:hover{
        color: #fff;
    }
    .guide-back{
        padding: 16px;
        -webkit-box-shadow: 0px 0px 19px -4px rgba(47,22,126,1);
        -moz-box-shadow: 0px 0px 19px -4px rgba(47,22,126,1);
        box-shadow: 0px 0px 19px -4px rgba(47,22,126,1);
        border-radius: 10px;
    }
    .program-sponcer{
        color: #000;
        margin: 0;
        text-align: center;
        font-size: 18px;
        padding-bottom: 8px;
    }
    .program-sponcer-logo{
        height: 125px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .program-sponcer-section{
        background: #fff;
        border-radius: 4px;
        border: 2px solid #320b82;
        width:100%;
    }
    .subscribe-package{
        background: linear-gradient(-145deg,#320b82 0,#9c33c3 100%);
        display: block;
        width: fit-content;
        color: #fff;
        text-align: center;
        font-size: 20px;
        font-weight: bold;
        padding: 8px 32px;
        border-radius: 4px;
        margin: auto;
        margin-top: 16px;
    }
    .subscribe-package:hover{
        color: #fff;
    }
    .package-professional{
        color: #000;
    }
    .basics-section{
        background: linear-gradient(-145deg,#320b82 0,#9c33c3 100%);
        margin-top: 24px;
        padding-top: 24px;
        padding-bottom: 24px;
        color: #fff;
    }
    .packages-section{
        background: #eaeaea;
        margin-top: 24px;
        padding-top: 24px;
        padding-bottom: 24px;
    }
    .program-sponcer-logo .w-85{
        width: 85%!important;
    }
    .basics-section .accordion .card-header .btn-link:hover {
        text-decoration: unset;
    }
    .basics-section .accordion .card-header .btn{
        background: linear-gradient(90deg,#42b0ff,#4262ff);
        color: #fff;
        padding: .75rem 1.25rem;
        font-size: 14px;
    }
    .basics-section .accordion .card-header .btn.collapsed{
        color: #000;
        padding: .75rem 1.25rem;
        background: #eef2f5;
    }
    .basics-section .accordion>.card:not(:first-of-type):not(:last-of-type) {
        border-radius: .25rem;
    }
    .basics-section .accordion>.card:first-of-type {
        border-radius: .25rem;
    }
    .basics-section .accordion>.card:last-of-type {
        border-radius: .25rem;
        margin-bottom: 0;
    }
    .basics-section .accordion>.card {
        margin-bottom: 8px;
        border: none;
        color: #000;
    }
    .basics-section .accordion .card-header .btn .fas {
        font-size: 21px;
        margin-top: 2px;
    }
    .basics-section .accordion .card-header {
        background-color: transparent;
        border-bottom: 1px solid transparent;
        padding: 0;
    }
    .banner_section{
        margin-top: 54px;
    }
    @media (max-width: 567px){
        .w-50mobile{
            width:50%!important;
        }
        .basics-section .accordion>.card .collapse .card-body {
            text-align: left;
        }
        .packages-section .nav-pills .nav-link{
            font-size: 12px;
        }
        .panel .card-body{
            text-align:left;
        }
    }
    @media (max-width: 767px){
        .title-sticky{
            font-size: 36px;
        }
        .program-sponcer-logo .w-85{
            width: 35%!important;
        }
        .program-sponcer-logo {
              height: 110px;
        }
        .basics-section .accordion .card-header .btn.collapsed{
            padding:10px;
        }
        .program-sponcer-section {
            margin-bottom: 8px;
        }
        .program-sponcer-logo .w-100{
            width: 75%!important;
        }
        .program-sponcer-logo .w-100.orange{
            width: 50%!important;
        }
        .banner_section{
            margin-top: 82px;
        }
    }
    .basics-section .accordion>.card .collapse .card-body h3{
        font-size: 20px;
    }
    .text-red{
        color: red;
    }
    .tab-content.basics_tabs>.active{
        background-color: #fff;
        border-radius: 4px;
        padding: 0 0 0 24px;
    }
    .bg-basics-content{
        background: linear-gradient(90deg,#42b0ff,#4262ff);
        border-radius: 0px 4px 4px 0;
    }
    .bg-black{
        background:#000;
    }
    .panel .card-body{
        border: 2px solid #320b82;
        padding: 15px 10px;
        font-size: 15px;
        background: #f1f1f1;
        color: #fff;
        border-radius: 4px;
        font-weight: bold;
        display: flex;
        flex-direction: column;
        height: 370px;
        justify-content: space-between;
    }
    .panel .card-body ul > li{
        list-style: none;
        color:#000; 
        font-size: 13px;
        font-weight: 500;
        list-style: disc;
    }
    .basics_tabs .tab-pane .col-7 {
        height:370px;
    }
    .org-txt{
        color:orange;
        font-size:10px;
        font-weight:bold;
    }
    small{
     font-size:9px;   
    }
     .see-more-btn{
        background: linear-gradient(90deg,#42b0ff,#4262ff);
        padding: 5px 0;
        color: #fff;
        border-radius: 2px;   
     }
</style>


@endpush

@section('page-wrapper')




@endsection



@section('body')
 <section class="banner_section" style="">
            <img src="{{get_theme_frontend_url('assets/sticky/images/Back to BusinessEN.jpg')}}" class="img-fluid">
        </section>
        <div class="client-section">
            <div class="container text-center">
                <div class="clients">
                    <div class="single">
                        <img src="{{get_theme_frontend_url('assets/sticky/images/client1.png')}}" class='none' alt="Client" />
                        <img src="{{get_theme_frontend_url('assets/sticky/images/client1-c.png')}}" class="color" alt="Client" />
                    </div>
                    <div class="single">
                        <img src="{{get_theme_frontend_url('assets/sticky/images/client3.png')}}" class='none' alt="Client" />
                        <img src="{{get_theme_frontend_url('assets/sticky/images/client3-c.png')}}" class="color" alt="Client" />
                    </div>
                    <div class="single">
                        <img src="{{get_theme_frontend_url('assets/sticky/images/client5.png')}}" class='none' alt="Client" />
                        <img src="{{get_theme_frontend_url('assets/sticky/images/client5-c.png')}}" class="color" alt="Client" />
                    </div>
                    <div class="single">
                        <img src="{{get_theme_frontend_url('assets/sticky/images/client6.png')}}" class='none' alt="Client" />
                        <img src="{{get_theme_frontend_url('assets/sticky/images/client6-c.png')}}" class="color" alt="Client" />
                    </div>
                    <div class="single">
                        <img src="{{get_theme_frontend_url('assets/sticky/images/client4.png')}}" class='none' alt="Client" />
                        <img src="{{get_theme_frontend_url('assets/sticky/images/client4-c.png')}}" class="color" alt="Client" />
                    </div>
                    <div class="single">
                        <img src="{{get_theme_frontend_url('assets/sticky/images/client2.png')}}" class='none' alt="Client" />
                        <img src="{{get_theme_frontend_url('assets/sticky/images/client2-c.png')}}" class="color" alt="Client" />
                    </div>
                    <div class="single">
                        <img src="{{get_theme_frontend_url('assets/sticky/images/client7.png')}}" class='none' alt="Client" />
                        <img src="{{get_theme_frontend_url('assets/sticky/images/client7-c.png')}}" class="color" alt="Client" />
                    </div>
                </div>
            </div>
        </div>
        <section class="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 py-md-4 py-3">
                          <h1 class="title-sticky text-center mb-3">
                          {{ __('land-moreProductivity')}}
                        </h1>
                        <h4 class="text-sticky text-center">
                        {!! __('land-businessAndSuccess')!!}
                        </h4>
                    </div>
                    <div class="col-md-9 pb-md-3 py-3">
                        <div class="guide-back mt-3">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h2 class="title-sticky text-center d-md-block d-none">
                                    {!!__('land-digitalSolutions')!!}
                                        <span class="font-weight-bold">
                                        {{ __('land-moreThan')}}
                                        </span>
                                        <br>
                                        <span class="font-weight-bold">
                                        {{ __('land-permonth')}}
                                        </span>
                                    </h2>
                                    <h2 class="title-sticky text-center d-md-none d-block mb-3" style="font-size: 30px;">
                                    {{ __('land-providedDigital')}}
                                        <br>
                                        <span class="font-weight-bold">
                                        {{ __('land-moreThan')}} 
                                        </span>
                                        <br>
                                        <span class="font-weight-bold">
                                        {{ __('land-permonth')}}
                                        </span>
                                    </h2>
                                </div>
                                <div class="col-md-4">
                                    @include('sticky.layout.partials.common.pdfDownload')
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-12 pb-md-3 py-3 ">
                    <div class="guide-back mt-3 card">        
                        <div class="card-header p-0 m-0">
                            <div class="text-center">
                                <img src="{{get_theme_frontend_url('assets/sticky/images/installment En.jpg')}}" width="100%">
                            </div>
                        </div>    
                        <div class="card-body pt-3  pb-0 px-0">
                           <p class="mb-4 text-black lh-15">
                                {{__('land-businessProgram')}}
                           </p>

                        <a class="btn purple-btn w-100 text-white" href="https://stickyposts.net/stickypost_register/register-en.php?language=2">
                           {{__('temp-getItNow')}}
                        </a>
                        </div>
                         
                    </div>
                    </div>
            </div>
                </div>
            </div>
        </section>
        <section class=" basics-section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="title-sticky text-white mb-3 text-center">
                        {{ __('land-PlanBasics')}}
                        </h2>
                    </div>
                </div>
                <div class="row d-md-flex d-none">
                    <div class="col-4">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active" id="v-pills-basics1-tab" data-toggle="pill" href="#v-pills-basics1" role="tab" aria-controls="v-pills-basics1" aria-selected="true">
                            {{ __('land-AvailableAppointments')}}
                                <i class="fas fa-angle-right float-right"></i>
                            </a>
                            <a class="nav-link" id="v-pills-basics2-tab" data-toggle="pill" href="#v-pills-basics2" role="tab" aria-controls="v-pills-basics2" aria-selected="false">
                            {{ __('land-IncreaseRevenues')}} 
                                <i class="fas fa-angle-right float-right"></i>
                            </a>
                            <a class="nav-link" id="v-pills-basics3-tab" data-toggle="pill" href="#v-pills-basics3" role="tab" aria-controls="v-pills-basics3" aria-selected="false">
                            {{ __('land-businessRange')}}
                                <i class="fas fa-angle-right float-right"></i>
                            </a>
                            <a class="nav-link" id="v-pills-basics4-tab" data-toggle="pill" href="#v-pills-basics4" role="tab" aria-controls="v-pills-basics4" aria-selected="false">
                            {{ __('land-smoothlyAndEasily')}}
                                <i class="fas fa-angle-right float-right"></i>
                            </a>
                            <a class="nav-link" id="v-pills-basics5-tab" data-toggle="pill" href="#v-pills-basics5" role="tab" aria-controls="v-pills-basics5" aria-selected="false">
                            {{ __('land-ProvideInfrastructure')}}
                                <i class="fas fa-angle-right float-right"></i>
                            </a>
                            <a class="nav-link" id="v-pills-basics6-tab" data-toggle="pill" href="#v-pills-basics6" role="tab" aria-controls="v-pills-basics6" aria-selected="false">
                            {{ __('land-ProfessionalCustomer')}}
                                <i class="fas fa-angle-right float-right"></i>
                            </a>
                            <a class="nav-link" id="v-pills-basics7-tab" data-toggle="pill" href="#v-pills-basics7" role="tab" aria-controls="v-pills-basics7" aria-selected="false">
                            {{ __('land-ProfessionalCustomer')}}
                                <i class="fas fa-angle-right float-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="tab-content basics_tabs" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-basics1" role="tabpanel" aria-labelledby="v-pills-basics1-tab">
                                <div class="row">
                                    <div class="col-7">
                                        <h3 class="mt-3 mb-1 text-sticky">
                                        {{ __('land-customersBase')}}
                                        </h3> 
                                        <ul class="text-sticky mb-4">
                                            <li>
                                            {{ __('land-StrongPresence')}}
                                            </li>
                                            <li>
                                            {{ __('land-BuildWebPage')}}
                                            </li>
                                            <li>
                                            {{ __('land-teamAutomatically')}}
                                            </li>
                                            <li>
                                            {{ __('land-SavingTime')}}
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-4 p-0">
                                       <img src="{{get_theme_frontend_url('assets/sticky/images/back_to_business/available appoitment.jpg')}}" class="img-fluid w-100"/>   
                                    </div>      
                                    <div class="col-1 bg-basics-content">
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-basics2" role="tabpanel" aria-labelledby="v-pills-basics2-tab">
                                <div class="row">
                                    <div class="col-7">
                                        <h3 class="mt-3 mb-1 text-sticky">
                                        {{ __('land-IncreaseRevenue')}}
                                        </h3>
                                        <ul class="text-sticky mb-4">
                                            <li>
                                            {{ __('land-marketingEveryMonth')}}
                                            </li>
                                            <li>
                                            {{ __('land-mostImportantFactor')}} 
                                            </li>
                                            <li>
                                            {{ __('land-ConstantlyGaining')}}
                                            </li>
                                        </ul>
                                    </div>
                                      <div class="col-4 p-0">
                                        <img src="{{get_theme_frontend_url('assets/sticky/images/back_to_business/Increase revenue.jpg')}}" class="img-fluid w-100"/> 
                                      </div>
                                    <div class="col-1 bg-basics-content">
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-basics3" role="tabpanel" aria-labelledby="v-pills-basics3-tab">
                                <div class="row">
                                    <div class="col-7">
                                        <h3 class="mt-3 mb-1 text-sticky">
                                        {{ __('land-businessRangeBy')}}
                                        </h3>
                                        <ul class="text-sticky mb-4">
                                            <li>
                                            {{ __('land-BuildingDigital')}}
                                            </li>
                                            <li>
                                            {{ __('land-BuildingDigital')}} 
                                            </li>
                                            <li>
                                            {{ __('land-FacilitatingE-payment')}}
                                            </li>
                                            <li>
                                            {{ __('land-businessDevelopment')}}
                                            </li>
                                        </ul>
                                    </div>
                                      <div class="col-4 p-0">
                                          <img src="{{get_theme_frontend_url('assets/sticky/images/back_to_business/Expand your business.jpg')}}" class="img-fluid w-100"/> 
                                    </div>
                                    <div class="col-1 bg-basics-content">
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-basics4" role="tabpanel" aria-labelledby="v-pills-basics4-tab">
                                <div class="row">
                                    <div class="col-7">
                                        <h3 class="mt-3 mb-1 text-sticky">
                                        {{ __('land-businessTeam')}}
                                        </h3>
                                        <ul class="text-sticky mb-4">
                                            <li>
                                            {{ __('land-teamManagement')}}
                                            </li>
                                            <li>
                                            {{ __('land-performanceRates')}}
                                            </li>
                                            <li>
                                            {{ __('land-LinkingAllProjects')}}
                                            </li>
                                            <li>
                                            {{ __('land-DetailedReports')}}
                                            </li>
                                        </ul>
                                    </div>
                                      <div class="col-4 p-0">
                                        <img src="{{get_theme_frontend_url('assets/sticky/images/back_to_business/Manage your business.jpg')}}" class="img-fluid w-100"/>   
                                      </div>
                                    <div class="col-1 bg-basics-content">
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-basics5" role="tabpanel" aria-labelledby="v-pills-basics5-tab">
                                <div class="row">
                                    <div class="col-7">
                                        <h3 class="mt-3 mb-1 text-sticky">
                                        {{ __('land-ProvideInfrastructureBusiness')}}
                                        </h3>
                                        <h3 class="nav-title text-sticky mb-4">
                                        {!! __('land-basicInfrastructure')!!}
                                        </h3>
                                    </div>
                                      <div class="col-4 p-0">
                                        <img src="{{get_theme_frontend_url('assets/sticky/images/back_to_business/Provide an infrastructure.jpg')}}" class="img-fluid w-100"/>
                                      </div>
                                    <div class="col-1 bg-basics-content">
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-basics6" role="tabpanel" aria-labelledby="v-pills-basics6-tab">
                                <div class="row">
                                    <div class="col-7">
                                        <h3 class="mt-3 mb-1 text-sticky">
                                        {{ __('land-CustomersProfits')}}
                                        </h3>
                                        <h3 class="nav-title text-sticky">
                                        {{ __('land-higherPercentage')}}
                                        </h3>
                                        <h3 class="nav-title text-sticky mb-4">
                                        {{ __('land-consumerToday')}}
                                        </h3>
                                    </div>
                                      <div class="col-4  p-0">
                                        <img src="{{get_theme_frontend_url('assets/sticky/images/back_to_business/PROFIT=COST.jpg')}}" class="img-fluid w-100"/>     
                                      </div>
                                    <div class="col-1 bg-basics-content">
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-basics7" role="tabpanel" aria-labelledby="v-pills-basics7-tab">
                                <div class="row">
                                    <div class="col-7">
                                        <h3 class="mt-3 mb-1 text-sticky">
                                            {!!__('land-cust-satis')!!}
                                        </h3>
                                        <h3 class="nav-title text-sticky">
                                            {{__('land-if-any')}}
                                        </h3>
                                        <h3 class="nav-title text-sticky mb-4">
                                            {{__('land-gain-cust')}}
                                        </h3>
                                    </div>
                                      <div class="col-4 p-0">
                                        <img src="{{get_theme_frontend_url('assets/sticky/images/back_to_business/Customer Satisfaction.jpg')}}" class="img-fluid w-100"/>                 
                                        </div>
                                    <div class="col-1 bg-basics-content">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <a class="start-now" href="#packages">
                            {{__('land-start')}} 
                        </a>
                    </div>
                </div>
                <div class="row d-md-none d-flex">
                    <div class="col-12">
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            {{__('land-increase-cust')}} 
                                            <i class="fas fa-angle-down float-right"></i>
                                        </button>
                                    </h2>
                                </div>
                                
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <h3 class="">
                                                    {{__('land-customersBase')}}
                                                </h3> 
                                                <ul>
                                                    <li>
                                                        {{__('land-StrongPresence')}}
                                                    </li>
                                                    <li>
                                                        {{__('land-BuildWebPage')}}
                                                    </li>
                                                    <li>
                                                        {{__('land-teamAutomatically')}}
                                                    </li>
                                                    <li>
                                                        {{__('land-SavingTime')}}
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            {{__('land-IncreaseRevenues')}} 
                                            <i class="fas fa-angle-down float-right"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <h3 class="">
                                                    {{__('land-IncreaseRevenue')}}
                                                </h3>
                                                <ul>
                                                    <li>
                                                        {{__('land-marketingEveryMonth')}}
                                                    </li>
                                                    <li>
                                                        {{__('land-mostImportantFactor')}}
                                                    </li>
                                                    <li>
                                                        {{__('land-ConstantlyGaining')}}
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            {{__('land-businessRange')}} 
                                            <i class="fas fa-angle-down float-right"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <h3 class="">
                                                    {{__('land-businessRangeBy')}}:
                                                </h3>
                                                <ul>
                                                    <li>
                                                       {{__('land-BuildingDigital')}}
                                                    </li>
                                                    <li>
                                                       {{__('land-salesChannels')}} 
                                                    </li>
                                                    <li>
                                                        {{__('land-FacilitatingE-payment')}} 
                                                    </li>
                                                    <li>
                                                        {{__('land-businessDevelopment')}}
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                            <div class="card">
                                <div class="card-header" id="headingFour">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            {{__('land-smoothlyAndEasily')}}
                                            <i class="fas fa-angle-down float-right"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <h3 class="">
                                                {{__('land-smoothlyAndEasily')}}:
                                                </h3>
                                                <ul>
                                                    <li>
                                                        {{__('land-teamManagement')}} 
                                                    </li>
                                                    <li>
                                                        {{__('land-performanceRates')}}
                                                    </li>
                                                    <li>
                                                        {{__('land-LinkingAllProjects')}}
                                                    </li>
                                                    <li>
                                                        {{__('land-DetailedReports')}}
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>        
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFive">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                            {{__('land-ProvideInfrastructure')}}
                                            <i class="fas fa-angle-down float-right"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <h3 class="">
                                                {{__('land-ProvideInfrastructure')}}
                                                </h3>
                                                <p class="">
                                                     {{__('land-basicInfrastructure')}}
                                                </p>
                                            </div>
                                        </div>        
                                    </div>
                                </div>
                            </div>
                            
                            
                            <div class="card">
                                <div class="card-header" id="headingSix">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                            {{__('land-ProfessionalCustomer')}} 
                                            <i class="fas fa-angle-down float-right"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <h3 class="">
                                                    {{__('land-CustomersProfits')}} 
                                                </h3>
                                                <p class="">
                                                    {{__('land-higherPercentage')}} 
                                                </p>
                                                <p class="">
                                                    {{__('land-consumerToday')}}
                                                </p>
                                            </div>
                                        </div>        
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingSeven">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                            {{__('land-customersLoyalty')}} 
                                            <i class="fas fa-angle-down float-right"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <h3 class="">
                                                    {!!__('land-cust-satis')!!}
                                                </h3>
                                                <p class="">
                                                    {{__('land-if-any')}} 
                                                </p>
                                                <p class="">
                                                    {{__('land-gain-cust')}}
                                                </p>
                                            </div>
                                        </div>        
                                    </div>
                                </div>
                            </div>
                            
                            
                        </div>
                    </div>
                    <div class="col-12">
                        <a class="start-now w-100" href="#packages">
                        {{__('land-start')}} 
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="logo-blocks">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="title-sticky mt-4 mb-4 text-center">
                            {{__('land-this-smart')}}
                        </h2>
                    </div>
                </div>
                 <div class="logo1">
                    <div id="accordion" class="panel-group" role="tablist" aria-multiselectable="true">
                        <div class="row">
                          <div class="panel panel-default col-md p-2">
                            <div class="panel-heading m-0 p-0  program-sponcer-section" id="headingOne1">
                              <h5 class="panel-title mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">
                                   <div class="program-sponcer-logo">
                                        <img src="{{get_theme_frontend_url('assets/sticky/images/Final New landing page maker2.png')}}" class="img-fluid w-100">
                                    </div>
                                     <div class="col-12 text-center see-more-btn">
                                        <p class="m-0 fs-14">{{__('land-see-mo')}} <i class="fas fa-arrow-down"></i> </p>
                                        </div>
                                </button>
                              </h5>
                            </div>
                        
                            <div id="collapseOne1" class="panel-collapse collapse mt-3">
                              <div class="card-body">
                                  <div class="cardbody1">
                                      <p class="mb-1 text-sticky">
                                           {{__('land-provide')}}:-
                                        </p>
                                        <ul class="text-sticky pl-3">
                                            <li>
                                              {{__('land-unlim')}}
                                            </li>
                                            <li>
                                             {{__('land-html')}}
                                            </li>
                                            <li>
                                             {{__('land-alter')}}
                                            </li>
                                            <li>
                                             {{__('land-export')}}
                                            </li>
                                            <li>
                                            {{__('land-publish')}}    
                                            </li>
                                            <li>
                                             {{__('land-preview')}}   
                                            </li>
                                        </ul>   
                                  </div>
                                   <div class="cardbody2">
                                    <div class="col-12 p-0">  
                                     <a class="start-now w-100" href="#packages"> {{__('temp-getItNow')}} </a>
                                    </div>  
                                  </div>
                              </div>
                                   
                            </div>
                          </div>
                          <div class="panel panel-default col-md p-2">
                            <div class="panel-heading m-0 p-0  program-sponcer-section" id="headingTwo2">
                              <h5 class="panel-title mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
                                        <div class="program-sponcer-logo">
                                            <img src="{{get_theme_frontend_url('assets/sticky/images/Done-Tasks-Wh.png')}}" class="img-fluid w-100">
                                        </div>
                                         <div class="col-12 text-center see-more-btn">
                                        <p class="m-0 fs-14">{{__('land-see-mo')}} <i class="fas fa-arrow-down"></i> </p>
                                        </div>
                                </button>
                              </h5>
                            </div>
                            <div id="collapseTwo2" class="panel-collapse collapse mt-3">
                              <div class="card-body">
                                <div class="cardbody1">
                                    <p class="mb-1 logo-p-text">{{__('land-platform')}} </p>
                                       <p class="mb-1 text-sticky">
                                            {{__('land-don-task')}}
                                        </p>
                                        <ul class="text-sticky pl-3">
                                            <li>
                                                {{__('land-man-unlim')}}
                                            </li>
                                            <li>
                                                {{__('land-man-unlim-tas')}}
                                            </li>
                                            <li>
                                                {{__('land-unlim-stor')}}
                                            </li>
                                            <li>
                                                {{__('land-support')}}
                                            </li>
                                        </ul>
                                </div>
                                <div class="cardbody2">
                                 <div class="col-12 p-0">  
                                 <a class="start-now w-100" href="#packages"> {{ __('temp-getItNow')}} </a>
                                </div>  
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="panel panel-default col-md p-2">
                            <div class="panel-heading m-0 p-0  program-sponcer-section" id="headingThree3">
                              <h5 class="panel-title mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree3" aria-expanded="false" aria-controls="collapseThree3">
                                        <div class="program-sponcer-logo">
                                            <img src="{{get_theme_frontend_url('assets/sticky/images/logo-1-1.png')}}" class="img-fluid w-100">
                                        </div>
                                         <div class="col-12 text-center see-more-btn">
                                        <p class="m-0 fs-14">{{__('land-see-mo')}} <i class="fas fa-arrow-down"></i> </p>
                                        </div>
                                </button>
                              </h5>
                            </div>
                            <div id="collapseThree3" class="panel-collapse collapse mt-3">
                              <div class="card-body">
                                    <div class="cardbody1">
                                  <p class="mb-1 logo-p-text"> {{__('land-economical-soc')}} </p>
                                        <p class="mb-1 text-sticky">
                                         {{__('land-stick-prov')}}
                                        </p>
                                        <ul class="text-sticky pl-3">
                                            <li>
                                            {{__('fam-Auto Scheduling')}}
                                            </li>
                                            <li>
                                               {{__('land-auto-rep')}}
                                            </li>
                                            <li>
                                              {{__('land-trac-inf')}}
                                            </li>
                                            <li>
                                              {{__('land-rep-anal')}}
                                            </li>
                                            <li>
                                              {{__('fam-Posts Generator')}}
                                            </li>
                                        </ul>
                                    </div>
                                 <div class="cardbody2">
                                <div class="col-12 p-0">  
                                 <a class="start-now w-100" href="#packages"> {{ __('temp-getItNow')}} </a>
                                </div> 
                                </div>
                                </div>
                            </div>
                          </div>
                          
                          <div class="panel panel-default col-md p-2">
                            <div class="panel-heading m-0 p-0  program-sponcer-section" id="headingFour4">
                              <h5 class="panel-title mb-0">
                                <button class="btn btn-link w-100" data-toggle="collapse" data-target="#collapseFour4" aria-expanded="true" aria-controls="collapseFour4">
                                        <div class="program-sponcer-logo">
                                            <img src="{{get_theme_frontend_url('assets/sticky/images/emblem-Samsung.jpg')}}" class="img-fluid w-100">
                                        </div>
                                         <div class="col-12 text-center see-more-btn">
                                        <p class="m-0 fs-14">{{__('land-see-mo')}} <i class="fas fa-arrow-down"></i> </p>
                                        </div>
                                </button>
                              </h5>
                            </div>
                        
                            <div id="collapseFour4"  class="panel-collapse collapse mt-3">
                              <div class="card-body">
                                <div class="cardbody1">  
                                  <p class="mb-1 text-sticky">
                                           {{__('land-samsu-wil')}}
                                </p>
                                        <ul class="text-sticky mb-4  pl-3">
                                            <li>
                                               {{__('land-laptop')}}
                                            </li>
                                            <li>
                                               {{__('land-tablet')}}
                                            </li>
                                        </ul>
                                </div>
                                    <div class="cardbody2">
                                 <div class="col-12 p-0">  
                                 <a class="start-now w-100" href="#packages"> {{ __('temp-getItNow')}} </a>
                                </div>  
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="panel panel-default col-md p-2">
                            <div class="panel-heading m-0 p-0  program-sponcer-section" id="headingFive5">
                              <h5 class="panel-title mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive5" aria-expanded="false" aria-controls="collapseFive5">
                                        <div class="program-sponcer-logo">
                                            <img src="{{get_theme_frontend_url('assets/sticky/images/orange.jpg')}}" class="img-fluid w-75 orange w-50mobile">
                                        </div>
                                         <div class="col-12 text-center see-more-btn">
                                        <p class="m-0 fs-14">{{__('land-see-mo')}} <i class="fas fa-arrow-down"></i> </p>
                                        </div>
                                </button>
                              </h5>
                            </div>
                            <div id="collapseFive5"  class="panel-collapse collapse mt-3">
                              <div class="card-body">
                                    <div class="cardbody1">  
                                  <p class="mb-1 text-sticky">
                                            {{__('land-orange-tele')}}
                                 </p>
                                 </div>
                                     <div class="cardbody2">
                                 <div class="col-12 p-0">  
                                 <a class="start-now w-100" href="#packages"> {{ __('temp-getItNow')}} </a>
                                </div>  
                              </div>
                              </div>
                            </div>
                          </div>
                        </div>  
                        <div class="row mt-3">
                            <div class="panel panel-default col-md p-2">
                            <div class="panel-heading m-0 p-0  program-sponcer-section" id="headingSix6">
                              <h5 class="panel-title mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix6" aria-expanded="false" aria-controls="collapseSix6">
                                        <div class="program-sponcer-logo">
                                            <img src="{{get_theme_frontend_url('assets/sticky/images/autochat.png')}}" class="img-fluid w-100">
                                        </div>
                                         <div class="col-12 text-center see-more-btn">
                                        <p class="m-0 fs-14">{{__('land-see-mo')}} <i class="fas fa-arrow-down"></i> </p>
                                        </div>
                                </button>
                              </h5>
                            </div>
                            <div id="collapseSix6"  class="panel-collapse collapse mt-3">
                              <div class="card-body">
                                    <div class="cardbody1">    
                                  <p class="mb-1 text-sticky">
                                            {{__('land-best-mess')}}
                                        </p>
                                       <ul class="text-sticky m-0 pl-3">
                                            <li>
                                              {{__('land-bulk-mess')}}
                                            </li>
                                            <li>
                                              {{__('land-auto-rep')}}
                                            </li>
                                            <li>
                                             {{__('land-auto-pri')}}
                                            </li>
                                            
                                            <li>
                                             {{__('land-tex-img')}}
                                            </li>
                                             <li>
                                             {{__('land-pag-mess')}}
                                            </li>
                                            <li>
                                             {{__('land-bot-rep')}}
                                            </li>
                                           
                                        </ul>
                                </div>
                                    <div class="cardbody2">  
                                 <div class="col-12 p-0">  
                                 <a class="start-now w-100" href="#packages"> {{ __('temp-getItNow')}} </a>
                                </div>  
                                </div>
                              </div>
                            </div>
                          </div>
                            <div class="panel panel-default col-md p-2">
                            <div class="panel-heading m-0 p-0  program-sponcer-section" id="headingSeven7">
                              <h5 class="panel-title mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSeven7" aria-expanded="false" aria-controls="collapseSeven7">
                                    <div class="program-sponcer-logo">
                                        <img src="{{get_theme_frontend_url('assets/sticky/images/idigitalhr.png')}}" class="img-fluid w-100">
                                    </div>
                                     <div class="col-12 text-center see-more-btn">
                                        <p class="m-0 fs-14">{{__('land-see-mo')}} <i class="fas fa-arrow-down"></i> </p>
                                        </div>
                                </button>
                              </h5>
                            </div>
                            <div id="collapseSeven7"  class="panel-collapse collapse mt-3">
                              <div class="card-body">
                                    <div class="cardbody1">    
                                  <p class="mb-1 text-sticky">
                                           {{__('land-idigital')}}
                                        </p>
                                </div>
                                    <div class="cardbody2">  
                                 <div class="col-12 p-0">  
                                 <a class="start-now w-100" href="#packages"> {{ __('temp-getItNow')}} </a>
                                </div>  
                              </div>
                            </div>
                          </div>
                          </div>
                            <div class="panel panel-default col-md p-2">
                            <div class="panel-heading m-0 p-0  program-sponcer-section" id="headingEight8">
                              <h5 class="panel-title mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseEight8" aria-expanded="false" aria-controls="collapseEight8">
                                        <div class="program-sponcer-logo">
                                            <img src="{{get_theme_frontend_url('assets/sticky/images/Templates001 Logo.png')}}" class="img-fluid w-100">
                                        </div>
                                         <div class="col-12 text-center see-more-btn">
                                        <p class="m-0 fs-14">{{__('land-see-mo')}} <i class="fas fa-arrow-down"></i> </p>
                                        </div>
                                </button>
                              </h5>
                            </div>
                            <div id="collapseEight8"  class="panel-collapse collapse mt-3">
                              <div class="card-body">
                                    <div class="cardbody1">    
                               <p class="mb-1 text-sticky">
                                            {{__('land-template001')}}

                                        </p>
                                    </div>    
                                    <div class="cardbody2">          
                                 <div class="col-12 p-0">  
                                 <a class="start-now w-100" href="#packages"> {{ __('temp-getItNow')}} </a>
                                </div>  
                                </div>
                              </div>
                            </div>
                          </div>
                            <div class="panel panel-default col-md p-2">
                            <div class="panel-heading m-0 p-0  program-sponcer-section" id="headingNine9">
                              <h5 class="panel-title mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseNine9" aria-expanded="false" aria-controls="collapseNine9">
                                        <div class="program-sponcer-logo d-block">
                                            <div class="col-12 text-left">
                                              <small class="text-dark"> {{__('land-power-by')}} <span class="org-txt"> {{__('land-ora')}} </span></small>
                                            </div>
                                            <img src="{{get_theme_frontend_url('assets/sticky/images/SMS Cooker logo.jpg')}}" class="img-fluid w-100">
                                        </div>
                                        <div class="col-12 text-center see-more-btn">
                                        <p class="m-0 fs-14">{{__('land-see-mo')}} <i class="fas fa-arrow-down"></i> </p>
                                        </div>
                                </button>
                              </h5>
                            </div>
                            <div id="collapseNine9"  class="panel-collapse collapse mt-3">
                              <div class="card-body">
                                    <div class="cardbody1">    
                                   <p class="mb-1 text-sticky">
                                           {{__('land-smscooker')}}
                                        </p>
                                        <ul class="text-sticky mb-4  pl-3">
                                            <li>
                                              {{__('land-sms')}} 
                                            </li>
                                            <li>
                                             {{__('land-loc-bas')}} 
                                            </li>
                                            <li>
                                            {{{__('land-vip-sms')}}}
                                            </li>
                                        </ul>
                                </div>
                                    <div class="cardbody2">  
                                 <div class="col-12 p-0">  
                                 <a class="start-now w-100" href="#packages"> {{ __('temp-getItNow')}} </a>
                                </div>
                                </div>
                              </div>
                            </div>
                          </div>
                            <div class="panel panel-default col-md p-2">
                            <div class="panel-heading m-0 p-0  program-sponcer-section" id="headingTen10">
                              <h5 class="panel-title mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTen10" aria-expanded="false" aria-controls="collapseTen10">
                                        <div class="program-sponcer-logo">
                                            <img src="https://mobijobs.net/assets/images/logo.png" class="img-fluid w-100 bg-black">
                                        </div>
                                         <div class="col-12 text-center see-more-btn">
                                        <p class="m-0 fs-14">{{__('land-see-mo')}} <i class="fas fa-arrow-down"></i> </p>
                                        </div>
                                </button>
                              </h5>
                            </div>
                            <div id="collapseTen10"  class="panel-collapse collapse mt-3">
                              <div class="card-body">
                                    <div class="cardbody1">    
                                    <p class="mb-1 text-sticky">
                                            {{__('land-mobi-jobs')}}
                                        </p>
                                </div>
                                    <div class="cardbody2">  
                                 <div class="col-12 p-0">  
                                 <a class="start-now w-100" href="#packages"> {{ __('temp-getItNow')}} </a>
                                </div>
                                </div>
                              </div>
                            </div>
                          </div>      
                        </div>
                    </div>
                </div>
            
              
            </div>
        </section>
        
        <section class="arabic-style logo-blocks">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="title-sticky mt-4 mb-4 text-center">
                        {{__('land-cho-pack')}}
                        </h2>
                    </div>
                </div>
                <div class="row">
                 <ul class="nav row w-100 p-0 justify-content-center nav-pills my-4" id="pills-tab" role="tablist">
                  <li class="nav-item w-25 text-center">
                    <a class="nav-link active" id="pills-Professional-tab" data-toggle="pill" href="#pills-Professional" role="tab" aria-controls="pills-Professional" aria-selected="true"> {{__('land-pro-pack')}} </a>
                  </li>
                  <li class="nav-item w-25 text-center">
                    <a class="nav-link" id="pills-SuperProfessional-tab" data-toggle="pill" href="#pills-SuperProfessional" role="tab" aria-controls="pills-SuperProfessional" aria-selected="false"> {{__('land-sup-pro-pack')}} </a>
                  </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                  <div class="tab-pane fade show active" id="pills-Professional" role="tabpanel" aria-labelledby="pills-Professional-tab">
                   <div class="row images-section justify-content-center">
                     <div class="col-md-3">
                         <h3 class="img-top-text">{{__('land-conn')}}</h3>        
                      <img src="https://shop.orange.eg/content/images/thumbs/0000876_orange-mw40_550.jpeg" class="img-fluid w-100">
                     </div> 
                     <div class="col-md-1 justify-content-center d-flex align-items-center">
                      <i class="fas fa-plus-square faplus-style"></i>    
                     </div> 
                     <div class="col-md-3">
                      <h3 class="img-top-text">{{__('land-hard')}}</h3>        
                      <img src="https://mms.businesswire.com/media/20140415005579/en/411630/5/P55t_ANGLE1.jpg')}}" class="img-fluid w-100">
                     </div> 
                     <div class="col-md-1 justify-content-center d-flex align-items-center">
                      <i class="fas fa-plus-square faplus-style"></i>    
                     </div> 
                     <div class="col-md-3">
                         <h3 class="img-top-text">{{__('land-app')}}</h3>   
                        <img src="{{get_theme_frontend_url('assets/sticky/images/Professinal package banner b2b.jpg')}}" class="img-fluid w-100">
                     </div> 
                  
                </div>
                <div class="row content-section justify-content-center">
                    <div class="col-md-3 mt-3">
                       <div class="col-12 text-center see-more-btn">
                         <a class="m-0 fs-14">{{__('land-see-mo')}} <i class="fas fa-arrow-down"></i></a>
                       </div>  
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-3 mt-3">
                       <div class="col-12 text-center see-more-btn">
                        <button class="border-0 bg-none" data-toggle="modal" data-target="#featuresModal2-prof" type="button"> {{__('land-see-mo')}} <i class="fas fa-arrow-right"></i></button>
                       </div> 
                     <div class="modal fade" id="featuresModal2-prof" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                       <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">  </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>    
                <div id="carouselExampleControls" class="carousel slide bg-mauv" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active py-3">
                                       
                        <ul class="text-sticky2 pr-5">
                          
                        </ul>
                    </div>
                
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">{{__('land-previous')}}</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">{{__('land-nex')}}</span>
                  </a>
                </div>
                    </div>
                  </div>
                </div>
                    </div>   
                    <div class="col-md-1"></div>
                    <div class="col-md-3 mt-3">
                       <div class="col-12 text-center see-more-btn">
                        <button class="border-0 bg-none" data-toggle="modal" data-target="#featuresModal-prof" type="button"> {{__('land-see-mo')}} <i class="fas fa-arrow-right"></i></button>
                       </div> 
                      <div class="modal fade" id="featuresModal-prof" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">{{__('land-benefits')}}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>    
                        <div id="carouselExampleControls1" class="carousel slide bg-mauv" data-ride="carousel">
                          <div class="carousel-inner">
                            <div class="carousel-item active py-3">
                               <p class="mb-1 px-3 text-light">
                               {{__('land-present')}}
                                </p>
                                <ul class="text-sticky2 pr-5">
                                  <li>
                                {{__('fam-Auto Scheduling')}}
                                    </li>
                                    <li>
                                {{__('land-auto-activity')}}
                                    </li>
                                    <li>
                                      {{__('land-track')}}
                                    </li>
                                    <li>
                                   {{__('fam-Posts Generator')}}
                                    </li>
                              </ul>
                            </div>
                            <div class="carousel-item py-3">
                             <ul class="text-sticky2 pr-5">    
                             <li>
                                {{__('land-social-media')}}
                            </li>
                            <li>
                                {{__('land-unlimited-team')}}
                            </li>
                            <li>
                                {{__('land-design')}}
                            </li>
                            <li>
                                {{__('land-avaliable-storage')}}
                            </li>
                            <li>
                                {{__('land-content-right')}}
                            </li>
                            
                            </ul>    
                            </div>
                            <div class="carousel-item py-3">
                                <ul class="text-sticky2 pr-5">
                                  <li>
                                {{__('fam-Reports')}}
                            </li>
                            <li>
                                {{__('land-automatic-activities')}} 
                                <br>
                                {{__('land-responses')}}
                            </li>
                            <li>
                                {{__('land-account')}} 
                                <br>
                                {{__('land-provide-client')}}
                            </li>
                            <li>
                                {{__('land-ad')}}
                                <span class="text-red">
                                    {{__('land-additional-add')}}
                                </span>
                                {{__('land-other-accounts')}}
                            </li>
                           </ul>
                            </div>
                            <div class="carousel-item py-3">
                            <ul class="text-sticky2 pr-5">
                            <li>
                                <span class="text-red">
                                {{__('land-additional-add')}}
                                </span>
                                {{__('land-privileges')}}
                            </li>
                            <li>
                                {{__('pay-getFreeLaptop')}} 
                            </li>
                            <li>
                                {{__('pay-internetPackages')}}  
                            </li>
                            <li>
                                {{__('land-pdone')}} 
                            </li>
                            <li>
                                {{__('land-program')}}
                            </li>
                                </ul>
                            </div>
                            <div class="carousel-item py-3">
                            <p class="mb-1 px-3 text-light">
                             {{__('land-platform')}}

                            </p>
                           <p class="mb-1 pl-3 text-light">
                            {{__('land-done-tasks')}}

                            </p>
                            <ul class="text-sticky2 pr-5 mb-0">
                                <li>
                                {{__('land-add')}}
                                </li>
                                <li>
                                {{__('land-unlimited')}}
                                </li>
                                <li>
                                 {{__('land-storage')}}
                                </li>
                                <li>
                                 {{__('land-support')}}
                                </li>
                            </ul>
                            </div>
                          </div>
                          <a class="carousel-control-prev" href="#carouselExampleControls1" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">{{__('land-previous')}}</span>
                          </a>
                          <a class="carousel-control-next" href="#carouselExampleControls1" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">{{__('land-next')}}</span>
                          </a>
                        </div>
                        </div>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="row my-5 justify-content-center">
                 <div class="col-md-3">
                   <div class="router-body">
                    <div class="col-12 text-center see-more-btn packagesDropdown button dropdown">
                        <select id="pkgselector" style="background:none;color:white;border:none;" name="Go-packages" class="">
                          <option value="0">{{__('land-choose')}}</option>
                          <option value="Go15"> {{__('land-bg')}} 15</option>
                          <option value="Go35">{{__('land-bg')}}35</option>
                          <option value="Go65">{{__('land-bg')}}65</option>
                          <option value="Go100">{{__('land-bg')}}100</option>
                          <option value="Go150">{{__('land-bg')}}150</option>
                          <option value="Go250">{{__('land-bg')}}250</option>
                          <option value="Go400">{{__('land-bg')}}400</option>
                        </select>
                    </div>
                     <div class="output">
                      <div id="Go15"  class="colors">
                          <div class="row">
                              <div class="col-md-12">
                                  <div class="row mx-0">
                                    <p class="col-9 mb-0 p-0 text-left">{{__('land-p-m')}}</p>
                                    <p class="col-3 mb-0 p-0 text-center text-dark">15 L.E </p>      
                               
                                    <p class="col-9 mb-0 p-0 text-left">{{__('land-ps')}}</p>
                                    <p class="col-3 mb-0 p-0 text-center text-dark">1600	</p>    
                               
                                    <p class=" mb-0 text-left">{{__('land-post-bundle')}}</p>
                                     <p class=" mb-0 text-left text-dark">
                                      {{__('land-bg')}} 
                                     </p>  
                                  </div>
                              </div>
                              
                          </div>
                      </div>
                      <div id="Go35"  class="colors"> 
                       <div class="row">
                              <div class="col-md-12">
                                  <div class="row mx-0">
                                    <p class="col-9 mb-0 p-0 text-left">{{__('land-p-m')}}</p>
                                    <p class="col-3 mb-0 p-0 text-center text-dark">35 L.E </p>      
                               
                                    <p class="col-9 mb-0 p-0 text-left">{{__('land-ps')}}</p>
                                    <p class="col-3 mb-0 p-0 text-center text-dark">4500	</p>    
                               
                                    <p class=" mb-0 text-left">{{__('land-post-bundle')}}</p>
                                     <p class=" mb-0 text-left text-dark">
                                       {{__('land-1l')}} 
                                      
                                     </p>  
                                  </div>
                              </div>
                              
                          </div>
                      </div>
                      <div id="Go65"  class="colors">
                            <div class="row">
                              <div class="col-md-12">
                                  <div class="row mx-0">
                                    <p class="col-9 mb-0 p-0 text-left">{{__('land-p-m')}}</p>
                                    <p class="col-3 mb-0 p-0 text-center text-dark">65 L.E </p>      
                               
                                    <p class="col-9 mb-0 p-0 text-left">{{__('land-ps')}}</p>
                                    <p class="col-3 mb-0 p-0 text-center text-dark">9500	</p>    
                               
                                    <p class=" mb-0 text-left">{{__('land-post-bundle')}}</p>
                                     <p class=" mb-0 text-left text-dark">
                                       {{__('land-1l')}} 
                                      
                                     </p>  
                                  </div>
                              </div>
                              
                          </div>
                      </div>
                      <div id="Go100" class="colors">
                            <div class="row">
                              <div class="col-md-12">
                                  <div class="row mx-0">
                                    <p class="col-9 mb-0 p-0 text-left">{{__('land-p-m')}}</p>
                                    <p class="col-3 mb-0 p-0 text-center text-dark">100 L.E </p>      
                               
                                    <p class="col-9 mb-0 p-0 text-left">{{__('land-ps')}}</p>
                                    <p class="col-3 mb-0 p-0 text-center text-dark">16,000			</p>    
                               
                                    <p class=" mb-0 text-left">{{__('land-post-bundle')}}</p>
                                     <p class=" mb-0 text-left text-dark">
                                       {{__('land-1l')}} 
                                      
                                     </p>  
                                  </div>
                              </div>
                              
                          </div>
                      </div>
                      <div id="Go150" class="colors">
                            <div class="row">
                              <div class="col-md-12">
                                  <div class="row mx-0">
                                    <p class="col-9 mb-0 p-0 text-left">{{__('land-p-m')}}</p>
                                    <p class="col-3 mb-0 p-0 text-center text-dark">150 L.E </p>      
                               
                                    <p class="col-9 mb-0 p-0 text-left">{{__('land-ps')}}</p>
                                    <p class="col-3 mb-0 p-0 text-center text-dark">28,000	</p>    
                               
                                    <p class=" mb-0 text-left">{{__('land-post-bundle')}}</p>
                                     <p class=" mb-0 text-left text-dark">
                                       {{__('land-1l')}} 
                                      
                                     </p>  
                                  </div>
                              </div>
                              
                          </div>
                      </div>
                      <div id="Go250" class="colors">
                            <div class="row">
                              <div class="col-md-12">
                                  <div class="row mx-0">
                                    <p class="col-9 mb-0 p-0 text-left">{{__('land-p-m')}}</p>
                                    <p class="col-3 mb-0 p-0 text-center text-dark">250 L.E </p>      
                               
                                    <p class="col-9 mb-0 p-0 text-left">{{__('land-ps')}}</p>
                                    <p class="col-3 mb-0 p-0 text-center text-dark">50,000	</p>    
                               
                                    <p class=" mb-0 text-left">{{__('land-post-bundle')}}</p>
                                     <p class=" mb-0 text-left text-dark">
                                       {{__('land-1l')}} 
                                      
                                     </p>  
                                  </div>
                              </div>
                              
                          </div>
                      </div>
                      <div id="Go400" class="colors">
                            <div class="row">
                              <div class="col-md-12">
                                  <div class="row mx-0">
                                    <p class="col-9 mb-0 p-0 text-left">{{__('land-p-m')}}</p>
                                    <p class="col-3 mb-0 p-0 text-center text-dark">1400 L.E	 </p>      
                               
                                    <p class="col-9 mb-0 p-0 text-left">{{__('land-ps')}}</p>
                                    <p class="col-3 mb-0 p-0 text-center text-dark">90,000	</p>    
                               
                                    <p class=" mb-0 text-left">{{__('land-post-bundle')}}</p>
                                     <p class=" mb-0 text-left text-dark">
                                       {{__('land-1l')}} 
                                      
                                     </p>  
                                  </div>
                              </div>
                              
                          </div>
                      </div>
                    </div>
                    </div>
                    <div class="row mx-0 py-3 my-3 program-sponcer-section">     
                         <div class="col-md-12 text-left">
                          <p class="text-dark">{{__('land-total-price')}} </p>
                        </div>
                         <div class="col-md-12 text-center">
                          <div class="col">
                            <p class="font-weight-bold mt-1 price-bg"><strong>4999
                                                 L.E {{__('land-annually')}}  </strong> 
                            </p>
                            <div class="row mx-0 d-flex">
                                <a class="see-more-btn w-100 text-white" style="width:48%" href="https://stickyposts.net/stickypost_register/register-en.php?language=2">
                                  {{__('pay-installNow')}}  
                                </a>
                            </div>
                        </div>
                        </div>
                         <div class="col-md-12 text-left">
                                      <p  class="text-dark mb-0 mt-2">{{__('land-install')}} <span class="font-weight-bold text-color-red">18</span> 
                                         {{__('land-months')}}</p>
                          </div>
                     </div> 
                 </div>  
                 <div class="col-md-1 text-center">
                      <i class="fas fa-plus-square faplus-style"></i>    
                 </div>
                 <div class="col-md-7">
                <div class="row">
                  <div class="col-md-12">
                    <h3 class="img-top-text"> {{__('land-prof-package')}} </h3>        
                  </div>
                  <div class="col-md-6">
                    <h3 class="img-top-text"> {{__('land-marketing')}}  </h3>        
 
                 </div>  
                 <div class="col-md-6">
                  <h3 class="img-top-text"> {{__('land-effective-sales')}} </h3>        
   
                 </div>
                 </div>  
                </div>     
                 
                </div>
               

               </div>
            </div>
                  <div class="tab-pane fade" id="pills-SuperProfessional" role="tabpanel" aria-labelledby="pills-SuperProfessional-tab">
                    <div class="row images-section justify-content-center">
                      <div class="col-md-3">
                         <h3 class="img-top-text">{{__('land-conn')}}</h3>        
                      <img src="https://shop.orange.eg/content/images/thumbs/0000876_orange-mw40_550.jpeg" class="img-fluid w-100">
                     </div> 
                     <div class="col-md-1 justify-content-center d-flex align-items-center">
                      <i class="fas fa-plus-square faplus-style"></i>    
                     </div> 
                     <div class="col-md-3">
                      <h3 class="img-top-text">{{__('land-hard')}}</h3>        
                      <img src="https://mms.businesswire.com/media/20140415005579/en/411630/5/P55t_ANGLE1.jpg')}}" class="img-fluid w-100">
                     </div> 
                     <div class="col-md-1 justify-content-center d-flex align-items-center">
                      <i class="fas fa-plus-square faplus-style"></i>    
                     </div> 
                       <div class="col-md-3">
                         <h3 class="img-top-text">{{__('land-app')}}</h3>   
                        <img src="{{get_theme_frontend_url('assets/sticky/images/Super Professinal banner b2b.jpg')}}" class="img-fluid w-100">
                     </div> 
                  
                </div>
                    <div class="row content-section justify-content-center">
                    <div class="col-md-3 mt-3">
                       <div class="col-12 text-center see-more-btn">
                         <a class="m-0 fs-14">{{__('land-see-mo')}} <i class="fas fa-arrow-down"></i></a>
                       </div>  
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-3 mt-3">
                       <div class="col-12 text-center see-more-btn">
                        <button class="border-0 bg-none" data-toggle="modal" data-target="#featuresModal2-sp" type="button"> {{__('land-see-mo')}} <i class="fas fa-arrow-right"></i></button>
                       </div> 
                           <div class="modal fade" id="featuresModal2-sp" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                       <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">  </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>    
                      <div id="carouselExampleControls" class="carousel slide bg-mauv" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active py-3">
                                       
                        <ul class="text-sticky2 pr-5">
                          
                        </ul>
                    </div>
                
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">{{__('land-previous')}}</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">{{__('land-next')}}</span>
                  </a>
                </div>
                    </div>
                  </div>
                </div>
                    </div>   
                    <div class="col-md-1"></div>
                    <div class="col-md-3 mt-3">
                       <div class="col-12 text-center see-more-btn">
                        <button class="border-0 bg-none" data-toggle="modal" data-target="#featuresModal-sp" type="button"> {{__('land-see-mo')}} <i class="fas fa-arrow-right"></i></button>
                       </div> 
                      <div class="modal fade" id="featuresModal-sp" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">{{__('land-benefits')}}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>    
                        <div id="carouselExampleControls-sp" class="carousel slide bg-mauv" data-ride="carousel">
                          <div class="carousel-inner">
                            <div class="carousel-item active py-3">
                               <p class="mb-1 px-3 text-light">
                               {{__('land-present')}}
                                </p>
                                <ul class="text-sticky2 pr-5">
                                  <li>
                                {{__('fam-Auto Scheduling')}}
                                    </li>
                                    <li>
                                {{__('land-auto-activity')}}
                                    </li>
                                    <li>
                                      {{__('land-track')}}
                                    </li>
                                    <li>
                                   {{__('fam-Posts Generator')}}
                                    </li>
                              </ul>
                            </div>
                            <div class="carousel-item py-3">
                             <ul class="text-sticky2 pr-5">    
                             <li>
                                {{__('land-social-media')}}
                            </li>
                            <li>
                                {{__('land-unlimited-team')}}
                            </li>
                            <li>
                                {{__('land-design')}}
                            </li>
                            <li>
                                {{__('land-avaliable-storage')}}
                            </li>
                            <li>
                                {{__('land-content-right')}}
                            </li>
                            
                            </ul>    
                            </div>
                            <div class="carousel-item py-3">
                                <ul class="text-sticky2 pr-5">
                                  <li>
                                {{__('fam-Reports')}}
                            </li>
                            <li>
                                {{__('land-automatic-activities')}} 
                                <br>
                                {{__('land-responses')}}
                            </li>
                            <li>
                                {{__('land-account')}} 
                                <br>
                                {{__('land-provide-client')}}
                            </li>
                            <li>
                                {{__('land-ad')}}
                                <span class="text-red">
                                    {{__('land-additional-add')}}
                                </span>
                                {{__('land-other-accounts')}}
                            </li>
                           </ul>
                            </div>
                            <div class="carousel-item py-3">
                            <ul class="text-sticky2 pr-5">
                            <li>
                                <span class="text-red">
                                {{__('land-additional-add')}}
                                </span>
                                {{__('land-privileges')}}
                            </li>
                            <li>
                                {{__('pay-getFreeLaptop')}} 
                            </li>
                            <li>
                                {{__('pay-internetPackages')}}  
                            </li>
                            <li>
                                {{__('land-pdone')}} 
                            </li>
                            <li>
                                {{__('land-program')}}
                            </li>
                                </ul>
                            </div>
                            <div class="carousel-item py-3">
                            <p class="mb-1 px-3 text-light">
                             {{__('land-platform')}}

                            </p>
                           <p class="mb-1 pl-3 text-light">
                            {{__('land-done-tasks')}}

                            </p>
                            <ul class="text-sticky2 pr-5 mb-0">
                                <li>
                                {{__('land-add')}}
                                </li>
                                <li>
                                {{__('land-unlimited')}}
                                </li>
                                <li>
                                 {{__('land-storage')}}
                                </li>
                                <li>
                                 {{__('land-support')}}
                                </li>
                            </ul>
                            </div>
                          </div>
                          <a class="carousel-control-prev" href="#carouselExampleControls-sp" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">{{__('land-previous')}}</span>
                          </a>
                          <a class="carousel-control-next" href="#carouselExampleControls-sp" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">{{__('land-next')}}</span>
                          </a>
                        </div>
                        </div>
                        </div>
                      </div>
                    </div>
                </div>
                    <div class="row my-5 justify-content-center">
                     <div class="col-md-3">
                       <div class="router-body">
                        <div class="col-12 text-center see-more-btn packagesDropdown button dropdown">
                            <select id="pkgselector2" style="background:none;color:white;border:none;" name="Go-packages2" class="">
                              <option value="0">{{__('land-choose')}}</option>
                              <option value="Go15">{{__('land-bg')}}15</option>
                              <option value="Go35">{{__('land-bg')}}35</option>
                              <option value="Go65">{{__('land-bg')}}65</option>
                              <option value="Go100">{{__('land-bg')}}100</option>
                              <option value="Go150">{{__('land-bg')}}150</option>
                              <option value="Go250">{{__('land-bg')}}250</option>
                              <option value="Go400">{{__('land-bg')}}400</option>
                            </select>
                        </div>
                         <div class="output">
                          <div id="Go15-sp"  class="colors2">
                              <div class="row">
                                  <div class="col-md-12">
                                      <div class="row mx-0">
                                        <p class="col-9 mb-0 p-0 text-left">{{__('land-p-m')}}</p>
                                        <p class="col-3 mb-0 p-0 text-center text-dark">15 L.E </p>      
                                   
                                        <p class="col-9 mb-0 p-0 text-left">{{__('land-ps')}}</p>
                                        <p class="col-3 mb-0 p-0 text-center text-dark">1600	</p>    
                                   
                                        <p class=" mb-0 text-left">{{__('land-post-bundle')}}</p>
                                         <p class=" mb-0 text-left text-dark">
                                         {{__('land-1l')}} 
                                          
                                         </p>  
                                      </div>
                                  </div>
                                  
                              </div>
                          </div>
                          <div id="Go35-sp"  class="colors2"> 
                           <div class="row">
                                  <div class="col-md-12">
                                      <div class="row mx-0">
                                        <p class="col-9 mb-0 p-0 text-left">{{__('land-p-m')}}</p>
                                        <p class="col-3 mb-0 p-0 text-center text-dark">35 L.E </p>      
                                   
                                        <p class="col-9 mb-0 p-0 text-left">{{__('land-ps')}}</p>
                                        <p class="col-3 mb-0 p-0 text-center text-dark">4500	</p>    
                                   
                                        <p class=" mb-0 text-left">{{__('land-post-bundle')}}</p>
                                         <p class=" mb-0 text-left text-dark">
                                         {{__('land-1l')}}
                                         </p>  
                                      </div>
                                  </div>
                                  
                              </div>
                          </div>
                          <div id="Go65-sp"  class="colors2">
                                <div class="row">
                                  <div class="col-md-12">
                                      <div class="row mx-0">
                                        <p class="col-9 mb-0 p-0 text-left">{{__('land-p-m')}}</p>
                                        <p class="col-3 mb-0 p-0 text-center text-dark">65 L.E </p>      
                                   
                                        <p class="col-9 mb-0 p-0 text-left">{{__('land-ps')}}</p>
                                        <p class="col-3 mb-0 p-0 text-center text-dark">9500	</p>    
                                   
                                        <p class=" mb-0 text-left">{{__('land-post-bundle')}}</p>
                                         <p class=" mb-0 text-left text-dark">
                                         {{__('land-1l')}}
                                         </p>  
                                      </div>
                                  </div>
                                  
                              </div>
                          </div>
                          <div id="Go100-sp" class="colors2">
                                <div class="row">
                                  <div class="col-md-12">
                                      <div class="row mx-0">
                                        <p class="col-9 mb-0 p-0 text-left">{{__('land-p-m')}}</p>
                                        <p class="col-3 mb-0 p-0 text-center text-dark">100 L.E </p>      
                                   
                                        <p class="col-9 mb-0 p-0 text-left">{{__('land-ps')}}</p>
                                        <p class="col-3 mb-0 p-0 text-center text-dark">16,000			</p>    
                                   
                                        <p class=" mb-0 text-left">{{__('land-post-bundle')}}</p>
                                         <p class=" mb-0 text-left text-dark">
                                         {{__('land-1l')}}
                                          
                                         </p>  
                                      </div>
                                  </div>
                                  
                              </div>
                          </div>
                          <div id="Go150-sp" class="colors2">
                                <div class="row">
                                  <div class="col-md-12">
                                      <div class="row mx-0">
                                        <p class="col-9 mb-0 p-0 text-left">{{__('land-p-m')}}</p>
                                        <p class="col-3 mb-0 p-0 text-center text-dark">150 L.E </p>      
                                   
                                        <p class="col-9 mb-0 p-0 text-left">{{__('land-ps')}}</p>
                                        <p class="col-3 mb-0 p-0 text-center text-dark">28,000	</p>    
                                   
                                        <p class=" mb-0 text-left">{{__('land-post-bundle')}}</p>
                                         <p class=" mb-0 text-left text-dark">
                                         {{__('land-1l')}}
                                         </p>  
                                      </div>
                                  </div>
                                  
                              </div>
                          </div>
                          <div id="Go250-sp" class="colors2">
                                <div class="row">
                                  <div class="col-md-12">
                                      <div class="row mx-0">
                                        <p class="col-9 mb-0 p-0 text-left">{{__('land-p-m')}}</p>
                                        <p class="col-3 mb-0 p-0 text-center text-dark">250 L.E </p>      
                                   
                                        <p class="col-9 mb-0 p-0 text-left">{{__('land-ps')}}</p>
                                        <p class="col-3 mb-0 p-0 text-center text-dark">50,000	</p>    
                                   
                                        <p class=" mb-0 text-left">{{__('land-post-bundle')}}</p>
                                         <p class=" mb-0 text-left text-dark">
                                         {{__('land-1l')}}
                                          
                                         </p>  
                                      </div>
                                  </div>
                                  
                              </div>
                          </div>
                          <div id="Go400-sp" class="colors2">
                                <div class="row">
                                  <div class="col-md-12">
                                      <div class="row mx-0">
                                        <p class="col-9 mb-0 p-0 text-left">{{__('land-p-m')}}</p>
                                        <p class="col-3 mb-0 p-0 text-center text-dark">1400 L.E	 </p>      
                                   
                                        <p class="col-9 mb-0 p-0 text-left">{{__('land-ps')}}</p>
                                        <p class="col-3 mb-0 p-0 text-center text-dark">90,000	</p>    
                                   
                                        <p class=" mb-0 text-left">{{__('land-post-bundle')}}</p>
                                         <p class=" mb-0 text-left text-dark">
                                         {{__('land-1l')}}
                                          
                                         </p>  
                                      </div>
                                  </div>
                                  
                              </div>
                          </div>
                        </div>
                        </div>
                     </div>  
        
                     <div class="col-md-8">
                    <div class="row mx-0 py-5 program-sponcer-section">     
                     <div class="col-md-3 text-left">
                      <p class="text-dark">{{__('land-total-price')}} </p>
                    </div>
                     <div class="col-md-6 text-center">
                      <div class="col">
                        <p class="font-weight-bold mt-1 price-bg"><strong>6999
                                             L.E {{__('land-annually')}}  </strong> 
                        </p>
                        <div class="row mx-0 d-flex">
                            <a class="see-more-btn mr-1" style="width:48%" href="https://stickyposts.net/stickypost_register/register-en.php?language=2">
                            {{__('land-order-now')}}
                            </a>
                            <a class="see-more-btn ml-2  text-white" style="width:48%" data-toggle="modal" data-target="#installmentModal">
                              {{__('pay-installNow')}}  
                            </a>
                              <!-- Modal -->
                            <div class="modal fade" id="installmentModal" tabindex="-1" role="dialog" aria-labelledby="installmentModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content" style="background: linear-gradient(275deg, #5e2298, #320b82);color:#fff">
                                   <div class="modal-header p-0" style="position: relative;height: 50px;">
                                        <img src="https://stickyposts.net/sticky/logo-s.png')}}" style="width: 49px;z-index: 10;position: absolute;left: 0;">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position: absolute;top: 12px;right: 20px;">
                                          <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                  <div class="modal-body">
                                    <div class="col-8 mx-auto px-0 installment-by-provider w-100">
                                        <div>
                                            <span class="sub_toppic_cart">
                                                <span>
                                                    <strong>{{__('pay-InstallBy')}}</strong>
                                                </span>
                                                <input type="number" id="downpayment" placeholder="1,228.00" class="provider-input" name="downpayment" value="50" autocomplete="false" style="border: 0.5px solid rgb(225, 225, 225);margin: 0 10px;">
                                                L.E                  
                                               
                                            </span>
                                        </div>
                                    </div>
                                     <div class="col-md-8 my-4 mx-auto install-card">
                                        <div class="row justify-content-center align-items-center">
                                         <div class="col-md-4">
                                          <input type="radio" id="miniCash__installements__3" name="installments_number" value="3" class="">   
                                        </div>   
                                         <div class="col-md-8 text-left p-0">
                                            <label for="miniCash__installements__3" id="miniCash_installement_label_3" class="m-0 instalment-option amount_details">
                                                <span class="due-price" id="due-price_24">216</span>
                                                <span class="due-sum">L.E</span> <span class="px-3">\</span>
                                                <span class="due-price">3</span>
                                                <span class="due-sum">{{__('pay-months')}}</span>
                                             </label>   
                                        </div>    
                                         <div class="col-md-4">
                                         <input type="radio" id="miniCash__installements__6" name="installments_number" value="6" class="">
               
                                        </div>
                                         <div class="col-md-8 text-left p-0">
                                         <label for="miniCash__installements__6" id="miniCash_installement_label_6" class="m-0 instalment-option amount_details">
                                                <span class="due-price" id="due-price_6">637</span>
                                                <span class="due-sum">L.E</span> <span class="px-3">\</span>
                                                <span class="due-price">6</span>
                                                <span class="due-sum">{{__('pay-months')}}</span>
                                            </label>    
                                        </div> 
                                         <div class="col-md-4">
                                            <input type="radio" id="miniCash__installements__12" name="installments_number" value="12" class="zeroInterest">
                                        </div>
                                         <div class="col-md-8 text-left p-0">
                                         <label for="miniCash__installements__12" id="miniCash_installement_label_12" class="m-0 instalment-option amount_details">
                                                <span class="due-price" id="due-price_12">285</span>
                                                <span class="due-sum">L.E</span> <span class="px-3">\</span>
                                                <span class="due-price">12</span>
                                                <span class="due-sum">{{__('pay-months')}}</span>
                                             </label>      
                                        </div> 
                                         <div class="col-md-4">
                                        <input type="radio" id="miniCash__installements__18" name="installments_number" value="18" class="">
                                        </div>
                                         <div class="col-md-8 text-left p-0">
                                          <label for="miniCash__installements__18" id="miniCash_installement_label_18" class="m-0 instalment-option amount_details">
                                                <span class="due-price" id="due-price_18">258</span>
                                                <span class="due-sum">L.E</span> <span class="px-3">\</span>
                                                <span class="due-price">18</span>
                                                <span class="due-sum">{{__('pay-months')}}</span>
                                            </label>    
                                        </div> 
                                        </div>     
                                      </div>
                                    <button id="addtoCartBtn" type="button text-white" title="عرض المنتج" class="col-md-8 w-100 see-more-btn border-0">
                                        <span class="buy-btn-cont">{{__('fam-Buy Now')}}</span>
                                    </button>
                                  </div>
                                </div>
                              </div>
                            </div>
          
                        </div>
                    </div>
                    </div>
                     <div class="col-md-3 text-left">
                                  <p  class="text-dark">{{__('land-install')}} <span class="font-weight-bold text-color-red">18</span> 
                                     {{__('land-months')}}</p>
                      </div>
                     </div>    
                    </div>
                    </div>   
                  </div>      
                </div>
                </div>
               
            </div>
        </section>


@endsection


@push('scripts')
<script>
    
    $(".job-btn").click(function(){
    $("#resources_popups").modal('show');
})
        $(".job-btn").click(function(){
            var button = $(this).val();
            $(".job_name").val(button);
            $("#job_id").val($(this).data('id'))
        });
        
          $('.download_resource_assign').on('click', function(){
      
      resource_id = $(this).attr('data-id');
      
      $('.file_resource').val(resource_id);
      
  });
      
</script>
<script>
 $(function() {
  $('#pkgselector').change(function(){
    $('.colors').hide();
    $('#' + $(this).val()).show();
  });
});
</script>
<script>
 $(function() {
  $('#pkgselector2').change(function(){
    $('.colors2').hide();
    $('#' + $(this).val()).show();
  });
});
</script>


   
@endpush