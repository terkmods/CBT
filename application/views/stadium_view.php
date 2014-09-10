<?php include 'template/head.php';
 ?>
<div id="cover">  
            <img src="<?= base_url() ?>/asset/images/cover.jpg">
        </div>  
        <div class="container upper-profile">
            <div class="row">
                <div class="col-md-3 profile-pic"><img src="<?= base_url() ?>/asset/images/g.png" class="img-thumbnail"></div>
                <div class="col-md-3 info"><h3>PY badminton</h3>
                    <p>เจ้าของ
                        <span class="glyphicon glyphicon-map-marker"></span>&nbsp<a href="">Bangkok</a>, <a href="#">Thailand</a></p> <p>
                        โทรศัพท์: xx-xxx-xxx
                    </p>
                    
                </div>
                <div class="col-md-4 info">
                    <br>
                    <p><a class="btn btn-primary btn-lg pull-right" role="button" data-toggle="modal" data-target="#myModal">Book Now</a></p>

                    <!-- Modal -->
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title" id="myModalLabel">Booking</h4>
                                </div>
                                <div class="modal-body" style="text-align: center">
                                    <div >
                                        Booking Calendar


                                        <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
                                            <li class="active"><a href="#red" data-toggle="tab">Booking Calendar</a></li>
                                            <li><a href="#step2" data-toggle="tab">Step2</a></li>
                                            <li><a href="#yellow" data-toggle="tab">Not sign up</a></li>
                                           
                                        </ul>
                                        <div id="my-tab-content" class="tab-content">
                                            <div class="tab-pane active" id="red">
                                                <h1>Booking Calendar</h1>
                                                <div class="input-group date col-sm-4" style="text-align: center"></div>
                                                <table class="table" style="text-align: center">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th style="text-align: center">court 1</th>
                                                            <th style="text-align: center">court 2</th>
                                                            <th style="text-align: center">court 3</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>8.00-9.00</td>
                                                            <td><span class="label label-danger">ไม่ว่าง</span></td>
                                                            <td><a href="#step2" data-toggle="tab" class="btn-success btn-sm" role="button" >ว่าง</a></td>
                                                            <td><span class="label label-success">ว่าง</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td>9.00-10.00</td>
                                                            <td><span class="label label-danger">ไม่ว่าง</span></td>
                                                            <td><span class="label label-success">ว่าง</span></td>
                                                            <td><span class="label label-success">ว่าง</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td>10.00-11.00</td>
                                                            <td><span class="label label-danger">ไม่ว่าง</span></td>
                                                            <td><span class="label label-success">ว่าง</span></td>
                                                            <td><span class="label label-success">ว่าง</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="tab-pane" id="step2">
                                                <p> จองโดย : </p>
                                               <p> วันที่จอง :</p>
                                               <p> เวลาที่จอง  :</p>
                                              <p>  สนามที่จอง :</p>
                                              <p>  คอร์ด : </p>
                                              <p>  <input type="checkbox"> ได้อ่านข้อตกลงและระเบียบการจองของสนามแล้ว</p>
                                                
                                            </div>
                                            <div class="tab-pane" id="yellow">
                                                <h1>ยังไม่เป็นสมาชิก?</h1>
                                                <p>กรุณา <img src="<?= base_url() ?>/asset/images/loginfacebook.png" width="250"></p><h2>or</h2>
                                                <a href="register.html" class="btn-success btn-sm" role="button">สมัครสมาชิก</a>
                                            </div>

                                        </div>
                                    </div>


                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </div>
                    <br>
                     <br> 
                     
                    <p><a class="btn btn-danger btn-lg pull-right" role="button" data-toggle="modal" data-target="#myrule">Rules</a></p>
                      <!-- Modal -->
                    <div class="modal fade" id="myrule" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title" id="myModalLabel">Rules</h4>
                                </div>
                                <div class="modal-body" style="text-align: center">
                                    กฏของสนามของฉันมีระเบียบดังนี้<br>
                                    1.<br>
                                    2.<br>
                                    3.<br>
                                    4.<br>
                                    5.<br>
                                    

                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    <hr>
    <div class="container">
        <!--<h4> <a href="#">หน้าหลัก</a> / เพิ่มรายละเอียดสนาม</h4> -->
        <div class="row">
            <div class="col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">ที่ตั้ง</h3>
                    </div>
                    <div class="panel-body">
                        ที่อยู่ : <br>
                        เมือง : <br>
                        จังหวัด : <br>
                        รหัสไปรษณีย์ : 
                    </div>
                </div>

                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">รายละเอียดสนาม</h3>
                    </div>
                    <div class="panel-body">
                        ชนิดของพื้น : <br>
                        จำนวน คอร์ท :<br>
                        ราคา คอร์ด : <br> 
                        เวลาเปิด-ปิด สนาม :
                    </div>
                </div>

                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">สิ่งอำนวยความสะดวก</h3>
                    </div>
                    <div class="panel-body">
                        <ul>
                            <li>ห้องอาบน้ำ</li>
                            <li>ล็อกเกอร์</li>
                        </ul>
                    </div>
                </div>

                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">โค้ชประจำสนาม</h3>
                    </div>
                    <div class="panel-body">
                        <ul>
                            <li><a href="coach.html">Mark Jacob </a></li>
                            <li>นาย Lanka</li>
                        </ul>
                    </div>
                </div>
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">ผู้ดูแลสนาม</h3>
                    </div>
                    <div class="panel-body">
                        <p>
                           <span class="glyphicon glyphicon-user"></span>Andrew Smith
                        </p>
                        <p>
                           <span class="glyphicon glyphicon-phone"></span>089-xxx-xxxx
                        </p>
                        <p>
                        สถานะ <span class="label label-success"><span class="glyphicon glyphicon-ok"></span>ยืนยันตัว</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h3>ประกาศ</h3>
                        <ul>
                            <li><a href="#">ประกาศ 1</a></li>
                            <li><a href="#">ประกาศ 2</a></li>
                            <li><a href="#">ประกาศ 3</a></li>
                        </ul>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h3>แสดงความคิดเห็น</h3>

                        <div class="scroll">
                            <div class="row">
                                <div class="pull-left">
                                    <img src="<?= base_url() ?>/asset/images/profile.jpg" class="imgcomment">
                                </div>
                                <div class="pull-left ">

                                    <img src="<?= base_url() ?>/asset/images/comment.png">
                                </div>
                            </div>
                            <div class="row" style="margin-top: 10px">
                                <div class="pull-left">
                                    <a href="user.html">   <img src="<?= base_url() ?>/asset/images/sporter.jpg" class="imgcomment"></a>
                                </div>
                                <div class="pull-left ">

                                    <img src="<?= base_url() ?>/asset/images/comment.png">
                                </div>
                            </div>
                            <div class="row" style="margin-top: 10px">
                                <div class="pull-left">
                                    <img src="<?= base_url() ?>/asset/images/profile-placeholder.png" class="imgcomment">
                                </div>
                                <div class="pull-left ">

                                    <img src="<?= base_url() ?>/asset/images/comment.png">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-10" style="margin-top: 15px">
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-2" style="margin-top: 15px">
                            <input type="submit" class="btn-success" value="send">    </div>

                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h3>เกี่ยวกับฉัน</h3>
                        เกี่ยวกับสนามฉัน สนามฉันตั้งอยู่ที่

                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-body">
                        <h3>Gallery</h3>
                        <div class="row">
                            <div class="col-xs-6 col-md-3">
                                <a href="#" class="thumbnail">
                                    <img src="<?= base_url() ?>/asset/images/g.png" alt="...">
                                </a>
                            </div>
                            <div class="col-xs-6 col-md-3">
                                <a href="#" class="thumbnail">
                                    <img src="<?= base_url() ?>/asset/images/g.png" alt="...">
                                </a>
                            </div>
                            <div class="col-xs-6 col-md-3">
                                <a href="#" class="thumbnail">
                                    <img src="<?= base_url() ?>/asset/images/g.png" alt="...">
                                </a>
                            </div>
                            <div class="col-xs-6 col-md-3">
                                <a href="#" class="thumbnail">
                                    <img src="<?= base_url() ?>/asset/images/g.png" alt="...">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="panel panel-default">
                    <div class="panel-body">
                        <h3>Map</h3>
                        <img src="<?= base_url() ?>/asset/images/25293.png">
                    </div>
                </div>
                

            </div>
        </div>
    </div>
    <?php include 'template/modal.php'; ?>
<?php include 'template/footer.php'; ?>