<div class="tab-pane" id="addcourt">

    <div class="col-md-10 col-md-offset-1" style="padding-top: 2px;margin-top: 10px">

        <form class="form-horizontal well" method="post" role="form" action="<?= base_url() ?>stadium/addcourt/<?= $this->uri->segment(3) ?>">
            <div class="form-group">
                <label for="inputEmail1" class="col-lg-2 control-label">Court</label>
                <div class="col-lg-10">
                    <div class="col-md-5">
                        <input type="text" class="form-control" name="courtname" placeholder="Court Name" required="">
                    </div>
                    <label for="inputPassword1" class="col-lg-2 control-label">Floor Type</label>
                    <div class="col-md-4" style="padding-top: 5px">
                        <select class="form-control" name="type">
                            <option>พื้นปาร์เก้</option>
                            <option>พื้นปูน </option>
                            <option>พื้นยาง </option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="inputPassword1" class="col-lg-2 control-label">Price</label>
                <div id="add" >
                    <div class="col-lg-10" >    
                        <div class="col-md-3" style="margin-top:10px ;padding: 0; ">  
                            <h5>จันทร์</h5> 
                        </div>
                        <div class="col-md-3" style="margin-top:10px ;padding:  0; ">
                            <input type="number" class="form-control" id="inputPassword1" placeholder="ราคา/ชั่วโมง " name="price1">
                        </div>

                    </div> <!--add-->
                    <div class="col-lg-10 col-md-offset-2">    
                        <div class="col-md-3" style="margin-top:10px ;padding: 0; ">  
                            <h5>อังคาร</h5> 
                        </div>
                        <div class="col-md-3" style="margin-top:10px ;padding:  0; ">
                            <input type="number" class="form-control" id="inputPassword1" placeholder="ราคา/ชั่วโมง " name="price1">
                        </div>

                    </div> <!--add-->
                    <div class="col-lg-10 col-md-offset-2">    
                        <div class="col-md-3" style="margin-top:10px ;padding: 0; ">  
                            <h5>พุธ</h5>  
                        </div>
                        <div class="col-md-3" style="margin-top:10px ;padding:  0; ">
                            <input type="number" class="form-control" id="inputPassword1" placeholder="ราคา/ชั่วโมง " name="price1">
                        </div>   
                    </div> <!--add-->
                    <div class="col-lg-10 col-md-offset-2">    
                        <div class="col-md-3" style="margin-top:10px ;padding: 0; ">  
                            <h5>พฤหัสบดี</h5> 
                        </div>
                        <div class="col-md-3" style="margin-top:10px ;padding:  0; ">
                            <input type="number" class="form-control" id="inputPassword1" placeholder="ราคา/ชั่วโมง " name="price1">
                        </div>
                    </div> <!--add-->
                    <div class="col-lg-10 col-md-offset-2">    
                        <div class="col-md-3" style="margin-top:10px ;padding: 0; ">  
                            <h5>ศุกร์</h5> 
                        </div>
                        <div class="col-md-3" style="margin-top:10px ;padding:  0; ">
                            <input type="number" class="form-control" id="inputPassword1" placeholder="ราคา/ชั่วโมง " name="price1">
                        </div>
                    </div> <!--add-->
                    <div class="col-lg-10 col-md-offset-2">    
                        <div class="col-md-3" style="margin-top:10px ;padding: 0; ">  
                            <h5>เสาร์</h5> 
                        </div>
                        <div class="col-md-3" style="margin-top:10px ;padding:  0; ">
                            <input type="number" class="form-control" id="inputPassword1" placeholder="ราคา/ชั่วโมง " name="price1">
                        </div>
                    </div> <!--add-->
                    <div class="col-lg-10 col-md-offset-2">    
                        <div class="col-md-3" style="margin-top:10px ;padding: 0; ">  
                            <h5>อาทิตย์</h5> 
                        </div>
                        <div class="col-md-3" style="margin-top:10px ;padding:  0; ">
                            <input type="number" class="form-control" id="inputPassword1" placeholder="ราคา/ชั่วโมง " name="price1">
                        </div>
                    </div> <!--add-->


                </div>
            </div>

            

            <div class="form-group">
                <div class="col-lg-offset-1 col-lg-10" style="">
                    <button type="submit" class="btn btn-primary">Add Court</button>
                </div>
            </div>
        </form>


    </div>
    <div class="row">
        <div class="col-md-12" style="margin-top: 17px">


            <h5>Court Total : <?= $total->courtnum ?> court</h5>
            <form action="<?php echo base_url() ?>stadium/delcourt" method="post">
                <table class="table tablecompare">
                    <thead style="text-align: center">

                        <tr>

                            <th style="text-align: center">Court Name</th>

                            <th style="text-align: center">Price Monday-Friday</th>
                            <th style="text-align: center">Price Saturday-Sunday</th> 
                            <th style="text-align: center">Floor Type</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php foreach ($court as $ct) { ?>
                            <tr >

                                <td><?= $ct['court_name'] ?></td>

                                <td><?= $ct['m_f_price'] ?> Bath</td>
                                <td><?= $ct['st_sun_price'] ?> Bath</td>

                                <td><?= $ct['type'] ?></td>
                                <td><a href=" <?php echo base_url() ?>stadium/delcourt/<?= $ct['court_id'] ?>/<?= $ct['stadium_id'] ?> " class="btn btn-danger btn-sm ">Cancle</a></td>
                            </tr>

                        <?php } ?> 
                    </tbody>
                </table>
            </form>


        </div>
    </div>
</div>
