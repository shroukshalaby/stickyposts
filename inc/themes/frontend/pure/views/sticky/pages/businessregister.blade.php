@extends('sticky.layout.master')
@push('head')
<style>
    .site-header.header-one {
    background: linear-gradient(-145deg, #320b82 0%, #9c33c3 100%);
}
.backgrounds {
    /*background:#Fff;*/
    background:linear-gradient(-145deg, #320b82 0, #9c33c3 100%);
    height: 500px;
    font-size:16px;
    border-radius:12px;
}
.heightInput {
    height:40px;
    border-radius:6px;
}
.input-group-prepend{
    display:flex;
}
</style>

@endpush

@section('page-wrapper')
@endsection
@section('body')
<div class="container my-5">
  <div class="row justify-content-center">
  <div class="col-md-5 mt-4 pt-4">
   <div class="card mt-4 backgrounds">
       <div class="text-center mt-4">
           <img src="{{get_theme_frontend_url('assets/sticky/images/logo-1-2.png')}}" width="250">
       </div>
      <div class="card-body py-md-5">
       <form _lpchecked="1">
        <!--  <div class="form-group my-4">-->
        <!--     <input type="text" class="form-control heightInput" id="name" placeholder="Name">-->
        <!--</div>-->
        <div class="input-group my-4" style="">
            <div class="input-group-prepend">
				<span class="input-group-text">
                    <i class="far fa-user"></i>
				</span>
            </div>
            <input type="text" class="form-control heightInput" id="name" placeholder="Enter Your Name">
        </div> 
        <!--<div class="form-group my-4">-->
        <!--     <input type="email" class="form-control heightInput" id="email" placeholder="Email">-->
        <!--</div>-->
            <div class="input-group my-4" style="">
                <div class="input-group-prepend">
				    <span class="input-group-text">
						<i class="far fa-envelope"></i>
					</span>
                </div>
                <input type="email" class="form-control heightInput" id="email" placeholder="Enter Your Email">
            </div>     
                          
   <!--<div class="form-group my-4">-->
   <!--  <input type="password" class="form-control heightInput" id="password" placeholder="Password">-->
   <!--</div>-->
               <div class="input-group my-4" style="">
                <div class="input-group-prepend">
				    <span class="input-group-text">
						<i class="fas fa-lock"></i>
					</span>
                </div>
                <input type="password" class="form-control heightInput" id="password" placeholder="Password">
            </div> 
   <!--<div class="form-group my-4">-->
   <!--   <input type="password" class="form-control heightInput" id="confirm-password" placeholder="Confirm Password">-->
   <!--</div>-->
                  <div class="input-group my-4" style="">
                <div class="input-group-prepend">
				    <span class="input-group-text">
						<i class="fas fa-key"></i>
					</span>
                </div>
                <input type="password" class="form-control heightInput" id="confirm-password" placeholder="Confirm Password">
            </div> 
   
   <div class="d-flex flex-row align-items-center justify-content-between">
                    <button class="btn btn-primary">Login</button>
                    <button class="btn btn-primary">Create Account</button>
          </div>
       </form>
     </div>
  </div>
</div>
</div>
</div>
@endsection

@push('scripts')


@endpush