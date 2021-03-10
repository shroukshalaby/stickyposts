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
		    <h2 class="text-mauv">{{__('Login')}} </h2> 
		 </div>   
		 <div class="col-md-6 mx-auto">	
			<div class="login-form box_shadow">
				<form class="actionLogin p-md-4 p-2" action="" data-hide-overplay='false' data-redirect="">
					<div class="form-group">
						<div class="input-group mb-3">
						  	<div class="input-group-prepend">
						    	<span class="input-group-text bg-mauv-icon">
						    		<i class="far fa-envelope"></i>
						    	</span>
						  	</div>
						  	<input type="email" class="form-control h-30" name="email" autocomplete="off" placeholder="{{__('EnterEmail')}}">
						</div>

						<div class="input-group">
						  	<div class="input-group-prepend">
						    	<span class="input-group-text bg-mauv-icon">
						    		<i class="fas fa-lock"></i>
						    	</span>
						  	</div>
						  	<input type="password" class="form-control h-30" name="password" autocomplete="off" placeholder="{{__('Password')}}">
						</div>
					</div>
					<div class="form-group mb-0 row">
						
						<div class="col-md-6 col-12 px-md-0 px-3 text-start">
							<label class="i-checkbox i-checkbox--tick i-checkbox--brand m-r-10">
								<input type="checkbox" name="remember" value="1"> {{__('Remember_me')}}<span></span>
							</label>
						</div>

						<div class="col-md-6 col-12 px-md-0 px-3 text-start">
							<a href="{{get_url('forget_password')}}" alt="">{{__('forgetPassword')}}</a>
						</div>
					</div>
					<div class="text-center">
						<button type="submit" class="btn btn-default w-100 footer-reg-btn"> {{__('Login')}} </button>
					</div>
				</form>
			</div>
        </div>
		</div>
	</div>

@endsection
@push('scripts')

@endpush
        