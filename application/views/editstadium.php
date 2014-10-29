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


                        
<div class="col-md-3 ">
    <ul class="nav nav-pills nav-stacked" >  
        <?php if($this->session->userdata('role') == "owner"){ ?>
        <li><a href="<?php echo base_url() ?>users/edituser/<?php echo $this->session->userdata('id'); ?>">Basic Setting</a>
        </li>
        <li>
            <a href="<?= base_url() ?>stadium">Manage stadium </a>           
        </li>
        
        <li class="active">
            <a  href="<?= base_url() ?>stadium/updatestadium/<?=$this->uri->segment(3)?>" >&nbsp;&nbsp;&nbsp;Basic Infomation </a>           
        </li>
                <li >
            <a href="<?= base_url() ?>stadium/facility/<?=$this->uri->segment(3)?>">&nbsp;&nbsp;&nbsp;Facility </a>           
        </li>
        <li >
            <a href="<?= base_url() ?>stadium/coach/<?=$this->uri->segment(3)?>">&nbsp;&nbsp;&nbsp;Coach </a>           
        </li>
        <li >
            <a href="<?= base_url() ?>stadium/blacklist/<?=$this->uri->segment(3)?>">&nbsp;&nbsp;&nbsp;Blacklist </a>           
        </li>
        <li>
            <a href="<?= base_url() ?>stadium/announcement/<?=$this->uri->segment(3)?>">&nbsp;&nbsp;&nbsp;Announcement</a>
        </li>
        <li >
            <a href="<?= base_url() ?>stadium/gallery/<?=$this->uri->segment(3)?>">&nbsp;&nbsp;&nbsp;Gallery </a>           
        </li>
        
        
        <li><a href="<?= base_url() ?>stadium/historyBooking">History Booking stadium </a></li>
        
            <?php }?>
        
        
    </ul>  
</div>
                    <div class="col-md-9">
                        <div class="row" id="changeja">
                            <ul class="nav nav-tabs" id="myTab">

                                <li class="active"><a href="#p1">Basic Info</a></li>
                                <li ><a href="#addtime">Service Time</a></li>
                                <li ><a href="#addcourt">Add court</a></li>

                                
                                
                                
                                

                            </ul>
                            <div class="tab-content"  >

                                <?php include 'Tabeditstadium/setting.php'; ?> <!--tab P1-->
                                
                               
                                <?php include 'Tabeditstadium/addtime.php'; ?> <!--tab P3-->
                                <?php include 'Tabeditstadium/addcourt.php'; ?> <!--tab P3-->
                                <?php include 'Tabeditstadium/mycourt.php'; ?> <!--tab P3-->
                                
                              
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
<script type="text/javascript" language="javascript" src="<?php echo base_url() . 'module/DataTables/js/jquery.dataTables.js'; ?>"></script>
<script type="text/javascript" language="javascript" src="<?php echo base_url() . 'module/loadover/loadover.js'; ?>"></script>
<script type="text/javascript" src="<?php echo base_url() . 'asset/js/tinymce/tinymce.min.js'; ?>"></script>
<script>
    function getUrlVars()
{
    var vars = [], hash;
    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
    for(var i = 0; i < hashes.length; i++)
    {
        hash = hashes[i].split('=');
        vars.push(hash[0]);
        vars[hash[0]] = hash[1];
    }
    return vars;
}

    console.log(getUrlVars().type);
        if(getUrlVars().type == 1){
   
       
            $('#myTab li:eq(2) a').tab('show')
    }else if(getUrlVars().type == 4){
        
        
            $('#myTab li:eq(4) a').tab('show')
                        $("#notija").notify({
                speed: 500,
            });
            $("#notija").notify("create", {
                title: 'Add Complete',
                text: 'Addnoucment is complete '
            });
    }else if(getUrlVars().type == 5){
      
        
            $('#myTab li:eq(4) a').tab('show')
                        $("#notija").notify({
                speed: 500,
            });
            $("#notija").notify("create", {
                title: 'Delete Complete',
                text: 'News has been Delete '
            });
    }
    else if(getUrlVars().type == 'gallery'){
      
        
            $('#myTab li:eq(5) a').tab('show')
                        $("#notija").notify({
                speed: 500,
            });
            $("#notija").notify("create", {
                title: 'Add Complete',
                text: 'New picture has been added '
            });
    }
//    $("#input-id").fileinput();

// with plugin options
    $("#input-id").fileinput({ 'previewFileType': 'any', 'maxFileCount': 2});
    $("#input-20").fileinput({
        browseClass: "btn btn-primary btn-block",
        showCaption: false,
        showRemove: false,
        showUpload: false
    });
        $("#input-21").fileinput({
        browseClass: "btn btn-primary btn-block",
        showCaption: false,
        showRemove: false,
        showUpload: false
    });
