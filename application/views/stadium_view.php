
<?php include 'template/head.php';
?>
<link href="<?= base_url() ?>asset/css/star-rating.css" media="all" rel="stylesheet" type="text/css"/>


    <div class="container ">
        <div class="row well">
            <div class="col-md-4 profile-pic">
                    <img src="<?= base_url() ?>/asset/images/<?= $data['0']->stadium_path != null ? 'stadiumpic/' . $data['0']->stadium_path : 'bad.png' ?>" width="200" class="img-thumbnail" style="margin-left: 30px; margin-top: 10px">
                </div>
            <div class="col-md-3 info" style="margin-left: -20px; margin-top: -40px"><h3><?= $data['0']->stadium_name ?></h3>
                    <p><span class="glyphicon glyphicon-map-marker"></span>&nbsp<a href="">Bangkok</a>, <a href="#">Thailand</a></p> <p>
                    <p> Phone number :<?= $data['0']->tel != null ? $data['0']->tel : '-'; ?></p>
                    <p style="margin-top: 65px"><a  class="btn btn-primary btn-lg " role="button" href="<?= base_url() ?>booking/reserve/<?php echo $this->uri->segment(3); ?>">Book Now</a></p>


                </div>
            <div class="col-md-4 info" style="margin-top: -30px">
                    <div class="row">
                        <div class="col-md-7">  
                            <div id="well-rating">
                                <dl>
                                    <h4 class="text-center">ให้คะแนน</h4>
                                    <dt>ความสะอาด</dt>
                                    <input id="input-21e" value="0" type="number" class="rating" min=0 max=5 step=0.5 data-size="xs"  >
                                </dl>
                                <dl>
                                    <dt>บริการ</dt>
                                    <input id="input-21e" value="0" type="number" class="rating" min=0 max=5 step=0.5 data-size="xs"  >
                                </dl>
                                <dl>
                                    <dt>สถานที่</dt>
                                    <input id="input-21e" value="0" type="number" class="rating" min=0 max=5 step=0.5 data-size="xs"  >
                                </dl>
                            </div>
                        </div>
                        <div class="col-md-4">  
                            <div id="well-rating">
                                <dl>
                                    <h4 class="text-center">คะแนนรวม</h4>
                                    <dt>ความสะอาด</dt>
                                    <dd>
                                        <div>
                                            <div class="rating-symbol fa fa-star text-primary"></div>
                                        </div>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>บริการ</dt>
                                </dl>
                                <dl>
                                    <dt>สถานที่</dt>
                                </dl>
                            </div>

                        </div>
                            
                    </div>
                </div>
            </div>
        
    </div>

    <hr>

    <div class="container" >
        <!--<h4> <a href="#">หน้าหลัก</a> / เพิ่มรายละเอียดสนาม</h4> -->
        <div class="row" style="margin-top: -30px">
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

                        <?php
                        $datestadium = array('Monday', 'Thuesday', 'Wednesday', 'Thuesday', 'Friday', 'Staturday', 'Sunday');
                        foreach ($time as $ct) {
                            ?> <?= $datestadium[($ct->type)] ?> : <?= $ct->open_time ?> - <?= $ct->end_time ?><br><?php } ?>
                    </div>
                </div>

                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Facility</h3>
                    </div>
                    <div class="panel-body">
                        <ul>
                            <?php
                            $fa = array('Parking', 'Food', 'Bathroom', 'Lockerroom', 'Shop');
                            foreach ($facility as $r) { //เรียกจาก $data['facility'] 
                                ?>
                                <li><?php echo $fa[($r['facility'])]; //ใช้ return เป็น result_array                 ?></li>
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
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h3>Map</h3>

                        <div id="map-canvas"></div> 
                        <div id="directions-panel"></div>

                        <button class="controls btn btn-primary" onclick="calcRoute()">Navigation</button>
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
                        <div class="col-md-6">
                            <div class="list-group">
                                <?php $o = 0 ?>
                                <?php foreach ($annouc as $a) { ?>
                                    <?php $o +=1 ?>
                                    <div class="list-group-item">
                                        <div class="row-action-primary">
                                            <img class="circle" src="<?= base_url() ?>asset/images/<?= $a->type == 1 ? 'AN_icon1.png' : 'AN_icon.png' ?>" alt="icon">
                                        </div>
                                        <div class="row-content">
                                            <div class="action-secondary"><span class="label <?= $a->type == 1 ? 'label-danger' : 'label-success' ?>"><?= $a->type == 1 ? 'Promotion' : 'News' ?></span></div>
                                            <h4 class="list-group-item-heading"><?= $a->title ?></h4>
                                            <p class="list-group-item-text"><?= $a->an_date ?></p>
                                        </div>
                                    </div>
                                    <div class="list-group-separator"></div>
                                    <?php
                                    if ($o == 5) {
                                        echo '</div></div><div class="col-md-6"><div class="list-group">';
                                        $o = 0;
                                    }
                                    ?>
                                <?php } ?>

                            </div>



                        </div>
                        <?php echo $this->pagination->create_links(); ?>
                    </div>


                </div>

                <div class="panel panel-default">
                    <div class="panel-body">
                        <h3>Gallery</h3>
                        <div class="row">
                            <?php if ($img != null) { ?>
                                <ul id="myGallery">
                                    <?php foreach ($img as $i) { ?>
                                        <li><img src="<?= base_url() ?>asset/images/upload/<?= $i->picstadium_path ?>"   >
                                        <?php } ?>
                                </ul>
                            <?php } else { ?>
                                <p class="text-danger" style="text-align : center"> No gallery </p>
                            <?php } ?>
                        </div>

                    </div>



                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h3>Comment</h3>


                            <div class="scroll">
                                <!--
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
                                                                                            </div>-->




                                <span id="comeentindex"></span>
                            </div>
                            <form method="post" id="formcomment" >
                                <div class="col-md-10" style="margin-top: 15px">
                                    <!--<input type="text" class="form-control" name="textcomment">-->
                                    <textarea placeholder="comment here." class="form-control" required name="content" id="content"></textarea>
                                </div>
                                <div class="col-md-2" style="margin-top: 15px">
                                    <input type="button" class="btn-success controls btn" value="send" id="addcomment" >    </div>
                            </form>
                        </div>
                    </div>


                </div>

            </div>
            <input type="hidden" id="stadiumidja" value="<?= $this->uri->segment(3) ?>">
        </div>
    </div>
    <?php include 'template/modal.php'; ?>
    <?php include 'template/footer.php'; ?>

    <script src="<?= base_url() ?>asset/js/star-rating.js" type="text/javascript"></script>
    <script type="text/javascript">
                            $(function() {
                                $("#input-rating").rating({showCaption: false});
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
                                    panel_width: 750


                                });
                            });
    </script>
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
            google.maps.event.addListener(marker, 'click', function() {
                infowindow.open(map, marker);
            });
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    var pos = new google.maps.LatLng(position.coords.latitude,
                            position.coords.longitude);
                    curlatlng = pos;

                }, function() {
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
            directionsService.route(request, function(response, status) {
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
    <script>
        var st_id = $("#stadiumidja").val();

        function showComment() {
            $(".nocom").remove();
            $.getJSON("http://cbt.backeyefinder.in.th/stadium/showcomment/" + st_id, function(data) {
                $(".nonja").remove();

                if (data.length != 0) {

                    console.log(data);
                    $(data).each(function(k, v) {
                        console.log(v.comment_id);
                        html = '                            <div class="bubble-list nonja">' +
                                '  <div class="bubble clearfix">' +
                                '      <img src="http://cbt.backeyefinder.in.th/asset/images/profilepic/' + v.profilepic_path + '">' +
                                '      <div class="bubble-content">' +
                                '          <div class="point"></div>' +
                                '           <p>' + v.text + '</p>' +
                                '<small>By : ' + v.fname + ' ' + v.lname + '</small>' +
                                '<small>' + v.date + '</small>' +
                                '        </div>' +
                                '    </div>' +
                                ' </div>';
                        $(html).insertBefore($("#comeentindex"));


                    });
                } else {
                    //                nocomment = '<div clas="col-md-12 nocom" style="text-align: center;">No comment</div>';
                    //                $(nocomment).insertBefore($("#comeentindex"));
                }
            });
        }




        $(function() {

            showComment();
            //        var aTable = $('#AllAnnounce').dataTable({
            //            /* Disable initial sort */
            //            "aaSorting": [],
            //            "bLengthChange": false,
            //            "bFilter": true,
            //            "bInfo": false,
            //            "bSort": false
            //        });
            //        
            ////        var sData = aTable.fnGetData();
            ////        if (sData.length == 0) {
            ////            var html = '<h1 class="text-muted" style="text-align: center" id="noann">No announement.</h1>';
            ////            $("#AllAnnounce_wrapper table tbody").html(html);
            ////        }
            $("#addcomment").click(function() {

                var content = $("#content").val();
                if (content.length > 0) {
                    $.ajax({
                        type: "POST",
                        url: "http://cbt.backeyefinder.in.th/stadium/addcomment/" + st_id,
                        data: {content: content}
                    }).done(function(msg) {
                        //                    if($("#noann").length!=0){
                        //                        $("#noann").remove();
                        //                    }
                        //                    var html = '<tr class="even"><td><div class="media" id="newAnnounce"><a class="pull-left" href="#"><img class="img-circle" width="64" src="' + pic + '"></a><div class="media-body"><h4 class="media-heading"><small class="text-muted">' + fullname + '</small><small class="pull-right">' + dateSt + '</small></h4><p>' + $("#content").val() + '</p></div></div></td></tr>';
                        //                    $("#listAnnounce table tbody").prepend(html);
                        //                    $("#newAnnounce").slideDown().removeAttr("id");
                        //                    $("#title").val("");
                        //                    $("#content").val("");
                        //                    //aTable.fnDraw();
                        console.log(msg);
                        $("#content").val("");
                        showComment();
                    });
                }
                else {
                    alert("Please write something in text box!");
                    $("#content").focus();
                }
            });
            var pic = '${ac.profile_pic}';
            var fullname = '${ac.firstname}' + '${ac.lastname}';
            var d = new Date();
            var dateSt = d.getFullYear() + "-" + ('0' + (d.getMonth() + 1)).slice(-2) + "-" + ('0' + d.getDate()).slice(-2) + " " + d.getHours() + ":" + d.getMinutes() + ":" + d.getMilliseconds();
            $("#newannounce").click(function() {
                $(this).hide();
                $("#formAddAnnouce").slideDown();
            });

        });

    </script>




    <?php include 'template/footer_scrpit.php'; ?>

</body>
</html>
