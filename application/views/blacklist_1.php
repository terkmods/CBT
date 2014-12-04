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

                    <li class="active">Blacklist</li>




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



                    <div class="col-md-3 ">
                        <ul class="nav nav-pills nav-stacked" >  
                            <?php if ($this->session->userdata('role') == "owner") { ?>
                                <li >
                                    <a href="<?= base_url() ?>stadium">DashBoard </a>           
                                </li>
                                <li><a href="<?php echo base_url() ?>users/edituser/<?php echo $this->session->userdata('id'); ?>">Basic Setting</a>
                                </li>
                                <li>
                                    <a href="<?= base_url() ?>stadium/updatestadium/">Manage stadium </a>           
                                </li>

                               

                                <li><a href="<?= base_url() ?>stadium/historyBooking">History Booking stadium </a></li>
                                <li><a href="<?= base_url() ?>booking/historybooking">My Booking</a></li>
                                <li class="active">
                                    <a href="<?= base_url() ?>stadium/blacklist/<?= $this->uri->segment(3) ?>">Blacklist </a>           
                                </li>
                            <?php } ?>


                        </ul>  
                    </div>
                    <div class="col-md-9">

                        <div class="row">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="panel panel-success">
                                        <div class="panel-heading">Search</div>
                                        
                                        <form class="navbar-form navbar-left" role="search" action="<?php echo base_url() ?>stadium/resultblacklist" method="post" >
                                                <div class="form-group ">
                                                    <input type="text" class="form-control" name="value1" placeholder="Search" id="se" >
                                                </div>
                                                <button type="submit" class="btn btn-default form-control"><span class="glyphicon glyphicon-search"></span></button>
                                                <!--<a href="#" class="btn btn-success" role="button" >Add Blacklist</a>-->
                                            </form>



                                        
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="panel panel-warning">
                                        <div class="panel-heading">Sugestion</div>
                                        <div class="panel-body text-center">
                                            <div class="list-group">
                                                <?php foreach ($ch as $st) { ?>
                                                    <div class="col-md-3">
                                                        <a  href="<?php echo base_url() ?>stadium/historystadium/<?= $st->user_id ?>" ><img class="img-responsive circle thumbnail" src="<?php echo base_url() ?>asset/images/<?= $st->profilepic_path != null ? 'profilepic/' . $st->profilepic_path . '' : 'profil.jpg' ?>" /></a>
                                                        <p><span class="label label-info"><small><?= $st->fname ?></small></span></p>
                                                       <?php if ($st->status == 99) { ?>
                                                        <p> <span class="label label-danger">Blacklist</span></p>
                                                   
                                                <?php } else if ($st->status == 98) { ?>
                                                        <p>  <span class="label label-warning">Warning</span></p>
                                                <?php } else { ?>
                                                        <p> <span class="label label-success">Active</span></p>
                                                <?php } ?>
                                                        <p> <a  data-toggle="modal" href="#addblacklist" data-userid='<?$st->user_id?>'><span class="label label-warning">Add Blacklist</span></a></p> 
                                                    </div>
                                                <?php } ?>
                                                




                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    echo'<font color=red>';
                                    echo $this->session->flashdata('msg');
                                    echo '</font>'
                                    ?>
                                </div>
                            </div>


                        </div>
                        <div class="tab-content"  >
                            <div class="col-md-12">

                                <table class="table tablecompare">
                                    <thead>
                                        <tr>
                                            <th>Picture</th>
                                            <th>Name</th>
                                            <th>profile URL</th>
                                            <th>Reason</th>
                                            <th>Edit</th>
                                        </tr>
                                    </thead>
                        <!--            <tbody>
                                    <?php foreach ($blacklist as $b) { ?>
                                            <tr>
                                                <td><img class="img-circle" data-src="holder.js/140x140" alt="140x140" src="<?= base_url() ?>asset/images/profilepic/<?= $b->profilepic_path ?>" style="width: 100px; height: 100px;"></td>
                                                <td><?= $b->fname ?></td>
                                                <td><a href="<?= base_url() ?>/users/profile/<?= $b->user_id ?>">www.cbtonline.in.th/<?= $b->profile_url ?></a></td>
                                                <td><?= $b->reason ?></td>
                                                <td><a href="#" class="btn btn-danger" role="button" >Unblacklist</a></td>
                                            </tr>
                                    <?php } ?>
                                        
                                    </tbody>-->
                                </table>
                            </div>



                        </div>

                        <div style="clear:both; margin-top:20px;"></div>



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
        for (var i = 0; i < hashes.length; i++)
        {
            hash = hashes[i].split('=');
            vars.push(hash[0]);
            vars[hash[0]] = hash[1];
        }
        return vars;
    }

    console.log(getUrlVars().type);
    if (getUrlVars().type == 1) {


        $('#myTab li:eq(1) a').tab('show')
    } else if (getUrlVars().type == 4) {


        $('#myTab li:eq(4) a').tab('show')
        $("#notija").notify({
            speed: 500,
        });
        $("#notija").notify("create", {
            title: 'Add Complete',
            text: 'Addnoucment is complete '
        });
    } else if (getUrlVars().type == 5) {


        $('#myTab li:eq(4) a').tab('show')
        $("#notija").notify({
            speed: 500,
        });
        $("#notija").notify("create", {
            title: 'Delete Complete',
            text: 'News has been Delete '
        });
    }
    else if (getUrlVars().type == 'gallery') {


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
    $("#input-id").fileinput({'previewFileType': 'any', 'maxFileCount': 2});
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
function seblacklist(){
    var text = $("#se").val();
    alert(text);
    return false;
}
</script>


<?php include 'template/footer_scrpit.php'; ?>

</body>
</html>