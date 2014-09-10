   <?php include 'template/headadmin.php'; ?>  

            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Owner</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                All Owner
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
                                                <th>Authentication</th>
                                                <th>Status</th>


                                            </tr>
                                        </thead>
                                        <tbody>
                                             <?php foreach ($data as $row) { ?>
                                            <tr >
                                                <td><?= $row->owner_id ?></td>
                                                <td><?= $row->fname ?>    <?= $row->lname ?></td>
                                                <td><?= $row->email ?></td>
                                                <td ><button type="button" class="btn btn-info">View</button></td>
                                                <td>
                                                   
                                                    <select class="form-control">
                                                        <option>Approve</option>
                                                        <option>Reject</option>
                                                        <option>Wait</option>                                                   
                                                    </select>
                                                </td>

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
           <?php include 'template/footeradmin.php'; ?>  