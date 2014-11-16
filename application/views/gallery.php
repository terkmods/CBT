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
    <h4> <a href="#"></a>  <font style="color: green"><?php echo $this->session->flashdata('msg'); ?></font></h4> 
    <div class="row">
        <div class="panel panel-default"  style="margin-top: 20px">
            <div class="panel-heading">
            <ul class="breadcrumb" style="margin-bottom: 1px;">
                    
                <li><a href="<?= base_url() ?>stadium/managestadium">Manage Stadium</a></li>
                <li><a href="<?= base_url() ?>stadium/updatestadium/<?=$data->stadium_id ?>"><?=$data->stadium_name ?></a></li>
                    <li class="active">Gallery</li>
                    
                        
                  
                        
                </ul>
            </div>
            <div class="panel-body">

                <div class="container">


                        
<div class="col-md-3 ">
    <ul class="nav nav-pills nav-stacked" >  
        <?php if($this->session->userdata('role') == "owner"){ ?>
        <li >
                                  <a href="<?= base_url() ?>stadium">DashBoard </a>           
                                </li>
        <li><a href="<?php echo base_url() ?>users/edituser/<?php echo $this->session->userdata('id'); ?>">Basic Setting</a>
        </li>
        <li>
            <a href="<?= base_url() ?>stadium/updatestadium/<?=$data->stadium_id ?>">Manage stadium </a>           
        </li>
        
        <li >
            <a  href="<?= base_url() ?>stadium/updatestadium/<?=$this->uri->segment(3)?>" >&nbsp;&nbsp;&nbsp;Basic Infomation </a>           
        </li>
        
        <li >
                                    <a href="<?= base_url() ?>stadium/facility/<?= $this->uri->segment(3) ?>">&nbsp;&nbsp;&nbsp;Facility </a>           
                                </li>
        
        <li>
            <a href="<?= base_url() ?>stadium/announcement/<?=$this->uri->segment(3)?>">&nbsp;&nbsp;&nbsp;Announcement</a>
        </li>
        <li class="active">
            <a href="<?= base_url() ?>stadium/gallery/<?=$this->uri->segment(3)?>">&nbsp;&nbsp;&nbsp;Gallery </a>           
        </li>
        
        <li><a href="<?= base_url() ?>stadium/historyBooking">History Booking stadium </a></li>
        <li><a href="<?= base_url() ?>booking/historybooking">My Booking</a></li>
        
            <?php }?>
        
        
    </ul>  
</div>
                    <div class="col-md-9">
                        <div class="row" id="changeja">
                            <ul class="nav nav-tabs" id="myTab">

                                
                                
                                <li class="active"><a href="<?= base_url() ?>stadium/gallery/<?=$this->uri->segment(3)?>">Add picture</a></li>

                            </ul>
                            <div class="tab-content"  >

                               
                                   <form id="uploadja"  method="post" enctype="multipart/form-data" action="<?= base_url() ?>stadium/uploadGallery/<?= $this->uri->segment(3) ?>">
        <input id="input-id" type="file" class="file"   name="userfile" required="">

    </form>




    <div class="row">

        <div class="col-md-12 ">
            <div class="btn-group">
                <?php foreach ($img as $i) { ?>
                    <a href="#">
                        <img src="<?= base_url() ?>asset/images/upload/<?= $i->picstadium_path ?>"  class="btn viewdetail" style="height :180px" data-toggle="modal" data-target="#view_pic" data-pic="<?= $i->picstadium_path ?>" >
                    </a>
                <?php } ?>
            </div>
        </div>


    </div>
                                
                            </div>

                            <div style="clear:both; margin-top:20px;"></div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal " id="view_pic" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content" style="background-color: #f5f5f5">
            <form id="addcontent" action="" method="post" enctype="multipart/form-data">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Picture </h4>
                </div>
                <div class="modal-body" style="background-color: white;padding-top:30px;">
                    <div class="row">
                        <div class="col-md-8 img-responsive" style="text-align: center;margin-bottom: 30px;margin-left: 5px" >
                            <img id="path"  src="" class="img-thumbnail">
                        </div>
                        <div class="col-md-3 " >
                            <legend style="font-style: italic;text-align: left">Property</legend>
                            <div class="checkbox" style="margin-top: -15px">
                                <label style="margin-left: -25px">
                                    <input type="checkbox">slide show                          
                                </label>
                            </div>
                            <div class="checkbox" >
                                <label style="margin-left: -25px">
                                    <input type="checkbox">hide                         
                                </label>
                                
                            </div>
                            <a href="" class="btn btn-danger btn-xs">delete</a>
                        </div>
                    </div>
                </div>
                <div class="modal-footer" style="padding-bottom: 15px;margin-top: -10px">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

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
   
       
            $('#myTab li:eq(1) a').tab('show')
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
    $(document).on("click", ".viewdetail", function () {
        
        
       
        var path = $(this).data("pic");
        console.log(path);
        
        document.getElementById("path").setAttribute("src", '<?= base_url() ?>asset/images/upload/'+path+'');

        
    });
</script>

<?php include 'template/footer_scrpit.php'; ?>

</body>
</html>