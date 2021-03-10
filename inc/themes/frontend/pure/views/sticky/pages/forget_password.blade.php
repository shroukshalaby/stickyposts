@extends('sticky.layout.master')
@push('head')
<style>
   .site-header.home-page-two
    {
        background:linear-gradient(-145deg, #320b82 0, #9c33c3 100%)
    }
    .bg-mauv-icon{
      background: #320B82;
      color: #fff;
    }
</style>

@endpush
@section('page-wrapper')

@endsection
@section('body')
	<div class="container mt-100 mb-5">
		<div class="row">
		 <div class="col-md-12 text-center mb-3">
		   <h3 class="fs-20">{{__('forgetPassword')}}</h3>
		   <p class="m-b-20">{{__('forgetPassword_subtext')}}</p> 
		 </div>   
		 <div class="col-md-6 mx-auto">	
		  	<div class="login-form box_shadow">
				<form class="actionLogin p-md-4 p-0" action="" data-hide-overplay='false'>
					<div class="form-group card">
						<div class="input-group">
						  	<div class="input-group-prepend">
						    	<span class="input-group-text p-l-20 p-r-0 bg-mauv-icon">
						    		<i class="far fa-envelope"></i>
						    	</span>
						  	</div>
						  	<input type="email" class="form-control h-30" name="email" autocomplete="off" placeholder="{{__('EnterEmail')}}">
						</div>
					</div>
					<div class="text-center">
						<button type="submit" class="btn btn-default w-100 footer-reg-btn"> {{__('install-idbtn25')}} </button>
					</div>
				</form>
			</div>
        </div>
		</div>
	</div>

@endsection
@push('scripts')

@endpush
        