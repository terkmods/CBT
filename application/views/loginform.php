<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

    <?php include 'template/head.php'; ?>
    
           
            <div class="container">

                <div class="row">
                    <div class="modal-header">
                        
                        <h4 class="modal-title" id="myModalLabel">Login</h4>
                    </div>
                    <form action="<?php echo base_url()?>index.php/users/feed" method="post"> 
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
        
    <?php include 'template/modal.php'; ?>
<?php include 'template/footer.php'; ?>

<?php include 'template/footer_scrpit.php'; ?>

</body>
</html>