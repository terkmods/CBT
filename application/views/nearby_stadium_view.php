
<?php
include 'template/head.php';
?>

<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">

        </div>
        <div id="map-canvas" class="col-md-5">

        </div>
        <div class="col-md-7">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Result Stadium</h3>
                </div>
                <div class="panel-body">
                   <div class="list-group-item">
                                                        <div class="row-picture">
                                                            <a href="http://cbt.backeyefinder.in.th/stadium/profile/41"><img class="circle img-responsive" src="http://cbt.backeyefinder.in.th/asset/images/stadiumpic/21.JPG" alt="icon"></a>
                                                        </div>
                                                        <div class="row-content">
                                                            <div class="action-secondary">
                                                                <button type="button" class="btn btn-primary btn-xs viewdetail" data-toggle="modal" data-target="#actionbooking" data-pic="stadiumpic/21.JPG" data-sname="ไดอาน่า" data-court="1" data-time="2014-11-16 13:30:00 - 2014-11-16 14:00:00" data-jong="Kanate Dheeravoravong" data-tel="0922766176" data-play="2">
                                                                    more info
                                                                </button>
                                                            </div>
                                                            <h4 class="list-group-item-heading">สนาม : <a href="http://cbt.backeyefinder.in.th/stadium/profile/41">ไดอาน่า</a> <small>คอร์ด : 1</small> </h4>
                                                            <p class="list-group-item-text">เวลา   13:30:00 -  14:00:00</p>
        <!--                                                        <p class="list-group-item-text">ผู้จอง Kanate Dheeravoravong โทร : 0922766176</p>
                                                            <p class="list-group-item-text">โทร : 0922766176</p>-->
                                                        </div>
                                                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">

    </div>
</div>

<?php include 'template/modal.php'; ?>
<?php include 'template/footer.php'; ?>
<script>
    // The following example creates complex markers to indicate beaches near
    // Sydney, NSW, Australia. Note that the anchor is set to
    // (0,32) to correspond to the base of the flagpole.
    var map;
    var infowindow1;
    var mk;
    var cir;

    var markers = [];
    var image = {
        url: 'http://cbt.backeyefinder.in.th/asset/images/markerbad.png',
        // This marker is 20 pixels wide by 32 pixels tall.
        size: new google.maps.Size(20, 32),
        // The origin for this image is 0,0.
        origin: new google.maps.Point(0, 0),
        // The anchor for this image is the base of the flagpole at 0,32.
        anchor: new google.maps.Point(0, 32)
    };
    var rad = function (x) {
        return x * Math.PI / 180;
    };


    function initialize() {
        var mapOptions = {
            zoom: 15

        }
        infowindow1 = new google.maps.InfoWindow();
        map = new google.maps.Map(document.getElementById('map-canvas'),
                mapOptions);
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function (position) {
                var pos = new google.maps.LatLng(position.coords.latitude,
                        position.coords.longitude);

                if (mk != null)
                    mk.setMap(null);
                mk = new google.maps.Marker({position: new google.maps.LatLng(position.coords.latitude, position.coords.longitude), map: map, draggable: false, animation: google.maps.Animation.DROP});

                map.setCenter(pos);
                x = pos.lat();
                y = pos.lng();
                var r = 1000;
                setCircle(r);
            }, function () {
                handleNoGeolocation(true);
            });
        } else {
            // Browser doesn't support Geolocation
            handleNoGeolocation(false);
        }
        // setMarkers(map, beaches);

        $.getJSON('http://cbt.backeyefinder.in.th/home/test', function (json) {

            $(json).each(function (k, v) {
                eachmaker(v);
            });
        });