</script>

<script>
//    var states;
//    function keynaja() {
//        var fullpart = "http://cbt.backeyefinder.in.th/coach/get_coach_name";
//        var a = document.getElementById("test").value;
//        console.log(a);
//        $.ajax({
//            type: "post",
//            url: fullpart,
//            data: {term: a}
//        }).done(function (msg) {
//            states = null
//            console.log(msg);
//            states = msg;
//            console.log(msg[0].name);
//        });
//    }

//    $(document).ready(function () {
//
//        var substringMatcher = function (strs) {
//            return function findMatches(q, cb) {
//                var matches, substrRegex;
//
//                // an array that will be populated with substring matches
//                matches = [];
//
//                // regex used to determine if a string contains the substring `q`
//                substrRegex = new RegExp(q, 'i');
//
//                // iterate through the pool of strings and for any string that
//                // contains the substring `q`, add it to the `matches` array
//                $.each(strs, function (i, str) {
//                    if (substrRegex.test(str)) {
//                        // the typeahead jQuery plugin expects suggestions to a
//                        // JavaScript object, refer to typeahead docs for more info
//                        matches.push({value: str});
//                    }
//                });
//
//                cb(matches);
//            };
//        };
//
////    
//
//        $('#the-basics .typeahead').typeahead({
//            hint: true,
//            highlight: true,
//            minLength: 1
//        },
//        {
//            name: 'statess',
//            displayKey: 'value',
//            source: substringMatcher(statess)
//        });
//    });
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

<script type="text/javascript">
    var newsPos = 10;
    var htmlNews;
    var mytable;
    var myarray ={
                "bPaginate": true,
                "bLengthChange": false,
                "bFilter": true,
                "bSort": true,
                "bInfo": true,
                "bAutoWidth": true,
                'iDisplayLength': 10
            };
    function showAddForm() {
//        alert("show");
        $('#addForm').show();
    }

    $(document).ready(function (e) {
        $('#addForm').hide();

        tinymce.init({
            selector: "textarea#em1",
            theme: "modern",
            skin: "light",
            height: 300,
            plugins: [
                "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table contextmenu directionality",
                "emoticons paste textcolor jbimages"
            ],
            toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | jbimages",
            toolbar2: "print preview media | forecolor backcolor emoticons",
            image_advtab: true
        });

        // แสดงช่อง caption เมื่อเลือก รูปแต่อันนี้ทำให้เมื่อคลิกแล้วแสดงช่องอย่างเดียว
        $('#ct').hide();
        $('#banner').click(function (e) {
            $('#ct').slideDown();
        });

        if ($('#news-table tbody tr').length >= 1) {
           mytable =  $('#news-table').dataTable({
                "bPaginate": true,
                "bLengthChange": false,
                "bFilter": true,
                "bSort": true,
                "bInfo": true,
                "bAutoWidth": true,
                'iDisplayLength': 10
            });
            append_button_news();
        }

        $('#news-table_previous,#news-table_next,.sorting').on('click', function () {
            append_button_news();
        });
    });

    function append_button_news() {
        $("#news-table tbody tr").each(function (index, element) {
            if (typeof $(this).find(".dynamic_td").html() == "undefined") {
                var id = $(this).attr("data-id");
                var custom_column = '<td class="dynamic_td"><a href="javascript:;" onClick="editNews(\'' + id + '\')">แก้ไข</a></td><td class="dynamic_td"><a href="javascript:;" onClick="deleteNews(\'' + id + '\')"><i class="glyphicon glyphicon-remove-circle"></i></a></td>';
                $(this).append(custom_column);
            }
        });

    }

    function submitNews() {
        if ($.trim($('input[name="news_title"]').val()).length == 0 || $.trim(tinyMCE.activeEditor.getContent()).length == 0) {
            alert('กรุณากรอกข้อมูลให้ครบถ้วน!');
            return false;
        }
        var val = $('form').serialize();
        val += '&news_content=' + encodeURIComponent(tinyMCE.activeEditor.getContent());
        $('#addForm').loadOverStart();
        

        
        
        $.getJSON('http://cbt.backeyefinder.in.th/news/submit_news', val, function (data) {
            htmlNews = ' ';
            $('#addForm').loadOverStop();
            console.log(data);
            console.log(data[0].news_id);
            if (data.length != 0) {
                //addNews();
                    
              
                mytable.fnDestroy();
                 $('#news-list').prepend(htmlNews); 
                mytable = $('#news-table').dataTable({
                "bPaginate": true,
                "bLengthChange": false,
                "bFilter": true,
                "bSort": true,
                "bInfo": true,
                "bAutoWidth": true,
                'iDisplayLength': 10
            });
               append_button_news();
                //mytable.fnAddData(myarray); 
              
             //   mytable.fnDraw();
            
                $('#addForm').hide();
                $('#news_title').val('');
                tinyMCE.activeEditor.setContent('');
            } else {
                alert('เกิดข้อผิดพลาด!');
            }
        });


        return false;
    }
    function showNewsData(rs){
         htmlNews =                         '<tr data-id="'+rs.news_id + '">'+
                            '<td>' +rs.news_id + '</td>'+
                             '<td>'+rs.title + '</td>'+
                             '<td>' + rs.an_date +'</td>'+
                            '</tr>';

    }

    function appendNews() {
        $('#loading').removeClass('hide');
        $.post('/admin/get_news', {start: newsPos}, function (msg) {
            $('#news-list').append(msg);
            $('#loading').addClass('hide');
        });
        newsPos += 10;
    }

    function deleteNews(id) {
        console.log(id);
         var c = confirm('คุณต้องการลบข่าวนี้จริงหรือไม่?');
        if (c) {
            $.post('<?=base_url()?>/news/delete_news', {id: id}, function (msg) {
                if (msg != 0) {
                    console.log('OK');
                    location.href = '<?=base_url()?>stadium/updatestadium/'+$('#st_id').val()+'?type=5';
                } else {
                    alert('เกิดข้อผิดพลาด!');
                }
            });
        }
    }

    function editNews(id) {
        location.href = '<?=base_url()?>news/editnews/'+id;
    }
    function submitUploadForm() {
        var fd = new FormData(document.getElementById("upload-form"));
        $.ajax({
            url: "apiimgup",
            type: "POST",
            data: fd,
            enctype: 'multipart/form-data',
            processData: false,
            contentType: false
        }).done(function (data) {
            var addImg = '<img src="' + data.toString() + '">';
            tinyMCE.execCommand('mceInsertContent', true, addImg);
            $('#upload-form').reset();
        });
        return false;
    }

