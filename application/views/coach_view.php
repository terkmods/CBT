<?php include 'template/head.php'; ?>

<div class="container">
<div style="clear:both;"></div>
<div id="cover">  
      <img src="<?= base_url() ?>/asset/images/profilepic/<?php 
        if ($data['0']->cover_path != "") {
                echo '' . $data['0']->cover_path;
            } else {
                echo 'cover_new.jpg';
            }
            ?>" width="1280">
        </div>  
</div>  
<div class="container upper-profile">
    <div class="row">
        <div class="col-md-3 profile-pic"><img src="<?= base_url() ?>/asset/images/profilepic/<?= $data['0']->profilepic_path; ?>" class="img-thumbnail"></div>
        <div class="col-md-3 info"><h3><?= $data['0']->fname; ?>  <?= $data['0']->lname; ?></h3>
            <p>โค้ชสอน
                <span class="glyphicon glyphicon-map-marker"></span>&nbsp<a href=""><?= $data['0']->address; ?></a>
                <br><span class="glyphicon glyphicon-earphone"></span> <?= $data['0']->phone; ?>
            </p>
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
                    <h3 class="panel-title">ข้อมูลทั่วไป</h3>
                </div>
                <div class="panel-body">
                    <?= $data['0']->coach_type; ?>
                    <p class="btn btn-success btn-xs">
                        <span class="glyphicon glyphicon-ok"></span> Freelance 
                    </p>
                    <p class="btn btn-primary btn-xs">
                        <span class="glyphicon glyphicon-bookmark"></span> Employee 
                    </p>
                    <p><b>สถานที่สอนประจำ</b> </p>
                    เพศ : <?= $data['0']->gender; ?><br>
                    อายุที่รับสอน : <b><?= $data['0']->age_require; ?></b> <br>
                </div>
            </div>

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">อัตราค่าสอน</h3>
                </div>
                <div class="panel-body">
                    <?= $data['0']->coach_rate; ?>

                </div>
            </div>

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Contact info</h3>
                </div>
                <div class="panel-body">
                    <ul class="nav nav-pills">
                        <li><a href="www.facebook.com/<?= $data['0']->facebook; ?>"><img src="<?= base_url() ?>/asset/images/imagetest/fb.png"></a></li>
                        <li><a href="#"><img src="<?= base_url() ?>/asset/images/imagetest/twitter.png"></a></li>
                        <li><a href="#"><img src="<?= base_url() ?>/asset/images/imagetest/google+.png"></a></li>
                        <li><a href="#"><img src="<?= base_url() ?>/asset/images/imagetest/linkedin.png"></a></li>
                        <li><a href="#"><img src="<?= base_url() ?>/asset/images/imagetest/email.png"></a></li>
                    </ul>
                </div>
            </div>

        </div>
        <div class="col-md-8">
            <div class="panel panel-default">

                <div class="panel panel-default">
                    <div class="panel-body">
                        <h3>เกี่ยวกับฉัน</h3>
                        <?= $data['0']->aboutme; ?>
                        <hr>

                    </div>

                    <div class="panel-body">
                        <h3>รางวัลที่ได้รับ</h3>
                        <ul>
                            <li><a href="#"><?= $data['0']->achievement; ?></a></li>
                        </ul>
                        <hr>

                    </div>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h3>Gallery</h3>
                            <div class="row">
                                <div class="col-xs-6 col-md-3">
                                    <a href="#" class="thumbnail">
                                        <img src="images/g.png" alt="...">
                                    </a>
                                </div>
                                <div class="col-xs-6 col-md-3">
                                    <a href="#" class="thumbnail">
                                        <img src="images/g.png" alt="...">
                                    </a>
                                </div>
                                <div class="col-xs-6 col-md-3">
                                    <a href="#" class="thumbnail">
                                        <img src="images/g.png" alt="...">
                                    </a>
                                </div>
                                <div class="col-xs-6 col-md-3">
                                    <a href="#" class="thumbnail">
                                        <img src="images/g.png" alt="...">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <hr>
    <?php include 'template/footer.php'; ?>  
    <?php include 'template/footer_scrpit.php'; ?>

</body>
</html>