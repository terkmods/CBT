<?php include 'template/head.php';
?>
<div class="container">
    <div class="row">



        <div class="col-md-12 text-center">
            <fieldset>
                <legend>  การจองเสร็จสมบูรณ์</legend>
                <p>จองสนาม : <?= $stadium[0]->stadium_name ?></p>
                <p>คอร์ด :<?= $court->court_name ?></p>
                <p>วันที่ : <?= $date ?>  </p>
                <p>เวลา : <?= $start_time ?> - <?= $end_time ?>  </p>
            </fieldset>
            <div class="col-md-4 col-md-offset-4 text-center">
            <h4> โปรดอ่านข้อปฏิบัติการจองของสนาม</h4>
            <textarea class="form-control" rows="4" cols="50"  disabled=""><?= $stadium[0]->rule ?></textarea>
            <div class="checkbox text-center  " >
                <label>
                    <input type="checkbox" id="myCheck"> ฉันได้อ่านข้อตกลง และยอมรับข้อปฏิบัติของสนาม
                </label>
            </div>
            <button type="button" class="next_button form-control" value="History booking" disabled="" onclick="location.href='<?=base_url()?>/booking/historybooking'">History Booking</button>
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

