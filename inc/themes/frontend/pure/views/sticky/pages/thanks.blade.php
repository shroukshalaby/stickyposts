@extends('sticky.layout.master')

@push('head')
<style>
.site-header{
    background:linear-gradient(-145deg, #320b82 0%, #9c33c3 100%);
}
.block-title{
    color: #320b82;
    font-size: 46px;
    font-weight: 400;
}
.owl-carousel{
    display:block;
}
#body{
    position:inherit !important;
}
@media(max-width:567px){
    .block-title {
    font-size: 29px;
}
.owl-carousel .owl-item img {
    width: 100%!important;
}
}
    .f-w-500{
        font-weight: 500;
    }
    .colo-b{
        color: #320b82;
    }
    .f-w-b{
        font-weight: bold;
    }
    .mar-t-40{
        margin-top:40px;
    }
    .m-a{
        margin: auto;
    }
    .hei-100{
        height: 100%;
    }
    .hei-261{
        height: 261px;
    }
    .pad-15-15-0-15{
        padding: 15px 15px 0px 15px;
    }
    .wid-80{
        width: 80%;
    }
    .wid-100{
        width: 100%;
    }
    .pad-2-25{
        padding: 2px 25px;
    }
    .mar-t-23{
        margin-top: 23px !important;
    }
    .colo-w{
        color: #fff;
    }
    .back-l{
        background: linear-gradient(275deg, #5e2298, #320b82);
    }
    .mar-t-15{
        margin-top: 15px;
    }
    .m-0{
            margin: 0;
        }
    .f-s-12{
            font-size: 12;
        }
    .mar-r-10{
        margin-right:10px;
    }
    .mar-t-91{
        margin-top: 91px !important;
    }
    .wid-150{
        width:150px;
    }
    .pad-t-60{
            padding-top: 60px;
        }
    .backg-b{
        background: rgba(0,0,0,0.7);
    }
    .pos-abs{
            position: absolute;
        }
    .wid-54{
        width: 54px;
    }
    .top-9{
        top: -9.5%;
    }
    .right-2{
        right: 2%;
    }
    .wid-25{
        width: 25px;
    }
    .hei-25{
        height: 25px;
    }
    .flo-r{
        float: right;
    }
    .dir-l{
        direction: ltr;
    }
    .f-s-11{
        font-size: 11px;
    }
    .pad-r-5{
        padding-right: 5px
    }
    .hei-24{
        height: 24px;
    }
    .f-s-15{
        font-size: 15px;
    }
    .li-hei-1{
        line-height: 1;
    }
    .p-0{
       padding: 0; 
    }
    .pad-l-0{
        padding-left: 0px;
    }
    .flo-l{
        float:left;
    }
    .z-in-10{
        z-index: 10;
    }
</style>

@endpush

@section('page-wrapper')

@endsection

@section('body')

	<div id="page">
        <div class='container mt-5 '>
            
                <h2 class='pt-5 block-title text-center' > {{__('thanks-idhh21')}} </h2> 
                <p  class=" text-center f-w-500 colo-b">  {{__('thanks-idp1')}}</p>
                <h5   class=" text-center  f-w-500 colo-b">{{__('thanks-idh51')}}</h5>
                <h5   class=" text-center  f-w-b colo-b">{{__('thanks-idh52')}}</h5> 
                <div class='row wid-80 m-a mar-t-40'  >
                  <div class='col-md-4 mb-4'>
                    <div class="box_shadow text-center hei-100" >
                      <div class="hei-261 pad-15-15-0-15;">
                        <?php
                         $downloads3 = $conn->query("SELECT * FROM files_upload WHERE `category` = 'thank-en' AND `language` = 'en' AND `status` = '1'");
                         while ($row3 = $downloads3->fetch()) {
                         $file_id3 = $row3['file_id'];
                         $file_url3 = $row3['url'];
                         $file_img3 = $row3['image'];
                        }
                     ?>
                    <img src="uploads/resources/image/<?php echo $file_img3 ;?>" class="wid-100 hei-100" >
                    </div>
                      <button class="submit mt-2 pad-2-25 mar-t-23" data-toggle="modal" data-target="#getNow"   type="submit" id="sub"  > 
                     <?php
                        $targetDir = "uploads/resources/";
                        $file3 = $targetDir.$file_url3 ;
                        echo '<a class="colo-w" href="'.$file3.'" download>Get Now</a>';
                     ?>  
                   </button> 
                    </div>
                  </div>
                  <div class='col-md-4 mb-4'>
                    <div class="box_shadow text-cente hei-100" >
                    <div class="hei-261 pad-15-15-0-15">
                             <?php
                                $downloads2 = $conn->query("SELECT * FROM files_upload WHERE `category` = 'thank-en2' AND `language` = 'en' AND `status` = '1'");
                                while ($row2 = $downloads2->fetch()) {
                                $file_id2 = $row2['file_id'];
                                $file_url2 = $row2['url'];
                                $file_img2 = $row2['image'];
                                }
                             ?>
                        <img src="uploads/resources/image/<?php echo $file_img2 ;?> "class="wid-100 hei-100" >
                    </div>
                    <button class="submit mt-2 pad-2-25 mar-t-23" data-toggle="modal" data-target="#getNow"   type="submit" id="sub"  > <?php
                            $targetDir = "uploads/resources/";
                            $file2 = $targetDir.$file_url2 ;
                            echo '<a class="colo-w" href="'.$file2.'" download>Get It Now</a>';
                            ?>    
                        </button>
                  </div>
                  </div>
                  <div class='col-md-4 mb-4'>
                <div class=" box_shadow">
                <div class="card  text-center back-l .mar-t-15" >
                                        <div class="card-header text-center p-0">
                                            <div class="py-1 text-center text-light" dir="ltr">
                                                 <?php
                                           
                                            
                                            $data_arr = array(
                                                'host' => $_SERVER['HTTP_HOST'],
                                                'uri' => $_SERVER['REQUEST_URI'],
                                                'id' => $_GET['file'],
                                                'params' => ['keyword']
                                            );
                                            
                                            $response_1 = callAPI('https://crmmrkt.com/api/resources/getById/', 'POST', $data_arr);
                                            $response_1 = json_decode($response_1, true);
                                            $row = $response_1['data'];
                        
                                             $file_id = $row['id'];
                                             $file_url = $row['file_url'];
                                             $file_img = $row['cover_landscape_url'];
                                             $total_count = $row['total_downloads'];
                                            $keyword = $row['keyword'];
                                            
                                            ?>
                                                <p class="m-0 f-s-12">  {{__('thanks-idspan1')}}<span class="mar-r-10">[ <?php echo $total_count ?> ]</span><!--Kholy dinamic--> </p>
                                            </div>
                                           
                                            
                                        </div>
                                        <div class="card-body p-1 text-center text-light pricing-style-one">
                                            <div class="text-center mb-1">
                                                <input type="hidden" value="<?php echo $file_img; ?>">
                                                <img src="<?php echo $file_img;?>" width="100%" >
                                            </div>
                                            <form method="post" id="pdfdownload">
                                                
                                        <button class="submit pad-2-25 mar-t-91  "  type="submit" name="downloadpdf"><?php
                                    
                                //   $targetDir = "https://stickyposts.net/sticky/admin/uploads/file/";
                                    // $files = $file_url ;
                                     echo '<a class="colo-w" href="'.$file_url.'" download>Download Now</a>';
                                      
                             ?></button>
                             
                             </form>
                                    </div>
                                    <!--<div class="card-footer text-center text-light p-0" style="font-size: 10px;"> <span style="color:#fff;margin-right:10px">( <span style="color:#f00">*</span> )</span>All fields are required your privace is important to us.</div>-->
                                    
                                </div>
           </div>
            </div>
                </div>
                <section class="mb-5 mt-4 box_shadow ">
        			<h5 class='block-title'>{{__('thanks-idh53')}} </h5>
        		    <div class="grid-gallery reviews1">
                       <div class="container">
                        <div class="owl-carousel">
        			    <?php 
                                                 $queried= $keyword ;
                                                 $values=explode(',',$queried);
                                                 $sql="SELECT * FROM `resources` WHERE lang='en' AND project_id = 1 AND ( ";
                                                 $i=0;
                                                        foreach($values as $v){
                                                            $v=trim($v);
                                                            if($i==0) {
                                                        $sql.=" `keyword` LIKE '%$v%'";
                                                                
                                                            }
                                                           else {
                                                   $sql.=" OR `keyword` LIKE '%$v%'";
                                                               
                                                           }
                                                           $i++;
                                                         }
                                                $sql.=" )ORDER BY RAND() LIMIT 6";
                                                
                                                $sth = $conn2->prepare($sql);
                                                $sth->execute();
                                                 while($row4 = $sth->fetch()){
                                                $image = $row4['imagec'];
                                                $file_url = $row4['files'];
                                                 $targetDir = "https://stickyposts.net/sticky/admin/uploads/file/";
                                                 $file = $targetDir.$file_url ;
        
                                                ?>
                            
        					<a class="resource-url" value="<?php echo $row4['id']; ?>" class="colo-w;" href="<?php echo $file; ?>" download>
        					    <img src="https://stickyposts.net/sticky/admin/uploads/image/<?php echo $image;?>" class='img-fluid' class="wid-150">
        					    </a>
        			
                                            <?php } ?>
        			
        			</div>
                       </div>
                    </div>
        		</section>
        </div>
        <div id="getNow" class="modal backg-b pad-t-60" role="dialog" >
          <div class="modal-dialog miniDialog" >
              <img src="logo-s.png" class='wid-54 pos-abs top-9 right-2 z-in-10'>
            <div class="modal-content back-l colo-w"  >
              <div class="modal-body">
        <button type="button" class="close colo-w wid-25 hei-25 flo-r"  id='closePop' data-dismiss="modal" >&times;</button>
        
                  <div class="row">
                      
                      <div class="col-5 text-center">
                           <div class="box_shadow">
                    <?php
                     
                      $downloads3 = $conn->query("SELECT * FROM files_upload WHERE `category` = 'promo' AND `language` = 'en' AND `status` = '1'");
                                        while ($row3 = $downloads3->fetch()) {
                                        $file_id3 = $row3['file_id'];
                                         $file_url3 = $row3['url'];
                                         $file_img3 = $row3['image'];
                                       
                                    }
                     
                     
                     
                     ?>
                    <img src="uploads/resources/image/<?php echo $file_img3 ;?>" class="wid-100 hei-100" >
                    </div>
                    <button class="submit mt-2 pad-2-25 mar-t-23" data-toggle="modal" data-target="#getNow"   type="submit" id="sub"  > 
                                 <?php
                                    
                                  $targetDir = "uploads/resources/";
                                    $file3 = $targetDir.$file_url3 ;
        
                                     echo '<a class="colo-w;" href="'.$file3.'" download>Get Now</a>';
                             ?>  
                    
                    </button>
        
                          
                      </div>
                      <div class="col-7">
                  <h3 class='text-center colo-w'>  {{__('thanks-idh31')}}</h3>
                  <p class='text-center' >{{__('thanks-idp2')}}</p>
                  <form  method= "post" class="thanks_extra_form dir-l">
        
                                                    
                                                <div class="form-group row mb-2  mr-auto" >
                                                   <label class="col-12  text-left m-0 f-s-11">  <span class="colo-r">*</span>   {{__('thanks-idla1')}}      </label>
                                                        <div class="col-4 pad-r-5" >
                                                               <select name="countryCode"  class="form-control hei-24 f-s-15 li-hei-1 p-0"  id="">
                                                                    <option data-countryCode="GB" value="44" Selected> (+47)</option>
                                                            	    <option data-countryCode="US" value="1"> (+44)</option>
                                                                	<optgroup label="Other countries">
                                                            		<option data-countryCode="DZ" value="213"> (+213)</option>
                                                            		<option data-countryCode="AD" value="376"> (+376)</option>
                                                            		<option data-countryCode="AO" value="244"> (+244)</option>
                                                            		<option data-countryCode="AI" value="1264"> (+1264)</option>
                                                            		<option data-countryCode="AG" value="1268"> (+1268)</option>
                                                            		<option data-countryCode="AR" value="54"> (+54)</option>
                                                            		<option data-countryCode="AM" value="374"> (+374)</option>
                                                            		<option data-countryCode="AW" value="297"> (+297)</option>
                                                            		<option data-countryCode="AU" value="61"> (+61)</option>
                                                            		<option data-countryCode="AT" value="43"> (+43)</option>
                                                            		<option data-countryCode="AZ" value="994"> (+994)</option>
                                                            		<option data-countryCode="BS" value="1242"> (+1242)</option>
                                                            		<option data-countryCode="BH" value="973"> (+973)</option>
                                                            		<option data-countryCode="BD" value="880"> (+880)</option>
                                                            		<option data-countryCode="BB" value="1246"> (+1246)</option>
                                                            		<option data-countryCode="BY" value="375"> (+375)</option>
                                                            		<option data-countryCode="BE" value="32"> (+32)</option>
                                                            		<option data-countryCode="BZ" value="501"> (+501)</option>
                                                            		<option data-countryCode="BJ" value="229"> (+229)</option>
                                                            		<option data-countryCode="BM" value="1441"> (+1441)</option>
                                                            		<option data-countryCode="BT" value="975"> (+975)</option>
                                                            		<option data-countryCode="BO" value="591"> (+591)</option>
                                                            		<option data-countryCode="BA" value="387">  (+387)</option>
                                                            		<option data-countryCode="BW" value="267"> (+267)</option>
                                                            		<option data-countryCode="BR" value="55"> (+55)</option>
                                                            		<option data-countryCode="BN" value="673"> (+673)</option>
                                                            		<option data-countryCode="BG" value="359"> (+359)</option>
                                                            		<option data-countryCode="BF" value="226">  (+226)</option>
                                                            		<option data-countryCode="BI" value="257"> (+257)</option>
                                                            		<option data-countryCode="KH" value="855"> (+855)</option>
                                                            		<option data-countryCode="CM" value="237"> (+237)</option>
                                                            		<option data-countryCode="CA" value="1"> (+1)</option>
                                                            		<option data-countryCode="CV" value="238">   (+238)</option>
                                                            		<option data-countryCode="KY" value="1345">  (+1345)</option>
                                                            		<option data-countryCode="CF" value="236">   (+236)</option>
                                                            		<option data-countryCode="CL" value="56"> (+56)</option>
                                                            		<option data-countryCode="CN" value="86"> (+86)</option>
                                                            		<option data-countryCode="CO" value="57"> (+57)</option>
                                                            		<option data-countryCode="KM" value="269"> (+269)</option>
                                                            		<option data-countryCode="CG" value="242"> (+242)</option>
                                                            		<option data-countryCode="CK" value="682">  (+682)</option>
                                                            		<option data-countryCode="CR" value="506">  (+506)</option>
                                                            		<option data-countryCode="HR" value="385"> (+385)</option>
                                                            		<option data-countryCode="CU" value="53"> (+53)</option>
                                                            		<option data-countryCode="CY" value="90392">  (+90392)</option>
                                                            		<option data-countryCode="CY" value="357"> (+357)</option>
                                                            		<option data-countryCode="CZ" value="42">  (+42)</option>
                                                            		<option data-countryCode="DK" value="45"> (+45)</option>
                                                            		<option data-countryCode="DJ" value="253"> (+253)</option>
                                                            		<option data-countryCode="DM" value="1809"> (+1809)</option>
                                                            		<option data-countryCode="DO" value="1809">  (+1809)</option>
                                                            		<option data-countryCode="EC" value="593"> (+593)</option>
                                                            		<option data-countryCode="EG" value="20"> (+20)</option>
                                                            		<option data-countryCode="SV" value="503">  (+503)</option>
                                                            		<option data-countryCode="GQ" value="240">  (+240)</option>
                                                            		<option data-countryCode="ER" value="291"> (+291)</option>
                                                            		<option data-countryCode="EE" value="372"> (+372)</option>
                                                            		<option data-countryCode="ET" value="251"> (+251)</option>
                                                            		<option data-countryCode="FK" value="500">  (+500)</option>
                                                            		<option data-countryCode="FO" value="298">  (+298)</option>
                                                            		<option data-countryCode="FJ" value="679"> (+679)</option>
                                                            		<option data-countryCode="FI" value="358"> (+358)</option>
                                                            		<option data-countryCode="FR" value="33"> (+33)</option>
                                                            		<option data-countryCode="GF" value="594">  (+594)</option>
                                                            		<option data-countryCode="PF" value="689">  (+689)</option>
                                                            		<option data-countryCode="GA" value="241"> (+241)</option>
                                                            		<option data-countryCode="GM" value="220"> (+220)</option>
                                                            		<option data-countryCode="GE" value="7880"> (+7880)</option>
                                                            		<option data-countryCode="DE" value="49"> (+49)</option>
                                                            		<option data-countryCode="GH" value="233"> (+233)</option>
                                                            		<option data-countryCode="GI" value="350"> (+350)</option>
                                                            		<option data-countryCode="GR" value="30"> (+30)</option>
                                                            		<option data-countryCode="GL" value="299"> (+299)</option>
                                                            		<option data-countryCode="GD" value="1473"> (+1473)</option>
                                                            		<option data-countryCode="GP" value="590"> (+590)</option>
                                                            		<option data-countryCode="GU" value="671"> (+671)</option>
                                                            		<option data-countryCode="GT" value="502"> (+502)</option>
                                                            		<option data-countryCode="GN" value="224"> (+224)</option>
                                                            		<option data-countryCode="GW" value="245">  (+245)</option>
                                                            		<option data-countryCode="GY" value="592"> (+592)</option>
                                                            		<option data-countryCode="HT" value="509"> (+509)</option>
                                                            		<option data-countryCode="HN" value="504"> (+504)</option>
                                                            		<option data-countryCode="HK" value="852">  (+852)</option>
                                                            		<option data-countryCode="HU" value="36"> (+36)</option>
                                                            		<option data-countryCode="IS" value="354"> (+354)</option>
                                                            		<option data-countryCode="IN" value="91"> (+91)</option>
                                                            		<option data-countryCode="ID" value="62"> (+62)</option>
                                                            		<option data-countryCode="IR" value="98"> (+98)</option>
                                                            		<option data-countryCode="IQ" value="964"> (+964)</option>
                                                            		<option data-countryCode="IE" value="353"> (+353)</option>
                                                            		<option data-countryCode="IL" value="972"> (+972)</option>
                                                            		<option data-countryCode="IT" value="39"> (+39)</option>
                                                            		<option data-countryCode="JM" value="1876"> (+1876)</option>
                                                            		<option data-countryCode="JP" value="81"> (+81)</option>
                                                            		<option data-countryCode="JO" value="962"> (+962)</option>
                                                            		<option data-countryCode="KZ" value="7"> (+7)</option>
                                                            		<option data-countryCode="KE" value="254"> (+254)</option>
                                                            		<option data-countryCode="KI" value="686"> (+686)</option>
                                                            		<option data-countryCode="KP" value="850">  (+850)</option>
                                                            		<option data-countryCode="KR" value="82">  (+82)</option>
                                                            		<option data-countryCode="KW" value="965"> (+965)</option>
                                                            		<option data-countryCode="KG" value="996"> (+996)</option>
                                                            		<option data-countryCode="LA" value="856"> (+856)</option>
                                                            		<option data-countryCode="LV" value="371"> (+371)</option>
                                                            		<option data-countryCode="LB" value="961"> (+961)</option>
                                                            		<option data-countryCode="LS" value="266"> (+266)</option>
                                                            		<option data-countryCode="LR" value="231"> (+231)</option>
                                                            		<option data-countryCode="LY" value="218"> (+218)</option>
                                                            		<option data-countryCode="LI" value="417"> (+417)</option>
                                                            		<option data-countryCode="LT" value="370"> (+370)</option>
                                                            		<option data-countryCode="LU" value="352"> (+352)</option>
                                                            		<option data-countryCode="MO" value="853"> (+853)</option>
                                                            		<option data-countryCode="MK" value="389"> (+389)</option>
                                                            		<option data-countryCode="MG" value="261"> (+261)</option>
                                                            		<option data-countryCode="MW" value="265"> (+265)</option>
                                                            		<option data-countryCode="MY" value="60"> (+60)</option>
                                                            		<option data-countryCode="MV" value="960"> (+960)</option>
                                                            		<option data-countryCode="ML" value="223"> (+223)</option>
                                                            		<option data-countryCode="MT" value="356"> (+356)</option>
                                                            		<option data-countryCode="MH" value="692">  (+692)</option>
                                                            		<option data-countryCode="MQ" value="596"> (+596)</option>
                                                            		<option data-countryCode="MR" value="222"> (+222)</option>
                                                            		<option data-countryCode="YT" value="269"> (+269)</option>
                                                            		<option data-countryCode="MX" value="52"> (+52)</option>
                                                            		<option data-countryCode="FM" value="691"> (+691)</option>
                                                            		<option data-countryCode="MD" value="373"> (+373)</option>
                                                            		<option data-countryCode="MC" value="377"> (+377)</option>
                                                            		<option data-countryCode="MN" value="976"> (+976)</option>
                                                            		<option data-countryCode="MS" value="1664"> (+1664)</option>
                                                            		<option data-countryCode="MA" value="212"> (+212)</option>
                                                            		<option data-countryCode="MZ" value="258"> (+258)</option>
                                                            		<option data-countryCode="MN" value="95"> (+95)</option>
                                                            		<option data-countryCode="NA" value="264"> (+264)</option>
                                                            		<option data-countryCode="NR" value="674"> (+674)</option>
                                                            		<option data-countryCode="NP" value="977"> (+977)</option>
                                                            		<option data-countryCode="NL" value="31"> (+31)</option>
                                                            		<option data-countryCode="NC" value="687">(+687)</option>
                                                            		<option data-countryCode="NZ" value="64">(+64)</option>
                                                            		<option data-countryCode="NI" value="505"> (+505)</option>
                                                            		<option data-countryCode="NE" value="227"> (+227)</option>
                                                            		<option data-countryCode="NG" value="234"> (+234)</option>
                                                            		<option data-countryCode="NU" value="683"> (+683)</option>
                                                            		<option data-countryCode="NF" value="672">  (+672)</option>
                                                            		<option data-countryCode="NP" value="670">  (+670)</option>
                                                            		<option data-countryCode="NO" value="47"> (+47)</option>
                                                            		<option data-countryCode="OM" value="968"> (+968)</option>
                                                            		<option data-countryCode="PW" value="680"> (+680)</option>
                                                            		<option data-countryCode="PA" value="507"> (+507)</option>
                                                            		<option data-countryCode="PG" value="675"> (+675)</option>
                                                            		<option data-countryCode="PY" value="595"> (+595)</option>
                                                            		<option data-countryCode="PE" value="51"> (+51)</option>
                                                            		<option data-countryCode="PH" value="63"> (+63)</option>
                                                            		<option data-countryCode="PL" value="48"> (+48)</option>
                                                            		<option data-countryCode="PT" value="351"> (+351)</option>
                                                            		<option data-countryCode="PR" value="1787">  (+1787)</option>
                                                            		<option data-countryCode="QA" value="974"> (+974)</option>
                                                            		<option data-countryCode="RE" value="262"> (+262)</option>
                                                            		<option data-countryCode="RO" value="40"> (+40)</option>
                                                            		<option data-countryCode="RU" value="7"> (+7)</option>
                                                            		<option data-countryCode="RW" value="250"> (+250)</option>
                                                            		<option data-countryCode="SM" value="378">  (+378)</option>
                                                            		<option data-countryCode="ST" value="239">   (+239)</option>
                                                            		<option data-countryCode="SA" value="966">  (+966)</option>
                                                            		<option data-countryCode="SN" value="221"> (+221)</option>
                                                            		<option data-countryCode="CS" value="381"> (+381)</option>
                                                            		<option data-countryCode="SC" value="248"> (+248)</option>
                                                            		<option data-countryCode="SL" value="232"> Leone (+232)</option>
                                                            		<option data-countryCode="SG" value="65"> (+65)</option>
                                                            		<option data-countryCode="SK" value="421">  (+421)</option>
                                                            		<option data-countryCode="SI" value="386"> (+386)</option>
                                                            		<option data-countryCode="SB" value="677"> Islands (+677)</option>
                                                            		<option data-countryCode="SO" value="252"> (+252)</option>
                                                            		<option data-countryCode="ZA" value="27">  (+27)</option>
                                                            		<option data-countryCode="ES" value="34"> (+34)</option>
                                                            		<option data-countryCode="LK" value="94"> (+94)</option>
                                                            		<option data-countryCode="SH" value="290"> (+290)</option>
                                                            		<option data-countryCode="KN" value="1869"> (+1869)</option>
                                                            		<option data-countryCode="SC" value="1758">(+1758)</option>
                                                            		<option data-countryCode="SD" value="249"> (+249)</option>
                                                            		<option data-countryCode="SR" value="597"> (+597)</option>
                                                            		<option data-countryCode="SZ" value="268"> (+268)</option>
                                                            		<option data-countryCode="SE" value="46"> (+46)</option>
                                                            		<option data-countryCode="CH" value="41"> (+41)</option>
                                                            		<option data-countryCode="SI" value="963"> (+963)</option>
                                                            		<option data-countryCode="TW" value="886"> (+886)</option>
                                                            		<option data-countryCode="TJ" value="7"> (+7)</option>
                                                            		<option data-countryCode="TH" value="66"> (+66)</option>
                                                            		<option data-countryCode="TG" value="228"> (+228)</option>
                                                            		<option data-countryCode="TO" value="676"> (+676)</option>
                                                            		<option data-countryCode="TT" value="1868">   (+1868)</option>
                                                            		<option data-countryCode="TN" value="216"> (+216)</option>
                                                            		<option data-countryCode="TR" value="90"> (+90)</option>
                                                            		<option data-countryCode="TM" value="7"> (+7)</option>
                                                            		<option data-countryCode="TM" value="993"> (+993)</option>
                                                            		<option data-countryCode="TC" value="1649">  (+1649)</option>
                                                            		<option data-countryCode="TV" value="688"> (+688)</option>
                                                            		<option data-countryCode="UG" value="256"> (+256)</option>
                                                            		<!-- <option data-countryCode="GB" value="44">UK (+44)</option> -->
                                                            		<option data-countryCode="UA" value="380"> (+380)</option>
                                                            		<option data-countryCode="AE" value="971">   (+971)</option>
                                                            		<option data-countryCode="UY" value="598"> (+598)</option>
                                                            		<!-- <option data-countryCode="US" value="1">USA (+1)</option> -->
                                                            		<option data-countryCode="UZ" value="7"> (+7)</option>
                                                            		<option data-countryCode="VU" value="678"> (+678)</option>
                                                            		<option data-countryCode="VA" value="379">  (+379)</option>
                                                            		<option data-countryCode="VE" value="58"> (+58)</option>
                                                            		<option data-countryCode="VN" value="84"> (+84)</option>
                                                            		<option data-countryCode="VG" value="84">(+1284)</option>
                                                            		<option data-countryCode="VI" value="84"> (+1340)</option>
                                                            		<option data-countryCode="WF" value="681"> (+681)</option>
                                                            		<option data-countryCode="YE" value="969"> (+969)</option>
                                                            		<option data-countryCode="YE" value="967"> (+967)</option>
                                                            		<option data-countryCode="ZM" value="260"> (+260)</option>
                                                            		<option data-countryCode="ZW" value="263"> (+263)</option>
                                                            	</optgroup>
                                                            </select>
                                                        </div>
                                                        <div class="col-8 pad-l-0">
                                                         
                                                            <input type="text" placeholder="phone" class="form-control hei-24" name="phone" required s>
                                                        </div>
                                                </div>
                                                    
                                                <div class="form-group row mb-2 mr-auto">
                                                         <label class="col-12 text-left m-0 f-s-11" >  <span class="colo-r">*</span>   {{__('thanks-idla2')}}       </label>
                                                          <div class="col-12">
                                                           <select name="hear_channel"  class="form-control hei-24 f-s-12 li-hei-1 p-0"  id="">
                                                                   <option  Selected>  {{__('thanks-idla3')}}    </option>
        	                                                       <option  value="friend"> {{__('thanks-idla4')}}   </option>
        	                                                       <option  value="google">  {{__('thanks-idla5')}}   </option>
        	                                                       <option  value="article">  {{__('thanks-idla6')}}  </option>
        	                                                       <option  value="tv-ad">    {{__('thanks-idla7')}} </option>
        	                                               </select>
                                                            <!--<input type="text" class="form-control" name="hear" style="height: 24px;" required>-->
                                                        </div>
                                                        
                                                  
                                                </div>
                                                <p class='text-center'> {{__('affil-idsmal1')}}</p>
                                           
                           </form>                     
                      </div>
                  </div>
              
        
              
              </div>
            
            </div>
        
          </div>
        </div>
        <div id="ready" class="modal backg-b pad-t-60 " role="dialog" >
          <div class="modal-dialog miniDialog" >
              <img src="logo-s.png" class='wid-54 pos-abs top-9 right-2 z-in-10'>
            <div class="modal-content back-l colo-w"  >
              <div class="modal-body">
        <button type="button" class="close colo-w wid-25 hei-25 flo-l"  id='closePop' data-dismiss="modal"  name="update">&times;</button>
        </form>
                <h3>  {{__('thanks-idla9')}} </h3>
              
              </div>
            
            </div>
        
          </div>
        </div>
	</div>

@endsection


@push('scripts')

<script>

   $('#body').css('position', "initial");
        $(".reviews1 .owl-carousel").owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            center: true,
            autoplay: false,
            navText: [
                '<i class="fa fa-angle-left"></i>',
                '<i class="fa fa-angle-right"></i>'
            ],
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                750: {
                    items: 2
                },
                1000: {
                    items: 5
                }
            }
        });
        $("#linkId").click(function(){
            $("#pdfdownload").submit();
            return true;
        });
        $('#pdfdownload').submit(function(e){
            
        e.preventDefault();
        
        $.ajax({
          url:    'sendmailpdf.php',
          method:   'POST',
          dataType:   'text',
          data:   $(this).serialize() ,
          success : function(response)
             {
                
             }
        })
      });
      
    $(".resource-url").click(function(){
        var resource_id = $(this).attr("value");
        $.ajax({
            url:    'resource-count.php',
            method:   'POST',
            dataType:   'text',
            data:   {"resource_id": resource_id} ,
            success : function(response)
            {
                console.log(response);
            }
        })
    });
    
    $(".thanks_extra_form").submit(function(e){
        
        e.preventDefault();

        $.ajax({
            url:    'resources.php',
            method:   'POST',
            dataType:   'text',
            data:   $(this).serialize() + '&thanks_extra_data=1&user_logged_email=" + <?php echo $_SESSION['resources_login']; ?> ,
            success : function(response)
            {

            }
        })
    });
    </script>

@endpush