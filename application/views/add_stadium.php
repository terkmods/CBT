
<?php
include 'template/head.php';
$num = 1;
$status = $ow->authenowner_status;
?>

<div class="container">
    <div class="row">
        <div class="panel panel-default"  style="margin-top: 20px">
            <div class="panel-heading">
            <ul class="breadcrumb" style="margin-bottom: 1px;">
                    
                <li><a href="<?= base_url() ?>stadium/managestadium">Manage Stadium</a></li>
                    
                        <li class="active">Add Stadium</li>
                  
                        
                </ul>
            </div>
            <div class="panel-body">

                <!--
                    <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Link</label>
                    <div class="col-sm-4 badge">
                      http://www.cbtonline.com/terkmods
                    </div>
                  </div>
                  <div style="clear:both; margin-top:20px;"></div>
                
                    <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-4">
                      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                    </div>
                  </div>
                  <div style="clear:both; margin-top:20px;"></div>
                
                   <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Password</label>
                    <div class="col-sm-4">
                      <input type="password" class="form-control" id="inputEmail3" placeholder="Password">
                    </div>
                  </div>
                    <div style="clear:both; margin-top:20px;"></div>
                
                   <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Language</label>
                    <div class="form-group">
                    <select class="col-sm-4">
                  <option>Thailand</option>
                  <option>English</option>
                </select></div>
                  </div>
                -->


                <div class="container">


                    <?php include 'template/sideSetting.php'; ?>




                    <div class="row">
<!--                        <select class="chosen-select" data-placeholder="เลือกภาค" id="pak" style="width: 150px; " name="pak">
                                    <option value="" selected="selected"></option><option value="1">ภาคเหนือ</option><option value="2">ภาคกลาง</option><option value="3">ภาคตะวันออกเฉียงเหนือ</option><option value="4">ภาคตะวันตก</option><option value="5">ภาคตะวันออก</option><option value="6">ภาคใต้</option>
                                </select>-->

                        <div class="col-md-8">
                            <form action="<?= base_url() ?>stadium/addstadium" method="post" >
                                <div class="modal-header">
                                    <h3 class="modal-title" id="myModalLabel">Add Stadium</h3>
                                </div>


                                <div class="col-xs-12" style="margin-top: 20px">
                                    <div class="col-md-6" style="margin-left: -17px">
                                        <small style="color: gray">Stadium Name*</small>
                                        <input type="text"  class="form-control input-lg " placeholder="NAME" name="name" required>
                                    </div>
                                    <div class="col-md-6">
                                        <small style="color: gray" >Phone number*</small>
                                        <input type="text" style="margin-top: -0px" class="form-control input-lg top-mar" placeholder="PHONE" name="tel" required>
                                    </div>

                                </div>
                                <div class="col-xs-12" style="margin-top: 10px">
                                    <div class="col-md-4" style="margin-left: -25px">
                                        <p class="form-control-static input-lg" style="margin-top:20px">www.cbtonline.com/stadium/</p>
                                    </div>

                                    <div class="col-md-7" style="margin-left: 17px">
                                        <small style="color: gray;margin-left: -249px">URL to link to your stadium*</small>
                                        <input type="text"  class="form-control input-lg " placeholder="URL" name="url" required>
                                    </div>
                                </div>

                                <div class="col-xs-12">
                                    <small style="color: gray">Stadium Detail</small>
                                    <textarea class="form-control" rows="5" name="about"></textarea>
                                </div>
                                <div class="col-xs-12" style="margin-top: 20px">
                                    <div class="col-md-5">

                                        <fieldset>
                                            <legend>Address</legend>
                                            
                                            
                                            <select class="form-control" id="select" name="province">
                                                <?php foreach ($province as $row) { ?>
                                                    <option><?= $row->PROVINCE_NAME ?></option>
                                                <?php } ?>
                                            </select>
                                            <small style="color: gray">province*</small>
                                            
                                            <select class="form-control" id="select" name="district" >
                                                <?php foreach ($kate as $row) { ?> 
                                                    <option><?= $row->AMPHUR_NAME ?></option>
                                                <?php } ?>
                                            </select>
                                            <small style="color: gray">district*</small>
                                            
                                            <select class="form-control" id="select" name="subdistrict" >
                                                <?php foreach ($kwang as $row) { ?> 
                                                    <option><?= $row->TUMBON_NAME ?></option>
                                                <?php } ?>
                                            </select>
                                            <small style="color: gray">subdistrict*</small>
                                            
                                            <input type="text" class=" form-control input-small top-mar " placeholder="Road" name="road" required>
                                            <small style="color: gray">road*</small>
                                            
                                             <input type="text" class=" form-control input-small top-mar " placeholder="Soi" name="soi" required>
                                            <small style="color: gray">soi*</small>
                                            
                                            <input type="text" class=" form-control input-small " placeholder="No." name="no" required>
                                            <small style="color: gray">house no.*</small>
                                            
                                            <input type="text" class=" form-control input-small top-mar" placeholder="ZIP CODE" name="zip" required>
                                            <small style="color: gray">zip code*</small>
                                            
                                            
                                            
                                            
                                            
                                           
                                            
                                            
                                            
                                            
                                            
                                            
                                        </fieldset>

                                    </div>
                                    <div class="col-md-offset-5">
                                        <div class="col-md-12">
                                            <fieldset>
                                                <legend>Rule</legend>

                                                <textarea class="form-control" rows="5" name="rule"></textarea>




                                            </fieldset>
                                        </div>
                                        <div class="col-md-12" style="padding-top: 20px">

                                            Pin on the map to located your stadium


                                            <input id="address" type="text"   placeholder="Enter a location">



                                            <div id="map-canvas" ></div> 
                                        </div>

                                    </div>
                                </div>






                                <div class="modal-footer" >
                                    <!--                                    <button type="button" class="btn btn-default" data-dismiss="modal">cancel</button>-->
                                    <button type="submit" name="submit" class="btn btn-primary">Add</button>


                                </div>
                                <input type="hidden" id="lat" name="lat" >
                                <input type="hidden" id="lng" name="lng" >
                            </form>



                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'template/modal.php'; ?>
