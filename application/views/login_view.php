
<?php
include 'template/head.php';
$message = $this->session->flashdata('msg');
?>

<div class="container">
    <?=$this->session->flashdata('msg')?>
    <?php if($message!=null){?>
    <div class="alert alert-dismissable alert-success">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>Well done!</strong> You successfully read <a href="javascript:void(0)" class="alert-link">this important alert message</a>.
</div>
    <?php } ?>
    <div class="row">
        <div class="col-md-5 col-md-offset-4">
            <div class="modal-header">
                        
                        <h4 class="modal-title" id="myModalLabel">Login</h4>
                    </div>
                    <form action="<?php echo base_url()?>users/dologin" method="post"> 
                        <div class="modal-body" style="text-align: center">
                            <input type="text" class="form-control input-lg top-mar" placeholder="Email" name="email">
                            <input type="password"  class="form-control input-lg top-mar" name="pass" placeholder="Password">

                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">foget password</button>
                            <button type="submit" name="submit" class="btn btn-primary">Login</button>


                        </div>
                    </form>
        </div>
    </div>
 
</div>

<?php include 'template/modal.php'; ?>
<?php include 'template/footer.php'; ?>




<?php include 'template/footer_scrpit.php'; ?>
</body>
</html>