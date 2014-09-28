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


                    <?php $type = $this->uri->segment(1) ?>
                    <?php $type2 = $this->uri->segment(2) ?>    
                    <div class="col-md-3">
                        <ul class="nav nav-pills nav-stacked">
                            <?php if ($this->session->userdata('role') == "owner") { ?>
                                <li <?php if ($type == "users") { ?><?=
                                    "class = 'active'";
                                }
                                ?> ><a href="<?php echo base_url() ?>users/edituser/<?php echo $this->session->userdata('id'); ?>">Basic Setting</a></li>
                                <li  ><a href="<?= base_url() ?>stadium">Manage stadium </a></li>
                                <li  class = 'active'
                                     ><a href="<?= base_url() ?>stadium/historyBooking">History Booking stadium </a></li>
                                 <?php } ?>
                        </ul>                            
                    </div>
                    <div class="col-md-9">
                        <div class="row">
                            <div class="control-group">

                                <div class="controls">
                                    <div class="input-group">
                                        <label for="date-pik" class="input-group-addon btn">
                                            Choose Stadium
                                        </label>
                                        <select class="form-control" id="stadiumselect" onchange="stadiumchange()">
                                            <option value="default">Pick Stadium </option> 
                                            <?php foreach ($stadium as $ct) { ?>        
                                                <option value="<?= $ct->stadium_name ?>,<?= $ct->stadium_id ?>" id="stadiumtoption"><?= $ct->stadium_name ?></option>
                                            <?php } ?>
                                        </select>

                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="row">
                            <table class="table table-bordered  table-condensedy" id="tableMorning">
                                <thead><tr><th>Court name</th><th>Date</th><th>Time reserve</th><th>Reserve by</th><th>Tel number</th><th>Total price</th><th>Status</th></tr></thead>
                                <tbody id="runtime">
                                    <tr>
                                        
                                    </tr>
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
<script src="<?= base_url() ?>asset/js/bootstrap-switch.js"></script>
<script src="<?= base_url() ?>asset/js/jquery.notify.js" type="text/javascript"></script>

