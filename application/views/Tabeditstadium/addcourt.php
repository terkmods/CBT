<div class="tab-pane" id="addcourt">

    <div class="col-md-5 pull-left " style="padding-top: 2px;margin-top: 10px">

        Start-time
        <select class="form-control" name="opentime">
            <option disabled="">เวลาเปิด</option>
             <?php $time = "0";
            for ($time; $time <= "24.00"; $time++) {
                ?>
                <option <?php
                if ($data->start_time == $time) {
                    echo 'selected';
                }
                ?> 


                    value=" <?= $time ?>" ><?= $time ?>:00</option>

<?php } ?>
        </select>
        End-time
        <select class="form-control" name="endtime" >
            <option disabled="">เวลาปิด</option>
            <?php $time = "0";
            for ($time; $time <= "24.00"; $time++) {
                ?>
                <option <?php
                if ($data->end_time == $time) {
                    echo 'selected';
                }
                ?> 


                    value=" <?= $time ?>" ><?= $time ?>:00</option>

<?php } ?>
        </select>        
      <!-- <div class="radio">
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
        </div>-->

        <button type="submit" class="btn btn-default">แก้ไข</button>

    </div>   
    <div class="col-md-7" style="padding-top: 2px;margin-top: 10px">
        <form class="form-horizontal" role="form" action="#">
            <div class="form-group">
                <label for="inputEmail1" class="col-lg-2 control-label">Court</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" id="inputEmail1" placeholder="Court Name">
                </div>
            </div>

            <div class="form-group">
                <label for="inputPassword1" class="col-lg-2 control-label">Price</label>
                <div id="add">
                <div class="col-lg-10">
                   
                        
                        
                 
                        
                    <div class="col-md-3" style="margin-top:10px ;padding: 0; "> <select class="form-control">
                            <option>จันทร์</option>
                            <option>อังคาร</option>
                            <option>พุธ</option>
                            <option>พฤหัสบดี</option>
                            <option>ศุกร์</option>
                            <option>เสาร์</option>
                            <option>อาทิตย์</option>
                        </select> </div>
                    <div class="col-md-1" style="margin-top:15px ;">
                         ถึง
                    </div>
                    <div class="col-md-3" style="margin-top:10px ;padding: 0; "> <select class="form-control">
                                <option>จันทร์</option>
                            <option>อังคาร</option>
                            <option>พุธ</option>
                            <option>พฤหัสบดี</option>
                            <option>ศุกร์</option>
                            <option>เสาร์</option>
                            <option>อาทิตย์</option>      
                        </select></div>

                    <div class="col-md-3" style="margin-top:10px ;padding:  0; ">
                        <input type="number" class="form-control" id="inputPassword1" placeholder="ราคา/ชม. "></div>
                           <div class="col-md-1" style="margin-top:15px ;">
                         <button type="button" class="btn btn-success btn-sm" id="btn2">
  <span class="glyphicon glyphicon-plus-sign"></span>    
                                        </button>           
                    </div>
                </div> <!--add-->
                </div>
            </div>

            <div class="form-group">
                <label for="inputPassword1" class="col-lg-2 control-label">ชนิดพื้น </label>

                <div class="col-lg-10">
                    <select class="form-control">
                        <option>พื้นปาเก้ </option>
                        <option>พื้นปูน </option>
                        <option>พื้นยาง </option>

                    </select>

                </div>
            </div>

            <div class="form-group">
                <div class="col-lg-offset-2 col-lg-10">
                    <button type="submit" class="btn btn-default">เพิ่มคอร์ด</button>
                </div>
            </div>
        </form>


    </div>
    <div class="row">
        <div class="col-md-12" style="margin-top: 17px">

            <hr>
            <h5>ตารางจองคอร์ดของฉัน</h5>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>court 1</th>
                        <th>court 2</th>
                        <th>court 3</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>8.00-9.00</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>9.00-10.00</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>10.00-11.00</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>