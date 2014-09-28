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
                    <small style="color: gray">Stadium Name</small>
                    <input type="text"  class="form-control input-lg " placeholder="NAME" name="name" required="">
                </div>
                <div class="col-xs-4">
                    <p class="form-control-static input-lg" style="margin-top:20px">www.cbtonline.com/</p>
                </div>
                <div class="col-xs-8">
                    <small style="color: gray">URL to link to your stadium</small>
                    <input type="text"  class="form-control input-lg " placeholder="URL" name="url" required="">
                </div>
                <div class="col-xs-12">
                    <small style="color: gray">Phone number</small>
                    <input type="text"  class="form-control input-lg top-mar" placeholder="PHONE" name="tel">
                </div>
                <div class="col-xs-12">
                    <small style="color: gray">Stadium Detail</small>
                    <textarea class="form-control" rows="5" name="about"></textarea>
                </div>
                <div class="col-xs-12">
                    <div class="col-md-5">

                        <fieldset>
                            <legend>Address</legend>

                            <input type="text" class=" form-control input-small " placeholder="No." name="no"><small style="color: gray">   house no.</small>

                            <input type="text" class=" form-control input-small top-mar " placeholder="Soi" name="soi"><small style="color: gray">   alley</small>

                            <input type="text" class=" form-control input-small top-mar " placeholder="Road" name="road"><small style="color: gray">  road</small>

                            <input type="text" class=" form-control input-small top-mar" placeholder="District" name="district"><small style="color: gray">  district</small>

                            <input type="text" class=" form-control input-small top-mar" placeholder="Subdistrict" name="subdistrict"><small style="color: gray">  subdistrict</small>

                            <input type="text" class=" form-control input-small top-mar" placeholder="PROVINCE" name="province"><small style="color: gray">  province</small>

                            <input type="text" class=" form-control input-small top-mar" placeholder="ZIP CODE" name="zip"><small style="color: gray">  zip code</small>
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
                                    Choose your start and end date
                                    <select class="form-control" name="typedate[]">
                                        <option value="จันทร์-ศุกร์">จันทร์-ศุกร์</option>
                                        <option value="เสาร์-อาทิตย์">เสาร์-อาทิตย์</option>


                                    </select>


                                </div>
                                <div class="col-md-6">
                                    Start-time
                                    <select class="form-control" name="opentime[]">
                                        <option disabled="">Start Time</option>

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
                                        <option disabled="">End-Time</option>
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
                                     Choose your start and end date
                                    <select class="form-control" name="typedate[]">
                                        <option value="จันทร์-ศุกร์">จันทร์-ศุกร์</option>
                                        <option value="เสาร์-อาทิตย์" selected="">เสาร์-อาทิตย์</option>


                                    </select>


                                </div>
                                <div class="col-md-6">
                                    Start-time
                                    <select class="form-control" name="opentime[]">
                                        <option disabled="">Start-time</option>
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
                                        <option disabled="">End-Time</option>
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
                <h4 class="modal-title">Sent an evidence</h4>
            </div>
            <div class="modal-body">
                <p>To confirm stadium approval Please submit the following evidence</p>
                <p>1.Owner citizen id</p> or 
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
                <h4 class="modal-title">Sent an evidence</h4>
            </div>
            <div class="modal-body">
                <p>To confirm stadium approval Please submit the following evidence</p>
                <p>1.Owner citizen id</p> or
                <p>2.License to operate</p> 
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
        <form action="<?= base_url() ?>stadium/uploadstadiumprofile/<?= $this->uri->segment(3) //รับค่าจาก url ใน segment / ที่ 3  ?>" method="post" enctype="multipart/form-data"> 
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
        <form action="<?= base_url() ?>users/uploaduserprofile/<?= $this->uri->segment(3) //รับค่าจาก url ใน segment / ที่ 3  ?>" method="post" enctype="multipart/form-data"> 
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
        <form action="<?= base_url() ?>stadium/uploadcoverphoto/<?= $this->uri->segment(3) //รับค่าจาก url ใน segment / ที่ 3  ?>" method="post" enctype="multipart/form-data"> 
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
<!--Modalll blacklist naja--> 

<div class="modal fade" id="blacklist" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="<?= base_url() ?>stadium/addBlacklist/<?= $this->uri->segment(3) //รับค่าจาก url ใน segment / ที่ 3  ?>" method="post" enctype="multipart/form-data"> 
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Add to black list </h4>
                </div>
                <div class="modal-body">
                    Reason
                    <textarea class="form-control form-group"></textarea>
                    <input type="hidden" id="usID" >
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <input type="submit" value="Send" class="btn btn-default">
                </div>
            </div><!-- /.modal-content -->
        </form>
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!--<div class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">Detail</h4>
            </div>
            <div class="modal-body">
                <p>One fine body&hellip;</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div> /.modal-content 
    </div> /.modal-dialog 
</div> /.modal -->

<div class="modal fade bs-example-modal-lg" id="viewAlthen" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="background-color: #f5f5f5">
            <form id="addcontent" action="" method="post" enctype="multipart/form-data">
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
                            <img id="slip" style="width: 340px;height: 370px;" src="images/picture_evidence/evidance_9_LNERU" class="img-thumbnail">
                        </div>
                        <div class="col-md-7" style="margin-top: 0px">
                            <legend style="font-style: italic;text-align: left">Information</legend>
                            <h5 style="text-align: left">Owner ID : <span id="bookID" class="pull-right"></span></h5>
                            <h5 style="text-align: left">Name : <span id="name" class="pull-right"></span></h5>  
                            <h5 style="text-align: left">Stadium : <span id="name" class="pull-right">Pulling all of the stadium that the owner had</span></h5>  
                            <h5 style="text-align: left">Authentication Date :<span id="date" class="pull-right">2014-09-08 22:50:43</span></h5>
                            <br>
                            
                            <legend style="font-style: italic;text-align: left">Change Status</legend>
                             <div class="col-md-3" style="margin-left: -15px">
                                 
                                 <h5 style="text-align: left">Status :</h5>
                             </div>
                            <div class="col-md-4" style="margin-left: -65px">
                            <select class="form-control "  >
                                <option>Wait</option>
                                <option>Reject</option>
                                <option>Approve</option>                                                   
                            </select>
                            </div> 
                              <br>  
                            <br>
                             <h5 style="text-align: left">Massage</h5>
                            <textarea class="form-control" rows="3"></textarea>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="modal-footer" style="text-align: center">
                    <span id="ajaxscript"></span>
                    <button id="close_modal" type="button" class="btn1 btn1-danger" data-dismiss="modal" style="width: 20%">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>



