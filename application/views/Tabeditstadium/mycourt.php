<div class="tab-pane" id="mycourt">


    <hr>
    <h5>ตารางจองคอร์ดของฉัน</h5>
    
<div class="control-group">
        
        <div class="controls">
            <div class="input-group">
                <input  type="text" id="date-pik" class="date-picker form-control" />
                <label for="date-picker-2" class="input-group-addon btn"><span class="glyphicon glyphicon-calendar"></span>

                </label>
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

