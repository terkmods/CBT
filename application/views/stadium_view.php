<?php include 'template/head.php';
?>
<div class="container">
    <div id="cover">
        <a role="button" data-toggle="modal" data-target="#uploadimgcover" class="btn"><img src="<?= base_url() ?>/asset/images/<?php
            if ($data['0']->cover_path != "") {
                echo 'stadiumpic/' . $data['0']->cover_path;
            } else {
                echo 'cover_new.jpg';
            }
            ?>" width="1280"></a>
    </div>
    <div class="container upper-profile">
        <div class="row">
            <div class="col-md-3 profile-pic"><img src="<?= base_url() ?>/asset/images/stadiumpic/<?= $data['0']->stadium_path ?>" width="200" class="img-thumbnail"></div>
            <div class="col-md-3 info"><h3><?= $data['0']->stadium_name ?></h3>
                <p><span class="glyphicon glyphicon-map-marker"></span>&nbsp<a href="">Bangkok</a>, <a href="#">Thailand</a></p> <p>
                <p> Phone number :     <?= $data['0']->tel != null ? $data['0']->tel : '-'; ?></p>

            </div>
            <div class="col-md-4 info">
                <div class="row">
                    <p><a style="margin-top: 55px" class="btn btn-primary btn-lg pull-right" role="button" href="<?= base_url() ?>booking/reserve/<?php echo $this->uri->segment(3); ?>">Book Now</a></p>
                </div>
            </div>
        </div>
    </div>

    <hr>

    <div class="container">
        <!--<h4> <a href="#">หน้าหลัก</a> / เพิ่มรายละเอียดสนาม</h4> -->
        <div class="row">
            <div class="col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Located</h3>
                    </div>
                    <div class="panel-body">
                        House no. :&nbsp;<?= $data['0']->address_no != null ? $data['0']->address_no : '-'; ?><br>

                        Alley :&nbsp;<?= $data['0']->soi != null ? $data['0']->soi : '-'; ?><br>
                        Road :&nbsp;<?= $data['0']->road != null ? $data['0']->road : '-'; ?><br>
                        District :&nbsp;<?= $data['0']->district != null ? $data['0']->district : '-'; ?><br>
                        Subdistrict :&nbsp;<?= $data['0']->subdistrict != null ? $data['0']->subdistrict : '-'; ?><br>
                        Province :&nbsp;<?= $data['0']->province != null ? $data['0']->province : '-'; ?> <br>
                        Zip code :&nbsp;<?= $data['0']->zipcode != null ? $data['0']->zipcode : '-'; ?> 
                    </div>
                </div>

                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Stadium Detail</h3>
                    </div>
                    <div class="panel-body">
                        Floor type : <?php if ($floor != NULL) { ?><?php foreach ($floor as $ct) { ?> <?= $ct->type ?> <?php } ?><?php } else { ?> - <?php } ?>   <br>
                        Total court: &nbsp;<?= $total->courtnum != 0 ? $total->courtnum : '-' ?><br>
                        Court price :&nbsp; 120-160 บาท<br>      

                        <?php foreach ($time as $ct) { ?> <?= $ct->type ?> : <?= $ct->open_time ?> - <?= $ct->end_time ?><br><?php } ?>
                    </div>
                </div>

                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Facility</h3>
                    </div>
                    <div class="panel-body">
                        <ul>
                            <?php foreach ($facility as $r) { //เรียกจาก $data['facility'] ?>
                                <li><?php echo $r['facility']; //ใช้ return เป็น result_array      ?></li>
                            <?php } ?>

                        </ul>
                    </div>
                </div>

                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Stadium coach</h3>
                    </div>
                    <div class="panel-body">
                        <ul>
                            <li>-</li>
                        </ul>
                    </div>
                </div>
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Owner</h3>
                    </div>
                    <div class="panel-body">
                        <p>
                            <span class="glyphicon glyphicon-user"></span> <?= $data['0']->fname ?>   <?= $data['0']->lname ?>
                        </p>
                        <p>
                            <span class="glyphicon glyphicon-phone"></span> <?= $data['0']->tel != null ? $data['0']->phone : '-'; ?>
                        </p>
                        <p>
                            Status <span class="label label-success"><span class="glyphicon glyphicon-ok"></span>&nbsp; <?= $data['0']->authenowner_status != null ? $data['0']->authenowner_status : '-'; ?></span>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-8"><div class="panel panel-default">
                    <div class="panel-body">
                        <h3>About my stadium</h3>
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;<?= $data['0']->about_stadium != null ? $data['0']->about_stadium : '-'; ?></p>

                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h3>Announcement</h3>
                        <ul>
                            <li><a href="#">Announcement 1</a></li>
                            <li><a href="#">Announcement 2</a></li>
                            <li><a href="#">Announcement 3</a></li>
                        </ul>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-body">
                        <h3>Gallery</h3>
                        <div class="row">
                            <div class="col-xs-6 col-md-3">
                                <a href="#" class="thumbnail">
                                    <img src="<?= base_url() ?>/asset/images/g.png" alt="...">
                                </a>
                            </div>
                            <div class="col-xs-6 col-md-3">
                                <a href="#" class="thumbnail">
                                    <img src="<?= base_url() ?>/asset/images/g.png" alt="...">
                                </a>
                            </div>
                            <div class="col-xs-6 col-md-3">
                                <a href="#" class="thumbnail">
                                    <img src="<?= base_url() ?>/asset/images/g.png" alt="...">
                                </a>
                            </div>
                            <div class="col-xs-6 col-md-3">
                                <a href="#" class="thumbnail">
                                    <img src="<?= base_url() ?>/asset/images/g.png" alt="...">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h3>Map</h3>
                        
                        <div id="map-canvas"></div> 
                        <div id="directions-panel"></div>

                        <button class="controls btn btn-primary" onclick="calcRoute()">Navigation</button>
                    </div>
                </div>


                <div class="panel panel-default">
                    <div class="panel-body">
                        <h3>Comment</h3>

                        <div class="scroll">
                            <div class="row">
                                <div class="pull-left">
                                    <img src="<?= base_url() ?>/asset/images/profile.jpg" class="imgcomment">
                                </div>
                                <div class="pull-left ">

                                    <img src="<?= base_url() ?>/asset/images/comment.png">
                                </div>
                            </div>
                            <div class="row" style="margin-top: 10px">
                                <div class="pull-left">
                                    <a href="user.html">   <img src="<?= base_url() ?>/asset/images/sporter.jpg" class="imgcomment"></a>
                                </div>
                                <div class="pull-left ">

                                    <img src="<?= base_url() ?>/asset/images/comment.png">
                                </div>
                            </div>
                            <div class="row" style="margin-top: 10px">
                                <div class="pull-left">
                                    <img src="<?= base_url() ?>/asset/images/profile-placeholder.png" class="imgcomment">
                                </div>
                                <div class="pull-left ">

                                    <img src="<?= base_url() ?>/asset/images/comment.png">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-10" style="margin-top: 15px">
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-2" style="margin-top: 15px">
                            <input type="submit" class="btn-success" value="send">    </div>

                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
