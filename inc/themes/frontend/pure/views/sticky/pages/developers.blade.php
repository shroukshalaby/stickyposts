@extends('sticky.layout.master')
@push('head')
    <style>
        .site-header {
            background: linear-gradient(-145deg, #320b82 0%, #9c33c3 100%);
        }

        .header-btn {
            background: #fff;
        }

        .nav-link {
            padding: 0 8px;
        }

        .input-group-text, .form-control {
            border-radius: 3px !important;
            height: 30px;
        }

        .fs-13 {
            font-size: 13px;
        }

        .box-shadow {
            -webkit-box-shadow: 0px 0px 19px -4px rgba(47, 22, 126, 1);
            -moz-box-shadow: 0px 0px 19px -4px rgba(47, 22, 126, 1);
            box-shadow: 0px 0px 19px -4px rgba(47, 22, 126, 1);
            padding: 10px;
            border-radius: 5px;
        }

        label {
            font-size: 15px;
        }

        .input-group-text {
            background: linear-gradient(-145deg, #320b82 0%, #9c33c3 100%);
            color: #fff;
            width: 30px;
            align-items: center;
            justify-content: center;
            padding: 0px;
        }

        .input-group-text i {
            color: #fff;
        }

        .submit {
            background: linear-gradient(-145deg, #320b82 0%, #9c33c3 100%);
            padding: 2px 20px;
            height: auto;

        }

        p {
            margin-bottom: 0.5rem;

        }

        .close:not(:disabled):not(.disabled):focus, .close:not(:disabled):not(.disabled):hover {
            opacity: 1;
        }

        /*start add classss*/
        .blade-color1 {
            color: #320b82 !important;
            font-weight: 800;
            line-height: 2;
        }

        .blade-color2 {
            color: red;
            background: white;
            margin-top: auto;
        }

        .blade-font1 {
            font-size: 10px;
        }

        .blade-color3 {
            color: red;
        }

        .blade-color4 {
            background: linear-gradient(275deg, #5e2298, #320b82);
        }

        .blade-width1 {
            width: 100%;
        }

    </style>
@endpush
@section('page-wrapper')

@endsection
@section('body')
    <div class="page-wrapper {{  getCurrentLangIdiom() == 'ar' ? 'text-right'  : '' }}">
        <div class="container mt-5 py-5">
            <h2 class="text-center text-dark blade-color1"><strong>{{__('dev-strong')}}</strong></h2>
            <div class="row justify-content-center my-row">
                <div class="col-lg-3 col-md-3 col-sm-4 text-start my-3">
                    <div class="box-shadow">
                        <form class="addDeveloper" method="post">
                            <div class="form-row mb-0">
                                <div class="col-md-12 mb-2">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="blade-color2">*</span> <span class="input-group-text"
                                                                                      id="inputGroupPrepend2"><i
                                                        class="fas fa-user"></i></span>
                                        </div>
                                        <input type="text" name="name" class="form-control"
                                               id="validationDefaultUsername" placeholder="{{__('dev-Name')}}"
                                               aria-describedby="inputGroupPrepend2" required>

                                    </div>
                                </div>
                                <div class="col-md-12 mb-2">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="blade-color2">*</span> <span class="input-group-text"
                                                                                      id="inputGroupPrepend2"><i
                                                        class="fas fa-home"></i></span>
                                        </div>
                                        <input type="text" name="company" class="form-control"
                                               id="validationDefaultUsername" placeholder="{{__('dev-Company')}}"
                                               aria-describedby="inputGroupPrepend2" required>

                                    </div>
                                </div>
                                <div class="col-md-12 mb-2">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="blade-color2">*</span> <span class="input-group-text"
                                                                                      id="inputGroupPrepend2">@</span>
                                        </div>
                                        <input type="email" name="email" class="form-control"
                                               id="validationDefaultUsername" placeholder="{{__('dev-mail')}}"
                                               aria-describedby="inputGroupPrepend2"
                                               required>

                                    </div>
                                </div>
                                <div class="col-md-12 mb-2">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="blade-color2">*</span> <span class="input-group-text"
                                                                                      id="inputGroupPrepend2"><i
                                                        class="fas fa-home"></i></span>
                                        </div>

                                        <select class="form-control py-0" name="country">
                                            @include('sticky.layout.partials.helpers.countries')

                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-2">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="blade-color2">*</span> <span class="input-group-text"
                                                                                      id="inputGroupPrepend2"><i
                                                        class="fas fa-phone"></i></span>
                                        </div>
                                        <input type="text" name="phone" class="form-control"
                                               id="validationDefaultUsername" placeholder="{{__('dev-num')}}"
                                               aria-describedby="inputGroupPrepend2" required>

                                    </div>
                                    <sm class="blade-font1"><span class="blade-color3">( * )</span>{{__('dev-us.')}}
                                    </sm>
                                </div>
                            </div>
                            <label for="validationTextarea">{{__('dev-to')}}</label>
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" id="customControlValidation2"
                                       value="get-in-contact-with-our-technical-team" name="reqType" required>
                                <label class="custom-control-label fs-13"
                                       for="customControlValidation2">{{__('dev-get')}}</label>
                            </div>
                            <div class="custom-control custom-radio mb-3">
                                <input type="radio" class="custom-control-input" id="customControlValidation3"
                                       value="get-sticky-posts-api" name="reqType" required>
                                <label class="custom-control-label fs-13"
                                       for="customControlValidation3">{{__('dev-api')}}</label>
                            </div>
                            <button class="submit w-100" type="submit" name="developer">{{__('dev-re')}}</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-7 text-start my-auto  mt-3">
                    <div class="card box-shadow blade-color4">
                        <div class="blade-width1">
                            <img src="https://stickyposts.net/sticky/images/developer.jpg" class="img-fluid">
                        </div>
                        <div class="card-body text-light p-1">
                            <h6 class="mb-0 py-2">{{__('dev-be')}}</h6>
                            <p>{{__('dev-app')}} </p>
                            <p class="mb-0">{{__('dev-app2')}}</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div><!-- /.page-wrapper -->

@endsection

@include('sticky.layout.partials.common.sweetalert')


@push('scripts')
    @include('sticky.layout.partials.common.inboundLeadScript',['selector'=>'.addDeveloper','type'=>'developers'])

@endpush
        