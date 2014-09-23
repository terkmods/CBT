<!-- Modal -->
<div class="modal fade bs-example-modal-lg" id="addstadium" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">

        <div class="modal-content">
            <form action="<?= base_url() ?>stadium/addstadium" method="post" >
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Add Stadium</h4>
                </div>


                <div class="col-xs-12">
                    <small style="color: gray">ชื่อสนาม</small>
                    <input type="text"  class="form-control input-lg " placeholder="NAME" name="name" required="">
                </div>
                <div class="col-xs-4">
                    <p class="form-control-static input-lg" style="margin-top:20px">www.cbtonline.com/</p>
                </div>
                <div class="col-xs-8">
                    <small style="color: gray">URL สำหรับเข้าชมหน้าสนามของคุณ</small>
                    <input type="text"  class="form-control input-lg " placeholder="URL" name="url" required="">
                </div>
                <div class="col-xs-12">
                    <small style="color: gray">เบอร์โทรติดต่อสนาม</small>
                    <input type="text"  class="form-control input-lg top-mar" placeholder="PHONE" name="tel">
                </div>
                <div class="col-xs-12">
                    <small style="color: gray">รายละเอียดเกี่ขยวกับสนาม</small>
                    <textarea class="form-control" rows="5" name="about"></textarea>
                </div>
                <div class="col-xs-12">
                    <div class="col-md-5">

                        <fieldset>
                            <legend>Address</legend>

                            <input type="text" class=" form-control input-small " placeholder="No." name="no"><small style="color: gray">   บ้านเลขที่</small>

                            <input type="text" class=" form-control input-small top-mar " placeholder="Soi" name="soi"><small style="color: gray">   ซอย</small>

                            <input type="text" class=" form-control input-small top-mar " placeholder="Road" name="road"><small style="color: gray">  ถนน</small>

                            <input type="text" class=" form-control input-small top-mar" placeholder="District" name="district"><small style="color: gray">  เขต</small>

                            <input type="text" class=" form-control input-small top-mar" placeholder="Subdistrict" name="subdistrict"><small style="color: gray">  แขวง</small>

                            <input type="text" class=" form-control input-small top-mar" placeholder="PROVINCE" name="province"><small style="color: gray">  จังหวัด</small>

                            <input type="text" class=" form-control input-small top-mar" placeholder="ZIP CODE" name="zip"><small style="color: gray">  รหัสไปรษณีย์</small>
                        </fieldset>

                    </div>
                    <div class="col-md-offset-5">
                        <div class="col-md-12">
                            <fieldset>
                                <legend>Rule</legend>

                                <textarea class="form-control" rows="5" name="rule"></textarea>




                            </fieldset>
                        </div>
                        <div class="col-md-12" id="time">
                            <div id="showtime">
                                <div class="col-md-6">
                                    เลือกวันเวลาเปิด-ปิดสนาม
                                    <select class="form-control" name="typedate[]">
                                        <option value="จันทร์-ศุกร์">จันทร์-ศุกร์</option>
                                        <option value="เสาร์-อาทิตย์">เสาร์-อาทิตย์</option>


                                    </select>


                                </div>
                                <div class="col-md-6">
                                    Start-time
                                    <select class="form-control" name="opentime[]">
                                        <option disabled="">เวลาเปิด</option>

                                        <option value="00.00">00:00</option>
                                        <option value="01.00">01:00</option>
                                        <option value="02.00">02:00</option>
                                        <option value="03.00">03:00</option>
                                        <option value="04.00">04:00</option>
                                        <option value="05.00">05:00</option>
                                        <option value="06.00">06:00</option>
                                        <option value="07.00">07:00</option>
                                        <option value="08.00">08:00</option>
                                        <option value="09.00">09:00</option>

                                        <?php
                                        $time = "10";
                                        for ($time; $time <= "24.00"; $time++) {
                                            ?>
                                            <option value="<?= $time ?>.00"><?= $time ?>:00</option>

                                        <?php } ?>

                                    </select>
                                    End-time
                                    <select class="form-control" name="endtime[]" >
                                        <option disabled="">เวลาปิด</option>
                                        <option value="00.00">00:00</option>
                                        <option value="01.00">01:00</option>
                                        <option value="02.00">02:00</option>
                                        <option value="03.00">03:00</option>
                                        <option value="04.00">04:00</option>
                                        <option value="05.00">05:00</option>
                                        <option value="06.00">06:00</option>
                                        <option value="07.00">07:00</option>
                                        <option value="08.00">08:00</option>
                                        <option value="09.00">09:00</option>

                                        <?php
                                        $time = "10";
                                        for ($time; $time <= "24.00"; $time++) {
                                            ?>
                                            <option value="<?= $time ?>.00"><?= $time ?>:00</option>

                                        <?php } ?>
                                    </select>


                                </div>
                            </div>
                            <div id="showtime">
                                <div class="col-md-6">
                                    เลือกวันเวลาเปิด-ปิดสนาม
                                    <select class="form-control" name="typedate[]">
                                        <option value="จันทร์-ศุกร์">จันทร์-ศุกร์</option>
                                        <option value="เสาร์-อาทิตย์" selected="">เสาร์-อาทิตย์</option>


                                    </select>


                                </div>
                                <div class="col-md-6">
                                    Start-time
                                    <select class="form-control" name="opentime[]">
                                        <option disabled="">เวลาเปิด</option>
                                        <option value="00.00">00:00</option>
                                        <option value="01.00">01:00</option>
                                        <option value="02.00">02:00</option>
                                        <option value="03.00">03:00</option>
                                        <option value="04.00">04:00</option>
                                        <option value="05.00">05:00</option>
                                        <option value="06.00">06:00</option>
                                        <option value="07.00">07:00</option>
                                        <option value="08.00">08:00</option>
                                        <option value="09.00">09:00</option>

                                        <?php
                                        $time = "10";
                                        for ($time; $time <= "24.00"; $time++) {
                                            ?>
                                            <option value="<?= $time ?>.00"><?= $time ?>:00</option>

                                        <?php } ?>
                                    </select>
                                    End-time
                                    <select class="form-control" name="endtime[]" >
                                        <option disabled="">เวลาปิด</option>
                                        <option value="00.00">00:00</option>
                                        <option value="01.00">01:00</option>
                                        <option value="02.00">02:00</option>
                                        <option value="03.00">03:00</option>
                                        <option value="04.00">04:00</option>
                                        <option value="05.00">05:00</option>
                                        <option value="06.00">06:00</option>
                                        <option value="07.00">07:00</option>
                                        <option value="08.00">08:00</option>
                                        <option value="09.00">09:00</option>

                                        <?php
                                        $time = "10";
                                        for ($time; $time <= "24.00"; $time++) {
                                            ?>
                                            <option value="<?= $time ?>.00"><?= $time ?>:00</option>

                                        <?php } ?>
                                    </select>


                                </div>
                            </div>

                            <!--                            <div class="col-md-12">
                                                            <label><button type="button" class="btn btn-default btn-sm add_field_button" >
                                                                    <span class="glyphicon glyphicon-plus-sign"></span> เพิ่มเวลาเปิด-ปิดสนาม 
                                                                </button>             </label> 
                                                                
                                                        </div>-->
                            <div class=" input_fields_wrap">
                                <div class="col-md-12">
                                </div>
                            </div>
                        </div>





                        <legend>Facility</legend>
                        <div class="col-md-5">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="facility[]" value="ห้องอาบน้ำ"> ห้องอาบน้ำ
                                </label>

                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="facility[]" value="อาหาร"> อาหาร
                                </label>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="facility[]" value="ร้านค้า"> ร้านค้า
                                </label>

                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="facility[]" value="ที่จอดรถ"> ที่จอดรถ
                                </label>

                            </div>

                        </div>
                        <div class="col-md-7 form-group" id="add">

                            <label><button type="button" class="btn btn-default btn-sm" id="btn1">
                                    <span class="glyphicon glyphicon-plus-sign"></span> Add other Facility 
                                </button>             </label> <input class="form-control" type="text" name="facility[]" >           


                        </div>







                    </div>
                </div>






                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">cancel</button>
                    <button type="submit" name="submit" class="btn btn-primary">Add</button>


                </div>
            </form>



        </div>

    </div>