<?php include 'template/footer.php'; ?>
<script>



    $('#pak').change(function () { // เมื่อไอดี pak ถูกเลือก
        var value = $("#pak").val(); // เราก็จะดึงค่ามา

        $.ajax({// จากนั้นก็สร้าง ajax
            type: 'GET', // ชนิดของ http เป็น get
            url: "/province", // url ที่จะยิงไป
            data: {id: value}, // ค่าที่จะส่งไป 
            success: function (data) { // ถ้าสำเร็จ

                $('#province').find('option') // ทำการค้นหา ตัว option ของ dropdown province
                        .remove() // ลบ option ทิ้ง
                        .end() // ใช้ reset กลับไปตอนที่ยังไม่ลบ option ครับ 
                        .append(data) // เอาค่าที่ได้จาก ฐานข้อมูลใส่
                        .trigger('chosen:updated'); // สั่งให้ chosen อัพเดท dropdown

            }
        });
    });
</script>


<script>
    var geocoder;
    var map;
    var mk;
    var placesService;
    var placesAutocomplete;



    function initialize() {
        geocoder = new google.maps.Geocoder();


        var latlng = new google.maps.LatLng(13.7500, 100.4833);
        var mapOptions = {
            zoom: 12,
            center: latlng
        }
        map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

        var autocompleteOptions = {
        }
        var autocompleteInput = document.getElementById('address');

        placesAutocomplete = new google.maps.places.Autocomplete(autocompleteInput, autocompleteOptions);
        placesAutocomplete.bindTo('bounds', map);
        google.maps.event.addListener(map, "click", function (event) {
            if (mk != null)
                mk.setMap(null);
            mk = new google.maps.Marker({position: event.latLng, map: map, draggable: true, animation: google.maps.Animation.DROP});
            x = event.latLng.lat();
            y = event.latLng.lng();
            console.log(x + ',' + y);
            $('#lat').val(x);
            $('#lng').val(y);
            google.maps.event.addListener(mk, 'dragend', function (event) {

                x = event.latLng.lat();
                y = event.latLng.lng();
//                    updateDatabase(x, y);
                console.log(x);
                console.log(y);
                $('#lat').val(x);
                $('#lng').val(y);
            });
        });

        google.maps.event.addListener(placesAutocomplete, 'place_changed', function () {
            if (mk != null)
                mk.setMap(null);
            codeAddress();
        });




    }



    function codeAddress() {
        var address = document.getElementById('address').value;
        geocoder.geocode({'address': address}, function (results, status, event) {
            if (status == google.maps.GeocoderStatus.OK) {
                map.setCenter(results[0].geometry.location);
                map.setZoom(17);
                if (mk != null)
                    mk.setMap(null);
                mk = new google.maps.Marker({
                    map: map,
                    position: results[0].geometry.location,
                    animation: google.maps.Animation.DROP,
                    draggable: true
                });
                console.log(mk.getPosition());
                console.log(mk.getPosition().k);
//                updateDatabase(mk.getPosition().k, mk.getPosition().B);
                google.maps.event.addListener(mk, 'dragend', function (event) {

                    x = event.latLng.lat();
                    y = event.latLng.lng();
//                    updateDatabase(x, y);
                    console.log(x);
                    console.log(y);
                    $('#lat').val(x);
                    $('#lng').val(y);
                });
            } else {
                alert('Geocode was not successful for the following reason: ' + status);
            }
        });
    }


    google.maps.event.addDomListener(window, 'load', initialize);


</script>
<?php include 'template/footer_scrpit.php'; ?>
</body>
</html>