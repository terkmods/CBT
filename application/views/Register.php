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
        <title>Register</title>
        <script type="text/javascript">
            $('input[type=file]').bootstrapFileInput();
            $('.file-inputs').bootstrapFileInput();
        </script>
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

        <div >
            <div class="container">
                <center><img src="../../asset/images/logo.png" class="top-mar"></center>
                <div style="clear:both;"></div>
                <div class="row top-mar">
                    <br><br><br>
                    <div class="col-md-6"><br><br><br><br><br><br><br><br>
                        <center><a href="#"><img src="../../asset/images/loginfacebook.png" class="top-mar"></a></center>
                    </div>
                    <div class="col-md-6">
                        <form action="reg/register" method="post">
                            Who are you? <br>
                            <p>
                                <label>
                                    <input type="radio" name="typeuser" id="optionsRadios1" value="user" checked>
                                    &nbsp;&nbsp; User
                                </label>

                                <label>
                                    <input type="radio" name="typeuser" id="optionsRadios2" value="owner">
                                    &nbsp;&nbsp; Owner
                                </label>

                                <label>
                                    <input type="radio" name="typeuser" id="optionsRadios2" value="coach">
                                    &nbsp;&nbsp; Coach
                                </label>
                            </p>
                            <p></p> 
                            <p>www.cbtonline.in.th/<input type="text" class="input-url" name="url" placeholder="Profile URL (limit 4-24)" required=""></p>
                            <p>
                            <div class="col-xs-8">
                                <input type="text" class="form-control input-lg top-mar" placeholder="Email" name="email" required=""></div>
                            <div class="clear"></div>
                            <div class="col-xs-8"><input type="password"  class="form-control input-lg top-mar" name="pass" placeholder="Password" required=""></div>
                            <div class="clear"></div>
                            <div class="col-xs-8"><input type="password"  class="form-control input-lg top-mar" name="pass-con" placeholder="Confirm Password"></div>
                            <div class="clear"></div>
                            <div class="col-xs-8"><input type="tel"  class="form-control input-lg top-mar" name="tel" placeholder="mobile-phone" required=""></div>
                            <div class="clear"></div>
                            <hr>
                            <p class="top-mar">
                                Profile Picture<br></p>
                            <p>
                                <img src="../../asset/images/profile-placeholder.png" alt="..." class="img-thumbnail top-mar">
                                <input type="file" title="Search for a file to add" class="top-mar ">
                            </p>
                            <p class="top-mar"><button type="submit" name="SIGN_UP" class="btn btn-info btn-lg">Submit</button></p>
                        </form>
                    </div>
                </div>
            </div>

        </div>

        <div style="clear:both;"></div>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="divider"></div>

                    <div class="col-md-4">
                        <h3>Quick Links</h3>
                        <ul>
                            <li><a href="">Home</a></li>
                            <li><a href="">Stadiums</a></li>
                            <li><a href="">Players</a></li>
                            <li><a href="">Vanues</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4"><h3>About Us</h3>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum
                    </div>
                    <div class="col-md-4">
                        <h3>Contact us</h3>
                        <ul>
                            <li>ที่อยู่ :</li>
                            <li>เขต:</li>
                            <li>แขวง :</li>
                            <li>จังหวัด :</li>
                        </ul>
                    </div>
                </div>
                <div class="row copyright">Copyright 2014 - Badminton</div>
            </div>
        </footer>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="../../asset/js/bootstrap.min.js"></script>
    </body>
</html>