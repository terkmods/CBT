  <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">

                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Login</h4>
                    </div>
                    <form action="<?php echo base_url()?>users/login" method="post"> 
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