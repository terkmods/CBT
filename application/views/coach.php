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
        
        <li >
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
                                <li class="active"><a href="<?= base_url() ?>stadium/coach/<?=$this->uri->segment(3)?>">Coach</a></li>
                            </ul>
                            <div class="tab-content"  >

                                <div class="col-md-6 col-md-offset-3 well">
<form >
            <input type="text" class="form-control col-lg-8" placeholder="Search">
            <a  class="form-control btn btn-default" onclick="showAdsearch(this)">Advance Search</a>  
            <div id="advancefun">
 <div class="checkbox ">
                    <label>
                        <input type="checkbox"> ประสบการสอน               <select class="controls" id="select">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
                    </label>
                    <label>
                        <input type="checkbox"> รางวัล 
                    </label>
                </div>
</div>
        </form>
    </div>
                                 
    <div class="row text-center">
        
        <?php foreach ($coach as $r) { ?>


 }
        <div class="col-lg-4">
            <a href="coach.html"> <img class="img-circle" data-src="holder.js/140x140" alt="140x140" src="<?=base_url()?>asset<?=$r->profilepic_path != null ? '/images/profilepic/'.$r->profilepic_path.'' : '/images/profil.jpg'?>" style="width: 140px; height: 140px;"></a>
            <h2><?=$r->fname?>  <?=$r->lname?></h2>


            <p><a class="btn btn-default" href="#" role="button">Stadium coach <span class="glyphicon glyphicon-ok"></span></a></p>
        </div><!-- /.col-lg-4 -->
        <?php }?>
       
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



<script type="text/javascript">
    var centreGot = false;

</script>
<script>
    $(document).ready(function (e) {
        $('#advancefun').hide();
    });
        function showAdsearch() {
//        alert("show");
        $('#advancefun').toggle();
    
    }
    </script>
    




<?php include 'template/footer_scrpit.php'; ?>

</body>
</html><?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
