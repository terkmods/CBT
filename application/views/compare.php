<?php include 'template/head.php'; ?>

<div class="container" style="padding-top: 30px">
    
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Compare Stadium</div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">

                            <tbody>
                                <tr >
                                    <th style="width: 200px;"></th>
                                    <?php $i=0;foreach ($comparedata as $r){ ?>
                                    <td style="text-align: center"><font style="font-size: 22px;font-weight: bold;"><?=$r->stadium_name?></td>
                                    <?php $i++;} ?>
                                </tr>
                                <tr>
                                    <th class="success">รูปภาพ</th>
                                    <?php foreach ($comparedata as $r){ ?>
                                    <td style="text-align: center"><a href="<?php echo base_url()?><?php echo 'stadium/profile/'?><?=$r->stadium_id?>"><img src="<?php echo base_url()?><?php echo '/asset/images/'?><?=$r->stadium_path!= null ? 'stadiumpic/' . $r->stadium_path : 'bad.png' ?>"  style="width: 250px;height: 170px" ></a></td>
                                    <?php } ?>
                                </tr>
                                <tr>
                                    <th  class="success">อัตราค่าเช่า</th>
                                    <?php foreach ($priceavg as $r){ ?>
                                    <td style="text-align: center"><?=$r != null ? $r : '-' ?></td>
                                    <?php } ?>
                                </tr> 
                                <tr>
                                    <th class="success">เวลาเปิดปิด</th>
                                    <td >
                                        <dl class="dl-horizontal">
                                    <?php $datestadium =array ('Monday','Thuesday','Wednesday','Thuesday','Friday','Staturday','Sunday'); $idtemp=$time[0]->stadium_id; foreach ($time as $s){ ?>
                                        
                                        <?php if($s->stadium_id==$idtemp){ ?>
                                    
                                       
                                                
                                            <dt style="width: 130px"><?=$datestadium[($s->type)]?>: </dt> <dd><?=$s->open_time?>- <?=$s->end_time?></dd> 
                                            
                                        <?php } else { echo "</td><td><dl class='dl-horizontal'>"; ?><dt style="width: 130px"><?=$datestadium[($s->type)]?>:</dt><dd> <?=$s->open_time?>- <?=$s->end_time?></dd> 
                                            <?php } ?>
                                         <?php $idtemp = $s->stadium_id ; ?>
                                    <?php } ?>
                                        </dl>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="success">เบอร์โทรศัพท์</th>
                                    <?php foreach ($comparedata as $r){ ?>
                                    <td style="text-align: center"><?=$r->tel != null ? $r->tel : '-' ?></td>
                                    <?php } ?>
                                </tr>
                                <tr>
                                    <th class="success">ที่อยู่</th>
                                    <?php foreach ($comparedata as $r){ ?>
                                    <td style="width: 40%;text-align: center"> 
                                         <?=$r->soi?> 
                                         <?=$r->district?> 
                                        
                                        
                                            <?=$r->province?>
                                    <?php } ?>
                                </tr>
                                <tr>
                                    <th class="success" style="width: 20px">รายละเอียดสนาม</th>
                                    <?php foreach ($comparedata as $r){ ?>
                                    <td style="text-align: center"><?=$r->about_stadium != null ? $r->about_stadium : '-' ?></td>
                                    <?php } ?>
                                </tr>
                                <tr>
                                    <th class="success">กฎของสนาม</th>
                                    <?php foreach ($comparedata as $r){ ?>
                                    <td style="text-align: center" ><?=$r->rule != null ? $r->rule : '-' ?></td>
                                    <?php } ?>
                                </tr>
                                 
                                <tr>
                                    
                                    <th class="success">ที่จอดรภ</th>
                                   <?php foreach ($facility as $r){ ?>
                                    <td style="text-align: center"><?=$r[0]->Parking == 1 ? '<i class="mdi-action-done"></i>' : '<i class="mdi-action-highlight-remove"></i>' ?>&nbsp<span class="label label-info pull-right"><?=$r[0] -> Parking_detail?> ea</span></td>
                                   <?php } ?>
                                    
                                </tr>
                                <tr>
                                    <th class="success">ร้านอาหาร</th>
                                    <?php foreach ($facility as $e){ ?>
                                    <td style="text-align: center"><?=$e[0]->Food == 1 ? '<i class="mdi-action-done"></i>' : '<i class="mdi-action-highlight-remove"></i>'?>&nbsp<span class="label label-info pull-right"><?=$e[0] -> food_detail?> ea</span> </td>
                                    <?php } ?>
                                    
                                </tr>
                                <tr>
                                    <th class="success">ห้องอาบน้ำ</th>
                                    <?php foreach ($facility as $e){ ?>
                                    <td style="text-align: center"><?=$e[0] ->Bathroom ? '<i class="mdi-action-done"></i>' : '<i class="mdi-action-highlight-remove"></i>'?>&nbsp<span class="label label-info pull-right"><?=$e[0] -> bathroom_detail?> ea</span></td>
                                    <?php } ?>
                                    
                                </tr>
                                <tr>
                                    <th class="success">ล็อกเกอร์</th>
                                    <?php foreach ($facility as $e){ ?>
                                    <td style="text-align: center"><?=$e[0] ->Lockerroom ? '<i class="mdi-action-done"></i>' : '<i class="mdi-action-highlight-remove"></i>'?>&nbsp<span class="label label-info pull-right"><?=$e[0] -> lockerrom_detail?> ea</span></td>
                                    <?php } ?>
                                    
                                </tr>
                                <tr>
                                    <th class="success">ร้านค้า</th>
                                    <?php foreach ($facility as $e){ ?>
                                    <td style="text-align: center"><?=$e[0] ->Shop ? '<i class="mdi-action-done"></i>' : '<i class="mdi-action-highlight-remove"></i>'?>&nbsp<span class="label label-info pull-right"><?=$e[0] -> shop_detail?> ea</span></td>
                                    <?php } ?>
                                    
                                </tr>
                                <tr>
                                    <th class="success"></th>
                                    <?php foreach ($comparedata as $r){ ?>
                                    <td ><a href="<?php echo base_url()?><?php echo 'stadium/profile/'?><?=$r->stadium_id?>"><button type="button" class="btn btn-info">More Info!</button></a>
                                    <a href="<?= base_url() ?>booking/reserve/<?=$r->stadium_id?>"><button type="button" class="btn btn-danger">Book Now!</button></a></td>
                                    <?php } ?>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>

