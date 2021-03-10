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
.h6-font-wei {
    font-weight: 600;
}
</style>
@endpush
@section('page-wrapper')

@endsection
@section('body')
    <div class="page-wrapper">
        
    <div id="page">
        <div class="container my-3 {{  getCurrentLangIdiom() == 'ar' ? 'text-right'  : '' }}">
            <p class="p-header pt-5 mt-5">{{__('ter-int')}} </p>
            <p class="p-text">{{__('ter-tha')}}</p>
            
            <h3 class="p-header">{{__('ter-com')}}</h3>
            <ul class="list-text">
                <li>{{__('ter-vis1')}} <span><a class="a-style" href="https://stickyposts.net/sticky/"> https://stickyposts.net </a></span>{{__('ter-vis2')}}</li>
                <li> {{__('ter-app')}} </li>
                <li>{{__('ter-pal')}}</li>
                <li>{{__('ter-ser')}}</li>
            </ul>
            <h6 class="p-text h6-font-wei"> {{__('ter-conv')}} </h6>
            <h3 class="p-header pt-1"> {{__('ter-f')}} </h3>
            <p class="p-text"> 
                {{__('ter-tp')}}
            </p>
            <h3 class="p-header"> {{__('ter-sec')}} </h3>
            <p class="p-text">
                {{__('ter-personal')}}</p>
            <p class="p-text"> 
                {{__('ter-personal-not')}}
            </p>
            <h3 class="p-header">{{__('ter-third')}}</h3>
            <p class="p-text">
                {{__('ter-acc-inf')}}
            </p>
            <p class="p-text"> {{__('ter-categ')}} </p>
            <h3 class="p-header"> {{__('ter-info-provi')}} </h3>
            <p class="p-text">
                {{__('ter-acc-info')}}
            </p>
            <p class="p-text">
                {{__('ter-bill')}}
            </p>
            <p class="p-text">
                {{__('ter-other')}}
            </p>
            <h3 class="p-header">{{__('ter-collect')}}-</h3>
            <p class="p-text">
                {{__('ter-data-log')}}
            </p>
            <p class="p-text">
                {{__('ter-loc-cookies')}}
            </p>
            <h3 class="p-header"> {{__('ter-fourth')}} </h3>	
            <p class="p-text">
                {{__('ter-content')}}
            </p>	
            <h3 class="p-header"> {{__('ter-how-use')}} </h3>
            <p class="p-text">
                {{__('ter-control')}} 
            </p>
            <ol class="list-text">
                <li>{{__('ter-iden')}}</li>
                <li> {{__('ter-sign-in')}}</li>
                <li>{{__('ter-provi')}}</li>
                <li>{{__('ter-include')}}</li>
                <li>{{__('ter-enable')}}</li>
                <li> {{__('ter-let')}} </li>
                <li>{{__('ter-check')}}
                </li>
                <li> {{__('ter-contact')}} </li>
                <li> {{__('ter-check-ser')}} </li>
                <li> {{__('ter-sale')}} </li>
                <li> {{__('ter-improve')}} </li>
            </ol>
            
            <h3 class="p-header"> {{__('ter-use-data')}} :</h3>
            <ol class="list-text">
                <li>  {{__('ter-better')}} .</li>
                <li> {{__('ter-analy')}} </li>
                <li> {{__('ter-agg')}} </li>
                <li> {{__('ter-ser-safe')}} </li>
                <li> {{__('ter-verify')}} </li>
            </ol>
             
            
            <h3 class="p-header"> {{__('ter-legal')}} -</h3>
            <p class="p-text">
                {{__('ter-basis')}}
            </p>
            <ul class="list-text">
                
                <li> {{__('ter-consent')}} </li>
                
                <li> {{__('ter-we-need')}} </li>
                <li> {{__('ter-rely')}} </li> 
                <li> {{__('ter-if-ask')}} </li> 
            </ul>
            <p class="p-text">
                {{__('ter-access')}}
            </p>
            <p class="p-text">
                {{__('ter-org-hist')}}
            </p>
             
            
            <p class="p-text">
                {{__('ter-depend')}}
                <br> {{__('ter-controller')}}
            </p>
            <ul class="list-text">
                <li> {{__('ter-condition')}} </li>
                <li> {{__('ter-communi')}} </li>
                <li> {{__('ter-restrict')}} </li>
                <li> {{__('ter-transfer')}} </li>
            </ul>
            <p class="p-text">
                {{__('ter-wish')}}
            </p>
             
            
            <h3 class="p-header"> {{__('ter-data-proc')}} </h3>
            <p class="p-text">
                {{__('ter-app-dir')}}
            </p>
            <ul class="list-text">
                <li> {{__('ter-user-gen')}} </li>
                <li> {{__('ter-con-detail')}} </li>
                <li> {{__('ter-add-ind')}} </li>
                <li> {{__('ter-regard')}} </li>
            </ul>
            <p class="p-text">
                {{__('ter-soc-med')}}
            </p>
            <h3 class="p-header"> {{__('ter-soc-net')}} </h3>
            <p class="p-text">
                {{__('ter-soc-net-ter')}}
            </p>
             
            <h3 class="p-header">
                {{__('ter-correct')}}
            </h3>
            <ul class="list-text">
                
                <li> {{__('ter-be-aware')}} </li>
                
                <li> {{__('ter-per-seek')}} </li>
                 
            </ul>
            <h3 class="p-header"> {{__('ter-by-law')}} </h3>
            <p class="p-text">
                {{__('ter-simply')}}
            </p>
             
            
             
            <h4 class="p-header"> {{__('ter-privacy')}} </h4>
            <ol class="list-text">
                <li> {{__('ter-except')}} </li>
                <li> {{__('ter-guidance')}} </li>
                <li> {{__('ter-providers')}} </li>
                <li> {{__('ter-dist-auth')}} </li>
                <li> {{__('ter-bel-reason')}} </li>
                <li> {{__('ter-bel-nec')}} </li>
                <li> {{__('ter-investigate')}} </li>
                <li> {{__('ter-parent-com')}} </li>
                <li> {{__('ter-acquire')}} </li>
            </ol>
            <h3 class="p-header"> {{__('ter-keep-per')}} </h3>
            <ul class="list-text">
                <li> {{__('ter-keep-data')}} </li>
                <li> {{__('ter-res-cont')}} </li>
                <li> {{__('ter-pls-note')}} </li>
                <li> {{__('ter-after')}} </li>
            </ul>
            <h3 class="p-header"> {{__('ter-protect-info')}} </h3>
            <p class="p-text">
                {{__('ter-follow')}}
            </p>
             
            <h3 class="p-header"> {{__('ter-int-loc')}} </h3>
            <p class="p-text">
                {{__('ter-address')}}
            </p>
            <p class="p-text">
                {{__('ter-provide-egy')}}
            </p>
             
            <p class="p-text">
                {{__('ter-using-ser')}}
            </p>
            <h3 class="p-header"> {{__('ter-cookies')}} </h3>
            <p class="p-text">
                {{__('ter-vis-interact')}}
            </p>
             
            <h3 class="p-header"> {{__('ter-options-obt')}} </h3>
            <ol class="list-text">
                <li> {{__('ter-content-process')}} </li>
                <li> {{__('ter-market-mail')}} </li>
                <li> {{__('ter-on-demand')}} </li>
            </ol>
  
            <h3 class="p-header"> {{__('ter-child')}} </h3>
            <p class="p-text">
                {{__('ter-not-intended')}} 
            </p>
            <h3 class="p-header"> {{__('ter-change-privacy')}} </h3>
            <p class="p-text">
                {{__('ter-management')}}
            </p>
        </div>
    </div>
        
    </div>    
  @endsection
@push('scripts')
     @include('sticky.layout.partials.popups')
@endpush
        