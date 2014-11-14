<?php include 'template/headadmin.php'; ?> 

<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
                <!-- /input-group -->
            </li>
            <li>
                <a href="<?php echo base_url() ?>admin"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>
            <li>
                <a href="<?php echo base_url() ?>admin/stadium"><i class="fa fa-table fa-fw"></i> Stadium</a>   
            </li>
            <li>
                <a href="<?php echo base_url() ?>admin/user"><i class="fa fa-user fa-fw"></i> User</a>
            </li>
            <li class="active">
                <a href="#"><i class="fa fa-user fa-fw"></i> Owner<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li class="active">
                        <a  href="<?php echo base_url() ?>admin/owner"> All Owner </a>
                    </li>
                    <li>
                        <a class="active" href="<?php echo base_url() ?>admin/owner_ap"> Approve Owner</a>
                    </li>                                
                </ul>
                <!-- /.nav-second-level -->
            </li>

            <li>
                <a href="<?php echo base_url() ?>admin/blacklist"><i class="fa fa-user fa-fw"></i> Blacklist</a>
            </li>
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->
</nav>

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Approve Owner</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Approve Owner
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>

                                    <th>Owner Id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>Authentication</th>
                                    <th>Profile</th>
                                    


                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data as $row) { ?>
                                    <tr >
                                        <td><?= $row->owner_id ?></td>
                                        <td><?= $row->fname ?>    <?= $row->lname ?></td>
                                        <td><?= $row->email ?></td>
                                        <td><?= $row->authenowner_status ?></td> 
                                        <td ><button type="button"  class="btn btn-info viewdetail" role="button" data-toggle="modal" data-target="#viewAlthen" 
                                                     data-bookid="<?= $row->owner_id ?>"
                                                     data-name="<?= $row->fname ?>    <?= $row->lname ?></td>"
                                                     data-atdate="<?= $row->autherowner_date ?>"
                                                     data-atstatus="<?= $row->authenowner_status ?>"
                                                     data-atpath="<?= $row->authenowner_path ?>"
                                                     >View</button></td>
                                        
                                        <td><a href="<?= base_url() ?>users/profile/<?= $row->user_id ?>" class="btn ">View</a></td> 
                                    </tr>
                                <?php } ?>




                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->

                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->

</div>
<!-- /.row -->
</div>
<!-- /#page-wrapper -->
<?php include 'template/modal.php'; ?>
<?php include 'template/footeradmin.php'; ?>  
