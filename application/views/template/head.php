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

        <link href="<?= base_url() ?>asset/css/bootstrap-switch.css" rel="stylesheet">
        <link href="<?= base_url() ?>asset/css/jquery-ui.css" rel="stylesheet">
        <link href="<?= base_url() ?>asset/css/ui.notify.css" rel="stylesheet">
        <link rel="stylesheet" href="<?= base_url() ?>asset/css/jquery.fileupload-ui.css">


        <link href="<?= base_url() ?>asset/material/css/ripples.min.css" rel="stylesheet">
        <link href="<?= base_url() ?>asset/material/css/material-wfont.min.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url() . 'module/DataTables/css/demo_table.css'; ?>" /> 
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
                height: 100%;
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
                            <!--                            <form class="navbar-form navbar-right" role="search">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" placeholder="Search">
                                                            </div>
                                                            <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
                                                        </form>-->




                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>

            </div>
        </div>
        <div style="clear:both;"></div>
        <!--
        <div class="container" style="margin-top:50px;">
            <div class="row">
                <div class="col-md- pull-right"> 
                    <form class="form-inline" role="form">
                        <label>สนาม : ภาค</label>
                        <select class="form-control">
                            <option>ภาคเหนือ</option>
                            <option>ภาคกลาง</option>
                            <option>ภาคตะวันออก</option>
                            <option>ภาคตะวันออกเฉียงเหนือ</option>
                            <option>ภาคใต้</option>
                        </select>
                        &nbsp;
                        <label>เขต</label>
                        <select class="form-control">
                            <option>เขต 1</option>
                            <option>เขต 2</option>
                            <option>เขต 3</option>
                            <option>เขต 4</option>
                            <option>เขต 5</option>
                        </select>
                    </form>

                </div>

            </div>
        </div>-->

        <div style="clear:both;"></div>
