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
//print_r($data);
?>

<div class="container">
    <h4> <a href="#"></a> <span id="flashmsg"><font style="color: green"></font></span></h4> 
    <div class="row">
        <div class="panel panel-default"  style="margin-top: 20px">
            <div class="panel-heading">
            <ul class="breadcrumb" style="margin-bottom: 1px;">
                    <li class="active"> History Booking Stadium</li>
                </ul>
            </div>
            <div class="panel-body">



                <div class="container">


                    <?php include 'template/sideSetting.php'; ?>
                    <div class="col-md-9">
                        <div class="row">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="panel panel-success">
                                        <div class="panel-heading">เลือกวัน</div>
                                        <div id="datepicker" style="margin-left: 20px"></div>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="panel panel-info">
                                        <div class="panel-heading">สนามของฉัน</div>
                                        <div class="panel-body text-center">
                                            <div class="list-group">
                                                <?php foreach($stadium as $st){ ?>
                                                <div class="col-md-3">
                                                    <a  href="<?php echo base_url() ?>stadium/historystadium/<?= $st->stadium_id ?>" ><img class="img-responsive circle thumbnail" src="<?php echo base_url() ?>asset/images/<?= $st->stadium_path != null ? 'stadiumpic/' . $st->stadium_path . '' : 'bad.png' ?>" /></a>
                                                    <small><?=$st->stadium_name?></small>
                                                    
                                                </div>
                                                <?php }?>
                                          



                                            </div>
                                        </div>
                                    </div>
                                         <?php
                            echo'<font color=red>';
                            echo $this->session->flashdata('msg');
                            echo '</font>'
                            ?>
                                </div>
                            </div>


                        </div>
                        <div class="row">
                            <table class="table table-bordered  table-condensedy" id="news-table">
                                <thead><tr><th>ReserveID</th><th>Stadium</th><th>Court name</th><th>Date</th><th>Time reserve</th><th>Reserve by</th><th>Phone number</th><th>Total price</th><th>User Status</th><th>status</th></tr></thead>
                                <tbody id="runtime">
                                    <?php foreach ($allhis as $a) { ?>
                                        <tr>
                                            <td><?= $a->reserve_id ?></td>
                                            <td><a href="http://cbt.backeyefinder.in.th/stadium/profile/<?= $a->stadium_id ?>"><?= $a->stadium_name ?></a></td>
                                            <td><?= $a->court_name ?></td>
                                            <td><?= substr("$a->start_time", 0, 10) ?></td>
                                            <td><?= date("H:i", strtotime($a->start_time) )?> - <?= date("H:i", strtotime($a->end_time) )?></td>
                                            <td><a href="http://cbt.backeyefinder.in.th/users/profile/<?= $a->user_id ?>"><?= $a->fname ?></a></td>
                                            <td><?= $a->tel ?></td>
                                            <td><?= $a->sumprice ?></td>
                                            <td > <?php if ($a->status == 99) { ?>
                                                    <span class="label label-danger">Blacklist</span>
                                                <?php } else if ($a->status == 98) { ?>
                                                    <span class="label label-warning">Warning</span>
                                                <?php } else { ?>
                                                    <span class="label label-success">Active</span>
                                                <?php } ?>
                                                    
                                            </td>

                                            <td>
                                                <?php if($a->iscome < 99) { ?>
                                                <form class="form">
                                                    <label>
                                                        <input type="radio" class="options" name="optionsRadios" id="optionsRadios1" value="option1" <?= $a->iscome == 1 ? 'checked' : '' ?> data-bookid="<?= $a->reserve_id ?>" data-userid="<?= $a->user_id ?>" data-ch="1"
                                                               data-st="<?=$a->stadium_id?>">
                                                        Present 
                                                    </label>


                                                    <label>
                                                        <input type="radio" class="options" name="optionsRadios" id="optionsRadios2" value="option2" <?= $a->iscome == 2 ? 'checked' : '' ?> data-bookid="<?= $a->reserve_id ?>" data-ch="2" data-userid="<?= $a->user_id ?>" 
                                                               data-st="<?=$a->stadium_id?>">
                                                        Absent
                                                    </label>
                                                </form>
                                                
<button type="button" class="btn btn-warning btn-sm" value="<?=$a->reserve_id?>" onclick="del(this,false)">Cancel Booking</button>
                                            </td>

                                    <?php } else {?>
                                             <span class="glyphicon glyphicon-remove label label-danger">This booking Cancel</span>
                                    <?php }?> 
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="notija" style="display:none">
    <!-- 
    Later on, you can choose which template to use by referring to the 
    ID assigned to each template.  Alternatively, you could refer
    to each template by index, so in this example, "basic-tempate" is
    index 0 and "advanced-template" is index 1.
    -->
    <div id="basic-template">
        <a class="ui-notify-cross ui-notify-close " href="#">x</a>
        <h1>#{title}</h1>
        <p>#{text}</p>
    </div>

    <div id="advanced-template">
        <!-- ... you get the idea ... -->
    </div>
</div>

<?php include 'template/modal.php'; ?>

<div style="clear:both;"></div>
<footer>
    <div class="container">
        <div class="row">
            <div class="divider"></div>

            <div class="col-md-4">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Stadiums</a></li>
                    <li><a href="">Players</a></li>
                    <li><a href="">Vanues</a></li>
                </ul>
            </div>
            <div class="col-md-4"><h3>About Us</h3>
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum
            </div>
            <div class="col-md-4">
                <h3>Contact us</h3>
                <ul>
                    <li>address :</li>
                    <li>district:</li>
                    <li>subdistrict :</li>
                    <li>province :</li>
                </ul>
            </div>
        </div>
        <div class="row copyright">Copyright 2014 - Badminton</div>
    </div>
</footer>
<!-- set the container hidden to avoid a flash of unstyled content
when the page first loads -->
<div id="notija" style="display:none">
    <!-- 
    Later on, you can choose which template to use by referring to the 
    ID assigned to each template.  Alternatively, you could refer
    to each template by index, so in this example, "basic-tempate" is
    index 0 and "advanced-template" is index 1.
    -->
    <div id="basic-template">
        <a class="ui-notify-cross ui-notify-close " href="#">x</a>
        <h1>#{title}</h1>
        <p>#{text}</p>
    </div>

    <div id="advanced-template">
        <!-- ... you get the idea ... -->
    </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.js" type="text/javascript"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?= base_url() ?>asset/js/bootstrap.min.js"></script>
<script src="<?= base_url() ?>asset/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" language="javascript" src="<?php echo base_url() . 'module/DataTables/js/jquery.dataTables.js'; ?>"></script>
<script src="<?= base_url() ?>asset/js/jquery.notify.js" type="text/javascript"></script>

<script>
    myDate = new Date();
    var currentdate = (myDate.getMonth() + 1) + '/' + myDate.getDate() + '/' +
            myDate.getFullYear();
    var dy;
    var htmlshow = '';
    iscome();
    $(document).ready(function (e) {

        $('#datepicker').datepicker({todayBtn: "linked",
            todayHighlight: true
        });
        dy = datetoDB(currentdate);



        $('#datepicker').datepicker()
                .on('changeDate', function (e) {
                    var dateselect = $('#datepicker').datepicker('getDate').toLocaleDateString();
                    dy = datetoDB(dateselect);
                    showbook();
                   
                });


        if ($('#news-table tbody tr').length >= 1) {
            mytable = $('#news-table').dataTable({
                "bPaginate": true,
                "bLengthChange": false,
                "bFilter": true,
                "bSort": true,
                "bInfo": true,
                "bAutoWidth": true,
                'iDisplayLength': 10
            });

        }
        
        
    });
    function datetoDB(datesendnaja) {
        var date_elements = datesendnaja.split('/');
        date_inverse = date_elements[2] + '-' + date_elements[0] + '-' + date_elements[1];
        return date_inverse;
    }
    function showbook() {
        
//         console.log(dy);
        $.ajax({
            type: "POST",
            url: "http://cbt.backeyefinder.in.th/booking/getbookday/",
            data: {d: dy}
        }).done(function (msg) {

//                    console.log(msg);  
            var obj = JSON.parse(msg);
            console.log(obj);
            htmlshow = ' ';
            if (obj.length > 0) {
                $(obj).each(function (k, v) {
                    table(v);
                });
            } else
                $('#runtime').html('No booking');

        });
    }
    function daysBetween(first, second) {

        // Copy date parts of the timestamps, discarding the time parts.
        var one = new Date(first.getFullYear(), first.getMonth(), first.getDate());
        var two = new Date(second.getFullYear(), second.getMonth(), second.getDate());

        // Do the math.
        var millisecondsPerDay = 1000 * 60 * 60 * 24;
        var millisBetween = two.getTime() - one.getTime();
        var days = millisBetween / millisecondsPerDay;

        // Round down.
        return Math.floor(days);
    }
    function iscome(){
        $(document).on('change', '.form .options', function() {
               
        
//        alert($(this).data("bookid"));
        re_id = $(this).data("bookid");
        checkselect = $(this).data("ch");
        uId = $(this).data("userid");
        stadium = $(this).data("st");
//        alert(stadium);
        $.ajax({
            type: "POST",
            url: "http://cbt.backeyefinder.in.th/booking/updatecome/",
            data: {re_id: re_id, ch: checkselect, uid: uId,stid : stadium}
        }).done(function (msg) {

            console.log(msg);
            var obj = JSON.parse(msg);
            console.log(obj);
            $("#notija").notify({
                speed: 500,
            });

            $("#notija").notify("create", {
                title: 'Complete',
                text: obj['0'].fname + ' is ' + (checkselect == 1 ? 'Present' : 'Absent')
            });
//                                    if(obj['0'].status==0){
//                                        htmlstatus= '<span class="label label-success">Active</span>';
//                                    }else if(obj['0'].status==1){
//                                        htmlstatus= '<span class="label label-warning">Warning</span>';
//                                    }else{
//                                        htmlstatus = '<span class="label label-danger">Baned</span>';
//                                    }
//                                    $('.st').html(htmlstatus);
        });
        return false;
    });
    }
    function table(rs) {

        htmlshow = htmlshow + '<tr>' +
                '   <td>' + rs.reserve_id + '</td>' +
                '   <td><a href="http://cbt.backeyefinder.in.th/stadium/profile/' + rs.stadium_id + '">' + rs.stadium_name + '</a></td>' +
                '  <td>' + rs.court_name + '</td>' +
                '   <td>' + rs.start_time.substr(0, 10) + '</td>' +
                '  <td>' + rs.start_time.substr(10, 15) + '-' + rs.end_time.substr(10, 15) + '</td>' +
                '  <td><a href="http://cbt.backeyefinder.in.th/users/profile/' + rs.user_id + '">' + rs.fname + '</a></td>' +
                ' <td>' + rs.tel + '</td>' +
                '  <td>' + rs.sumprice + '</td><td>';
          if (rs.status == 98) {
            
            htmlshow = htmlshow + '  <span class="label label-warning">Warning</span>';
        } else if(rs.status== 99){
            htmlshow = htmlshow + '<span class="label label-danger">Blacklist</span>';
        }else htmlshow = htmlshow + '  <span class="label label-success">Active</span>';
        htmlshow = htmlshow + ' </td><td>';
        
        var t = rs.start_time.split(/[- :]/);
        var d = new Date(t[0], t[1] - 1, t[2], t[3], t[4], t[5]);
        if(daysBetween(myDate, d)>0 && rs.iscome<100){ //future 
           htmlshow = htmlshow +'<button type="button" class="btn btn-warning btn-sm" value="'+rs.reserve_id+'" onclick="del(this,false)">Cancel Booking</button>';
           
        }if(daysBetween(myDate, d)<0 || daysBetween(myDate, d)==0){
            htmlshow = htmlshow +'<form class="form">'+
                                                   ' <label>'+
                                                      '  <input type="radio" class="options" name="optionsRadios" id="optionsRadios1" '+
                                                         '   value="option1" '+(rs.iscome==1 ? 'checked' : ' ')+''+
                                                         '   data-bookid="'+ rs.reserve_id +'" data-userid="'+ rs.user_id +'" data-ch="1">'+
                                                      '  Present'+
                                                   ' </label>'+

                                                  '  <label>'+
                                                       ' <input type="radio" class="options" name="optionsRadios" id="optionsRadios2" '+
                                                      '  value="option2" '+(rs.iscome==2 ? 'checked' : ' ')+ ''+
                                                        '    data-bookid="'+ rs.reserve_id +'" data-ch="2" data-userid="'+ rs.user_id +'">'+
                                                      '  Absent'+
                                                   ' </label>'+
                                                '</form>';
        }if(rs.iscome==100){
               htmlshow = htmlshow +'<span class="glyphicon glyphicon-remove label label-danger"> This booking is Cancel</span>';
           
        }



        htmlshow = htmlshow + ' </td></tr>';



//        console.log(htmlshow);
        $('#runtime').html(htmlshow);
        
    }
    function del(t) {
   var reservid = $(t).attr('value');
       c =  confirm("Are you sure to Cancel"+ $(t).attr('value'));
       if(c)
    window.location.href= 'http://cbt.backeyefinder.in.th/booking/cancelbook/'+reservid+'';
    }


</script>







<script>
    $('.btn-toggle').click(function () {
        $(this).find('.btn').toggleClass('active');

        if ($(this).find('.btn-primary').size() > 0) {
            $(this).find('.btn').toggleClass('btn-primary');
//        alert($(this).find('.pre').data("bookid"));
        }
        if ($(this).find('.btn-danger').size() > 0) {
            $(this).find('.btn').toggleClass('btn-danger');
        }
        if ($(this).find('.btn-success').size() > 0) {
            $(this).find('.btn').toggleClass('btn-success');
        }
        if ($(this).find('.btn-info').size() > 0) {
            $(this).find('.btn').toggleClass('btn-info');
        }

        $(this).find('.btn').toggleClass('btn-default');


    });

    


//$(document).on("click", ".pre", function () {
//    alert($(this).data("bookid"));
//});

</script>
</body>
</html>

