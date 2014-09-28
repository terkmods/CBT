

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
        $(".modal-body-booking #name").html($(this).data("name"));
        $(".modal-body-booking #date").html($(this).data("atdate"));
        $(".modal-body-booking #status").html($(this).data("atstatus"));
        var path = $(this).data("atpath");
        console.log(path);
        document.getElementById("path").setAttribute("src", '<?= base_url() ?>asset/images/authen/'+path+'');
        
        
    });
</script>



</body>

</html>
