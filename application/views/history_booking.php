<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<?php
include 'template/head.php';
?>

<div class="container">
    <h4> <a href="#"></a> History booking </h4>
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">Account Settings</div>
            <div class="panel-body">




                <div class="container">
                    <?php include 'template/sideSetting.php'; ?>
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <button  class="btn btn-danger " role="button" id="history" value="1" onclick="history()">History</button>
                                <button  class="btn btn-success " role="button" id="today" value="2" onclick="today()">Today</button>

                                <button  class="btn btn-primary " role="button" id="futuer" value="3" onclick="futuer()">Comming</button>

                            </div>

                        </div>
                        <h4 class="text-center"><?=  substr(date(DATE_RFC2822),0,16)?></h4>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="panel panel-success">
                                    <div class="panel-heading">Welcome :  </div>
                                    <div class="panel-body text-center ">
                                        <h2>0 <small>การจองวันนี้</small></h2> ตรวจสอบการจองทั้งหมดได้ข้างล่าง
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="panel panel-info">
                                    <div class="panel-heading">สนามจองล่าสุด</div>
                                    <div class="panel-body text-center">
                                        <div class="list-group">
                                            <div class="list-group-item">
                                                <div class="row-action-primary">
                                                    <i class="mdi-file-folder"></i>
                                                </div>
                                                <div class="row-content">
                                                    <div class="least-content">15m</div>
                                                    <h4 class="list-group-item-heading">Tile with a label</h4>
                                                    <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus.</p>
                                                </div>
                                            </div>
                                            <div class="list-group-separator"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <form method="post" action="<?= base_url() ?>booking/cancelbooking">
                                <table class="table tablecompare">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Reserve id</th>
                                            <th>Date reserved</th>
                                            <th>Stadium</th>
                                            <th>Court</th>
                                            <th>Period of time</th>
                                            <th>Hours</th>

                                            <th></th>
                                        </tr>
                                    </thead>

                                    <tbody id="showbooking">



                                        <?php foreach ($today_booking as $r) { ?>
                                            <tr>
                                                <td></td>
                                                <td><?= $r->reserve_id ?><input type="hidden" name="rId" value="<?= $r->reserve_id ?>"></td>
                                                <td><?= substr($r->start_time, 0, 10) ?></td>
                                                <td><?= $r->stadium_name ?></td>
                                                <td><?= $r->court_name ?></td>
                                                <td><?= substr($r->start_time, 10, 11) ?>-<?= substr($r->end_time, 10, 11) ?></td>
                                                <?php
                                                $date5 = strtotime($r->start_time);
                                                $date = (strtotime($r->end_time) - strtotime($r->start_time));
                                                $today = date("H:i:s", $date);
                                                ?>
                                                <td><?= date("h", strtotime($r->start_time)) - date("h", strtotime($r->end_time)) ?>ชม. <?= date('i', $date) ?> นาที</td>
                                                <td><a href="<?= base_url() ?>booking/cancelbooking/<?= $r->reserve_id ?>" class="form-control btn-danger btn-sm" onclick="del()"> cancel</a>
    <!--                                                    <input type="submit" value="cancel" class="form-control btn-danger btn-sm"></td>-->
                                            </tr>
                                        <?php } ?>
                                    </tbody>    

                                </table>  
                            </form>

                        </div>


                    </div>
                </div>

                <div style="clear:both; margin-top:20px;"></div>


            </div>
        </div>
    </div>
