<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<?php include 'template/head.php';
$num = 1    ;
$status = $ow->authenowner_status; ?>

<div class="container">
    <h4> <a href="#">หน้าหลัก</a> /Manage Stadium </h4>
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

                                <li class="active"><a href="#addStium">เพิ่มสนาม</a></li>

                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="addStium">
                                    <form action="<?php echo base_url() ?>stadium/deletestadium" method="post">
                                    <div style="margin: 20px 10px 10px 0px">
                                        
                                        <a data-toggle="modal" data-target="#addstadium" class="btn btn-success" role="button">Add stadium</a>
                                        <input type="submit" class="btn btn-danger" value="Delete stadium" onclick="del()">
<?php echo $this->session->flashdata('msg'); ?>
                                    </div>
                                    <table class="table tablecompare">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>ลำดับ</th>
                                                <th>ชื่อสนาม</th>

                                                <th>คอร์ด</th>
                                                <th>กฏ</th>
                                                <th>URL</th>
                                                <th>สถานะ</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($stadium as $row) {
                                                echo '  
                                                              
                                                        <tr>
                                                            <td><input type="checkbox" name="num[]" value="'.$row->stadium_id.'"></td>
                                                            <td>' . $num++ . '</td>
                                                            <td>' . $row->stadium_name . '<input type="hidden" name=id value="' . $row->stadium_id . '"</td>
                                                             '?> 
                                            
                                                            <?php if($row->court_check!=0){ ?>
                                                            <?php echo '  <td><span class="label label-success">เพิ่มคอร์ดแล้ว</span></td>'; }   else {
                                                                    echo '  <td><span class="label label-danger">ยังไม่เพิ่มคอร์ด</span></td>';
                                                                 }?>
                                                           
                                                           
                                                          
                                             <?php echo '
                                                           
                                                
                                                            <td><a href="'?> <?php echo base_url() ?><?php echo 'stadium/profile/'.$row->stadium_id.'" class="btn ">' . $row->stadium_url . '</a></td>
                                                            <td> '
                                                ?>

                                                <?php
                                                if ($status == 'no') {
                                                    echo '
                                                                  <a data-toggle="modal" href="#approve" class="btn btn-danger btn-xs">Inactive</a>';
                                                } else if ($status == 'wait') {
                                                    echo '<span class="label label-danger">รออนุมัติ</span>';
                                                } else {
                                                    echo '<span class="label label-success">Active</span>';
                                                }
                                                ?>
                                                <?php echo '</td>
                                                            <td><a href='?> <?php echo base_url() ?><?php echo 'stadium/updatestadium/'.$row->stadium_id.' class="btn ">edit</a></td>
                                                            
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
<?php include 'template/modal.php'; ?>
<?php include 'template/footer.php'; ?>
        

<?php include 'template/footer_scrpit.php'; ?>

</body>
</html>