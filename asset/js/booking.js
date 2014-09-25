




    var court;
    var trs = document.getElementById('runtime1').getElementsByTagName('tr');
    var dayOfWeek = null;
    var price;
    var st_sun_price;
    var m_f_price;
    var date_inverse =null;
    var date_elements =null;
    var time1 = null;

    ///////////////////////
    //////////////////////
    function addZero(str) {
        var a = str;
        if (str < 10) {
            a = "0" + str;
        }
        return a;
    }
    ////////////////
    function RowClick(currenttr, lock) {
        if (window.event.ctrlKey) {
            if ($(currenttr).find('td:last').text() != '' && $(currenttr).find('td:last').text() != 'คลิกเพื่อจอง') {
                toggleRow(currenttr);
            }
        }

        document.getElementById("priceja").innerHTML = price;
        document.getElementById("sumprice").innerHTML = price / 2 + "(30 นาที )";
        $("#sumpricesend").val(price/2);
      
        $("#courtid").val(court[1]);
        $("#dateid").val($('.date-picker').val());
        console.log(court[1]);
        if (window.event.button === 0) {
            if (!window.event.ctrlKey && !window.event.shiftKey) {
                clearAll();
                if ($(currenttr).find('td:last').text().indexOf('จองโดย') != -1) {
                    cancel($(currenttr).find('td:last'), false);
                    return false;
                }
                if ($(currenttr).find('td:last').attr('onClick') == 'loadRequestForm();') {
                    loadRequestForm();
                    return false;
                }

                var d = new Date('2013-01-01 00:00');
                var id = parseInt($(currenttr).attr('id').substr(1), 10);

                for (var i = 0; i < id - 1; i++) {
                    d = new Date(d.getTime() + 30 * 60000);
                }

                var d2 = new Date(d.getTime() + 30 * 60000);

                var start = addZero(d.getHours()) + ':' + addZero(d.getMinutes());
                var end = addZero(d2.getHours()) + ':' + addZero(d2.getMinutes());

                $('#time_start').val(addZero(d.getHours()) + ':' + addZero(d.getMinutes()));
                $('#time_end').val(addZero(d2.getHours()) + ':' + addZero(d2.getMinutes()));

                $('#booking').modal('show');

                return false;
            }

//                                if (window.event.shiftKey) {
//                                    selectRowsBetweenIndexes([lastSelectedRow.rowIndex, currenttr.rowIndex])
//                                }
        }
    }
    function totalpricechange() {
        var starttime = $("#time_start").val();
        var endtime = $("#time_end").val();
        var s = starttime.split(':');
        var e = endtime.split(':');
        console.log(starttime.split(':'));
        console.log(endtime.split(':'));
        console.log(parseInt(e[0]));
        console.log(parseInt(s[0]));
        console.log(parseInt(e[0]) - parseInt(s[0]));
        var hour = parseInt(e[0]) - parseInt(s[0]);
        console.log(parseInt(e[1]) - parseInt(s[1]));
        var halftime = 0;
        var halfprice = 0;
        if ((parseInt(e[1]) - parseInt(s[1])) == 30 || (parseInt(e[1]) - parseInt(s[1])) == -30) {
            halfprice = price / 2;
            halftime = 30;
        }
        sumprice = ((parseInt(e[0]) - parseInt(s[0])) * price) + halfprice;
        console.log(sumprice);
        console.log(price);
        console.log(dayOfWeek);
        
        document.getElementById("sumprice").innerHTML = sumprice + " ( " + hour + " ชม. " + halftime + " นาที)";
        // console.log(parseInt(endtime[0]) - parseInt(starttime[0]));
        $("#sumpricesend").val(sumprice);
        //console.log(allprice);
    }
    function clearAll() {
        for (var i = 0; i < trs.length; i++) {
            $(trs[i]).find('td:last').removeClass('selected');

        }
    }
    function getbooking(){
        $.get('/booking/get_bookings/'+court[1]+'/'+date_inverse+'', function(data) {
          //find index  
          var indexstart_time = [];
          var indexend_time = [];
          var new_timeja =[];
          var i = 0;
           for ( i = 0; i < data.length; i++) {
                console.log("findindex");
            var start1 = data[i].start.substring(0, 5);
            for (var j = 0; j < time1.length; j++) {
            var timefind = time1[j].substring(0, 5);
            if (timefind == start1) {
                //console.log("inif");
                indexstart_time[i] = j ; 
               // console.log(time1[(indexstart_time[i])]);
               // console.log(time1[18]);
                break;
            }
        }
        }
        for ( i = 0; i < data.length; i++) {
                console.log("findindex_end");
            var end = data[i].end.substring(0, 5);
            for (var j = 0; j < time1.length; j++) {
            var timefind = time1[j].substring(8, 14);
            if (timefind == end) {
               // console.log("inif_endtime");
                indexend_time[i] = j ; 
               // console.log(time1[(indexend_time[i])]);
                //console.log(indexend_time[i]);
                break;
            }
        }
        }
        
            console.log("print_index");
            console.log(indexend_time);
            console.log(indexstart_time);
             console.log(time1[indexend_time[1]]);
            console.log(time1[indexstart_time[1]]);
            
            ///////////new array time ja //////
            for (var i = 0; i < indexstart_time.length; i++) {
                for(indexstart_time[i]; indexstart_time[i]<=indexend_time[i];indexstart_time[i]++){
                    new_timeja[new_timeja.length] = time1[indexstart_time[i]];
                
    
                }
            
        
        }
         console.log(new_timeja);   
        
       //////// 
        for (var i = 0; i < new_timeja.length; i++) {
                console.log("time for db : "+i+"->"+start);
            var start = new_timeja[i].substring(0, 5);
             
            //var end = data[i]end.substring(0, 5);
                    for (var j = 0; j < time1.length; j++) {
            //Note// ลบ onclick="loadRequestForm();" ออกจาก td ไป
            console.log("time for new_time : "+j+"->"+time);
            var time = time1[j].substring(0, 5);
            
                    if (time == start) {
                          console.log("yes");
            $('#t' + (j+1)).find('td:eq(1)').html(time == start ? '<b>ไม่ว่าง</b>' : '').addClass('bookline');
            }
//              if (time == end) {
//            $('#t' + (j + 1)).find('td:eq(1)').html(time == start ? (data[i].description == '' ? '<b>จองโดย:</b> ' + data[i].firstname : '<b>จองโดย:</b> ' + data[i].firstname + ' (' + data[i].description
//                    + ')') : '').addClass('bookline');
//            }
            }
            }
            
            
            
            //var obj = JSON.parse(data);
            console.log(court[1]);
            console.log(datesendnaja);
            console.log(data);
           // console.log(data[0].end.substring(0, 5));
            console.log(data[0].start.substring(0, 5));
            //console.log(time1[16].substring(8, 14));
           //  console.log(data.length);
            
            }, 'json');
    }
    function courtchange() {
        var x = document.getElementById("courtselect").selectedIndex;
        court = document.getElementsByTagName("option")[x].value;
        court = court.split(',');
//        console.log(court);
//        console.log(court[0]);
//        console.log(court[1]);
        //document.getElementById("court").innerHTML = court[0];
        var fullpart = "http://cbt.backeyefinder.in.th/booking/showcourtbook" ;
        $.ajax({
            type: "POST",
            url: fullpart,
            data: {courtsend: court}
        }).done(function (msg) {
            var obj = JSON.parse(msg);
            // alert(msg);
//                $("#runtime").html(obj.mor);
//                starttime = obj.starttime1;
//                endtimeja = obj.endtime;
            m_f_price = obj.m_f_price;
            st_sun_price = obj.st_sun_price;
           // console.log(obj);
             //console.log(obj.court_id);
            show = ' ';
            show = ' <tr>' +
                    '<td style="width: 110px; text-align: center">ชื่อคอร์ด</td>' +
                    '<td class="span6">' + obj.court_name + '</td>' +
                    ' </tr>' +
                    ' <tr>' +
                    '     <td style="width: 110px; text-align: center">ราคา จันทร์ - ศุกร์ </td>' +
                    '     <td class="span6">' + obj.m_f_price + ' บาท</td>' +
                    ' </tr><tr>' +
                    '     <td style="width: 110px; text-align: center">ราคา เสาร์ - อาทิตย์</td>' +
                    '     <td class="span6"> ' + obj.st_sun_price + ' บาท</td>' +
                    ' </tr>' +
                    '  <tr>' +
                    '    <td style="width: 110px; text-align: center">ลักษณะพื้น</td>' +
                    '    <td class="span6"> ' + obj.type + '</td>' +
                    '  </tr> '
            $("#runtime").html(show);
            document.getElementById("courtja").innerHTML = obj.court_name;
            if (dayOfWeek == "เสาร์" || dayOfWeek == "อาทิตย์") {
                price = st_sun_price;
            } else {
                price = m_f_price;
            }
            // alert(price);
        });


        
         getbooking();
         
        
        
    }
   
    
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
        $('td').on("click", function () {
            if ($(this).text().indexOf('จองโดย') != -1) {
                cancel($(this));
                return false;
            }


            var d = new Date('2013-01-01 00:00');
            var id = parseInt($(this).parents('tr').attr('id').substr(1), 10);

            for (var i = 0; i < id - 1; i++) {
                d = new Date(d.getTime() + 30 * 60000);
            }

            var d2 = new Date(d.getTime() + 30 * 60000);

            var start = addZero(d.getHours()) + ':' + addZero(d.getMinutes());
            var end = addZero(d2.getHours()) + ':' + addZero(d2.getMinutes());

            $('#time_start').val(addZero(d.getHours()) + ':' + addZero(d.getMinutes()));
            $('#time_end').val(addZero(d2.getHours()) + ':' + addZero(d2.getMinutes()));

            $('#booking').modal('show');

            return false;
        });





    });