<script type="text/javascript">
var stadium_id = null;
                                                  
                                                        function stadiumchange() {
                                                            
                                                            

                                                            var x = document.getElementById("stadiumselect").selectedIndex;
                                                            stadium = document.getElementsByTagName("option")[x].value;
                                                            stadium = stadium.split(',');
                                                            console.log(stadium);
                                                            //        console.log(court[0]);
                                                            stadium_id = stadium[1];
                                                            console.log(stadium[1]);
                                                            //document.getElementById("court").innerHTML = court[0];
                                                            var fullpart = "http://cbt.backeyefinder.in.th/booking/showstadiumbook";
                                                            $.ajax({
                                                                type: "POST",
                                                                url: fullpart,
                                                                data: {stadiumsend: stadium[1]}
                                                            }).done(function (msg) {
                                                                var obj = JSON.parse(msg);
                                                                
                                                                console.log(obj);
                                                                console.log(obj[0].court_id);
                                                                console.log(obj.length);
                                                                show = ' ';
                                                                
                                                                for (i = 0; i < obj.length; i++) {
                                                                  var w = [];
                                                                    if(obj[i].STATUS== 'warning'){
                                                                        w[i] = '<div class="btn-group ">' +
                                                                            ' <button  type="button" class="btn btn-warning dropdown-toggle btn-sm" data-toggle="dropdown">' +
                                                                            '   Warning <span class="caret"></span>' +
                                                                            ' </button>' +
                                                                            '  <ul class="dropdown-menu" role="menu" id="eventselect">' +
                                                                            '   <li ><a  class="btn " role="button" onclick="okja(' + obj[i].user_id + ',this)">Active</a></li>' +
                                                                            '  <li ><a  class="btn " role="button" onclick="blacklist(' + obj[i].user_id + ',this,'+stadium_id+')">BLACK LIST</a></li>' +
                                                                            '   <!--<li class="divider"></li>-->' +
                                                                            '</ul>' +
                                                                            ' </div></td>' ;
                                                                    } if(obj[i].STATUS== 'ok'){
                                                                        w[i] = '<div class="btn-group ">' +
                                                                            ' <button  type="button" class="btn btn-success dropdown-toggle btn-sm" data-toggle="dropdown">' +
                                                                            '   Active <span class="caret"></span>' +
                                                                            ' </button>' +
                                                                            '  <ul class="dropdown-menu" role="menu" id="eventselect">' +
                                                                            '   <li ><a  class="btn " role="button" onclick="warning(' + obj[i].user_id+ ',this)">Warning</a></li>' +
                                                                            '  <li ><a  class="btn " role="button" onclick="blacklist(' + obj[i].user_id + ',this,'+stadium_id+')">BLACK LIST</a></li>' +
                                                                            '   <!--<li class="divider"></li>-->' +
                                                                            '</ul>' +
                                                                            ' </div></td>' ;
                                                                    }if(obj[i].STATUS== 'blacklist'){
                                                                        w[i] = '<div class="btn-group ">' +
                                                                            ' <button  type="button" class="btn btn-danger dropdown-toggle btn-sm" data-toggle="dropdown">' +
                                                                            '   Danger <span class="caret"></span>' +
                                                                            ' </button>' +
                                                                            '  <ul class="dropdown-menu" role="menu" id="eventselect">' +
                                                                            '   <li ><a  class="btn " role="button" onclick="okja(' + obj[i].user_id + ',this)">Active</a></li>' +
                                                                            '  <li ><a  class="btn " role="button" onclick="warning(' + obj[i].user_id + ',this)">Warning</a></li>' +
                                                                            '   <!--<li class="divider"></li>-->' +
                                                                            '</ul>' +
                                                                            ' </div>' ;
                                                                    }
                                                                    show = show + '  <tr>' +
                                                                            ' <td>' + obj[i].court_name + '</td>' +
                                                                            '<td>' + obj[i].start_time.substr(0, 10) + '</td>' +
                                                                            '<td>' + obj[i].START + '-' + obj[i].END + '</td>' +
                                                                            '<td>' + obj[i].fname + ' ' + obj[i].lname + '</td>' +
                                                                            '<td>' + obj[i].phone + '</td>  ' +
                                                                            '<td>' + obj[i].sumprice + '</td>' +
                                                                            '<td>'+w[i]; +'</td>' +
                                                                            '</tr>';
                                                                }

                                                                $('#runtime').html(show);
//             alert(obj);
//                $("#runtime").html(obj.mor);
//                starttime = obj.starttime1;
//                endtimeja = obj.endtime;

                                                            });







                                                        }
                                                        function okja(id,t) {
                                                            reason = prompt("Please enter Reason", "");
                                                                if (reason != null) {
      
                                                            var fullpart = "http://cbt.backeyefinder.in.th/users/addActive";
                                                            console.log(id);
                                                            console.log(reason);

                                                            $.ajax({
                                                                type: "POST",
                                                                url: fullpart,
                                                                data: {idsend: id, reasonsend: reason}
                                                            }).done(function (msg) {
                                                               // show = ' ';
                                                                        show = '<div class="btn-group ">' +
                                                                            ' <button  type="button" class="btn btn-success dropdown-toggle btn-sm" data-toggle="dropdown">' +
                                                                            '   Active <span class="caret"></span>' +
                                                                            ' </button>' +
                                                                            '  <ul class="dropdown-menu" role="menu" id="eventselect">' +
                                                                            '   <li ><a  class="btn " role="button" onclick="warning(' + id + ',this)">Warning</a></li>' +
                                                                            '  <li ><a  class="btn " role="button" onclick="blacklist(' + id + ',this,'+stadium_id+')">BLACK LIST</a></li>' +
                                                                            '   <!--<li class="divider"></li>-->' +
                                                                            '</ul>' +
                                                                            ' </div>' ;
                                                                        $(t).parent().parent().parent().html(show);
                                                                      function create(template, vars, opts) {
                                                            return $container.notify("create", template, vars, opts);
                                                        }
                                                                console.log(msg);
                                                                
                                                                $("#notija").notify({
                                                                speed: 500,
                                                               
                                                            });
                                                            $("#notija").notify("create", {
                                                                title: 'Add Complete',
                                                                text: 'Status this user is Change '
                                                            });


                                                            });
//                                                if (reason != null) {
//                                                    document.getElementById("demo").innerHTML =
//                                                            "Hello " + person + "! How are you today?";
//                                                }
}
                                                        }
                                                           function warning(id,t) {
                                                            reason = prompt("Please enter Reason", "");
                                                             if (reason != null) {
                                                            var fullpart = "http://cbt.backeyefinder.in.th/users/addWarning";
                                                            console.log(id);
                                                            console.log(reason);

                                                            $.ajax({
                                                                type: "POST",
                                                                url: fullpart,
                                                                data: {idsend: id, reasonsend: reason}
                                                            }).done(function (msg) {
                                                               // show = ' ';
                                                                        show = '<div class="btn-group ">' +
                                                                            ' <button  type="button" class="btn btn-warning dropdown-toggle btn-sm" data-toggle="dropdown">' +
                                                                            '   Warning <span class="caret"></span>' +
                                                                            ' </button>' +
                                                                            '  <ul class="dropdown-menu" role="menu" id="eventselect">' +
                                                                            '   <li ><a  class="btn " role="button" onclick="okja(' + id + ',this)">Active</a></li>' +
                                                                            '  <li ><a  class="btn " role="button" onclick="blacklist(' + id + ',this,'+stadium_id+')">BLACK LIST</a></li>' +
                                                                            '   <!--<li class="divider"></li>-->' +
                                                                            '</ul>' +
                                                                            ' </div>' ;
                                                                        $(t).parent().parent().parent().html(show);
                                                                      function create(template, vars, opts) {
                                                            return $container.notify("create", template, vars, opts);
                                                        }
                                                                console.log(msg);
                                                                
                                                                $("#notija").notify({
                                                                speed: 500,
                                                               
                                                            });
                                                            $("#notija").notify("create", {
                                                                title: 'Add Complete',
                                                                text: 'Status this user is Change '
                                                            });


                                                            });
//                                                if (reason != null) {
//                                                    document.getElementById("demo").innerHTML =
//                                                            "Hello " + person + "! How are you today?";
//                                                }
                                                        }
                                                        }
                                                        function blacklist(id,t,stid) {
                                                            reason = prompt("Please enter Reason", "");
                                                             if (reason != null) {
                                                            var fullpart = "http://cbt.backeyefinder.in.th/users/addBlacklist";
                                                            console.log(id);
                                                            console.log(reason);

                                                            $.ajax({
                                                                type: "POST",
                                                                url: fullpart,
                                                                data: {idsend: id, reasonsend: reason,stsend: stid}
                                                            }).done(function (msg) {
                                                                   show = '<div class="btn-group ">' +
                                                                            ' <button  type="button" class="btn btn-danger dropdown-toggle btn-sm" data-toggle="dropdown">' +
                                                                            '   Danger <span class="caret"></span>' +
                                                                            ' </button>' +
                                                                            '  <ul class="dropdown-menu" role="menu" id="eventselect">' +
                                                                            '   <li ><a  class="btn " role="button" onclick="okja(' + id + ',this)">Active</a></li>' +
                                                                            '  <li ><a  class="btn " role="button" onclick="warning(' + id + ',this)">Warning</a></li>' +
                                                                            '   <!--<li class="divider"></li>-->' +
                                                                            '</ul>' +
                                                                            ' </div>' ;
                                                                        $(t).parent().parent().parent().html(show);
                                                                      function create(template, vars, opts) {
                                                            return $container.notify("create", template, vars, opts);
                                                        }
                                                                console.log(msg);
                                                                
                                                                $("#notija").notify({
                                                                speed: 500,
                                                               
                                                            });
                                                            $("#notija").notify("create", {
                                                                title: 'Add Complete',
                                                                text: 'Status this user is Change '
                                                            });


                                                            });
//                                                if (reason != null) {
//                                                    document.getElementById("demo").innerHTML =
//                                                            "Hello " + person + "! How are you today?";
//                                                }
                                                        }
                                                        }
//                                            function blacklist() {
//                                                var ids = $("#eventselect li").map(function () {
//                                                    return this.id;
//                                                }).get().join(",");
//
//                                                console.log(ids);
//                                            }
</script>
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
            x--; // อ้างอิงถึง class delja2
        })
    });</script>

<script>
    function del() {
        alert("Are you sure to Delete");
    }
</script>
</body>
</html>

