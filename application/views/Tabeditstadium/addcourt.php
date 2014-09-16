<div class="tab-pane" id="addcourt">

    <div class="col-md-5 pull-left " style="padding-top: 2px;margin-top: 10px">
       <?php  foreach ($showtime as $r) { ?>
        <div class="col-md-4">
        
       
        <h6><?=$r['type'] ?></h6>
         
        Start-time
        <select class="form-control" name="opentime">
            <option disabled="">เวลาเปิด</option>
             <?php $time = "0";
            for ($time; $time <= "24.00"; $time++) {
                ?>
                <option <?php
                if ($r['open_time'] == $time) {
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
                if ($r['end_time'] == $time) {
                    echo 'selected';
                }
                ?> 


                    value=" <?= $time ?>" ><?= $time ?>:00</option>

<?php } ?>
        </select>    
                </div>
<?php }?>
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
     

      <div class="col-md-12 form-group">
          <hr>
        <button type="submit" class="btn btn-default">แก้ไข</button>
      </div>
    </div>   
    <div class="col-md-7" style="padding-top: 2px;margin-top: 10px">
        <form class="form-horizontal" method="post" role="form" action="<?=  base_url()  ?>stadium/addcourt/<?= $this->uri->segment(3)?>">
            <div class="form-group">
                <label for="inputEmail1" class="col-lg-2 control-label">Court</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" name="courtname" placeholder="Court Name">
                </div>
            </div>

            <div class="form-group">
                <label for="inputPassword1" class="col-lg-2 control-label">Price</label>
                <div id="add">
                <div class="col-lg-10">
                   
                        
                        
                 
                        
                    <div class="col-md-6" style="margin-top:10px ;padding: 0; ">  <select class="form-control" name="typedate[]">
                                    <option value="ทุกวัน">ทุกวัน</option>
                                    <option value="เสาร์-อาทิตย์">เสาร์-อาทิตย์</option>
                                    <option value="จันทร์-ศุกร์">จันทร์-ศุกร์</option>

                                </select> </div>
                 

                    <div class="col-md-3" style="margin-top:10px ;padding:  0; ">
                        <input type="number" class="form-control" id="inputPassword1" placeholder="ราคา/ชม. " name="price[]"></div>
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
                    <select class="form-control" name="type">
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
                        
                     
                                                <h5>จำนวนคอร์ดทั้งหมด : <small>5  คอร์ด</small></h5>
                        
                                                <table class="table tablecompare">
                                                <thead style="text-align: center">
                                                    
                                                    <tr>
                                                        
                                                        <th style="text-align: center">สนามที่</th>
                                                      <th style="text-align: center">ทุกวัน</th>
                                                      <th style="text-align: center">จันทร์-ศุกร์</th>
                                                       <th style="text-align: center">เสาร์-อาทิตย์</th> 
                                                     <th style="text-align: center">ลักษณะ</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                   
                                                    <?php foreach ($court as $ct) { ?>
                                                    <tr >
                                                        <td><?=$ct['court_name'] ?></td>
                                                           <td></td>
                                                        <td></td>
                                                        <td><?=$ct['court_price'] ?></td>
                                                       
                                                        <td><?=$ct['type'] ?></td>
                                                        
                                                    </tr>
                                                    
                                                     <?php } ?> 
                                                </tbody>
                                            </table>
                                                
        </div>
    </div>
</div>