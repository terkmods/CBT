<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<?php include 'template/head.php';
$num = 1    ;
$status = $ow->authenowner_status; ?>

<div class="container">
    <h4> <a href="#"></a> Manage Stadium </h4>
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">Stadium : </div>
            <div class="panel-body">

             


                <div class="container">


                     <?php include 'template/sideSetting.php'; ?>
                    <div class="col-md-9" >
                      
                            <ul class="nav nav-tabs" id="myTab">

                                <li class="active"><a href="<?php echo base_url()?>stadium/add">DashBoard</a></li>

                            </ul>
                            <div class="list-group" style="margin-top: 10;">
                                <div class="panel panel-info">
    <div class="panel-heading">
        <h3 class="panel-title">Today booking</h3>
    </div>
    <div class="panel-body">
        <h4><?=$date ?></h4>
        <?php         foreach ($totalbooking as $b) { ?>
        <div class="list-group-item">
        <div class="row-picture">
            <img class="circle" src="http://lorempixel.com/56/56/people/1" alt="icon">
        </div>
        <div class="row-content">
            <h4 class="list-group-item-heading">Tile with avatar</h4>
            <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus</p>
        </div>
    </div>
    <div class="list-group-separator"></div>
        <?php }?>
    </div>
</div>
    
   
</div>


                        


                    </div>
                </div>

                <div style="clear:both; margin-top:20px;"></div>


            </div>
        </div>
    </div>
</div>
<?php include 'template/modal.php'; ?>
<?php include 'template/footer.php'; ?>
        

<?php include 'template/footer_scrpit.php'; ?>

</body>
</html>
