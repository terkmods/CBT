
<div class="col-md-3" >
    <div class="well profile_pic">
        <div class="panel-group" id="accordion">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                            Stadium 
                        </a>
                    </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in">
                    <div class="panel-body">
                        <form role="form">
                            <label>จังหวัด</label>
                            <select class="form-control">
                                <?php foreach ($province as $row) {?>
                                <option><?= $row->province ?></option>
                                <?php } ?>
                            </select>
                            <label>เขต</label>
                            <select class="form-control">
                                <?php foreach ($district as $row) {?>
                                <option><?= $row->district ?></option>
                                <?php } ?>
                            </select>
                            </select>
                            <br>
                            <button type="submit" class="btn btn-default pull-right">ค้นหา</button>                 
                        </form>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" role="button">
                            Coach 
                        </a>
                    </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse">
                    <div class="panel-body">
                        <form role="form">
                            <label>ช่วงราคา</label>
                            <input class="form-control " type="number" placeholder="1000" > ถึง <input class="form-control " type="number" placeholder="2000" >
                            <label>ประเภทสอน</label>
                            <select class="form-control">
                                <option>เดี่ยว</option>
                                <option>กลุ่ม</option>
                            </select>
                            <br>
                            <button type="submit" class="btn btn-default pull-right">ค้นหา</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                            Friends
                        </a>
                    </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse">
                    <div class="panel-body">
                         <form role="form">
                        <label>เพศ</label>
                        <select class="form-control">
                            <option>ชาย</option>
                            <option>หญิง</option>
                        </select>
                        <label>อายุ</label>
                        <input type="number" class="form-control" placeholder="Ages">
                        <br>
                        <button type="submit" class="btn btn-default pull-right">ค้นหา</button>
                         </form>
                    </div>
                </div>

            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <!-- Button trigger modal -->
                        <a data-toggle="modal" href="#myModal" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion">Nearby Search</a>

                        <!-- Modal -->
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog" style="width: 900px">
                                <div class="modal-content" >
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title">Nearby Search</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <img src="images/25293.png" >
                                            </div>
                                            <div class="col-md-4">
                                                <div class="well well-sm">
                                                    What's Nearby
                                                </div>

                                                <div class="col-md-6"><input type="checkbox"> ห้องอาบน้ำ </div>
                                                <div class="col-md-6"> <input  type="checkbox"> ร้านอาหาร</div>
                                                <div class="col-md-6"><input type="checkbox"> ร้านค้า </div>
                                                <div class="col-md-6"> <input type="checkbox"> ที่จอดรถ</div>
                                                <div class="col-md-6"> <input type="checkbox"> โค้ชประจำ</div>

                                            </div>
                                            <div class="col-md-4" style="margin-top: 20px">
                                                <div class=" well-sm">
                                                    Result
                                                </div><div class="table-responsive">
                                                    <table class="table table-hover ">

                                                        <tbody id="items">
                                                            <tr>
                                                                <td>PY badminton<p class="help-block"><small>พุทธบูชา 32 กรุงเทพฯ </small></p></td>
                                                                <td style="text-align: right">245 m<p class="help-block"><small>02-423-443</small></p></td>

                                                            </tr>
                                                            <tr>
                                                                <td>เสริมสุข<p class="help-block"><small>พระราม 2 กรุงเทพฯ </small></p></td>
                                                                <td style="text-align: right">245 m<p class="help-block"><small>02-423-443</small></p></td>

                                                            </tr>
                                                            <tr>
                                                                <td>เสริมใจยิ่งดี<p class="help-block"><small>พุทธบูชา 32 กรุงเทพฯ </small></p></td>
                                                                <td style="text-align: right">245 m<p class="help-block"><small>02-423-443</small></p></td>

                                                            </tr>
                                                            <tr>
                                                                <td>วันทูเพลย์<p class="help-block"><small>พุทธบูชา 32 กรุงเทพฯ </small></p></td>
                                                                <td style="text-align: right">245 m<p class="help-block"><small>02-423-443</small></p></td>

                                                            </tr>
                                                            <tr>
                                                                <td>สมใจแบดมินตัน<p class="help-block"><small>พุทธบูชา 32 กรุงเทพฯ </small></p></td>
                                                                <td style="text-align: right">245 m<p class="help-block"><small>02-423-443</small></p></td>

                                                            </tr>
                                                            <tr>
                                                                <td>สมศรีนแบดมินตัน<p class="help-block"><small>พุทธบูชา 32 กรุงเทพฯ </small></p></td>
                                                                <td style="text-align: right">245 m<p class="help-block"><small>02-423-443</small></p></td>

                                                            </tr>
                                                            <tr>
                                                                <td>PY badminton<p class="help-block"><small>พุทธบูชา 32 กรุงเทพฯ </small></p></td>
                                                                <td style="text-align: right">245 m<p class="help-block"><small>02-423-443</small></p></td>

                                                            </tr>
                                                            <tr>
                                                                <td>PY badminton<p class="help-block"><small>พุทธบูชา 32 กรุงเทพฯ </small></p></td>
                                                                <td style="text-align: right">245 m<p class="help-block"><small>02-423-443</small></p></td>

                                                            </tr>
                                                            <tr>
                                                                <td>PY badminton<p class="help-block"><small>พุทธบูชา 32 กรุงเทพฯ </small></p></td>
                                                                <td style="text-align: right">245 m<p class="help-block"><small>02-423-443</small></p></td>

                                                            </tr>
                                                        </tbody>
                                                    </table>

                                                    <div class="row">
                                                        <div class="col-md-6 col-md-offset-4 text-center" style="margin-top: -40px">
                                                            <ul class="pagination" id="myPager"></ul>
                                                        </div>
                                                    </div>
                                                </div><!--/table-resp-->

                                                <div class="table-responsive">
                                                    <table class="table table-hover">

                                                        <tbody id="items">

                                                        </tbody>
                                                    </table>
                                                    <div class="row">
                                                        <div class="col-md-4 col-md-offset-4 text-center">
                                                            <ul class="pagination" id="myPager"></ul>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->
                    </h4>
                </div>


            </div>
        </div>




    </div>
</div>