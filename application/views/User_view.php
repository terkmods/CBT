<?php include 'template/head.php'; ?>
<div class="container">
    <div style="clear:both;"></div>

    <div class="container upper-profile well" style="margin-top: -5px">
        <div class="row" style="margin-top: 20px;margin-left: 5px">
            <div class="col-md-3" style="margin-left: 47px"><img src="<?= base_url() ?>/asset/images/profilepic/<?= $data['0']->profilepic_path; ?>" class="img-thumbnail"></div>
            <div class="col-md-8"><h3><?= $data['0']->fname; ?>&nbsp;<?= $data['0']->lname; ?></h3>
                <hr>
                <h3>About Me</h3>
            </div>


        </div>
        <div class="row" style="margin-top: 20px; margin-left: 5px">

            <div class="col-md-4" >
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">About</h3>
                    </div>
                    <div class="panel-body">
                        Gender :&nbsp;<?= $data['0']->gender; ?> <br>
                        Style :&nbsp;<?= $data['0']->Style; ?> <br>
                        Belong to :&nbsp;<?= $data['0']->club; ?> <br>
                        Address :&nbsp;<span class="glyphicon glyphicon-map-marker"></span><?= $data['0']->address; ?> <br> 
                    </div>
                </div>
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Contact info</h3>
                    </div>
                    <div class="panel-body">
                        <ul class="nav nav-pills">
                            <li><a href="http://www.facebook.com/<?= $data['0']->facebook; ?>"><img src="<?= base_url() ?>/asset/images/imagetest/fb.png"></a></li>
                            <li><a href="#"><img src="<?= base_url() ?>/asset/images/imagetest/twitter.png"></a></li>
                            <li><a href="#"><img src="<?= base_url() ?>/asset/images/imagetest/google+.png"></a></li>
                            <li><a href="#"><img src="<?= base_url() ?>/asset/images/imagetest/linkedin.png"></a></li>
                            <li><a href="#"><img src="<?= base_url() ?>/asset/images/imagetest/email.png"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title"><span class="glyphicon glyphicon-heart"> </span> Favorite Coach</h3>
                    </div>
                    <div class="panel-body">
                     
                                
                                    <img class="circle" src="http://lorempixel.com/56/56/people/1" alt="icon">
                                    <img class="circle" src="http://lorempixel.com/56/56/people/1" alt="icon">
                                    <img class="circle" src="http://lorempixel.com/56/56/people/1" alt="icon">
                                                                
                        
                    </div>
                </div>
            </div>
            <!--            <div class="col-md-3" >
                            <div class="panel panel-primary"> 
                                <div class="panel-heading">
                                    <h3 class="panel-title"><span class="glyphicon glyphicon-star"> </span> Favorite Stadium</h3>
                                </div>
                                <div class="panel-body">
                                    <ul class="nav nav-pills nav-stacked">
                                        <li><a href="#">Cs Stadium </a></li>
                                        <li><a href="#">Sanit Stadium </a></li>
                                        <li><a href="#">สนามแบดมินตัน ม.ท.บ.11 </a></li>
            
                                    </ul>
                                </div>
                            </div>
                        </div>-->
            
            <div class="col-md-4">
                
                <h4>Favorit Stadiums</h4>
                
                        <div class="list-group">
                            <?php foreach ($fav as $f) { ?>
                            <div class="list-group-item">
                                <div class="row-picture">
                                    <img class="circle" src="<?= base_url() ?>/asset/images/<?= $f->stadium_path != null ? 'stadiumpic/' . $f->stadium_path : 'bad.png' ?>" alt="icon">
                                </div>
                                <div class="row-content">
                                    <h4 class="list-group-item-heading"><a href="<?=base_url()?>stadium/profile/<?=$f->stadium_id?>"><?=$f->stadium_name?></a></h4>
                                    <p class="list-group-item-text"><?=$f->district?>,<?=$f->province?> </p>
                                     <p class="list-group-item-text">โทร : <?=$f->tel!=null ? $f->tel:'-'?> </p>
                                </div>
                            </div>
                            <div class="list-group-separator"></div>
                            <?php } ?>
                            
                        </div>
                    

        </div>
            <div class="col-md-4">
                <h4>Gallery</h4>
                        <div class="row">
                            <?php if ($img != null) { ?>
                                <ul id="myGallery">
                                    <?php foreach ($img as $i) { ?>
                                        <li><img src="<?= base_url() ?>asset/images/upload/<?= $i->picuser_path ?>"   >
                                        <?php } ?>
                                </ul>
                            <?php } else { ?>
                                <p class="text-danger" style="text-align : center"> No gallery </p>
                            <?php } ?>
                        </div>
            </div>
    </div>
</div>

</div>

<hr>
<div class="container">
    <div class="row">

        <div class="col-md-4">

        </div>

    </div>
</div>


<?php include 'template/footer.php'; ?>

<script type="text/javascript">
    var centreGot = false;
</script>
    <script type="text/javascript">
                            $(function() {
                                
                                $('#myGallery').galleryView({
                                    filmstrip_style: 'showall',
                                    filmstrip_position: 'bottom',
                                    frame_height: 32,
                                    frame_width: 50,
                                    transition_interval: 6000,
                                    autoplay: true,
                                    enable_overlays: true,
                                    pan_images: true,
                                    panel_animation: 'slide',
                                    panel_width: 350
                                });
                            });
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
                if (marker != null)
                    marker.setMap(null);
                marker = new google.maps.Marker({
                    map: map,
                    position: results[0].geometry.location,
                    animation: google.maps.Animation.DROP,
                    draggable: true
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