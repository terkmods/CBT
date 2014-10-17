<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<?php
include 'template/head.php';
$num = 1;
//print_r($data);
?>

<div class="container">
    <h4> <a href="#"></a> Manage Stadium <font style="color: green"><?php echo $this->session->flashdata('msg'); ?></font></h4> 
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">Account Settings </div>
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
                    <div class="col-md-9">
                        <div class="row" id="changeja">
                            <ul class="nav nav-tabs" id="myTab">

                                <li class="active"><a href="#p1">Basic Info</a></li>
                                <li ><a href="#addcourt">Add court</a></li>

                                <li><a href="#p2">Add coach</a></li>
                                <li><a href="#p3">Blacklist</a></li>
                                <li><a href="#p4">announcement</a></li>
                                <li><a href="#p6">Add picture</a></li>

                            </ul>
                            <div class="tab-content"  >

                                <?php include 'Tabeditstadium/setting.php'; ?> <!--tab P1-->
                                <?php include 'Tabeditstadium/blacklist.php'; ?> <!--tab P2-->
                                <?php include 'Tabeditstadium/coachfav.php'; ?> <!--tab P3-->
                                <?php include 'Tabeditstadium/addcourt.php'; ?> <!--tab P3-->
                                <?php include 'Tabeditstadium/mycourt.php'; ?> <!--tab P3-->
                                <?php include 'Tabeditstadium/rule.php'; ?> <!--tab P3-->
                            </div>

                            <div style="clear:both; margin-top:20px;"></div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'template/modal.php'; ?>

<div id="notija" style="display:none">
    <!-- 
    Later on, you can choose which template to use by referring to the 
    ID assigned to each template.  Alternatively, you could refer
    to each template by index, so in this example, "basic-tempate" is
    index 0 and "advanced-template" is index 1.
    -->
    <div id="basic-template">
        <a class="ui-notify-cross ui-notify-close " href="#">x</a>
        <h1>#{title}</h1>
        <p>#{text}</p>
    </div>

    <div id="advanced-template">
        <!-- ... you get the idea ... -->
    </div>
</div>

<?php include 'template/footer.php'; ?>
<script src="<?= base_url() ?>asset/js/jquery.notify.js" type="text/javascript"></script>
        <!-- The template to display files available for upload -->
        <script id="template-upload" type="text/x-tmpl">
            {% for (var i=0, file; file=o.files[i]; i++) { %}
            <tr class="template-upload fade">
            <td>
            <span class="preview"></span>
            </td>
            <td>
            <p class="name">{%=file.name%}</p>
            <strong class="error text-danger"></strong>
            </td>
            <td>
            <p class="size">Processing...</p>
            <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"><div class="progress-bar progress-bar-success" style="width:0%;"></div></div>
            </td>
            <td>
            {% if (!i && !o.options.autoUpload) { %}
            <button class="btn btn-primary start" disabled>
            <i class="glyphicon glyphicon-upload"></i>
            <span>Start</span>
            </button>
            {% } %}
            {% if (!i) { %}
            <button class="btn btn-warning cancel">
            <i class="glyphicon glyphicon-ban-circle"></i>
            <span>Cancel</span>
            </button>
            {% } %}
            </td>
            </tr>
            {% } %}
        </script>
        <!-- The template to display files available for download -->
        <script id="template-download" type="text/x-tmpl">
            {% for (var i=0, file; file=o.files[i]; i++) { %}
            <tr class="template-download fade">
            <td>
            <span class="preview">
            {% if (file.thumbnailUrl) { %}
            <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery><img src="{%=file.thumbnailUrl%}"></a>
            {% } %}
            </span>
            </td>
            <td>
            <p class="name">
            {% if (file.url) { %}
            <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnailUrl?'data-gallery':''%}>{%=file.name%}</a>
            {% } else { %}
            <span>{%=file.name%}</span>
            {% } %}
            </p>
            {% if (file.error) { %}
            <div><span class="label label-danger">Error</span> {%=file.error%}</div>
            {% } %}
            </td>
            <td>
            <span class="size">{%=o.formatFileSize(file.size)%}</span>
            </td>
            <td>
            {% if (file.deleteUrl) { %}
            <button class="btn btn-danger delete" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}"{% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}'{% } %}>
            <i class="glyphicon glyphicon-trash"></i>
            <span>Delete</span>
            </button>
            <input type="checkbox" name="delete" value="1" class="toggle">
            {% } else { %}
            <button class="btn btn-warning cancel">
            <i class="glyphicon glyphicon-ban-circle"></i>
            <span>Cancel</span>
            </button>
            {% } %}
            </td>
            </tr>
            {% } %}
        </script>
