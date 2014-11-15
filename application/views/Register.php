
<?php
include 'template/head.php';
$message = $this->session->flashdata('msg');
?>


        <div>
            <div class="container">
                <h3 class="text-center">Register </h3>
               
                <div class="row top-mar">
                   
                    <div class="col-md-8 col-md-offset-4">
                        <form action="reg/register" method="post">
                            <h3>Who are you? </h3><br>
                            <div class="col-md-12">
                         	<div class="col-md-3">
        				<img src="<?=base_url()?>asset/images/userspic/user.jpg"  class="img-responsive img-radio active">
        				<button type="button" class="btn btn-primary btn-radio ">User</button>
                                        <input type="radio" name="typeuser" id="optionsRadios1" value="user" class="hidden" required="" checked="">
                                </div>
                            <div class="col-md-3">
        				<img src="<?=base_url()?>asset/images/userspic/owner.jpg" class="img-responsive img-radio">
        				<button type="button" class="btn btn-primary btn-radio">Owner</button>
        				<input type="radio" name="typeuser" id="optionsRadios2" value="owner" class="hidden">
                                </div>
                            </div>
                            
                            
                                                                                                             
                            <p></p> 
                            <div class="col-xs-8 ">
                            <p>www.cbtonline.in.th/user<input type="text" class="input-url control" name="url" placeholder="Profile URL (limit 4-24)" required=""></p>
                            </div>
                            <div class="col-xs-8">
                                <input type="email" class="form-control input-lg top-mar" placeholder="Email" name="email" required></div>
                            <div class="clear"></div>
                            <div class="col-xs-8"><input type="password"  class="form-control input-lg top-mar" name="pass" placeholder="Password" required></div>
                            <div class="clear"></div>
                            <div class="col-xs-8"><input type="password"  class="form-control input-lg top-mar" name="pass-con" placeholder="Confirm Password" required></div>
                            <div class="clear"></div>
                            <div class="col-xs-8"><input type="tel"  class="form-control input-lg top-mar" name="tel" placeholder="mobile-phone" required></div>
                            <div class="clear"></div>
                            <hr>
                            <p class="top-mar"><button type="submit" name="SIGN_UP" class="btn btn-info btn-lg">Create your account</button></p>
                        </form>
                    </div>
                </div>
            </div>

        </div>

        <div style="clear:both;"></div>
       <?php include 'template/footer.php'; ?>
<?php include 'template/modal.php'; ?>



<?php include 'template/footer_scrpit.php'; ?>
        <script>
            $(function () {
                
    $('.btn-radio').click(function(e) {
        $('.btn-radio').not(this).removeClass('active')
    		.siblings('input').prop('checked',false)
            .siblings('.img-radio').css('opacity','0.5');
    	$(this).addClass('active')
            .siblings('input').prop('checked',true)
    		.siblings('.img-radio').css('opacity','1');
    });
});
        </script>
    </body>
</html>