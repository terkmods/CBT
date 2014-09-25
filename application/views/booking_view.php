<?php include 'template/head.php';
?>
<style type="text/css">
    table thead tr th{
        text-align:center !important;
    }
    tr:hover{
        cursor:pointer;

    }
    #select:hover{
        cursor:pointer;
        background: lightBlue;
    }
    .selected {
        background: lightBlue
    }
</style>
<div class="container">

    <div id="cover" >  

        <a role="button" data-toggle="modal" data-target="#uploadimg" class="btn"><img src="<?= base_url() ?>/asset/images/<?php
            if ($data['0']->cover_path != "") {
                echo 'stadiumpic/' . $data['0']->cover_path;
            } else {
                echo 'cover_new.jpg';
            }
            ?>" width="1280"></a>

    </div>  
    <div class="container upper-profile">
        <div class="row">
            <div class="col-md-3 profile-pic"><img src="<?= base_url() ?>/asset/images/stadiumpic/<?= $data['0']->stadium_path ?>" width="200" class="img-thumbnail"></div>
            <div class="col-md-3 info"><h3><?= $data['0']->stadium_name ?></h3>
                <p>เจ้าของ
                    <span class="glyphicon glyphicon-map-marker"></span>&nbsp<a href="">Bangkok</a>, <a href="#">Thailand</a></p> <p>
                    โทรศัพท์:<h5><?= $data['0']->tel ?></h5>


            </div>
        </div>
    </div>
    <!--    ส่วนจอง-->
    <div class="container" >
        <hr>
        <div class="row">
            <div class="control-group">

                <div class="controls">
                    <div class="input-group">
                        <label for="date-pik" class="input-group-addon btn">
                            <span class="glyphicon glyphicon-calendar"></span> เลือกวัน
                        </label>
                        <input  type="text" id="date-pik" class="date-picker form-control" />

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="control-group">

                <div class="controls">
                    <div class="input-group">
                        <label for="date-pik" class="input-group-addon btn">
                            เลือกคอร์ด
                        </label>
                        <select class="form-control" id="courtselect" onchange="courtchange()">
                            <option value="default">เลือกคอร์ด </option> 
                            <?php foreach ($court as $ct) { ?>        
                                <option value="<?= $ct['court_name'] ?>,<?= $ct['court_id'] ?>" id="courtoption"><?= $ct['court_name'] ?></option>
                            <?php } ?>
                        </select>

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="today col-md-5 col-md-offset-5 ">
                <h4 style="font-size: 15px">วัน : <span id="dayOfWeek" ></span></h4> <h5> เวลาให้บริการ : <span id="court"></span></h5>
            </div>
        </div>
        <div class="col-md-5 col-md-offset-1">
            <div class="tab-pane" id="mycourt">


                <hr>



                <div id="morning">
                    <table class="table table-bordered  table-condensedy" id="tableMorning">
                        <thead><tr><th>เวลา</th><th>#</th></tr></thead>
                        <tbody id="runtime">
                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="tab-pane" id="mycourt">


                <hr>


                <div id="evening">
                    <table class="table table-bordered  table-condensedy" id="tableEvening">
                        <thead><tr><th>เวลา</th><th>#</th></tr></thead>
                        <tbody id="runtime1">
                            <tr>
                                <td style="width: 110px; text-align: center">No select</td>
                                <td class="span6"></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
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

<?php include 'template/modal.php'; ?>

<?php include 'template/footer.php'; ?>