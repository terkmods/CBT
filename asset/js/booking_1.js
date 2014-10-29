




var court;
var trs = document.getElementById('newshow').getElementsByTagName('tr');
var dayOfWeek = null;
var price;
var st_sun_price;
var m_f_price;
var date_inverse = null;
var date_elements = null;
var time1 = null;
var time2 = null;
var Daytype;
var val ;
var booking ; 
var curdate = $('.date-picker').datepicker('setDate', 'today');
var counterdate =0 ; 
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
function RowClick(currenttd, lock) {
    console.log('curenttr : '+($(currenttd).attr('id')));

    console.log('Court ID : '+$(currenttd).attr('value'));
    var court = $(currenttd).attr('value');

    courtview(court, Daytype);


    $("#courtid").val(court);
    $("#dateid").val($('.date-picker').val());
    // console.log(court[1]);

    $("#sumpricesend").val(price / 2);
    if (window.event.button === 0) {
        if (!window.event.ctrlKey && !window.event.shiftKey) {

            var d = new Date('2013-01-01 00:00');
            var id = parseInt($(currenttd).attr('id'));
            console.log('id->>>'+id);
            
            for (var i = 0; i < id-1 ; i++) {
                d = new Date(d.getTime()+30* 60000);  
                console.log('testttttttt->>>>'+d);
            }
            console.log('testttttttt->>>>'+d.getHours());
            var d2 = new Date(d.getTime() + 30 * 60000);
        console.log('testttttttt->>>>'+d2);
            var start = addZero(d.getHours()) + ':' + addZero(d.getMinutes());
            var end = addZero(d2.getHours()) + ':' + addZero(d2.getMinutes());
            
            console.log('tstarttttt->>>>'+start);
            
            $('#time_start').val(start);
            $('#time_start1').val(start);
            $('#time_end').val(end);
            $("#sumpricesend").val(price / 2);
            $('#booking').modal('show');
            $("#sumpricesend").val(price / 2);
            totalpricechange();
            return false;
        }
    }


//                                if (window.event.shiftKey) {
//                                    selectRowsBetweenIndexes([lastSelectedRow.rowIndex, currenttd.rowIndex])
//                                }

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
//    console.log(sumprice);
//    console.log(price);
//    console.log(dayOfWeek);

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
function getbooking(st) {

    $.get('/booking/get_bookings/' + st + '/' + date_inverse + '', function (data) {
        booking = data;
        console.log('DATA : => '+ JSON.parse(data));
        console.log(data[0].start.substring(0, 5));


        var indextimefromdb = time2.indexOf(data[0].start.substring(0, 5));
        console.log(indextimefromdb);

        var time = time2[indextimefromdb];
        console.log(time);
//        //find index  
//        var indexstart_time = [];
//        var indexend_time = [];
//        var new_timeja = [];
//        var i = 0;
//        for (i = 0; i < data.length; i++) {
//            console.log("findindex");
//            var start1 = data[i].start.substring(0, 5);
//            for (var j = 0; j < time1.length; j++) {
//                var timefind = time1[j].substring(0, 5);
//                if (timefind == start1) {
//                    //console.log("inif");
//                    indexstart_time[i] = j;
//                    // console.log(time1[(indexstart_time[i])]);
//                    // console.log(time1[18]);
//                    break;
//                }
//            }
//        }
//        for (i = 0; i < data.length; i++) {
//            console.log("findindex_end");
//            var end = data[i].end.substring(0, 5);
//            for (var j = 0; j < time1.length; j++) {
//                var timefind = time1[j].substring(8, 14);
//                if (timefind == end) {
//                    // console.log("inif_endtime");
//                    indexend_time[i] = j;
//                    // console.log(time1[(indexend_time[i])]);
//                    //console.log(indexend_time[i]);
//                    break;
//                }
//            }
//        }
//
//        console.log("print_index");
//        console.log(indexend_time);
//        console.log(indexstart_time);
//        console.log(time1[indexend_time[1]]);
//        console.log(time1[indexstart_time[1]]);
//
//        ///////////new array time ja //////
//        for (var i = 0; i < indexstart_time.length; i++) {
//            for (indexstart_time[i]; indexstart_time[i] <= indexend_time[i]; indexstart_time[i]++) {
//                new_timeja[new_timeja.length] = time1[indexstart_time[i]];
//
//
//            }
//
//
//        }
//        console.log(new_timeja);
//
//        //////// 
//        for (var i = 0; i < new_timeja.length; i++) {
//            console.log("time for db : " + i + "->" + start);
//            var start = new_timeja[i].substring(0, 5);
//
//            //var end = data[i]end.substring(0, 5);
//            for (var j = 0; j < time1.length; j++) {
//                //Note// ลบ onclick="loadRequestForm();" ออกจาก td ไป
//                console.log("time for new_time : " + j + "->" + time);
//                var time = time1[j].substring(0, 5);
//
//                if (time == start) {
//                    console.log("yes");
//                    $('#t' + (j + 1)).find('td:eq(1)').html(time == start ? '<b>ไม่ว่าง</b>' : '').addClass('bookline');
//                }
////              if (time == end) {
////            $('#t' + (j + 1)).find('td:eq(1)').html(time == start ? (data[i].description == '' ? '<b>จองโดย:</b> ' + data[i].firstname : '<b>จองโดย:</b> ' + data[i].firstname + ' (' + data[i].description
////                    + ')') : '').addClass('bookline');
////            }
//            }
//        }



        //var obj = JSON.parse(data);

//        console.log(datesendnaja);
//        console.log(data);
//        // console.log(data[0].end.substring(0, 5));
//        console.log(data[0].start.substring(0, 5));
        //console.log(time1[16].substring(8, 14));
        //  console.log(data.length);
        var indextimefromdb = [];
        for (var i = 0; i < data.length; i++) {
            
            indextimefromdb = time2.indexOf(data[i].start.substring(0, 5));
            //console.log(indextimefromdb);
            var start = time2[indextimefromdb];
            console.log(start);
             console.log("time for db : " + i + "->" + start);
            //var end = data[i]end.substring(0, 5);
            for (var j = 0; j < time2.length; j++) {
                //Note// ลบ onclick="loadRequestForm();" ออกจาก td ไป
                //console.log("time for new_time : " + j + "->" + time);
                var time = time1[j].substring(0, 5);
                
                if (time == start) {
                    console.log("yes");
                    console.log('i= >>>>>>'+(i+1));
                    $('#t' + (j + 1)).find('td:eq('+(i+1)+')').html(time == start ? '<b>ไม่ว่าง</b>' : '').addClass('bookline');
                    console.log('j = '+(j+1));
                }
//              if (time == end) {
//            $('#t' + (j + 1)).find('td:eq(1)').html(time == start ? (data[i].description == '' ? '<b>จองโดย:</b> ' + data[i].firstname : '<b>จองโดย:</b> ' + data[i].firstname + ' (' + data[i].description
//                    + ')') : '').addClass('bookline');
//            }
            }
        }
    }, 'json');
}
function getbooking_new(){
        var fullpart = "http://cbt.backeyefinder.in.th/booking/get_bookings";
         var href = window.location.pathname;
    console.log(href);
    var st = href.substr(href.lastIndexOf('/') + 1);
        val = $('.date-picker').datepicker('getDate').toDateString();
     
     
    datesendnaja = $('.date-picker').val();
    
    var date_elements = datesendnaja.split('/');
    date_inverse = date_elements[2] + '-' + date_elements[0] + '-' + date_elements[1];
    //alert(st);
    //alert(date_inverse);
    $.ajax({
        type: "POST",
        url: fullpart,
        data: {st_id: st, datesend: date_inverse}
    }).done(function (msg) {
        console.log('get_bookingNEWWW');
//        alert(msg);
        console.log(JSON.parse(msg));
         booking = JSON.parse(msg);
//        
        counterdate = 0 ;
            showTableBook();
        
    });
}
function courtview(ct, day) {

    var fullpart = "http://cbt.backeyefinder.in.th/booking/showcourtbook";
    $.ajax({
        type: "POST",
        url: fullpart,
        data: {courtsend: ct, daytypeja: day}
    }).done(function (msg) {
        var obj = JSON.parse(msg);
        console.log(obj);
        console.log('price :  '+obj.price.price);
        document.getElementById("courtja").innerHTML = obj.court.court_name;
        price = obj.price.price;

        //alert(price);
        document.getElementById("priceja").innerHTML = price;
        document.getElementById("sumprice").innerHTML = price / 2 + "(30 นาที )";

    });


//




}


$(function () {

    $(".date-picker").datepicker().on('changeDate', function(e){
        getbooking_new();
    });

       
    var myDate = new Date();
    var prettyDate = (myDate.getMonth() + 1) + '/' + myDate.getDate() + '/' +
            myDate.getFullYear();
    $("#date-pik").val(prettyDate);
    time1 = ['00:00 - 00:30', '00:30 - 01:00', '01:00 - 01:30', '01:30 - 02:00', '02:00 - 02:30', '02:30 - 03:00', '03:00 - 03:30', '03:30 - 04:00', '04:00 - 04:30', '04:30 - 05:00', '05:00 - 05:30', '05:30 - 06:00', '06:00 - 06:30', '06:30 - 07:00', '07:00 - 07:30', '07:30 - 08:00', '08:00 - 08:30', '08:30 - 09:00', '09:00 - 09:30', '09:30 - 10:00', '10:00 - 10:30', '10:30 - 11:00', '11:00 - 11:30', '11:30 - 12:00'
                , '12:00 - 12:30', '12:30 - 13:00', '13:00 - 13:30', '13:30 - 14:00', '14:00 - 14:30', '14:30 - 15:00', '15:00 - 15:30', '15:30 - 16:00', '16:00 - 16:30', '16:30 - 17:00', '17:00 - 17:30', '17:30 - 18:00', '18:00 - 18:30', '18:30 - 19:00', '19:00 - 19:30', '19:30 - 20:00', '20:00 - 20:30', '20:30 - 21:00', '21:00 - 21:30', '21:30 - 22:00', '22:00 - 22:30', '22:30 - 23:00', '23:00 - 23:30', '23:30 - 24:00', '24:00 - 0:00'];
    time2 = ['00:00', '00:30', '01:00', '01:30', '02:00', '02:30', '03:00', '03:30', '04:00', '04:30', '05:00', '05:30', '06:00', '06:30', '07:00', '07:30', '08:00', '08:30', '09:00', '09:30', '10:00', '10:30', '11:00', '11:30'
                , '12:00', '12:30', '13:00', '13:30', '14:00', '14:30', '15:00', '15:30', '16:00', '16:30', '17:00', '17:30', '18:00', '18:30', '19:00', '19:30', '20:00', '20:30', '21:00', '21:30', '22:00', '22:30', '23:00', '23:30', '24:00'];
    var starttime = null;
    var show = ' ';
    var showid;
    //val = $('.date-picker').datepicker('setDate', 'today');
    showTableBook(curdate.val());
    


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

function showTableBook() {

     val = $('.date-picker').datepicker('getDate').toDateString();
     
     
    datesendnaja = $('.date-picker').val();
    
    var date_elements = datesendnaja.split('/');
    date_inverse = date_elements[2] + '-' + date_elements[0] + '-' + date_elements[1];
    var href = window.location.pathname;
    console.log(href);
    var id = href.substr(href.lastIndexOf('/') + 1);

//            var id = <?php echo $this->uri->segment(3); ?>;
    console.log('select   '+datesendnaja);
    console.log('cureent '+curdate.val());
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
    console.log('sssssss'+val[0]);
    document.getElementById("dayOfWeek").innerHTML = dayOfWeek + ' ที่ ' + val[2] + ' พ.ศ. ' + val[3];
    document.getElementById("datenaja").innerHTML = dayOfWeek + ' ที่ ' + val[2] + ' พ.ศ. ' + val[3];
    console.log(val);

    console.log(id);
    var fullpart = "http://cbt.backeyefinder.in.th/booking/showTablebookNew";
    $.ajax({
        type: "POST",
        url: fullpart,
        data: {date: val[0], stId: id}
    }).done(function (msg) {
        
        //console.log(msg);
        var obj = JSON.parse(msg);
        console.log(obj.time.open_time);
        console.log(time2.indexOf(obj.open_time));

        starttime = time2.indexOf(obj.time.open_time);
        endtimeja = time2.indexOf(obj.time.end_time);
        
        timeopennaja = time2[starttime] + ' ถึง ' + time2[endtimeja];
        $("#court").html(timeopennaja);

        show = ' ';
        selectja = ' ';
        showtd = '';
        //alert(booking[0].court_id);

        for (starttime; starttime < endtimeja; starttime++) {

            show = show + '<tr id="t' + (parseInt(starttime) + 1) +'"><td style="width: 110px; text-align: center">' + time1[starttime] + '</td>';
            for (k = 0; k < $('#countcort').val(); k++) {
                show = show + '<td class="span6 c'+ obj.court[k].court_id +'"  onmousedown="RowClick(this,false);" id="'+ (parseInt(starttime) + 1) +'" value="' + obj.court[k].court_id + '">';
                   
//               if (counterdate < booking.length){
//                    x_start = new Date('2013-01-01 ' +booking[counterdate].start).getTime()/1000;
//                    x_end = new Date('2013-01-01 ' +booking[counterdate].end).getTime()/1000;
//                    y_start = new Date('2013-01-01 ' +time2[starttime]).getTime()/1000;
//                    
//                    if(booking[counterdate].court_id== obj.court[k].court_id && y_start>=x_start && y_start<x_end){
//                            show = show +'xx';
//                            counterdate++;
//                            console.log('counterdate= '+counterdate);
//                    }
//
//
//                    show = show + '</td>';
//
//                }


                      show = show + '</td>';
            }
            show = show + '</tr>';
        }
        $("#newshow").html(show);
        console.log("booking time");
        console.log(booking);
        for (var i = 0; i < booking.length; i++) {
            var court_id = booking[i].court_id;
            var end = booking[i].end;
            var start = booking[i].start;
            
            //find td
            var td_end = 0;
            var td_start=0;
            var dEnd = new Date('2013-01-01 '+end);
            var dStart = new Date('2013-01-01 '+start);
            console.log("calculate td");
            while(dEnd.getHours()!=0 || dEnd.getMinutes()!=0){
                dEnd = new Date(dEnd.getTime()-(30*60000));
//                console.log(dEnd);
                td_end++;
//                console.log(td_end);
                if(dStart.getHours()!=0 || dStart.getMinutes() !=0){                
                    dStart = new Date(dStart.getTime()-(30*60000));
                    td_start++;
                }    
        }
        td_start++;
        td_end++;
        console.log(td_start);
        console.log(td_end);
            
            for (var j = td_start; j < td_end; j++) {
                $("#t"+j).find("td[value='"+court_id+"']").text("ไม่ว่าง");
            }
            //replace td in court id
        }


        
        Daytype = obj.time.type;
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
    



    $('#mytablebook, #evening').on('mouseover', 'td', function (e) {
        if ($(this).text() == '') {
            $(this).addClass('hover-bg');
            $(this).html('booking');
        }
    }).on('mouseout', 'td', function (e) {
        if ($(this).text() == 'booking' || $(this).text() == '') {
            $(this).removeClass('hover-bg');
            $(this).text('');
        }
    });
}





