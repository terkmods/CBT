
<?php include 'template/head.php'; ?>
<div class="container">
    <h4> <a href="#">หน้าหลัก</a> /Basic Setting </h4>
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">Account Settings</div>
            <div class="panel-body">
                <div class="container">
                    <?php include 'template/sideSetting.php'; ?>
                    <div class="col-md-9">
                        <div class="row">
                            <ul class="nav nav-tabs" id="myTab">
                                <li class="active"><a href="#addStium">Edit Profile</a></li>
                            </ul>
                            <div class="col-md-11">
                                <br>

                                <form class="form-horizontal" method="post" role="form" action="<?= base_url() ?>users/updateuser/<?= $this->uri->segment(3) ?>" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Profile picture</label>
                                        <div class ="col-md-5">
                                            <img src="<?= base_url() ?>asset/images/profilepic/<?= $data['0']->profilepic_path; ?>" width="200" alt="" class="img-thumbnail top-mar">
                                         
                                            <br>
                                            <a class="btn btn-default pull-left" role="button" data-toggle="modal" data-target="#uploadprofileuser">Upload Now</a>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control " name="email" value="<?= $data['0']->email; ?>" disabled>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-2 control-label">Profile url</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" name="profile_url" value="<?= $data['0']->profile_url; ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-2 control-label">type</label>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control" name="type" value="<?= $data['0']->type; ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-2 control-label">Status</label>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control" name="status" value="<?= $data['0']->status; ?>" disabled>
                                        </div>
                                    </div>
                                    <hr>


                                    <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-2 control-label">First Name</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="fname" value="<?= $data['0']->fname; ?>" >
                                        </div>
                                        <label for="inputPassword3" class="col-sm-2 control-label">Last Name</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="lname" value="<?= $data['0']->lname; ?>" >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-2 control-label">Gender</label>
                                        <div class="col-sm-2">
                                          
                                        <select class="form-control" name="gender"  >                                                                                   
                                            <option>male</option>
                                            <option>female</option>                                                                                                                                   
                                        </select>
                                        </div>
                                        
                                           
                                       
                                        <label for="inputPassword3" class="col-sm-2 control-label">Birth Date</label>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" name="birthdate" value="<?= $data['0']->birthdate; ?>" >
                                        </div>                             
                                    </div>

                                    <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-2 control-label">Style</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="style" value="<?= $data['0']->Style; ?>" >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-2 control-label">Club</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="club" value="<?= $data['0']->club; ?>" >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-2 control-label">Address</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="address" value="<?= $data['0']->address; ?>" >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-2 control-label">Phone Number</label>
                                        <div class="col-sm-10">
                                            <input type="tel" class="form-control" name="phone" value="<?= $data['0']->phone; ?>" >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-2 control-label">Facebook</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="facebook" value="<?= $data['0']->facebook; ?>" >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-2 control-label">Twitter</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="twitter" value="<?= $data['0']->twitter; ?>" >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-2 control-label">Google+</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="googleplus" value="<?= $data['0']->googleplus; ?>" >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-2 control-label">Instagram</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="instargram" value=' <?= $data['0']->instagram; ?>' >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-2 control-label">About Me</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="aboutme" value=' <?= $data['0']->aboutme; ?> '>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <button type="submit" class="btn btn-default">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>            
                    </div> 
                </div>
            </div>       
        </div>        
    </div>
</div>
<?php include 'template/modal.php'; ?>
<?php include 'template/footer.php'; ?>
<?php include 'template/footer_scrpit.php'; ?>

</body>
</html>