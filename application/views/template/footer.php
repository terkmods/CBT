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
</footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?= base_url() ?>asset/js/bootstrap.min.js"></script>
<script src="<?= base_url() ?>asset/js/bootstrap-datepicker.js"></script>
<script src="<?= base_url() ?>asset/js/bootstrap-switch.js"></script>
<script type="text/javascript">
    $(function () {



//        $(".date-picker").on("change", function () {
//            var id = $(this).attr("id");
//            var val = $("label[for='" + id + "']").text();
//            $("#msg").text(val + " changed");
//        });
    });
</script>
<script type="text/javascript">
    var time1 = ['00:00 - 00:30', '00:30 - 01:00', '01:00 - 01:30', '01:30 - 02:00', '02:00 - 02:30', '02:30 - 03:00', '03:00 - 03:30', '03:30 - 04:00', '04:00 - 04:30', '04:30 - 05:00', '05:00 - 05:30', '05:30 - 06:00', '06:00 - 06:30', '06:30 - 07:00', '07:00 - 07:30', '07:30 - 08:00', '08:00 - 08:30', '08:30 - 09:00', '09:00 - 09:30', '09:30 - 10:00', '10:00 - 10:30', '10:30 - 11:00', '11:00 - 11:30', '11:30 - 12:00'];
    var time2 = ['12:00 - 12:30', '12:30 - 13:00', '13:00 - 13:30', '13:30 - 14:00', '14:00 - 14:30', '14:30 - 15:00', '15:00 - 15:30', '15:30 - 16:00', '16:00 - 16:30', '16:30 - 17:00', '17:00 - 17:30', '17:30 - 18:00', '18:00 - 18:30', '18:30 - 19:00', '19:00 - 19:30', '19:30 - 20:00', '20:00 - 20:30', '20:30 - 21:00', '21:00 - 21:30', '21:30 - 22:00', '22:00 - 22:30', '22:30 - 23:00', '23:00 - 23:30', '23:30 - 24:00'];
    var html = '';

    $.event.special.rightclick = {
        bindType: "contextmenu",
        delegateType: "contextmenu"
    };

    $(document).ready(function (e) {
        for ($i = 0; $i < time1.length; $i++) {
            //Note// ลบ onclick="loadRequestForm();" ออกจาก td ไป

            html = '<tr id="t' + ($i + 1) + '" onmousedown="RowClick(this,false);"><td style="width: 110px; text-align: center">' + time1[$i] + '</td><td id="select" class="span6" ></td></tr>';
            $("#morning table tbody").append(html);
        }
        for ($j = 0; $j < time2.length; $j++) {
            html = '<tr id="t' + ($j + 1 + 24) + '" onmousedown="RowClick(this,false);"><td style="width: 110px; text-align: center">' + time2[$j] + '</td><td id="select" class="span6"></td></tr>';
            $("#evening table tbody").append(html);
        }

        $('#morning, #evening').on('mouseover', 'td', function (e) {
            if ($(this).text() == '') {
                $(this).addClass('hover-bg');
                $(this).html('คลิกเพื่อจอง');
            }
        }).on('mouseout', 'td', function (e) {
            if ($(this).text() == 'คลิกเพื่อจอง' || $(this).text() == '') {
                $(this).removeClass('hover-bg');
                $(this).text('');
            }
        });
    });

</script>
<script type="text/javascript">
function courtchange() {
    var x = document.getElementById("courtselect").selectedIndex;
    var data = document.getElementsByTagName("option")[x].value;
        data = data.split(',');
   console.log(data);
    document.getElementById("court").innerHTML = data[0];
}
</script>
<script type="text/javascript">


    $(function () {
        $(".date-picker").datepicker();

        $(".date-picker").on("change", function () {

            var val = $('.date-picker').datepicker('getDate').toDateString();
            var id = <?php echo $this->uri->segment(3); ?>;

            val = val.split(' ');
            var weekday = new Array();
            weekday['Mon'] = "จันทร์";
            weekday['Tue'] = "อังคาร";
            weekday['Wed'] = "พุธ";
            weekday['Thu'] = "พฤหัสบดี";
            weekday['Fri'] = "ศุกร์";
            weekday['Sat'] = "เสาร์";
            weekday['Sun'] = "อาทิตย์";
            var dayOfWeek = weekday[val[0]];

            document.getElementById("dayOfWeek").innerHTML =  dayOfWeek + ' ที่ ' + val[2] + ' พ.ศ. ' + val[3];

            console.log(val);

            console.log(id);

            $.ajax({
                type: "POST",
                url: "<?= base_url() ?>booking/showTablebook",
                data: {date: val, stId: id}
            }).done(function (msg) {
                $("#runtime").html(msg);
                $("#today").html(msg);
                //alert(msg)
            });
        });


//        $(".date-picker").click(function() {
//            $.ajax({
//                type: "POST",
//                url: "booking/showTablebook",
//                data: {date: $(this).val()}
//            }).done(function(msg) {
//                alert(msg);
//                //aTable.fnDraw();
//            });
//        });

    });




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
