

<!-- jQuery Version 1.11.0 -->
<script src="<?= base_url() ?>asset/js/jquery-1.11.0.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?= base_url() ?>asset/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="<?= base_url() ?>asset/js/plugins/metisMenu/metisMenu.min.js"></script>



<!-- DataTables JavaScript111 -->
<script src="<?= base_url() ?>asset/js/plugins/dataTables/jquery.dataTables.js"></script>
<script src="<?= base_url() ?>asset/js/plugins/dataTables/dataTables.bootstrap.js"></script>



<!-- Custom Theme JavaScript -->
<script src="<?= base_url() ?>asset/js/sb-admin-2.js"></script>

<script>
    $(document).ready(function () {
        $('#dataTables-example').dataTable();
    });
</script>


<script>
    $(document).on("click", ".viewdetail", function () {
        
        $(".modal-body-booking #bookID").html($(this).data("bookid"));
        $(".modal-body-booking #bookID").html($(this).data("bookid"));
        
    });
</script>

<!--data-bookID="' . $row["bookingID"] . '" data-name="' . $row["firstName"] . " " . $row["lastName"] . '" data-date="' . $row["date"] . '" data-expiredate="' . $row["expire_date"] . '" data-status="' . $row["booking_status"] . '" data-dormname="' . $row["dormName"] . '" data-room="' . $row["roomType"] . '" data-slip="' . $row["slip"] . '" data-totalprice="' . $row["totalPrice"] . '" data-transfername="' . $row["transfer_name"] . '" data-transfertime="' . $row["transfer_time"] . '" data-toggle="modal" data-target=".bs-example-modal-lg">View Detail</button></td>';-->-->

</body>

</html>
