<div class="modal fade" id="addstadium" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">

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

                        <fieldset>
                            <legend>Rule</legend>

                            <textarea class="form-control" rows="5" name="rule"></textarea>




                        </fieldset>
                        Start-time
                                                    <select class="form-control" name="opentime">
                                                        <option disabled="">เวลาเปิด</option>
                                                        <?php  $time="0"; 
                                                        for($time;$time <="24.00" ; $time++){ ?>
                                                        <option value="<?= $time ?>:00"><?= $time ?>:00</option>
                                                        
                                                        <?php } ?>
                                                    </select>
                                                    End-time
                                                    <select class="form-control" name="endtime" >
                                                        <option disabled="">เวลาปิด</option>
                                                      <?php  $time="0"; 
                                                        for($time;$time <="24.00" ; $time++){ ?>
                                                        <option><?= $time ?>:00</option>
                                                        
                                                        <?php } ?>
                                                    </select>     
                                                    <!--<div class="radio">
                                                        <label>
                                                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                                                            Per-hour <small>(example 8.00-9.00 )</small>
                                                        </label>

                                                    </div>
                                                    <div class="radio">

                                                        <label>
                                                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                                                            Per-half-hour <small>(example 8.30-9.00) </small>
                                                        </label>
                                                    </div> -->

                                                   
                        <fieldset>
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




                        </fieldset>



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