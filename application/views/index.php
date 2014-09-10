<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CBTonline</title>

        <!-- Bootstrap -->
        <link href="../../asset/css/bootstrap.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../../asset/css/style.css">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div id="body-home">
            <div class="top-home">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3"><img src="../../asset/images/logo.png"></div>



                        <?php
                       
                        if ($this->session->userdata('email') != NULL) {
                            include 'memlogin.php';
                        } else {
                            include 'guestmem.php';
                        }
                        ?>

                    </div>
                </div>
            </div>
            <!-- search -->
            <div class="container search-home">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="top-ul pull-right">
                            <li>
                                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked> &nbsp;&nbsp; Find court</li>
                            <li>
                                <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"> &nbsp;&nbsp;Find coach
                            </li>

                        </ul>
                        <div class="clear"></div>

                        <div class="btn-group top-mar col-md-8 pull-right">
                            <button class="btn btn-default btn-lg dropdown-toggle col-md-12" type="button" data-toggle="dropdown">
                                Select Districts <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu col-md-12" role="menu">
                                <li><a href="#">Thungkru</a></li>
                                <li><a href="#">Thonburi</a></li>
                                <li><a href="#">Thawi Wattana</a></li>
                            </ul>
                        </div>

                        <div class="btn-group top-mar col-md-8 pull-right">
                            <button class="btn btn-default btn-lg dropdown-toggle col-md-12" type="button" data-toggle="dropdown">
                                Choose one of the following <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu col-md-12" role="menu">
                                <li><a href="#">Thungkru</a></li>
                                <li><a href="#">Thonburi</a></li>
                                <li><a href="#">Thawi Wattana</a></li>
                            </ul>

                        </div>

                        <p class="btn-src pull-right">
                            <button type="button" class="btn btn-primary btn-lg" onclick="window.location.href = 'feeds.html'">Find!</button>
                        </p>


                    </div>
                    <div class="col-md-6">
                        <h1>
                            Find <b>Badminton Court</b> You like.</h1><h3>Along with right players.</h3>
                    </div>
                </div>
            </div> <!-- Search -->
            <div class="clear"></div>
            <div class="container line-foot">
                <center>
                    <img src="../../asset/images/line-foot.png" width="100%"> </center>
                <div class="row">
                    <div class="col-md-4">Created by IT-21 - 2014</div>
                    <div class="col-md-4 pull-right" style="text-align:right;">Copyright CBTonline 2014</div>
                </div>
            </div>
        </div> <!--body home -->

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="../../asset/js/bootstrap.min.js"></script>
        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">

                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Login</h4>
                    </div>
                    <form action="<?php echo base_url()?>users/dologin" method="post"> 
                        <div class="modal-body" style="text-align: center">
                            <input type="text" class="form-control input-lg top-mar" placeholder="Email" name="email" required="">
                            <input type="password"  class="form-control input-lg top-mar" name="pass" placeholder="Password" required="">

                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">foget password</button>
                            <button type="submit" name="submit" class="btn btn-primary">Login</button>


                        </div>
                    </form>
                </div>
            </div>
        </div>

    </body>
</html>