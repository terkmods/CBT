<?php include 'template/head.php'; ?>
    <div style="clear:both;"></div>
    <div id="cover">  
        <img src="<?= base_url() ?>/asset/images/imagetest/cover-profile.jpg">
        </div>  
    <div class="container upper-profile">
      <div class="row">
        <div class="col-md-3 profile-pic"><img src="<?= base_url() ?>/asset/images/imagetest/sporter.jpg" class="img-thumbnail"></div>
        <div class="col-md-3 info"><h3><?= $data['0']->fname; ?>&nbsp;<?= $data['0']->lname; ?></h3>
        <p>Owner
        <span class="glyphicon glyphicon-map-marker"></span>&nbsp<a href="">Thungkru, Bangkok</a>, <a href="#">Thailand</a></p>
        </div>
        <div class="col-md-4 info">
       
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
    <h3 class="panel-title">Profile</h3>
  </div>
  <div class="panel-body">
    เพศ :&nbsp;<?= $data['0']->gender ; ?> <br>
    สไตล์ :&nbsp;<?= $data['0']->Style ; ?> <br>
    สังกัด :&nbsp;<?= $data['0']->club ; ?> <br>
    อายุ :&nbsp;<?= $data['0']->age ; ?> <br>
    ที่อยู่ :&nbsp;<?= $data['0']->address ; ?> <br> 
  </div>
</div>
<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Contact info</h3>
  </div>
  <div class="panel-body">
    <ul class="nav nav-pills">
  <li><a href="#"><img src="<?= base_url() ?>/asset/images/imagetest/fb.png"></a></li>
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
  <div class="panel-body">
    <h4><?= $data['0']->aboutme; ?></h4>
  </div>
</div>
  </div>
</div>
</div>
<hr>
<div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title"><span class="glyphicon glyphicon-list-alt"> </span>  ประวัติการจอง</h3>
  </div>
  <div class="panel-body">
    <ul class="nav nav-pills nav-stacked">
  <li><a href="#">การจอง 1 <span class="badge">14/05/2014</span></a></li>
  <li><a href="#">การจอง 2 <span class="badge">23/04/2014</span></a></li>
  <li><a href="#">การจอง 3 <span class="badge">20/04/2014</span></a></li>
  <li><a href="#">การจอง 4 <span class="badge">17/04/2014</span></a></li>
  <li><a href="#">การจอง 5 <span class="badge">27/03/2014</span></a></li>
</ul>
  </div>
</div>
      </div>
      <div class="col-md-4">
        <div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title"><span class="glyphicon glyphicon-star"> </span> Favorite Stadium</h3>
  </div>
  <div class="panel-body">
    <ul class="nav nav-pills nav-stacked">
  <li><a href="#">สนาม 1 </a></li>
  <li><a href="#">สนาม 2 </a></li>
  <li><a href="#">สนาม 3 </a></li>
  <li><a href="#">สนาม 4 </a></li>
  <li><a href="#">สนาม 5 </a></li>
</ul>
  </div>
</div>
      </div>
      <div class="col-md-4">
        <div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title"><span class="glyphicon glyphicon-heart"> </span> Favorite Coach</h3>
  </div>
  <div class="panel-body">
    <ul class="nav nav-pills nav-stacked">
  <li><a href="#">โค้ช 1 </a></li>
  <li><a href="#">โค้ช 2 </a></li>
  <li><a href="#">โค้ช 3 </a></li>
  <li><a href="#">โค้ช 4 </a></li>
  <li><a href="#">โค้ช 5 </a></li>
</ul>
  </div>
</div>
      </div>
    </div>
</div>
     <?php include 'template/footer.php'; ?>  