</script>
<script>
    $(document).ready(function(){
    $('.checkboxmon').click(function(){
        if (this.checked) {
            $('#txtBoxmon').removeAttr("disabled");
            $('#txtBoxmon1').removeAttr("disabled");
          
        } else {
            $("#txtBoxmon").attr("disabled", true);
            $("#txtBoxmon1").attr("disabled", true);
           
        }
    });
    $('.checkboxtue').click(function(){
        if (this.checked) {
            $('#txtBoxtue').removeAttr("disabled");
            $('#txtBoxtue1').removeAttr("disabled");
          
        } else {
            $("#txtBoxtue").attr("disabled", true);
            $("#txtBoxtue1").attr("disabled", true);
           
        }
    });
    $('.checkboxwed').click(function(){
        if (this.checked) {
            $('#txtBoxwed').removeAttr("disabled");
            $('#txtBoxwed1').removeAttr("disabled");
          
        } else {
            $("#txtBoxwed").attr("disabled", true);
            $("#txtBoxwed1").attr("disabled", true);
           
        }
    });
    $('.checkboxthu').click(function(){
        if (this.checked) {
            $('#txtBoxthu').removeAttr("disabled");
            $('#txtBoxthu1').removeAttr("disabled");
          
        } else {
            $("#txtBoxthu").attr("disabled", true);
            $("#txtBoxthu1").attr("disabled", true);
           
        }
    });
    $('.checkboxfri').click(function(){
        if (this.checked) {
            $('#txtBoxfri').removeAttr("disabled");
            $('#txtBoxfri1').removeAttr("disabled");
          
        } else {
            $("#txtBoxfri").attr("disabled", true);
            $("#txtBoxfri1").attr("disabled", true);
           
        }
    });
    $('.checkboxsta').click(function(){
        if (this.checked) {
            $('#txtBoxsta').removeAttr("disabled");
            $('#txtBoxsta1').removeAttr("disabled");
          
        } else {
            $("#txtBoxsta").attr("disabled", true);
            $("#txtBoxsta1").attr("disabled", true);
           
        }
    });
    $('.checkboxsun').click(function(){
        if (this.checked) {
            $('#txtBoxsun').removeAttr("disabled");
            $('#txtBoxsun1').removeAttr("disabled");
          
        } else {
            $("#txtBoxsun").attr("disabled", true);
            $("#txtBoxsun1").attr("disabled", true);
           
        }
    });
});
    </script>


<?php include 'template/footer_scrpit.php'; ?>

</body>
</html>