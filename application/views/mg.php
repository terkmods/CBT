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
$status = $ow->authenowner_status;
$isopen = null;

    $isopen = $ow->authenowner_status;


?>

<div class="container">
    <h4> <a href="#"></a> Manage Stadium </h4>
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
                            <?php if ($isopen == 1) { ?>
                                <div class="alert alert-dismissable alert-warning">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong>Please wating !</strong> admin will approve <a data-toggle="modal" href="#viewAlthenwating" class="alert-link">Click here to more info</a>
                                </div>
                            <?php } else if($isopen == 0) { ?>
                                <div class="alert alert-dismissable alert-danger">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong>Please upload !</strong> the evidence to open the stadium <a data-toggle="modal" href="#approve" class="alert-link">Click here to upload</a>
                                </div>
                            <?php } else if($isopen == 2) { ?>
                                <div class="alert alert-dismissable alert-success">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>Well done!</strong> You successfully Click <a href="http://cbt.backeyefinder.in.th/users/changestatus" class="alert-link">this to close</a>.
</div>
                            <?php } else if($isopen == 99){?>
                            <div class="alert alert-dismissable alert-danger">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong>Reject!</strong> the evidence have something wrong please <a data-toggle="modal" href="#viewAlthenReject" class="alert-link">Check this</a>
                                </div>
                            <?php } else{?>
                        
                            <?php }?>
                            <ul class="nav nav-tabs" id="myTab">

                                <li class="active"><a href="<?php echo base_url() ?>stadium/add">Add Stadium</a></li>

                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="addStium">
                                    <form action="<?php echo base_url() ?>stadium/deletestadium" method="post">
                                        <div style="margin: 20px 10px 10px 0px">
                                            <?php if ($stadium == NULL) { ?> 
                                                <a href="<?php echo base_url() ?>stadium/add"  class="btn btn-success" role="button">Add stadium</a>
                                            <?php } else { ?>
                                                <a href="<?php echo base_url() ?>stadium/add"  class="btn btn-success" role="button">Add stadium</a>
                                                <input type="submit" class="btn btn-danger" value="Delete stadium" onclick="del()">
                                            <?php } ?>
                                            <?php echo $this->session->flashdata('msg'); ?>
                                        </div>
                                        <table class="table tablecompare">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>numbering</th>
                                                    <th>stadium name</th>

                                                    <th>court</th>
                                                    <th>rule</th>
                                               
                                                    <th>status</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                foreach ($stadium as $row) {
                                                    $isopen = $isopen + $row->stadium_display;
                                                    echo '  
                                                              
                                                        <tr>
                                                            <td><input type="checkbox" name="num[]" value="' . $row->stadium_id . '"></td>
                                                            <td>' . $num++ . '</td>
                                                            <td><a href="'
                                                    ?> <?php echo base_url() ?><?php echo 'stadium/profile/' . $row->stadium_id . '" class="btn ">' . $row->stadium_name . '<input type="hidden" name=id value="' . $row->stadium_id . '"</td>
                                                             ' ?> 

                                                    <?php if ($row->court_check != 0) { ?>
                                                        <?php
                                                        echo '  <td><span class="label label-success">Already add court</span></td>';
                                                    } else {
                                                        echo '  <td><span class="label label-danger">No court added yet</span></td>';
                                                    }
                                                    ?>
                                                    <?php if ($row->rule != null) { ?>
                                                        <?php
                                                        echo '  <td><span class="label label-success">Already add Rule</span></td>';
                                                    } else {
                                                        echo '  <td><span class="label label-danger">No Rule added yet</span></td>';
                                                    }
                                                    ?>



                                                    <?php echo '
                                                           
                                                
                                                            
                                                            <td> '
                                                    ?>

                                                    <?php
                                                    if ($status == '0'  ) {
                                                        echo '
                                                                  <a data-toggle="modal" href="#approve" class="btn btn-danger btn-xs">Inactive</a>';
                                                    } else if ($status == '1') {
                                                        echo '<span class="label label-danger">waiting for approval</span>';
                                                    } else if ($status =='2' || $status =='6') {
                                                        echo '<span class="label label-success">Active</span>';
                                                    }else{
                                                         echo '<span class="label label-danger">waiting for approval</span>';
                                                    }
                                                    ?>
                                                    <?php echo '</td>
                                                            <td><a href=' ?> <?php echo base_url() ?><?php
                                                    echo 'stadium/updatestadium/' . $row->stadium_id . ' class="btn ">edit</a></td>
                                                            
                                                        </tr>'
                                                    ;
                                                }
                                                ?>


                                            </tbody>                                                
                                        </table>

                                    </form>
                                </div>



                            </div><!--end tab -->


                        </div>


                    </div>
                </div>

                <div style="clear:both; margin-top:20px;"></div>


            </div>
        </div>
    </div>
