@extends('sticky.layout.master')
@push('head')
<style>
  .site-header{
    background:linear-gradient(-145deg, #320b82 0%, #9c33c3 100%);
    }
    .logoParent {
        padding: 0;
        margin: 0;
        height:400px;
        width: auto;
        background-color: #2ecc71;
        background-size: 400% 400%;
        animation: hue 11s linear 0s infinite reverse;
        align-items: center;
     }
   .logoParent::after{
        background-image:linear-gradient(45deg,#f6db00,#37bcc2,#ee712f,#000000,#ff7c2a,#1429a0,#319b2e,#044fff,#172b4d,#868585,#f6db00,#038501,#03420a,#6f7877,#e4b141,#0530ff,#01d8ff);
        animation: hue 12s linear 1s infinite;
    }
    @keyframes hue {
      to {
        filter: hue-rotate(1turn);
      }
    }
        
    .logo {
          height:100%;
          width: 100%;
          margin:0;
          background-image: radial-gradient(60% 68% at top left,#fff 30%,#fff 120%,transparent 130%);
    }
    .mov {
          height:100%;
          width: 100%;
          margin:0;
          background-image: radial-gradient(28% 3% at top right,#fff 5%,transparent 230%);
    }
    .mov2 {
          height:100%;
          width: 100%;
          margin:0;
          background-image: radial-gradient(25% 23% at bottom left,#fff 100%,transparent 230%);
    }
    #logo{
        display: none;
    }
    .splash{
        position: absolute;
        width: 500px;
        top: 5%;
        left: 32%;
    }
    #email{
       min-width: 280px;
       border-radius:0!important;
    }
  
    .addToCalendar{
    max-width: 250px;
}
    .addToCal {
    width: 200px!important;
    background-color: #380d85;
    font-size: 16px;
    border: none;
    cursor: pointer;
    color: #fff;
    border-top-right-radius: 3px;
    border-bottom-right-radius: 3px;
    height: 36px;
    text-align: center;
    }
    .addToCal span{
        position: relative;
    }
   .addToCal span:after{
        content: '';
        position: absolute;
        left: 106%;
        top: 6px;
        width: 0;
        height: 0;
        border-left: 8px solid transparent;
        border-right: 8px solid transparent;
        border-top: 8px solid #fff;
        clear: both;
    }
    .fa-calendar-alt:before {
        position: absolute;
        top: 0;
        left: -20px;
    }

    .addToCalOptions {
    /* Animation related styles */
    overflow-y: hidden;
    max-height: 0px;
    -webkit-transition: max-height .7s cubic-bezier(0, 1, 0.5, 1);
    -moz-transition: max-height .7s cubic-bezier(0, 1, 0.5, 1);
    -ms-transition: max-height .7s cubic-bezier(0, 1, 0.5, 1);
    transition: max-height .7s cubic-bezier(0, 1, 0.5, 1);
    
    
    background-color: #fff;
    width: 100%;
    border: none;
    box-sizing: border-box;
    }
     .addToCalOptions a {
        color: #000;
        padding: 2px 20px;
        text-decoration: none;
        display: block;
     }
    .addToCalOptions  a:hover{
            background-color: #dde6e3;
    }

.addToCal.open + .addToCalOptions{
    max-height: 210px;
    border: 1px solid #dde6e3;
}
  .guide-back{
        padding: 16px;
        -webkit-box-shadow: 0px 0px 19px -4px rgba(47,22,126,1);
        -moz-box-shadow: 0px 0px 19px -4px rgba(47,22,126,1);
        box-shadow: 0px 0px 19px -4px rgba(47,22,126,1);
        border-radius: 10px;
    }
    
.slick-slide {
    margin: 0px 20px;
}

.slick-slide img {
    width: 100%;
}

.slick-slider
{
    position: relative;
    display: block;
    box-sizing: border-box;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
            user-select: none;
    -webkit-touch-callout: none;
    -khtml-user-select: none;
    -ms-touch-action: pan-y;
        touch-action: pan-y;
    -webkit-tap-highlight-color: transparent;
}

.slick-list
{
    position: relative;
    display: block;
    overflow: hidden;
    margin: 0;
    padding: 0;
}
.slick-list:focus
{
    outline: none;
}
.slick-list.dragging
{
    cursor: pointer;
    cursor: hand;
}

.slick-slider .slick-track,
.slick-slider .slick-list
{
    -webkit-transform: translate3d(0, 0, 0);
       -moz-transform: translate3d(0, 0, 0);
        -ms-transform: translate3d(0, 0, 0);
         -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
}

.slick-track
{
    position: relative;
    top: 0;
    left: 0;
    display: block;
}
.slick-track:before,
.slick-track:after
{
    display: table;
    content: '';
}
.slick-track:after
{
    clear: both;
}
.slick-loading .slick-track
{
    visibility: hidden;
}

.slick-slide
{
    display: none;
    float: left;
    height: 100%;
    min-height: 1px;
}
[dir='rtl'] .slick-slide
{
    float: right;
}
.slick-slide img
{
    display: block;
}
.slick-slide.slick-loading img
{
    display: none;
}
.slick-slide.dragging img
{
    pointer-events: none;
}
.slick-initialized .slick-slide
{
    display: block;
}
.slick-loading .slick-slide
{
    visibility: hidden;
}
.slick-vertical .slick-slide
{
    display: block;
    height: auto;
    border: 1px solid transparent;
}
.slick-arrow.slick-hidden {
    display: none;
}
/*.single-pricing-one{*/
/*    height:70% !important;*/
/*}*/
.height126{
    height: 126vh;
}
.width60 {
    width:60%;
    margin:auto;
}
.colorfff{
    color:#fff;
    background:linear-gradient(-145deg, #320b82 0, #9c33c3 100%);
}
.tables { border-collapse:collapse; table-layout:fixed; width:100%; }
th { background:linear-gradient(-145deg, #320b82 0, #9c33c3 100%); display:none; }
td, th {
  height:53px
}
td,th { border:1px solid #DDD; padding:10px; empty-cells:show; }
td,th {
  text-align:left;
}
td+td, th+th {
  text-align:center;
  display:none;
}
td.default {
  display:table-cell;
}
.modal-title {
    margin-bottom: 0;
    line-height: 1.5;
    color: #320b82;
    font-weight: bold;
    font-size: 22px;
}
.bg-purple {
  border-top:3px solid #320b82;
}
.bg-blue {
  border-top:3px solid #320b82;
}
.sep {
  background:linear-gradient(-145deg, #320b82 0, #9c33c3 100%);
  font-weight:bold;
}
.txt-l { font-size:28px; font-weight:bold; }
.txt-top { position:relative; top:-9px; left:-2px; }
.tick { font-size:22px; color:#fff; }
.hide {
  border:0;
  background:none;
}

@media (min-width: 640px) {
  ul {
    display:none;
  }
  td,th {
    display:table-cell !important;
  }
  td,th {
    width: 330px;
  
  }
  td+td, th+th {
    width: auto;
  }
}
.fade {
    background: rgba(0,0,0,0.5);
}
.myModels {
    color:#007bff;
}
.myModels:hover{
    color:#007bff;
}
.outlineNone{
    outline:none !important;
    padding:32px 36px !important;
}
.borderNone {
    border:none;
}
.customer-logos .slide {
    display: flex;
    justify-content: center;
    align-items:center;
}
.linearBackground {
    linear-gradient(0deg, #320b82, transparent);
}
.widthMarginAuto {
    width: 200px;
    margin: auto;
}
.compare {
    border: none;
    padding: 0px 37px;
    border-radius: 6px;
    background: linear-gradient(-145deg, #320b82 0, #9c33c3 100%);
    color: #fff;
    font-weight: bold;
    outline:none !important;
}
.maxWidth{
    max-width: 1000px;
}
</style>
@endpush
@section('page-wrapper')

@endsection
@section('body')
 <section class="B2Bbanner">
     
    <div class="logoParent" id="logo" style="display: block">
    <div class="logo">
        <div class="mov">
            <div class="mov2"></div>
        </div>
    </div>
    </div> 
    <div class="splash">
         @switch( getCurrentLangIdiom())
            @case('ar')
                <img class="w-50" src="https://stickyposts.net/inc/themes/frontend/pure/assets/img/backtobusinessAR Purple.png">            @break
            @case('en')
                <img class="w-50" src="https://stickyposts.net/inc/themes/frontend/pure/assets/img/backtobusinessEN Purple.png">            @break
            @case('fr')
                <img class="w-50" src="https://stickyposts.net/inc/themes/frontend/pure/assets/img/backtobusinessEN Purple.png">            @break
            @default
            6$
        @endswitch
        <div class="subform mb-2">
            <form id="signup" class="formee signuptrial d-flex justify-content-center dir-rtl mt-5" method="post">
                <input class="right inputnew b-rad-5 " type="submit" title="Send" value="{{__('reg-btn-text63')}}">
                <input name="email" id="email" class="b-rad-55 " type="email" placeholder="{{__('EnterEmail')}}" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required="">
               <div class="addToCalendar">
                <button class="addToCal" data-ace='{"title":"Event 2","desc":"Event 2 description","location":"Location of Event 2","time":{"start":"March 27, 2016 12:00:00", "end":"March 27, 2016 14:00:00", "zone":"+05:30"}, "organizer":{"name":"Lord Abbett", "email": "email@gmail.com"}}'>
                    <span> <i class="fas fa-calendar-alt"></i> Add To Calendar</span>
                </button>
                <div class="addToCalOptions">
                    <a href="#" data-type="ics">Outlook Calendar</a>
                    <a href="#" data-type="google">Google Calendar</a>
                    <a href="#" data-type="yahoo">Yahoo Calendar</a>
                </div>
            </div>

            </form>
           

        </div>
    </div>
        
        
    
 </section>
 <section class="blocks">
   <section class="container">
    <div class="row justify-content-center">
     <div class="col-md-4">
         
     </div>
     <div class="col-md-4">
         
     </div>
     <div class="col-md-4">
         
     </div>
      <div class="col-md-4">
         
     </div>
     <div class="col-md-4">
         
     </div>
     <div class="col-md-4">
         
     </div>
      <div class="col-md-4">
         
     </div>
     <div class="col-md-4">
         
     </div>
     <div class="col-md-4">
         
     </div>
    </div> 
   </section>    
 </section>
 <section class="pdfSection">
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
                    <div class="col-md-12 pb-md-3 py-3">
                        <div class="guide-back mt-3">
                            <div class="row justify-content-center align-items-center">
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
                                <div class="col-md-3">
                                    @include('sticky.layout.partials.common.pdfDownload')
                                    </div>
                            </div>
                        </div>
                    </div>
            </div>
                </div>
 </section>
 <section class="packageSection">
      <div class="container text-center">
                <div class="block-title text-center text-light ">
                    <h4 style="color:#fff" class='fs-20'>{{ __('pay-ChoosePlan')}}</h4>
                </div><!-- /.block-title -->
                <!--<ul class="nav nav-tabs tab-title m-0 justify-content-center" role="tablist">-->
                    <!--<li class="nav-item">-->
                        <!--<a class="nav-link active" href="#annual" role="tab" data-toggle="tab">{{ __('pay-Yearly')}}</a>-->
                        <!--<a class="nav-link" href="#monthly" role="tab" data-toggle="tab">{{ __('pay-month')}}</a>-->
                    <!--</li>-->
                <!--</ul>-->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fadein show active height126" id="annual">
                        <div class="col-lg-11 mx-auto" style="">
                            <div class='row m-auto p-0 justify-content-center'>
                              <div class="col-lg-3 p-1 col-md-4 col-sm-6 col-12 mt-sm-2">
                                        
                                <div class="single-pricing-one">
                                    <div class="top-block" style="direction: ltr;">
                                        <h2>{{ __('pay-Professional')}} </h2>
                <p class="price m-0" style="direction: rtl;"><?php if ($location == 'Egypt' ){echo '4999 EGP';}
                elseif ($location == 'United Arab Emirates'){echo '1157 Dirham';}
                elseif ($location == 'Saudi Arabia'){echo '753 Riyal';}
                else {echo '315$';} ?></P>
 
                                        <div class="line"></div><!-- /.line -->
                                    </div><!-- /.top-block -->
                                    <ul class="feature-lists text-left">
                                            <li><span style="color:#f00">*</span>{{ __('fam-You can manage')}} <span style="font-weight:bold;font-size:16px">{{ __('pay-ThirtyFive')}} </span>{{ __('fam-pages only')}}</li>
                                            <li><span style="color:#f00">*</span>{{ __('pay-additionalPrivileges')}}</li>
                                            <li><span style="color:#f00">*</span>{{ __('pay-completelyFree')}} </li>
                                            <li><span style="color:#f00">*</span>{{ __('pay-DoneTasks')}} </li>
                                            <li><span style="color:#f00">*</span>{{ __('pay-LandingPages')}}</li>
                                  
                                    </ul><!-- /.feature-lists text-left -->
                                     <div class="bottom-block">
                                        <!--<a href="https://stickyposts.net/sticky/landing_page_new_en.php">{{ __('fam-learnMore')}}</a>-->
                                        <!-- Button trigger modal -->
                                            <a href="https://stickyposts.net/sticky/landing_page_new_en.php" type="button" class="myModels" data-toggle="modal" data-target="#exampleModalCenter1">
                                              {{ __('fam-learnMore')}}
                                            </a>
                                            
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                              <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                  <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                                    <button type="button" class="close outlineNone" data-dismiss="modal" aria-label="Close">
                                                      <span aria-hidden="true">&times;</span>
                                                    </button>
                                                  </div>
                                                  <div class="modal-body colorfff">
                                                    <div class="container">
                                                            <table class="tables">
                                                          <thead>
                                                            <tr>
                                                              <th class="hide"></th>
                                                              <!--<th class="bg-purple">Self-Employed</th>-->
                                                              <th colspan="2" class="bg-blue">Simple Start</th>
                                                              <!--<th class="bg-blue default">Essentials</th>-->
                                                              <!--<th class="bg-blue">Plus</th>-->
                                                            </tr>
                                                          </thead>
                                                          <tbody>
                                                            <tr>
                                                              <td>Monthly price</td>
                                                              <td colspan="2"><span class="txt-top">&pound;</span><span class="txt-l">6</span></td>
                                                              <!--<td><span class="txt-top">&pound;</span><span class="txt-l">7</span></td>-->
                                                              <!--<td class="default"><span class="txt-top">&pound;</span><span class="txt-l">15</span></td>-->
                                                              <!--<td><span class="txt-top">&pound;</span><span class="txt-l">25</span></td>-->
                                                            </tr>
                                                            <tr>
                                                              <td colspan="3" class="sep">Get started easily</td>
                                                            </tr>
                                                            <tr>
                                                              <td>Includes free updates and new features as they become available</td>
                                                              <td colspan="2"><span class="tick">&#10004;</span></td>
                                                              <!--<td><span class="tick">&#10004;</span></td>-->
                                                              <!--<td class="default"><span class="tick">&#10004;</span></td>-->
                                                              <!--<td><span class="tick">&#10004;</span></td>-->
                                                            </tr>
                                                            <tr>
                                                              <td>No software to install — sign up online in moments</td>
                                                              <td colspan="2"><span class="tick">&#10004;</span></td>
                                                              <!--<td><span class="tick">&#10004;</span></td>-->
                                                              <!--<td class="default"><span class="tick">&#10004;</span></td>-->
                                                              <!--<td><span class="tick">&#10004;</span></td>-->
                                                            </tr>
                                                            <tr>
                                                              <td>Import customer & supplier details from Excel, Outlook and .csv</td>
                                                              <td colspan="2"></td>
                                                              <!--<td><span class="tick">&#10004;</span></td>-->
                                                              <!--<td class="default"><span class="tick">&#10004;</span></td>-->
                                                              <!--<td><span class="tick">&#10004;</span></td>-->
                                                            </tr>
                                                            <tr>
                                                              <td>Accept card payments in QuickBooks Online</td>
                                                              <td colspan="2"></td>
                                                              <!--<td><span class="tick">&#10004;</span></td>-->
                                                              <!--<td class="default"><span class="tick">&#10004;</span></td>-->
                                                              <!--<td><span class="tick">&#10004;</span></td>-->
                                                            </tr>
                                                            <tr>
                                                              <td colspan="3" class="sep">Stay protected and get support</td>
                                                            </tr>
                                                            <tr>
                                                              <td>Free telephone and online support</td>
                                                              <td colspan="2"></td>
                                                              <!--<td><span class="tick">&#10004;</span></td>-->
                                                              <!--<td class="default"><span class="tick">&#10004;</span></td>-->
                                                              <!--<td><span class="tick">&#10004;</span></td>-->
                                                            </tr>
                                                            <tr>
                                                              <td>Strong encryption protects your business data</td>
                                                              <td colspan="2"><span class="tick">&#10004;</span></td>
                                                              <!--<td><span class="tick">&#10004;</span></td>-->
                                                              <!--<td class="default"><span class="tick">&#10004;</span></td>-->
                                                              <!--<td><span class="tick">&#10004;</span></td>-->
                                                            </tr>
                                                            <tr>
                                                              <td>Automatic data backups</td>
                                                              <td colspan="2"><span class="tick">&#10004;</span></td>
                                                              <!--<td><span class="tick">&#10004;</span></td>-->
                                                              <!--<td class="default"><span class="tick">&#10004;</span></td>-->
                                                              <!--<td><span class="tick">&#10004;</span></td>-->
                                                            </tr>
                                                          </tbody>
                                                        </table>
                                                        </div>
                                                  </div>
                                                  <!--<div class="modal-footer">-->
                                                  <!--  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
                                                  <!--  <button type="button" class="btn btn-primary">Save changes</button>-->
                                                  <!--</div>-->
                                                </div>
                                              </div>
                                            </div>
                                        <a href="https://stickyposts.net/stickypost_register/register-en.php?language=2" class="price-btn" style="cursor: pointer;">{{ __('fam-Buy Now')}}</a>
                                
                                    </div>
                                </div><!-- /.single-pricing-one -->
                                    <div class="card package w-100 mt-3">
                                    <div class="card-body bg-white text-dark package-second-card">
                                        <h5 class="card-text mb-3 text-center">
                                         <span>   {{ __('pay-InstallBy')}} </span>
                                         <input type="number" id="downpayment" placeholder="4999" class="provider-input" name="downpayment" value="1000" autocomplete="false" style="border: 0.5px solid rgb(225, 225, 225);width:33%;font-size:14px;">
                                         <span>L.E</span>
                                        </h5>
                                        
                                        <div class="custom-control custom-radio text-center w-100">
                                            <input type="radio" id="profRadio0" name="customRadio" class="custom-control-input">
                                            <label class="custom-control-label fs-14" for="profRadio0">
                                                <span class="price">
                                                    2250
                                                </span>
                                                {{ __('pay-pounds')}}
                                                /
                                                <span class="price">
                                                    3
                                                </span>
                                                {{ __('pay-months')}}
                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio text-center w-100">
                            <input type="radio" id="profRadio1" name="customRadio" class="custom-control-input">
                            <label class="custom-control-label fs-14" for="profRadio1">
                                <span class="price">
                                    2450
                                </span>
                                {{ __('pay-pounds')}}
                                /
                                <span class="price">
                                    6
                                </span>
                                {{ __('pay-months')}}
                            </label>
                        </div>
                        
                                        <div class="custom-control custom-radio text-center w-100">
                                            <input type="radio" id="profRadio2" name="customRadio" class="custom-control-input">
                                            <label class="custom-control-label fs-14" for="profRadio2">
                                                <span class="price">
                                                    1250
                                                </span>
                                                {{ __('pay-pounds')}}
                                                /
                                                <span class="price">
                                                    12
                                                </span>
                                                {{ __('pay-months')}}
                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio text-center w-100">
                                                <input type="radio" id="profRadio3" name="customRadio" class="custom-control-input">
                                                <label class="custom-control-label fs-14" for="profRadio3">
                                                    <span class="price">
                                                        1000
                                                    </span>
                                                {{ __('pay-pounds')}}
                                                    /
                                                    <span class="price">
                                                        18
                                                    </span>
                                                {{ __('pay-months')}}
                                                </label>
                                            </div>
                                            
                                    </div>
                                    <div class="card-footer px-0 bg-blue border-0 p-0">
                                        <a class="text-blue font-weight-bold d-block mx-3 p-2 text-center"
                                        href="https://stickyposts.net/stickypost_register/register-en.php?language=2">
                                        {{ __('pay-installNow')}}
                                        </a>
                                    </div>
                                </div>   
                                    </div> 
                              <div class="col-lg-3 p-1 col-md-4 col-sm-6 col-12 mt-sm-2">
                                    <div class="single-pricing-one">
                                    <div class="top-block" style="direction: ltr;">
                                        <h2 style="">{{ __('pay-SuperProfessional')}}</h2>
                 <p class="price m-0" style="direction: rtl;"><?php if ($location == 'Egypt' ){echo '6999 EGP';}
                 elseif ($location == 'United Arab Emirates'){echo '1829 Dirham';} 
                 elseif ($location == 'Saudi Arabia'){echo '1200 Riyal';}
                 else {echo '498$';} ?></P>
                                        <div class="line"></div><!-- /.line -->
                                    </div><!-- /.top-block -->
                                    <ul class="feature-lists text-left">
                                        
                                            <li><span style="color:#f00">*</span>{{ __('fam-You can manage')}} <span style="font-weight:bold;font-size:16px">{{ __('pay-seventy')}} 70 </span> {{ __('fam-pages only')}}</li>
                                            <li><span style="color:#f00">*</span>{{ __('pay-additionalPrivileges')}}</li>
                                            <li><span style="color:#f00">*</span>{{ __('pay-completelyFree')}}</li>
                                            <li><span style="color:#f00">*</span>{{ __('pay-internetPackages')}} </li>
                                            <li><span style="color:#f00">*</span>{{ __('pay-DoneTasks')}}  </li>
                                            <li><span style="color:#f00">*</span>{{ __('pay-LandingPages')}}</li>
                                    </ul><!-- /.feature-lists text-left -->
                                    <div class="bottom-block">
                                            <a href="https://stickyposts.net/sticky/landing_page_new_en.php" type="button" class="myModels" data-toggle="modal" data-target="#exampleModalCenter2">
                                              {{ __('fam-learnMore')}}
                                            </a>
                                            <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                              <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                  <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                                    <button type="button" class="close outlineNone" data-dismiss="modal" aria-label="Close">
                                                      <span aria-hidden="true">&times;</span>
                                                    </button>
                                                  </div>
                                                  <div class="modal-body colorfff">
                                                    <div class="container">
                                                            <table class="tables">
                                                          <thead>
                                                            <tr>
                                                              <th class="hide"></th>
                                                              <th colspan="2" class="bg-purple">Self-Employed</th>
                                                              <!--<th class="bg-blue">Simple Start</th>-->
                                                              <!--<th class="bg-blue default">Essentials</th>-->
                                                              <!--<th class="bg-blue">Plus</th>-->
                                                            </tr>
                                                          </thead>
                                                          <tbody>
                                                            <tr>
                                                              <td>Monthly price</td>
                                                              <td colspan="2"><span class="txt-top">&pound;</span><span class="txt-l">6</span></td>
                                                              <!--<td><span class="txt-top">&pound;</span><span class="txt-l">7</span></td>-->
                                                              <!--<td class="default"><span class="txt-top">&pound;</span><span class="txt-l">15</span></td>-->
                                                              <!--<td><span class="txt-top">&pound;</span><span class="txt-l">25</span></td>-->
                                                            </tr>
                                                            <tr>
                                                              <td colspan="3" class="sep">Get started easily</td>
                                                            </tr>
                                                            <tr>
                                                              <td>Includes free updates and new features as they become available</td>
                                                              <td colspan="2"><span class="tick">&#10004;</span></td>
                                                              <!--<td><span class="tick">&#10004;</span></td>-->
                                                              <!--<td class="default"><span class="tick">&#10004;</span></td>-->
                                                              <!--<td><span class="tick">&#10004;</span></td>-->
                                                            </tr>
                                                            <tr>
                                                              <td>No software to install — sign up online in moments</td>
                                                              <td colspan="2"><span class="tick">&#10004;</span></td>
                                                              <!--<td><span class="tick">&#10004;</span></td>-->
                                                              <!--<td class="default"><span class="tick">&#10004;</span></td>-->
                                                              <!--<td><span class="tick">&#10004;</span></td>-->
                                                            </tr>
                                                            <tr>
                                                              <td>Import customer & supplier details from Excel, Outlook and .csv</td>
                                                              <td colspan="2"></td>
                                                              <!--<td><span class="tick">&#10004;</span></td>-->
                                                              <!--<td class="default"><span class="tick">&#10004;</span></td>-->
                                                              <!--<td><span class="tick">&#10004;</span></td>-->
                                                            </tr>
                                                            <tr>
                                                              <td>Accept card payments in QuickBooks Online</td>
                                                              <td colspan="2"></td>
                                                              <!--<td><span class="tick">&#10004;</span></td>-->
                                                              <!--<td class="default"><span class="tick">&#10004;</span></td>-->
                                                              <!--<td><span class="tick">&#10004;</span></td>-->
                                                            </tr>
                                                            <tr>
                                                              <td colspan="3" class="sep">Stay protected and get support</td>
                                                            </tr>
                                                            <tr>
                                                              <td>Free telephone and online support</td>
                                                              <td colspan="2"></td>
                                                              <!--<td><span class="tick">&#10004;</span></td>-->
                                                              <!--<td class="default"><span class="tick">&#10004;</span></td>-->
                                                              <!--<td><span class="tick">&#10004;</span></td>-->
                                                            </tr>
                                                            <tr>
                                                              <td>Strong encryption protects your business data</td>
                                                              <td colspan="2"><span class="tick">&#10004;</span></td>
                                                              <!--<td><span class="tick">&#10004;</span></td>-->
                                                              <!--<td class="default"><span class="tick">&#10004;</span></td>-->
                                                              <!--<td><span class="tick">&#10004;</span></td>-->
                                                            </tr>
                                                            <tr>
                                                              <td>Automatic data backups</td>
                                                              <td colspan="2"><span class="tick">&#10004;</span></td>
                                                              <!--<td><span class="tick">&#10004;</span></td>-->
                                                              <!--<td class="default"><span class="tick">&#10004;</span></td>-->
                                                              <!--<td><span class="tick">&#10004;</span></td>-->
                                                            </tr>
                                                          </tbody>
                                                        </table>
                                                        </div>
                                                  </div>
                                                  <!--<div class="modal-footer">-->
                                                  <!--  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
                                                  <!--  <button type="button" class="btn btn-primary">Save changes</button>-->
                                                  <!--</div>-->
                                                </div>
                                              </div>
                                            </div>
                                        <a href="https://stickyposts.net/stickypost_register/register-en.php?language=2" class="price-btn" style="cursor: pointer;">{{ __('fam-Buy Now')}}</a>
                                    </div>
                                    </div>
                                     <!--/.bottom-block -->
                                     <!--/.single-pricing-one -->
                                        <div class="card package w-100 mt-3">
                                    <div class="card-body bg-white text-dark package-second-card">
                                        <h5 class="card-text mb-3 text-center">
                                         <span>  {{ __('pay-InstallBy')}} </span>
                                         <input type="number" id="downpayment" placeholder="4999" class="provider-input" name="downpayment" value="1000" autocomplete="false" style="border: 0.5px solid rgb(225, 225, 225);width:33%;font-size:14px;">
                                         <span>L.E</span>
                                        </h5>
                                        
                                        <div class="custom-control custom-radio text-center w-100">
                                            <input type="radio" id="profRadio4" name="customRadio" class="custom-control-input">
                                            <label class="custom-control-label fs-14" for="profRadio4">
                                                <span class="price">
                                                    2250
                                                </span>
                                                {{ __('pay-pounds')}} 
                                                /
                                                <span class="price">
                                                    3
                                                </span>
                                                {{ __('pay-months')}} 
                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio text-center w-100">
                            <input type="radio" id="profRadio5" name="customRadio" class="custom-control-input">
                            <label class="custom-control-label fs-14" for="profRadio5">
                                <span class="price">
                                    2450
                                </span>
                                {{ __('pay-pounds')}} 
                                /
                                <span class="price">
                                    6
                                </span>
                                {{ __('pay-months')}} 
                            </label>
                        </div>
                        
                                        <div class="custom-control custom-radio text-center w-100">
                                            <input type="radio" id="profRadio6" name="customRadio" class="custom-control-input">
                                            <label class="custom-control-label fs-14" for="profRadio6">
                                                <span class="price">
                                                    1250
                                                </span>
                                                {{ __('pay-pounds')}} 
                                                /
                                                <span class="price">
                                                    12
                                                </span>
                                                {{ __('pay-months')}} 
                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio text-center w-100">
                                                <input type="radio" id="profRadio7" name="customRadio" class="custom-control-input">
                                                <label class="custom-control-label fs-14" for="profRadio7">
                                                    <span class="price">
                                                        1000
                                                    </span>
                                                {{ __('pay-pounds')}} 
                                                    /
                                                    <span class="price">
                                                        18
                                                    </span>
                                                {{ __('pay-months')}} 
                                                </label>
                                            </div>
                                            
                                    </div>
                                    <div class="card-footer px-0 bg-blue border-0 p-0">
                                        <a class="text-blue font-weight-bold d-block mx-3 p-2 text-center"
                                        href="https://stickyposts.net/stickypost_register/register-en.php?language=2">
                                        {{ __('pay-installNow')}}
                                        </a>
                                    </div>
                                </div>   
                                    </div>
                            </div>
                        </div>        
                    </div>
                    <div role="tabpanel" class="tab-pane fade d-none" id="monthly">
                        <div class="col-lg-11 mx-auto">
                              <div class="row m-auto p-0 justify-content-center">
                                <div class="col-lg-3 p-1 col-md-4 mt-sm-2 col-sm-6 col-12">
                                        
                                <div class="single-pricing-one">
                                    <div class="top-block" style="direction: ltr;">
                                        <h2>{{ __('pay-Professional')}} </h2>
                                        <p class="price m-0" style="direction: rtl;"><?php if ($location == 'Egypt' ){echo '495 EGP';}
                                        elseif ($location == 'United Arab Emirates'){echo '115 Dirham';}
                                        elseif ($location == 'Saudi Arabia'){echo '31 Riyal';}
                                        else {echo '19$';} ?></P>

                                        <div class="line"></div><!-- /.line -->
                                    </div><!-- /.top-block -->
                                    <ul class="feature-lists text-left">
                                        <li><span style="color:#f00">*</span>{{ __('fam-You can manage')}}<span style="font-weight:bold;font-size:16px"> {{ __('pay-ThirtyFive')}} </span>{{ __('fam-pages only')}}</li>
                                            <li><span style="color:#f00">*</span>{{ __('fam-Unlimited team members')}}</li>
                                            <li><span style="color:#f00">*</span>{{ __('pay-additionalPrivileges')}} </li>
                                            <li><span style="color:#f00">*</span>{{ __('pay-completelyFree')}} </li>
                                            <li><span style="color:#f00">*</span>{{ __('pay-DoneTasks')}} </li>
                                            <li><span style="color:#f00">*</span>{{ __('pay-LandingPages')}}</li>
                                  
                                    </ul><!-- /.feature-lists text-left -->
                                    <div class="bottom-block">
                                        <a href="https://stickyposts.net/sticky/landing_page_new_en.php">{{ __('fam-learnMore')}}</a>
                                        <a href="https://stickyposts.net/stickypost_register/register-en.php?language=2" class="price-btn" style="cursor: pointer;">{{ __('fam-Buy Now')}}</a>
                                    </div>
                                </div>
                                    </div> 
                                <div class="col-lg-3 p-1 col-md-4 mt-sm-2 col-sm-6 col-12">
                               
                                <div class="single-pricing-one">
                                    <div class="top-block" style="direction: ltr;">
                                        <h2 style="">{{ __('pay-SuperProfessional')}}</h2>
                                        <p class="price m-0" style="direction: rtl;"><?php if ($location == 'Egypt' ){echo '750 EGP';}
                                        elseif ($location == 'United Arab Emirates'){echo '174 Dirham';}
                                        elseif ($location == 'Saudi Arabia'){echo '119 Riyal';}
                                        else {echo '47$';} ?></P>
                                        <div class="line"></div><!-- /.line -->
                                    </div><!-- /.top-block -->
                                    <ul class="feature-lists text-left">
                                      
                                            <li><span style="color:#f00">*</span>{{ __('fam-You can manage')}} <span style="font-weight:bold;font-size:16px"> {{ __('pay-seventy')}} </span> {{ __('fam-pages only')}}</li>
                                            <li><span style="color:#f00">*</span>{{ __('pay-getFreeLaptop')}}</li>
                                            <li><span style="color:#f00">*</span>{{ __('pay-internetPackages')}}</li>
                                            <li><span style="color:#f00">*</span>{{ __('pay-DoneTasks')}}</li>
                                            <li><span style="color:#f00">*</span>{{ __('pay-LandingPages')}}</li>
                                  
                                    </ul><!-- /.feature-lists text-left -->
                                    <div class="bottom-block">
                                        <a href="https://stickyposts.net/sticky/landing_page_new_en.php">{{ __('fam-learnMore')}}</a>
                                        <a href="https://stickyposts.net/stickypost_register/register-en.php?language=2" class="price-btn" style="cursor: pointer;">{{ __('fam-Buy Now')}}</a>
                                    </div>
                                </div><!-- /.single-pricing-one -->
                                    </div>
                              </div>
                        </div>    
                    </div> 
                </div>    
 </section>

<div class="container">
    <h2 class="text-center mt-4">قارن بين برامج الدعم المقدمة من </h2>
   <section class="customer-logos slider my-4" style="background:linear-gradient(0deg, #320b82, transparent);border-radius:6px;">
      <div class="slide" style="width:155px;height:155px;"><img src="{{get_theme_frontend_url('assets/sticky/images/Final New landing page maker2.png')}}"></div>
      <div class="slide" style="width:155px;height:155px;"><img src="{{get_theme_frontend_url('assets/sticky/images/Done-Tasks-Wh.png')}}"></div>
      <div class="slide" style="width:155px;height:155px;"><img src="{{get_theme_frontend_url('assets/sticky/images/logo-1-1.png')}}"></div>
      <div class="slide" style="width:155px;height:155px;"><img src="{{get_theme_frontend_url('assets/sticky/images/emblem-Samsung.jpg')}}"></div>
      <div class="slide" style="width:155px;height:155px;"><img src="{{get_theme_frontend_url('assets/sticky/images/orange.jpg')}}"></div>
      <div class="slide" style="width:155px;height:155px;"><img src="{{get_theme_frontend_url('assets/sticky/images/autochat.png')}}"></div>
      <div class="slide" style="width:155px;height:155px;"><img src="{{get_theme_frontend_url('assets/sticky/images/idigitalhr.png')}}"></div>
      <div class="slide" style="width:155px;height:155px;"><img src="{{get_theme_frontend_url('assets/sticky/images/Templates001 Logo.png')}}"></div>
      <div class="slide" style="width:155px;height:155px;"><img src="{{get_theme_frontend_url('assets/sticky/images/SMS Cooker logo.jpg')}}"></div>
      <div class="slide" style="width:155px;height:155px;"><img src="https://mobijobs.net/assets/images/logo.png"></div>
   </section>
</div>
<!-- DIRTY Responsive pricing table HTML -->
<!---->
<div class="d-flex justify-content-around container my-5">
  <div class="top-block single-pricing-one borderNone" style="direction: ltr;"><h2 class="widthMarginAuto">{{ __('pay-Professional')}} </h2></div>
  <button class="compare" type="button" data-toggle="modal" data-target="#exampleModalCenter4" aria-expanded="false" aria-controls="collapseExample">
    Compare
  </button>
  <div class="top-block single-pricing-one borderNone" style="direction: ltr;"><h2 class="widthMarginAuto">{{ __('pay-SuperProfessional')}} </h2></div>
</div>
  <div class="card card-body borderNone">
        <div class="container width60">
    <div class="modal fade" id="exampleModalCenter4" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">-->
                                              <div class="modal-dialog modal-dialog-centered maxWidth" role="document">
                                                <div class="modal-content">
                                                  <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                                    <button type="button" class="close outlineNone" data-dismiss="modal" aria-label="Close">
                                                      <span aria-hidden="true">&times;</span>
                                                    </button>
                                                  </div>
                                                  <div class="modal-body colorfff">
                                                    <div class="container">
                                                            <table class="tables">
                                                          <thead>
                                                            <tr>
                                                              <th class="hide"></th>
                                                              <th colspan="1" class="bg-purple">Self-Employed</th>
                                                              <th class="bg-blue">Simple Start</th>
                                                              <!--<th class="bg-blue default">Essentials</th>-->
                                                              <!--<th class="bg-blue">Plus</th>-->
                                                            </tr>
                                                          </thead>
                                                          <tbody>
                                                            <tr>
                                                              <td>Monthly price</td>
                                                              <td colspan="1"><span class="txt-top">&pound;</span><span class="txt-l">6</span></td>
                                                              <td><span class="txt-top">&pound;</span><span class="txt-l">7</span></td>
                                                              <!--<td class="default"><span class="txt-top">&pound;</span><span class="txt-l">15</span></td>-->
                                                              <!--<td><span class="txt-top">&pound;</span><span class="txt-l">25</span></td>-->
                                                            </tr>
                                                            <tr>
                                                              <td colspan="3" class="sep">Get started easily</td>
                                                            </tr>
                                                            <tr>
                                                              <td>Includes free updates and new features as they become available</td>
                                                              <td colspan="1"><span class="tick">&#10004;</span></td>
                                                              <td><span class="tick">&#10004;</span></td>
                                                              <!--<td class="default"><span class="tick">&#10004;</span></td>-->
                                                              <!--<td><span class="tick">&#10004;</span></td>-->
                                                            </tr>
                                                            <tr>
                                                              <td>No software to install — sign up online in moments</td>
                                                              <td colspan="1"><span class="tick">&#10004;</span></td>
                                                              <td><span class="tick">&#10004;</span></td>
                                                              <!--<td class="default"><span class="tick">&#10004;</span></td>-->
                                                              <!--<td><span class="tick">&#10004;</span></td>-->
                                                            </tr>
                                                            <tr>
                                                              <td>Import customer & supplier details from Excel, Outlook and .csv</td>
                                                              <td colspan="1"></td>
                                                              <td><span class="tick">&#10004;</span></td>
                                                              <!--<td class="default"><span class="tick">&#10004;</span></td>-->
                                                              <!--<td><span class="tick">&#10004;</span></td>-->
                                                            </tr>
                                                            <tr>
                                                              <td>Accept card payments in QuickBooks Online</td>
                                                              <td colspan="1"></td>
                                                              <td><span class="tick">&#10004;</span></td>
                                                              <!--<td class="default"><span class="tick">&#10004;</span></td>-->
                                                              <!--<td><span class="tick">&#10004;</span></td>-->
                                                            </tr>
                                                            <tr>
                                                              <td colspan="3" class="sep">Stay protected and get support</td>
                                                            </tr>
                                                            <tr>
                                                              <td>Free telephone and online support</td>
                                                              <td colspan="1"></td>
                                                              <td><span class="tick">&#10004;</span></td>
                                                              <!--<td class="default"><span class="tick">&#10004;</span></td>-->
                                                              <!--<td><span class="tick">&#10004;</span></td>-->
                                                            </tr>
                                                            <tr>
                                                              <td>Strong encryption protects your business data</td>
                                                              <td colspan="1"><span class="tick">&#10004;</span></td>
                                                              <td><span class="tick">&#10004;</span></td>
                                                              <!--<td class="default"><span class="tick">&#10004;</span></td>-->
                                                              <!--<td><span class="tick">&#10004;</span></td>-->
                                                            </tr>
                                                            <tr>
                                                              <td>Automatic data backups</td>
                                                              <td colspan="1"><span class="tick">&#10004;</span></td>
                                                              <td><span class="tick">&#10004;</span></td>
                                                              <!--<td class="default"><span class="tick">&#10004;</span></td>-->
                                                              <!--<td><span class="tick">&#10004;</span></td>-->
                                                            </tr>
                                                          </tbody>
                                                        </table>
                                                        </div>
                                                  </div>
                                                  <!--<div class="modal-footer">-->
                                                  <!--  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
                                                  <!--  <button type="button" class="btn btn-primary">Save changes</button>-->
                                                  <!--</div>-->
                                                </div>
                                              </div>
                                            </div>
</div>
  </div>
  <section class="preCompareSection">
     
 </section>
  <section class="compareSection">
     
 </section>
 
@endsection
@push('scripts')
<script>
$( ".addToCal" ).on( "click", function(){
    $( this ).toggleClass( "open" );
} );

$( ".addToCalOptions a" ).on( "click", function(){
    var $this = $( this ),
        data = $this.closest( ".container" ).find( "button" ).data( "ace" ),
        type = $this.data( "type" ),
        url = "";
    // console.log( data );
    console.log( type );
    switch( type ){
        case "google":
            url = getUrl_google( data );
            break;
        case "yahoo":
            url = getUrl_yahoo( data );
            break;
        case "hotmail":
            url = getUrl_hotmail( data );
            break;
        case "ics":
            // Logic to download ics file.
            break;
        default:
            break;
    }
    console.log( url );
    window.open( url, '_blank' );
} );


function getUrl_google( data ) {
    var url = 'https://www.google.com/calendar/event?action=TEMPLATE';
    url += '&text=' + encodeURIComponent(data.title);
    url += '&details=' + encodeURIComponent(data.desc);
    url += '&location=' + encodeURIComponent(data.location);
    url += '&dates=' + encodeURIComponent(_getUTCTime(data.time.start, data.time.zone) + '/' + _getUTCTime(data.time.end, data.time.zone));  // time needs to be sent as UTC and let Google handle converting to local
    url += '&sprop=website:' + encodeURIComponent(data.url);
    url += '&sprop=name:' + encodeURIComponent(data.organizer.name);
    return url;
}
function getUrl_yahoo( data ) {
    var url = 'http://calendar.yahoo.com?v=60';
    url += '&TITLE=' + encodeURIComponent(data.title);
    url += '&DESC=' + encodeURIComponent(data.desc);
    url += '&URL=' + encodeURIComponent(data.url);
    url += '&in_loc=' + encodeURIComponent(data.location);
    url += '&ST=' + _getUTCTime(data.time.start, data.time.zone);
    url += '&DUR=' + _getDateDiff(data.time.start, data.time.end);
    return url;
}
function getUrl_hotmail( data ) {
    var url = 'https://bay02.calendar.live.com/calendar/calendar.aspx?rru=addevent';
    url += '&dtstart=' + _getUTCTime(data.time.start, data.time.zone);
    url += '&dtend=' + _getUTCTime(data.time.end, data.time.zone);
    url += '&summary=' + encodeURIComponent(data.title);
    url += '&location=' + encodeURIComponent(data.location);
    url += '&description=' + encodeURIComponent(data.desc);
    url += '&allday=' + "false";
    url += '&uid=' + "";
    return url;
}

function _getUTCTime( dateObj, zone ) {
    var newDateObj = _adjustToUTC(dateObj, zone);
    return _getDatePart(newDateObj.getFullYear(),4) + _getDatePart(newDateObj.getMonth()+1,2) + _getDatePart(newDateObj.getDate(),2) + 'T' + _getDatePart(newDateObj.getHours(),2) + _getDatePart(newDateObj.getMinutes(),2) + _getDatePart(newDateObj.getSeconds(),2) + 'Z';
}

function _getDatePart(part, digits){
    part = part.toString();
    while(part.length < digits) {
        part = '0' + part;
    }
    return part;
}

function _adjustToUTC(dateObj, zone){
    var dateOut = new Date(dateObj),
    hours, mins;

    if(isNaN(dateOut.getTime())) {
        return new Date();
    }

    // adjust to UTC
    hours = zone.substring(1,3);
    mins = zone.substring(4,6);
    if(zone.substring(0,1) === '-') {
        dateOut.setHours(dateOut.getHours() + (hours-0));
        dateOut.setMinutes(dateOut.getMinutes() + (mins-0));
    } else {
        dateOut.setHours(dateOut.getHours() - hours);
        dateOut.setMinutes(dateOut.getMinutes() - mins);
    }
    return dateOut;
}

function _getDateDiff(startDate, endDate) {
    var diff = Math.floor((endDate - startDate)/60000),
    hours = Math.floor(diff/60),
    mins = diff - (hours * 60);
    return this._getDatePart(hours,2) + this._getDatePart(mins,2);
}
$(document).ready(function(){
    $('.customer-logos').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: true,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 3
            }
        }]
    });
});
</script>
@endpush
        