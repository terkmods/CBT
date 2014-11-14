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
    <h4> <a href="#"></a> HistoryBooking  <span id="flashmsg"><font style="color: green"></font></span></h4> 
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">Account Settings</div>
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
                                                <div class="col-md-3">
                                                    <img class="circle  img-responsive" src="<?= base_url() ?>/asset/images/bad.png" alt="icon">
                                                    <small>ssssssss</small>
                                                </div>
                                                <div class="col-md-3">
                                                    <img class="circle  img-responsive" src="<?= base_url() ?>/asset/images/bad.png" alt="icon">
                                                </div><div class="col-md-3">
                                                    <img class="circle  img-responsive" src="<?= base_url() ?>/asset/images/bad.png" alt="icon">
                                                </div>

                                                <!--                                            <div class="list-group-item">
                                                                                                <div class="row-action-primary">
                                                                                                    <img class="circle" src="<?= base_url() ?>/asset/images/<?= $allbooking['0']->stadium_path != null ? 'stadiumpic/' . $allbooking['0']->stadium_path : 'bad.png' ?>" alt="icon">
                                                                                                </div>
                                                                                                <div class="row-content text-left">
                                                                                                    <div class="least-content">คอร์ด : <?= $allbooking['0']->court_name ?></div>
                                                                                                    <h4 class="list-group-item-heading"><?= $allbooking['0']->stadium_name ?></h4>
                                                                                                    <p class="list-group-item-text">วัน : <small><?= substr($allbooking['0']->start_time, 0, 10) ?></small> </p>
                                                                                                       <p class="list-group-item-text">เวลา  <?= substr($allbooking['0']->start_time, 10, 11) ?>-<?= substr($allbooking['0']->end_time, 10, 11) ?></p>
                                                +                                                        <p class="list-group-item-text">ผู้จอง <?= $allbooking['0']->fname ?> <?= $allbooking['0']->lname ?></p>
                                                                                                        <p class="list-group-item-text">โทร : <?= $allbooking['0']->tel != null ? $allbooking['0']->tel : '-' ?></p>
                                                                                                </div>
                                                                                            </div>-->

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="row">
                            <table class="table table-bordered  table-condensedy" id="news-table">
                                <thead><tr><th>ReserveID</th><th>Stadium</th><th>Court name</th><th>Date</th><th>Time reserve</th><th>Reserve by</th><th>Tel number</th><th>Total price</th><th>Status</th></tr></thead>
                                <tbody id="runtime">
                                    <?php foreach ($allhis as $a) { ?>
                                        <tr>
                                            <td><?= $a->reserve_id ?></td>
                                            <td><a href="http://cbt.backeyefinder.in.th/stadium/profile/<?= $a->stadium_id ?>"><?= $a->stadium_name ?></a></td>
                                            <td><?= $a->court_name ?></td>
                                            <td><?= substr("$a->start_time", 0, 10) ?></td>
                                            <td><?= substr("$a->start_time", 10, 15) ?>-<?= substr("$a->end_time", 10, 15) ?></td>
                                            <td><a href="http://cbt.backeyefinder.in.th/users/profile/<?= $a->user_id ?>"><?= $a->fname ?></a></td>
                                            <td><?= $a->tel ?></td>
                                            <td><?= $a->sumprice ?></td>
                                            <td><?= $a->status ?></td>
                                            <td>

  <div class="btn-group btn-toggle"> 
      <button class="btn btn-xs btn-default" >Present</button>
    <button class="btn btn-xs btn-primary active">Absent</button>
  </div>

                                            </td>


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
    $(document).ready(function (e) {

        $('#datepicker').datepicker({todayBtn: "linked",
            todayHighlight: true
        });



        $('#datepicker').datepicker()
                .on('changeDate', function (e) {
                    var dateselect = $('#datepicker').datepicker('getDate').toLocaleDateString();
                    alert(datetoDB(dateselect));
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

</script>




<script>
    $('#myTab a').click(function (e) {
        e.preventDefault();
        $(this).tab('show');
    });</script>
<script>
    $(document).ready(function () {
        $("#btn1").click(function () {
            $("#add").append('<input class="form-control" name="facility[]"  type="text" style="margin-top : 10px;"> ');
        });
        $("#btn2").click(function () {
            $("#add").append('<div id="delja"><div class="col-lg-10 col-md-offset-2" ><div class="col-md-6" style="margin-top:10px ;padding: 0; "> <select class="form-control" name="typedate[]">' +
                    '<option value="ทุกวัน">ทุกวัน</option>' +
                    '         <option value="เสาร์-อาทิตย์">เสาร์-อาทิตย์</option>' +
                    '        <option value="จันทร์-ศุกร์">จันทร์-ศุกร์</option>' +
                    '</select> </div>' +
                    '<div class="col-md-3" style="margin-top:10px ;padding:  0; ">' +
                    '   <input type="number" class="form-control" id="inputPassword1" placeholder="ราคา/ชม. " name="price[]"></div>' +
                    '      <div class="col-md-1" style="margin-top:15px ;">' +
                    '    <button type="button" class="btn btn-danger btn-sm" id="btn3">' +
                    '   <span class="glyphicon glyphicon-remove-circle"></span>  ' +
                    '                  </button> ' +
                    '</div>' +
                    '</div></div>');
        });
        $(document).on('click', '#btn3', function () { // ตรวจสอบตลอดเวลา เป็น dynamic 
            $(this).parent().parent().remove();
        });
        $("#btn4").click(function () {
            $("#time").append($('#showtime').html()); // แสดง ทั้ง div
        });
        $(document).on('click', '#btn5', function () { // ตรวจสอบตลอดเวลา เป็น dynamic 
            $(this).next().remove();
        });
    });</script>


<script>
    function del() {
        alert("Are you sure to Delete");
    }
</script>
<script>
    $('.btn-toggle').click(function() {
    $(this).find('.btn').toggleClass('active');  
    
    if ($(this).find('.btn-primary').size()>0) {
    	$(this).find('.btn').toggleClass('btn-primary');
    }
    if ($(this).find('.btn-danger').size()>0) {
    	$(this).find('.btn').toggleClass('btn-danger');
    }
    if ($(this).find('.btn-success').size()>0) {
    	$(this).find('.btn').toggleClass('btn-success');
    }
    if ($(this).find('.btn-info').size()>0) {
    	$(this).find('.btn').toggleClass('btn-info');
    }
    
    $(this).find('.btn').toggleClass('btn-default');
       alert($(this["options"]).val()); 
});

$('form').submit(function(){
	alert($(this["options"]).val());
    return false;
});
    </script>
</body>
</html>