</div>
<div class="modal fade bs-example-modal-lg" id="viewAlthenwating" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="background-color: #f5f5f5">
            <form id="addcontent" action="<?=base_url()?>admin/approve" method="post" enctype="multipart/form-data">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Authentication </h4>
                </div>
                <div class="modal-body-booking" style="background-color: white;padding:30px">
                    <div class="row">
                        <div class="col-md-12">
                            <legend style="font-style: italic;text-align: right">Authentication Detail</legend>
                        </div>
                        <div class="col-md-4" style="text-align: center;margin-bottom: 30px;margin-left: 60px">
                            <!--<h5 style="text-align: center"> Image</h5>-->
                            <img id="path" style="width: 340px;height: 370px;" src="<?= base_url() ?>asset/images/evidence/<?=$ow->authenowner_path?>" class="img-thumbnail">
                        <a data-toggle="modal" href="#approve" class="btn btn-danger btn-xs">Edit</a>
                        </div>
                        <div class="col-md-7" style="margin-top: 0px">
                            <legend style="font-style: italic;text-align: left">ระเบียบการขอเปิดสนาม</legend>
                          
<p> 
    - ขนาดสนาม: ความกว้าง 610 ซม. และความยาว 1340 ซม. (ภายในเส้น) <br>
- ความสูงของสนามไม่ควรต่ำกว่า 10 เมตร (โดยวัดจากจุดต่ำสุดของคานหลังคา)<br>
- ความห่างของแต่ละสนามขั้นต่ำ 100 ซม. (วัดจากเส้นข้างสนามทั้งสอง)<br>
- ด้านหลังสนามควรมีพื้นที่ปลอดภัยจากเส้นหลังสนามขั้นต่ำ 80 ซม.<br>
- เส้นมีขนาด 4ซม. เป็นสีขาวหรือสีเหลือง(ต้องไม่สะท้อนแสง)<br>
- ไฟสนาม (แบบแผงข้าง) วัดจากใต้โครงแผงไฟถึงพื้นสนาม ขั้นต่ำ 3 เมตร 
  (1 สนาม ใช้ประมาณ 22-30 หลอด ต่อสนาม)<br>
- ไฟสนาม(High-Bay) หรือโคมโรงงาน ควรอยู่บริเวณเส้นข้างสนามข้างละ<br>
ประมาณ 4-5 ตัว (1สนามควรใช้ประมาณ 8-10ตัว)</p>
 <button id="close_modal" type="button" class="btn btn-danger" data-dismiss="modal" >Close</button>
                            <!--<input type="subm" value="Send" class="btn btn-primary">-->
                        </div>
                    </div>
                </div>
                <div class="modal-footer" style="text-align: center">
                    <span id="ajaxscript"></span>
                    <!--<button id="close_modal" type="button" class="btn btn-danger" data-dismiss="modal" >Close</button>
                    -->
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade bs-example-modal-lg" id="viewAlthenReject" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="background-color: #f5f5f5">
            <form id="addcontent" action="<?=base_url()?>admin/approve" method="post" enctype="multipart/form-data">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Authentication </h4>
                </div>
                <div class="modal-body-booking" style="background-color: white;padding:30px">
                    <div class="row">
                        <div class="col-md-12">
                            <legend style="font-style: italic;text-align: right">Reject Detail</legend>
                        </div>
                        <div class="col-md-4" style="text-align: center;margin-bottom: 30px;margin-left: 60px">
                            <!--<h5 style="text-align: center"> Image</h5>-->
                            <img id="path" style="width: 340px;height: 370px;" src="<?= base_url() ?>asset/images/evidence/<?=$ow->authenowner_path?>" class="img-thumbnail">
                       
                        </div>
                        <div class="col-md-7" style="margin-top: 0px">
                            <legend style="font-style: italic;text-align: left">เกิดข้อผิดพลาด</legend>
                            <p><?=$ow->reason?></p>
                          <legend style="font-style: italic;text-align: left">อัพโหลดหลักฐานใหม่</legend>
                         
                                <a data-toggle="modal" href="#approve" class="btn btn-primary btn-xs">Upload</a>
 <button id="close_modal" type="button" class="btn btn-danger" data-dismiss="modal" >Close</button>
                            <!--<input type="subm" value="Send" class="btn btn-primary">-->
                        </div>
                    </div>
                </div>
                <div class="modal-footer" style="text-align: center">
                    <span id="ajaxscript"></span>
                    <!--<button id="close_modal" type="button" class="btn btn-danger" data-dismiss="modal" >Close</button>
                    -->
                </div>
            </form>
        </div>
    </div>
</div>
<?php include 'template/modal.php'; ?>
<?php include 'template/footer.php'; ?>


<?php include 'template/footer_scrpit.php'; ?>

</body>
</html>
