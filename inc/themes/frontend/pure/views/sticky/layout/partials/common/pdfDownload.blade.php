@php
    $data_arr = [
        'host' => $_SERVER['HTTP_HOST'],
        'uri' => $_SERVER['REQUEST_URI'],
        'project' => 'stickyposts',
        'language' => getCurrentLangIdiom(),
        'resource_type' => 'resource',
        'zone' => 'page_download',
        'category' => 'page',
        'params' => []
    ];
    $response = callAPI('https://crmmrkt.com/api/resources/get/', 'POST', $data_arr);
    $response = json_decode($response, true);
    $total_count = 0;
    if ($response['result'] != 'success')
        echo $response['error_message'];
    else {

        $file_id = $response['data']['id'];
        $file_url = $response['data']['file_url'];
        $file_img = $response['data']['cover_landscape_url'];
        $total_count = $response['data']['total_downloads'];
    }
@endphp

<div class="card" id="downForm" style="background: linear-gradient(275deg, #5e2298, #320b82);">
    <div class="card-header text-center p-0">
        <div class="py-1 text-center text-light" dir="ltr">

            <p style="margin:0;font-size:12px;color:#fff">{{__('Downloadby')}}<span style="margin-left:10px">[<?php echo $total_count ?>]</span><!--Kholy dinamic--> </p>
        </div>

    </div>
    <div class="card-body p-1 text-light pricing-style-one">
        <div class="text-center mb-1">
            <img src="<?php echo $file_img ?? '';?>" width="100%">
        </div>
        <ul class="nav nav-pills tab-title mb-1 row justify-content-center" id="pills-tab" role="tablist">
            <li class="nav-item col-4 px-0">
                <a class="nav-link active w-100 text-center px-0" id="pills-signup-tab" data-toggle="pill" href="#pills-signup" role="tab" aria-controls="pills-signup" aria-selected="true" style="line-height: 1.3;padding: 3px 10px;font-size: 15px;">{{__('SIgnUp')}}</a>
            </li>
            <li class="nav-item col-4 px-0">
                <a class="nav-link w-100 text-center px-0" id="pills-signin-tab" data-toggle="pill" href="#pills-signin" role="tab" aria-controls="pills-signin" aria-selected="false" style="line-height: 1.3;padding: 3px 10px;font-size: 15px;">{{__('Login')}}</a>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-signup" role="tabpanel" aria-labelledby="pills-signup-tab">
                <form style="direction:ltr" method="post" class="formres">
                    <input type="hidden" name="came_from" value="<?php echo $_SERVER['REQUEST_URI'];?>">
                    <input type="hidden" name="page" value="<?php echo $file_id ?? '';?>">
                    <input type="hidden" name="lang" value="en">
                    <input type="hidden" name="assigned_employee" value="<?= $_GET['assigned_employee'] ?? ''; ?>">
                    <input type="hidden" name="activity" value="<?= $_GET['activity'] ?? ''; ?>">
                    <input type="hidden" name="task" value="<?= $_GET['task'] ?? ''; ?>">
                    <div class="form-group row mb-1 mx-0" style="align-items:center;justify-content:center">
                        <div class="col-4 p-0 pl-2 text-start">
                            <label style="margin: 0;font-size:10px"> <span style="color:red">*</span>{{__('FirstName')}}</label>
                        </div>
                        <div class="col-8 p-0">
                            <input type="text" class="form-control" name="fn7" required="" style="padding:0 5px!important; height:24px ;line-height:1;font-size:10px">
                        </div>
                    </div>
                    <div class="form-group row mb-1 mx-0" style="align-items:center ;justify-content:center">
                        <div class="col-4 p-0 pl-2 text-start">
                            <label style="margin: 0;font-size:10px"> <span style="color:red">*</span>{{__('LastName')}}</label>
                        </div>
                        <div class="col-8 p-0">
                            <input type="text" class="form-control" name="ln7" required="" style="padding:0 5px!important; height:24px ;line-height:1;font-size:10px">
                        </div>
                    </div>
                    <div class="form-group row mb-1 mx-0" style="align-items:center;justify-content:center">
                        <div class="col-4 p-0 pl-2 text-start">
                            <label style="margin: 0;font-size: 10px;"> <span style="color:red">*</span>{{__('E-mail')}}</label>
                        </div>
                        <div class="col-8 p-0">
                            <input type="email" class="form-control" name="em7"
                                   style="padding:0 5px!important; height:24px ;line-height:1;font-size:10px"
                                   required="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                        </div>
                    </div>
                    <div class="form-group row mb-1 mx-0" style="align-items:center;justify-content:center">
                        <div class="col-4 p-0 pl-2 text-start">
                            <label style="margin: 0;font-size:10px"> <span style="color:red">*</span>{{__('Password')}}  </label>
                        </div>
                        <div class="col-8 p-0">
                            <input type="password" class="form-control" id="txtPassword" name="pass" required=""
                                   style="padding:0 5px!important; height:24px ;line-height:1;font-size:10px">
                        </div>
                    </div>
                    <div class="form-group row mb-1 mx-0" style="align-items:center;justify-content:center">
                        <div class="col-4 p-0 pl-2 text-start">
                            <label style="margin: 0;font-size:9px"> <span style="color:red">*</span>{{__('ConfirmPass')}}</label>
                        </div>
                        <div class="col-8 p-0">
                            <input type="password" class="form-control" id="txtConfirmPassword" name="cpass" required="" style="padding:0 5px!important; height:24px ;line-height:1;font-size:9px">
                        </div>
                    </div>
                    <div class="form-group row mb-1 mx-0" style="align-items:center ;justify-content:center">
                        <div class="col-4 p-0 pl-2 text-start">
                            <label style="margin: 0;font-size: 12px;" for=""><span style="color:red">*</span>{{__('Country')}}</label>
                        </div>
                        <div class="col-8 p-0">
                            <select class="form-control" name="country" required style="height: 24px;padding: 0 5px; font-size: 13px;">
                                @include('sticky.layout.partials.helpers.countries')
                            </select>
                        </div>
                    </div>
                    <div class="form-group m-0"><p id="span" style="margin:0;color:#;font-size:10px"></p></div>
                    <div class="form-group mb-1 row justify-content-center">
                        <button class="submit mt-2" type="submit" style="width:80%;border-radius: 5px;text-transform:capitalize;font-size: 17px; {{  getCurrentLangIdiom() == 'fr' ? 'font-size: 15px;'  : '' }}" name="submit" id="sub">{{__('DownloadNow')}}</button>
                    </div>
                </form>
            </div>
            <div class="tab-pane fade" id="pills-signin" role="tabpanel" aria-labelledby="pills-signin-tab">
                <form style="direction:ltr;" class="login" method="post">
                    <input type="hidden" name="lang" value="en">
                    <input type="hidden" name="page" value="<?php echo $file_id ??  '';?>">
                    <div class="form-group row mb-1 mx-0" style="align-items:center;justify-content:center">
                        <div class="col-4 p-0 pl-2 text-start">
                            <label style="margin: 0;font-size: 11px;"> <span style="color:red">*</span>{{__('E-mail')}}</label>
                        </div>
                        <div class="col-8 p-0">
                            <input type="email" class="form-control" name="mail" style="padding:0 5px!important; height:24px ;line-height:1;font-size:10px" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                        </div>
                    </div>
                    <div class="form-group row mb-1 mx-0" style="align-items:center;justify-content:center">
                        <div class="col-4 p-0 pl-2 text-start">
                            <label style="margin: 0;font-size:12px"> <span style="color:red">*</span> {{__('Password')}} </label>
                        </div>
                        <div class="col-8 p-0">
                            <input type="password" class="form-control" id="" name="pass" required style="padding:0 5px!important; height:24px ;line-height:1;font-size:10px">
                        </div>
                    </div>
                    <div class="form-group row mb-1 mx-0" style="align-items:center;justify-content:center">
                        <div class="col-12 text-center px-4">
                            <a href="{{get_url('foregt_password')}}" style="color: #fff;text-decoration: underline;">{{__('forgetPassword')}}</a>
                        </div>
                    </div>
                    <div class="form-group mb-1 row justify-content-center">
                         <button class="mt-2 col-6" type="submit" id="sub" name="login"
                                style="padding:3px 0 ;line-height: 1.3;font-size: 17px;background: linear-gradient(90deg,#42b0ff,#4262ff) !important;border: none;border-radius: 3px;color: #fff;">{{__('Login')}}   
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <div class="card-footer text-center text-light p-0" style="font-size: 9px;"><span style="color:#fff;margin-right:10px">( <span style="color:#f00">*</span> )</span>{{__('required_inputs')}}</div>
</div>

