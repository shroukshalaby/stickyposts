@extends('sticky.layout.master')

@push('head')
    <style>
    .text-ccc{
        color:#222;
    }
    .blueText{
        color:#92c1f0;
    }
    p,span{
        font-size:16px;
        color:#222;
    }
    .row{
        margin:auto;
    }
    .bg-gray-invoice{
        background: #FCFCFC;
    }
    .bg-blue-invoice{
        background-color: #D3E3F3;
    }
    .bg-dark-gray{
        background:#343a40;
    }
    .fs-22{
        font-size:22px;
    }
    .text-dark-gray{
      color:#343a40;
     font-weight: 600!important;
    }
    .invoiceDetailsBg{
        background: #EEE;
    }
    .invoice-border-gray{
      border: 1px solid #ccc;
    }
    .bg-eee{
        background:#eee;
    }
    </style>

@endpush


@section('body')

<div class="container py-5">
    <div class="row my-5 justify-content-center align-items-center">
      <div class="col-md-7">
        <div class="text-left font-weight-bold">
            <span class="text-dark-gray bg-eee p-2">powered by Elsaraf.com</span>
        </div>   
        <div class="row invoice-border-gray">
            <div class="col-md-12 col-12 mb-4 p-0">
                <div class="text-white text-center py-3 font-weight-bold bg-dark-gray">
                    <span class="text-white fs-22">Your Invoice</span>
                </div> 
            </div>
            <div class="col-md-7 p-0">
                <div class="invoice_details px-3">
                    <p> Full name : <span class="text-dark-gray"> Shrouk Shalaby Mohamed </span> </p>
                    <p> Email : <span class="text-dark-gray"> ShroukShalaby55555@gmail.com </span></p>
                </div>
            </div>
            <div class="col-md-5 p-0">
              <div class="productLogo text-center px-3">
                <img src='https://stickyposts.net/sticky/images/logo-1-1.png' class="w-100">  
              </div>    
            </div>    
            <div class="col-md-12 p-0">
              <div class='row bg-gray-invoice'>
                <div class='col-12 py-2 invoiceDetailsBg'>
                  <p  class='font-weight-bold mb-0 text-ccc'> Invoice Details :</p>
                </div>  
                <div class='col-md-6 py-2'>
                  <span class='font-weight-bold'> Invoice Date</span>
                </div>
                <div class='col-md-6 py-2'>
                  <span class=''>20/11/2020</span>
                </div>
               <div class='col-md-6 py-2'>
                  <span class='font-weight-bold'> Invoice Number </span>
                </div>
                <div class='col-md-6 py-2'>
                  <span class=''>2010aa5cdxc5</span>
                </div>
                 <div class='col-md-6 py-2'>
                  <span class='font-weight-bold'> Payment Method </span>
                </div>
                <div class='col-md-6 py-2'>
                  <span class=''> Credit Card </span>
                </div>
                <div class='col-md-6 py-2'>
                  <span class='font-weight-bold'> Payment Id </span>
                </div>
                <div class='col-md-6 py-2'>
                  <span class=''> 5cckenfkewwec00 </span> 
                </div>
                <div class='col-md-6 py-2'>
                  <span class='font-weight-bold'> Product Type </span>
                </div>
                <div class='col-md-6 py-2'>
                  <span class=''> Sticky Posts </span> 
                </div>
                <div class='col-md-6 py-2'>
                  <span class='font-weight-bold'> Service Name </span>
                </div>
                <div class='col-md-6 py-2'>
                  <span class=''> Professional Package </span> 
                </div>
                <div class='col-md-6 py-2'>
                  <span class='font-weight-bold'> Monthly Payment </span>
                </div>
                <div class='col-md-6 py-2'>
                  <span class=''> 1095 LE</span> 
                </div>
             </div>
              <div class='row bg-blue-invoice py-2'>
                <div class="col-md-6">
                  <span class='font-weight-bold'>  Amount Due </span>
                </div>
                <div class="col-md-6">
                  <span class='font-weight-bold'>  1095 LE  </span>
                </div>
                
            </div>
            </div>
            <div class="col-md-12 p-0">
                <div class='py-2'>
                    <p class='text-ccc px-3 mb-2'>This invoice was created for immediate settlement for the service period <br> that begins on 
                     <span class="text-dark-gray">20/11/2020</span> To <span class="text-dark-gray">25/11/2020</span>
                    </p>
                </div>
            </div>
        </div> 
        
      </div>    
    </div>
</div>
@endsection


@push('scripts')

@endpush