@extends('sticky.layout.master')

@push('head')
    <style>
.card-title {
    font-size: 15px;
}
/* width */
.installmetMethodsVisaContent ::-webkit-scrollbar {
  width: 10px;
}

/* Track */
.installmetMethodsVisaContent ::-webkit-scrollbar-track {
  background: #f1f1f1;
}

/* Handle */
.installmetMethodsVisaContent ::-webkit-scrollbar-thumb {
  background: linear-gradient(-145deg, #320b82 0%, #9c33c3 100%);
  border-radius:4px;
}
.text-end
{
    text-align:end;
}
.p-5-80{
        padding: 5px 80px;
}
.collapse-btn-gray{
    background:#f1f1f1;
    color: #000;
    font-weight:500;
    cursor: pointer;
    padding:7px 10px;
    width: 100%;
    border: none;
    text-align: start;
    outline: none;
    font-size: 18px;   
    width:100%;
    margin-bottom:10px;
}
.bg-mauv{
    background:linear-gradient(-145deg, #320b82 0%, #9c33c3 100%);
    border-radius:4px;
}
 .bank-img
    {
        margin:0!important;
        width:auto!important;
        padding:10px 0;
    }
.fs-15{
    font-size:14px;
}
.fs-16{
    font-size:16px;
    font-weight:400;
    color:#333;
} 
.mb-20{
    margin-bottom:20px;
}
.payment-steps-colbg{
   font-weight: bold;
    text-align: center;
    background: linear-gradient(-145deg, #320b82 0%, #9c33c3 100%);;
    color: #fff;
    font-size: 24px;
    height: 53px;
    justify-content: center;
    align-items: center;
    display: flex;
}
.active-btn{
    background: linear-gradient(-145deg, #320b82 0%, #9c33c3 100%);;
    border: none !important;
    color:#fff;
    padding: 5px 5px 4px;
    margin-left: -4px;
    margin-top: -5px;
    border-top-right-radius: 4px;
    border-bottom-right-radius: 4px;
}
.subscribe-btn{
   font-size: 22px;
   background: linear-gradient(-145deg, #320b82 0%, #9c33c3 100%);;
   border: none !important;
   color: #fff;
   height: 38px;
}

@media (max-width: 567px){
.collapse .card-body {
    text-align: start;
}
.mg-5{
    margin-top:30px;
}
}
.no-wrap{
    flex-wrap: nowrap;
    justify-content: center;
    align-items: center;
    margin:auto;
}
.default-btn{
    background:linear-gradient(-145deg, #320b82 0%, #9c33c3 100%);
    border:none;
}
.package{
    height:636px;
}
    .site-header{
        background:linear-gradient(-145deg, #320b82 0%, #9c33c3 100%);
    }
 
        @media (min-width: 768px){
            .offset-md-1 {
                margin-right: 8.333333%;
            }
        }
        .accordion .btn-block{
            background: linear-gradient(-145deg, #320b82 0%, #9c33c3 100%);
            padding: .5rem;
            border-radius: 0;
            color: #fff!important;
            font-weight: 700!important;
            font-size: 1rem;
            /*text-align: center;*/
            border: none;
        }
        .accordion.company-installment .btn-block{
            background-color: #000;
            font-size: 20px;
            color: #fff;
            border-radius: 0.25rem;
        }
        .signup-step-container i {
        	margin-right: 10px;
        }
        /*---------signup-step-------------*/
        .signup-step-container .bg-color{
        	background-color: #333;
        }
        .signup-step-container .signup-step-container{
        	padding: 150px 0px;
        	padding-bottom: 60px;
        }
        .signup-step-container .wizard .nav-tabs {
            position: relative;
            margin-bottom: 0;
            border-bottom-color: transparent;
        }
        .signup-step-container .wizard > div.wizard-inner {
            position: relative;
            margin-bottom: 4rem;
            text-align: center;
        }
        .signup-step-container .connecting-line {
            height: 2px;
            background: #e0e0e0;
            position: absolute;
            width: 66%;
            margin: 0 auto;
            left: 0;
            right: 0;
            top: 15px;
            z-index: 1;
        }
        
        .signup-step-container .wizard .nav-tabs > li.active > a, .signup-step-container .wizard .nav-tabs > li.active > a:hover, .signup-step-container .wizard .nav-tabs > li.active > a:focus {
            color: #555555;
            cursor: default;
            border: 0;
            border-bottom-color: transparent;
        }
        
        .signup-step-container span.round-tab {
            width: 30px;
            height: 30px;
            line-height: 30px;
            display: inline-block;
            border-radius: 50%;
            background: #fff;
            z-index: 2;
            position: absolute;
            left: 0;
            text-align: center;
            font-size: 16px;
            color: #0e214b;
            font-weight: 500;
            border: 1px solid #ddd;
        }
        .signup-step-container span.round-tab i{
            color:#555555;
        }
        .signup-step-container .wizard li.active span.round-tab {
            background: linear-gradient(-145deg, #320b82 0%, #9c33c3 100%);;
            color: #fff;
            border-color: #9c33c3;
        }
        .signup-step-container .wizard li.active span.round-tab i{
            color: #5bc0de;
        }
        .signup-step-container .wizard .nav-tabs > li.active > a i{
        	color: #4262ff;
        }
        
        .signup-step-container .wizard .nav-tabs > li {
            width: 25%;
        }
        
        .signup-step-container .wizard li:after {
            content: " ";
            position: absolute;
            left: 46%;
            opacity: 0;
            margin: 0 auto;
            bottom: 0px;
            border: 5px solid transparent;
            border-bottom-color: red;
            transition: 0.1s ease-in-out;
        }
        
        
        
        .signup-step-container .wizard .nav-tabs > li a {
            width: 30px;
            height: 30px;
            border-radius: 100%;
            padding: 0;
            background-color: transparent;
            position: relative;
            top: 0;
        }
        .signup-step-container .wizard .nav-tabs > li a i{
        	position: absolute;
            top: -15px;
            font-style: normal;
            font-weight: 400;
            white-space: nowrap;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 12px;
            font-weight: 700;
            color: #000;
        }
        
        .signup-step-container .wizard .nav-tabs > li a:hover {
            background: transparent;
        }
        
        .signup-step-container .wizard .tab-pane {
            position: relative;
            padding-top: 20px;
        }
        
        
        .signup-step-container .wizard h3 {
            margin-top: 0;
        }
        .signup-step-container .prev-step,
        .signup-step-container .next-step,
        .signup-step-container .skip-btn{
            margin-top: 24px;
            font-size: .875rem;
            position: relative;
            transition: all .15s ease;
            letter-spacing: .025em;
            text-transform: none;
            will-change: transform;
            font-weight: 600;
            line-height: 1.5;
            display: inline-block;
            padding: .625rem 1.25rem;
            text-align: center;
            vertical-align: middle;
            border: 1px solid transparent;
            border-radius: .25rem;
            color: #fff;
            margin-left: 8px;
        }
        .signup-step-container .step-head{
            font-size: 20px;
            text-align: center;
            font-weight: 500;
            margin-bottom: 20px;
        }
        .signup-step-container .term-check{
        	font-size: 14px;
        	font-weight: 400;
        }
        
        .signup-step-container .footer-link{
        	margin-top: 30px;
        }
        .signup-step-container .all-info-container{
        
        }
        .signup-step-container .list-content{
        	margin-bottom: 10px;
        }
        .signup-step-container .list-content a{
        	padding: 10px 15px;
            width: 100%;
            display: inline-block;
            background-color: #f5f5f5;
            position: relative;
            color: #565656;
            font-weight: 400;
            border-radius: 4px;
        }
        .signup-step-container .list-content a[aria-expanded="true"] i{
        	transform: rotate(180deg);
        }
        .signup-step-container .list-content a i{
        	text-align: right;
            position: absolute;
            top: 15px;
            right: 10px;
            transition: 0.5s;
        }
        .signup-step-container .form-control[disabled], .signup-step-container .form-control[readonly], .signup-step-container fieldset[disabled] .form-control {
            background-color: #fdfdfd;
        }
        .signup-step-container .list-box{
        	padding: 10px;
        }
        .signup-step-container .signup-logo-header .logo_area{
        	width: 200px;
        }
        .signup-step-container .signup-logo-header .nav > li{
        	padding: 0;
        }
        .signup-step-container .signup-logo-header .header-flex{
        	display: flex;
        	justify-content: center;
        	align-items: center;
        }
        .signup-step-container .list-inline li{
            display: inline-block;
        }
        .signup-step-container .pull-right{
            float: right;
        }
        .signup-step-container .step-number{
            padding-bottom: 32px;
        }
        @media (max-width: 767px){
            .package{
           height: auto;
            }
        	.signup-step-container .sign-content h3{
        		font-size: 40px;
        	}
        	.signup-step-container .wizard .nav-tabs > li a i{
        		display: none;
        	}
        	.signup-step-container .signup-logo-header .navbar-toggle{
        		margin: 0;
        		margin-top: 8px;
        	}
        	.signup-step-container .signup-logo-header .logo_area{
        		margin-top: 0;
        	}
        	.signup-step-container .signup-logo-header .header-flex{
        		display: block;
        	}
        }
        .text-start{
            text-align: start;
        }
        .custom-file-input:lang(en)~.custom-file-label::after {
            content: "Select";
        }
        .price{
            font-weight: bold;
            font-size: 1.2rem;
            color: #9c33c3;
             }


        /*start add classs*/
.instal-width1{
    width: 20%;
}
.instal-over1{
    overflow-y:auto;
}
.install-margin
{
margin-right: 5px;
}

.install-hidden1{
visibility:hidden
}



.install-transp{

    background-color: transparent; 
    }
    
.install-fonts
{
    font-size: 14px;
    font-weight: normal;

}
.install-margin 
{
margin-right: 5px;
}

.install-height1
{
    height:100%;
} 
.install-p1
{
    margin: 0;
    padding: 0;
    font-size: 12px;
    line-height: 2.4;
    text-align:start;

}







/*end*/

    </style>
@endpush

@section('page-wrapper')

@endsection

@section('body')
    <section class="pt-5 advertise-content signup-step-container  {{  getCurrentLangIdiom() == 'ar' ? 'mr-auto text-right'  : '' }}">
        <div class="container">
            <div class="row mb-md-3 mb-4 mx-0">
                    <div class="col-12 text-center pt-4 mg-5">
                        <h4 class="">  {{__('install-idh41')}} </h4> 
                    </div>
                </div>
            <div class="row mx-0">
                    <div class="col-md-12 p-0">
                        <div class="row">
                            <div class="wizard w-100">
                                <div class="row justify-content-center">
                                    <div class="col-md-6 text-center mb-5">
                                         <div class="wizard-inner">
                                            <div class="connecting-line"></div>
                                            <ul class="nav nav-tabs" role="tablist">
                                               
                                                <li role="presentation" class="active">
                                                    <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" aria-expanded="false">
                                                        <span class="round-tab">1</span>
                                                    </a>
                                                </li>
                                                <li role="presentation" class="disabled">
                                                    <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" aria-expanded="false">
                                                        <span class="round-tab">2</span>
                                                    </a>
                                                </li>
                                                <li role="presentation" class="disabled">
                                                    <a href="#step4" data-toggle="tab" aria-controls="step4" role="tab" aria-expanded="false">
                                                        <span class="round-tab">3</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <form role="form" action="index.html" class="login-box">
                                    <div class="tab-content px-md-0 px-2" id="main_form">
                                        <div class="tab-pane active" role="tabpanel" id="step2">
                                            <div class="row justify-content-center mx-auto d-lg-flex d-none">
                                                <div class="col-md-10">
                                                    <table class="table table-responsive">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col" class="instal-width1">
                                                                   {{__('install-idth1')}} 
                                                                </th>
                                                                <th scope="col">
                                                                   {{__('install-idth2')}} 
                                                                </th>
                                                                <th scope="col">
                                                                {{__('install-idth3')}} 
                                                                </th>
                                                                <th scope="col">
                                                                   {{__('install-idth4')}} 
                                                                </th>
                                                                <th scope="col">
                                                                {{__('install-idth5')}} 
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <h5>
                                                                     {{__('install-idh51')}}
                                                                    </h5>
                                                                </td>
                                                            
                                                                <td>
                                                                    <span class="price">
                                                                        6
                                                                    </span>
                                                                </td>
                                                                <td>
                                                                    <span class="price">
                                                                        500
                                                                    </span>
                                                                 {{__('install-idspan1')}}
                                                                </td>
                                                                <td>
                                                                    <span class="price">
                                                                        100
                                                                    </span>
                                                                    {{__('install-idspan1')}}
                                                                </td>
                                                                <td>
                                                                    <span class="price">
                                                                        600
                                                                    </span>
                                                                    {{__('install-idspan1')}}
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="row justify-content-center mx-auto d-block d-lg-none">
                                            <div class="row no-wrap">
                                             
                                                         <div class="col-md-8 p-0">
                                                          <h5>{{__('install-idh52')}}</h5>  
                                                        </div>
                                                         <div class="col-md-4 text-right">
                                                           <h5>
                                                                <img src="https://www.20hashtags.com/uploads/advertise-with-us/images/special.png" class="img-fluid w-25">
                                                                 {{__('install-idh53')}}
                                                            </h5>   
                                                        </div>
                                              </div>            
                                            <div class="row no-wrap mt-2">            
                                                         <div class="col-md-8 p-0">
                                                          <h5>  {{__('install-idh54')}}</h5>  
                                                        </div>
                                                         <div class="col-md-4 text-right">
                                                          <span class="price">
                                                                        6
                                                           </span> 
                                                        </div>
                                              </div>            
                                            <div class="row no-wrap mt-2">            
                                                          <div class="col-md-8 p-0">
                                                          <h5>  {{__('install-idh55')}}</h5>  
                                                        </div> 
                                                          <div class="col-md-4 text-right">
                                                          <span class="price">
                                                                        500
                                                                    </span>
                                                                    {{__('install-idspan1')}}
                                                        </div>
                                              </div>             
                                            <div class="row no-wrap mt-2">
                                                         <div class="col-md-8 p-0">
                                                          <h5>{{__('install-idh56')}}</</h5>  
                                                        </div>
                                                          <div class="col-md-4 text-right">
                                                          <span class="price">
                                                                        100
                                                                    </span>
                                                                    {{__('install-idspan1')}}
                                                        </div>
                                            </div>            
                                            <div class="row no-wrap mt-2">            
                                                          <div class="col-md-8 p-0">
                                                          <h5> {{__('install-idh57')}} </h5>  
                                                        </div>
                                                          <div class="col-md-4 text-right">
                                                          <span class="price">
                                                                        600
                                                                    </span>
                                                                    {{__('install-idspan1')}}
                                                        </div>
                                             </div>
                                       </div>
                                            <ul class="list-inline pull-right offset-md-1 pr-md-2 pr-0">
                                             <li><button type="button" class="default-btn next-step">{{__('install-idli1')}}</button></li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane" role="tabpanel" id="step3">
                                            <div class="row justify-content-center">
                                                <div class="col-md-10">
                                                    <div class="row justify-content-center">
                                                        <div class="col-md-4 px-md-2">
                                                             <div class="card package mb-4  instal-over1">
                                                                <div class="card-body">
                                                                   <div class='w-100 payment-steps-colbg'>
                                                                    <h5 class="card-title mb-0"> 
                                                                    <img src="../stickypost_register/mob.png"  width="50"  class="install-margin" >
                                                                   {{__('install-idh58')}} 
                                                                     </h5>
                                                                   </div>     
                                                                    <p>
                                                                  
                                                                     {{__('install-idp1')}} 
                                                                    </p>                         
                                                                    <div class="accordion" id="accordionExample">
                                                                        <div class="card border-0 mb-3 install-transp">
                                                                            <div class="card-header p-0 mx-0" id="headingMobileFeatures">
                                                                                <h2 class="mb-0">
                                                                                    <button class="btn btn-link btn-block" type="button" data-toggle="collapse" data-target="#collapseMobileFeatures" aria-expanded="true" aria-controls="collapseMobileFeatures">
                                                                                        <div class="row mx-0 align-items-center">
                                                                                            <div class="col-10 text-start p-0">
                                                                                               <span class="fs-15">      {{__('install-idspan2')}} </span>
                                                                                                <br>
                                                                                                <span class="install-fonts">
                                                                                                 {{__('install-idspan3')}}
                                                                                                </span>
                                                                                            </div>
                                                                                            <div class="col-2 text-start">
                                                                                                <i class="fas fa-arrow-down mx-0"></i>
                                                                                            </div>
                                                                                        </div>
                                                                                    </button>
                                                                                </h2>
                                                                            </div>
                                                                            <div id="collapseMobileFeatures" class="collapse show" aria-labelledby="headingMobileFeatures" data-parent="#accordionExample">
                                                                                <div class="card-body mt-0 pb-0">
                                                                                    <div class="row">
                                                                                        <div class="col-12">
                                                                                          <ul class="mb-0 px-2">
                                                                                            <li>   {{__('install-idli2')}}</li>
                                                                                            <li>    {!!__('install-idli3')!!} </li>
                                                                                            <li>    {{__('install-idli4')}} </li>
                                                                                            <li class="install-hidden1">x<br><br></li>
                                                                                         </ul>
                                                                                        </div>   
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="card border-0 mb-3 install-transp" >
                                                                            <div class="card-header p-0 mx-0" id="headingMobile">
                                                                                <h2 class="mb-0">
                                                                                    <button class="btn btn-link btn-block" type="button" data-toggle="collapse" data-target="#collapseMobile" aria-expanded="true" aria-controls="collapseMobile">
                                                                                        <div class="row mx-0 align-items-center">
                                                                                            <div class="col-10 text-start p-0">
                                                                                                <span class="install-fonts">
                                                                                                {{__('install-idspan9')}} 
                                                                                                </span>
                                                                                            </div>
                                                                                            <div class="col-2 text-start">
                                                                                                <i class="fas fa-arrow-down mx-0"></i>
                                                                                            </div>
                                                                                        </div>
                                                                                    </button>
                                                                                </h2>
                                                                            </div>
                                                                            <div id="collapseMobile" class="collapse" aria-labelledby="headingMobile" data-parent="#accordionExample">
                                                                                <div class="card-body mt-0 pb-0">
                                                                                    <div class="row">
                                                                                        <div class="col-12">
                                                                                            <ul class="mb-0 px-2">
                                                                                                <li>
                                                                                                {{__('install-idli5')}}
                                                                                                </li>
                                                                                                <li>
                                                                                                 {{__('install-idli6')}}
                                                                                                </li>
                                                                                                <li>
                                                                                                    {{__('install-idli7')}}
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                    
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="card-footer text-muted px-0 border-0 install-transp">
                                                                    <div class="text-white font-weight-bold d-block mx-3 default-btn p-2 text-center">
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio" id="installmetMethodsMobContent" name="installmetMethods" class="custom-control-input" value="installmetMethodsMob">
                                                                            <label class="custom-control-label" for="installmetMethodsMobContent">
                                                                               {{__('install-idlabel1')}}
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 px-md-2">
                                                          <div class="card package mb-4 instal-over1">
                                                                <div class="card-body">
                                                                   <div class='w-100 payment-steps-colbg'>
                                                                    <h5 class="card-title mb-0"> 
                                                                     <img src="../stickypost_register/visa_mastercard.png"  width="80" class="install-margin" >
                                                                             {{__('install-idh59')}}
                                                                     </h5>
                                                                   </div>     
                                                                    <p>
                                                                   
                                                                     {{__('install-idp2')}}
                                                                    </p>                         
                                                                    <div class="accordion" id="accordionExample">
                                                                        <div class="card border-0 mb-3 install-transp">
                                                                            <div class="card-header p-0 mx-0" id="headingVisaFeatures">
                                                                                <h2 class="mb-0">
                                                                                    <button class="btn btn-link btn-block" type="button" data-toggle="collapse" data-target="#collapseVisaFeatures" aria-expanded="true" aria-controls="collapseVisaFeatures">
                                                                                        <div class="row mx-0 align-items-center">
                                                                                            <div class="col-10 text-start p-0">
                                                                                                <span class="fs-15"> {{__('install-idspan5')}} </span>
                                                                                                <br>
                                                                                                <span class="install-fonts">
                                                                                                 {{__('install-idspan6')}} 
                                                                                                </span> 
                                                                                            </div>
                                                                                            <div class="col-2 text-start">
                                                                                                <i class="fas fa-arrow-down mx-0"></i>
                                                                                            </div>
                                                                                        </div>
                                                                                    </button>
                                                                                </h2>
                                                                            </div>
                                                                            <div id="collapseVisaFeatures" class="collapse show" aria-labelledby="headingVisaFeatures" data-parent="#accordionExample">
                                                                                <div class="card-body mt-0 pb-0">
                                                                                    <div class="row">
                                                                                        <div class="col-12">
                                                                                          <ul class="mb-0  px-2">
                                                                                            <li>  {{__('install-idli2')}}</li>
                                                                                            <li>  {!!__('install-idli3')!!}</li>
                                                                                            <li>{{__('install-idli4')}}</li>
                                                                                            <li class="install-hidden1">x <br><br></li>
                                                                                         </ul>
                                                                                        </div>   
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="card border-0 mb-3 install-transp">
                                                                            <div class="card-header p-0 mx-0" id="headingVisa">
                                                                                <h2 class="mb-0">
                                                                                    <button class="btn btn-link btn-block" type="button" data-toggle="collapse" data-target="#collapseVisa" aria-expanded="true" aria-controls="collapseVisa">
                                                                                        <div class="row mx-0 align-items-center">
                                                                                            <div class="col-10 text-start p-0">
                                                                                                <span class="install-fonts">
                                                                                                 {{__('install-idspan9')}} 
                                                                                                </span>
                                                                                            </div>
                                                                                            <div class="col-2 text-start">
                                                                                                <i class="fas fa-arrow-down mx-0"></i>
                                                                                            </div>
                                                                                        </div>
                                                                                    </button>
                                                                                </h2>
                                                                            </div>
                                                                            <div id="collapseVisa" class="collapse" aria-labelledby="headingVisa" data-parent="#accordionExample">
                                                                                <div class="card-body mt-0 pb-0">
                                                                                    <div class="row">
                                                                                        <div class="col-12">
                                                                                            <ul class="mb-0 px-2">
                                                                                                <li>
                                                                                             {{__('install-idli8')}}
                                                                                                </li>
                                                                                                <li>
                                                                                                  {{__('install-idli9')}}
                                                                                                </li>
                                                                                              
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                    
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="card-footer text-muted px-0 border-0 install-transp">
                                                                    <div class="text-white font-weight-bold d-block mx-3 default-btn p-2 text-center">
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio" id="installmetMethodsVisaContent" name="installmetMethods" class="custom-control-input" value="installmetMethodsVisa">
                                                                            <label class="custom-control-label" for="installmetMethodsVisaContent">
                                                                            {{__('install-idlabel1')}}
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 px-md-2">
                                                            <div class="card package mb-4 instal-over1">
                                                                <div class="card-body">
                                                                  <div class='w-100 payment-steps-colbg'>
                                                                    <h5 class="card-title mb-0">
                                                                     <img src="../stickypost_register/visa_mastercard.png"  width="80" class="install-margin">
                                                                    {{__('install-idh510')}}
                                                                    </h5>
                                                                   </div>    
                                                                    <p>
                
                                                                        {{__('install-idP5')}}
                                                                    </p>
                                                                    <div class="accordion" id="accordionExample">
                                                                       <div class="card border-0 mb-3 install-transp">
                                                                            <div class="card-header p-0 mx-0" id="headingTwo">
                                                                                <h2 class="mb-0">
                                                                                    <button class="btn btn-link btn-block" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                                                                        <div class="row mx-0 align-items-center">
                                                                                            <div class="col-10 text-start p-0">
                                                                                               <span class="fs-15">     {{__('install-idspan7')}} </span>
                                                                                              <br>
                                                                                                <span class="install-fonts">
                                                                                                 {{__('install-idspan8')}} 
                                                                                                </span>
                                                                                            </div>
                                                                                            <div class="col-2 text-start">
                                                                                                <i class="fas fa-arrow-down mx-0"></i>
                                                                                            </div>
                                                                                        </div>
                                                                                    </button>
                                                                                </h2>
                                                                            </div>
                                                                            <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                                                                <div class="card-body mt-0 pb-0">
                                                                                    <div class="row">
                                                                                        <div class="col-12">
                                                                                            <ul class="mb-0 px-2">
                                                                                                <li>
                                                                                                   {{__('install-idli10')}} 
                                                                                                </li>
                                                                                                <li>
                                                                                                    {!!__('install-idli11')!!} 

                                                                                                </li>
                                                                                                <li>
                                                                                                {{__('install-idli4')}}
                                                                                                </li>
                                                                                                <li>
                                                                                                      {{__('install-idli12')}} 
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                    
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="card border-0 install-transp" >
                                                                            <div class="card-header p-0 mx-0" id="headingOne">
                                                                                <h2 class="mb-0">
                                                                                    <button class="btn btn-link btn-block" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                                                        <div class="row mx-0 align-items-center">
                                                                                            <div class="col-10 text-start p-0">
                                                                                              <span class="install-fonts">
                                                                                                     {{__('install-idspan9')}} 
                                                                                              </span>
                                                                                            </div>
                                                                                            <div class="col-2 text-start">
                                                                                                <i class="fas fa-arrow-down mx-0"></i>
                                                                                            </div>
                                                                                        </div>
                                                                                    </button>
                                                                                </h2>
                                                                            </div>
                                                                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                                                                <div class="card-body mt-0 pb-0">
                                                                                    <div class="row">
                                                                                        <div class="col-12">
                                                                                            <ul class="mb-0 px-2">
                                                                                                <li>
                                                                                                {{__('install-idli15')}} 
                                                                                                </li>
                                                                                                <li>
                                                                                                {{__('install-idli5')}} 
                                                                                                </li>
                                                                                                <li>
                                                                                                 {{__('install-idli6')}} 
                                                                                                </li>
                                                                                                <li>
                                                                                                  
                                                                                                 {{__('install-idli55')}} 
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                    
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="card-footer text-muted px-0 border-0 install-transp">
                                                                    <div class="text-white font-weight-bold d-block mx-3 default-btn p-2 text-center">
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio" id="installmetMethodsCompanyContent" name="installmetMethods" class="custom-control-input" value="installmetMethodsCompany">
                                                                            <label class="custom-control-label" for="installmetMethodsCompanyContent">
                                                                            {{__('install-idlabel1')}}
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="list-inline pull-right offset-md-1 pr-md-2 pr-0">
                                                <li><button type="button" class="default-btn prev-step">{{__('install-idli56')}}</button></li>
                                                <li><button type="button" class="default-btn next-step"> {{__('install-idli1')}}</button></li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane" role="tabpanel" id="step4">
                                            <div class="row justify-content-center installmetMethodsMobContent">
                                                <div class="col-md-3 mb-3 payment-steps-div px-md-0 px-2 mx-md-2 mx-3">
                                                 <div  class="box_shadow install-height1" >
                                                 <p class="payment-steps-colbg"> <img src="../stickypost_register/mob.png" width="44" class="install-margin" > Pay by mobile</p>
                                                 <ul class="payment-steps-ul">
                                                  <li> {{__('install-idli57')}}</li>
                                                  <li>{{__('install-idli58')}}</li>
                                                  <li>{{__('install-idli59')}}</li>
                                                  <li>  {{__('install-idli60')}}</li>
                                                  <li> {{__('install-idli61')}}</li>
                                                  <li> {{__('install-idli62')}}</li>
                                                 </ul>
                                               </div>  
                                                 </div>
                                                <div class="col-md-4 box_shadow  mb-3 formbg-white  px-md-4 px-3 mx-md-2 mx-4">
                                                 <form id="code-form-monthly"> 
                                                   <div class="row">
                                                    <div class="col-12">
                                                             <div class="form-group m-0">
                                                                                 <label class="w-100 text-start fs-16">{{__('install-idlabel20')}}</label>
                                                                                 <select class="custom-select" name="operator_monthly">
                                                                                    <option value="">  {{__('install-idlabel21')}}</option>
                                                                                	<option value="STC_BHR">STC - BHR</option>
                                                                                	<option value="Batelco_BHR">Batelco - BHR</option>
                                                                                	<option value="Orange_EGY">Orange - EGY</option>
                                                                                	<option value="Vodafone_EGY">Vodafone - EGY</option>
                                                                                	<option value="Etisalat_EGY">Etisalat - EGY</option>
                                                                                	<option value="WE_EGY">WE - EGY</option>
                                                                                	<option value="Umniah_JOR">Umniah - JOR</option>
                                                                                	<option value="Telkom_KEN">Telkom - KEN</option>
                                                                                	<option value="STC_KWT">STC - KWT</option>
                                                                                	<option value="Ooredoo_KWT">Ooredoo - KWT</option>
                                                                                	<option value="Libyana_LBY">Libyana - LBY</option>
                                                                                	<option value="Ooredoo_OMN">Ooredoo - OMN</option>
                                                                                	<option value="Jawwal_PSE">Jawwal - PSE</option>
                                                                                	<option value="Ooredoo_PSE">Ooredoo - PSE</option>
                                                                                	<option value="Ooredoo_QAT">Ooredoo - QAT</option>
                                                                                	<option value="Vodafone_QAT">Vodafone - QAT</option>
                                                                                	<option value="Zain_SAU">Zain - SAU</option>
                                                                                	<option value="Orange_TUN">Orange - TUN</option>
                                                                                	<option value="Du_ARE">Du - ARE</option>
                                                                                	<option value="Etisalat_ARE">Etisalat - ARE</option>
                                                                                	
                                                                                	<option value="Zain_KWT">Zain - KWT</option>
                                                                                	<option value="Orange_JOR">Orange - JOR</option>
                                                                                	<option value="Zain_JOR">Zain - JOR</option>
                                                                                	<option value="Zain_BHR">Zain - BHR</option>
                                                                                	<option value="Ooredoo_ALG">Ooredoo - ALG</option>
                                                                                	<option value="Dialog_SRI">Dialog - SRI Lanka</option>
                                                       
                                                                                    </select>
                                                                                 </div>
                                                      </div>
                                                    <div class="col-12">
                                                        <div class="form-group has-success m-0">
                                                          <label for="rpwd" class="w-100 text-start fs-16">  {{__('install-idlabel22')}} </label>
                                                            <input required id="cc-name" name="number_monthly" type="number" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card" autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                                                            </div>                   
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group has-success m-0">
                                                          <label class="w-100 text-start fs-16"> {{__('install-idlabel23')}}</label>
                                                            <input id="cc-name" name="user_email" type="email" class="form-control cc-name valid">
                                                            </div>                   
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group has-success fs-16 text-start mb-2">
                                                          {{__('install-idlabel24')}}
                                                          <input id="cc-name" name="coupons" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card" autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                                                            </div>                   
                                                    </div>
                                                    <div class="col-12">
                                                        <input class="form-control btn subscribe-btn" type="submit" id="payment-button-monthly" name="" value="{{__('foot_btn_sub')}}">
                                                        <input class="form-control btn subscribe-btn mt-2" type="submit" id="payment-button2-monthly" name="" value="{{__('resend_code')}}">
                                                            
                                                    </div>   
                                                    </div>
                                                  </form>
                                               </div>    
                                                <div class="col-md-3 mb-3  px-md-0 px-2 mx-md-2 mx-3">
                                                   <div class="box_shadow">
                                                   <div class="card">
                                                   <div class="card-header p-0">
                                                    <img src="../stickypost_register/images/Mobile payment banner.png" class="img-fluid">
                                                   </div>
                                                <div class="card-body p-1" id="message_pay">
                                                    <p class="install-p1">  {{__('install-idlp5')}}</p>
                                                </div>
                                            </div>
                                        </div>
                                     
                                              </div> 
                                            </div>
                                            <div class="row justify-content-center installmetMethodsVisaContent">
                                               <div class="col-md-3 mb-3 payment-steps-div px-md-0 px-2 mx-md-2 mx-3">
                                                 <div  class="box_shadow install-height1" >
                                                 <p class="payment-steps-colbg"> 
                                                 <img src="../stickypost_register/visa_mastercard.png"  width="70" class="install-margin" > {{__('install-idlp6')}}</p>
                                                 <ul class="payment-steps-ul">
                                                  <li>{{__('install-idli59')}}</li>
                                                  <li> {{__('install-idli70')}}</li>
                                                  <li> {{__('install-idli71')}}</li>
                                                  <li>{{__('install-idli72')}}</li>
                                                  <li>{{__('install-idli73')}} </li>
                                                 </ul>
                                               </div>  
                                              </div>       
                                                  <div class="col-md-8">
                                                     <div class="card mb-3 h-md-100 box_shadow instal-over1">
                                                      <div class="card-body mb-3" style="">
                                                             
                                                            <div class="payment_method">
                                                 <h5 class="card-title text-start font-weight-bold">  {{__('install-idh512')}}</h5>
                                                <div class="listed_payment_method">
                                                <ul class="list-unstyled p-0">
 
                                                <div class="payment_method_title_btn col-md-12 p-0 text-start">
                                                    <button type="button"  data-toggle="collapse" data-target="#bankname-1" class="collapse-btn-gray" aria-expanded="true"><span> {{__('install-idbtn5')}}</span></button>
                                                </div>
                                                <div class="collapse in" id="bankname-1" aria-expanded="true" style="">
                                                    <div class="row mx-0">
                                                      <div class="col-md-6">
                                                        <label class="mb-0">
                                                            <input type="radio" name="acquirer" value="25">
                                                            <span title="">
                                                                <img class="img img-responsive bank-img" src="https://www.dubaiphone.net/web/image/payment.acquirer/25/image_small?unique=6672921" ></span>
                                                            <span> {{__('install-idspan12')}}</span>
                                                        </label>
                                                         </div>
                                                         <div class="col-md-6">
                                                        
                                                            <label class="mb-0">
                                                                <input type="radio" name="acquirer" value="26">
                                                                <span title=""><img class="img img-responsive bank-img" src="https://www.dubaiphone.net/web/image/payment.acquirer/26/image_small?unique=97eac24" ></span>
                                                                <span>  {{__('install-idspan13')}} </span>
                                                                
                                                            </label>
                                                          </div>
                                                    </div>            
                                                </div>
                                                <div class="payment_method_title_btn col-md-12 p-0">
                                                    <button type="button"  data-toggle="collapse" data-target="#bankname-2" class="collapse-btn-gray" aria-expanded="true"><span>{{__('install-idbtn6')}} </span></button>
                                                </div>
                                                <div class="collapse in" id="bankname-2" aria-expanded="true" style="">
                                                    <div class="row mx-0">
                                                     <div class="col-md-4">
                                                        <label class="mb-0">
                                                            <input type="radio" name="acquirer" value="11">
                                                            <span title=" "><img class="img img-responsive bank-img" src="https://www.dubaiphone.net/web/image/payment.acquirer/11/image_small?unique=2ee0558" ></span>
                                                            <span> {{__('install-idspan12')}}</span>
                                                            
                                                        </label>
                                                    </div>
                                                     <div class="col-md-4">
                                                        <label class="mb-0">
                                                            <input type="radio" name="acquirer" value="16">
                                                            <span title=""><img class="img img-responsive bank-img" src="https://www.dubaiphone.net/web/image/payment.acquirer/16/image_small?unique=b3ae9dc" ></span>
                                                            <span>  {{__('install-idspan13')}}</span>
                                                            
                                                        </label>
                                                   </div>
                                                     <div class="col-md-4">
                                                
                                                    <label class="mb-0">
                                                        <input type="radio" name="acquirer" value="30">
                                                        <span title=""><img class="img img-responsive bank-img" src="https://www.dubaiphone.net/web/image/payment.acquirer/30/image_small?unique=c19829f" ></span>
                                                        <span>  {{__('install-idspan14')}}</span>
                                                        
                                                    </label>
                                                   </div>
                                                    </div>
                                                </div>     
                                                <div class="payment_method_title_btn col-md-12 p-0">
                                                    <button type="button"  data-toggle="collapse" data-target="#bankname-3" class="collapse-btn-gray" aria-expanded="true"><span> {{__('install-idbtn7')}}</span></button>
                                                </div>
                                                <div class="collapse in" id="bankname-3" aria-expanded="true" style="">
                                                    <div class="row mx-0">
                                                                
                                                    <div class="col-md-6">
                                                        <label class="mb-0">
                                                            <input type="radio" name="acquirer" value="33">
                                                            <span title=""><img class="img img-responsive bank-img" src="https://www.dubaiphone.net/web/image/payment.acquirer/33/image_small?unique=b57b545" ></span>
                                                            <span>{{__('install-idspan12')}}</span>
                                                            
                                                        </label>
                                                   </div>
                                                                
                                                    <div class="col-md-6">
                                                    
                                                        <label class="mb-0">
                                                            <input type="radio" name="acquirer" value="34">
                                                            <span title="">
                                                                <img class="img img-responsive bank-img" src="https://www.dubaiphone.net/web/image/payment.acquirer/34/image_small?unique=3251e4c" ></span>
                                                            <span> {{__('install-idspan13')}}</span>
                                                            
                                                        </label>
                                                   </div>
                                                </div>
                                                </div>
                                                <div class="payment_method_title_btn col-md-12 p-0">
                                                    <button type="button"  class="collapse-btn-gray" data-toggle="collapse" data-target="#bankname-4"><span>  {{__('install-idbtn8')}}</span></button>
                                                </div>
                                                <div class="collapse" id="bankname-4">
                                                 <div class="row mx-0">
                                                  <div class="col-md-6">
                                                
                                                    <label class="mb-0">
                                                        <input type="radio" name="acquirer" value="28">
                                                        <span title=""><img class="img img-responsive bank-img" src="https://www.dubaiphone.net/web/image/payment.acquirer/28/image_small?unique=002a079" ></span>
                                                        <span>{{__('install-idspan12')}}</span>
                                                        
                                                    </label>
                                                </div>
                                                                
                                               <div class="col-md-6">
                                                    <label class="mb-0">
                                                        <input type="radio" name="acquirer" value="27">
                                                        <span title=""><img class="img img-responsive bank-img" src="https://www.dubaiphone.net/web/image/payment.acquirer/27/image_small?unique=7fc1111" ></span>
                                                        <span>   {{__('install-idspan13')}}</span>
                                                        
                                                    </label>
                                                                       
                                                  </div>
                                                </div>
                                               </div>
                                                <div class="payment_method_title_btn col-md-12 p-0">
                                                    <button type="button" class="collapse-btn-gray"  data-toggle="collapse" data-target="#bankname-5"><span> {{__('install-idbtn9')}}</span></button>
                                                </div>
                                                <div class="collapse" id="bankname-5">
                                                  <div class="row mx-0">
                                                    <div class="col-md-6">
                                                                        
                                                    <label class="mb-0">
                                                        <input type="radio" name="acquirer" value="40">
                                                        <span title=""><img class="img img-responsive bank-img" src="https://www.dubaiphone.net/web/image/payment.acquirer/40/image_small?unique=c521d81" ></span>
                                                        <span>{{__('install-idspan12')}}</span>

                                                        
                                                    </label>
                                                    </div>
                                                    <div class="col-md-6">
                                                                        
                                                        <label class="mb-0">
                                                            <input type="radio" name="acquirer" value="41">
                                                            <span title=""><img class="img img-responsive bank-img" src="https://www.dubaiphone.net/web/image/payment.acquirer/41/image_small?unique=ab25966" ></span>
                                                            <span> {{__('install-idspan13')}}</span>

                                                        </label>
                                                       </div>
                                                    </div>
                                                </div>
                                                <div class="payment_method_title_btn col-md-12 p-0">
                                                    <button type="button" class="collapse-btn-gray"  data-toggle="collapse" data-target="#bankname-6"><span> {{__('install-idbtn10')}} </span></button>
                                                </div>
                                                <div class="collapse" id="bankname-6">
                                                  <div class="row mx-0">
                                                      <div class="col-md-6">
                                                                        
                                                            <label class="mb-0">
                                                                <input type="radio" name="acquirer" value="49">
                                                                <span title=""><img class="img img-responsive bank-img" src="https://www.dubaiphone.net/web/image/payment.acquirer/49/image_small?unique=8f4a764" ></span>
                                                                <span>{{__('install-idspan12')}}</span>
                                                                
                                                            </label>
                                                    </div>
                                                    <div class="col-md-6">
                                                    
                                                        <label class="mb-0">
                                                            <input type="radio" name="acquirer" value="42">
                                                            <span title=""><img class="img img-responsive bank-img" src="https://www.dubaiphone.net/web/image/payment.acquirer/42/image_small?unique=d35afc6" ></span>
                                                            <span> {{__('install-idspan13')}}</span>
                                                            
                                                        </label>
                                                    </div>
                                                   </div>
                                                </div>
                                                <div class="payment_method_title_btn col-md-12 p-0">
                                                    <button type="button" class="collapse-btn-gray"  data-toggle="collapse" data-target="#bankname-7"><span>{{__('install-idbtn11')}}</span></button>
                                                </div>
                                                <div class="collapse" id="bankname-7">
                                                <div class="row mx-0">
                                                  <div class="col-md-6">
                                                                        
                                                    <label class="mb-0">
                                                        <input type="radio" name="acquirer" value="45">
                                                        <span title=""><img class="img img-responsive bank-img" src="https://www.dubaiphone.net/web/image/payment.acquirer/45/image_small?unique=116d704" ></span>
                                                        <span> {{__('install-idspan13')}}</span>
                                                        
                                                    </label>
                                                </div>
                                                  <div class="col-md-6">
                                                
                                                    <label class="mb-0">
                                                        <input type="radio" name="acquirer" value="46">
                                                        <span title=""><img class="img img-responsive bank-img" src="https://www.dubaiphone.net/web/image/payment.acquirer/46/image_small?unique=8909a25" ></span>
                                                        <span>{{__('install-idspan14')}}</span>
                                                        
                                                    </label>
                                               </div>
                                               </div>
                                                </div>
                                                <div class="payment_method_title_btn col-md-12 p-0">
                                                <button type="button" class="collapse-btn-gray"  data-toggle="collapse" data-target="#bankname-other">{{__('install-idbtn12')}}
                                                </button>
                                            </div>
                                                <div class="collapse" id="bankname-other">
                                            <div class="row mx-0">
                                              <div class="col-md-6">
                                            
                                                <label class="mb-0 w-100">
                                                    <input type="radio" name="acquirer" value="5">
                                                    <span title="دفع عند الاستلام"><img class="img img-responsive bank-img" src="https://www.dubaiphone.net/web/image/payment.acquirer/5/image_small?unique=7bb1055" ></span>
                                                    <span>{{__('install-idbtn13')}}</span>
                                                    
                                                </label>
                                           </div>
                                              <div class="col-md-6">
                                            
                                                <label class="mb-0 w-100">
                                                    <input type="radio" name="acquirer" value="29">
                                                    <span title="دفع فوري"><img class="img img-responsive bank-img" src="https://www.dubaiphone.net/web/image/payment.acquirer/29/image_small?unique=4c25795" ></span>
                                                    <span>{{__('install-idbtn14')}}</span>
                                                    
                                                </label>
                                          </div>
                                              <div class="col-md-6">
                                                                    
                                            <label class="mb-0 w-100">
                                                <input type="radio" name="acquirer" value="24">
                                                <span title="دفع ماستر كارد"><img class="img img-responsive bank-img" src="https://www.dubaiphone.net/web/image/payment.acquirer/24/image_small?unique=33272c2" ></span>
                                                <span>{{__('install-idbtn15')}}</span>
                                                
                                            </label>
                                          </div>
                                              <div class="col-md-6">
                                                                    
                                            <label  class="mb-0 w-100">
                                                <input type="radio" name="acquirer" value="32">
                                                <span title="valU "><img class="img img-responsive bank-img" src="https://www.dubaiphone.net/web/image/payment.acquirer/32/image_small?unique=2009354" ></span>
                                                <span>valU </span>
                                                
                                            </label>
                                                                    
                                            </div>
                                            </div>
                                            
                                                  
                                            </div>
                        
                                                </ul>
                                              
                                                  <div class="text-white font-weight-bold d-block bg-mauv p-2 text-center">
                                                    <a href="" class="text-white ">
                                                    {{__('install-idlabel1')}}
                                                    </a>
                                                    </div>
                                              
                                                </div>
                                            </div>            
                                                             
                                                             </div>         
                                                            </div>
                                                        </div>    
                                            </div>
                                            <div class="row justify-content-center installmetMethodsCompanyContent">
                                                <div class="col-md-10">
                                                    <div class="accordion company-installment" id="accordionExample2">
                                                        <div class="card mb-3 border-0">
                                                            <div class="card-header p-0" id="headingSmart">
                                                                <h2 class="mb-0">
                                                                    <button class="btn btn-link btn-block text-start" type="button" data-toggle="collapse" data-target="#collapseSmart" aria-expanded="true" aria-controls="collapseSmart">
                                                                        <div class="row mx-0">
                                                                            <div class="col-9 text-start">
                                                                              {{__('install-idbtn16')}}
                                                                            </div>
                                                                            <div class="col-3 text-end">
                                                                                <i class="fas fa-arrow-down"></i>
                                                                            </div>
                                                                        </div>
                                                                    </button>
                                                                </h2>
                                                            </div>
                                                            
                                                            <div id="collapseSmart" class="collapse show" aria-labelledby="headingSmart" data-parent="#accordionExample2">
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                           <div class="form-group row">
                                                                                <label class="col-md-3">
                                                                                   {{__('install-idbtn17')}}
                                                                                </label>
                                                                                <div class="col-md-9 pr-40">
                                                                                   <div class="row">
                                                                                    <div class="col-md-6">
                                                                                      <div class="form-group">
                                                                                        <label for="fname">      {{__('install-idbtn18')}} </label>
                                                                                        <input type="text" class="form-control" id="fname" name="fname">
                                                                                      </div>  
                                                                                    </div> 
                                                                                    <div class="col-md-6">
                                                                                     <div class="form-group">
                                                                                        <label for="exampleInputPassword1"> {{__('install-idbtn19')}} </label>
                                                                                        <input type="text" class="form-control" id="lname" name="lname">
                                                                                      </div>    
                                                                                    </div> 
                                                                                    <div class="col-md-6">
                                                                                       <div class="form-group">
                                                                                        <label for="address"> {{__('install-idbtn20')}}  </label>
                                                                                        <input type="text" class="form-control" id="address" name="address">
                                                                                      </div>  
                                                                                    </div> 
                                                                                    <div class="col-md-6">
                                                                                      <div class="form-group">
                                                                                        <label for="mob"> {{__('install-idlabel22')}} </label>
                                                                                        <input type="phone" class="form-control" id="mob" name="mob">
                                                                                      </div>   
                                                                                    </div> 
                                                                                     <div class="col-md-6">
                                                                                     <div class="form-group">
                                                                                        <label for="fbAcc">  {{__('install-idbtn21')}}  </label>
                                                                                        <input type="text" class="form-control" id="fbAcc" name="fbAcc">
                                                                                      </div>    
                                                                                    </div> 
                                                                                    <div class="col-md-6">
                                                                                       <div class="form-group">
                                                                                        <label for="instAcc"> {{__('install-idbtn22')}}  </label>
                                                                                        <input type="text" class="form-control" id="instAcc" name="instAcc">
                                                                                      </div>  
                                                                                    </div> 
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row mb-0">
                                                                                <label class="col-md-3">
                                                                                    {{__('install-idbtn23')}}
                                                                                </label>
                                                                                <div class="col-md-9">
                                                                                    <div class="custom-file text-end">
                                                                                        <input type="file" class="custom-file-input" id="validatedCustomFile">
                                                                                        <label class="custom-file-label p-5-80" for="validatedCustomFile">    {{__('install-idbtn24')}}</label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="list-inline pull-right offset-md-1 pr-md-2 pr-0">
                                                <li><button type="button" class="default-btn prev-step">{{__('install-idli56')}}</button></li>
                                                <li><button type="button" class="default-btn next-step" data-toggle="modal" data-target="#submitModal">{{__('install-idbtn25')}}</button></li>
                                            </ul>
                                        </div>
                                   </div>
                                </form>   
                                 <div class="modal fade" id="submitModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p class="text-center">
                                      
                                       {{__('install-idbtn26')}}
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">     {{__('install-idbtn27')}}</button>
                                    <button type="button" class="btn btn-primary">   {{__('install-idbtn28')}}</button>
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

@endsection


@push('scripts')
    <script>
        
        var not_registered_user = <?php echo isset($_GET['_id']) ? 0 : 1; ?>;
        var step_number_ = 1;
    
        $( ".pageName" ).change(function() {
            if(this.value == "puzzle"){
                $(".articleWithPuzzle").css("display","block");
                $(".articleWithoutPuzzle").css("display","none");
            }
            // }
            else{
                $(".articleWithPuzzle").css("display","none");
                $(".articleWithoutPuzzle").css("display","block");
            }
        });
    </script>
    <script>
        $( ".articleWithoutPuzzle-select" ).change(function() {
            if(this.value == "popup-lg"){
                $(".popup-lg").css("display","block");
                $(".popup-sm").css("display","none");
                $(".article-lg").css("display","none");
                $(".article-sm").css("display","none");
                $(".beside").css("display","none");
                $(".square").css("display","none");
                $(".banner").css("display","none");
                $(".puzzle2").css("display","none");
            }
            else if(this.value == "popup-sm"){
                $(".popup-lg").css("display","none");
                $(".popup-sm").css("display","block");
                $(".article-lg").css("display","none");
                $(".article-sm").css("display","none");
                $(".beside").css("display","none");
                $(".square").css("display","none");
                $(".banner").css("display","none");
                $(".puzzle2").css("display","none");
            }
            else if(this.value == "article-lg"){
                $(".popup-lg").css("display","none");
                $(".popup-sm").css("display","none");
                $(".article-lg").css("display","block");
                $(".article-sm").css("display","none");
                $(".beside").css("display","none");
                $(".square").css("display","none");
                $(".banner").css("display","none");
                $(".puzzle2").css("display","none");
            }
            else if(this.value == "article-sm"){
                $(".popup-lg").css("display","none");
                $(".popup-sm").css("display","none");
                $(".article-lg").css("display","none");
                $(".article-sm").css("display","block");
                $(".beside").css("display","none");
                $(".square").css("display","none");
                $(".banner").css("display","none");
                $(".puzzle2").css("display","none");
            }
            else if(this.value == "beside"){
                $(".popup-lg").css("display","none");
                $(".popup-sm").css("display","none");
                $(".article-lg").css("display","none");
                $(".article-sm").css("display","none");
                $(".beside").css("display","block");
                $(".square").css("display","none");
                $(".banner").css("display","none");
                $(".puzzle2").css("display","none");
            }
            else if(this.value == "square"){
                $(".popup-lg").css("display","none");
                $(".popup-sm").css("display","none");
                $(".article-lg").css("display","none");
                $(".article-sm").css("display","none");
                $(".beside").css("display","none");
                $(".square").css("display","block");
                $(".banner").css("display","none");
                $(".puzzle2").css("display","none");
            }
            else if(this.value == "banner"){
                $(".popup-lg").css("display","none");
                $(".popup-sm").css("display","none");
                $(".article-lg").css("display","none");
                $(".article-sm").css("display","none");
                $(".beside").css("display","none");
                $(".square").css("display","none");
                $(".banner").css("display","block");
                $(".puzzle2").css("display","none");
            }
        });
    </script>
    <script>
        $( ".articleWithPuzzle-select" ).change(function() {
            if(this.value == "popup-lg"){
                $(".popup-lg").css("display","block");
                $(".popup-sm").css("display","none");
                $(".article-lg").css("display","none");
                $(".article-sm").css("display","none");
                $(".beside").css("display","none");
                $(".square").css("display","none");
                $(".banner").css("display","none");
                $(".puzzle2").css("display","none");
            }
            else if(this.value == "popup-sm"){
                $(".popup-lg").css("display","none");
                $(".popup-sm").css("display","block");
                $(".article-lg").css("display","none");
                $(".article-sm").css("display","none");
                $(".beside").css("display","none");
                $(".square").css("display","none");
                $(".banner").css("display","none");
                $(".puzzle2").css("display","none");
            }
            else if(this.value == "beside"){
                $(".popup-lg").css("display","none");
                $(".popup-sm").css("display","none");
                $(".article-lg").css("display","none");
                $(".article-sm").css("display","none");
                $(".beside").css("display","block");
                $(".square").css("display","none");
                $(".banner").css("display","none");
                $(".puzzle2").css("display","none");
            }
            else if(this.value == "square"){
                $(".popup-lg").css("display","none");
                $(".popup-sm").css("display","none");
                $(".article-lg").css("display","none");
                $(".article-sm").css("display","none");
                $(".beside").css("display","none");
                $(".square").css("display","block");
                $(".banner").css("display","none");
                $(".puzzle2").css("display","none");
            }
            else if(this.value == "banner"){
                $(".popup-lg").css("display","none");
                $(".popup-sm").css("display","none");
                $(".article-lg").css("display","none");
                $(".article-sm").css("display","none");
                $(".beside").css("display","none");
                $(".square").css("display","none");
                $(".banner").css("display","block");
                $(".puzzle2").css("display","none");
            }
            else if(this.value == "puzzle2"){
                $(".popup-lg").css("display","none");
                $(".popup-sm").css("display","none");
                $(".article-lg").css("display","none");
                $(".article-sm").css("display","none");
                $(".beside").css("display","none");
                $(".square").css("display","none");
                $(".banner").css("display","none");
                $(".puzzle2").css("display","block");
            }
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() 
            {
                $(".box1").slideUp();
                $( ".box2" ).slideUp();
                $( ".box3" ).slideUp();
                
                $("input[name=installCompanyIndividual]:radio").change(function(){
                    var radioValue = $("input[name='installCompanyIndividual']:checked").val();
                    if(radioValue == "public"){
                        $( ".box1" ).slideDown();
                        $( ".box2" ).slideUp();
                        $( ".box3" ).slideUp();
                    }
                    else if(radioValue == "freelance"){
                        $( ".box2" ).slideDown();
                        $( ".box1" ).slideUp();
                        $( ".box3" ).slideUp();
                    }
                    else{
                        $(".box3").slideDown();
                        $( ".box1" ).slideUp();
                        $( ".box2" ).slideUp();
                    }
                });
            }); 
    </script>
    <script type="text/javascript">
        $(document).ready(function() 
            {
                $(".installmetMethodsMobContent").css("display","none");
                $( ".installmetMethodsVisaContent" ).css("display","none");
                $( ".installmetMethodsCompanyContent" ).css("display","none");
                
                $("input[name=installmetMethods]:radio").change(function(){
                    var radioValue = $("input[name='installmetMethods']:checked").val();
                    if(radioValue == "installmetMethodsMob"){
                        $(".installmetMethodsMobContent").css("display","flex");
                        $(".installmetMethodsVisaContent").css("display","none");
                        $(".installmetMethodsCompanyContent").css("display","none");
                    }
                    else if(radioValue == "installmetMethodsVisa"){
                        $(".installmetMethodsMobContent").css("display","none");
                        $(".installmetMethodsVisaContent").css("display","flex");
                        $(".installmetMethodsCompanyContent").css("display","none");
                    }
                    else{
                        $(".installmetMethodsMobContent").css("display","none");
                        $(".installmetMethodsVisaContent").css("display","none");
                        $(".installmetMethodsCompanyContent").css("display","flex");
                    }
                });
            }); 
    </script>
    <script>

        // ------------step-wizard-------------
        $(document).ready(function () {
            $('.nav-tabs > li a[title]').tooltip();
            
            //Wizard
            $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
        
                var target = $(e.target);
            
                if (target.parent().hasClass('disabled')) {
                    return false;
                }
            });
        
            $(".next-step").click(function (e) {
        
                var active = $('.wizard .nav-tabs li.active');
                active.next().removeClass('disabled');
                nextTab(active);
        
            });
            $(".prev-step").click(function (e) {
        
                var active = $('.wizard .nav-tabs li.active');
                prevTab(active);
        
            });
        });
        
        function nextTab(elem) {
            $(elem).next().find('a[data-toggle="tab"]').click();
        }
        function prevTab(elem) {
            $(elem).prev().find('a[data-toggle="tab"]').click();
        }
        
        
        $('.nav-tabs').on('click', 'li', function() {
            $('.nav-tabs li.active').removeClass('active');
            $(this).addClass('active');
        });
    
    </script>
@endpush
