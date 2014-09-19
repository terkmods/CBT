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
                        <select class="form-control">
                            <option value="default">เลือกคอร์ด </option> 
                            <?php  foreach ($court as $ct) { ?>        
                            <option value="<?=$ct['court_name']?>"><?=$ct['court_name']?></option>
                            <?php } ?>
                        </select>

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="today col-md-5 col-md-offset-5 ">
                <h4> วันที่ </h4> <span id="demo"></span>
            </div>
        </div>
        <div class="col-md-5 col-md-offset-1">
            <div class="tab-pane" id="mycourt">


                <hr>



                <div id="morning">
                    <table class="table table-bordered  table-condensedy" id="tableMorning">
                        <thead><tr><th>เวลา</th><th>#</th></tr></thead>
                        <tbody id="runtime">
                            <tr>
                                <td style="width: 110px; text-align: center">No select</td>
                                <td class="span6"></td>
                            </tr>

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
                        <tbody id="runtime">
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

<?php include 'template/modal.php'; ?>

<?php include 'template/footer.php'; ?>