//                google.maps.event.addListener(mk, 'click', function () {
//                    alert("hello");
//                });

        google.maps.event.addListener(map, "click", function (event) {
            if (mk != null)
                mk.setMap(null);
            mk = new google.maps.Marker({position: event.latLng, map: map, draggable: false, animation: google.maps.Animation.DROP});
            x = event.latLng.lat();
            y = event.latLng.lng();
            console.log(x + ',' + y);
            var r = 1000;
            setCircle(r);
        });
    }

    function eachmaker(rs) {
        console.log(rs.lat);
        console.log(rs.long);
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(rs.lat, rs.long),
            map: map,
            animation: google.maps.Animation.DROP,
            icon: image

        });

        var htmlForMap = '<div class="row">' +
                '<div class="col-md-6 col-sm-6">' +
                ' <img src="http://cbt.backeyefinder.in.th/asset/images/' + (rs.stadium_path != "" ? 'stadiumpic/' + rs.stadium_path : 'bad.png') + '" width=200px alt="">' +
                ' </div>' +
                '<div class="col-md-6 col-sm-6">' +
                ' <div class="caption">' +
                '<h3>' + rs.stadium_name + '</h3>' +
                ' <p>ที่อยู่:' + rs.address_no + '' + rs.soi +
                ' ' + rs.road + '' + rs.district +
                '</p>' +
                ' <p>เบอโทร:' + (rs.tel != "" ? rs.tel : '-') + '</p>' +
                ' <p>' +
                '  <a href="http://cbt.backeyefinder.in.th/booking/reserve/' + rs.stadium_id + '" class="btn btn-primary">Book Now!</a> <a href="<? echo base_url() ?>stadium/profile/' + rs.stadium_id + '" class="btn btn-default">More Info</a>' +
                '</p>' +
                '</div>' +
                ' </div>' +
                '</div>';


        google.maps.event.addListener(marker, 'click', function () {
            infowindow1.setContent(htmlForMap);
            infowindow1.open(map, marker);
        });
        markers.push(marker);

    }

    /**
     * Data for the markers consisting of a name, a LatLng and a zIndex for
     * the order in which these markers should display on top of each
     * other.
     */





    function handleNoGeolocation(errorFlag) {
        if (errorFlag) {
            var content = 'Error: The Geolocation service failed.';
        } else {
            var content = 'Error: Your browser doesn\'t support geolocation.';
        }

        var options = {
            map: map,
            position: new google.maps.LatLng(60, 105),
            content: content
        };

        var infowindow = new google.maps.InfoWindow(options);
        map.setCenter(options.position);
    }
    function setCircle(radius) {
        // document.getElementById("span-radius").innerHTML=radius;
        if (cir != null)
            cir.setMap(null);
        var r = parseInt(radius);
        cir = new google.maps.Circle({
            strokeColor: '#82B1F7',
            strokeOpacity: 0.8,
            strokeWeight: 2,
            fillColor: '#82B1F7',
            fillOpacity: 0.35,
            map: map,
            center: new google.maps.LatLng(x, y),
            radius: r
        });
        map.setCenter(new google.maps.LatLng(x, y));
        if (mk != null)
            search(x, y, r);
    }
    function search(x, y, radius) {
        removeResultSearch();
//                $('#h1-loader').removeClass('hidden').hide().slideDown(500);
        var fullpart = "http://cbt.backeyefinder.in.th/map/nearbysearch/";

        isSearch = true;
        $.ajax({
            type: "post",
            url: fullpart,
            data: {x: x, y: y, r: radius}
        }).done(function (msg) {
            isSearch = false;
            console.log(msg);
            var obj = JSON.parse(msg);
//                                alert(obj.avgpoint);
            console.log(obj);
            $(obj).each(function (k, v) {
                eachmaker(v);
            });

        });

    }
    function removeResultSearch() {
        for (var i = 0; i < markers.length; i++) {
            markers[i].setMap(null);
        }
        markers = [];
//                $('#div-result-search').html('<span id="span-result-search"></span>');
    }

    google.maps.event.addDomListener(window, 'load', initialize);

</script>



<?php include 'template/footer_scrpit.php'; ?>
</body>
</html>