</div>
<!-- Modal ส่งหลักฐาน ->>
<!-- Modal -->
<div class="modal fade" id="approve" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">ส่งหลักฐาน</h4>
            </div>
            <div class="modal-body">
                <p>เพื่อเป็นการยืนยันสนาม กรุณาส่งหลักฐานดังต่อไปนี้</p>
                <p>1.บัตรประชาชนของเจ้าของสนาม</p> หรือ 
                <p>2.ใบประกอบกิจการ</p> 
                <p style="text-align:  center" class="col-md-offset-4"><input type="file" title="Search for a file to add"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<!-- Modal ลบสนาม ->>
<!-- Modal -->
<div class="modal fade" id="approve" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">ส่งหลักฐาน</h4>
            </div>
            <div class="modal-body">
                <p>เพื่อเป็นการยืนยันสนาม กรุณาส่งหลักฐานดังต่อไปนี้</p>
                <p>1.บัตรประชาชนของเจ้าของสนาม</p> หรือ 
                <p>2.ใบประกอบกิจการ</p> 
                <p style="text-align:  center" class="col-md-offset-4"><input type="file" title="Search for a file to add"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- Modal -->
<div class="modal fade" id="upload" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="<?= base_url() ?>stadium/uploadstadiumprofile/<?= $this->uri->segment(3) //รับค่าจาก url ใน segment / ที่ 3 ?>" method="post" enctype="multipart/form-data"> 
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Upload</h4>
                </div>
                <div class="modal-body">
                    <input type="file" title="Search for a file to add" class="top-mar " name="userfile" >
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <input type="submit" value="Upload">
                </div>
            </div><!-- /.modal-content -->
        </form>
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" id="uploadprofileuser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="<?= base_url() ?>users/uploaduserprofile/<?= $this->uri->segment(3) //รับค่าจาก url ใน segment / ที่ 3 ?>" method="post" enctype="multipart/form-data"> 
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Upload</h4>
                </div>
                <div class="modal-body">
                    <input type="file" title="Search for a file to add" class="top-mar " name="userfile" >
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <input type="submit" value="Upload">
                </div>
            </div><!-- /.modal-content -->
        </form>
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