</div>
<?php include 'template/modal.php'; ?>
<?php include 'template/footer.php'; ?>
<script>
    function today() {
        var x = document.getElementById("today").value;
        var fullpart = "http://cbt.backeyefinder.in.th/booking/historyBookingajax";
        $.ajax({
            type: "POST",
            url: fullpart,
            data: {type: x}
        }).done(function (msg) {
            var obj = JSON.parse(msg);

            // console.log(obj[0].stadium_id);
            show = ' ';

            console.log(obj);
            if (obj != null) {
                for (i = 0; i < obj.length; i++) {
                    show = show + '<tr>' +
                            '<td></td>' +
                            '<td>' + obj[i].reserve_id + '<input type="hidden" name="rId" value="<?= $r->reserve_id ?>"></td>' +
                            '<td>' + obj[i].start_time.substring(0, 10) + '</td>' +
                            ' <td>' + obj[i].stadium_name + '</td>' +
                            '  <td>' + obj[i].court_name + '</td>' +
                            '   <td>' + obj[i].start_time.substring(10, 16) + '-' + obj[i].end_time.substring(10, 16) + '</td>' +
                            '<td>' + (obj[i].end_time.substring(10, 13) - obj[i].start_time.substring(10, 13)) + 'ชม. ' + (obj[i].end_time.substring(14, 16) - obj[i].start_time.substring(14, 16)) + ' นาที</td>' +
                            '  </tr>';
                    console.log(obj[i].end_time.substring(14, 16));
                }
            }

            console.log(show);
            $("#showbooking").html(show);
        });
    }
    function history() {
        var x = document.getElementById("history").value;
        var fullpart = "http://cbt.backeyefinder.in.th/booking/historyBookingajax";
        $.ajax({
            type: "POST",
            url: fullpart,
            data: {type: x}
        }).done(function (msg) {
            var obj = JSON.parse(msg);

//            console.log(obj[0].stadium_id);
            show = ' ';
            if (obj != null) {
                for (i = 0; i < obj.length; i++) {
                    show = show + '<tr>' +
                            '<td></td>' +
                            '<td>' + obj[i].reserve_id + '<input type="hidden" name="rId" value="<?= $r->reserve_id ?>"></td>' +
                            '<td>' + obj[i].start_time.substring(0, 10) + '</td>' +
                            ' <td>' + obj[i].stadium_name + '</td>' +
                            '  <td>' + obj[i].court_name + '</td>' +
                            '   <td>' + obj[i].start_time.substring(10, 16) + '-' + obj[i].end_time.substring(10, 16) + '</td>' +
                            '<td>' + (obj[i].end_time.substring(10, 13) - obj[i].start_time.substring(10, 13)) + 'ชม. ' + (obj[i].end_time.substring(14, 16) - obj[i].start_time.substring(14, 16)) + ' นาที</td>' +
                            '  </tr>';
                    console.log(obj[i].end_time.substring(14, 16));
                }
            }
            // console.log(show);
            $("#showbooking").html(show);

        });
    }
    function futuer() {
        var x = document.getElementById("futuer").value;
        var fullpart = "http://cbt.backeyefinder.in.th/booking/historyBookingajax";
        $.ajax({
            type: "POST",
            url: fullpart,
            data: {type: x}
        }).done(function (msg) {
            var obj = JSON.parse(msg);

//            console.log(obj[0].stadium_id);
            show = ' ';
            if (obj != null) {
                for (i = 0; i < obj.length; i++) {
                    show = show + '<tr>' +
                            '<td></td>' +
                            '<td>' + obj[i].reserve_id + '<input type="hidden" name="rId" value="<?= $r->reserve_id ?>"></td>' +
                            '<td>' + obj[i].start_time.substring(0, 10) + '</td>' +
                            ' <td>' + obj[i].stadium_name + '</td>' +
                            '  <td>' + obj[i].court_name + '</td>' +
                            '   <td>' + obj[i].start_time.substring(10, 16) + '-' + obj[i].end_time.substring(10, 16) + '</td>' +
                            '<td>' + (obj[i].end_time.substring(10, 13) - obj[i].start_time.substring(10, 13)) + 'ชม. ' + (obj[i].end_time.substring(14, 16) - obj[i].start_time.substring(14, 16)) + ' นาที</td>' +
                            '  </tr>';
                    console.log(obj[i].end_time.substring(14, 16));
                }
            }
            // console.log(show);
            $("#showbooking").html(show);

        });
    }
</script>

<?php include 'template/footer_scrpit.php'; ?>

</body>
</html>