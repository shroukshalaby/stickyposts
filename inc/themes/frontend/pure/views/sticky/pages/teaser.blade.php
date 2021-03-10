@extends('sticky.layout.master')
@push('head')

<!-- GetButton.io widget -->
<script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "+201270657846", // WhatsApp number
            call_to_action: "", // Call to action
            position: "left", // Position may be 'right' or 'left'
        };
        var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /GetButton.io widget -->
<style>
/*.bg {*/
/*  animation:slide 3s ease-in-out infinite alternate;*/
/*  background-image: linear-gradient(-90deg, #320b83,#85218b,#90f7ec,#32ccbc,#320b82,#a100e4,#ffd26f,#3677ff,#fdeb71,#f8d800,#868585,#ffffff,#97461a,#fbd8c5,#6c2e16,#efdbcd,#a0fe65,#fa016d,#fad7a1,#e96d71);*/
/*  bottom:0;*/
/*  left:-50%;*/
/*  opacity:.5;*/
/*  position:fixed;*/
/*  right:-50%;*/
/*  top:0;*/
/*  z-index:-1;*/
/*}*/

/*.bg2 {*/
/*  animation-direction:alternate-reverse;*/
/*  animation-duration:15s;*/
/*}*/

/*.bg3 {*/
/*  animation-duration:20s;*/
/*}*/
.bg {
  animation:slide 3s ease-in-out infinite alternate;
  /*background-image: linear-gradient(-60deg, #6c3 50%, #09f 50%);*/
    background: linear-gradient(-60deg, #fdeb71 50%, #320b83 30%,#90f7ec 40% ,#32ccbc 50%,#320b82 50%,#a100e4 50%,#ffd26f 50% ,#3677ff 50%,#97461a 50% ,#fbd8c5 50%, #868585 50%);
  bottom:0;
  left:-50%;
  opacity:.5;
  position:fixed;
  right:-50%;
  top:0;
  z-index:-1;
}

.bg2 {
  animation-direction:alternate-reverse;
  animation-duration:4s;
}

.bg3 {
  animation-duration:5s;
}

.content {
  background-color:rgba(255,255,255,.8);
  border-radius:.25em;
  box-shadow:0 0 .25em rgba(0,0,0,.25);
  box-sizing:border-box;
  left:50%;
  padding:10vmin;
  position:relative;
  text-align:center;
  top:50%;
  transform:translate(-50%, -50%);
}

/*h1 {*/
/*  font-family:monospace;*/
/*}*/

@keyframes slide {
  0% {
    transform:translateX(-25%);
        background: linear-gradient(309deg, #90f7ec, #32ccbc);
  }
  100% {
    transform:translateX(25%);
        background: linear-gradient(309deg, #ffd26f, #ffffff);
  }
}
.content {
 width:100%;
 /*height:70vh;*/
 background: transparent;
 display:flex;
 justify-content:center;
 align-items: center;
 box-shadow: none;
}
@keyframes slide {
  0% {
    transform:translateX(-25%);
  }
  100% {
    transform:translateX(25%);
  }
}
.site-header{
    background:linear-gradient(-145deg, #320b82 0%, #9c33c3 100%);
    }
    .comparison {
  max-width:940px;
  margin:0 auto;
  font:13px/1.4 "Helvetica Neue",Helvetica,Arial,sans-serif;
  text-align:center;
  padding:10px;
}

.comparison table {
  width:100%;
  border-collapse: collapse;
  border-spacing: 0;
  table-layout: fixed;
  border-bottom:1px solid #CCC;
}

.comparison td, .comparison th {
  border-right:1px solid #CCC;
  empty-cells: show;
  padding:10px;
}

.compare-heading {
  font-size:18px;
  font-weight:bold !important;
  border-bottom:0 !important;
  padding-top:10px !important;
}

.comparison tbody tr:nth-child(odd) {
  display:none;
}

.comparison .compare-row {
  background:#F5F5F5;
}

.comparison .tickblue {
  color:#0078C1;
}

.comparison .tickgreen {
  color:#009E2C;
}

.comparison th {
  font-weight:normal;
  padding:0;
  border-bottom:1px solid #CCC;
}

.comparison tr td:first-child {
  text-align:left;
}
  
.comparison .qbse, .comparison .qbo, .comparison .tl {
  color:#FFF;
  padding:10px;
  font-size:13px;
  border-right:1px solid #CCC;
  border-bottom:0;
}

.comparison .tl2 {
  border-right:0;
}

.comparison .qbse {
  background:#0078C1;
  border-top-left-radius: 3px;
  border-left:0px;
}

.comparison .qbo {
  background:#009E2C;
  border-top-right-radius: 3px;
  border-right:0px;
}

.comparison .price-info {
  padding:5px 15px 15px 15px;
}

.comparison .price-was {
  color:#999;
  text-decoration: line-through;
}

.comparison .price-now, .comparison .price-now span {
  color:#ff5406;
}

.comparison .price-now span {
  font-size:32px;
}

.comparison .price-small {
    font-size: 18px !important;
    position: relative;
    top: -11px;
    left: 2px;
}

.comparison .price-buy {
  background:#ff5406;
  padding:10px 20px;
  font-size:12px;
  display:inline-block;
  color:#FFF;
  text-decoration:none;
  border-radius:3px;
  text-transform:uppercase;
  margin:5px 0 10px 0;
}

.comparison .price-try {
  font-size:12px;
}

.comparison .price-try a {
  color:#202020;
}
.lineargradiantrandomcolors {
  width: 107%;
  height: 700px;
  background-color: #fff;
  overflow: hidden;
  position: relative;
  margin: auto;
}
.lineargradiantrandomcolors img {
  width: 100%;
  height: 100%;
}
.modal-content {
    border:none;
}
.lineargradiantrandomcolors::before{
  content: '';
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  background: linear-gradient(307deg, #f6db00, #37bcc2, #7fb537, #ee712f, #000000, #191eee, #ff7c2a, #1429a0, #d3b205, #319b2e, #044fff, #172b4d, #868585, #038501, #03420a, #6f7877, #e4b141, #0530ff, #01d8ff);
  mix-blend-mode: hue;
  background-size: 3800% 3800%;
  -webkit-animation: AnimationName 20s ease infinite;
    -moz-animation: AnimationName 20s ease infinite;
    animation: AnimationName 20s ease infinite;
}
.lineargradiantrandomcolors .write {
  position: absolute;
  color: #000;
  top: 45%;
  left: 45%;
  transform: translate(-50%,-50%);
}
.lineargradiantrandomcolors .write p{
  font-size:45px;
  font-family: Tahoma;
  
}
@-webkit-keyframes AnimationName {
    0%{background-position:85% 0%}
    50%{background-position:60% 100%}
    100%{background-position:100% 30%}
}
@-moz-keyframes AnimationName {
    0%{background-position:85% 0%}
    50%{background-position:60% 100%}
    100%{background-position:100% 25%}
}
@keyframes AnimationName {
    0%{background-position:100% 0%}
    50%{background-position:50% 100%}
    100%{background-position:100% 20%}
}
@media (max-width: 767px) {
  .comparison td:first-child, .comparison th:first-child {
    display: none;
  }
  .comparison tbody tr:nth-child(odd) {
    display:table-row;
    background:#F7F7F7;
  }
  .comparison .row {
    background:#FFF;
  }
  .comparison td, .comparison th {
    border:1px solid #CCC;
  }
  .price-info {
  border-top:0 !important;
  
}
  
}

@media (max-width: 639px) {
  .comparison .price-buy {
    padding:5px 10px;
  }
  .comparison td, .comparison th {
    padding:10px 5px;
  }
  .comparison .hide-mobile {
    display:none;
  }
  .comparison .price-now span {
  font-size:16px;
}

.comparison .price-small {
    font-size: 16px !important;
    top: 0;
    left: 0;
}
  .comparison .qbse, .comparison .qbo {
    font-size:12px;
    padding:10px 5px;
  }
  .comparison .price-buy {
    margin-top:10px;
  }
  .compare-heading {
  font-size:13px;
}
}
.img{
  position: absolute;
  top: 18%;
  left: 12%;
}
.svg {
  background: linear-gradient(307deg, #f6db00, #37bcc2, #7fb537, #ee712f, #000000, #191eee, #ff7c2a, #1429a0, #d3b205, #319b2e, #044fff, #172b4d, #868585, #038501, #03420a, #6f7877, #e4b141, #0530ff, #01d8ff);
  background-size: 3400% 3400%;
  animation: stickyPosts 120s infinite;
  width: 100%;
  /*height: 100vh;*/
}
@keyframes stickyPosts{
  0% {
    background-position: 0% 50%;
  }
  50% {
    background-position: 100% 50%;
  }
  100% {
    background-position: 0% 50%;
  }
}
</style>

@endpush
@section('page-wrapper')

@endsection
@section('body')
<!--<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">-->
<!--  <div class="modal-dialog modal-lg">-->
<!--    <div class="modal-content">-->
<!--      <div class="comparison">-->

<!--  <table>-->
<!--    <thead>-->
<!--      <tr>-->
<!--        <th class="tl tl2"></th>-->
<!--        <th class="qbse">-->
<!--          Self-Employed & Freelance-->
<!--        </th>-->
<!--        <th colspan="3" class="qbo">-->
<!--          Small businesses that need accounting, invoicing or payroll-->
<!--        </th>-->
<!--      </tr>-->
<!--      <tr>-->
<!--        <th class="tl"></th>-->
<!--        <th class="compare-heading">-->
<!--          Self-Employed-->
<!--        </th>-->
<!--        <th class="compare-heading">-->
<!--          Simple Start-->
<!--        </th>-->
<!--        <th class="compare-heading">-->
<!--          Essentials-->
<!--        </th>-->
<!--        <th class="compare-heading">-->
<!--          Plus-->
<!--        </th>-->
<!--      </tr>-->
<!--      <tr>-->
<!--        <th></th>-->
<!--        <th class="price-info">-->
<!--          <div class="price-was">Was £6.00</div>-->
<!--          <div class="price-now"><span>£4<span class="price-small">.20</span></span> /month</div>-->
<!--          <div><a href="#" class="price-buy">Buy <span class="hide-mobile">Now</span></a></div>-->
<!--          <div class="price-try"><span class="hide-mobile">or </span><a href="#">try <span class="hide-mobile">it free</span></a></div>-->
<!--        </th>-->
<!--        <th class="price-info">-->
<!--          <div class="price-was">Was £7.00</div>-->
<!--          <div class="price-now"><span>£5<span class="price-small">.60</span></span> /month</div>-->
<!--          <div><a href="#" class="price-buy">Buy <span class="hide-mobile">Now</span></a></div>-->
<!--          <div class="price-try"><span class="hide-mobile">or </span><a href="#">try <span class="hide-mobile">it free</span></a></div>-->
<!--        </th>-->
<!--        <th class="price-info">-->
<!--          <div class="price-was">Was £15.00</div>-->
<!--          <div class="price-now"><span>£10<span class="price-small">.50</span></span> /month</div>-->
<!--          <div><a href="#" class="price-buy">Buy <span class="hide-mobile">Now</span></a></div>-->
<!--          <div class="price-try"><span class="hide-mobile">or </span><a href="#">try <span class="hide-mobile">it free</span></a></div>-->
<!--        </th>-->
<!--        <th class="price-info">-->
<!--          <div class="price-was">Was £25.00</div>-->
<!--          <div class="price-now"><span>£15<span class="price-small">.00</span></span> /month</div>-->
<!--          <div><a href="#" class="price-buy">Buy <span class="hide-mobile">Now</span></a></div>-->
<!--          <div class="price-try"><span class="hide-mobile">or </span><a href="#">try <span class="hide-mobile">it free</span></a></div>-->
<!--        </th>-->
<!--      </tr>-->
<!--    </thead>-->
<!--    <tbody>-->
<!--      <tr>-->
<!--        <td></td>-->
<!--        <td colspan="4">Seperate business from personal spending</td>-->
<!--      </tr>-->
<!--      <tr class="compare-row">-->
<!--        <td>Seperate business/personal</td>-->
<!--        <td><span class="tickblue">✔</span></td>-->
<!--        <td></td>-->
<!--        <td></td>-->
<!--        <td></td>-->
<!--      </tr>-->
<!--      <tr>-->
<!--        <td>&nbsp;</td>-->
<!--        <td colspan="4">Estimate tax payments</td>-->
<!--      </tr>-->
<!--      <tr>-->
<!--        <td>Estimate tax payments</td>-->
<!--        <td><span class="tickblue">✔</span></td>-->
<!--        <td></td>-->
<!--        <td></td>-->
<!--        <td></td>-->
<!--      </tr>-->
<!--      <tr>-->
<!--        <td>&nbsp;</td>-->
<!--        <td colspan="4">Track deductible mileage</td>-->
<!--      </tr>-->
<!--      <tr class="compare-row">-->
<!--        <td>Track deductible mileage</td>-->
<!--        <td><span class="tickblue">✔</span></td>-->
<!--        <td></td>-->
<!--        <td></td>-->
<!--        <td></td>-->
<!--      </tr>-->
<!--      <tr>-->
<!--        <td>&nbsp;</td>-->
<!--        <td colspan="4">Download online banking</td>-->
<!--      </tr>-->
<!--      <tr>-->
<!--        <td>Download online banking</td>-->
<!--        <td><span class="tickblue">✔</span></td>-->
<!--        <td><span class="tickgreen">✔</span></td>-->
<!--        <td><span class="tickgreen">✔</span></td>-->
<!--        <td><span class="tickgreen">✔</span></td>-->
<!--      </tr>-->
<!--      <tr>-->
<!--        <td>&nbsp;</td>-->
<!--        <td colspan="4">Works on PC, Mac & mobile</td>-->
<!--      </tr>-->
<!--      <tr class="compare-row">-->
<!--        <td>Multi-device</td>-->
<!--        <td><span class="tickblue">✔</span></td>-->
<!--        <td><span class="tickgreen">✔</span></td>-->
<!--        <td><span class="tickgreen">✔</span></td>-->
<!--        <td><span class="tickgreen">✔</span></td>-->
<!--      </tr>-->
<!--      <tr>-->
<!--        <td>&nbsp;</td>-->
<!--        <td colspan="4">Create invoices & estimates</td>-->
<!--      </tr>-->
<!--      <tr>-->
<!--        <td>Create invoices & estimates</td>-->
<!--        <td></td>-->
<!--        <td><span class="tickgreen">✔</span></td>-->
<!--        <td><span class="tickgreen">✔</span></td>-->
<!--        <td><span class="tickgreen">✔</span></td>-->
<!--      </tr>-->
<!--      <tr>-->
<!--        <td>&nbsp;</td>-->
<!--        <td colspan="4">Manage VAT</td>-->
<!--      </tr>-->
<!--      <tr class="compare-row">-->
<!--        <td>Manage VAT</td>-->
<!--        <td></td>-->
<!--        <td><span class="tickgreen">✔</span></td>-->
<!--        <td><span class="tickgreen">✔</span></td>-->
<!--        <td><span class="tickgreen">✔</span></td>-->
<!--      </tr>-->
<!--      <tr>-->
<!--        <td>&nbsp;</td>-->
<!--        <td colspan="4">Run payroll</td>-->
<!--      </tr>-->
<!--      <tr>-->
<!--        <td>Run payroll</td>-->
<!--        <td></td>-->
<!--        <td><span class="tickgreen">✔</span></td>-->
<!--        <td><span class="tickgreen">✔</span></td>-->
<!--        <td><span class="tickgreen">✔</span></td>-->
<!--      </tr>-->
<!--      <tr>-->
<!--        <td>&nbsp;</td>-->
<!--        <td colspan="4">Number of users</td>-->
<!--      </tr>-->
<!--      <tr class="compare-row">-->
<!--        <td>Number of users</td>-->
<!--        <td class="tickblue">1 user</td>-->
<!--        <td class="tickgreen">1 user</td>-->
<!--        <td class="tickgreen">3 users</td>-->
<!--        <td class="tickgreen">5 users</td>-->
<!--      </tr>-->
<!--      <tr>-->
<!--        <td>&nbsp;</td>-->
<!--        <td colspan="4">Manage bills & payments</td>-->
<!--      </tr>-->
<!--      <tr>-->
<!--        <td>Manage bills & payments</td>-->
<!--        <td></td>-->
<!--        <td></td>-->
<!--        <td><span class="tickgreen">✔</span></td>-->
<!--        <td><span class="tickgreen">✔</span></td>-->
<!--      </tr>-->
<!--      <tr>-->
<!--        <td>&nbsp;</td>-->
<!--        <td colspan="4">Handle multiple currencies</td>-->
<!--      </tr>-->
<!--      <tr class="compare-row">-->
<!--        <td>Handle multiple currencies</td>-->
<!--        <td></td>-->
<!--        <td></td>-->
<!--        <td><span class="tickgreen">✔</span></td>-->
<!--        <td><span class="tickgreen">✔</span></td>-->
<!--      </tr>-->
<!--      <tr>-->
<!--        <td>&nbsp;</td>-->
<!--        <td colspan="4">Create budgets</td>-->
<!--      </tr>-->
<!--      <tr>-->
<!--        <td>Create budgets</td>-->
<!--        <td></td>-->
<!--        <td></td>-->
<!--        <td></td>-->
<!--        <td><span class="tickgreen">✔</span></td>-->
<!--      </tr>-->
<!--      <tr>-->
<!--        <td>&nbsp;</td>-->
<!--        <td colspan="4">Track employee time</td>-->
<!--      </tr>-->
<!--      <tr class="compare-row">-->
<!--        <td>Track employee time</td>-->
<!--        <td></td>-->
<!--        <td></td>-->
<!--        <td></td>-->
<!--        <td><span class="tickgreen">✔</span></td>-->
<!--      </tr>-->
<!--      <tr>-->
<!--        <td>&nbsp;</td>-->
<!--        <td colspan="4">Stock control</td>-->
<!--      </tr>-->
<!--      <tr>-->
<!--        <td>Stock control</td>-->
<!--        <td></td>-->
<!--        <td></td>-->
<!--        <td></td>-->
<!--        <td><span class="tickgreen">✔</span></td>-->
<!--      </tr>-->
<!--    </tbody>-->
<!--  </table>-->

<!--</div>-->
<!--    </div>-->
<!--  </div>-->
</div>

<!-- <section class="container">-->
<!--    <div class="row justify-content-center mt-4 pt-4" style="height:500px;">-->
        <!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Large modal</button>-->
            <!--<div>-->
            <!--  <div class="modal-content contenido">-->
            <!--    <div class="lineargradiantrandomcolors">-->
            <!--      <img src="{{get_theme_frontend_url('assets/img/Splash.png')}}" alt="">-->
            <!--    </div>-->
            <!--  </div>-->
            <!--</div>-->
                 <!--<div class="modal-dialog" role="document">-->
              <!--<div class="modal-content contenido">-->
              <!--  <div class="lineargradiantrandomcolors">-->
              <!--      <div class="write">-->
              <!--        <p>Welcome To Sticky Posts Business</p>-->
              <!--      </div>-->
              <!--    <img src="{{get_theme_frontend_url('assets/img/Splash.png')}}" alt="">-->
              <!--  </div>-->
              <!--</div>-->
            <!--</div>-->
<!--            <div class="bg"></div>-->
<!--<div class="bg bg2"></div>-->
<!--<div class="bg bg3"></div>-->
<!--<div class="bg"></div>-->
<!--<div class="bg bg2"></div>-->
<!--<div class="bg bg3"></div>-->
<!--<div class="content">-->
<!--  <img src="https://stickyposts.net/packagedashboard/assets/images/btb.png" width="300"/>-->
<!--</div>-->
<!--    </div> -->
<section class="section">
    <!--<div style="height: 90vh; overflow: hidden;" ><svg class="svg" viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M404.91,-15.28 C385.72,118.91 158.29,140.63 95.08,176.14 L-0.27,149.50 L0.00,0.00 Z" style="stroke: none; fill: #08f;"></path></svg></div>-->
<!-- Generated by https://smooth.ie/blogs/news/svg-wavey-transitions-between-sections -->
<img class="img" src="https://stickyposts.net/inc/themes/frontend/pure/assets/img/backtobusinessEN.png" alt="" width="400">
<div style="height: 90vh; overflow: hidden;" ><svg class="svg" viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M424.09,-4.44 C312.36,-7.39 255.36,173.19 74.77,150.48 L-0.27,149.50 L0.00,0.00 Z" style="stroke: none; fill: #9c33c3;"></path></svg></div>
</section>
 <!--</section>-->
 
@endsection
@push('scripts')

@endpush
        