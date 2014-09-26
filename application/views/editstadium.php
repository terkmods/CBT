<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<?php
include 'template/head.php';
$num = 1;
//print_r($data);
?>

<div class="container">
    <h4> <a href="#">หน้าหลัก</a> /Manage Stadium /<font style="color: green"><?php echo $this->session->flashdata('msg'); ?></font></h4> 
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">Account Settings</div>
            <div class="panel-body">

                <!--
                    <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Link</label>
                    <div class="col-sm-4 badge">
                      http://www.cbtonline.com/terkmods
                    </div>
                  </div>
                  <div style="clear:both; margin-top:20px;"></div>
                
                    <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-4">
                      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                    </div>
                  </div>
                  <div style="clear:both; margin-top:20px;"></div>
                
                   <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Password</label>
                    <div class="col-sm-4">
                      <input type="password" class="form-control" id="inputEmail3" placeholder="Password">
                    </div>
                  </div>
                    <div style="clear:both; margin-top:20px;"></div>
                
                   <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Language</label>
                    <div class="form-group">
                    <select class="col-sm-4">
                  <option>Thailand</option>
                  <option>English</option>
                </select></div>
                  </div>
                -->


                <div class="container">


                        <?php include 'template/sideSetting.php'; ?>
                    <div class="col-md-9">
                        <div class="row">
                            <ul class="nav nav-tabs" id="myTab">

                                <li class="active"><a href="#p1">ข้อมูลทั่วไป</a></li>
                                <li ><a href="#addcourt">คอร์ด</a></li>
                                <li ><a href="#mycourt">ตารางจอง</a></li> 
                                <li><a href="#p2">เพิ่มโค้ชประจำสนาม</a></li>
                                <li><a href="#p3">Blacklist</a></li>
                                <li><a href="#">เพิ่มข่าวประกาศ</a></li>
                                <li><a href="#">เพิ่มรูป</a></li>
                                <li><a href="#">เพิ่มกฎ</a></li>
                            </ul>
                            <div class="tab-content">
                                
                                <?php include 'Tabeditstadium/setting.php'; ?> <!--tab P1-->
                                <?php include 'Tabeditstadium/blacklist.php'; ?> <!--tab P2-->
                                 <?php include 'Tabeditstadium/coachfav.php'; ?> <!--tab P3-->
                                 <?php include 'Tabeditstadium/addcourt.php'; ?> <!--tab P3-->
                                 <?php include 'Tabeditstadium/mycourt.php'; ?> <!--tab P3-->
                            </div>

                            <div style="clear:both; margin-top:20px;"></div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'template/modal.php'; ?>

<?php include 'template/footer.php'; ?>
