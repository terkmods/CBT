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
    .textbooking{
        text-align: center;
    }
    .fixed-table .header-fixed {
  position: absolute;
  top: 0px;
  z-index: 1020; /* 10 less than .navbar-fixed to prevent any overlap */
  border-bottom: 2px solid #d5d5d5;
  -webkit-border-radius: 0;
     -moz-border-radius: 0;
          border-radius: 0;
}
.fixed-table{
  display:block;
  position:relative;
}
.fixed-table th{
  padding: 8px;
  line-height: 18px;
  text-align: left;
}
.fixed-table .table-content{
  display:block;
  position: relative;
  height: 500px; /*FIX THE HEIGHT YOU NEED*/
  overflow-y: auto;
}
.fixed-table .header-copy{
  position:absolute;
  top:0;
  left:0;
}
.fixed-table .header-copy th{
  background-color:#f5f5f5}


</style>
<div class="container">

    <div class="well well-sm" style="text-align:center">
        <h4>Booking System</h4>
    </div>
    <!--    ส่วนจอง-->
    <div class="container" >

        <div class="row">
            <div class="well control-group col-md-3 col-md-offset-4">

                <div class="controls">
                    <div class="input-group">
                        <label for="date-pik" class="input-group-addon btn ">
                            <span class="glyphicon glyphicon-calendar"></span> เลือกวัน
                        </label>
                        <input  type="text" id='datepicker' class=" form-control" />
                        <div ></div>
                        


                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="today col-md-5 col-md-offset-4 ">
                <h4 style="font-size: 15px">วัน : <span id="dayOfWeek" ></span></h4> <h5> เวลาให้บริการ : <span id="court"></span></h5>
            </div>
        </div>
     
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
                        <li>จำนวนคอร์ด :  <?= $total->courtnum ?> court</li>
                        <li>โทรศัพท์: <?= $data['0']->tel != null ? $data['0']->tel : '-' ?></li>

                    </ul>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="glyphicon glyphicon-list-alt"> </span>  Rule</h3>
                </div>
                <div class="panel-body">
                    <ul class="nav nav-pills nav-stacked">
                        <li><?= $data['0']->rule ?></li>

                    </ul>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="glyphicon glyphicon-list-alt"> </span>  Court Price</h3>
                </div>
                <div class="panel-body" style="overflow-x: scroll">
                <table class=" table table-striped table-hover ">
                    <thead style="text-align: center">

                        <tr>
                            <th style="text-align: center"></th>
<th style="text-align: center">Mon</th>
<th style="text-align: center">Tue</th>
<th style="text-align: center">Wed</th>
<th style="text-align: center">Thu</th>
<th style="text-align: center">Fri</th>
<th style="text-align: center">Sat</th>
<th style="text-align: center">Sun</th>

<!--                            <th style="text-align: center"></th>-->

                      
                    </thead>
                    <tbody>
                                                    <?php foreach ($court as $c) { ?>
                        <tr>
                                <td style="text-align: center">คอร์ด <?= $c['court_name'] ?><small><?= $c['type'] ?></small></td>
                                       <?php
                        $i = 0;
                        $k = 0;
                        $html = null;
                        
                        for ($i; $i< 7 ;$i++) {
                           
                            $html = $html . ' <td> ' . $courtprice[$i]['price'] . ' Bath</td>';
                        } 
                        $html = $html . '</tr >';?>
                                <?= $html ?> 
                                
                                
                                    
                        </tr>
                                    <?php } ?>
                      
                        
<!--                        <td><a href=" <?php echo base_url() ?>stadium/delcourt/<?= $ct['court_id'] ?>/<?= $ct['stadium_id'] ?> " class="btn btn-danger btn-sm ">Cancle</a></td>-->
                     
                    </tbody>
                </table>
                </div>
            </div>
        </div>
        <div class="col-md-9" style="overflow-y: scroll; height: 500" id="mytablebook">
            <div class="row fixed-table">
                <div class="table-content">
                       <table class="table tableborder table-fixed-header table-condensed" id="mytable">
                        <thead class="header">
                            <tr>
                                <th style="text-align:center;">Time</th>
                                <?php foreach ($court as $c) { ?>
                                <th id="s<?= $c['court_id'] ?>" style="text-align:center;">คอร์ด <?= $c['court_name'] ?></th>
                                <?php } ?>
                            </tr>
                        </thead>
                        <tbody id="newshow">
                       

                        </tbody>
                    </table>
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
<!--bookingnaja-->
<!--Modalll jaa up cover na--> 

<div class="modal fade" id="booking" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="<?= base_url() ?>booking/doBooking/" method="post" class="form-horizontal" > 
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <!--                    <h4 class="modal-title">Confrim - Booking</h4>-->
                </div>
                <div class="modal-body">
                    <fieldset>
                        <legend>Booking Detail</legend>
                        <div class="form-group">
                            <label for="inputEmail" class="col-lg-2 control-label">Name</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="inputEmail" placeholder="Name" name="bookingname" value="<?= $user['0']->fname ?> <?= $user['0']->lname ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail" class="col-lg-2 control-label">Tel</label>
                            <div class="col-lg-10">
                                <input type="tel" class="form-control" name="telephone" placeholder="tel" value="<?= $user['0']->phone ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword" class="col-lg-2 control-label">Day</label>
                            <div class="col-lg-10">
                                <span id="datenaja" class="form-control" >&nbsp;&nbsp; </span>

                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword" class="col-lg-2 control-label">Start</label>
                            <div class="col-lg-10">
                                <input type="time" id="time_start" name="start_time" class="form-control" step="1800" disabled="">

                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputPassword" class="col-lg-2 control-label">End</label>
                            <div class="col-lg-10">
                                <input type="time" id="time_end" class="form-control" name="end_time" step="1800" onchange="totalpricechange()"> 

                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword" class="col-lg-2 control-label">Stadium</label>
                            <div class="col-lg-10">
                                <input type="text" id="time_end" class="form-control" name="stadium" disabled="" value="<?= $data['0']->stadium_name ?>"> 

                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword" class="col-lg-2 control-label">Court</label>
                            <div class="col-lg-10">
                                <span class="form-control" id="courtja" >&nbsp;&nbsp; </span>

                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword" class="col-lg-2 control-label">Price</label>
                            <div class="col-lg-10">
                                <span class="form-control" id="priceja" >&nbsp;&nbsp; </span>

                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword" class="col-lg-2 control-label">Total</label>
                            <div class="col-lg-10">
                                <span class="form-control" id="sumprice" >&nbsp;&nbsp; </span>

                            </div>
                        </div>


                    </fieldset>


                    <input type="hidden" id="time_start1" name="start_time" class="form-control">


                    <input type="hidden" name="userid" value="<?= $user['0']->user_id ?>">
                    <input type="hidden" id='st_id_select' name="stadiumid" value="<?= $data['0']->stadium_id ?>">
        <!--                    <input type="hidden" id="courtid" value="<?= $user['0']->court_id ?>">-->
                    <input type="hidden" id="tr_id">
                    <input type="hidden" id="courtid" name="courtid" >
                    <input type="hidden" id="error_count" value="0">
                    <input type="hidden" id="dateid" name="dateid">
                    <input type="hidden" id="sumpricesend" name="allprice">
                </div>
                <div class="modal-footer">
                    
                    <div id='buttonbooking'><button type="submit"  value="Book Now" class="btn btn-primary" >Book Now</button><button type="button" class="btn btn-danger" data-dismiss="modal">Close</button></div>
                </div>
            </div><!-- /.modal-content -->
        </form>
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<input type="hidden" id="countcort" value="<?= count($court) ?>">
<?php include 'template/modal.php'; ?>
<?php include 'template/footer.php'; ?>


    
<script src="<?= base_url() ?>asset/js/booking_1.js"></script>
<script src="<?= base_url() ?>asset/js/table-fixed-header.js"></script>
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
<script language="javascript" type="text/javascript" >
    $(document).ready(function(){
      // add 30 more rows to the table
      var row = $('table#mytable > tbody > tr:first');
      for (i=0; i<30; i++) {
        $('table#mytable > tbody').append(row.clone());
      }

      // make the header fixed on scroll
      $('.table-fixed-header').fixedHeader();
    });
  </script>
</body>
</html>