<!--Modalll jaa up cover na--> 

<div class="modal fade" id="uploadimgcover" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="<?= base_url() ?>stadium/uploadcoverphoto/<?= $this->uri->segment(3) //รับค่าจาก url ใน segment / ที่ 3 ?>" method="post" enctype="multipart/form-data"> 
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Upload</h4>
                </div>
                <div class="modal-body">
                    <input type="file" title="Search for a file to add" class="top-mar " name="userfile" >
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <input type="submit" value="Upload">
                </div>
            </div><!-- /.modal-content -->
        </form>
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



<!--bookingnaja-->
<!--Modalll jaa up cover na--> 

<div class="modal fade" id="booking" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="<?= base_url() ?>booking/doBooking/" method="post" > 
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Confrim - Booking</h4>
                </div>
                <div class="modal-body">
                    <span>จองโดย : </span> <?=$user['0']->email?>,<?=$user['0']->fname?> <?=$user['0']->lname?> <br>
                    <span>วันที่ : </span><span id="datenaja" >&nbsp;&nbsp; </span> <br>
                    <span>เวลา : </span><br> เริ่ม <input type="time" id="time_start" name="start_time" class="form-control" step="1800" onchange="totalpricechange()">
                    ถึง <input type="time" id="time_end" class="form-control" name="end_time" step="1800" onchange="totalpricechange()"> 
<!--                    <select id="selecttime" class="form-control">
                    </select>-->
                    <span>สถานที่ : </span> <?=$data['0']->stadium_name?> <br>
                    <span> คอร์ด : </span> <span id="courtja" >&nbsp;&nbsp; </span> <br>
                    <span> ราคา / ชม. : </span> <span id="priceja" >&nbsp;&nbsp; </span>  <br>
                    <span> รวมเป็นเงิน : </span> <span id="sumprice" >&nbsp;&nbsp; </span> <br>
                    <input type="hidden" name="userid" value="<?=$user['0']->user_id?>">
                    <input type="hidden" name="stadiumid" value="<?=$data['0']->stadium_id?>">
<!--                    <input type="hidden" id="courtid" value="<?=$user['0']->court_id?>">-->
                    <input type="hidden" id="tr_id">
                    <input type="hidden" id="courtid" name="courtid" >
                    <input type="hidden" id="error_count" value="0">
                    <input type="hidden" id="dateid" name="dateid">
                    <input type="hidden" id="sumpricesend" name="allprice">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <input type="submit" value="Book Now">
                </div>
            </div><!-- /.modal-content -->
        </form>
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->