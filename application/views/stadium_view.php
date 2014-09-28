<?php include 'template/head.php';
 ?>
<div class="container">
    <div id="cover">
        <a role="button" data-toggle="modal" data-target="#uploadimgcover" class="btn"><img src="<?= base_url() ?>/asset/images/<?php
            if ($data['0']->cover_path != "") {
                echo 'stadiumpic/' . $data['0']->cover_path;
            } else {
                echo 'cover_new.jpg';
            }
            ?>" width="1280"></a>
    </div>
        <div class="container upper-profile">
            <div class="row">
                <div class="col-md-3 profile-pic"><img src="<?= base_url() ?>/asset/images/stadiumpic/<?= $data['0']->stadium_path  ?>" width="200" class="img-thumbnail"></div>
                <div class="col-md-3 info"><h3><?= $data['0']->stadium_name  ?></h3>
                    <p>เจ้าของ
                        <span class="glyphicon glyphicon-map-marker"></span>&nbsp<a href="">Bangkok</a>, <a href="#">Thailand</a></p> <p>
                         โทรศัพท์:<h5><?= $data['0']->tel  ?></h5>

                </div>
                <div class="col-md-4 info">
                    <div class="row">
                        <p><a style="margin-top: 55px" class="btn btn-primary btn-lg pull-right" role="button" href="<?= base_url() ?>booking/reserve/<?php echo $this->uri->segment(3); ?>">Book Now</a></p>
                    </div>
                </div>
            </div>
        </div>

    <hr>
    
    <div class="container">
        <!--<h4> <a href="#">หน้าหลัก</a> / เพิ่มรายละเอียดสนาม</h4> -->
        <div class="row">
            <div class="col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">ที่ตั้ง</h3>
                    </div>
                    <div class="panel-body">
                        ที่อยู่ :&nbsp;<?= $data['0']->address_no ; ?><br>
                        จังหวัด :&nbsp;<?= $data['0']->province ; ?> <br>
                        รหัสไปรษณีย์ :&nbsp;<?= $data['0']->zipcode ; ?> 
                    </div>
                </div>

                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">รายละเอียดสนาม</h3>
                    </div>
                    <div class="panel-body">
                        ชนิดของพื้น :  <br>
                        จำนวน คอร์ท :<br>
                        ราคา คอร์ด : <br> 
                        เวลาเปิด-ปิด สนาม :
                    </div>
                </div>

                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">สิ่งอำนวยความสะดวก</h3>
                    </div>
                    <div class="panel-body">
                        <ul>
                            <li>ห้องอาบน้ำ</li>
                            <li>ล็อกเกอร์</li>
                        </ul>
                    </div>
                </div>

                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">โค้ชประจำสนาม</h3>
                    </div>
                    <div class="panel-body">
                        <ul>
                            <li><a href="coach.html">Mark Jacob </a></li>
                            <li>นาย Lanka</li>
                        </ul>
                    </div>
                </div>
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">ผู้ดูแลสนาม</h3>
                    </div>
                    <div class="panel-body">
                        <p>
                           <span class="glyphicon glyphicon-user"></span>Andrew Smith
                        </p>
                        <p>
                           <span class="glyphicon glyphicon-phone"></span>089-xxx-xxxx
                        </p>
                        <p>
                        สถานะ <span class="label label-success"><span class="glyphicon glyphicon-ok"></span>ยืนยันตัว</span>
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-8"><div class="panel panel-default">
                    <div class="panel-body">
                        <h3>เกี่ยวกับฉัน</h3>
                        เกี่ยวกับสนามฉัน สนามฉันตั้งอยู่ที่

                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h3>ประกาศ</h3>
                        <ul>
                            <li><a href="#">ประกาศ 1</a></li>
                            <li><a href="#">ประกาศ 2</a></li>
                            <li><a href="#">ประกาศ 3</a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h3>Gallery</h3>
                        <div class="row">
                            <div class="col-xs-6 col-md-3">
                                <a href="#" class="thumbnail">
                                    <img src="<?= base_url() ?>/asset/images/g.png" alt="...">
                                </a>
                            </div>
                            <div class="col-xs-6 col-md-3">
                                <a href="#" class="thumbnail">
                                    <img src="<?= base_url() ?>/asset/images/g.png" alt="...">
                                </a>
                            </div>
                            <div class="col-xs-6 col-md-3">
                                <a href="#" class="thumbnail">
                                    <img src="<?= base_url() ?>/asset/images/g.png" alt="...">
                                </a>
                            </div>
                            <div class="col-xs-6 col-md-3">
                                <a href="#" class="thumbnail">
                                    <img src="<?= base_url() ?>/asset/images/g.png" alt="...">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="panel panel-default">
                    <div class="panel-body">
                        <h3>Map</h3>
                        <img src="<?= base_url() ?>/asset/images/25293.png">
                    </div>
                </div>
                
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h3>แสดงความคิดเห็น</h3>

                        <div class="scroll">
                            <div class="row">
                                <div class="pull-left">
                                    <img src="<?= base_url() ?>/asset/images/profile.jpg" class="imgcomment">
                                </div>
                                <div class="pull-left ">

                                    <img src="<?= base_url() ?>/asset/images/comment.png">
                                </div>
                            </div>
                            <div class="row" style="margin-top: 10px">
                                <div class="pull-left">
                                    <a href="user.html">   <img src="<?= base_url() ?>/asset/images/sporter.jpg" class="imgcomment"></a>
                                </div>
                                <div class="pull-left ">

                                    <img src="<?= base_url() ?>/asset/images/comment.png">
                                </div>
                            </div>
                            <div class="row" style="margin-top: 10px">
                                <div class="pull-left">
                                    <img src="<?= base_url() ?>/asset/images/profile-placeholder.png" class="imgcomment">
                                </div>
                                <div class="pull-left ">

                                    <img src="<?= base_url() ?>/asset/images/comment.png">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-10" style="margin-top: 15px">
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-2" style="margin-top: 15px">
                            <input type="submit" class="btn-success" value="send">    </div>

                    </div>
                </div>
                

            </div>
        </div>
    </div>
</div>
    <?php include 'template/modal.php'; ?>
<?php include 'template/footer.php'; ?>
<?php include 'template/footer_scrpit.php'; ?>

</body>
</html>