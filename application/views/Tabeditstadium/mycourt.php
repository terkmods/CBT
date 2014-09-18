<div class="tab-pane" id="mycourt">


    <hr>
    <h5>ตารางจองคอร์ดของฉัน</h5>
    <select class="form-control" name="court">
        <?php foreach ($court as $r) { ?>
        <option><?=$r['court_name'] ?></option>
        
        <?php } ?>

    </select>
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
                <th>court 1</th>
                <th>court 2</th>
                <th>court 3</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>8.00-9.00</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>9.00-10.00</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>10.00-11.00</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>
</div>

