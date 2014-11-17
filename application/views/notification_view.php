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
    <h4> <a href="#"></a>   <span id="flashmsg"><font style="color: green"></font></span></h4> 
    <div class="row">
        <div class="panel panel-default"  style="margin-top: 20px">
            <div class="panel-heading">
            <ul class="breadcrumb" style="margin-bottom: 1px;">
                    <li class="active">Notification</li>
                </ul>
            </div>
            <div class="panel-body">



                <div class="container">


                    <?php include 'template/sideSetting.php'; ?>
                    <div class="col-md-9">
                        <?php foreach($noti as $n){ ?>
                        <div class="list-group">
                            <div class="list-group-item">
                                <div class="row-picture">
                                    <img class="circle" src="http://cbt.backeyefinder.in.th/asset/images/<?=$n->profilepic_path != '' ? 'profilepic/'.$n->profilepic_path : 'profil.jpg'?>" alt="icon" >
                                </div>
                                <div class="row-content">
                                    <h4 class="list-group-item-heading"><?=$n->fname?></h4>
                                    <p class="list-group-item-text"><?=$n->text?> ,<?=$n->stadium_name?></p>
                                     <p class="list-group-item-text"><?=$n->date?> </p>
                                </div>
                            </div>
                            <div class="list-group-separator"></div>
                        </div>
                        <?php } ?>
                        <?php echo $this->pagination->create_links(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'template/modal.php'; ?>

    <div style="clear:both;"></div>

    <!-- set the container hidden to avoid a flash of unstyled content
    when the page first loads -->
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
    <?php include 'template/footer_scrpit.php'; ?>

    <script>
        function del() {
            alert("Are you sure to Delete");
        }
    </script>
</body>
</html>