<?php include 'template/modal.php'; ?>
<?php include 'template/footer.php'; ?>
<script>
    var map;
    var directionsDisplay;
    var directionsService = new google.maps.DirectionsService();
    var curlatlng;
    

    function initialize() {
        directionsDisplay = new google.maps.DirectionsRenderer();
        var myLatLng = new google.maps.LatLng(<?= $data['0']->lat ?>, <?= $data['0']->long ?>);
        var mapOptions = {
            zoom: 17,
            center: myLatLng
        };
        map = new google.maps.Map(document.getElementById('map-canvas'),
                mapOptions);
        var marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
        });
        var contentString = '<?= $data['0']->stadium_name ?>';
        var infowindow = new google.maps.InfoWindow({
            content: contentString
        });
        google.maps.event.addListener(marker, 'click', function () {
            infowindow.open(map, marker);
        });
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function (position) {
                var pos = new google.maps.LatLng(position.coords.latitude,
                        position.coords.longitude);
                curlatlng = pos;

            }, function () {
                handleNoGeolocation(true);
            });
        } else {
            // Browser doesn't support Geolocation
            handleNoGeolocation(false);
        }

        directionsDisplay.setMap(map);
        directionsDisplay.setPanel(document.getElementById('directions-panel'));

       

    }
    function calcRoute() {


        console.log(curlatlng);
        var start = curlatlng;
        var end = new google.maps.LatLng(<?= $data['0']->lat ?>, <?= $data['0']->long ?>);
        var request = {
            origin: start,
            destination: end,
            travelMode: google.maps.TravelMode.DRIVING
        };
        directionsService.route(request, function (response, status) {
            if (status == google.maps.DirectionsStatus.OK) {
                directionsDisplay.setDirections(response);
            }
        });
    }

    google.maps.event.addDomListener(window, 'load', initialize);
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
</script>



<?php include 'template/footer_scrpit.php'; ?>

</body>
</html>