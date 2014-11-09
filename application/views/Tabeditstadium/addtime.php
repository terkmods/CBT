<div class="tab-pane" id="addtime">
    <form  method="post" role="form" action="<?= base_url() ?>stadium/updatetime/<?= $this->uri->segment(3) ?>">
        <div class="col-md-8 col-md-offset-2 well" style="margin-top: 20px">
            <div class="row">
                <legend class="text-center">เวลาเปิดบริการ</legend>
                <table class="table table-condensed">
                    <thead>
                        <tr>
                            <th>วัน</th><th>เปิดบริการ</th><th>เปิด</th><th>ปิด</th>
                        </tr>
                    </thead>
                    <tbody>                                       


                        <?php $datestadium =array ('Monday','Thuesday','Wednesday','Thuesday','Friday','Staturday','Sunday');$c=0; foreach ($showtime as $t) { ?>
                        <tr>
                            <td>

                                <?=$datestadium[($t['type'])]?>
                            </td>
                            <td><input type="checkbox" name="day[]" value="<?=$c++?>" class="checkbox" <?=$t['isopen']==1 ? 'checked' :' '?>></td>
                            <td><input type="time" id="txtBox" name="open[]" class="form-control input-sm" value="<?=$t['isopen']==1 ?  $t['open_time']:null?>" step="1800"></td>
                            <td><input type="time" id="txtBox" name="close[]" class="form-control input-sm" value="<?=$t['isopen']==1 ?  $t['end_time']:null?>" step="1800"></td>

                        </tr>
                        <?php }?>




                   


                    </tbody>
                </table>
            </div>
            <div class="row">
                <div class="pull-right">
                    <button type="submit" class="btn btn-primary withripple">Submit</button>
                </div>
            </div>
        </div>
        <input type="hidden" name="check" value="<?=count($showtime)?>">
    </form>

<!--    <div class="col-md-5 pull-left " style="padding-top: 2px;margin-top: 10px">
        <form  method="post" role="form" action="<?= base_url() ?>stadium/updatetime/<?= $this->uri->segment(3) ?>">

            <?php foreach ($showtime as $r) { ?>
                <div class="col-md-4">


                    <h6><?= $r['type'] ?> <input type="hidden" value="<?= $r['type'] ?>" name="type[]"></h6>

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
                            <?php
                            $time = "10";
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
                            <?php
                            $time = "10";
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
            <?php } ?>
             <div class="radio">
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
              </div>


            <div class="col-md-12 form-group">
                <hr>
                <button type="submit" class="btn btn-default">Edit</button>
            </div>
        </form>
    </div>   -->


</div>
