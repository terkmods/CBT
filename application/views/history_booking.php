<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<?php
include 'template/head.php';
?>

<div class="container">
    <h4> <a href="#">หน้าหลัก</a> /Manage Stadium </h4>
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">Account Settings</div>
            <div class="panel-body">




                <div class="container">
                    <?php include 'template/sideSetting.php'; ?>
                    <div class="col-md-9">
                        <div class="row">
                            <form method="post" action="<?=base_url()?>booking/cancelbooking">
                                <table class="table tablecompare">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>เลขที่จอง</th>
                                            <th>วันที่จอง </th>

                                            <th>สนาม</th>
                                            <th>คอร์ด</th>
                                            <th>เวลา</th>
                                            <th>จำนวน ชั่วโมง</th>

                                            <th></th>
                                        </tr>
                                    </thead>

                                    <tbody>



                                        <?php foreach ($allbooking as $r) { ?>
                                            <tr>
                                                <td></td>
                                                <td><?= $r->reserve_id ?><input type="hidden" name="rId" value="<?= $r->reserve_id ?>"></td>
                                                <td><?= substr($r->start_time, 0, 10) ?></td>
                                                <td><?= $r->stadium_name ?></td>
                                                <td><?= $r->court_name ?></td>
                                                <td><?= substr($r->start_time, 10, 11) ?>-<?= substr($r->end_time, 10, 11) ?></td>
                                                <?php
                                                $date = $r->start_time;
                                                $date = strtotime($date);
                                                ?>
                                                <td><?= substr($r->end_time, 10, 11) - substr($r->start_time, 10, 11) ?>ชม. <?= date('i', $date) ?> นาที</td>
                                                <td><a href="<?=base_url()?>booking/cancelbooking/<?= $r->reserve_id ?>" class="form-control btn-danger btn-sm" onclick="del()"> cancel</a>
<!--                                                    <input type="submit" value="cancel" class="form-control btn-danger btn-sm"></td>-->
                                            </tr>
                                        <?php } ?>
                                    </tbody>    

                                </table>  
                            </form>

                        </div>


                    </div>
                </div>

                <div style="clear:both; margin-top:20px;"></div>


            </div>
        </div>
    </div>
</div>
<?php include 'template/modal.php'; ?>
<?php include 'template/footer.php'; ?>
        

