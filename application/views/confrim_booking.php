<?php include 'template/head.php';
?>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="text-center">
                <i class="fa fa-search-plus pull-left icon"></i>
                <h2> Reserve Id # <?=$reserve_id?></h2>
            </div>
            <hr>
            <div class="row">
                <div class="col-xs-12 col-md-5 col-lg-4 col-lg-offset-4">
                    <div class="panel panel-default height">
                        <div class="panel-heading">Reserve Details</div>
                        <div class="panel-body">
                            <strong>จองสนาม : <?= $stadium_send[0]->stadium_name ?></strong><br>
                            คอร์ด :<?= $court_send->court_name ?><br>
                            วันที่ : <?= $date ?>  <br>
                            เวลา : <?= $start_time_send ?> - <?= $end_time_send ?> <br>
                            ชื่อผู้จอง : <?= $user[0]->fname?>  <?= $user[0]->lname?> <br>
                           รวมเป็นเงิน <strong><?= $sumprice?></strong> บาท<br>
                        </div>
                    </div>
                    
                </div>
                            <div class="col-md-4 col-md-offset-4 text-center">
            <h4> โปรดอ่านข้อปฏิบัติการใช้บริการสนาม</h4>
            <textarea class="form-control" rows="4" cols="50"  disabled=""><?= $stadium_send[0]->rule ?></textarea>
            <div class="checkbox text-center  " >
                <label>
                    <input type="checkbox" id="myCheck"> ฉันได้อ่านข้อตกลง และยอมรับข้อปฏิบัติของสนาม
                </label>
            </div>
            
            <button type="button" class="next_button form-control" value="History booking" disabled="" onclick="location.href='<?=base_url()?>/booking/bookja'">Confrim Reserve</button>
            </div>
                
                
                
            </div>
        
    </div>
    
</div>

<?php include 'template/footer.php'; ?>

<script>
$(function () {
    $("#myCheck").change(function () {
        if ($("#myCheck").is(':checked') ) {
            $('.next_button').attr('disabled', false);
        } else {
            $('.next_button').attr('disabled', true);
        }
    });

});
</script>
<?php include 'template/footer_scrpit.php'; ?>

</body>
</html>

