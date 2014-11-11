<?php include 'template/head.php'; ?>
       
        <div style="clear:both;"></div>



        <div class="container" style="padding-top: 20px">
            <div class="row" style="margin-top: 10px;">
                <div class="col-md-3" style="padding-right: 25px">
                    <div class="row text-center">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><span class="glyphicon glyphicon-search"> </span>  Search</h3>
                            </div>
                            <div class="panel-body">

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
                                        <div class="col-md-4 col-sm-6 hero-feature" >
                                            <div class="thumbnail">
                                                <img src="<?php echo base_url() ?>asset/images/stadiumpic/<?= $row->stadium_path ?>" alt="" style="width: 220px;height: 170px">
                                                <div class="caption">
                                                    <h3><?= $row->stadium_name ?></h3>
                                                    <p>ที่อยู่ : &nbsp;<?= $row->soi ?> <?= $row->district ?> <?= $row->province ?> </p>
                                                    <p>ราคา: &nbsp;120/ชม.</p>
                                                    <p>เบอโทร: &nbsp;<?= $row->tel != null ? $row->tel : '-'; ?></p>
                                                    <p>
                                                        <a href="<? echo base_url() ?>booking/reserve/<?= $row->stadium_id ?>" class="btn btn-primary">Book Now!</a> <a href="<? echo base_url() ?>stadium/profile/<?= $row->stadium_id ?>" class="btn btn-default">More Info</a>
                                                    <lable class="pull-right">
                                                        <input type="checkbox" value=" <?= $row->stadium_id ?>" name="compare[]">compare
                                                    </lable>
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
                if(count==0){
                    alert("กรุณาเลือกสนามเพื่อเปรียบเทียบครับ");return false;
                }else if(count==1){
                    alert("กรุณาเลือกสนามมากกว่า 1 สนามครับ");return false;
                }else if(count>4) {
                    alert("เลือกได้ไม่เกิน 4 สนามครับ");return false;      
                }else{
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
