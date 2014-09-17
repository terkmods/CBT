<div class="tab-pane" id="mycourt">


    <hr>
    <h5>ตารางจองคอร์ดของฉัน</h5>
    <select class="form-control" name="court">
        <option>Court 1 </option>
        <option>Court 2 </option>
        <option>Court 3 </option>

    </select>
<div class="form-group">
    <label class="col-md-2 control-label" for="dtp_input2">Date Only</label>
 
    <div class="input-group date form_date col-md-5" data-date="" data-date-format="dd MM yyyy"
    data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
      <input class="form-control" readonly size="16" type="text" value=""> <span class=
      "input-group-addon glyphicon glyphicon-remove"></span> <span class=
      "input-group-addon glyphicon glyphicon-calendar"></span>
    </div><input id="dtp_input2" type="hidden" value=""><br>
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
<script type="text/javascript">
    $(document).ready(function () {
        $("#dp1").change(function () {
            $.ajax({
                type: "POST",
                url: "booking/showTablebook",
                data: {date: $("#date").val()}
            }).done(function (msg) {
               alert(msg);
                //aTable.fnDraw();
            });
        });

    }
</script>