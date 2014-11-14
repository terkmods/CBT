<!-- Modal -->

<!-- Modal ส่งหลักฐาน ->>
<!-- Modal -->
<div class="modal fade" id="approve" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="<?= base_url() ?>users/uploadevidence" method="post" enctype="multipart/form-data"> 
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Sent an evidence</h4>
            </div>
            <div class="modal-body">
                <p>To confirm stadium approval Please submit the following evidence</p>
                <p>1.Owner citizen id</p> or 
                <p>2.ใบประกอบกิจการ</p> 
                <p style="text-align:  center" class="col-md-offset-4"><input type="file" title="Search for a file to add" name="userfile"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-primary" value="Save change">
            </div>
        </div><!-- /.modal-content -->
    </form>
    </div><!-- /.modal-dialog -->
    
</div><!-- /.modal -->


<!-- Modal ลบสนาม ->>
<!-- Modal -->
<div class="modal fade" id="approve" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Sent an evidence</h4>
            </div>
            <div class="modal-body">
                <p>To confirm stadium approval Please submit the following evidence</p>
                <p>1.Owner citizen id</p> or
                <p>2.License to operate</p> 
                <p style="text-align:  center" class="col-md-offset-4"><input type="file" title="Search for a file to add"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- Modal -->
<div class="modal fade" id="upload" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="<?= base_url() ?>stadium/uploadstadiumprofile/<?= $this->uri->segment(3) //รับค่าจาก url ใน segment / ที่ 3  ?>" method="post" enctype="multipart/form-data"> 
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Upload</h4>
                </div>
                <div class="modal-body">
                    <input type="file" title="Search for a file to add" class="top-mar " name="userfile" >
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <input type="submit" value="Upload">
                </div>
            </div><!-- /.modal-content -->
        </form>
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" id="uploadprofileuser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="<?= base_url() ?>users/uploaduserprofile/<?= $this->uri->segment(3) //รับค่าจาก url ใน segment / ที่ 3  ?>" method="post" enctype="multipart/form-data"> 
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Upload</h4>
                </div>
                <div class="modal-body">
                    <input type="file" title="Search for a file to add" class="top-mar " name="userfile" >
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <input type="submit" value="Upload">
                </div>
            </div><!-- /.modal-content -->
        </form>
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



<!--Modalll jaa up cover na--> 

<div class="modal fade" id="uploadimgcover" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="<?= base_url() ?>stadium/uploadcoverphoto/<?= $this->uri->segment(3) //รับค่าจาก url ใน segment / ที่ 3  ?>" method="post" enctype="multipart/form-data"> 
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Upload</h4>
                </div>
                <div class="modal-body">
                    <input type="file" title="Search for a file to add" class="top-mar " name="userfile" >
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <input type="submit" value="Upload">
                </div>
            </div><!-- /.modal-content -->
        </form>
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--Modalll blacklist naja--> 

<div class="modal fade" id="blacklist" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="<?= base_url() ?>stadium/addBlacklist/<?= $this->uri->segment(3) //รับค่าจาก url ใน segment / ที่ 3  ?>" method="post" enctype="multipart/form-data"> 
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Add to black list </h4>
                </div>
                <div class="modal-body">
                    Reason
                    <textarea class="form-control form-group"></textarea>
                    <input type="hidden" id="usID" >
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <input type="submit" value="Send" class="btn btn-default">
                </div>
            </div><!-- /.modal-content -->
        </form>
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!--<div class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">Detail</h4>
            </div>
            <div class="modal-body">
                <p>One fine body&hellip;</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div> /.modal-content 
    </div> /.modal-dialog 
</div> /.modal -->

<div class="modal fade bs-example-modal-lg" id="viewAlthen" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="background-color: #f5f5f5">
            <form id="addcontent" action="<?=base_url()?>admin/approve" method="post" enctype="multipart/form-data">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Authentication </h4>
                </div>
                <div class="modal-body-booking" style="background-color: white;padding:30px">
                    <div class="row">
                        <div class="col-md-12">
                            <legend style="font-style: italic;text-align: right">Authentication Detail</legend>
                        </div>
                        <div class="col-md-4" style="text-align: center;margin-bottom: 30px;margin-left: 60px">
                            <!--<h5 style="text-align: center"> Image</h5>-->
                            <img id="path" style="width: 340px;height: 370px;" src="<?= base_url() ?>asset/images/authen/" class="img-thumbnail">
                        </div>
                        <div class="col-md-7" style="margin-top: 0px">
                            <legend style="font-style: italic;text-align: left">Information</legend>
                            <h5 style="text-align: left">Owner ID : <span id="bookID" class="pull-right"></span></h5>
                            <h5 style="text-align: left">Name : <span id="name" class="pull-right"></span></h5>  
                            <h5 style="text-align: left">Stadium : <span id="name" class="pull-right">Pulling all of the stadium that the owner had</span></h5>  
                            <h5 style="text-align: left">Authentication Date :<span id="date" class="pull-right">2014-09-08 22:50:43</span></h5>
                            <br>
                            <input type="hidden"  id="ownerid" value="" name="owid">
                            <legend style="font-style: italic;text-align: left">Change Status</legend>
                             <div class="col-md-3" style="margin-left: -15px">
                                 
                                 <h5 style="text-align: left">Status :</h5>
                             </div>
                            <div class="col-md-4" style="margin-left: -65px">
                            <select class="form-control " name="change"  >
                                
                                <option id="status"></option>
                                <option value="99">Reject</option>
                                <option value="2">Approve</option>                                                   
                            </select>
                            </div> 
                              <br>  
                            <br>
                             <h5 style="text-align: left">Massage</h5>
                            <textarea class="form-control" rows="3" name="reason"></textarea>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="modal-footer" style="text-align: center">
                    <span id="ajaxscript"></span>
                    <button id="close_modal" type="button" class="btn1 btn1-danger" data-dismiss="modal" style="width: 20%">Close</button>
                    <input type="submit" value="Send" class="btn btn-default">
                </div>
            </form>
        </div>
    </div>
</div>