<script>
    var states;
    function keynaja() {
        var fullpart = "http://cbt.backeyefinder.in.th/coach/get_coach_name";
        var a = document.getElementById("test").value;
        console.log(a);
        $.ajax({
            type: "post",
            url: fullpart,
            data: {term: a}
        }).done(function (msg) {
            states = null
            console.log(msg);
            states = msg;
            console.log(msg[0].name);
        });
    }

    $(document).ready(function () {

        var substringMatcher = function (strs) {
            return function findMatches(q, cb) {
                var matches, substrRegex;

                // an array that will be populated with substring matches
                matches = [];

                // regex used to determine if a string contains the substring `q`
                substrRegex = new RegExp(q, 'i');

                // iterate through the pool of strings and for any string that
                // contains the substring `q`, add it to the `matches` array
                $.each(strs, function (i, str) {
                    if (substrRegex.test(str)) {
                        // the typeahead jQuery plugin expects suggestions to a
                        // JavaScript object, refer to typeahead docs for more info
                        matches.push({value: str});
                    }
                });

                cb(matches);
            };
        };

//    

        $('#the-basics .typeahead').typeahead({
            hint: true,
            highlight: true,
            minLength: 1
        },
        {
            name: 'statess',
            displayKey: 'value',
            source: substringMatcher(statess)
        });
    });
</script>
<script type="text/javascript">
    var centreGot = false;
</script>
<script>
    var geocoder;
    var map;
    var marker;
    var placesService;
    var placesAutocomplete;

    function initialize() {
        geocoder = new google.maps.Geocoder();
        var check = " <?= $data->lat ?>";
        console.log(check);

        var latlng = new google.maps.LatLng((check != ' ' ? '<?= $data->lat ?>' : '13.7500'), (check != ' ' ? '<?= $data->long ?>' : '100.4833'));
        var mapOptions = {
            zoom: 10,
            center: latlng
        }
        map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
        if (check != ' ') {
            map.setZoom(17);
            ;
            var marker = new google.maps.Marker({
                position: latlng,
                map: map,
                draggable: true

            });
            google.maps.event.addListener(marker, 'dragend', function (event) {

                x = event.latLng.lat();
                y = event.latLng.lng();
                updateDatabase(x, y);
                console.log(x);
                console.log(y);
            });
        }
        var autocompleteOptions = {
        }
        var autocompleteInput = document.getElementById('address');

        placesAutocomplete = new google.maps.places.Autocomplete(autocompleteInput, autocompleteOptions);
        placesAutocomplete.bindTo('bounds', map);

        google.maps.event.addListener(placesAutocomplete, 'place_changed', function () {
            codeAddress();
        });


    }



    function codeAddress() {
        var address = document.getElementById('address').value;
        geocoder.geocode({'address': address}, function (results, status, event) {
            if (status == google.maps.GeocoderStatus.OK) {
                map.setCenter(results[0].geometry.location);
                map.setZoom(17);
                if (marker != null)
                    marker.setMap(null);
                marker = new google.maps.Marker({
                    map: map,
                    position: results[0].geometry.location,
                    animation: google.maps.Animation.DROP,
                    draggable: true
                });
                console.log(marker.getPosition());
                console.log(marker.getPosition().k);
                updateDatabase(marker.getPosition().k, marker.getPosition().B);
                google.maps.event.addListener(marker, 'dragend', function (event) {

                    x = event.latLng.lat();
                    y = event.latLng.lng();
                    updateDatabase(x, y);
                    console.log(x);
                    console.log(y);
                });
            } else {
                alert('Geocode was not successful for the following reason: ' + status);
            }
        });
    }
    function updateDatabase(newLat, newLng)
    {
        var fullpart = "http://cbt.backeyefinder.in.th/stadium/updateLatLng/<?php echo $this->uri->segment(3); ?>";

        $.ajax({
            type: "post",
            url: fullpart,
            data: {newLat: newLat, newLng: newLng}
        }).done(function (msg) {

            console.log(msg);
            $("#notija").notify({
                speed: 500,
            });
            $("#notija").notify("create", {
                title: 'Update Complete',
                text: 'Lat Lng  this Stadium is Change '
            });
        });


    }

    google.maps.event.addDomListener(window, 'load', initialize);


</script>


<?php include 'template/footer_scrpit.php'; ?>

</body>
</html>