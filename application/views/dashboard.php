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
    <h4> <a href="#"></a> Owner System </h4>
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">DashBoard</div>
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
            <img class="circle" src="<?php echo base_url() ?>asset/images/<?= $b->stadium_path != null ? 'stadiumpic/' . $b->stadium_path . '' : 'bad.png' ?>" alt="icon">
        </div>
        <div class="row-content">
            <div class="action-secondary">test</div>
            <h4 class="list-group-item-heading">สนาม : <?=$b->stadium_name?> <small>คอร์ด : <?=$b->court_name?></small> </h4>
            <p class="list-group-item-text">เวลา  <?=$b->start?> - <?=$b->end?></p>
            <p class="list-group-item-text">ผู้จอง <?=$b->fname?> <?=$b->lname?> โทร : <?=$b->phone?></p>
            <p class="list-group-item-text">โทร : <?=$b->phone?></p>
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
