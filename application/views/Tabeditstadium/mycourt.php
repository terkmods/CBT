<div class="tab-pane" id="mycourt">


    <hr>
    <h5>ตารางจองคอร์ดของฉัน</h5>
    
<div class="control-group">
        
        <div class="controls">
            <div class="input-group">
                <input  type="text" id="date-pik" class="date-picker form-control" />
                <label for="date-picker-2" class="input-group-addon btn"><span class="glyphicon glyphicon-calendar"></span>

                </label>
            </div>
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                  <?php $i=0; foreach ($court as $r) { ?>
        <th><?=$r['court_name'] ?></th>
        
        <?php $i++;} ?>
            </tr>
        </thead>
        <tbody id="runtime">
            <tr>
                <td>No select</td>
        
            </tr>
            
        </tbody>
    </table>
</div>

<script type="text/javascript">
    $(function () {
        $(".date-picker").datepicker();
        time1 = ['00:00 - 00:30', '00:30 - 01:00', '01:00 - 01:30', '01:30 - 02:00', '02:00 - 02:30', '02:30 - 03:00', '03:00 - 03:30', '03:30 - 04:00', '04:00 - 04:30', '04:30 - 05:00', '05:00 - 05:30', '05:30 - 06:00', '06:00 - 06:30', '06:30 - 07:00', '07:00 - 07:30', '07:30 - 08:00', '08:00 - 08:30', '08:30 - 09:00', '09:00 - 09:30', '09:30 - 10:00', '10:00 - 10:30', '10:30 - 11:00', '11:00 - 11:30', '11:30 - 12:00'
                    , '12:00 - 12:30', '12:30 - 13:00', '13:00 - 13:30', '13:30 - 14:00', '14:00 - 14:30', '14:30 - 15:00', '15:00 - 15:30', '15:30 - 16:00', '16:00 - 16:30', '16:30 - 17:00', '17:00 - 17:30', '17:30 - 18:00', '18:00 - 18:30', '18:30 - 19:00', '19:00 - 19:30', '19:30 - 20:00', '20:00 - 20:30', '20:30 - 21:00', '21:00 - 21:30', '21:30 - 22:00', '22:00 - 22:30', '22:30 - 23:00', '23:00 - 23:30', '23:30 - 24:00', '24:00 - 0:00'];
        var starttime = null;
        var show = ' ';
        $(".date-picker").on("change", function () {

            var val = $('.date-picker').datepicker('getDate').toDateString();
            datesendnaja = $('.date-picker').val();
            
          var date_elements = datesendnaja.split('/');
           date_inverse = date_elements[2] + '-' + date_elements[0] + '-' + date_elements[1];
           var href = window.location.pathname;
           console.log(href);
            var id = href.substr(href.lastIndexOf('/') + 1);
           
//            var id = <?php echo $this->uri->segment(3); ?>;
            console.log($('.date-picker').val());
            val = val.split(' ');
            var weekday = new Array();
            weekday['Mon'] = "จันทร์";
            weekday['Tue'] = "อังคาร";
            weekday['Wed'] = "พุธ";
            weekday['Thu'] = "พฤหัสบดี";
            weekday['Fri'] = "ศุกร์";
            weekday['Sat'] = "เสาร์";
            weekday['Sun'] = "อาทิตย์";
            dayOfWeek = weekday[val[0]];

            document.getElementById("dayOfWeek").innerHTML = dayOfWeek + ' ที่ ' + val[2] + ' พ.ศ. ' + val[3];
            document.getElementById("datenaja").innerHTML = dayOfWeek + ' ที่ ' + val[2] + ' พ.ศ. ' + val[3];
            console.log(val);

            console.log(id);
            var fullpart = "http://cbt.backeyefinder.in.th/booking/showTablebook" ;
            $.ajax({
                type: "POST",
                url: fullpart,
                data: {date: dayOfWeek, stId: id}
            }).done(function (msg) {
//                $("#runtime").html(msg);

                var obj = JSON.parse(msg);

//                $("#runtime").html(obj.mor);
                starttime = obj.starttime1;
                endtimeja = obj.endtime;
                console.log(obj);
                timeopennaja = time1[obj.starttime1] + ' ถึง ' + time1[obj.endtime];
                $("#court").html(timeopennaja);
                //alert(msg);
                show = ' ';
                selectja = ' ';
                for (starttime; starttime < endtimeja; starttime++) {


                    show = show + '<tr id="t' + (parseInt(starttime) + 1) + '" onmousedown="RowClick(this,false);"><td style="width: 110px; text-align: center">' + time1[starttime] + '</td><td  class="span6 select" ></td></tr>';
                    selectja = selectja + '<option>' + time1[starttime] + '</option>'
                }

                $("#runtime1").html(show);
                $("#selecttime").html(selectja);
                $("#courtselect").val("default");
                $("#runtime").html("กรุณาเลือกคอร์ด");
                console.log(st_sun_price);
                console.log(m_f_price);
                if (dayOfWeek == "เสาร์" || dayOfWeek == "อาทิตย์") {
                    price = st_sun_price;
                } else {
                    price = m_f_price;
                }
                console.log(price);
                

            });




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

////////////////////////////////
//////////////////////////////
   





    });
</script>