<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home</title>

        <!-- Bootstrap -->
        <link href="<?= base_url() ?>asset/css/bootstrap.css" rel="stylesheet">
        <link href="<?= base_url() ?>asset/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>asset/css/style.css">

        <link href="<?= base_url() ?>asset/css/bootstrap-switch.css" rel="stylesheet">
        <link href="<?= base_url() ?>asset/css/ui.notify.css" rel="stylesheet">


        <style type="text/css">
            .top-minus{
                margin-top: -20px !important;
                position: absolute;
                z-index: 999;
                top:317px;
                left: 100px;
            }
        </style>
        <style type="text/css">
            img {
                max-width: 110%;
                height: auto;      
            }

            .clearfix {
                clear:both;
            }

            .rowcolor {
                background-color:#CCCCCC;
            }

            .padall {
                padding:10px;
            }

            .icon {
                font-size:23px;
                color:#197BB5;
            }
            .white {
                color: white;
            }

            .btn-lg {
                font-size: 38px;
                line-height: 1.33;
                border-radius: 6px;
            }

            .box > .icon {
                text-align: center;
                position: relative;
            }

            .box > .icon > .image {
                position: relative;
                z-index: 2;
                margin: auto;
                width: 88px;
                height: 88px;
                border: 7px solid white;
                line-height: 88px;
                border-radius: 50%;
                background: #63B76C;
                vertical-align: middle;
            }

            .box > .icon:hover > .image {
                border: 4px solid black;
            }

            .box > .icon > .image > i {
                font-size: 40px !important;
                color: #fff !important;
            }

            .box > .icon:hover > .image > i {
                color: white !important;
            }

            .box > .icon > .info {
                margin-top: -24px;
                background: rgba(0, 0, 0, 0.04);
                border: 1px solid #e0e0e0;
                padding: 15px 0 10px 0;
            }

            .box > .icon > .info > h3.title {
                color: #222;
                font-weight: 500;
            }

            .box > .icon > .info > p {
                color: #666;
                line-height: 1.5em;
                margin: 20px;
            }

            .box > .icon:hover > .info > h3.title, .box > .icon:hover > .info > p, .box > .icon:hover > .info > .more > a {
                color: #222;
            }

            .box > .icon > .info > .more a {
                color: #222;
                line-height: 12px;
                text-transform: uppercase;
                text-decoration: none;
            }

            .box > .icon:hover > .info > .more > a {
                color: #000;
                padding: 6px 8px;
                border-bottom: 4px solid black;
            }

            .box .space {
                height: 30px;
            }
            .clickme:hover{
                color: #000;
            }
        </style>


    </head>
    <body>
        <div id="topbar container">
            <div class="cont">
                <nav class="navbar navbar-default" role="navigation">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <!--<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                              <span class="sr-only">Toggle navigation</span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                            </button>-->
                            <a class="navbar-brand" href="<?= base_url() ?>home"><img src="../../../asset/images/logo-white.png"></a>

                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="#">Notifications <span class="badge"> 10</span></a></li>

                                <?php if ($this->session->userdata('role') == "coach") { ?>
                                    <li><a href="<?= base_url() ?>users/coachProfile/<?php echo $this->session->userdata('id') ?>"><?php echo $this->session->userdata('profile_url') ?></a></li>
                                <?php } else if ($this->session->userdata('role') == "user") { ?> 
                                    <li><a href="<?= base_url() ?>users/profile/<?php echo $this->session->userdata('id') ?>"><?php echo $this->session->userdata('profile_url') ?></a></li>
                                <?php } else { ?>
                                    <li><a href="<?= base_url() ?>stadium"><?php echo $this->session->userdata('profile_url') ?></a></li>
                                <?php } ?>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-cog"></span> <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Black List</a></li>
                                        <li><a href="#">Privacy</a></li>
                                        <li><a href="<?php if ($this->session->userdata('role') == "owner") { ?><?= base_url() ?>stadium <?php } else { ?>  <?= base_url() ?>users/edituser/<?= $this->session->userdata('id') ?>  <?php } ?>" >

                                                Settings</a></li>
                                        <li class="divider"></li>
                                        <li><a href="<?= base_url() ?>users/logout">Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <form class="navbar-form navbar-right" role="search">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                </div>
                                <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
                            </form>



                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>

            </div>
        </div>
        <div style="clear:both;"></div>


        <div style="clear:both;"></div>

        <div class="container">
            <div class="row" style="
                 margin-top: 10px;">
                <div class="col-md-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><span class="glyphicon glyphicon-list-alt"> </span>  Welcome</h3>
                        </div>
                        <div class="panel-body">
                            <ul class="nav nav-pills nav-stacked">
                                <li><img  src="<?=base_url()?>asset<?=$user['0']->profilepic_path != null ? '/images/profilepic/'.$user['0']->profilepic_path.'' : '/images/profil.jpg'?>" class="img-thumbnail" style="width: 50%;"></li>
                                 <?php if($this->session->userdata('role') == "user"){?>
                                <li><a href="<?=base_url()?>users/profile/<?=$user['0']->user_id?>">My Profile</a></li>
                                 <? }else if($this->session->userdata('role') == "owner"){ ?>
                                <li><a href="<?=base_url()?>owner/profile/<?=$user['0']->user_id?>">My Profile</a></li>
                                 <? }else{ ?>
                                <li><a href="<?=base_url()?>coach/profile/<?=$user['0']->user_id?>">My Profile</a></li>
                                 <? } ?>
                                
                                <?php if($this->session->userdata('role') == "user"){?>
                                <li><a href="<?=base_url()?>users/edituser/<?=$user['0']->user_id?>">Edit Profile</a></li>
                                <? }else if ($this->session->userdata('role') == "owner") {?>
                                <li><a href="<?=base_url()?>owner/editProfile/<?=$user['0']->user_id?>">Edit Profile</a></li>
                                <? }else{ ?>
                                <li><a href="<?=base_url()?>coach/editProfile/<?=$user['0']->user_id?>">Edit Profile</a></li>
                                <? } ?>
                                
                                <li><a href="<?=base_url()?>booking/historybooking">History Reserve </a></li>
                                <li><a href="<?=base_url()?>stadium/allStadium">Search</a></li>
                                
                            </ul>
                        </div>
                    </div>
                </div>

                
                <div class="col-md-9">
                    <!--                    <div class="row">
                                            <div class="col-xs-12 col-sm-6 col-lg-6">
                                                <div class="box">
                                                    <div class="icon">
                                                        <div class="image"><span class="glyphicon glyphicon-list-alt btn-lg white"></span></div>
                                                        <div class="info">
                                                            <h3 class="title">Tasks</h3>
                                                            <p>
                                                                12 pending tasks awaiting approval and review.
                                                            </p>
                                                            <div class="more">
                                                                <a href="#" title="Title Link"><i class="fa fa-plus"></i> Details
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="space"></div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-6 col-lg-6">
                                                <div class="box">
                                                    <div class="icon">
                                                        <div class="image"><span class="glyphicon glyphicon-envelope btn-lg white"></span></div>
                                                        <div class="info">
                                                            <h3 class="title">Messages</h3>
                                                            <p>
                                                                7 new messages over the past 24 hours. 
                                                            </p>
                                                            <div class="more">
                                                                <a href="#" title="Title Link"><i class="fa fa-plus"></i> Details
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="space"></div>
                                                </div>
                                            </div>
                                           
                                        </div>--> <!-- เก็บไว้ก่อน !-->
                    <div class="row text-center">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><span class="glyphicon glyphicon-list-alt"> </span>  Recommended Stadium</h3>
                            </div>
                            <div class="panel-body">
                                <div class="col-md-4 col-sm-6 hero-feature">
                                    <div class="thumbnail">
                                        <img src="<?php echo base_url()?>asset/images/stadiumpic/p1.jpg" alt="">
                                        <div class="caption">
                                            <h3>Bangkok Badminton</h3>
                                            <p>ที่อยู่ : &nbsp;33/45 ถนนบางบอน5 ซอย40 กรุงเทพฯ </p>
                                            <p>ราคา: &nbsp;120/ชม.</p>
                                            <p>เบอโทร: &nbsp;02-8997368</p>
                                            <p>
                                                <a href="<? echo base_url() ?>booking/reserve/30" class="btn btn-primary">Book Now!</a> <a href="<? echo base_url() ?>stadium/profile/30" class="btn btn-default">More Info</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-6 hero-feature">
                                    <div class="thumbnail">
                                        <img src="<?php echo base_url()?>asset/images/stadiumpic/p2.jpg" alt="">
                                        <div class="caption">
                                            <h3>White House Club</h3>
                                            <p>ที่อยู่ :&nbsp;ซอยเพชรเกษม 63/2 ถนนเพชรเกษม</p>
                                            <p>ราคา:&nbsp;140/ชม.</p>
                                            <p>เบอโทร:&nbsp;02-8113456</p>
                                            <p>
                                                <a href="<? echo base_url() ?>booking/reserve/29" class="btn btn-primary">Book Now!</a> <a href="<? echo base_url() ?>stadium/profile/28" class="btn btn-default">More Info</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-6 hero-feature">
                                    <div class="thumbnail">
                                        <img src="<?php echo base_url()?>asset/images/stadiumpic/p3.jpg" alt="">
                                        <div class="caption">
                                            <h3>Anunline</h3>
                                            <p>ที่อยู่:&nbsp;13/31 หมู่ 9 ถ.เกษตร-นวมินทร์ เขตบึงกุ่ม</p>
                                            <p>ราคา:&nbsp;140/ชม.</p>
                                            <p>เบอโทร:&nbsp;02-5554487</p>
                                            <p>
                                                <a href="<? echo base_url() ?>booking/reserve/28" class="btn btn-primary">Book Now!</a> <a href="<? echo base_url() ?>stadium/profile/28" class="btn btn-default">More Info</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><span class="glyphicon glyphicon-list-alt"> </span>  New Stadium</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <?php foreach ($stadium as $st) { ?>
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6  " >
                                    <div class="panel panel-default">
                                        <div class="row padall" id="clickme">
                                            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                                <span></span>
                                                <img src="<?php echo base_url()?>asset/images/<?=$st->stadium_path != null ? 'stadiumpic/'.$st->stadium_path.'' : 'bad.png' ?>" />
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                                                <div class="clearfix">
                                                    <div class="pull-left">
                                                      <span class="fa fa-map-marker icon"> <?=$st->stadium_name?></span>  
                                                    </div>
                                                    <div class="pull-right">
                                                       โทร  <?=$st->tel !=null ? $st->tel : '-'?>
                                                    </div>
                                                </div>
                                                <div>
                                                    <h5><span class="fa fa-map-marker icon"></span>  ซอย <?=$st->soi !=null ? $st->soi : '-'?> ,ถนน <?=$st->road !=null ? $st->road : '-'?></h5>
                                                    <small><?=$st->district !=null ? $st->district : '-'?>,<?=$st->province !=null ? $st->province : '-'?> </small><a href="<?=base_url()?>stadium/profile/<?=$st->stadium_id?>" class="btn btn-default pull-right">More Info</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                                <div class="" style="padding-left: 710px" >
                                <a href="<?php echo base_url()?>stadium/allStadium "  class="btn btn-default ">All Stadium</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <?php include 'template/modal.php'; ?>

        <?php include 'template/footer.php'; ?>
<!--        <script>
              $('#clickme').on('mouseover', function (e) {
                
                    $(this).addClass('hover-bg');
                    
                
            }).on('mouseout', function (e) {
                
                    $(this).removeClass('hover-bg');
                    
                
            });
            </script>-->
        <?php include 'template/footer_scrpit.php'; ?>

    </body>
</html>