@extends('sticky.layout.master')
@push('head')

    <link rel="stylesheet" href="{{get_theme_frontend_url('assets/sticky/css/style_english.css')}}">
    <link rel="stylesheet" href="{{get_theme_frontend_url('assets/sticky/css/mobile-style.css')}}">
    <link rel="stylesheet" href="{{get_theme_frontend_url('assets/sticky/css/countrycode/css/intlTelInput.css')}}">
    <link rel="stylesheet" href="{{get_theme_frontend_url('assets/sticky/css/countrycode/css/demo.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">
    <style>
        @media only screen and (min-width: 768px) {

        }

        .iti__flag-box, .iti__country-name {
            color: #000;
        }

        .hero {

            /*align-items: center;*/
            /*display: flex;*/
            /*position: relative;*/
            color: #fff;
            /*color: var(--white-color);*/
            background-repeat: no-repeat;
            background-size: cover;

            padding: 42px 0 50px;
            /*overflow: hidden;*/
            background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url({{get_theme_frontend_url('assets/sticky/images/instructor/Banner.jpg')}});
        }

        .form-control {
            height: calc(1.5em + .75rem + 2px);

        }

        .custom-control-input:checked ~ .custom-control-label::before {
            border-color: #c89543;
            background: linear-gradient(#c89543, #8a5f32) !important;
        }

        .codycountry .form-control {
            padding: 6px 6px 6px 52px !important;
        }

        .custom-checkbox .custom-control-input:indeterminate ~ .custom-control-label::before {
            border-color: #adb5bd;
            background-color: #fff;
        }

        .form-group {
            margin-bottom: 1rem;
        }

        .features ul li {
            align-items: center;
            display: flex;
            margin-bottom: 8px;
        }

        @media (max-width: 525px) {
            h1 {
                font-size: 1.5rem;
                text-align: center;
            }

            h2 {
                font-size: 1.5rem;
                text-align: center;
            }

            p {
                font-size: 16px;
            }

            p {
                margin-bottom: 8px;
            }

            ul {
                padding-left: 16px;
            }

            li {
                font-size: 14px;
            }

            .hero {
                background-position: center;
            }
        }

        @media (min-width: 525px) {
            h1 {
                font-size: 2.25rem;
            }

            p {
                font-size: 20px;
            }

            p {
                margin-bottom: 8px;
            }

            ul {
                padding-left: 40px;
            }

            li {
                font-size: 16px;
            }

            .hero {
                background-position: 50%;
            }
        }

        .site-header.header-one {
            background: linear-gradient(-145deg, #320b82 0%, #9c33c3 100%);
        }

        .instructor_form_register {
            background: linear-gradient(-145deg, #320b82 0%, #9c33c3 100%);
            border-radius: 2px;
        }

        .form-inputs-style {
            padding: 25px;
        }

        .content-title-box {
            text-align: center;
            border-bottom: 1px solid #fff;
            padding: 10px 0;
        }

        .content-title-box .title {
            font-size: 22px;
            font-weight: 600;
        }

        .no-padding {
            padding: 0;
        }

        @media (max-width: 567px) {
            .no-padding {
                padding: 0 15px !important;
            }
        }

        .btn-sign-up {
            color: #fff;
            background-color: #ec5252;
            border: 1px solid #ec5252;
            border-radius: 2px !important;
        }

        .btn {
            padding: 11px 12px;
            font-size: 14px;
            border-radius: 2px;
            line-height: 1.35135;
            font-weight: 600;
            border-radius: 5px !important;
        }

        .pt-md-60 {
            padding-top: 60px;
        }

        .mar-wid {
            width: 70%;
            margin-bottom: 20px;
        }

        .input-cust {
            padding: 5px 15px;
            font-size: 1.5rem;
            border-radius: 5px;
            background: linear-gradient(90deg, #42b0ff, #4262ff);
            color: #fff;
            border: none;
        }

        .p-mar-fo {
            font-size: 12px;
            margin-left: 12px;
        }

        .h2-colo {
            color: #320b82;
        }
    </style>
@endpush
@php
    if(isset($_GET['event'])){echo '<input type="hidden" class="codedone" value="'.$msg.'">';}
          if(isset($_GET['learn'])){echo '<input type="hidden" class="codedone" value="'.$msg.'">';}
          if(isset($_GET['enterprice'])){echo '<input type="hidden" class="codedone" value="'.$msg.'">';}
          if(isset($_GET['developer_activation'])){echo '<input type="hidden" class="codedone" value="'.$msg.'">';}
          if(isset($_GET['training_activation'])){echo '<input type="hidden" class="codedone" value="'.$msg.'">';}
          if(isset($_GET['newsletter'])){echo '<input type="hidden" class="codedone" value="'.$msg.'">';}

@endphp


@section('page-wrapper')
    <div class=" {{  getCurrentLangIdiom() == 'ar' ? ' text-right'  : '' }}">

        <section class="hero">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-12 no-padding">
                        <h1 class="text-white mb-md-5 mb-3 mt-5 ml-0 text-start">{{ __('instructor_expert') }}</h1>
                    </div>
                    <div class="col-md-5 col-12 px-md-0 px-3 pt-md-60 pt-0 text-start">
                        <img src="https://stickyposts.net/sticky/images/logo-1-2.png" alt="Awesome Image"
                             class="mar-wid">
                        <p class="text-white {{  getCurrentLangIdiom() == 'ar' ? 'pl-3'  : 'pr-3' }}">{{ __('instructor_grow') }}</p>

                        <div class="row">
                            <div class="col-md-8 mb-md-0 my-3">
                                <a href="https://stickyposts.net/LMS/"
                                   class="btn btn-sign-up w-100">{{ __('instructor_online') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-12 no-padding">
                        <form class="instructor_form_register">
                            <div class="content-title-box">
                                <div class="title text-white">{{ __('instructor_register') }}</div>
                                <div class="subtitle text-white">{{ __('instructor_sign') }}</div>
                            </div>
                            <div class="form-inputs-style">
                                <input type="hidden" name="lang" value="en">
                                <div class="form-group form-row mb-2 mx-0 row">

                                    <span class="text-danger">*</span>

                                    <div class="col">
                                        <input class="form-control" placeholder="{{ __('fullname') }}" type="text"
                                               name="name" required="">
                                    </div>
                                </div>

                                <div class="form-group form-row mb-2 mx-0">
                                    <span class="text-danger">*</span>

                                    <div class="col">
                                        <input class="form-control" placeholder="{{ __('instructor_mail') }}"
                                               type="email" name="email" required="">
                                    </div>
                                </div>


                                <div class="form-group form-row mb-2 mx-0">
                                    <span class="text-danger">*</span>
                                    <div class="col">
                                        <select class="form-control" name="country">
                                            @include('sticky.layout.partials.helpers.countries')

                                        </select>
                                    </div>


                                </div>
                                <div class="form-group form-row mb-2 mx-0">
                                    <span class="text-danger">*</span>
                                    <div class="col">

                                        <input type="text" name="phone" class="form-control"
                                               id="validationDefaultUsername" placeholder="{{__('dev-num')}}"
                                               aria-describedby="inputGroupPrepend2" required>
                                    </div>

                                </div>
                                <div class="form-group form-row mb-2 mx-0">
                                    <span class="text-danger">*</span>

                                    <div class="col">
                                        <select class="custom-select" name="category" required="">
                                            <option value="" disabled selected> {{ __('instructor_type') }} </option>
                                            <option>{{ __('instructor_influencer') }}</option>
                                            <option>{{ __('instructor_speaker') }}</option>
                                            <option>{{ __('instructor_instructor') }}</option>
                                            <option>{{ __('instructor_pr') }}</option>
                                            <option>{{ __('instructor_digital') }}</option>
                                            <option>{{ __('instructor_other') }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group form-row mb-2 mx-0">
                                    <span class="text-danger">*</span>

                                    <div class="col">
                                        <select class="custom-select" name="position" required="">
                                            <option value="" disabled selected> {{ __('instructor_choose') }}</option>
                                            <option>{{ __('instructor_president') }}</option>
                                            <option>{{ __('instructor_exec') }}</option>
                                            <option>{{ __('instructor_senior') }}</option>
                                            <option>{{ __('instructor_vice') }}</option>
                                            <option>{{ __('instructor_assistant') }}</option>
                                            <option>{{ __('instructor_assocative') }}</option>
                                            <option>{{ __('instructor_senior') }}</option>
                                            <option>{{ __('instructor_director') }}</option>
                                            <option>{{ __('instructor_assistant_director') }}</option>
                                            <option>{{ __('instructor_manager') }}</option>
                                            <option>{{ __('instructor_middle') }}</option>
                                            <option>{{ __('instructor_empolyee') }}</option>
                                            <option>{{ __('instructor_freelancer') }}</option>
                                            <option>{{ __('instructor_contract') }}</option>
                                            <option>{{ __('instructor_temporary') }}</option>
                                            <option>{{ __('instructor_contingent') }}</option>
                                            <option>{{ __('instructor_part') }}</option>
                                            <option>{{ __('instructor_other') }}</option>
                                        </select>
                                    </div>

                                </div>
                                <p class="text-light p-mar-fo">(<span
                                            class="text-danger"> * </span>{{ __('instructor_all') }}</p>
                                <div class="form-group form-row mx-0">
                                    <input class="form-control input-cust" type="submit"
                                           value="{{ __('temp-register')}}">
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </section>
        <section class="features">
            <div class="container pt-4 pb-2">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-12">
                        <h2 class="mb-3 font-weight-bold text-center h2-colo">{{ __('instructor_features') }}</h2>
                        <ul class="p-0">
                            <div class="row">
                                <div class="col-md-6 col-12 {{  getCurrentLangIdiom() == 'ar' ? ' text-right'  : '' }}">
                                    <li>
                                        <img class="img-fluid col-md-2 col-3 pr-md-0 pr-3 pl-md-2 pl-0"
                                             src="{{get_theme_frontend_url('assets/sticky/images/instructor/Demonstrate-expertise.png')}}">
                                        <span class="col-md-11 col-9 pl-md-1 pl-0">{!! __('instructor_sharing')!!}</span>
                                    </li>
                                    <li>
                                        <img class="img-fluid col-md-2 col-3 pr-md-0 pr-3 pl-md-2 pl-0"
                                             src="{{get_theme_frontend_url('assets/sticky/images/instructor/Support Society .jpg')}}">
                                        <span class="col-md-11 col-9 pl-md-1 pl-0">{{ __('instructor_support') }}</span>
                                    </li>
                                    <li>
                                        <img class="img-fluid col-md-2 col-3 pr-md-0 pr-3 pl-md-2 pl-0"
                                             src="{{get_theme_frontend_url('assets/sticky/images/instructor/Online-Publicity.png')}}">
                                        <span class="col-md-11 col-9 pl-md-1 pl-0">{{ __('instructor_media_channels') }}</span>
                                    </li>
                                    <li>
                                        <img class="img-fluid col-md-2 col-3 pr-md-0 pr-3 pl-md-2 pl-0"
                                             src="{{get_theme_frontend_url('assets/sticky/images/instructor/Be part of our community.jpg')}}">
                                        <span class="col-md-11 col-9 pl-md-1 pl-0">{{ __('instructor_be_part') }}</span>
                                    </li>
                                    <li>
                                        <img class="img-fluid col-md-2 col-3 pr-md-0 pr-3 pl-md-2 pl-0"
                                             src="{{get_theme_frontend_url('assets/sticky/images/instructor/Email announcement of your participation.jpg')}}">
                                        <span class="col-md-11 col-9 pl-md-1 pl-0">{{ __('instructor_announce') }}</span>
                                    </li>

                                </div>
                                <div class="col-md-6 col-12 {{  getCurrentLangIdiom() == 'ar' ? ' text-right'  : '' }}">
                                    <li>
                                        <img class="img-fluid col-md-2 col-3 pr-md-0 pr-3 pl-md-2 pl-0"
                                             src="{{get_theme_frontend_url('assets/sticky/images/instructor/Online-Publicity.png')}}">
                                        <span class="col-md-11 col-9 pl-md-1 pl-0">{{ __('instructor_publicity') }}</span>
                                    </li>
                                    <li>
                                        <img class="img-fluid col-md-2 col-3 pr-md-0 pr-3 pl-md-2 pl-0"
                                             src="{{get_theme_frontend_url('assets/sticky/images/instructor/Build-instant-trust.jpg')}}">
                                        <span class="col-md-11 col-9 pl-md-1 pl-0">{{ __('instructor_instant') }}</span>
                                    </li>
                                    <li>
                                        <img class="img-fluid col-md-2 col-3 pr-md-0 pr-3 pl-md-2 pl-0"
                                             src="{{get_theme_frontend_url('assets/sticky/images/instructor/Boost promotional Opportunities.jpg')}}">
                                        <span class="col-md-11 col-9 pl-md-1 pl-0">{{ __('instructor_promo') }}</span>
                                    </li>
                                    <li>
                                        <img class="img-fluid col-md-2 col-3 pr-md-0 pr-3 pl-md-2 pl-0"
                                             src="{{get_theme_frontend_url('assets/sticky/images/instructor/Raise-awareness.jpg')}}">
                                        <span class="col-md-11 col-9 pl-md-1 pl-0">{{ __('instructor_added') }}</span>
                                    </li>
                                    <li>
                                        <img class="img-fluid col-md-2 col-3 pr-md-0 pr-3 pl-md-2 pl-0"
                                             src="{{get_theme_frontend_url('assets/sticky/images/instructor/Digital-and-social-media.png')}}">
                                        <span class="col-md-11 col-9 pl-md-1 pl-0">{{ __('instructor_join') }}</span>
                                    </li>
                                </div>
                            </div>


                        </ul>
                    </div>

                </div>
            </div>
        </section>

    </div>



@endsection



@section('body')


@endsection


@push('scripts')
@include('sticky.layout.partials.common.sweetalert')
    @include('sticky.layout.partials.common.inboundLeadScript',['selector'=>'.instructor_form_register','type'=>'instructor'])

@endpush
