<div class="tab-pane active" id="p1">

    <form action="<?= base_url() ?>stadium/editstadium/<?= $this->uri->segment(3) //รับค่าจาก url ใน segment / ที่ 3  ?>" method="post" enctype="multipart/form-data"> 

        <div class="row" style="padding-top: 10px">

            <div class="col-md-2 pull-left text-right" style="padding-top: 2px">
                <h5>Profile Picture Stadium</h5>
            </div> 
            <div class="col-md-10">
                <p>
                    <img src="<?= base_url() ?>asset/images/stadiumpic/<?= $data->stadium_path ?>" width="200" alt="..." class="img-thumbnail top-mar">
    <!--                <input type="file" title="Search for a file to add" class="top-mar " name="userfile" >-->

                </p>
                <a class="btn btn-primary btn-lg pull-left" role="button" data-toggle="modal" data-target="#upload">Upload Now</a>
            </div>

            <div class="col-md-2 pull-left text-right" style="padding-top: 10px">
                <h5>URL</h5>
            </div>   
            <div class="col-md-5" style="padding-top: 10px">
                <input class="form-control" type="text" value="<?php echo $data->stadium_url ?>" disabled  >
                <small style="color: gray">URL to view your stadium profile</small>
            </div>

        </div>
        <div class="row" style="padding-top: 10px">
            <div class="col-md-2 pull-left text-right" style="padding-top: -3px">
                <h5>Stadium Name</h5>
            </div>
            <div class="col-md-5">
                <input class="form-control" type="text" value="<?php echo $data->stadium_name ?>" name='name'  >

            </div>
        </div>

        <div class="row" style="padding-top: 10px">
            <div class="col-md-2 pull-left text-right" style="padding-top: 5px">
                <h5>About Stadium </h5>
            </div>
            <div class="col-md-5">
                <textarea class="form-control" rows="5" name='about' id="em2">
                    <?php echo $data->about_stadium ?>
                </textarea>

            </div>
        </div>
        <div class="row" style="padding-top: 10px">
            <div class="col-md-2 pull-left text-right" style="padding-top: -3px">
                <h5>Rule</h5>
            </div>
            <div class="col-md-5">
                <textarea class="form-control" rows="4" name='rule'>
                    <?php echo $data->rule ?>
                </textarea>

                <hr>
            </div>
        </div>

        <div class="col-md-12">
            <h3>Address</h3>
        </div>
        <div class="row" style="padding-top: 10px">

            <div class="col-md-6" style="padding-top: 10px">



                <input type="text" class=" form-control input-small " value="<?php echo $data->address_no ?>" name="no" required><small style="color: gray">   house no.</small>

                <input type="text" class=" form-control input-small top-mar " value="<?php echo $data->soi ?>" name="soi" required><small style="color: gray">   alley</small>

                <input type="text" class=" form-control input-small top-mar " value="<?php echo $data->road ?> " name="road" required><small style="color: gray">  road</small>

                <input type="text" class=" form-control input-small top-mar" value="<?php echo $data->district ?>" name="district" required><small style="color: gray">  district</small>
            </div><div class="col-md-6">
                <input type="text" class=" form-control input-small top-mar" value="<?php echo $data->subdistrict ?>" name="subdistrict" required><small style="color: gray"> subdistrict</small>

                <input type="text" class=" form-control input-small top-mar" value="<?php echo $data->province ?>" name="province" required><small style="color: gray">  province</small>

                <input type="text" class=" form-control input-small top-mar" value="<?php echo $data->zipcode ?>" name="zip" required><small style="color: gray">  zip code</small>



            </div>

        </div>
        <div class="row" style="padding-top: 20px">
            
            <?=$data->lat ==null ? '
                Pin on the map to located your stadium
            <div id="panel">
            
                <input id="address" type="text"   placeholder="Enter a location">
                
                
            </div>' : 'If you want to change your location, please move pin marker' ;?>
            <div id="map-canvas" ></div> 
        </div>

        <h4>Facility</h4>
        <div class="row">

            <div class="col-md-2 pull-left text-right" style="padding-top: 15px">
                Facility

            </div>   
            <div class="col-md-6">
                <div style='margin-top: 15px'>
                    <?php foreach ($facility as $r) { //เรียกจาก $data['facility'] ?>
                        <div class="col-md-6"><?php echo $r['facility']; //ใช้ return เป็น result_array  ?></div>

                        <span style="margin-top: 20px"> 
                        <?php } ?>
                        <input type='text' placeholder="other">&nbsp;<input type="submit" value="add">
                    </span>
                </div>
            </div>

        </div>
        <div class="row">
            <input type='submit' value="Update" class="btn btn-info">
        </div>
    </form>
</div><!-- end tab1 -->
