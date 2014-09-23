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
<?php include 'template/footer.php'; ?>  