<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home</title>

        <!-- Bootstrap -->
        <link href="<?= base_url() ?>asset/css/bootstrap.css" rel="stylesheet">
        <link href="<?= base_url() ?>asset/css/datepicker3.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>asset/css/style.css">
        <link href="<?= base_url() ?>asset/material/css/ripples.min.css" rel="stylesheet">
        <link href="<?= base_url() ?>asset/material/css/material-wfont.min.css" rel="stylesheet">
        <link href="<?= base_url() ?>asset/css/bootstrap-switch.css" rel="stylesheet">
        <link href="<?= base_url() ?>asset/css/jquery-ui.css" rel="stylesheet">
        <link href="<?= base_url() ?>asset/css/ui.notify.css" rel="stylesheet">
        <link rel="stylesheet" href="<?= base_url() ?>asset/css/jquery.fileupload-ui.css">
        <link rel="stylesheet" href="<?= base_url() ?>asset/css/bootstrap-submenu.min.css">



        <link rel="stylesheet" href="<?php echo base_url() . 'module/DataTables/css/demo_table.css'; ?>" />
        <!--<link rel="stylesheet" href="<?php echo base_url() . 'asset/css/datatable_css.css'; ?>" />--> 
        <link rel="stylesheet" href="<?php echo base_url() . 'module/loadover/loadover.css'; ?>" />
        <!--<link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'asset/css/ui-lightness/jquery-ui-1.10.3.custom.min.css'; ?>"/>-->
        <link href="<?= base_url() ?>asset/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />

        <link type="text/css" rel="stylesheet" href="<?= base_url() ?>asset/GalleryView/css/jquery.galleryview-3.0-dev.css" />
        <style type="text/css">
            .top-minus{
                margin-top: -20px !important;
                position: absolute;
                z-index: 999;
                top:317px;
                left: 100px;
            }
        </style>
        <style>
            html, body, #map-canvas {
                height: 500px;
                margin: 0px;
                padding: 0px
            }
            #panel {
                position: absolute;
                top: 1020px;
                left: 50%;
                margin-left: -260px;
                z-index: 5;
                background-color: #fff;
                padding: 5px;
                border: 1px solid #999;
            }
            #address {
                background-color: #fff;
                padding: 0 11px 0 13px;
                width: 400px;
                font-family: Roboto;
                font-size: 15px;
                font-weight: 300;
                text-overflow: ellipsis;
            }

            #address:focus {
                border-color: #4d90fe;
                margin-left: -1px;
                padding-left: 14px;  /* Regular padding-left + 1. */
                width: 401px;
            }
            #directions-panel {
/*                height: 100%;*/
                float: right;
                width: 390px;
                overflow: auto;
            }
            #directions-panel {
                float: none;
                width: auto;
            }


        </style>

        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places"></script>
    </head>

    <body>



        <div class="navbar navbar-default">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?= base_url() ?>"><img src="../../../asset/images/logo-white.png"></a>
            </div>
            <div class="navbar-collapse collapse navbar-responsive-collapse">
             
                <ul class="nav navbar-nav navbar-left">
                    <li><a href="http://cbt.backeyefinder.in.th/home">Home</a></li>
                    <li><a href="http://cbt.backeyefinder.in.th/stadium/allStadium">Search</a></li>
                    <li><a href="http://cbt.backeyefinder.in.th/map/nearbystadium">Nearby Stadium</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                     
        <?php if($this->session->userdata('role') ==null) { ?>
                      <li><a href="<?php echo base_url()?>reg">Register</a></li>
                                <li><a href="#" role="button" data-toggle="modal" data-target="#myModal">Sign in</a></li>
                                <li><a href="#">Contact Us</a></li>
        <?php } else { ?>
                     <li><a href="#"><span class="mdi-social-notifications-on"></span><span class="badge" id="noti"> </span></a></li>
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
        <?php } ?>
                                            </ul>
                                        </li>
                </ul>
            </div>
        </div>

        <div style="clear:both;"></div>
        <script>
            if(window.EventSource){
		var eventSource = new EventSource("<?php echo base_url('notification/total_noti');?>");
 		eventSource.addEventListener('total_noti', function(event) {
// 				console.log(event.data);
$("#noti").html(event.data);
		   }, false);
               }
            </script> 
           