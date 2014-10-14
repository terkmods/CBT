<?php include 'template/head.php'; ?>
<div class="container">
    <div style="clear:both;"></div>

    <div id="cover">  
        <img src="<?= base_url() ?>/asset/images/profilepic/<?php
        if ($data['0']->cover_path != "") {
            echo '' . $data['0']->cover_path;
        } else {
            echo 'cover_new.jpg';
        }
        ?>" width="1280">
    </div>  
    <div class="container upper-profile">
        <div class="row">
            <div class="col-md-3 profile-pic"><img src="<?= base_url() ?>/asset/images/profilepic/<?= $data['0']->profilepic_path; ?>" class="img-thumbnail"></div>
            <div class="col-md-3 info"><h3><?= $data['0']->fname; ?>&nbsp;<?= $data['0']->lname; ?></h3>
                <p><span class="glyphicon glyphicon-map-marker"></span>&nbsp<a href=""><?= $data['0']->address; ?> </a></p>
            </div>
            <div class="col-md-4 info">

            </div>
        </div>
    </div>
    <hr>
    <div class="container">
        <!--<h4> <a href="#">หน้าหลัก</a> / เพิ่มรายละเอียดStadium</h4> -->
        <div class="row">
            <div class="col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Profile</h3>
                    </div>
                    <div class="panel-body">
                        Gender :&nbsp;<?= $data['0']->gender; ?> <br>
                        Style :&nbsp;<?= $data['0']->Style; ?> <br>
                        Belong to :&nbsp;<?= $data['0']->club; ?> <br>
                        Address :&nbsp;<?= $data['0']->address; ?> <br> 
                    </div>
                </div>
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Contact info</h3>
                    </div>
                    <div class="panel-body">
                        <ul class="nav nav-pills">
                            <li><a href="www.facebook.com/<?= $data['0']->facebook; ?>"><img src="<?= base_url() ?>/asset/images/imagetest/fb.png"></a></li>
                            <li><a href="#"><img src="<?= base_url() ?>/asset/images/imagetest/twitter.png"></a></li>
                            <li><a href="#"><img src="<?= base_url() ?>/asset/images/imagetest/google+.png"></a></li>
                            <li><a href="#"><img src="<?= base_url() ?>/asset/images/imagetest/linkedin.png"></a></li>
                            <li><a href="#"><img src="<?= base_url() ?>/asset/images/imagetest/email.png"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <h3>About Me</h3>
                <div class="panel panel-default">

                    <div class="panel-body">
                        <h4><?= $data['0']->aboutme; ?></h4>
                        
                        <form>
                            <input type="button" onclick="getLocation();" value="Get Location"/>
                        </form>
                        <div id="panel">
                            <input id="address" type="text" value="Sydney, NSW">
                            <input type="button" value="Geocode" onclick="codeAddress()">
                        </div>
                        <div id="map-canvas"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="container">
        <div class="row">

            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><span class="glyphicon glyphicon-star"> </span> Favorite Stadium</h3>
                    </div>
                    <div class="panel-body">
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">Stadium 1 </a></li>
                            <li><a href="#">Stadium 2 </a></li>
                            <li><a href="#">Stadium 3 </a></li>
                            <li><a href="#">Stadium 4 </a></li>
                            <li><a href="#">Stadium 5 </a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><span class="glyphicon glyphicon-heart"> </span> Favorite Coach</h3>
                    </div>
                    <div class="panel-body">
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">Coach 1 </a></li>
                            <li><a href="#">Coach 2 </a></li>
                            <li><a href="#">Coach 3 </a></li>
                            <li><a href="#">Coach 4 </a></li>
                            <li><a href="#">Coach 5 </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'template/footer.php'; ?>

<script type="text/javascript">
                                var centreGot = false;
</script>
<script>
    var geocoder;
    var map;
    var marker;

function initialize() {
  geocoder = new google.maps.Geocoder();
  
  var latlng = new google.maps.LatLng(13.7500, 100.4833);
  var mapOptions = {
    zoom: 10,
    center: latlng
  }
  map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
}

                
    function codeAddress() {
        var address = document.getElementById('address').value;
        geocoder.geocode({'address': address}, function (results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
                map.setCenter(results[0].geometry.location);
                if (marker!=null)marker.setMap(null);
                 marker = new google.maps.Marker({
                    map: map,
                    position: results[0].geometry.location,
                    animation: google.maps.Animation.DROP,
                    draggable:true
                });
            } else {
                alert('Geocode was not successful for the following reason: ' + status);
            }
        });
    }

    google.maps.event.addDomListener(window, 'load', initialize);

</script>


<!--<script type="text/javascript">
    function showLocation(position) {
        var latitude = position.coords.latitude;
        var longitude = position.coords.longitude;
        alert("Latitude : " + latitude + " Longitude: " + longitude);
    }

    function errorHandler(err) {
        if (err.code == 1) {
            alert("Error: Access is denied!");
        } else if (err.code == 2) {
            alert("Error: Position is unavailable!");
        }
    }
    function getLocation() {

        if (navigator.geolocation) {
// timeout at 60000 milliseconds (60 seconds)
            var options = {timeout: 60000};
            navigator.geolocation.getCurrentPosition(showLocation,
                    errorHandler,
                    options);
        } else {
            alert("Sorry, browser does not support geolocation!");
        }
    }
</script>-->

<?php include 'template/footer_scrpit.php'; ?>

</body>
</html>