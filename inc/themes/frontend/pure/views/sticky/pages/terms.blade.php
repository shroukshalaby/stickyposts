@extends('sticky.layout.master')
@push('head')
<style>
.site-header{
        background:linear-gradient(-145deg, rgb(50, 11, 130) 0%, rgb(156, 51, 195) 100%)!important;
    }
.block-title{
    color: #320b82;
    font-size: 46px;
    font-weight: 400;
}
.new-header{
    background:linear-gradient(-145deg, rgb(50, 11, 130) 0%, rgb(156, 51, 195) 100%);
    width:100%;
    height:53px;
}
@media (max-width:767px){
.new-header{
    background:linear-gradient(-145deg, rgb(50, 11, 130) 0%, rgb(156, 51, 195) 100%);
    width:100%;
    height:75px!important;
}
}
.p-header{
    font-weight:bold;
    font-size:16px;
}
.p-text{
    font-size:12px;
    margin-top:0;
    margin-bottom:0;
}
.list-text{
    font-size:12px;
    padding:0 15px;
}
.a-style{
    color: #320b82;
}
.a-style:hover{
    color:#777b92;
}
</style>
@endpush
@section('page-wrapper')

@endsection
@section('body')
    <div class="page-wrapper {{  getCurrentLangIdiom() == 'ar' ? 'text-right'  : '' }}">
        
    <div class="container mt-5 mb-3 pt-5">
    <p class="p-header">{{__('condit-idp1')}}</p> 
    <p class="p-text">{{__('condit-idp2')}} </p>
    <h3 class="p-header"> {{__('condit-idh31')}} </h3>
    <ul class="list-text">
        <li> {{__('condit-idli1')}} </li>
        <li> {{__('condit-idli2')}}</li>
        <li> {{__('condit-idli3')}}</li>
        <li> {{__('condit-idli4')}} </li>
        <li> {{__('condit-idli5')}}</li>
        <li> {{__('condit-idli6')}}</li>
        <li> {{__('condit-idli7')}}</li>
        <li> {{__('condit-idli8')}} </li>
        <li> {{__('condit-idli9')}}</li>
        <li> {{__('condit-idli10')}}</li>
        <li> {{__('condit-idli11')}}</li>
        <li> {{__('condit-idli12')}}</li>
        <li> {{__('condit-idli13')}}</li>
        <li> {{__('condit-idli14')}}</li>
        <li> {{__('condit-idli15')}}</li>
        <li> {{__('condit-idli16')}}</li>
        <li>
            <p class="p-header">{{__('condit-idp3')}} </p>
            <ol>
                <li> {{__('condit-idli20')}} </li>
        <li> {{__('condit-idli21')}}</li>
        <li> {{__('condit-idli22')}}</li>
        <p> {{__('condit-idp4')}}</p>
            </ol>
        </li>
    </ul>
	<!--/footer-->
	</div>
	    
    </div>    
  @endsection
@push('scripts')
     @include('sticky.layout.partials.popups')
@endpush
        