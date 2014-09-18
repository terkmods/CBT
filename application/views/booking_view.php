<?php include 'template/head.php';
 ?>
<div class="container">
<div class="tab-pane" id="mycourt">


    <hr>
    
    
<div class="control-group">
        
        <div class="controls">
            <div class="input-group">
                <label for="date-pik" class="input-group-addon btn">
<span class="glyphicon glyphicon-calendar"></span> เลือกวัน
                </label>
                <input  type="text" id="date-pik" class="date-picker form-control" />
                
            </div>
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                  <?php $i=0; foreach ($court as $r) { ?>
        <th><?=$r['court_name'] ?></th>
        
        <?php $i++;} ?>
            </tr>
        </thead>
        <tbody id="runtime">
            <tr>
                <td>No select</td>
        
            </tr>
            
        </tbody>
    </table>
</div>
</div>

    <?php include 'template/modal.php'; ?>
<?php include 'template/footer.php'; ?>