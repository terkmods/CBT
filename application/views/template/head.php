<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home</title>

        <!-- Bootstrap -->
        <link href="../../../asset/css/bootstrap.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../../../asset/css/style.css">
      
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <style type="text/css">
            .top-minus{
                margin-top: -20px !important;
                position: absolute;
                z-index: 999;
                top:317px;
                left: 100px;
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
                            <a class="navbar-brand" href="#"><img src="../../../asset/images/logo-white.png"></a>

                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="#">Notifications <span class="badge"> 10</span></a></li>
                                <li><a><?php echo $this->session->userdata('profile_url'); ?></a></li>

                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-cog"></span> <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Black List</a></li>
                                        <li><a href="#">Privacy</a></li>
                                        <li><a href="setting.html">Settings</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">Logout</a></li>
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