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
        <link href="<?= base_url() ?>asset/material/css/ripples.min.css" rel="stylesheet">
        <link href="<?= base_url() ?>asset/material/css/material-wfont.min.css" rel="stylesheet">

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
        <style>
            html, body, #map-canvas {
                height: 500px;
                margin: 0px;
                padding: 0px
            }
        </style>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>

    </head>
    <body>
        <div class="navbar navbar-default">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?= base_url() ?>home"><img src="../../../asset/images/logo-white.png"></a>
            </div>
            <div class="navbar-collapse collapse navbar-responsive-collapse">


                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="mdi-social-notifications-on"></span><span class="badge" id="noti"> 10</span></a></li>

                    <?php if ($this->session->userdata('role') == "coach") { ?>
                        <li><a href="<?= base_url() ?>users/coachProfile/<?php echo $this->session->userdata('id') ?>"><?php echo $this->session->userdata('profile_url') ?></a></li>
                    <?php } else if ($this->session->userdata('role') == "user") { ?> 
                        <li><a href="<?= base_url() ?>users/profile/<?php echo $this->session->userdata('id') ?>"><?php echo $this->session->userdata('profile_url') ?></a></li>
                    <?php } else { ?>
                        <li><a href="<?= base_url() ?>stadium"><?php echo $this->session->userdata('profile_url') ?></a></li>
                    <?php } ?>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-cog"></span> <b class="caret"></b></a>
                        <ul class="dropdown-menu" >

                            <?php if ($this->session->userdata('role') == "owner") { ?>
                                <li><a href="#">Dash board</a></li>
                                <li><a href="#">My Booking</a></li>
                                <li class="subdrop"><a href="#">Manage Stadium</a></li>
                                <li class="divider"></li>
                                <?php foreach ($this->session->userdata('stadium') as $row) { ?>
                                    <li class="submenudrop"><a href="<?php echo base_url() ?>stadium/updatestadium/<?= $row->stadium_id ?>"><?= $row->stadium_name ?></a></li>
                                <?php } ?>
                                <li class="submenudrop divider"></li>
                            <?php } else { ?>
                                <li><a href="#">My Booking</a></li>   
                            <?php } ?>
                            <li><a href="#">Favorit Stadium</a></li>
                            <li><a href="#">Edit Profile</a></li>
                            <li><a href="<?php if ($this->session->userdata('role') == "owner") { ?><?= base_url() ?>stadium <?php } else { ?>  <?= base_url() ?>users/edituser/<?= $this->session->userdata('id') ?>  <?php } ?>" >

                                    Settings</a></li>



                            <li class="divider"></li>
                            <li><a href="<?= base_url() ?>users/logout">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>

        <div style="clear:both;"></div>
        <script>
            if (window.EventSource) {
                var eventSource = new EventSource("<?php echo base_url('notification/total_noti'); ?>");
                eventSource.addEventListener('total_noti', function(event) {
// 				console.log(event.data);
                    $("#noti").html(event.data);
                }, false);
            }
        </script>

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
                                <li><img  src="<?= base_url() ?>asset<?= $user['0']->profilepic_path != null ? '/images/profilepic/' . $user['0']->profilepic_path . '' : '/images/profil.jpg' ?>" class="img-thumbnail" style="width: 50%;"></li>
                                <?php if ($this->session->userdata('role') == "user") { ?>
                                    <li><a href="<?= base_url() ?>users/profile/<?= $user['0']->user_id ?>">My Profile</a></li>
                                <? } else if ($this->session->userdata('role') == "owner") { ?>
                                    <li><a href="<?= base_url() ?>owner/profile/<?= $user['0']->user_id ?>">My Profile</a></li>
                                <? } else { ?>
                                    <li><a href="<?= base_url() ?>coach/profile/<?= $user['0']->user_id ?>">My Profile</a></li>
                                <? } ?>

                                <?php if ($this->session->userdata('role') == "user") { ?>
                                    <li><a href="<?= base_url() ?>users/edituser/<?= $user['0']->user_id ?>">Edit Profile</a></li>
                                <? } else if ($this->session->userdata('role') == "owner") { ?>
                                    <li><a href="<?= base_url() ?>owner/editProfile/<?= $user['0']->user_id ?>">Edit Profile</a></li>
                                <? } else { ?>
                                    <li><a href="<?= base_url() ?>coach/editProfile/<?= $user['0']->user_id ?>">Edit Profile</a></li>
                                <? } ?>

                                <li><a href="<?= base_url() ?>booking/historybooking">My Booking </a></li>
                                <li><a href="<?= base_url() ?>stadium/allStadium">Search</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><span class="glyphicon glyphicon-list-alt"> </span>  Recommended Stadium</h3>
                            </div>
                            <div class="panel-body">

                                <div class="thumbnail">
                                    <img src="<?php echo base_url() ?>asset/images/stadiumpic/p1.jpg" alt="">
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



                                <div class="thumbnail">
                                    <img src="<?php echo base_url() ?>asset/images/stadiumpic/p2.jpg" alt="">
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



                                <div class="thumbnail">
                                    <img src="<?php echo base_url() ?>asset/images/stadiumpic/p3.jpg" alt="">
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


                <div class="col-md-9">
                    <!--                                        <div class="row">
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
                                                               
                                                            </div>  เก็บไว้ก่อน !-->
                    <div class="text-center">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><span class="glyphicon glyphicon-list-alt"> </span>  Nearby Stadium</h3>
                            </div>
                            <div class="panel-body"></div>     
                            <div id="map-canvas"></div> 
                        </div>
                    </div>
                    <div class="text-center">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><span class="glyphicon glyphicon-list-alt"> </span>  Search Stadium</h3>
                            </div>  
                            <form class="form-horizontal" method="post" action="<?php echo base_url() ?>stadium/searchAdvance">
                                <div class="panel-body">

                                    <div class="col-md-12">
                                        <div class="col-md-6 col-md-offset-3">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon glyphicon glyphicon-search"></span>
                                                    <input type="text" class="form-control" name="value1" placeholder="ค้นหาจากชื่อสนาม">

                                                    <span class="input-group-btn">  
                                                        <button class="btn btn-primary" type="submit" >Search</button>
                                                    </span>
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="col-md-5 col-md-offset-1">                                       
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon glyphicon  ">District</span>
                                                    <select class="form-control" id="select" name="value2">
                                                        <option value="all">เลือกทุกเขต</option>  
                                                        <?php foreach ($district as $row) { ?>
                                                            <option value="<?= $row->district ?>"><?= $row->district ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-md-5">

                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon ">Province</span>
                                                    <select class="form-control" id="select" name="value3">
                                                        <option value="all">เลือกทุกจังหวัด</option> 
                                                        <?php foreach ($province as $row) { ?>
                                                            <option value="<?= $row->province ?>"><?= $row->province ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-6 col-md-offset-3">
                                        <button class="btn btn-success" type="button" onclick="showAdsearch(this)">Advance Search</button> 
                                    </div>
                                </div>
                                
                                <div id="advancefun" class="row">
                                    <div class="col-md-12">
                                        <legend class="pull-left">Floor Type</legend>
                                        <div class="form-group">
                                            <div class="col-md-2 col-md-offset-3">
                                                <div class="checkbox pd" >
                                                    <label>
                                                        <input type="checkbox" name="floortype"  value="พื้นปูน"> พื้นปูน
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="checkbox pd" >
                                                    <label>
                                                        <input type="checkbox" name="floortype2"  value="พื้นยาง"> พื้นยาง
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="checkbox pd" >
                                                    <label>
                                                        <input type="checkbox" name="floortype3"  value="พื้นปาร์"> พื้นปาร์เก้
                                                    </label>
                                                </div>
                                            </div>

                                            <!--แบ่ง-->

                                        </div>

                                    </div>  
                                    <div class="col-md-12">
                                        <legend class="pull-left">Facility</legend>
                                        <div class="form-group">
                                            <div class="col-md-2 col-md-offset-1">
                                                <div class="checkbox pd" >
                                                    <label>
                                                        <input type="checkbox" name="f1"  value="1"> Parking
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="checkbox pd" >
                                                    <label>
                                                        <input type="checkbox" name="f2"  value="1"> Food Shop
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="checkbox pd" >
                                                    <label>
                                                        <input type="checkbox" name="f3"  value="1"> Bathroom
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="checkbox pd" >
                                                    <label>
                                                        <input type="checkbox" name="f4"  value="1"> Racket Repair
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="checkbox pd" >
                                                    <label>
                                                        <input type="checkbox" name="f5"  value="1"> Shop
                                                    </label>
                                                </div>
                                            </div>

                                            <!--แบ่ง-->

                                        </div>

                                    </div>

                                </div>

                            </form>



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
                                                                <a href="<?php echo base_url() ?>stadium/profile/<?= $st->stadium_id ?>" ><img src="<?php echo base_url() ?>asset/images/<?= $st->stadium_path != null ? 'stadiumpic/' . $st->stadium_path . '' : 'bad.png' ?>" /></a>
                                                            </div>
                                                            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                                                                <div class="clearfix">
                                                                    <div class="pull-left">
                                                                        <a href="<?php echo base_url() ?>stadium/profile/<?= $st->stadium_id ?>" > <span class="fa fa-map-marker icon"> <?= $st->stadium_name ?></span>  </a>
                                                                    </div>
                                                                    <div class="pull-right" style="margin-top: 10px;"> 
                                                                        โทร  <?= $st->tel != null ? $st->tel : '-' ?>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <h5><span class="fa fa-map-marker icon"></span>  ซอย <?= $st->soi != null ? $st->soi : '-' ?> ,ถนน <?= $st->road != null ? $st->road : '-' ?></h5>
                                                                    <small><?= $st->district != null ? $st->district : '-' ?>,<?= $st->province != null ? $st->province : '-' ?> </small>
                                                                </div>
                                                                <a href="<?= base_url() ?>stadium/profile/<?= $st->stadium_id ?>" class="btn btn-default pull-right">More Info</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                            <div class="" style="padding-left: 670px" >
                                                <a href="<?php echo base_url() ?>stadium/allStadium "  class="btn btn-default ">All Stadium</a>
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
                <script>
            // The following example creates complex markers to indicate beaches near
            // Sydney, NSW, Australia. Note that the anchor is set to
            // (0,32) to correspond to the base of the flagpole.
            var map;
            var infowindow1;
            var mk;
            var cir;

            var markers = [];
            var image = {
                url: 'http://cbt.backeyefinder.in.th/asset/images/markerbad.png',
                // This marker is 20 pixels wide by 32 pixels tall.
                size: new google.maps.Size(20, 32),
                // The origin for this image is 0,0.
                origin: new google.maps.Point(0, 0),
                // The anchor for this image is the base of the flagpole at 0,32.
                anchor: new google.maps.Point(0, 32)
            };
            var rad = function(x) {
                return x * Math.PI / 180;
            };


            function initialize() {
                var mapOptions = {
                    zoom: 15

                }
                infowindow1 = new google.maps.InfoWindow();
                map = new google.maps.Map(document.getElementById('map-canvas'),
                        mapOptions);
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(function(position) {
                        var pos = new google.maps.LatLng(position.coords.latitude,
                                position.coords.longitude);

                        if (mk != null)
                            mk.setMap(null);
                        mk = new google.maps.Marker({position: new google.maps.LatLng(position.coords.latitude, position.coords.longitude), map: map, draggable: false, animation: google.maps.Animation.DROP});

                        map.setCenter(pos);
                        x = pos.lat();
                        y = pos.lng();
                        var r = 1000;
                        setCircle(r);
                    }, function() {
                        handleNoGeolocation(true);
                    });
                } else {
                    // Browser doesn't support Geolocation
                    handleNoGeolocation(false);
                }
                // setMarkers(map, beaches);

                $.getJSON('http://cbt.backeyefinder.in.th/home/test', function(json) {

                    $(json).each(function(k, v) {
                        eachmaker(v);
                    });
                });

                //                google.maps.event.addListener(mk, 'click', function () {
                //                    alert("hello");
                //                });

                google.maps.event.addListener(map, "click", function(event) {
                    if (mk != null)
                        mk.setMap(null);
                    mk = new google.maps.Marker({position: event.latLng, map: map, draggable: false, animation: google.maps.Animation.DROP});
                    x = event.latLng.lat();
                    y = event.latLng.lng();
                    console.log(x + ',' + y);
                    var r = 1000;
                    setCircle(r);
                });
            }

            function eachmaker(rs) {
                console.log(rs.lat);
                console.log(rs.long);
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(rs.lat, rs.long),
                    map: map,
                    animation: google.maps.Animation.DROP,
                    icon: image

                });

                var htmlForMap = '<div class="row">' +
                        '<div class="col-md-6 col-sm-6">' +
                        ' <img src="http://cbt.backeyefinder.in.th/asset/images/' + (rs.stadium_path != "" ? 'stadiumpic/' + rs.stadium_path : 'bad.png') + '" width=200px alt="">' +
                        ' </div>' +
                        '<div class="col-md-6 col-sm-6">' +
                        ' <div class="caption">' +
                        '<h3>' + rs.stadium_name + '</h3>' +
                        ' <p>ที่อยู่:' + rs.address_no + '' + rs.soi +
                        ' ' + rs.road + '' + rs.district +
                        '</p>' +
                        ' <p>เบอโทร:' + (rs.tel != "" ? rs.tel : '-') + '</p>' +
                        ' <p>' +
                        '  <a href="http://cbt.backeyefinder.in.th/booking/reserve/' + rs.stadium_id + '" class="btn btn-primary">Book Now!</a> <a href="<? echo base_url() ?>stadium/profile/' + rs.stadium_id + '" class="btn btn-default">More Info</a>' +
                        '</p>' +
                        '</div>' +
                        ' </div>' +
                        '</div>';


                google.maps.event.addListener(marker, 'click', function() {
                    infowindow1.setContent(htmlForMap);
                    infowindow1.open(map, marker);
                });
                markers.push(marker);

            }

            /**
             * Data for the markers consisting of a name, a LatLng and a zIndex for
             * the order in which these markers should display on top of each
             * other.
             */





            function handleNoGeolocation(errorFlag) {
                if (errorFlag) {
                    var content = 'Error: The Geolocation service failed.';
                } else {
                    var content = 'Error: Your browser doesn\'t support geolocation.';
                }

                var options = {
                    map: map,
                    position: new google.maps.LatLng(60, 105),
                    content: content
                };

                var infowindow = new google.maps.InfoWindow(options);
                map.setCenter(options.position);
            }
            function setCircle(radius) {
                // document.getElementById("span-radius").innerHTML=radius;
                if (cir != null)
                    cir.setMap(null);
                var r = parseInt(radius);
                cir = new google.maps.Circle({
                    strokeColor: '#82B1F7',
                    strokeOpacity: 0.8,
                    strokeWeight: 2,
                    fillColor: '#82B1F7',
                    fillOpacity: 0.35,
                    map: map,
                    center: new google.maps.LatLng(x, y),
                    radius: r
                });
                map.setCenter(new google.maps.LatLng(x, y));
                if (mk != null)
                    search(x, y, r);
            }
            function search(x, y, radius) {
                removeResultSearch();
                //                $('#h1-loader').removeClass('hidden').hide().slideDown(500);
                var fullpart = "http://cbt.backeyefinder.in.th/map/nearbysearch/";

                isSearch = true;
                $.ajax({
                    type: "post",
                    url: fullpart,
                    data: {x: x, y: y, r: radius}
                }).done(function(msg) {
                    isSearch = false;
                    console.log(msg);
                    var obj = JSON.parse(msg);
                    //                                alert(obj.avgpoint);
                    console.log(obj);
                    $(obj).each(function(k, v) {
                        eachmaker(v);
                    });

                });

            }
            function removeResultSearch() {
                for (var i = 0; i < markers.length; i++) {
                    markers[i].setMap(null);
                }
                markers = [];
                //                $('#div-result-search').html('<span id="span-result-search"></span>');
            }

            google.maps.event.addDomListener(window, 'load', initialize);

                </script>
                <script>


                    //            function addRestaurant(rs){
                    //                var marker = new google.maps.Marker({
                    //                    position: new google.maps.LatLng(rs.x,rs.y),
                    //                    map: map,
                    //                    animation: google.maps.Animation.DROP,
                    //                    icon: rs.cuisinePic+"-marker.png"
                    //                });
                    //                var cuisineImg='';
                    //                $(rs.cuisine).each(function(k,cu){
                    //                    cuisineImg+='<span><img src="'+cu.picPath+'" style="width: 25px" alt="'+cu.name+'"></span>';
                    //                }); 
                    //                var htmlForMap =  '<div class="row">'+
                    //                                '<div class="col-sm-6">'+
                    //                                    '<img src="'+rs.picPath+'" class="img-responsive">'+
                    //                                '</div>'+
                    //                                '<div class="col-sm-6">'+
                    //                                    '<h3 class="text-center">ร้าน "'+rs.name+'"</h3>'+
                    //                                    '<div class="text-center"'+cuisineImg+"</div>"+
                    //                                    '<dl>'+
                    //                                        '<dt>คำอธิบาย</dt>'+
                    //                                        '<dd>'+rs.detail+'</dd>'+
                    //                                    '</dl>'+
                    //                                    '<dl>'+
                    //                                        '<dt>ระดับ</dt>'+
                    //                                        '<dd>'+rs.star+' ดาว</dd>'+
                    //                                    '</dl>'+
                    //                                    '<dl>'+
                    //                                        '<dt>ติดต่อ</dt>'+
                    //                                        (rs.tel!=null?
                    //                                            '<dd><i class="fa fa-phone"></i> '+rs.tel+'</dd>':''
                    //                                        )+
                    //                                        (rs.email!=null?
                    //                                            '<dd><i class="fa fa-envelope"></i> '+rs.email+'</dd>':''
                    //                                        )+
                    //                                        (rs.website!=null?
                    //                                            '<dd><i class="fa fa-globe"></i> '+rs.website+'</dd>':''
                    //                                        )+
                    //                                    '</dl>'+
                    //                                '</div>'+
                    //                            '</div>'+
                    //                            '<div class="row">'+
                    //                                '<div class="col-sm-12">'+
                    //                                    '<a href="cvrs?id='+rs.id+'" class="btn btn-primary btn-block"><i class="fa fa-arrow-right"></i> เข้าสู่หน้าร้าน</button>';
                    //                                '</div>'+
                    //                            '</div>';
                    //                google.maps.event.addListener(marker, 'click', function() {
                    //                    infoWindow.setContent(htmlForMap);
                    //                    infoWindow.open(map,marker);
                    //                });
                    //                var htmlForList =  
                    //                        '<div class="col-md-3 col-xs-6">'+
                    //                            '<div class="well fix-h-400">'+
                    //                                '<div class="col-xs-12  fix-h-150" style="overflow-y: hidden;">'+
                    //                                    '<a href="cvrs?id='+rs.id+'">'+
                    //                                        '<img src="'+rs.picPath+'" class="img-responsive img-full">'+
                    //                                    '</a>'+
                    //                                '</div>'+
                    //                                '<div class="col-xs-12">'+
                    //                                    '<h4 class="text-center"><a href="cvrs?id='+rs.id+'">'+rs.name+'</a></h4>'+
                    //                                    '<div class="text-center">'+
                    //                                        '<input type="hidden" class="rating" data-filled="fa fa-star text-primary" data-empty="fa fa-star-o text-primary" value="'+(rs.rating-1)+'" disabled>'+
                    //                                    '</div>'+
                    //                                    (rs.tel!=null?'<h6 class="help-block"><i class="fa fa-phone"></i> '+rs.tel+'<h6>':'')+
                    //                                    (rs.email!=null?'<h6 class="help-block"><i class="fa fa-envelope"></i> '+rs.email+'<h6>':'')+
                    //                                    (rs.website!=null?'<h6 class="help-block"><i class="fa fa-globe"></i> '+rs.website+'<h6>':'')+
                    //                                    (rs.detail!=null?'<p>'+rs.detail+'</p>':'')+
                    //                                '</div>'+
                    //                            '</div>'+
                    //                        '</div>';
                    //                $(htmlForList).insertBefore($('#span-result-search'));
                    //                markers.push(marker);
                    //            }


                </script>
                <script>
                    $(document).ready(function(e) {
                        $('#advancefun').hide();

                    });
                    function showAdsearch() {
                        //        alert("show");
                        $('#advancefun').toggle();

                    }


                </script>
                <?php include 'template/footer_scrpit.php'; ?>

                </body>
                </html>