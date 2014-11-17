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
    <h4> <a href="#"></a> <font style="color: green"><?php echo $this->session->flashdata('msg'); ?></font></h4> 
    <div class="row">
        <div class="panel panel-default"  style="margin-top: 20px">
            <div class="panel-heading">
            <ul class="breadcrumb" style="margin-bottom: 1px;">
                    
                <li><a href="<?= base_url() ?>stadium/managestadium">Manage Stadium</a></li>
                <li><a href="<?= base_url() ?>stadium/updatestadium/<?=$data->stadium_id ?>"><?=$data->stadium_name ?></a></li>
                    <li class="active">Facility</li>
                    
                        
                  
                        
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
            <a href="<?= base_url() ?>stadium/managestadium">Manage stadium </a>           
        </li>
        
        <li >
            <a  href="<?= base_url() ?>stadium/updatestadium/<?=$this->uri->segment(3)?>" >&nbsp;&nbsp;&nbsp;Basic Infomation </a>           
        </li>
                <li class="active">
            <a href="<?= base_url() ?>stadium/facility/<?=$this->uri->segment(3)?>">&nbsp;&nbsp;&nbsp;Facility </a>           
        </li>
        
       
        <li>
            <a href="<?= base_url() ?>stadium/announcement/<?=$this->uri->segment(3)?>">&nbsp;&nbsp;&nbsp;Announcement</a>
        </li>
        <li >
            <a href="<?= base_url() ?>stadium/gallery/<?=$this->uri->segment(3)?>">&nbsp;&nbsp;&nbsp;Gallery </a>           
        </li>
        
        <li ><a href="<?= base_url() ?>stadium/blacklist">Blacklist </a></li>
        <li><a href="<?= base_url() ?>stadium/historyBooking">History Booking stadium </a></li>
        <li ><a href="<?= base_url() ?>notification/mynotification">Notification</a></li>
        <li><a href="<?= base_url() ?>booking/historybooking">My Booking</a></li>
        
            <?php }?>
        
        
    </ul>  
</div>
                    <div class="col-md-9">
                        <div class="row" id="changeja">
                            <ul class="nav nav-tabs" id="myTab">

                                
                                
                                <li class="active"><a href="">Facility</a></li>

                            </ul>
                            <div class="tab-content"  >
                                
                               <form  method="post" role="form" action="<?= base_url() ?>stadium/updatefacility/<?= $this->uri->segment(3) ?>">
                               <table class="table table-striped table-hover ">
                                   <thead >
        <tr >
       
            <th style="text-align: center">Add</th>
            <th style="text-align: center">Facility Name</th>
            <th style="text-align: center">Quantity</th>
            
        </tr>
    </thead>
   
    <tbody style="text-align: center; ">
        
        <tr>
            
            <td>     <span class="checkbox">
                    <label>
                        <input type="checkbox" <?=$facility['0']['Parking']==0 ? '':'checked'?> name='c1' value="1"> 
                    </label>
                </span></td>
                <td style="vertical-align: middle">Parking</td>
                <td style="vertical-align: middle"> <label class="control-label"> </label><input  type="number" value="<?=$facility['0']['Parking_detail']?>" name="quan[]"> </td>

        </tr>
                <tr>
            
            <td>     <span class="checkbox">
                    <label>
                        <input type="checkbox" <?=$facility['0']['Food']==0 ? '':'checked'?> name='c2' value="1"> 
                    </label>
                </span></td>
                <td style="vertical-align: middle">Food</td>
                <td style="vertical-align: middle"> <label class="control-label"> </label><input  type="number" value="<?=$facility['0']['Food']?>" name="quan[]"> </td>
                
        </tr>
                <tr>
            
            <td>     <span class="checkbox">
                    <label>
                        <input type="checkbox" <?=$facility['0']['Bathroom']==0 ? '':'checked'?> name='c3' value="1"> 
                    </label>
                </span></td>
                <td style="vertical-align: middle">Bathroom</td>
                <td style="vertical-align: middle"> <label class="control-label"> </label><input  type="number" value="<?=$facility['0']['Bathroom']?>" name="quan[]"> </td>

        </tr>
                <tr>
            
            <td>     <span class="checkbox">
                    <label>
                        <input type="checkbox" <?=$facility['0']['Lockerroom']==0 ? '':'checked'?> name='c4' value="1"> 
                    </label>
                </span></td>
                <td style="vertical-align: middle">Racket string repair</td>
                <td style="vertical-align: middle"> <label class="control-label"> </label><input  type="number" value="<?=$facility['0']['Lockerroom']?>" name="quan[]"> </td>
                
        </tr>
         <tr>
            
            <td>     <span class="checkbox">
                    <label>
                        <input type="checkbox" <?=$facility['0']['Shop']==0 ? '':'checked'?> name='c5' value="1"> 
                    </label>
                </span></td>
                <td style="vertical-align: middle">Shop</td>
                <td style="vertical-align: middle"> <label class="control-label"> </label><input  type="number" value="<?=$facility['0']['Shop']?>" name=""> </td>
    
        </tr>
                 <tr>
            
            <td>     <span class="checkbox">
                    <label>
                        <input type="checkbox" <?=$facility['0']['other']==0 ? '':'checked'?> name='c6' value="1"> 
                    </label>
                </span></td>
                <td style="vertical-align: middle" >Other</td>
                <td style="vertical-align: middle"> <label class="control-label"> </label><input  type="text" value="<?=$facility['0']['other_detail']?>" placeholder="ex.fitness , name of facility" name="other"> </td>
    
        </tr>
        
        
        <tr>
            <td colspan="3"><input class="pull-right btn btn-info withripple" type="submit" value="Update"></td>
        </tr>
    </tbody>
    
    
  
</table>
                                </form>
<!--                                <div class="col-md-6 col-md-offset-2 well" >
                                <form class="form-horizontal" >
    <fieldset>
        <legend>Add Other Facility</legend>
        <div class="form-group">
            <label for="inputEmail" class="col-lg-2 control-label">Name</label>
            <div class="col-lg-10">
                <input type="text" class="form-control" id="namefacility" placeholder="">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword" class="col-lg-2 control-label">How many you have?</label>
            <div class="col-lg-10">
                <input type="number" class="form-control" id="addon" placeholder="">
                
            </div>
        </div>
        

        <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </fieldset>
</form>
                                </div>-->
      
                                
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








<script>
    function getUrlVars()
    {
        var vars = [], hash;
        var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
        for (var i = 0; i < hashes.length; i++)
        {
            hash = hashes[i].split('=');
            vars.push(hash[0]);
            vars[hash[0]] = hash[1];
        }
        return vars;
    }

    console.log(getUrlVars().type);
    if (getUrlVars().type == 'facility') {
        
         $("#notija").notify({
            speed: 500,
        });
        $("#notija").notify("create", {
            title: 'Update Complete',
            text: 'Facility is Updated '
        });
    }
    $(document).on("click", ".viewdetail", function () {
        
        
       
        var path = $(this).data("pic");
        console.log(path);
        
        document.getElementById("path").setAttribute("src", '<?= base_url() ?>asset/images/upload/'+path+'');

        
    });
</script>

<?php include 'template/footer_scrpit.php'; ?>

</body>
</html>