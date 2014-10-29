
<?php
include 'template/head.php';
$num = 1;
$status = $ow->authenowner_status;
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




                    <div class="row">
<!--                        <select class="chosen-select" data-placeholder="เลือกภาค" id="pak" style="width: 150px; " name="pak">
                                    <option value="" selected="selected"></option><option value="1">ภาคเหนือ</option><option value="2">ภาคกลาง</option><option value="3">ภาคตะวันออกเฉียงเหนือ</option><option value="4">ภาคตะวันตก</option><option value="5">ภาคตะวันออก</option><option value="6">ภาคใต้</option>
                                </select>-->

                        <div class="col-md-8">
                            <form action="<?= base_url() ?>stadium/addstadium" method="post" >
                                <div class="modal-header">
                                    <h3 class="modal-title" id="myModalLabel">Add Stadium</h3>
                                </div>


                                <div class="col-xs-12" style="margin-top: 20px">
                                    <div class="col-md-6" style="margin-left: -17px">
                                        <small style="color: gray">Stadium Name*</small>
                                        <input type="text"  class="form-control input-lg " placeholder="NAME" name="name" required>
                                    </div>
                                    <div class="col-md-6">
                                        <small style="color: gray" >Phone number*</small>
                                        <input type="text" style="margin-top: -0px" class="form-control input-lg top-mar" placeholder="PHONE" name="tel" required>
                                    </div>

                                </div>
                                <div class="col-xs-12" style="margin-top: 10px">
                                    <div class="col-md-4" style="margin-left: -25px">
                                        <p class="form-control-static input-lg" style="margin-top:20px">www.cbtonline.com/stadium/</p>
                                    </div>

                                    <div class="col-md-7" style="margin-left: 17px">
                                        <small style="color: gray;margin-left: -249px">URL to link to your stadium*</small>
                                        <input type="text"  class="form-control input-lg " placeholder="URL" name="url" required>
                                    </div>
                                </div>

                                <div class="col-xs-12">
                                    <small style="color: gray">Stadium Detail</small>
                                    <textarea class="form-control" rows="5" name="about"></textarea>
                                </div>
                                <div class="col-xs-12" style="margin-top: 20px">
                                    <div class="col-md-5">

                                        <fieldset>
                                            <legend>Address</legend>
                                            <small style="color: gray">house no.*</small>
                                            <input type="text" class=" form-control input-small " placeholder="No." name="no" required>
                                            <small style="color: gray">alley*</small>
                                            <input type="text" class=" form-control input-small top-mar " placeholder="Soi" name="soi" required>
                                            <small style="color: gray">road*</small>
                                            <input type="text" class=" form-control input-small top-mar " placeholder="Road" name="road" required>
                                            <small style="color: gray">district*</small>
                                            <input type="text" class=" form-control input-small top-mar" placeholder="District" name="district" required>
                                            <small style="color: gray">subdistrict*</small>
                                            <input type="text" class=" form-control input-small top-mar" placeholder="Subdistrict" name="subdistrict" required>
                                            <small style="color: gray">province*</small>
                                            <input type="text" class=" form-control input-small top-mar" placeholder="PROVINCE" name="province" required>
                                            <small style="color: gray">zip code*</small>
                                            <input type="text" class=" form-control input-small top-mar" placeholder="ZIP CODE" name="zip" required>
                                            
                                        </fieldset>

                                    </div>
                                    <div class="col-md-offset-5">
                                        <div class="col-md-12">
                                            <fieldset>
                                                <legend>Rule</legend>

                                                <textarea class="form-control" rows="5" name="rule"></textarea>




                                            </fieldset>
                                        </div>
                                        





<!--                                        <legend>Facility</legend>
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


                                        </div>-->







                                    </div>
                                </div>






                                <div class="modal-footer" >
<!--                                    <button type="button" class="btn btn-default" data-dismiss="modal">cancel</button>-->
                                    <button type="submit" name="submit" class="btn btn-primary">Add</button>


                                </div>
                            </form>



                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'template/modal.php'; ?>
<?php include 'template/footer.php'; ?>
<script>



    $('#pak').change(function () { // เมื่อไอดี pak ถูกเลือก
        var value = $("#pak").val(); // เราก็จะดึงค่ามา

        $.ajax({// จากนั้นก็สร้าง ajax
            type: 'GET', // ชนิดของ http เป็น get
            url: "/province", // url ที่จะยิงไป
            data: {id: value}, // ค่าที่จะส่งไป 
            success: function (data) { // ถ้าสำเร็จ

                $('#province').find('option') // ทำการค้นหา ตัว option ของ dropdown province
                        .remove() // ลบ option ทิ้ง
                        .end() // ใช้ reset กลับไปตอนที่ยังไม่ลบ option ครับ 
                        .append(data) // เอาค่าที่ได้จาก ฐานข้อมูลใส่
                        .trigger('chosen:updated'); // สั่งให้ chosen อัพเดท dropdown

            }
        });
    });
</script>

<?php include 'template/footer_scrpit.php'; ?>

</body>
</html>