<!--<div class="container" >
    <div class="row">
        <div class="col-xs-12 col-sm-offset-2 col-sm-10">
            <div class="row">
                
                <?php foreach ($comparedata as $r){ ?>
                                    
                                    
                <div class="col-xs-3 theader free">
                    <div class="ptitle"><?=$r->stadium_name?></div>                                       
                    <a class="btn btn-lg btn-danger">Book Now!</a>
                </div>
              <?php } ?>
            </div>
        </div>
    </div>
    
    <div class="row feature">
        <div class="col-xs-12 col-sm-2 cfeature infos">
            รูปภาพ
        </div>
        <div class="col-xs-12 col-sm-10">
            <div class="row">
                <?php foreach ($comparedata as $r){ ?>                   
                <div class="col-xs-3 col-sm-3 ccfreature free">
                  <img src="<?php echo base_url()?><?php echo '/asset/images/stadiumpic/'?><?=$r->stadium_path?>" alt="..." style="width: 200px;height: 120px" >  
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <div class="row feature">
        <div class="col-xs-12 col-sm-2 cfeature infos">
            อัตราค่าเช่า
        </div>
        <div class="col-xs-12 col-sm-10">
            <div class="row">
                <div class="col-xs-3 col-sm-3 ccfreature free">
                    <i class="fa fa-check iconok"></i>
                </div>
                
            </div>
        </div>
    </div>
    <div class="row feature">
        <div class="col-xs-12 col-sm-2 cfeature infos">
            เวลาเปิด-ปิด
        </div>
        <div class="col-xs-12 col-sm-10">
            <div class="row">
                <div class="col-xs-3 col-sm-3 ccfreature free">
                    <i class="fa fa-check iconok"></i>
                </div>
                
            </div>
        </div>
    </div>
      <div class="row feature">
        <div class="col-xs-12 col-sm-2 cfeature infos">
            เบอร์โทรศัพท์
        </div>
        <div class="col-xs-12 col-sm-10">
            <div class="row">
                <?php foreach ($comparedata as $r){ ?>                           
                <div class="col-xs-3 col-sm-3 ccfreature free">
                    <?=$r->tel != null ? $r->tel : '-'?>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <div class="row feature">
        <div class="col-xs-12 col-sm-2 cfeature infos">
            ที่อยู่
        </div>
        <div class="col-xs-12 col-sm-10">
            <div class="row">
                <?php foreach ($comparedata as $r){ ?>
                                    
                                         
                                   
                <div class="col-xs-3 col-sm-3 ccfreature free">
                    <?=$r->soi?> 
                    ถนน <?=$r->road?> 
                    <?=$r->province?>
                </div>
                 <?php } ?>
            </div>
        </div>
    </div>
    <div class="row feature">
        <div class="col-xs-12 col-sm-2 cfeature infos">
            รายละเอียดสนาม
        </div>
        <div class="col-xs-12 col-sm-10">
            <div class="row">
                <?php foreach ($comparedata as $r){ ?>
                                    
                                    
                <div class="col-xs-3 col-sm-3 ccfreature free">
                    <?=$r->about_stadium != null ? $r->about_stadium : '-'?>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <div class="row feature">
        <div class="col-xs-12 col-sm-2 cfeature infos">
            สิ่งอำนวยความสะดวก
        </div>
        <div class="col-xs-12 col-sm-10">
            <div class="row">
                <div class="col-xs-3 col-sm-3 ccfreature free">
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
        padding: 10px;
        
    }        
</style>-->
<?php include 'template/footer.php'; ?>  
<?php include 'template/footer_scrpit.php'; ?>

</body>
</html>