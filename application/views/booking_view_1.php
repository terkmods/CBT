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

    <div class="well well-sm" style="text-align:center">
        <h4>Booking System</h4>
</div>
    <!--    ส่วนจอง-->
    <div class="container" >
      
        <div class="row">
            <div class="control-group col-md-3 col-md-offset-4">

                <div class="controls">
                    <div class="input-group">
                        <label for="date-pik" class="input-group-addon btn form-control">
                            <span class="glyphicon glyphicon-calendar"></span> เลือกวัน
                        </label>
                        <input  type="text" id="date-pik" class="date-picker form-control" />

                    </div>
                </div>
            </div>
        </div><!--
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
        </div>-->
        <div class="row">
            <div class="today col-md-5 col-md-offset-4 ">
                <h4 style="font-size: 15px">วัน : <span id="dayOfWeek" ></span></h4> <h5> เวลาให้บริการ : <span id="court"></span></h5>
            </div>
        </div>
<!--        <div class="col-md-3">
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
        <div class="col-md-9" >
            <div class="tab-pane" id="mycourt">


                <hr>


                <div id="evening">
                    <table class="table table-bordered  table-condensedy" id="tableEvening">
                        <thead id="runhead"><tr></tr></thead>
                        <tbody id="runtime2">
                            <tr>
                                <td style="width: 110px; text-align: center">No select</td>
                                <td class="span6"></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
            
        </div>-->
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-3">
<!--            <div class="row text-center">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><span class="glyphicon glyphicon-list-alt"> </span>  Recommended Stadium</h3>
                            </div>
                            <div class="panel-body">

                                <div class="thumbnail">
                                    <img src="<?php echo base_url() ?>asset/images/stadiumpic/p1.jpg" alt="">
                                    <div class="caption">
                                        <h3>Bangkok Badminton</h3>
                                        <p>ที่อยู่ : &nbsp;33/45 ถนนบางบอน5 ซอย40 กรุงเทพฯ </p>
                                        <p>ราคา: &nbsp;120/ชม.</p>
                                        <p>เบอโทร: &nbsp;02-8997368</p>
                                        <p>
                                            <a href="<? echo base_url() ?>booking/reserve/30" class="btn btn-primary">Book Now!</a> <a href="<? echo base_url() ?>stadium/profile/30" class="btn btn-default">More Info</a>
                                        </p>
                                    </div>
                                </div>




                                

                            </div>
                        </div>
                    </div>-->
            <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><span class="glyphicon glyphicon-list-alt"> </span>  Welcome</h3>
                        </div>
                        <div class="panel-body">
                            <ul class="nav nav-pills nav-stacked">
                                <li> <img src="<?= base_url() ?>/asset/images/<?= $data['0']->stadium_path != null ? 'stadiumpic/' . $data['0']->stadium_path : 'bad.png' ?>" width="200" class="img-thumbnail"></li>

                                <li>สนาม : <?= $data['0']->stadium_name ?></li>
                                <li>โทรศัพท์: <?= $data['0']->tel !=null ? $data['0']->tel :'-' ?></li>

                            </ul>
                        </div>
                    </div>
        </div>
        <div class="col-md-9" style="overflow-y: scroll; height: 500" id="mytablebook">
            <table class="table table-striped table-hover table-bordered ">
    <thead>
        <tr>
            <th>#</th>
            <?php                        foreach ($court as $c){ ?>
            <th id="s<?=$c['court_id']?>">คอร์ด <?=$c['court_name']?></th>
            <?php }?>
        </tr>
    </thead>
    <tbody id="newshow">
        <tr>
            <td>1</td>
            <td>Column content</td>
            <td>Column content</td>
            <td>Column content</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Column content</td>
            <td>Column content</td>
            <td>Column content</td>
        </tr>
        
    </tbody>
</table>
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
                    <span>เวลา : </span><br> เริ่ม <input type="time" id="time_start" name="start_time" class="form-control" step="1800" disabled="">
                    <input type="hidden" id="time_start1" name="start_time">
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
                    <li>ที่อยู่ :</li>
                    <li>เขต:</li>
                    <li>แขวง :</li>
                    <li>จังหวัด :</li>
                </ul>
            </div>
        </div>
        <div class="row copyright">Copyright 2014 - Badminton</div>
    </div>
    <input type="hidden" id="countcort" value="<?=count($court)?>">
</footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?= base_url() ?>asset/js/bootstrap.min.js"></script>
<script src="<?= base_url() ?>asset/js/bootstrap-datepicker.js"></script>
<script src="<?= base_url() ?>asset/js/bootstrap-switch.js"></script>
<script src="<?= base_url() ?>asset/js/booking_1.js"></script>

<script type="text/javascript">
    /* pagination */
    $.fn.pageMe = function (opts) {
        var $this = this,
                defaults = {
                    perPage: 7,
                    showPrevNext: false,
                    numbersPerPage: 1,
                    hidePageNumbers: false
                },
        settings = $.extend(defaults, opts);

        var listElement = $this;
        var perPage = settings.perPage;
        var children = listElement.children();
        var pager = $('.pagination');

        if (typeof settings.childSelector != "undefined") {
            children = listElement.find(settings.childSelector);
        }

        if (typeof settings.pagerSelector != "undefined") {
            pager = $(settings.pagerSelector);
        }

        var numItems = children.size();
        var numPages = Math.ceil(numItems / perPage);

        pager.data("curr", 0);

        if (settings.showPrevNext) {
            $('<li><a href="#" class="prev_link" style="font-size: 10px;padding: 5px 5px 5px 5px;">«</a></li>').appendTo(pager);
        }

        var curr = 0;
        while (numPages > curr && (settings.hidePageNumbers == false)) {
            $('<li><a href="#" class="page_link" style="font-size: 10px;padding: 5px 5px 5px 5px;">' + (curr + 1) + '</a></li>').appendTo(pager);
            curr++;
        }

        if (settings.numbersPerPage > 1) {
            $('.page_link').hide();
            $('.page_link').slice(pager.data("curr"), settings.numbersPerPage).show();
        }

        if (settings.showPrevNext) {
            $('<li><a href="#" class="next_link" style="font-size: 10px;padding: 5px 5px 5px 5px;">»</a></li>').appendTo(pager);
        }

        pager.find('.page_link:first').addClass('active');
        if (numPages <= 1) {
            pager.find('.next_link').hide();
        }
        pager.children().eq(1).addClass("active");

        children.hide();
        children.slice(0, perPage).show();

        pager.find('li .page_link').click(function () {
            var clickedPage = $(this).html().valueOf() - 1;
            goTo(clickedPage, perPage);
            return false;
        });
        pager.find('li .prev_link').click(function () {
            previous();
            return false;
        });
        pager.find('li .next_link').click(function () {
            next();
            return false;
        });

        function previous() {
            var goToPage = parseInt(pager.data("curr")) - 1;
            goTo(goToPage);
        }

        function next() {
            goToPage = parseInt(pager.data("curr")) + 1;
            goTo(goToPage);
        }

        function goTo(page) {
            var startAt = page * perPage,
                    endOn = startAt + perPage;

            children.css('display', 'none').slice(startAt, endOn).show();

            if (page >= 1) {
                pager.find('.prev_link').show();
            }
            else {
                pager.find('.prev_link').hide();
            }

            if (page < (numPages - 1)) {
                pager.find('.next_link').show();
            }
            else {
                pager.find('.next_link').hide();
            }

            pager.data("curr", page);

            if (settings.numbersPerPage > 1) {
                $('.page_link').hide();
                $('.page_link').slice(page, settings.numbersPerPage + page).show();
            }

            pager.children().removeClass("active");
            pager.children().eq(page + 1).addClass("active");
        }
    };

    $('#items').pageMe({pagerSelector: '#myPager', childSelector: 'tr', showPrevNext: true, hidePageNumbers: false, perPage: 3});
    /****/
</script>
<script>
    $('#myTab a').click(function (e) {
        e.preventDefault();
        $(this).tab('show');
    });

</script>
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
    });
</script>
<script>
    $(document).ready(function () {
        var max_fields = 20; //maximum input boxes allowed
        var wrapper = $(".input_fields_wrap"); //Fields wrapper
        var add_button = $(".add_field_button"); //Add button ID

        var x = 1; //initlal text box count
        $(add_button).click(function (e) { //on add input button click
            e.preventDefault();
            if (x < max_fields) { //max input box allowed
                x++; //text box increment
                $(wrapper).append('<div class="delja">' + $('#showtime').html() + '<a   class="remove_field">Remove</a></div>' + '</div>'); //add input box
            }
        });

        $(wrapper).on("click", ".remove_field", function (e) { //user click on remove text
            e.preventDefault();
            $(this).parent(".delja").remove();
            x--;// อ้างอิงถึง class delja2
        })
    });
</script>

<script>
    function del() {
        alert("Are you sure to Delete");
    }
</script>
</body>
</html>
