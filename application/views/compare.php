<?php include 'template/head.php'; ?>

<div class="container" style="padding-top: 30px">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Compare Stadium</div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped">

                            <tbody>
                                <tr>
                                    <th style="width: 15%">ชื่อสนาม</th>
                                    <?php foreach ($comparedata as $r){ ?>
                                    <td><?=$r->stadium_name?></td>
                                    <?php } ?>
                                </tr>
                                <tr>
                                    <th>รูปภาพ</th>
                                    <?php foreach ($comparedata as $r){ ?>
                                    <td><img src="<?php echo base_url()?><?php echo '/asset/images/stadiumpic/'?><?=$r->stadium_path?>" alt="..." style="width: 250px;height: 170px" ></td>
                                    <?php } ?>
                                </tr>
                                <tr>
                                    <th>อัตราค่าเช่า</th>
                                    
     
 
                                    <td >555 77 855</td>
                                    
                                </tr>
                                <tr>
                                    <th>เวลาเปิดปิด</th>
                                    <td>
                                    <?php $idtemp=$time[0]->stadium_id; foreach ($time as $s){ ?>
                                        
                                        <?php if($s->stadium_id==$idtemp){ ?>
                                    
                                       
                                                
                                                <?=$s->type?>: <?=$s->open_time?>- <?=$s->end_time?> <?php echo"<br>"?>
                                    
                                        <?php } else { echo "</td><td>"; ?><?=$s->type?>: <?=$s->open_time?>- <?=$s->end_time?> <?php echo"<br>"?>
                                            <?php } ?>
                                         <?php $idtemp = $s->stadium_id ; ?>
                                    <?php } ?>
                                    
                                </tr>
                                <tr>
                                    <th>เบอร์โทรศัพท์</th>
                                    <?php foreach ($comparedata as $r){ ?>
                                    <td><?=$r->tel?></td>
                                    <?php } ?>
                                </tr>
                                <tr>
                                    <th>ที่อยู่</th>
                                    <?php foreach ($comparedata as $r){ ?>
                                    <td style="width: 40%">เลขที่ <?=$r->address_no?> 
                                        ซอย <?=$r->soi?> 
                                        ถนน <?=$r->road?> 
                                        เขต <?=$r->district?> 
                                        แขวง<?=$r->subdistrict?> 
                                            <?=$r->province?> <?=$r->zipcode?></td>
                                    <?php } ?>
                                </tr>
                                <tr>
                                    <th>รายละเอียดสนาม</th>
                                    <?php foreach ($comparedata as $r){ ?>
                                    <td><?=$r->about_stadium?></td>
                                    <?php } ?>
                                </tr>
                                <tr>
                                    <th>กฎของสนาม</th>
                                    <?php foreach ($comparedata as $r){ ?>
                                    <td ><?=$r->rule?></td>
                                    <?php } ?>
                                </tr>
                                <tr>
                                    <th>สิ่งอำนวยความสะดวก</th>
                                    <td>555 77 855</td>
                                </tr>
                                <tr>
                                    <th>โปรไฟล์สนาม</th>
                                    <?php foreach ($comparedata as $r){ ?>
                                    <td><a href="<?php echo base_url()?><?php echo 'stadium/profile/'?><?=$r->stadium_id?>">View</a></td>
                                    <?php } ?>
                                </tr>
                                <tr>
                                    <th>จองสนาม</th>
                                    <td>555 77 855</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-offset-4 col-sm-8">
            <div class="row">
                
                <div class="col-xs-4 theader free">
                    <div class="ptitle">Stadium name  </div>                                       
                    <a class="btn btn-lg btn-danger">Book Now!</a>
                </div>
                <div class="col-xs-4 theader standard">
                   <div class="ptitle">Stadium name  </div>                                       
                    <a class="btn btn-lg btn-danger">Book Now!</a>
                </div>
                <div class="col-xs-4 theader premium">
                   <div class="ptitle">Stadium name  </div>                                       
                    <a class="btn btn-lg btn-danger">Book Now!</a>
                </div>
                
            </div>
        </div>
    </div>
    <div class="row feature">
        <div class="col-xs-12 col-sm-4 cfeature infos">
            รูปภาพ
        </div>
        <div class="col-xs-12 col-sm-8">
            <div class="row">
                <div class="col-xs-4 col-sm-4 ccfreature free">
                    <i class="fa fa-check iconok"></i>
                </div>
                <div class="col-xs-4 col-sm-4 ccfreature standard">
                    <i class="fa fa-check iconok"></i>
                </div>
                <div class="col-xs-4 col-sm-4 ccfreature premium">
                    <i class="fa fa-check iconok"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="row feature">
        <div class="col-xs-12 col-sm-4 cfeature infos">
            อัตราค่าเช่า
        </div>
        <div class="col-xs-12 col-sm-8">
            <div class="row">
                <div class="col-xs-4 col-sm-4 ccfreature free">
                    <i class="fa fa-lock iconno"></i>
                </div>
                <div class="col-xs-4 col-sm-4 ccfreature standard">
                    <i class="fa fa-check iconok"></i>
                </div>
                <div class="col-xs-4 col-sm-4 ccfreature premium">
                    <i class="fa fa-check iconok"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="row feature">
        <div class="col-xs-12 col-sm-4 cfeature infos">
            เวลาเปิด-ปิด
        </div>
        <div class="col-xs-12 col-sm-8">
            <div class="row">
                <div class="col-xs-4 col-sm-4 ccfreature free">
                    <i class="fa fa-lock iconno"></i>
                </div>
                <div class="col-xs-4 col-sm-4 ccfreature standard">
                    <i class="fa fa-lock iconno"></i>
                </div>
                <div class="col-xs-4 col-sm-4 ccfreature premium">
                    <i class="fa fa-check iconok"></i>
                </div>
            </div>
        </div>
    </div>
      <div class="row feature">
        <div class="col-xs-12 col-sm-4 cfeature infos">
            เบอร์โทรศัพท์
        </div>
        <div class="col-xs-12 col-sm-8">
            <div class="row">
                <div class="col-xs-4 col-sm-4 ccfreature free">
                    <i class="fa fa-lock iconno"></i>
                </div>
                <div class="col-xs-4 col-sm-4 ccfreature standard">
                    <i class="fa fa-check iconok"></i>
                </div>
                <div class="col-xs-4 col-sm-4 ccfreature premium">
                    <i class="fa fa-check iconok"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="row feature">
        <div class="col-xs-12 col-sm-4 cfeature infos">
            ที่อยู่
        </div>
        <div class="col-xs-12 col-sm-8">
            <div class="row">
                <div class="col-xs-4 col-sm-4 ccfreature free">
                    <i class="fa fa-lock iconno"></i>
                </div>
                <div class="col-xs-4 col-sm-4 ccfreature standard">
                    <i class="fa fa-check iconok"></i>
                </div>
                <div class="col-xs-4 col-sm-4 ccfreature premium">
                    <i class="fa fa-check iconok"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="row feature">
        <div class="col-xs-12 col-sm-4 cfeature infos">
            รายละเอียดสนาม
        </div>
        <div class="col-xs-12 col-sm-8">
            <div class="row">
                <div class="col-xs-4 col-sm-4 ccfreature free">
                    <i class="fa fa-lock iconno"></i>
                </div>
                <div class="col-xs-4 col-sm-4 ccfreature standard">
                    <i class="fa fa-check iconok"></i>
                </div>
                <div class="col-xs-4 col-sm-4 ccfreature premium">
                    <i class="fa fa-check iconok"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="row feature">
        <div class="col-xs-12 col-sm-4 cfeature infos">
            สิ่งอำนวยความสะดวก
        </div>
        <div class="col-xs-12 col-sm-8">
            <div class="row">
                <div class="col-xs-4 col-sm-4 ccfreature free">
                    <i class="fa fa-lock iconno"></i>
                </div>
                <div class="col-xs-4 col-sm-4 ccfreature standard">
                    <i class="fa fa-check iconok"></i>
                </div>
                <div class="col-xs-4 col-sm-4 ccfreature premium">
                    <i class="fa fa-check iconok"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="row feature">
        <div class="col-xs-12 col-sm-4 cfeature infos">
            เบอร์โทรศัพท์
        </div>
        <div class="col-xs-12 col-sm-8">
            <div class="row">
                <div class="col-xs-4 col-sm-4 ccfreature free">
                    <i class="fa fa-lock iconno"></i>
                </div>
                <div class="col-xs-4 col-sm-4 ccfreature standard">
                    <i class="fa fa-check iconok"></i>
                </div>
                <div class="col-xs-4 col-sm-4 ccfreature premium">
                    <i class="fa fa-check iconok"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .btn {
        margin:10px 0px;        
    }

    .iconok {
        font-size:27px;
        color:green;
    }

    .iconno {
        font-size:27px;
        color:rgb(221, 41, 41);
    }

    .theader {
        text-align: center;
        color: rgb(78, 33, 33);
       
    }

    .ptitle {
        font-size: 22px;
        font-weight: bold;
        margin:7px;
    }

    .pprice {
        font-size: 17px;
        font-weight: bold;
        padding:10px;
    }

    .occurance {
       
    }

    .cfeature {
        padding:10px;
        font-weight:bold;
    }

    .feature {                
        margin-bottom: 3px;        
    }
    
    .infos {
        background: #CDD8C9;
    }
    
    .free {
        background: #DFF0D8;
    }
   
    .theader.free {
        background: #DFF0D8;    
        border-bottom:3px solid white;    
    }

    .standard {
        background: #D9EDF7;
    }        

    .theader.standard {
        background: #D9EDF7;
        border-bottom:3px solid white;        
    }

 
    .premium {
        background: #8DB9DF;
    }    

    .theader.premium {
        background: #8DB9DF;
        border-bottom:3px solid white;
    }

    .ccfreature {
        text-align: center;
        font-size: 2em;
    }        
</style>
<?php include 'template/footer.php'; ?>  
<?php include 'template/footer_scrpit.php'; ?>

</body>
</html>