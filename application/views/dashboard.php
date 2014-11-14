<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<?php
include 'template/head.php';
$num = 1;
$status = $ow->authenowner_status;
?>
<div class="container">
    <h4> <a href="#"></a> Owner System </h4>
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">DashBoard</div>
            <div class="panel-body">
                <div class="container">
                    <?php include 'template/sideSetting.php'; ?>
                    <div class="col-md-9" >

                        <ul class="nav nav-tabs" id="myTab">
                            <li class="active"><a href="<?php echo base_url() ?>stadium/add">DashBoard</a></li>
                        </ul>
                        <div class="row" style="margin-top: 10;">
                            <div class="col-md-4" > 
                                <div class="panel panel-success">
                                    <div class="panel-heading">Welcome :  </div>
                                    <div class="panel-body text-center ">
                                        <h2><?= count($totalbooking) ?><small>การจองวันนี้</small></h2> ตรวจสอบการจองทั้งหมดได้ข้างล่าง
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div id="container" style="min-width: 500px; height: 400px; margin: 0 auto"></div>
                            </div>
                        </div>
                        <div class="list-group" style="margin-top: 10;">

                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Today booking</h3>
                                </div>
                                <div class="panel-body">
                                    <h4><?= substr(date(DATE_RFC2822), 0, 16) ?></h4>
                                    <?php if ($playingtoday != null && $todaycomming != null && $todaypass != null) { ?> 
                                        No Booking for today
                                    <?php } ?>
                                    <!--playing-->
                                    <?php if ($playingtoday != null) { ?>
                                        <div class="panel panel-success">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">Now  playing</h3>
                                            </div>
                                            <div class="panel-body">
                                                <?php foreach ($playingtoday as $b) { ?>
                                                    <div class="list-group-item">
                                                        <div class="row-picture">
                                                            <a href="<?php echo base_url() ?>stadium/profile/<?= $b->stadium_id ?>"><img class="circle" src="<?php echo base_url() ?>asset/images/<?= $b->stadium_path != null ? 'stadiumpic/' . $b->stadium_path . '' : 'bad.png' ?>" alt="icon"></a>
                                                        </div>
                                                        <div class="row-content">
                                                            <div class="action-secondary">
                                                                <button type="button" class="btn btn-primary btn-xs viewdetail" data-toggle="modal" data-target="#actionbooking" data-pic="<?= $b->stadium_path != null ? 'stadiumpic/' . $b->stadium_path . '' : 'bad.png' ?>" data-sname="<?= $b->stadium_name ?>"
                                                                        data-court="<?= $b->court_name ?>" data-time="<?= $b->start_time ?> - <?= $b->end_time ?>"  data-jong="<?= $b->fname ?> <?= $b->lname ?>" data-tel="<?= $b->phone ?> " data-play=1>
                                                                    more info
                                                                </button>
                                                            </div>
                                                            <h4 class="list-group-item-heading">สนาม : <a href="<?php echo base_url() ?>stadium/profile/<?= $b->stadium_id ?>"><?= $b->stadium_name ?></a> <small>คอร์ด : <?= $b->court_name ?></small> </h4>
                                                            <p class="list-group-item-text">เวลา  <?= substr("$b->start_time", 10) ?> - <?= substr("$b->end_time", 10) ?></p>
        <!--                                                        <p class="list-group-item-text">ผู้จอง <?= $b->fname ?> <?= $b->lname ?> โทร : <?= $b->phone ?></p>
                                                            <p class="list-group-item-text">โทร : <?= $b->phone ?></p>-->
                                                        </div>
                                                    </div>
                                                    <div class="list-group-separator"></div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    <?php } ?>
                                    <div class="list-group-separator"></div>
                                    <!--wating-->
                                    <?php if ($todaycomming != null) { ?>
                                        <div class="panel panel-warning">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">Comming</h3>
                                            </div>
                                            <div class="panel-body">
                                                <?php foreach ($todaycomming as $b) { ?>
                                                    <div class="list-group-item">
                                                        <div class="row-picture">
                                                            <a href="<?php echo base_url() ?>stadium/profile/<?= $b->stadium_id ?>"><img class="circle" src="<?php echo base_url() ?>asset/images/<?= $b->stadium_path != null ? 'stadiumpic/' . $b->stadium_path . '' : 'bad.png' ?>" alt="icon"></a>
                                                        </div>
                                                        <div class="row-content">
                                                            <div class="action-secondary">
                                                                <button type="button" class="btn btn-primary btn-xs viewdetail" data-toggle="modal" data-target="#actionbooking" data-pic="<?= $b->stadium_path != null ? 'stadiumpic/' . $b->stadium_path . '' : 'bad.png' ?>" data-sname="<?= $b->stadium_name ?>"
                                                                        data-court="<?= $b->court_name ?>" data-time="<?= $b->start_time ?> - <?= $b->end_time ?>"  data-jong="<?= $b->fname ?> <?= $b->lname ?>" data-tel="<?= $b->phone ?>" data-play=2>
                                                                    more info
                                                                </button>
                                                            </div>
                                                            <h4 class="list-group-item-heading">สนาม : <a href="<?php echo base_url() ?>stadium/profile/<?= $b->stadium_id ?>"><?= $b->stadium_name ?></a> <small>คอร์ด : <?= $b->court_name ?></small> </h4>
                                                            <p class="list-group-item-text">เวลา  <?= substr("$b->start_time", 10) ?> - <?= substr("$b->end_time", 10) ?></p>
        <!--                                                        <p class="list-group-item-text">ผู้จอง <?= $b->fname ?> <?= $b->lname ?> โทร : <?= $b->phone ?></p>
                                                            <p class="list-group-item-text">โทร : <?= $b->phone ?></p>-->
                                                        </div>
                                                    </div>
                                                    <div class="list-group-separator"></div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    <?php } ?>
                                    <div class="list-group-separator"></div>
                                    <?php if ($todaypass != null) { ?>
                                        <div class="panel panel-danger">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">Pass</h3>
                                            </div>
                                            <div class="panel-body">
                                                <?php foreach ($todaypass as $b) { ?>
                                                    <div class="list-group-item">
                                                        <div class="row-picture">
                                                            <a href="<?php echo base_url() ?>stadium/profile/<?= $b->stadium_id ?>" ><img class="circle" src="<?php echo base_url() ?>asset/images/<?= $b->stadium_path != null ? 'stadiumpic/' . $b->stadium_path . '' : 'bad.png' ?>" alt="icon"></a>
                                                        </div>
                                                        <div class="row-content">
                                                            <div class="action-secondary">
                                                                <button type="button" class="btn btn-primary btn-xs viewdetail" data-toggle="modal" data-target="#actionbooking" data-pic="<?= $b->stadium_path != null ? 'stadiumpic/' . $b->stadium_path . '' : 'bad.png' ?>" data-sname="<?= $b->stadium_name ?>"
                                                                        data-court="<?= $b->court_name ?>" data-time="<?= $b->start_time ?> - <?= $b->end_time ?>"  data-jong="<?= $b->fname ?> <?= $b->lname ?>" data-tel="<?= $b->phone ?>" data-play=3>
                                                                    more info
                                                                </button>
                                                            </div>
                                                            <h4 class="list-group-item-heading">สนาม : <a href="<?php echo base_url() ?>stadium/profile/<?= $b->stadium_id ?>"><?= $b->stadium_name ?></a> <small>คอร์ด : <?= $b->court_name ?></small> </h4>
                                                            <p class="list-group-item-text">เวลา  <?= substr("$b->start_time", 10) ?> - <?= substr("$b->end_time", 10) ?></p>
        <!--                                                        <p class="list-group-item-text">ผู้จอง <?= $b->fname ?> <?= $b->lname ?> โทร : <?= $b->phone ?></p>
                                                            <p class="list-group-item-text">โทร : <?= $b->phone ?></p>-->
                                                        </div>
                                                    </div>
                                                    <div class="list-group-separator"></div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    <?php } ?>
                                    <div class="list-group-separator"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="clear:both; margin-top:20px;"></div>
            </div>
        </div>
    </div>
</div>

<div class="modal " id="actionbooking" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog de ">
        <div class="modal-content" style="background-color: #f5f5f5">
            <form id="addcontent" action="" method="post" enctype="multipart/form-data">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Details</h4>
                </div>
                <div class="modal-body" style="background-color: white;padding-top:30px;">
                    <div class="row">
                        <div class="col-md-5 img-responsive" style="margin-top: 5px;margin-left: 5px" >
                            <img id="path"  src="" class="img-thumbnail">
                        </div>
                        <div class="col-md-6 " >
                            <legend style="text-align: left" id="sname" > </legend>
                            <h5>คอร์ด : <span id="court"></span></h5>
                            <h5>วันที่ :<span id="date"></span></h5>
                            <h5>เวลา :<span id="stime"></span> <span  id="etime"></span></h5>
                            <h5>ผู้จอง : <a href="" id="name"> </a></h5>
                            <h5>เบอร์ติดต่อ :<span id="tel"></span></h5>
                            
                            

                            <div id='modalshow'>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="modal-footer" style="padding-bottom: 15px;margin-top: -10px">
                    
                    <div id='modalsubmit'></div>
                </div>
            </form>
        </div>
    </div>
</div>


<?php include 'template/modal.php'; ?>
<?php include 'template/footer.php'; ?>
<script src="<?= base_url() ?>asset/js/highchart/highcharts.js"></script>
<script src="http://code.highcharts.com/modules/exporting.js"></script>
<script>
    $(function () {
        $('#container').highcharts({
            chart: {
                type: 'column'
            },
            title: {
                text: 'Income for today'
            },
            subtitle: {
                text: 'all your stadium'
            },
            xAxis: {
                type: 'category',
                labels: {
                    rotation: -45,
                    style: {
                        fontSize: '13px',
                        fontFamily: 'Verdana, sans-serif'
                    }
                }
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Incomes (Baht)'
                }
            },
            legend: {
                enabled: false
            },
            tooltip: {
                pointFormat: 'incomes: <b>{point.y:.1f} Baht</b>'
            },
            series: [{
                    name: 'Population',
                    data: [
<?php foreach ($todayprice as $r) { ?>
                            ['<?= $r->stadium_name ?>', <?= $r->count != null ? $r->count : '0' ?>],
<?php } ?>
                    ],
                    dataLabels: {
                        enabled: true,
                        rotation: -90,
                        color: '#FFFFFF',
                        align: 'right',
                        x: 4,
                        y: 10,
                        style: {
                            fontSize: '13px',
                            fontFamily: 'Verdana, sans-serif',
                            textShadow: '0 0 3px black'
                        }
                    }
                }]
        });
    });
</script>
<script>
    $(document).on("click", ".viewdetail", function () {



        var path = $(this).data("pic");
        var sname = $(this).data("sname");
        var name = $(this).data("jong");
        var tel = $(this).data("tel");
        var time = $(this).data("time");
        var date = time.substr(0, 10);
        var stime = time.substr(10, 12);
        var etime = time.substr(32);
        var court = $(this).data("court");
        var play = $(this).data("play");
        console.log(path);
        console.log(sname);

        if (play == 3) {
            var htmlmodal = '<hr>'+'<div class="form-group">' +
                    '<label for="select" class="col-lg-3 control-label" style="margin-left: -15px">Status: </label>' +
                    '<div class="col-lg-5" style="margin-bottom: 20px">' +
                    '<select class="form-control" id="select" style="margin-top: -3px;margin-left: -9px;">' +
                    '<option>มา</option>' +
                    '<option>ไม่มา</option>' +
                    '</select>' +
                    '</div>' +
                    '</div>';
            $('#modalshow').html(htmlmodal);
            
            var aaa = '<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>'+'<button type="button" class="btn btn-primary">Submit</button>';
            $('#modalsubmit').html(aaa);

        } else {
            var aaa = '<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>'+'<button type="button" class="btn btn-warning ">Cancle Reserve</a>';
            $('#modalsubmit').html(aaa);

        }

        document.getElementById("path").setAttribute("src", '<?= base_url() ?>asset/images/' + path + '');
        $('#sname').html(sname);
        $('#name').html(name);
        $('#tel').html(tel);
        $('#time').html(time);
        $('#stime').html(stime);
        $('#etime').html(etime);
        $('#date').html(date);
        $('#court').html(court);
        $('#play').html(play);

    });
</script>

<?php include 'template/footer_scrpit.php'; ?>
</body>
</html>

