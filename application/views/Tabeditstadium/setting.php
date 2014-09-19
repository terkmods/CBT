
<div class="tab-pane active" id="p1">

    <form action="<?= base_url()?>stadium/editstadium/<?= $this->uri->segment(3) //รับค่าจาก url ใน segment / ที่ 3?>" method="post" enctype="multipart/form-data"> 

    <div class="row">
        <div class="col-md-12">
            <h5>ตั้งค่าพื้นฐาน</h5>
        </div>
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
        <hr>
        <div class="col-md-2 pull-left text-right" style="padding-top: 2px">
            <h5>URL</h5>
        </div>   
        <div class="col-md-5">
            <input class="form-control" type="text" value="<?php echo $data->stadium_url ?>" disabled  >
            <small style="color: gray">URL สำหรับเข้าชมหน้าสนามของคุณ</small>
        </div>

    </div>
    <div class="row" style="padding-top: 10px">
        <div class="col-md-2 pull-left text-right" style="padding-top: 5px">
            <h5>Name</h5>
        </div>
        <div class="col-md-5">
            <input class="form-control" type="text" value="<?php echo $data->stadium_name ?>" name='name'  >
            <small style="color: gray">Name</small>
        </div>
    </div>

    <div class="row" style="padding-top: 10px">
        <div class="col-md-2 pull-left text-right" style="padding-top: 5px">
            <h5>About Stadium </h5>
        </div>
        <div class="col-md-5">
            <textarea class="form-control" rows="5" name='about'>
                <?php echo $data->about_stadium ?>
            </textarea>
            <hr>
        </div>
    </div>
        <div class="col-md-12">
            <h3>Address</h3>
        </div>
    <div class="row" style="padding-top: 10px">

        <div class="col-md-6" style="padding-top: 10px">

                        

            <input type="text" class=" form-control input-small " value="<?php echo $data->address_no?>" name="no"><small style="color: gray">   บ้านเลขที่</small>

                            <input type="text" class=" form-control input-small top-mar " value="<?php echo $data->soi?>" name="soi"><small style="color: gray">   ซอย</small>

                            <input type="text" class=" form-control input-small top-mar " value="<?php echo $data->road?> " name="road"><small style="color: gray">  ถนน</small>

                            <input type="text" class=" form-control input-small top-mar" value="<?php echo $data->district?>" name="district"><small style="color: gray">  เขต</small>
 </div><div class="col-md-6">
                            <input type="text" class=" form-control input-small top-mar" value="<?php echo $data->subdistrict?>" name="subdistrict"><small style="color: gray">  แขวง</small>

                            <input type="text" class=" form-control input-small top-mar" value="<?php echo $data->province?>" name="province"><small style="color: gray">  จังหวัด</small>

                            <input type="text" class=" form-control input-small top-mar" value="<?php echo $data->zipcode?>" name="zip"><small style="color: gray">  รหัสไปรษณีย์</small>
                       

                    
    </div>

    </div>
       
    <h4>สิ่งอำนวยความสะดวก</h4>
    <div class="row">

        <div class="col-md-2 pull-left text-right" style="padding-top: 15px">
            สิ่งอำนวยความสะดวก

        </div>   
        <div class="col-md-6">
            <div style='margin-top: 15px'>
                <?php  foreach ($facility as $r) { //เรียกจาก $data['facility'] ?>
                <div class="col-md-6"><?php echo $r['facility']; //ใช้ return เป็น result_array?></div>
               
                <span style="margin-top: 20px"> 
                <?php } ?>
                    <input type='text' placeholder="อื่นๆ">&nbsp;<input type="submit" value="add">
                </span>
            </div>
        </div>
        
    </div>
    <div class="row">
        <input type='submit' value="Update" class="btn btn-info">
    </div>
    </form>
</div><!-- end tab1 -->
