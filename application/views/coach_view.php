<?php include 'template/head.php'; ?>
<div class="container">
    <div style="clear:both;"></div>

    <div class="container upper-profile well" style="margin-top: -5px">
        <div class="row" style="margin-top: 20px;margin-left: 5px">
            <div class="col-md-3" style="margin-left: 47px"><img src="<?= base_url() ?>/asset/images/profilepic/<?= $data['0']->profilepic_path; ?>" class="img-thumbnail"></div>
            <div class="col-md-8">
                
                
                <h3><?= $data['0']->fname; ?>&nbsp;<?= $data['0']->lname; ?> </h3>(Coach)
            
                <hr>
                <h3>Award and Experience</h3>
            </div>


        </div>
        <div class="row" style="margin-top: 20px; margin-left: 5px">

            <div class="col-md-4" >
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">About</h3>
                    </div>
                    <div class="panel-body">
                        Gender :&nbsp;<?= $data['0']->gender; ?> <br>
                        Style :&nbsp;<?= $data['0']->Style; ?> <br>
                        Belong to :&nbsp;<?= $data['0']->club; ?> <br>
                        Address :&nbsp;<span class="glyphicon glyphicon-map-marker"></span><?= $data['0']->address; ?> <br> 
                    </div>
                </div>
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Coach Info</h3>
                    </div>
                    <div class="panel-body">

                        <p class="btn btn-success btn-xs">
                            <span class="glyphicon glyphicon-ok"></span> Freelance 
                        </p>
                        <p class="btn btn-primary btn-xs">
                            <span class="glyphicon glyphicon-bookmark"></span> Employee 
                        </p>
                        <br>
                        สถานที่สอนประจำ : <br>
                        เพศที่รับสอน :<br>
                        อายุที่รับสอน :  <br>
                        อัตราค่าสอน : <br>
                        
                    </div>
                </div>
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Contact info</h3>
                    </div>
                    <div class="panel-body">
                        <ul class="nav nav-pills">
                            <li><a href="http://www.facebook.com/<?= $data['0']->facebook; ?>"><img src="<?= base_url() ?>/asset/images/imagetest/fb.png"></a></li>
                            <li><a href="#"><img src="<?= base_url() ?>/asset/images/imagetest/twitter.png"></a></li>
                            <li><a href="#"><img src="<?= base_url() ?>/asset/images/imagetest/google+.png"></a></li>
                            <li><a href="#"><img src="<?= base_url() ?>/asset/images/imagetest/linkedin.png"></a></li>
                            <li><a href="#"><img src="<?= base_url() ?>/asset/images/imagetest/email.png"></a></li>
                        </ul>
                    </div>
                </div>

                
            </div>


            <div class="col-md-4">

                <h4>Favorit Stadiums</h4>
                <div class="list-group">
                    <div class="list-group-item">
                        <div class="row-picture">
                            <img class="circle" src="http://lorempixel.com/56/56/people/1" alt="icon">
                        </div>
                        <div class="row-content">
                            <h4 class="list-group-item-heading">Cs Stadium</h4>
                            <p class="list-group-item-text">บางบอน กรุงเทพมหานคร</p>
                        </div>
                    </div>
                    <div class="list-group-separator"></div>
                    <div class="list-group-item">
                        <div class="row-picture">
                            <img class="circle" src="http://lorempixel.com/56/56/people/1" alt="icon">
                        </div>
                        <div class="row-content">
                            <h4 class="list-group-item-heading">Cs Stadium</h4>
                            <p class="list-group-item-text">บางบอน กรุงเทพมหานคร</p>
                        </div>
                    </div>
                    <div class="list-group-separator"></div>
                    <div class="list-group-item">
                        <div class="row-picture">
                            <img class="circle" src="http://lorempixel.com/56/56/people/1" alt="icon">
                        </div>
                        <div class="row-content">
                            <h4 class="list-group-item-heading">Cs Stadium</h4>
                            <p class="list-group-item-text">บางบอน กรุงเทพมหานคร</p>
                        </div>
                    </div>
                    <div class="list-group-separator"></div>
                    <div class="list-group-item">
                        <div class="row-picture">
                            <img class="circle" src="http://lorempixel.com/56/56/people/1" alt="icon">
                        </div>
                        <div class="row-content">
                            <h4 class="list-group-item-heading">Cs Stadium</h4>
                            <p class="list-group-item-text">บางบอน กรุงเทพมหานคร</p>
                        </div>
                    </div>
                    <div class="list-group-separator"></div>
                    <div class="list-group-item">
                        <div class="row-picture">
                            <img class="circle" src="http://lorempixel.com/56/56/people/1" alt="icon">
                        </div>
                        <div class="row-content">
                            <h4 class="list-group-item-heading">Cs Stadium</h4>
                            <p class="list-group-item-text">บางบอน กรุงเทพมหานคร</p>
                        </div>
                    </div>
                    <div class="list-group-separator"></div>
                </div>


            </div>
            <div class="col-md-4">
                <h4>Gallery</h4>
                <div class="row">
                    <?php if ($img != null) { ?>
                        <ul id="myGallery">
                            <?php foreach ($img as $i) { ?>
                                <li><img src="<?= base_url() ?>asset/images/upload/<?= $i->picuser_path ?>"   >
                                <?php } ?>
                        </ul>
                    <?php } else { ?>
                        <p class="text-danger" style="text-align : center"> No gallery </p>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

</div>

<hr>
<div class="container">
    <div class="row">

        <div class="col-md-4">

        </div>

    </div>
</div>
</div>

<?php include 'template/footer.php'; ?>

<script type="text/javascript">
    var centreGot = false;
</script>
<script type="text/javascript">
    $(function () {

        $('#myGallery').galleryView({
            filmstrip_style: 'showall',
            filmstrip_position: 'bottom',
            frame_height: 32,
            frame_width: 50,
            transition_interval: 6000,
            autoplay: true,
            enable_overlays: true,
            pan_images: true,
            panel_animation: 'slide',
            panel_width: 350
        });
    });
</script>





<?php include 'template/footer_scrpit.php'; ?>
<!--<div class="container">
  
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
    <h4> <a href="#">หน้าหลัก</a> / เพิ่มรายละเอียดสนาม</h4> 
    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">ข้อมูลทั่วไป</h3>
                </div>
                <div class="panel-body">
                   
                    <p class="btn btn-success btn-xs">
                        <span class="glyphicon glyphicon-ok"></span> Freelance 
                    </p>
                    <p class="btn btn-primary btn-xs">
                        <span class="glyphicon glyphicon-bookmark"></span> Employee 
                    </p>
                    <p><b>สถานที่สอนประจำ</b> </p>
                    เพศ :<br>
                    อายุที่รับสอน : <b></b> <br>
                </div>
            </div>

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">อัตราค่าสอน</h3>
                </div>
                <div class="panel-body">
                    

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
    <hr>-->

</body>
</html>