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
    <h4> <a href="#"></a> </h4>
    <div class="row">
       <div class="panel panel-default"  style="margin-top: 20px">
            <div class="panel-heading">
            <ul class="breadcrumb" style="margin-bottom: 1px;">
                    <li class="active"> My Booking </li>
                </ul>
            </div>
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
                        <div id='todaybooking'>
                        <h4 class="text-center"><?=  substr(date(DATE_RFC2822),0,16)?></h4>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="panel panel-success" id="headcr">
                                    <div class="panel-heading" id="headding">Today  </div>
                                    <div class="panel-body text-center " id="countallbook">
                                        <h2><?=count($today_booking)?> <small>booking</small></h2> Check your all booking down below 
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="panel panel-info">
                                    <div class="panel-heading">Recently booking</div>
                                    <div class="panel-body text-center">
                                        <?php if($allbooking!=null) { ?>
                                        <div class="list-group">
                                            <div class="list-group-item">
                                                <div class="row-action-primary">
                                                    <a href="<?= base_url() ?>stadium/profile/<?=$allbooking['0']->stadium_id?>" ><img class="circle" src="<?= base_url() ?>/asset/images/<?= $allbooking['0']->stadium_path != null ? 'stadiumpic/' . $allbooking['0']->stadium_path : 'bad.png' ?>" alt="icon">
                                                    </a>
                                                        </div>
                                                <div class="row-content text-left">
                                                    <div class="least-content">คอร์ด : <?= $allbooking['0']->court_name ?></div>
                                                    <h4 class="list-group-item-heading"><?=$allbooking['0']->stadium_name?></h4>
                                                    <p class="list-group-item-text">วัน : <small><?= substr($allbooking['0']->start_time, 0, 10) ?></small> </p>
                                                       <p class="list-group-item-text">เวลา  <?= substr($allbooking['0']->start_time, 10, 11) ?>-<?= substr($allbooking['0']->end_time, 10, 11) ?></p>
<!--+                                                        <p class="list-group-item-text">ผู้จอง <?= $allbooking['0']->fname ?> <?= $allbooking['0']->lname ?></p>-->
                                                        <p class="list-group-item-text">โทร : <?= $allbooking['0']->tel !=null ? $allbooking['0']->tel:'-'  ?></p>
                                                </div>
                                            </div>
                                            <div class="list-group-separator"></div>
                                        </div>
                                        <?php } else{?>
                                        <div class="alert alert-dismissable alert-warning">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <h4>No Booking!</h4>
    <p>Please booking some Stadium , <a href="http://cbt.backeyefinder.in.th/stadium/allStadium" class="alert-link">to see your booking history</a>.</p>
</div>
                                        <?php }?>
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
                                                <td><?= $r->reserve_id ?><input type="hidden" name="rId" value="<?= $r->reserve_id ?>" ></td>
                                                <td><?= substr($r->start_time, 0, 10) ?></td>
                                                <td><a href="<?= base_url() ?>stadium/profile/<?=$allbooking['0']->stadium_id?>" ><?= $r->stadium_name ?></a></td>
                                                <td><?= $r->court_name ?></td>
                                                <td><?= substr($r->start_time, 10, 11) ?>-<?= substr($r->end_time, 10, 11) ?></td>
                                                <?php
                                                $date5 = strtotime($r->start_time);
                                                $date = (strtotime($r->end_time) - strtotime($r->start_time));
                                                $today = date("H:i:s", $date);
                                                ?>
                                                <td><?= date("H", strtotime($r->end_time)) - date("H", strtotime($r->start_time)) ?>ชม. <?= date('i', $date) ?> นาที</td>
                                                <?php if($r->iscome<99){?>
                                                <td><button type="button" class="btn-danger btn-sm btn" onclick="clbook(this,false)" value="<?=$r->reserve_id?>"> Cancel</button></td>
    <!--                                                    <input type="submit" value="cancel" class="form-control btn-danger btn-sm"></td>-->
                                                <?php } else {?><td><span class="glyphicon glyphicon-remove label label-danger">This booking is Cancel</span></td>
                                                <?php }?>
                                            </tr>
                                        <?php } ?>
                                    </tbody>    

                                </table>  
                            </form>

                        </div>

                        </div>
                        <div id="commingbooking">
                            gggggggg
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
                $(document).ready(function (e) {
                $('#commingbooking').hide();
//                alert('gg');

                });
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
                            '<td>' + obj[i].reserve_id + '<input type="hidden" name="rId" value="'+obj[i].reserve_id+'"></td>' +
                            '<td>' + obj[i].start_time.substring(0, 10) + '</td>' +
                            ' <td><a href="<?= base_url() ?>stadium/profile/<?=$allbooking['0']->stadium_id?>" >' + obj[i].stadium_name + '</a></td>' +
                            '  <td>' + obj[i].court_name + '</td>' +
                            '   <td>' + obj[i].start_time.substring(10, 16) + '-' + obj[i].end_time.substring(10, 16) + '</td>' +
                            '<td>' + (obj[i].end_time.substring(10, 13) - obj[i].start_time.substring(10, 13)) + 'ชม. ' + (obj[i].end_time.substring(14, 16) - obj[i].start_time.substring(14, 16)) + ' นาที</td>' +
                            '  </tr>';
                    console.log(obj[i].end_time.substring(14, 16));
                }
            }
            showallbook =  '<h2>'+obj.length+'<small>booking</small></h2> Check your all booking down below';
            console.log(show);
            $("#showbooking").html(show);
            $('#countallbook').html(showallbook);
            $('#headding').html('Today');
          
            $('#headcr').removeClass('panel-info');
            $('#headcr').removeClass('panel-danger');
            $('#headcr').addClass('panel-success');
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
                            '<td>' + obj[i].reserve_id + '<input type="hidden" name="rId" value="'+obj[i].reserve_id+'"></td>' +
                            '<td>' + obj[i].start_time.substring(0, 10) + '</td>' +
                            ' <td> <a href="<?= base_url() ?>stadium/profile/<?=$allbooking['0']->stadium_id?>" >' + obj[i].stadium_name + '</a></td>' +
                            '  <td>' + obj[i].court_name + '</td>' +
                            '   <td>' + obj[i].start_time.substring(10, 16) + '-' + obj[i].end_time.substring(10, 16) + '</td>' +
                            '<td>' + (obj[i].end_time.substring(10, 13) - obj[i].start_time.substring(10, 13)) + 'ชม. ' + ((obj[i].end_time.substring(14, 16) - obj[i].start_time.substring(14, 16))< 0 ? '30':(obj[i].end_time.substring(14, 16) - obj[i].start_time.substring(14, 16))) + ' นาที</td>' +
                            '  </tr>';
                    console.log(obj[i].end_time.substring(14, 16));
                }
            }
            showallbook =  '<h2>'+obj.length+'<small>booking</small></h2> Check your all booking down below';
            // console.log(show);
            $("#showbooking").html(show);
            $('#countallbook').html(showallbook);
            $('#headding').html('History');
                 $('#headcr').removeClass('panel-info');
            $('#headcr').removeClass('panel-success');
            $('#headcr').addClass('panel-danger');

        });
    }
    function futuer() {
        var x = document.getElementById("futuer").value;
//        alert(x);
        var fullpart = "http://cbt.backeyefinder.in.th/booking/historyBookingajax";
        $.ajax({
            type: "POST",
            url: fullpart,
            data: {type: x}
        }).done(function (msg) {
            var obj = JSON.parse(msg);

            console.log(obj);
            show = ' ';
            if (obj != null) {
                for (i = 0; i < obj.length; i++) {
                    show = show + '<tr>' +
                            '<td></td>' +
                            '<td>' + obj[i].reserve_id + '<input type="hidden" name="rId" value=""'+obj[i].reserve_id+'""></td>' +
                            '<td>' + obj[i].start_time.substring(0, 10) + '</td>' +
                            ' <td>' + obj[i].stadium_name + '</td>' +
                            '  <td>' + obj[i].court_name + '</td>' +
                            '   <td>' + obj[i].start_time.substring(10, 16) + '-' + obj[i].end_time.substring(10, 16) + '</td>' +
                            '<td>' + (obj[i].end_time.substring(10, 13) - obj[i].start_time.substring(10, 13)) + 'ชม. ' + ((obj[i].end_time.substring(14, 16) - obj[i].start_time.substring(14, 16))< 0 ? '30':(obj[i].end_time.substring(14, 16) - obj[i].start_time.substring(14, 16))) + ' นาที</td>' ;
                          
                        console.log(obj[i].iscome);
                            if(obj[i].iscome<99){
                               show = show+' <td><button type="button" class="btn-danger btn-sm btn" onclick="clbook(this,false)" value="'+obj[i].reserve_id+'"> Cancel</button></td>';
                                    }else{
                                    show = show+'<td><span class="glyphicon glyphicon-remove label label-danger">This booking is Cancel</span></td>';
                                    }
                        show = show+ '  </tr>';
//                    console.log(obj[i].end_time.substring(14, 16));
                }
            }
            showallbook =  '<h2>'+obj.length+'<small>booking</small></h2> Check your all booking down below';
            // console.log(show);
            $("#showbooking").html(show);
            $('#countallbook').html(showallbook);
             $('#headding').html('Comming');
                   $('#headcr').removeClass('panel-danger');
            $('#headcr').removeClass('panel-success');
            $('#headcr').addClass('panel-info');
        });
    }
     function clbook(t) {
   var reservid = $(t).attr('value');
       c =  confirm("Are you sure to Cancel"+ $(t).attr('value'));
       if(c){
//           alert(reservid);
    window.location.href= 'http://cbt.backeyefinder.in.th/booking/cancelmybook/'+reservid+'';}
    }
</script>


<?php include 'template/footer_scrpit.php'; ?>

</body>
</html>