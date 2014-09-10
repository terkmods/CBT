<?php include 'template/head.php'; ?>

<div class="container " style="margin-top: 20px;">
    <div class="row">
         <?php include 'template/sidefeed.php'; ?>
        
             <a href="compare.html" class="compare"> <span class="glyphicon glyphicon-tasks"></span> &nbsp;Compare</a>
         <div class="col-md-8 pull-right">
                    <div id="pin">
                        <div id="list">
                            
                            <?php foreach ($stadium as $row) {
                                                          echo ' 
                            <div class="item">
                                <div class="caption">
                                    <img src="'?><?php echo base_url()?><?php echo '/asset/images/stadiumpic/'.$row->stadium_path.'" alt="..." style="width: 320px;height: 200px" >
                                    <hr>
                                    <h5>ชื่อสนาม</h5> <h4>'.$row->stadium_name.'</h4>
                                    <div class="line1">
                                        คะแนน :  <span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star-empty"></span></div> 
                                    <div class="line1">  <a href="#"><span class="glyphicon glyphicon-map-marker"></span></a>ที่อยู่ ซอยสุขุมวิท 93 แขวงบางจาก เขตพระโขนง กทม 10260 </div>
                                    <div class="line1">จำนวนคอร์ด 6 คอร์ด 
                                        | ประเภทพิ้น  ไม้ปาร์เก้ และ พื้นยาง </div>
                                    <div class="line1"> <span class="glyphicon glyphicon-earphone"> </span>&nbsp; 09-2302000 &nbsp;  <span class="glyphicon glyphicon-dashboard"></span> &nbsp; จ.- ศ. &nbsp;&nbsp;เวลา 9.00-22.00</div>
                                    <div class="line1">  สิ่งอำนวยความสะดวก <img src="images/bath.png" width="20" alt="มีห้องอาบน้ำ" title="มีห้องอาบน้ำ">|
                                        <img src="images/iconbad.png" width="20" alt="มีครูสอน" title="มีครูสอน">|
                                        <img src="images/f1.png" width="20" alt="มีก๊วนตี" title="มีก๊วนตี">|
                                        <img src="images/parking_car.svg" width="20" alt="มีที่จอดรถ" title="มีที่จอดรถ">|
                                        <img src="images/food.gif" width="20" alt="มีที่จอดรถ" title="มีที่จอดรถ"></div>
                                    <div class="line1">
                                        ราคา 150/ชม. สำหรับ คอร์ดที่ 1-6 ทุกวัน ทุกเวลา 
                                    </div>                            
                                </div>
                            </div>'
                           ; }?>
                            <!-- ... -->
                             <div class="item">


                                <div class="caption">
                                    <img src="images/grass.jpg" alt="..." style="width: 320px;height: 200px" >
                                    <hr>
                                    <h5>ชื่อสนาม</h5> <h4>สนามแบดมินตัน วัน ทู เพลย</h4>
                                    <div class="line1">
                                        คะแนน :  <span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star-empty"></span></div> 
                                    <div class="line1">  <a href="#"><span class="glyphicon glyphicon-map-marker"></span></a>ที่อยู่ ซอยสุขุมวิท 93 แขวงบางจาก เขตพระโขนง กทม 10260 </div>
                                    <div class="line1">จำนวนคอร์ด 6 คอร์ด 
                                        | ประเภทพิ้น  ไม้ปาร์เก้ และ พื้นยาง </div>
                                    <div class="line1"> <span class="glyphicon glyphicon-earphone"> </span>&nbsp; 09-2302000 &nbsp;  <span class="glyphicon glyphicon-dashboard"></span> &nbsp; จ.- ศ. &nbsp;&nbsp;เวลา 9.00-22.00</div>
                                    <div class="line1">  สิ่งอำนวยความสะดวก <img src="images/bath.png" width="20" alt="มีห้องอาบน้ำ" title="มีห้องอาบน้ำ">|
                                        <img src="images/iconbad.png" width="20" alt="มีครูสอน" title="มีครูสอน">|
                                        <img src="images/f1.png" width="20" alt="มีก๊วนตี" title="มีก๊วนตี">|
                                        <img src="images/parking_car.svg" width="20" alt="มีที่จอดรถ" title="มีที่จอดรถ">|
                                        <img src="images/food.gif" width="20" alt="มีที่จอดรถ" title="มีที่จอดรถ"></div>
                                    <div class="line1">
                                        ราคา 150/ชม. สำหรับ คอร์ดที่ 1-6 ทุกวัน ทุกเวลา 
                                    </div>
                                    <p><a href="#" class="btn btn-primary" role="button" onclick="window.location.href = 'owner.html'">Button</a></p>
                                </div>


                            </div>
                            
                        </div>
                    </div>
                    <div style="clear:both;"></div>
                </div>

        
    </div>
</div>

     <?php include 'template/footer.php'; ?>  