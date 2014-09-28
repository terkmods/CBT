<div class="tab-pane" id="addcourt">
    <div class="col-md-5 pull-left " style="padding-top: 2px;margin-top: 10px">
        <form  method="post" role="form" action="<?=  base_url()  ?>stadium/updatetime/<?= $this->uri->segment(3)?>">

       <?php  foreach ($showtime as $r) { ?>
        <div class="col-md-4">
        
       
            <h6><?=$r['type'] ?> <input type="hidden" value="<?=$r['type'] ?>" name="type[]"></h6>
         
        Start-time
        <select class="form-control" name="opentime[]">
            <option disabled="">End time</option>
               
                                      <option <?php
                if ($r['open_time'] == '00.00') {
                    echo 'selected';
                }
                ?> value="00.00">00:00</option>
                                        <option <?php
                if ($r['open_time'] == '01.00') {
                    echo 'selected';
                }
                ?> value="01.00">01:00</option>
                                        <option <?php
                if ($r['open_time'] == '02.00') {
                    echo 'selected';
                }
                ?> value="02.00">02:00</option>
                                        <option <?php
                if ($r['open_time'] == '03.00') {
                    echo 'selected';
                }
                ?> value="03.00">03:00</option>
                                        <option <?php
                if ($r['open_time'] == '04.00') {
                    echo 'selected';
                }
                ?> value="04.00">04:00</option>
                                        <option <?php
                if ($r['open_time'] == '05.00') {
                    echo 'selected';
                }
                ?> value="05.00">05:00</option>
                                        <option <?php
                if ($r['open_time'] == '06.00') {
                    echo 'selected';
                }
                ?> value="06.00">06:00</option>
                                        <option <?php
                if ($r['open_time'] == '07.00') {
                    echo 'selected';
                }
                ?> value="07.00">07:00</option>
                                        <option <?php
                if ($r['open_time'] == '08.00') {
                    echo 'selected';
                }
                ?> value="08.00">08:00</option>
                                        <option <?php
                if ($r['open_time'] == '09.00') {
                    echo 'selected';
                }
                ?> value="09.00">09:00</option>
             <?php $time = "10";
            for ($time; $time <= "24.00"; $time++) {
                ?>
                <option <?php
                if ($r['open_time'] == $time) {
                    echo 'selected';
                }
                ?> 


                    value=" <?= $time ?>.00" ><?= $time ?>:00</option>

<?php } ?>
        </select>
        End-time
        <select class="form-control" name="endtime[]" >
            <option disabled="">End time</option>
           
               
                                      <option <?php
                if ($r['end_time'] == '00.00') {
                    echo 'selected';
                }
                ?> value="00.00">00:00</option>
                                        <option <?php
                if ($r['end_time'] == '01.00') {
                    echo 'selected';
                }
                ?> value="01.00">01:00</option>
                                        <option <?php
                if ($r['end_time'] == '02.00') {
                    echo 'selected';
                }
                ?> value="02.00">02:00</option>
                                        <option <?php
                if ($r['end_time'] == '03.00') {
                    echo 'selected';
                }
                ?> value="03.00">03:00</option>
                                        <option <?php
                if ($r['end_time'] == '04.00') {
                    echo 'selected';
                }
                ?> value="04.00">04:00</option>
                                        <option <?php
                if ($r['end_time'] == '05.00') {
                    echo 'selected';
                }
                ?> value="05.00">05:00</option>
                                        <option <?php
                if ($r['end_time'] == '06.00') {
                    echo 'selected';
                }
                ?> value="06.00">06:00</option>
                                        <option <?php
                if ($r['end_time'] == '07.00') {
                    echo 'selected';
                }
                ?> value="07.00">07:00</option>
                                        <option <?php
                if ($r['end_time'] == '08.00') {
                    echo 'selected';
                }
                ?> value="08.00">08:00</option>
                                        <option <?php
                if ($r['end_time'] == '09.00') {
                    echo 'selected';
                }
                ?> value="09.00">09:00</option>
             <?php $time = "10";
            for ($time; $time <= "24.00"; $time++) {
                ?>
                <option <?php
                if ($r['end_time'] == $time) {
                    echo 'selected';
                }
                ?> 


                    value=" <?= $time ?>.00" ><?= $time ?>:00</option>

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
        <button type="submit" class="btn btn-default">Edit</button>
      </div>
    </form>
    </div>   
    <div class="col-md-7" style="padding-top: 2px;margin-top: 10px">
        <form class="form-horizontal" method="post" role="form" action="<?=  base_url()  ?>stadium/addcourt/<?= $this->uri->segment(3)?>">
            <div class="form-group">
                <label for="inputEmail1" class="col-lg-2 control-label">Court</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" name="courtname" placeholder="Court Name" required="">
                </div>
            </div>

            <div class="form-group">
                <label for="inputPassword1" class="col-lg-2 control-label">Price</label>
                <div id="add">
                <div class="col-lg-10">
                   
                        
                        
                 
                        
                    <div class="col-md-6" style="margin-top:10px ;padding: 0; ">  <select class="form-control" name="typedate1">
                                    <option value="จันทร์-ศุกร์">จันทร์-ศุกร์</option>
                                    <option value="เสาร์-อาทิตย์">เสาร์-อาทิตย์</option>
                                    

                                </select> </div>
                 

                    <div class="col-md-3" style="margin-top:10px ;padding:  0; ">
                        <input type="number" class="form-control" id="inputPassword1" placeholder="ราคา/ชั่วโมง " name="price1"></div>
                         <!--  <div class="col-md-1" style="margin-top:15px ;">
                         <button type="button" class="btn btn-success btn-sm" id="btn2">
  <span class="glyphicon glyphicon-plus-sign"></span>    
                                        </button>           
                    </div>-->
                </div> <!--add-->
                         <div class="col-lg-10 col-md-offset-2">
                   
                        
                        
                 
                        
                    <div class="col-md-6" style="margin-top:10px ;padding: 0; ">  <select class="form-control" name="typedate2">
                                    <option value="จันทร์-ศุกร์">จันทร์-ศุกร์</option>
                                    <option value="เสาร์-อาทิตย์">เสาร์-อาทิตย์</option>
                                    

                                </select> </div>
                 

                    <div class="col-md-3" style="margin-top:10px ;padding:  0; ">
                        <input type="number" class="form-control" id="inputPassword1" placeholder="ราคา/ชั่วโมง" name="price2"></div>
                           <!--<div class="col-md-1" style="margin-top:15px ;">
                         <button type="button" class="btn btn-success btn-sm" id="btn2">
  <span class="glyphicon glyphicon-plus-sign"></span>    
                                        </button>           
                    </div>-->
                </div>
                </div>
            </div>

            <div class="form-group">
                <label for="inputPassword1" class="col-lg-2 control-label">Floor Type</label>

                <div class="col-lg-10">
                    <select class="form-control" name="type">
                        <option>พื้นปาร์เก้</option>
                        <option>พื้นปูน </option>
                        <option>พื้นยาง </option>

                    </select>

                </div>
            </div>

            <div class="form-group">
                <div class="col-lg-offset-2 col-lg-10">
                    <button type="submit" class="btn btn-default">Add Court</button>
                </div>
            </div>
        </form>


    </div>
    <div class="row">
        <div class="col-md-12" style="margin-top: 17px">
                        
                     
                                                <h5>Court Total : <?=$total->courtnum?> court</h5>
                        <form action="<?php echo base_url() ?>stadium/delcourt" method="post">
                                                <table class="table tablecompare">
                                                <thead style="text-align: center">
                                                    
                                                    <tr>
                                                        
                                                        <th style="text-align: center">Court Name</th>
                                                    
                                                      <th style="text-align: center">Price Monday-Friday</th>
                                                       <th style="text-align: center">Price Saturday-Sunday</th> 
                                                     <th style="text-align: center">Floor Type</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                   
                                                    <?php foreach ($court as $ct) { ?>
                                                    <tr >
                                                       
                                                        <td><?=$ct['court_name'] ?></td>
                                                       
                                                        <td><?=$ct['m_f_price'] ?> Bath</td>
                                                        <td><?=$ct['st_sun_price'] ?> Bath</td>
                                                       
                                                        <td><?=$ct['type'] ?></td>
                                                        <td><a href=" <?php echo base_url() ?>stadium/delcourt/<?=$ct['court_id']?>/<?=$ct['stadium_id']?> " class="btn btn-danger btn-sm ">Del</a></td>
                                                    </tr>
                                                    
                                                     <?php } ?> 
                                                </tbody>
                                            </table>
                                                                                                   </form>

                                                
        </div>
    </div>
</div>
