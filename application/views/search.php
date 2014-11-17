<?php include 'template/head.php'; ?>
<div style="clear:both;"></div>



<div class="container" style="padding-top: 20px">

    <div class="col-md-3" style="padding-right: 25px">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading text-center">
                    <h3 class="panel-title"><span class="glyphicon glyphicon-search"> </span>  Search</h3>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" method="post" action="<?php echo base_url() ?>stadium/searchAdvance">
                        <div class="form-group">
                            <label for="inputEmail" class="col-lg-4 control-label">Keyword</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" id="inputEmail" name="value1" placeholder="ค้นหาจากชื่อสนาม">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="select" class="col-lg-4 control-label">District</label>
                            <div class="col-lg-8">
                                <select class="form-control" id="select" name="value2">
                                    <option value="all">เลือกทุกเขต</option>  
                                    <?php foreach ($district as $row) { ?>
                                        <option value="<?= $row->district ?>"><?= $row->district ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="select" class="col-lg-4 control-label">Province</label>
                            <div class="col-lg-8">
                                <select class="form-control" id="select" name="value3">
                                    <option value="all">เลือกทุกจังหวัด</option> 
                                    <?php foreach ($province as $row) { ?>
                                        <option value="<?= $row->province ?>"><?= $row->province ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="select" class="col-lg-4 control-label">Floor</label>
                            <div class="col-lg-8">
                                <div class="checkbox pd" >
                                    <label>
                                        <input type="checkbox" name="floortype"  value="พื้นปูน"> พื้นปูน
                                    </label>
                                </div>
                                <div class="checkbox pd" >
                                    <label>
                                        <input type="checkbox" name="floortype2"  value="พื้นยาง"> พื้นยาง
                                    </label>
                                </div>
                                <div class="checkbox pd" >
                                    <label>
                                        <input type="checkbox" name="floortype3"  value="พื้นปาร์เก้"> พื้นปาร์เก้
                                    </label> 
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="select" class="col-lg-4 control-label">Facility</label>
                            <div class="col-lg-8">
                                <div class="checkbox pd" >
                                    <label>
                                        <input type="checkbox" name="f1"  value="1"> Parking
                                    </label>
                                </div>
                                <div class="checkbox pd" >
                                    <label>
                                        <input type="checkbox" name="f2"  value="1"> Food Shop
                                    </label>
                                </div>
                                <div class="checkbox pd" >
                                    <label>
                                        <input type="checkbox" name="f3"  value="1"> Bathroom
                                    </label>
                                </div>
                                <div class="checkbox pd" >
                                    <label>
                                        <input type="checkbox" name="f4"  value="1"> Racket Repair
                                    </label>
                                </div>
                                <div class="checkbox pd" >
                                    <label>
                                        <input type="checkbox" name="f5"  value="1"> Shop
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-9 col-lg-offset-3">
                                <button type="submit" class="btn btn-success">Search</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <form action="<?php echo base_url() ?>stadium/compare" method="post" onsubmit="return checksubmit();">
        <button type='submit' class="compare" ><span class="glyphicon glyphicon-tasks"></span> &nbsp;Compare</button>
        <div class="col-md-9">
            <div class="row text-center">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><span class="glyphicon glyphicon-list-alt"> </span>  Result</h3>
                    </div>
                    <div class="panel-body">
                        <?php foreach ($stadium as $row) { ?>
                            <div class="col-md-4 col-sm-6 hero-feature sc" >
                                <div class="thumbnail">
                                    <a href="<? echo base_url() ?>stadium/profile/<?= $row->stadium_id ?>"><img src="<?php echo base_url() ?>asset/images/stadiumpic/<?= $row->stadium_path ?>" alt="" style="width: 220px;height: 170px"></a>
                                    <div class="caption">
                                        <h3><a href="<? echo base_url() ?>stadium/profile/<?= $row->stadium_id ?>"><?= $row->stadium_name ?></a></h3>
                                        <p>ที่อยู่ : &nbsp;<?= $row->soi ?> <?= $row->district ?> <?= $row->province ?> </p>
                                        <p>ราคา: &nbsp;120/ชม.</p>
                                        <p>เบอโทร: &nbsp;<?= $row->tel != null ? $row->tel : '-'; ?></p>
                                        <p>
                                            <a href="<? echo base_url() ?>booking/reserve/<?= $row->stadium_id ?>" class="btn btn-primary">Book Now!</a> <a href="<? echo base_url() ?>stadium/profile/<?= $row->stadium_id ?>" class="btn btn-default">More Info</a>
                                            <div class="checkbox pf pull-right" >
                                                        <label>
                                                            <input type="checkbox" value=" <?= $row->stadium_id ?>" name="compare[]">  compare
                                                        </label>
                                                    </div>
                                        </p>
                                        




                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </form> 
</div>
</div>
<script>
        function checksubmit() {
            var count = $('input[type=checkbox]:checked').length;
            if (count == 0) {
                alert("กรุณาเลือกสนามเพื่อเปรียบเทียบครับ");
                return false;
            } else if (count == 1) {
                alert("กรุณาเลือกสนามมากกว่า 1 สนามครับ");
                return false;
            } else if (count > 4) {
                alert("เลือกได้ไม่เกิน 4 สนามครับ");
                return false;
            } else {
                return true;
            }
        }
</script>
<?php include 'template/modal.php'; ?>

<?php include 'template/footer.php'; ?>
<!--        
<?php include 'template/footer_scrpit.php'; ?>

    </body>
</html>
