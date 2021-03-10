<div class="row " style="align-items: center; justify-content:center;background:#fff">

    <div class="col-5 text-left p-0" style="flex:0.41"><img
                src="https://stickyposts.net/sticky/admin/supplier/providerIMG/{{$sticky->provider->image}}"
                style='width: 100px;'></div>
    <div class="col-2 text-center p-0" style="flex:0.18 ;color:#320b82;"><h4 style="font-weight:900"> VS</h4></div>
    <div class="col-5 text-right p-0" style="flex:0.41"><img
                src="https://stickyposts.net/sticky/admin/supplier/providerIMG/{{$competitor->provider->image}}"
                style='width: 100px;'></div>

</div>

<div class="container mt-4 p-0" id="getdata">
    <div class="row my-2 px-3" style="align-items: center;justify-content:center">
        <div class="col-4 text-left p-0" style="flex:0.33;font-size:16px;color:#fff"><h4 style="color:#fff;"><span
                        style="font-weight:bold">{{$sticky->price}}</span><span style="font-size: 13px;"> /month </span>
            </h4></div>
        <div class="col-4 text-center p-0" style="flex:0.33;font-size:16px;color:#fff"><h5
                    style="font-weight:bold;color:#fff;font-size:13px"> Price</h5></div>
        <div class="col-4 text-right p-0" style="flex:0.33;font-size:16px;color:#fff"><h4 style="color:#fff;"><span
                        style="font-weight:bold">{{$competitor->price}}</span><span style="font-size: 13px;"> /month </span>
            </h4></div>
    </div>
    <div class="row my-2 px-3" style="align-items: center;justify-content:center">
        <div class="col-4 text-left p-0" style="flex:0.33;font-size:16px;color:#fff"><h4
                    style="color:#fff;">{{$sticky->users}}</h5></div>
        <div class="col-4 text-center p-0" style="flex:0.33;font-size:16px;color:#fff"><h5
                    style="font-weight:bold;color:#fff;font-size:13px"> Users</h5></div>
        <div class="col-4 text-right p-0 " style="flex:0.33;font-size:16px;color:#fff"><h5
                    style="color:#fff;font-size:13px">{{$competitor->users}}</h5></div>
    </div>
    <div class="row my-2 px-3" style="align-items: center;justify-content:center">
        <div class="col-4 text-left p-0" style="flex:0.33;font-size:16px;color:#fff"><h5
                    style="color:#fff;font-size:13px"> {{$sticky->social_profiles}}</h5></div>
        <div class="col-4 text-center p-0" style="flex:0.33;font-size:16px;color:#fff"><h5
                    style="font-weight:bold;color:#fff;font-size:13px"> Social profiles</h5></div>
        <div class="col-4 text-right p-0" style="flex:0.33;font-size:16px;color:#fff"><h5
                    style="color:#fff;font-size:13px"> {{$competitor->social_profiles}} </h5></div>
    </div>
    <div class="row my-2 px-3" style="align-items: center;justify-content:center">
        <div class="col-4 text-left p-0" style="flex:0.33;font-size:16px;color:#fff"><h5
                    style="color:#fff;font-size:13px">{{$sticky->schedule_posts}}</h5></div>
        <div class="col-4 text-center p-0" style="flex:0.33;font-size:16px;color:#fff"><h5
                    style="font-weight:bold;color:#fff;font-size:13px"> Schedule Posts </h5></div>
        <div class="col-4 text-right p-0" style="flex:0.33;font-size:16px;color:#fff"><h5
                    style="color:#fff;font-size:13px">{{$competitor->schedule_posts}}</h5></div>
    </div>
</div>